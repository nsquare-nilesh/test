<?php

class SJB_TwoCheckOut extends SJB_PaymentGateway
{
	public $amountField = 'total';

	public function __construct($gateway_info = array())
	{
		parent::__construct($gateway_info);
		$this->details = new SJB_TwoCheckOutDetails($gateway_info);
	}

	function isValid()
	{
		$properties = $this->details->getProperties();
		$two_co_account_id = $properties['2co_account_id']->getValue();
		return !empty($two_co_account_id);
	}

	function getUrl()
	{
		$isSandbox = $this->details->getProperty('sandbox')->value;
		if ($isSandbox) {
			return 'https://sandbox.2checkout.com/checkout/purchase';
		}
		return 'https://www.2checkout.com/checkout/purchase';
	}

	function buildTransactionForm($invoice)
	{
		if (count($invoice->isValid()) == 0) {
			$two_checkout_url = $this->getUrl();
			$form_fields = $this->getFormFields($invoice);
			$form_hidden_fields = '';
			foreach ($form_fields as $name => $value){
				$value = htmlentities($value, ENT_QUOTES, "UTF-8");
				$form_hidden_fields .= "<input type='hidden' name='{$name}' value='{$value}' />\r\n";
			}

			$gateway['hidden_fields'] 	= $form_hidden_fields;
			$gateway['url'] 			= $two_checkout_url;
			$gateway['caption']			= $this->getPropertyValue('caption');
            $gateway['id'] = $this->getPropertyValue('id');

			return $gateway;
		}
		return null;
	}

	function getFormFields($invoice)
	{
		$form_fields = array();
		$properties  = $this->details->getProperties();
		$id = $properties['id']->getValue();

		$form_fields['sid'] =  $properties['2co_account_id']->getValue();
		$form_fields['mode'] = '2CO';
		$form_fields['merchant_order_id'] 	= $invoice->getSID();
		$i = 1;
		$items = $invoice->getPropertyValue('items');
		$taxInfo = $invoice->getPropertyValue('tax_info');

		foreach ($items['products'] as $key => $product) {
            $productInfo = $invoice->getItemValue($key);
            $productInfo['name'] = SJB_I18N::getInstance()->gettext(null, $productInfo['name']);
            $form_fields['li_'.$i.'_name'] = $productInfo['name'];
            $form_fields['li_'.$i.'_product_id'] = $product;
			$form_fields['li_'.$i.'_type'] = 'product';
			$form_fields['li_'.$i.'_quantity'] 	= 1;
			$form_fields['li_'.$i.'_price'] = sprintf('%.02f', $items['amount'][$key]);
			if ($taxInfo) {
				$form_fields['li_'.$i.'_price'] += SJB_TaxesManager::getTaxAmount($form_fields['li_'.$i.'_price'], $taxInfo['tax_rate']);
			}
			$form_fields['li_'.$i.'_tangible'] = 'N';
			$i++;
		}

		$user = SJB_UserManager::createTemplateStructureForCurrentUser();
		$form_fields['first_name']        = isset($user['FirstName'])	? $user['FirstName'] : '';
		$form_fields['last_name']         = isset($user['LastName'])	? $user['LastName'] : '';
		$form_fields['street_address']    = '';
		$form_fields['city']              = isset($user['Location']['City'])		? $user['Location']['City'] : '';
		$form_fields['state']             = isset($user['Location']['State'])		? $user['Location']['State'] : '';
		$form_fields['zip']               = isset($user['Location']['ZipCode'])		? $user['Location']['ZipCode'] : '';
		$form_fields['country']           = isset($user['Location']['Country'])		? $user['Location']['Country'] : '';
		$form_fields['email']             = isset($user['email'])		? $user['email'] : '';
		$form_fields['phone']             = isset($user['PhoneNumber'])	? $user['PhoneNumber'] : '';
		$form_fields['x_receipt_link_url']		= SJB_System::getSystemSettings('SITE_URL') . "/system/payment/callback/{$invoice->getSID()}/{$id}/";

		return $form_fields;
	}

	function getPaymentFromCallbackData($callback_data, $invoice_sid)
	{
		$invoiceStatus = SJB_Invoice::INVOICE_STATUS_PENDING;
		$invoice_sid = SJB_Array::get($callback_data, 'merchant_order_id', $invoice_sid);

		if (is_null($invoice_sid)) {
			$this->errors['INVOICE_ID_IS_NOT_SET'] = 1;
			return null;
		}

		$invoice = SJB_InvoiceManager::getObjectBySID($invoice_sid);

		if (is_null($invoice)) {
			$this->errors['NONEXISTED_INVOICE_ID_SPECIFIED'] = 1;
			return null;
		}

		if ($invoice->getStatus() != SJB_Invoice::INVOICE_STATUS_UNPAID) {
			return $invoice;
		}

		if ($callback_data['key'] != $this->getMD5key($invoice)) {
			$this->errors['INVOICE_STATUS_NOT_VERIFIED'] = 1;
			return null;
		}

		if ($callback_data['credit_card_processed'] != 'Y'
			|| (isset($callback_data['fraud_status']) && $callback_data['fraud_status'] != 'pass')) {
			$invoice->setStatus(SJB_Invoice::INVOICE_STATUS_UNPAID);
		} else {
			$invoice->setStatus($invoiceStatus);
		}

		if (!$this->checkPaymentAmount($invoice)) {
			return null;
		}
		$invoice->setPropertyValue('payment_method', $this->details->getProperty('id')->getValue());

		if (isset($callback_data['sale_id'])){
			$transactionId = $callback_data['sale_id'];
			$transactionInfo = array(
				'transaction_id'=> $transactionId,
				'invoice_sid' => $invoice->getSID(),
				'amount' => SJB_I18N::getInstance()->getFloat($invoice->getPropertyValue('total')),
				'payment_method'=> $invoice->getPropertyValue('payment_method'),
				'user_sid' => $invoice->getPropertyValue('user_sid')
			);
			$transaction = new SJB_Transaction($transactionInfo);
			SJB_TransactionManager::saveTransaction($transaction);
		}
		return $invoice;
	}

	function getMD5key($invoice)
	{
		$properties  = $this->details->getProperties();

		$secret_word 		= $properties['secret_word']->getValue();
		$twoco_account_id 	= $properties['2co_account_id']->getValue();

		$total = sprintf('%.02f',$invoice->getPropertyValue('total'));
		$invoice_sid = SJB_Request::getVar('order_number', '1');

		return strtoupper(md5($secret_word . $twoco_account_id . $invoice_sid . $total));
	}

	/**
	 * @param $callbackData
	 * @param SJB_Invoice $invoice
	 */
	public function processTransaction($callbackData, $invoice)
	{
		$transactionID = $callbackData['sale_id'];
		$transactionInfo = array(
			'transaction_id' => $transactionID,
			'invoice_sid'    => $invoice->getSID(),
			'amount'         => SJB_I18N::getInstance()->getFloat($invoice->getPropertyValue('total')),
			'payment_method' => '2checkout',
			'user_sid'       => $invoice->getPropertyValue('user_sid')
		);
		$transaction = new SJB_Transaction($transactionInfo);
		SJB_TransactionManager::saveTransaction($transaction);
	}

	/**
	 * @return TwoCheckoutVendorAPI
	 */
	private function initAPI()
	{
		$properties  = $this->getProperties();
		$isSandbox = $properties['sandbox']->getValue();
		if ($isSandbox) {
			$apiUrl = 'https://sandbox.2checkout.com/api/';
		} else {
			$apiUrl = 'https://www.2checkout.com/api/';
		}
		$apiUsername = $properties['2co_api_user_login']->getValue();
		$apiPassword = $properties['2co_api_user_password']->getValue();

		return new TwoCheckoutVendorAPI($apiUrl, $apiUsername, $apiPassword);
	}

	/**
	 * @param $vendorApi TwoCheckoutVendorAPI
	 * @param $saleId
	 * @return array
	 */
	private function getSaleDetails($vendorApi, $saleId)
	{
		$saleDetails = array();
		$result = $vendorApi->detailSale(array('sale_id' => $saleId));

		if ($result['success']) {
			$response = $result['response'];
			if ($response->response_code == 'OK') {
				$invoicesCount = count($response->sale->invoices) - 1;
				if (isset($response->sale->invoices[$invoicesCount]->lineitems)) {
					$saleDetails = $response->sale->invoices[$invoicesCount]->lineitems;
				}
			}
		}

		return $saleDetails;
	}

	function handleNotification($callback_data)
	{
		if (!isset($callback_data['sale_id']) || !isset($callback_data['vendor_id']) || !isset($callback_data['invoice_id'])) {
			return;
		}
		$properties		= $this->getProperties();
		$secret_word	= $properties['secret_word']->getValue();
		$expected_md5	= strtoupper(md5($callback_data['sale_id'] . $callback_data['vendor_id'] . $callback_data['invoice_id'] . $secret_word));

		if ((!isset($callback_data['md5_hash'])) || ($callback_data['md5_hash'] != $expected_md5)) {
			return; //платеж не от 2Checkout
		}

		$invoice_sid = null;
		if (isset($callback_data['vendor_order_id'])) {
			$invoice_sid = $callback_data['vendor_order_id'];
		}

		if (is_null($invoice_sid)) {
			return;
		}

		$invoice = SJB_InvoiceManager::getObjectBySID($invoice_sid);
		if (is_null($invoice)) {
			return null;
		}

		switch ($callback_data['message_type']) {
			case 'ORDER_CREATED':
			// skip fraud check. as it can create product twice
//			case 'FRAUD_STATUS_CHANGED':
				if (!in_array($invoice->getStatus(), array(SJB_Invoice::INVOICE_STATUS_UNPAID, SJB_Invoice::INVOICE_STATUS_PENDING))) {
					return null;
				}

				if ($callback_data['sale_id']) {
					$vendorApi = $this->initAPI();
					if (!$this->getSaleDetails($vendorApi, $callback_data['sale_id'])) {
						return null;
					}
				}
				$invoice->setCallbackData($callback_data);
				$invoice->setStatus(SJB_Invoice::INVOICE_STATUS_PAID);
				$invoice->setPropertyValue('payment_method', $this->details->getProperty('id')->getValue());
				SJB_InvoiceManager::saveInvoice($invoice);
				$invoice = SJB_InvoiceManager::getObjectBySID($invoice->getSID());

				$itemCount = $callback_data['item_count'];
				$user_sid = $invoice->getUserSID();
				$paymentHandler = new SJB_PaymentHandler($invoice->getSID(), '2checkout');
				$items = $invoice->getPropertyValue('items');
				if (!empty($items['products'])) {
					for ($i = 1; $i < $itemCount+1; $i++) {
						if (!empty($callback_data['item_id_'.$i])) {
							foreach ($items['products'] as $key => $product) {
								if ($product == $callback_data['item_id_' . $i]) {
									$productInfo = $invoice->getItemValue($key);
									$paymentHandler->setProduct($productInfo);
									$paymentHandler->createContract($user_sid, $invoice->getSID());
								}
							}
						}
					}
				}

				SJB_PromotionsManager::markPromotionAsPaidByInvoiceSID($invoice->getSID());
				$this->processTransaction($callback_data, $invoice);
				break;
			case 'REFUND_ISSUED':
				$itemCount = $callback_data['item_count'];
				$paymentHandler = new SJB_PaymentHandler($invoice->getSID(), '2checkout');
				$items = $invoice->getPropertyValue('items');
				if (!empty($items['products'])) {
					for($i = 1; $i <= $itemCount; $i++) {
						if (!empty($callback_data['item_id_'.$i])) {
							$paymentHandler->setProduct($callback_data['item_id_'.$i]);
							$paymentHandler->deleteContract($callback_data['invoice_id']);
						}
					}
				}
				$invoice->setCallbackData($callback_data);
				$invoice->setStatus(SJB_Invoice::INVOICE_STATUS_UNPAID);
				SJB_InvoiceManager::saveInvoice($invoice);
				break;
		}
	}
}
