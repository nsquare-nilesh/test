<?php

class SJB_PaymentGatewayManager extends SJB_ObjectManager
{
    var $db_table_name = null;
    var $object_name = null;

    function __construct()
    {
        $this->db_table_name = 'payment_gateways';
        $this->object_name = 'PaymentGateway';
    }

    /**
     * @static
     * @param $gateway_id
     * @param null|array $gateway_info
     * @return null|SJB_AuthNetSIM|SJB_PayPal|SJB_TwoCheckOut
     */
    public static function createObjectByID($gateway_id, $gateway_info = null)
    {
        switch ($gateway_id) {
            case 'authnet_sim':
                $gateway = new SJB_AuthNetSIM($gateway_info);
                break;

            case 'paypal_standard':
                $gateway = new SJB_PayPal($gateway_info);
                break;

            case 'stripe':
                $gateway = new SJB_Stripe($gateway_info);
                break;

            case 'paypal_express':
                $gateway = new SJB_PayPalExpress($gateway_info);
                break;

            case 'paypal_pro':
                $gateway = new SJB_PayPalPro($gateway_info);
                break;

            case '2checkout':
                $gateway = new SJB_TwoCheckOut($gateway_info);
                break;

            case 'invoice':
                $gateway = new SJB_InvoiceGateway($gateway_info);
                break;

            default:
                $gateway = null;
        }

        return $gateway;
    }

    /**
     * @param $gateway_id
     * @return null|SJB_AuthNetSIM|SJB_PayPal|SJB_TwoCheckOut
     */
    public static function getObjectByID($gateway_id)
    {
        $gateway_sid = SJB_PaymentGatewayManager::getSIDByID($gateway_id);
        if (empty($gateway_sid)) {
            return SJB_PaymentGatewayManager::createObjectByID($gateway_id);
        } else {
            $gateway_info = SJB_PaymentGatewayManager::getInfoBySID($gateway_sid);
            if (!is_null($gateway_info)) {
                $gateway = SJB_PaymentGatewayManager::createObjectByID($gateway_id, $gateway_info);
                $gateway->setSID($gateway_sid);
                return $gateway;
            }
            return null;
        }
    }

    public static function saveGateway(&$gateway)
    {
        return parent::saveObject('payment_gateways', $gateway);
    }

    public static function deleteGateway($gateway_sid)
    {
        return parent::deleteObject('payment_gateways', $gateway_sid);
    }

    public static function getInfoBySID($gateway_sid)
    {
        $gateway_info = parent::getObjectInfoBySID('payment_gateways', $gateway_sid);
        $gateway = SJB_PaymentGatewayManager::createObjectByID($gateway_info['id'], $gateway_info);
        $gateway_info['template'] = $gateway->getTemplate();
        return $gateway_info;
    }

    public static function getSIDByID($gateway_id)
    {
        return SJB_DB::queryValue('SELECT `sid` FROM `payment_gateways` WHERE `id`=?s', $gateway_id);
    }

    public static function getActivePaymentGatewaysList()
    {
        $gateways_info = [];
        $gateways = SJB_DB::query('SELECT `sid` FROM `payment_gateways` WHERE `active` = 1 ORDER BY `position` ASC');
        foreach ($gateways as $gateway)
            $gateways_info[$gateway['sid']] = SJB_PaymentGatewayManager::getInfoBySID($gateway['sid']);
        return $gateways_info;
    }

    public static function getPaymentGatewaysList()
    {
        $gateways_info = [];
        $gateways = SJB_DB::query('SELECT `sid` FROM `payment_gateways` ORDER BY `position` ASC');
        foreach ($gateways as $gateway)
            $gateways_info[] = SJB_PaymentGatewayManager::getInfoBySID($gateway['sid']);
        return $gateways_info;
    }

	public static function activateByID($gateway_id)
	{
	    $gateway = SJB_PaymentGatewayManager::getObjectByID($gateway_id);
        if ($gateway) {
            \SJB\Analytics\Logger::log('Set up Payment Gateway', ['Payment Gateway' => $gateway->getPropertyValue('name')]);
            SJB_DB::query('UPDATE `payment_gateways` SET `active` = 1 WHERE `id` = ?s', $gateway_id);
        }
	}

	public static function deactivateByID($gateway_id)
	{
		SJB_DB::query('UPDATE `payment_gateways` SET `active` = 0 WHERE `id` = ?s', $gateway_id);
	}

    public static function getPaymentGatewaysNames()
    {
        return SJB_DB::query('SELECT `id`, `name` as `caption` FROM `payment_gateways` ORDER BY `position` ASC');
    }
}
