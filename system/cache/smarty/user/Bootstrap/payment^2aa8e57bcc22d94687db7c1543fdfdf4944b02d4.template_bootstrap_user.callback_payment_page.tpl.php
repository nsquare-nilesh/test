<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 17:21:45
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/payment/callback_payment_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213607043458b8075163ca28-65365176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa8e57bcc22d94687db7c1543fdfdf4944b02d4' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/payment/callback_payment_page.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '213607043458b8075163ca28-65365176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'message' => 0,
    'products' => 0,
    'product' => 0,
    'GLOBALS' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
    'posting' => 0,
    'listingInfo' => 0,
    'resumeAccess' => 0,
    'userSectionListingTypes' => 0,
    'gateway' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b80751775162_44087195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b80751775162_44087195')) {function content_58b80751775162_44087195($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['error_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_data']->_loop = false;
 $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_data']->key => $_smarty_tpl->tpl_vars['error_data']->value) {
$_smarty_tpl->tpl_vars['error_data']->_loop = true;
 $_smarty_tpl->tpl_vars['error']->value = $_smarty_tpl->tpl_vars['error_data']->key;
?>
	    <p class="alert alert-danger">
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='NOT_IMPLEMENTED') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There is something missing in the code<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='INVOICE_ID_IS_NOT_SET') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Callback parameters are missing required payment information.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='NONEXISTED_INVOICE_ID_SPECIFIED') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System is unable to identify the payment processed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='INVOICE_IS_NOT_PENDING') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The invoice that you are requesting to process has already been processed before.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='INVOICE_STATUS_NOT_VERIFIED') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invoice is not verified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='AMOUNT_IS_NOT_MATCH') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You payment is not valid and the product(s) was not purchased. The amount you paid does not match the price of the product(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error']->value=='UNABLE_TO_PROCESS_PAYMENT') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
We were unable to process your payment.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
	    </p>
	<?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value) {?>
	<p class="alert alert-success"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your payment was successfully completed. Please wait for product/service activation.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Thank you for your purchase!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="checkout-message text-center">
		<?php $_smarty_tpl->tpl_vars['firstProduct'] = new Smarty_variable(false, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<?php if (!$_smarty_tpl->tpl_vars['product']->value['error']&&$_smarty_tpl->tpl_vars['product']->value['resume_access']) {?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'resumeAccess', null); ob_start(); ?>
					<p class="paragraph"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/resumes/" class="link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to searching candidates.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php }?>
		<?php } ?>
		<?php if (isset($_smarty_tpl->tpl_vars['listingTypes']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingType']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listingType']->iteration=0;
 $_smarty_tpl->tpl_vars['listingType']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
 $_smarty_tpl->tpl_vars['listingType']->iteration++;
 $_smarty_tpl->tpl_vars['listingType']->index++;
 $_smarty_tpl->tpl_vars['listingType']->first = $_smarty_tpl->tpl_vars['listingType']->index === 0;
 $_smarty_tpl->tpl_vars['listingType']->last = $_smarty_tpl->tpl_vars['listingType']->iteration === $_smarty_tpl->tpl_vars['listingType']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['types']['first'] = $_smarty_tpl->tpl_vars['listingType']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['types']['last'] = $_smarty_tpl->tpl_vars['listingType']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['types']['first']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['types']['last']) {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userSectionListingTypes', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php } else { ?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['types']['first']) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userSectionListingTypes', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['types']['last']) {?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userSectionListingTypes', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php } else { ?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'userSectionListingTypes', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php }?>
				<?php }?>
			<?php } ?>

			<h1 class="title__primary title__primary-small title__centered title__bordered">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Thank you for your purchase!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</h1>
			<?php if ($_smarty_tpl->tpl_vars['posting']->value) {?>
				<?php if (mb_strtolower($_smarty_tpl->tpl_vars['listingType']->value['ID'], 'UTF-8')=='job') {?>
					<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['status'][0][0]->status($_smarty_tpl->tpl_vars['listingInfo']->value['active'])=='pending') {?>
						<div class="form-group">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your job will be published as soon as it is reviewed and approved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					<?php } else { ?>
						<p class="paragraph">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have successfully posted your job.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</p>
						<p class="paragraph">
							<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listingInfo']->value);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview and share your job.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						</p>
						<p class="paragraph">
							<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['listingType']->value['ID'], 'UTF-8');?>
/">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View your job stats in "My Account" section<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</a>
						</p>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['number_of_listings']>1) {?>
						<p class="paragraph">
							<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=Job"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to posting your new job.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						</p>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['featured_employer']) {?>
						<div class="form-group">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your company profile has featured status now.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['resumeAccess']->value;?>

				<?php } else { ?>
					<p class="paragraph">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have successfully posted your resume.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</p>
					<p class="paragraph">
						<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listingInfo']->value);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview your resume.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</p>
					<p class="paragraph">
						<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['listingType']->value['ID'], 'UTF-8');?>
/">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit your resume in "My Account" section<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</a>
					</p>
				<?php }?>
			<?php } else { ?>
				<?php if (mb_strtolower($_smarty_tpl->tpl_vars['listingType']->value['ID'], 'UTF-8')=='job') {?>
					<p class="paragraph">
						<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['listingType']->value['ID'], 'UTF-8');?>
/">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View your job stats in "My Account" section<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</a>
					</p>
					<?php if (($_smarty_tpl->tpl_vars['product']->value['post_job']&&$_smarty_tpl->tpl_vars['product']->value['number_of_listings']>1)||($_smarty_tpl->tpl_vars['product']->value['post_job']&&$_smarty_tpl->tpl_vars['product']->value['number_of_listings']=='')) {?>
						<p class="paragraph">
							<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['userSectionListingTypes']->value;?>
">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to posting your new job.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</a>
						</p>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['featured_employer']) {?>
						<div class="form-group">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your company profile has featured status now.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['resumeAccess']->value;?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['post_resume']) {?>
						<p class="paragraph">
							<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['userSectionListingTypes']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to posting your resume.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						</p>
					<?php }?>
				<?php }?>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gateway']->value&&$_smarty_tpl->tpl_vars['gateway']->value->getPropertyValue('payment_instructions')) {?>
			<div class="checkout-message__payment-instructions">
				<?php echo $_smarty_tpl->tpl_vars['gateway']->value->getPropertyValue('payment_instructions');?>

			</div>
		<?php }?>
	</div>
<?php }?>
<?php }} ?>
