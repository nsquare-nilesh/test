<?php

class SJB_AuthNetSIM extends SJB_PaymentGateway
{
	public $amountField = 'x_amount';

    function __construct($gateway_info = array())
	{
		parent::__construct($gateway_info);
		$this->details = new SJB_AuthNetSIMDetails($gateway_info);
	}

	function isValid()
	{
		$properties = $this->details->getProperties();

		$md5_hash 			= $properties['authnet_api_md5_hash_value']->getValue();
        $api_login_id 		= $properties['authnet_api_login_id']->getValue();
		$transaction_key 	= $properties['authnet_api_transaction_key']->getValue();

		$errors = array();

		if (empty($api_login_id))
			$errors['API_LOGIN_ID_IS_NOT_SET'] = 1;
		if (empty($transaction_key))
			$errors['TRANSACTION_KEY_IS_NOT_SET'] = 1;
		if (empty($md5_hash))
			$errors['MD5_HASH_IS_NOT_SET'] = 1;

		if (empty($errors)) {
			return true;
		}
		else {
			if (!empty($this->errors))
				$errors = array_merge($this->errors, $errors);
			$this->errors = $errors;
			return false;
		}
	}

    function getUrl()
    {
    	$properties = $this->details->getProperties();
    	$use_test_account = $properties['authnet_use_test_account']->getValue();
    	if ($use_test_account)
			return 'https://test.authorize.net/gateway/transact.dll';
		else
			return 'https://secure.authorize.net/gateway/transact.dll';
	}

	function buildTransactionForm($invoice)
	{
        if (count($invoice->isValid()) == 0) {
			$form_fields = $this->getFormFields($invoice);
			$authnet_url = $this->getUrl();
            $form_hidden_fields = '';
            foreach ($form_fields as $name => $value) {
            	$value = htmlentities($value, ENT_QUOTES, "UTF-8");
				$form_hidden_fields .= "<input type='hidden' name='{$name}' value='{$value}' />\r\n";
            }
           	$gateway['hidden_fields'] 	= $form_hidden_fields;
           	$gateway['url'] 			= $authnet_url;
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
		$use_test_account = $properties['authnet_use_test_account']->getValue();

		$x_fp_sequence = rand(1, 1000);
		$x_fp_timestamp = time ();

		$fingerprint = $this->hmac(
			$properties['authnet_api_transaction_key']->getValue(),

			$properties['authnet_api_login_id']->getValue().'^'.$x_fp_sequence.'^'.$x_fp_timestamp.'^'.
			$invoice->getPropertyValue('total').'^'.SJB_CurrencyManager::getCurrencyCode()
		);

		$id = $properties['id']->getValue();

		// hard-coded fields
		$form_fields['x_show_form'] 		= 'PAYMENT_FORM';

		// configuration fields
		$form_fields['x_login'] 			= $properties['authnet_api_login_id']->getValue();
		$form_fields['x_fp_hash'] 			= $fingerprint;
		$form_fields['x_fp_sequence'] 		= $x_fp_sequence;
		$form_fields['x_fp_timestamp'] 		= $x_fp_timestamp;
		$form_fields['x_currency_code'] 	= SJB_CurrencyManager::getCurrencyCode();

		$form_fields['x_receipt_link_method'] = 'POST';
		$form_fields['x_receipt_link_text'] = 'Return to the merchant';
		// return page field (response)
		$form_fields['x_receipt_link_url']	= SJB_System::getSystemSettings('SITE_URL') . "/system/payment/callback/{$invoice->getSID()}/{$id}/";

		// payment-related fields
		$form_fields['x_description']       = $invoice->getProductNames();
		$form_fields['item_name'] 			= $invoice->getProductNames();
		$form_fields['x_amount'] 			= $invoice->getPropertyValue('total');
		$form_fields['item_number'] 		= $invoice->getSID();
		
		$user = SJB_UserManager::createTemplateStructureForCurrentUser();
		$form_fields['x_first_name']        = isset($user['FirstName'])		? $user['FirstName'] : '';
		$form_fields['x_last_name']         = isset($user['LastName'])		? $user['LastName'] : '';
		$form_fields['x_company']           = isset($user['CompanyName'])	? $user['CompanyName'] : '';
		$form_fields['x_address']           = '';
		$form_fields['x_city']              = isset($user['Location']['City'])			? $user['Location']['City'] : '';
		$form_fields['x_state']             = isset($user['Location']['State'])			? $user['Location']['State'] : '';
		$form_fields['x_zip']               = isset($user['Location']['ZipCode'])		? $user['Location']['ZipCode'] : '';
		$form_fields['x_country']           = isset($user['Location']['Country'])		? $user['Location']['Country'] : '';
		$form_fields['x_email']             = isset($user['email'])			? $user['email'] : '';
		$form_fields['x_phone']             = isset($user['PhoneNumber'])	? $user['PhoneNumber'] : '';

		if (!$use_test_account) {
			$form_fields['x_solution_id'] = 'AAA101348';
		}

		return $form_fields;
	}

    function hmac ($key, $data)
    {
	   $b = 64; // byte length for md5

	   if (strlen($key) > $b)
		   $key = pack('H*',md5($key));

	   $key  = str_pad($key, $b, chr(0x00));
	   $ipad = str_pad('', $b, chr(0x36));
	   $opad = str_pad('', $b, chr(0x5c));

	   $k_ipad = $key ^ $ipad ;
	   $k_opad = $key ^ $opad;

	   return md5($k_opad . pack('H*',md5($k_ipad . $data)));
	}

    function isPaymentVerified($invoice)
	{
		$properties  	= $this->details->getProperties();
		$callback_data 	= $invoice->getCallbackData();

		$local_md5_hash = md5(
			$properties['authnet_api_md5_hash_value']->getValue() .
			$properties['authnet_api_login_id']->getValue() .
			$callback_data['x_trans_id'] .
			$callback_data['x_amount']
		);

		// checking if response from Autnorize.Net
		if (strtoupper($callback_data['x_MD5_Hash']) != strtoupper($local_md5_hash))
			return false;

		// verifying if transaction has been approved
		if ($callback_data['x_response_code'] != 1 || $callback_data['x_response_reason_code'] != 1)
			return false;

		return true;
	}

    function getPaymentFromCallbackData($callback_data, $invoice_sid)
    {
		$invoice_sid = isset($callback_data['item_number']) ? $callback_data['item_number'] : null;

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

		$invoice->setCallbackData($callback_data);

		if ($this->isPaymentVerified($invoice)) {
			$invoice->setStatus(SJB_Invoice::INVOICE_STATUS_VERIFIED);
		} else {
			$invoice->setStatus(SJB_Invoice::INVOICE_STATUS_UNPAID);
		}

		if (!$this->checkPaymentAmount($invoice)) {
			return null;
		}
	    $id = $this->details->getProperty('id');
	    $invoice->setPropertyValue('payment_method', $id->getValue());

		if (isset($callback_data['x_trans_id'])){
		    $transactionId = $callback_data['x_trans_id'];
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

	public function handleNotification($callback_data)
	{
		$uri = $_SERVER['REQUEST_URI'];
		$_SERVER['REQUEST_URI'] = sprintf('/system/payment/callback/%s/authnet_sim/', SJB_Array::get($callback_data, 'item_number'));
		echo SJB_System::executeFunction('payment', 'callback', $callback_data);
		$_SERVER['REQUEST_URI'] = $uri;
	}
}

