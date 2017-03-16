<?php

class SJB_TwoCheckOutDetails extends SJB_PaymentGatewayDetails
{
    public static function getDetails()
	{
        $common_details = parent::getDetails();
		$specific_details = array
			   (
				array
				(
					'id'		=> '2co_account_id',
					'caption'	=> '2Checkout vendor ID',
					'type'		=> 'string',
					'length'	=> '20',
					'is_required'=> true,
					'is_system' => false,
				),
				array
				(
					'id'		=> 'secret_word',
					'caption'	=> '2Checkout secret word',
					'type'		=> 'string',
					'length'	=> '20',
					'is_required'=> false,
					'is_system' => false,
				),
                array
				(
					'id'		=> '2co_api_user_login',
					'caption'	=> '2Checkout API user login',
					'type'		=> 'string',
					'length'	=> '20',
					'is_required'=> false,
					'is_system' => false,
				),
                array
				(
					'id'		=> '2co_api_user_password',
					'caption'	=> '2Checkout API user password',
					'type'		=> 'string',
					'length'	=> '20',
					'is_required'=> false,
					'is_system' => false,
				),
				array
				(
					'id'		=> 'sandbox',
					'caption'	=> '2CO Sandbox',
					'type'		=> 'boolean',
					'length'	=> '20',
					'is_required'=> false,
					'is_system' => false,
					'comment' => '<span class="tooltip-checkbox" data-toggle="tooltip" data-placement="auto left" title="check to enable 2CO Sandbox"><i class="fa fa-question-circle" aria-hidden="true"></i></span>',
				),
			   );
		
		return array_merge($common_details, $specific_details);
	}
}

