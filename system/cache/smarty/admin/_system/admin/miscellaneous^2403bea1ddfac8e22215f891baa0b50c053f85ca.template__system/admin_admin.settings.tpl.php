<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 17:52:19
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\miscellaneous\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2860258bd547badb324-41417451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2403bea1ddfac8e22215f891baa0b50c053f85ca' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\miscellaneous\\settings.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2860258bd547badb324-41417451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'GLOBALS' => 0,
    'isSaas' => 0,
    'settings' => 0,
    'email_domain_verified' => 0,
    'from_email' => 0,
    'ip' => 0,
    'timezones' => 0,
    'timezone' => 0,
    'date_formats' => 0,
    'date_format' => 0,
    'currencies' => 0,
    'code' => 0,
    'currency' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd547c0767f6_15338152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd547c0767f6_15338152')) {function content_58bd547c0767f6_15338152($_smarty_tpl) {?><div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php } ?>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/settings/" id="settingsPane" class="panel-body">
	<input type="hidden" id="action" name="action" value="apply_settings" />
	<input type="hidden" id="page" name="page" value="#generalTab"/>
	<div id="settingsPane">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#generalTab" data-toggle="tab" aria-expanded="true"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
General Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</li>
			<li>
				<a href="#jobboardTab" data-toggle="tab" aria-expanded="false"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Board Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</li>
			<li>
				<a href="#ecommerceTab" data-toggle="tab" aria-expanded="false">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ecommerce Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</a>
			</li>
			<li>
				<a href="#seoTab" data-toggle="tab" aria-expanded="false">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEO<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</a>
			</li>
			<?php if (!$_smarty_tpl->tpl_vars['isSaas']->value) {?>
				<li>
					<a href="#mailTab" data-toggle="tab" aria-expanded="false">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				</li>
			<?php }?>
		</ul>
		<div class="tab-content">
			<div id="generalTab" class="tab-pane clearfix active">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="text" name="site_title" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7 verify-domain">
							<input type="text" name="system_email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['system_email'];?>
" />
							<?php if ($_smarty_tpl->tpl_vars['isSaas']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['email_domain_verified']->value) {?>
									<div class="verify-domain--active">
										<span class="label label--active"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
									</div>
								<?php } else { ?>
									<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
By default all emails to your users will be sent from <strong><?php echo $_smarty_tpl->tpl_vars['from_email']->value;?>
</strong>. This is done to eliminate your emails to be treated as spam.<br />
										To make all the emails to be sent from your own email address, you need to verify your email domain.<br/><br/><p><button type='button' class='btn btn--primary btn--verify-domain'>Verify Domain</button></p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
									<div class="modal fade" id="verify-domain-modal" role="dialog">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="verify-domain-modal-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verify Domain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
												</div>
												<div class="modal-body">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn--primary btn--verify-domain-2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verify<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
							<?php }?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Custom Domain Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="text" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['domain'];?>
" autocomplete="off" />
							<?php if ($_smarty_tpl->tpl_vars['isSaas']->value) {?>
								<span data-toggle="tooltip" data-placement="auto left" title='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please point your A-record to our IP address:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</strong>&nbsp;<a target="_blank" href="http://help.smartjobboard.com/knowledge_base/topics/connecting-a-custom-domain-name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Learn more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>'><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							<?php }?>
						</div>
					</div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Maintenance Mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if (!$_smarty_tpl->tpl_vars['isSaas']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/?module_name=miscellaneous&template_name=maintenance_mode.tpl" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit maintenance_mode.tpl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a><?php }?></label>
                        <div class="col-md-7">
							<input type="hidden" name="maintenance_mode" value="0" />
							<label class="cr-styled">
                                <input id="maintenance_mode_" name="maintenance_mode" type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['maintenance_mode']) {?> checked="checked"<?php }?> />
                                <i class="fa"></i>
                            </label>
                            <br/>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
enter IP or IP range to access the site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
                            <div class="half">
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['maintenance_mode_ip'];?>
" name="maintenance_mode_ip"/>
                            </div>
                            <span style="top: 8px;" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use * for replacing one or several digits use comma (,) to specify two or more IPs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Timezone<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        <div class="col-md-7">
                            <select name="timezone">
                                <?php  $_smarty_tpl->tpl_vars['timezone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['timezone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['timezone']->key => $_smarty_tpl->tpl_vars['timezone']->value) {
$_smarty_tpl->tpl_vars['timezone']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['timezone']==$_smarty_tpl->tpl_vars['timezone']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date Format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        <div class="col-md-7">
                            <select name="date_format">
                                <?php  $_smarty_tpl->tpl_vars['date_format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date_format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['date_formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date_format']->key => $_smarty_tpl->tpl_vars['date_format']->value) {
$_smarty_tpl->tpl_vars['date_format']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_format']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['date_format']==$_smarty_tpl->tpl_vars['date_format']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date(time(),$_smarty_tpl->tpl_vars['date_format']->key), ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Google Analytics ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        <div class="col-md-7">
                            <div class="half">
                                <input type="text" name="google_TrackingID" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_TrackingID'];?>
" />
                            </div>
                        </div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"></label>
						<div class="col-md-7">
							<input type="submit" class="btn btn--primary btn__save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
						</div>
					</div>
				</div>
			</div>

			<div id="jobboardTab" class="tab-pane clearfix">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enable Public Resume Access<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="public_resume_access" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="public_resume_access" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['public_resume_access']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only registered job seekers can apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="loggedin_apply" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="loggedin_apply" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['loggedin_apply']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Require Employer Approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="approve_employers" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="approve_employers" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['approve_employers']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
							<span class="tooltip-checkbox" data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Checking this box will mean that employer accounts will not be active unless you have approved them in your admin panel.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Require Job Approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="approve_job" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="approve_job" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['approve_job']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
							<span class="tooltip-checkbox" data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enabling this will allow you to review and moderate jobs before they published on your job board.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete Expired Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="automatically_delete_expired_listings" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="automatically_delete_expired_listings" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['automatically_delete_expired_listings']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
after<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <input type="text"  style="width:100px" name="period_delete_expired_listings" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['period_delete_expired_listings'], ENT_QUOTES, 'UTF-8', true);?>
"/> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search by location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="hidden" name="search_by_location" value="0" />
							<label class="cr-styled">
								<input type="checkbox" name="search_by_location" value="1"<?php if ($_smarty_tpl->tpl_vars['settings']->value['search_by_location']) {?> checked="checked"<?php }?> />
								<i class="fa"></i>
							</label>
						</div>
					</div>
					<div class="form-group location__sub-setting">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display radius in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<select name="radius_search_unit">
								<option value="miles" <?php if ($_smarty_tpl->tpl_vars['settings']->value['radius_search_unit']=='miles') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Miles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="kilometers" <?php if ($_smarty_tpl->tpl_vars['settings']->value['radius_search_unit']=='kilometers') {?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kilometers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							</select>
						</div>
					</div>
					<div class="form-group location__sub-setting">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Limit location selection to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<select name="location_limit">
								<option value="" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['location_limit']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="AD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AD') {?>selected="selected"<?php }?>>Andorra</option>
								<option value="AE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AE') {?>selected="selected"<?php }?>>United Arab Emirates</option>
								<option value="AF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AF') {?>selected="selected"<?php }?>>Afghanistan</option>
								<option value="AG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AG') {?>selected="selected"<?php }?>>Antigua and Barbuda</option>
								<option value="AI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AI') {?>selected="selected"<?php }?>>Anguilla</option>
								<option value="AL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AL') {?>selected="selected"<?php }?>>Albania</option>
								<option value="AM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AM') {?>selected="selected"<?php }?>>Armenia</option>
								<option value="AO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AO') {?>selected="selected"<?php }?>>Angola</option>
								<option value="AQ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AQ') {?>selected="selected"<?php }?>>Antarctica</option>
								<option value="AR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AR') {?>selected="selected"<?php }?>>Argentina</option>
								<option value="AS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AS') {?>selected="selected"<?php }?>>American Samoa</option>
								<option value="AT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AT') {?>selected="selected"<?php }?>>Austria</option>
								<option value="AU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AU') {?>selected="selected"<?php }?>>Australia</option>
								<option value="AW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AW') {?>selected="selected"<?php }?>>Aruba</option>
								<option value="AX" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AX') {?>selected="selected"<?php }?>>Åland Islands</option>
								<option value="AZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='AZ') {?>selected="selected"<?php }?>>Azerbaijan</option>
								<option value="BA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BA') {?>selected="selected"<?php }?>>Bosnia and Herzegovina</option>
								<option value="BB" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BB') {?>selected="selected"<?php }?>>Barbados</option>
								<option value="BD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BD') {?>selected="selected"<?php }?>>Bangladesh</option>
								<option value="BE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BE') {?>selected="selected"<?php }?>>Belgium</option>
								<option value="BF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BF') {?>selected="selected"<?php }?>>Burkina Faso</option>
								<option value="BG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BG') {?>selected="selected"<?php }?>>Bulgaria</option>
								<option value="BH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BH') {?>selected="selected"<?php }?>>Bahrain</option>
								<option value="BI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BI') {?>selected="selected"<?php }?>>Burundi</option>
								<option value="BJ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BJ') {?>selected="selected"<?php }?>>Benin</option>
								<option value="BL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BL') {?>selected="selected"<?php }?>>Saint Barthélemy</option>
								<option value="BM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BM') {?>selected="selected"<?php }?>>Bermuda</option>
								<option value="BN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BN') {?>selected="selected"<?php }?>>Brunei Darussalam</option>
								<option value="BO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BO') {?>selected="selected"<?php }?>>Bolivia, Plurinational State of</option>
								<option value="BQ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BQ') {?>selected="selected"<?php }?>>Bonaire, Sint Eustatius and Saba</option>
								<option value="BR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BR') {?>selected="selected"<?php }?>>Brazil</option>
								<option value="BS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BS') {?>selected="selected"<?php }?>>Bahamas</option>
								<option value="BT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BT') {?>selected="selected"<?php }?>>Bhutan</option>
								<option value="BV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BV') {?>selected="selected"<?php }?>>Bouvet Island</option>
								<option value="BW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BW') {?>selected="selected"<?php }?>>Botswana</option>
								<option value="BY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BY') {?>selected="selected"<?php }?>>Belarus</option>
								<option value="BZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='BZ') {?>selected="selected"<?php }?>>Belize</option>
								<option value="CA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CA') {?>selected="selected"<?php }?>>Canada</option>
								<option value="CC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CC') {?>selected="selected"<?php }?>>Cocos (Keeling) Islands</option>
								<option value="CD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CD') {?>selected="selected"<?php }?>>Congo, the Democratic Republic of the</option>
								<option value="CF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CF') {?>selected="selected"<?php }?>>Central African Republic</option>
								<option value="CG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CG') {?>selected="selected"<?php }?>>Congo</option>
								<option value="CH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CH') {?>selected="selected"<?php }?>>Switzerland</option>
								<option value="CI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CI') {?>selected="selected"<?php }?>>Côte d'Ivoire</option>
								<option value="CK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CK') {?>selected="selected"<?php }?>>Cook Islands</option>
								<option value="CL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CL') {?>selected="selected"<?php }?>>Chile</option>
								<option value="CM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CM') {?>selected="selected"<?php }?>>Cameroon</option>
								<option value="CN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CN') {?>selected="selected"<?php }?>>China</option>
								<option value="CO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CO') {?>selected="selected"<?php }?>>Colombia</option>
								<option value="CR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CR') {?>selected="selected"<?php }?>>Costa Rica</option>
								<option value="CU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CU') {?>selected="selected"<?php }?>>Cuba</option>
								<option value="CV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CV') {?>selected="selected"<?php }?>>Cabo Verde</option>
								<option value="CW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CW') {?>selected="selected"<?php }?>>Curaçao</option>
								<option value="CX" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CX') {?>selected="selected"<?php }?>>Christmas Island</option>
								<option value="CY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CY') {?>selected="selected"<?php }?>>Cyprus</option>
								<option value="CZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='CZ') {?>selected="selected"<?php }?>>Czech Republic</option>
								<option value="DE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DE') {?>selected="selected"<?php }?>>Germany</option>
								<option value="DJ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DJ') {?>selected="selected"<?php }?>>Djibouti</option>
								<option value="DK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DK') {?>selected="selected"<?php }?>>Denmark</option>
								<option value="DM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DM') {?>selected="selected"<?php }?>>Dominica</option>
								<option value="DO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DO') {?>selected="selected"<?php }?>>Dominican Republic</option>
								<option value="DZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='DZ') {?>selected="selected"<?php }?>>Algeria</option>
								<option value="EC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='EC') {?>selected="selected"<?php }?>>Ecuador</option>
								<option value="EE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='EE') {?>selected="selected"<?php }?>>Estonia</option>
								<option value="EG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='EG') {?>selected="selected"<?php }?>>Egypt</option>
								<option value="EH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='EH') {?>selected="selected"<?php }?>>Western Sahara</option>
								<option value="ER" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ER') {?>selected="selected"<?php }?>>Eritrea</option>
								<option value="ES" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ES') {?>selected="selected"<?php }?>>Spain</option>
								<option value="ET" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ET') {?>selected="selected"<?php }?>>Ethiopia</option>
								<option value="FI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FI') {?>selected="selected"<?php }?>>Finland</option>
								<option value="FJ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FJ') {?>selected="selected"<?php }?>>Fiji</option>
								<option value="FK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FK') {?>selected="selected"<?php }?>>Falkland Islands (Malvinas)</option>
								<option value="FM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FM') {?>selected="selected"<?php }?>>Micronesia, Federated States of</option>
								<option value="FO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FO') {?>selected="selected"<?php }?>>Faroe Islands</option>
								<option value="FR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='FR') {?>selected="selected"<?php }?>>France</option>
								<option value="GA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GA') {?>selected="selected"<?php }?>>Gabon</option>
								<option value="GB" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GB') {?>selected="selected"<?php }?>>United Kingdom of Great Britain and Northern Ireland</option>
								<option value="GD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GD') {?>selected="selected"<?php }?>>Grenada</option>
								<option value="GE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GE') {?>selected="selected"<?php }?>>Georgia</option>
								<option value="GF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GF') {?>selected="selected"<?php }?>>French Guiana</option>
								<option value="GG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GG') {?>selected="selected"<?php }?>>Guernsey</option>
								<option value="GH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GH') {?>selected="selected"<?php }?>>Ghana</option>
								<option value="GI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GI') {?>selected="selected"<?php }?>>Gibraltar</option>
								<option value="GL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GL') {?>selected="selected"<?php }?>>Greenland</option>
								<option value="GM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GM') {?>selected="selected"<?php }?>>Gambia</option>
								<option value="GN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GN') {?>selected="selected"<?php }?>>Guinea</option>
								<option value="GP" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GP') {?>selected="selected"<?php }?>>Guadeloupe</option>
								<option value="GQ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GQ') {?>selected="selected"<?php }?>>Equatorial Guinea</option>
								<option value="GR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GR') {?>selected="selected"<?php }?>>Greece</option>
								<option value="GS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GS') {?>selected="selected"<?php }?>>South Georgia and the South Sandwich Islands</option>
								<option value="GT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GT') {?>selected="selected"<?php }?>>Guatemala</option>
								<option value="GU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GU') {?>selected="selected"<?php }?>>Guam</option>
								<option value="GW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GW') {?>selected="selected"<?php }?>>Guinea-Bissau</option>
								<option value="GY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='GY') {?>selected="selected"<?php }?>>Guyana</option>
								<option value="HK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HK') {?>selected="selected"<?php }?>>Hong Kong</option>
								<option value="HM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HM') {?>selected="selected"<?php }?>>Heard Island and McDonald Islands</option>
								<option value="HN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HN') {?>selected="selected"<?php }?>>Honduras</option>
								<option value="HR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HR') {?>selected="selected"<?php }?>>Croatia</option>
								<option value="HT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HT') {?>selected="selected"<?php }?>>Haiti</option>
								<option value="HU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='HU') {?>selected="selected"<?php }?>>Hungary</option>
								<option value="ID" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ID') {?>selected="selected"<?php }?>>Indonesia</option>
								<option value="IE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IE') {?>selected="selected"<?php }?>>Ireland</option>
								<option value="IL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IL') {?>selected="selected"<?php }?>>Israel</option>
								<option value="IM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IM') {?>selected="selected"<?php }?>>Isle of Man</option>
								<option value="IN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IN') {?>selected="selected"<?php }?>>India</option>
								<option value="IO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IO') {?>selected="selected"<?php }?>>British Indian Ocean Territory</option>
								<option value="IQ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IQ') {?>selected="selected"<?php }?>>Iraq</option>
								<option value="IR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IR') {?>selected="selected"<?php }?>>Iran, Islamic Republic of</option>
								<option value="IS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IS') {?>selected="selected"<?php }?>>Iceland</option>
								<option value="IT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='IT') {?>selected="selected"<?php }?>>Italy</option>
								<option value="JE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='JE') {?>selected="selected"<?php }?>>Jersey</option>
								<option value="JM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='JM') {?>selected="selected"<?php }?>>Jamaica</option>
								<option value="JO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='JO') {?>selected="selected"<?php }?>>Jordan</option>
								<option value="JP" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='JP') {?>selected="selected"<?php }?>>Japan</option>
								<option value="KE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KE') {?>selected="selected"<?php }?>>Kenya</option>
								<option value="KG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KG') {?>selected="selected"<?php }?>>Kyrgyzstan</option>
								<option value="KH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KH') {?>selected="selected"<?php }?>>Cambodia</option>
								<option value="KI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KI') {?>selected="selected"<?php }?>>Kiribati</option>
								<option value="KM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KM') {?>selected="selected"<?php }?>>Comoros</option>
								<option value="KN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KN') {?>selected="selected"<?php }?>>Saint Kitts and Nevis</option>
								<option value="KP" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KP') {?>selected="selected"<?php }?>>Korea, Democratic People's Republic of</option>
								<option value="KR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KR') {?>selected="selected"<?php }?>>Korea, Republic of</option>
								<option value="KW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KW') {?>selected="selected"<?php }?>>Kuwait</option>
								<option value="KY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KY') {?>selected="selected"<?php }?>>Cayman Islands</option>
								<option value="KZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='KZ') {?>selected="selected"<?php }?>>Kazakhstan</option>
								<option value="LA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LA') {?>selected="selected"<?php }?>>Lao People's Democratic Republic</option>
								<option value="LB" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LB') {?>selected="selected"<?php }?>>Lebanon</option>
								<option value="LC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LC') {?>selected="selected"<?php }?>>Saint Lucia</option>
								<option value="LI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LI') {?>selected="selected"<?php }?>>Liechtenstein</option>
								<option value="LK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LK') {?>selected="selected"<?php }?>>Sri Lanka</option>
								<option value="LR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LR') {?>selected="selected"<?php }?>>Liberia</option>
								<option value="LS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LS') {?>selected="selected"<?php }?>>Lesotho</option>
								<option value="LT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LT') {?>selected="selected"<?php }?>>Lithuania</option>
								<option value="LU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LU') {?>selected="selected"<?php }?>>Luxembourg</option>
								<option value="LV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LV') {?>selected="selected"<?php }?>>Latvia</option>
								<option value="LY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='LY') {?>selected="selected"<?php }?>>Libya</option>
								<option value="MA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MA') {?>selected="selected"<?php }?>>Morocco</option>
								<option value="MC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MC') {?>selected="selected"<?php }?>>Monaco</option>
								<option value="MD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MD') {?>selected="selected"<?php }?>>Moldova, Republic of</option>
								<option value="ME" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ME') {?>selected="selected"<?php }?>>Montenegro</option>
								<option value="MF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MF') {?>selected="selected"<?php }?>>Saint Martin (French part)</option>
								<option value="MG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MG') {?>selected="selected"<?php }?>>Madagascar</option>
								<option value="MH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MH') {?>selected="selected"<?php }?>>Marshall Islands</option>
								<option value="MK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MK') {?>selected="selected"<?php }?>>Macedonia, the former Yugoslav Republic of</option>
								<option value="ML" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ML') {?>selected="selected"<?php }?>>Mali</option>
								<option value="MM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MM') {?>selected="selected"<?php }?>>Myanmar</option>
								<option value="MN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MN') {?>selected="selected"<?php }?>>Mongolia</option>
								<option value="MO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MO') {?>selected="selected"<?php }?>>Macao</option>
								<option value="MP" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MP') {?>selected="selected"<?php }?>>Northern Mariana Islands</option>
								<option value="MQ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MQ') {?>selected="selected"<?php }?>>Martinique</option>
								<option value="MR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MR') {?>selected="selected"<?php }?>>Mauritania</option>
								<option value="MS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MS') {?>selected="selected"<?php }?>>Montserrat</option>
								<option value="MT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MT') {?>selected="selected"<?php }?>>Malta</option>
								<option value="MU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MU') {?>selected="selected"<?php }?>>Mauritius</option>
								<option value="MV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MV') {?>selected="selected"<?php }?>>Maldives</option>
								<option value="MW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MW') {?>selected="selected"<?php }?>>Malawi</option>
								<option value="MX" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MX') {?>selected="selected"<?php }?>>Mexico</option>
								<option value="MY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MY') {?>selected="selected"<?php }?>>Malaysia</option>
								<option value="MZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='MZ') {?>selected="selected"<?php }?>>Mozambique</option>
								<option value="NA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NA') {?>selected="selected"<?php }?>>Namibia</option>
								<option value="NC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NC') {?>selected="selected"<?php }?>>New Caledonia</option>
								<option value="NE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NE') {?>selected="selected"<?php }?>>Niger</option>
								<option value="NF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NF') {?>selected="selected"<?php }?>>Norfolk Island</option>
								<option value="NG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NG') {?>selected="selected"<?php }?>>Nigeria</option>
								<option value="NI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NI') {?>selected="selected"<?php }?>>Nicaragua</option>
								<option value="NL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NL') {?>selected="selected"<?php }?>>Netherlands</option>
								<option value="NO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NO') {?>selected="selected"<?php }?>>Norway</option>
								<option value="NP" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NP') {?>selected="selected"<?php }?>>Nepal</option>
								<option value="NR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NR') {?>selected="selected"<?php }?>>Nauru</option>
								<option value="NU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NU') {?>selected="selected"<?php }?>>Niue</option>
								<option value="NZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='NZ') {?>selected="selected"<?php }?>>New Zealand</option>
								<option value="OM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='OM') {?>selected="selected"<?php }?>>Oman</option>
								<option value="PA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PA') {?>selected="selected"<?php }?>>Panama</option>
								<option value="PE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PE') {?>selected="selected"<?php }?>>Peru</option>
								<option value="PF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PF') {?>selected="selected"<?php }?>>French Polynesia</option>
								<option value="PG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PG') {?>selected="selected"<?php }?>>Papua New Guinea</option>
								<option value="PH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PH') {?>selected="selected"<?php }?>>Philippines</option>
								<option value="PK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PK') {?>selected="selected"<?php }?>>Pakistan</option>
								<option value="PL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PL') {?>selected="selected"<?php }?>>Poland</option>
								<option value="PM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PM') {?>selected="selected"<?php }?>>Saint Pierre and Miquelon</option>
								<option value="PN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PN') {?>selected="selected"<?php }?>>Pitcairn</option>
								<option value="PR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PR') {?>selected="selected"<?php }?>>Puerto Rico</option>
								<option value="PS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PS') {?>selected="selected"<?php }?>>Palestine, State of</option>
								<option value="PT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PT') {?>selected="selected"<?php }?>>Portugal</option>
								<option value="PW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PW') {?>selected="selected"<?php }?>>Palau</option>
								<option value="PY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='PY') {?>selected="selected"<?php }?>>Paraguay</option>
								<option value="QA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='QA') {?>selected="selected"<?php }?>>Qatar</option>
								<option value="RE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='RE') {?>selected="selected"<?php }?>>Réunion</option>
								<option value="RO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='RO') {?>selected="selected"<?php }?>>Romania</option>
								<option value="RS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='RS') {?>selected="selected"<?php }?>>Serbia</option>
								<option value="RU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='RU') {?>selected="selected"<?php }?>>Russian Federation</option>
								<option value="RW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='RW') {?>selected="selected"<?php }?>>Rwanda</option>
								<option value="SA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SA') {?>selected="selected"<?php }?>>Saudi Arabia</option>
								<option value="SB" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SB') {?>selected="selected"<?php }?>>Solomon Islands</option>
								<option value="SC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SC') {?>selected="selected"<?php }?>>Seychelles</option>
								<option value="SD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SD') {?>selected="selected"<?php }?>>Sudan</option>
								<option value="SE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SE') {?>selected="selected"<?php }?>>Sweden</option>
								<option value="SG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SG') {?>selected="selected"<?php }?>>Singapore</option>
								<option value="SH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SH') {?>selected="selected"<?php }?>>Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="SI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SI') {?>selected="selected"<?php }?>>Slovenia</option>
								<option value="SJ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SJ') {?>selected="selected"<?php }?>>Svalbard and Jan Mayen</option>
								<option value="SK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SK') {?>selected="selected"<?php }?>>Slovakia</option>
								<option value="SL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SL') {?>selected="selected"<?php }?>>Sierra Leone</option>
								<option value="SM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SM') {?>selected="selected"<?php }?>>San Marino</option>
								<option value="SN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SN') {?>selected="selected"<?php }?>>Senegal</option>
								<option value="SO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SO') {?>selected="selected"<?php }?>>Somalia</option>
								<option value="SR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SR') {?>selected="selected"<?php }?>>Suriname</option>
								<option value="SS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SS') {?>selected="selected"<?php }?>>South Sudan</option>
								<option value="ST" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ST') {?>selected="selected"<?php }?>>Sao Tome and Principe</option>
								<option value="SV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SV') {?>selected="selected"<?php }?>>El Salvador</option>
								<option value="SX" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SX') {?>selected="selected"<?php }?>>Sint Maarten (Dutch part)</option>
								<option value="SY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SY') {?>selected="selected"<?php }?>>Syrian Arab Republic</option>
								<option value="SZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='SZ') {?>selected="selected"<?php }?>>Swaziland</option>
								<option value="TC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TC') {?>selected="selected"<?php }?>>Turks and Caicos Islands</option>
								<option value="TD" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TD') {?>selected="selected"<?php }?>>Chad</option>
								<option value="TF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TF') {?>selected="selected"<?php }?>>French Southern Territories</option>
								<option value="TG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TG') {?>selected="selected"<?php }?>>Togo</option>
								<option value="TH" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TH') {?>selected="selected"<?php }?>>Thailand</option>
								<option value="TJ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TJ') {?>selected="selected"<?php }?>>Tajikistan</option>
								<option value="TK" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TK') {?>selected="selected"<?php }?>>Tokelau</option>
								<option value="TL" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TL') {?>selected="selected"<?php }?>>Timor-Leste</option>
								<option value="TM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TM') {?>selected="selected"<?php }?>>Turkmenistan</option>
								<option value="TN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TN') {?>selected="selected"<?php }?>>Tunisia</option>
								<option value="TO" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TO') {?>selected="selected"<?php }?>>Tonga</option>
								<option value="TR" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TR') {?>selected="selected"<?php }?>>Turkey</option>
								<option value="TT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TT') {?>selected="selected"<?php }?>>Trinidad and Tobago</option>
								<option value="TV" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TV') {?>selected="selected"<?php }?>>Tuvalu</option>
								<option value="TW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TW') {?>selected="selected"<?php }?>>Taiwan, Province of China</option>
								<option value="TZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='TZ') {?>selected="selected"<?php }?>>Tanzania, United Republic of</option>
								<option value="UA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='UA') {?>selected="selected"<?php }?>>Ukraine</option>
								<option value="UG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='UG') {?>selected="selected"<?php }?>>Uganda</option>
								<option value="UM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='UM') {?>selected="selected"<?php }?>>United States Minor Outlying Islands</option>
								<option value="US" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='US') {?>selected="selected"<?php }?>>United States of America</option>
								<option value="UY" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='UY') {?>selected="selected"<?php }?>>Uruguay</option>
								<option value="UZ" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='UZ') {?>selected="selected"<?php }?>>Uzbekistan</option>
								<option value="VA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VA') {?>selected="selected"<?php }?>>Holy See</option>
								<option value="VC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VC') {?>selected="selected"<?php }?>>Saint Vincent and the Grenadines</option>
								<option value="VE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VE') {?>selected="selected"<?php }?>>Venezuela, Bolivarian Republic of</option>
								<option value="VG" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VG') {?>selected="selected"<?php }?>>Virgin Islands, British</option>
								<option value="VI" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VI') {?>selected="selected"<?php }?>>Virgin Islands, U.S.</option>
								<option value="VN" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VN') {?>selected="selected"<?php }?>>Viet Nam</option>
								<option value="VU" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='VU') {?>selected="selected"<?php }?>>Vanuatu</option>
								<option value="WF" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='WF') {?>selected="selected"<?php }?>>Wallis and Futuna</option>
								<option value="WS" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='WS') {?>selected="selected"<?php }?>>Samoa</option>
								<option value="YE" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='YE') {?>selected="selected"<?php }?>>Yemen</option>
								<option value="YT" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='YT') {?>selected="selected"<?php }?>>Mayotte</option>
								<option value="ZA" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ZA') {?>selected="selected"<?php }?>>South Africa</option>
								<option value="ZM" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ZM') {?>selected="selected"<?php }?>>Zambia</option>
								<option value="ZW" <?php if ($_smarty_tpl->tpl_vars['settings']->value['location_limit']=='ZW') {?>selected="selected"<?php }?>>Zimbabwe</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"></label>
						<div class="col-md-7">
							<input type="submit" class="btn btn--primary btn__save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
						</div>
					</div>
				</div>
			</div>

			<div id="ecommerceTab" class="tab-pane clearfix">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Currency<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<select name="transaction_currency">
								<?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['transaction_currency']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['currency']->value['caption'];?>
</option>
								<?php } ?>
							</select>
							<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This currency will be used for displaying your site services prices<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tax<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<div class="numerical-block">
								<div class="input-group">
									<input type="text" name="tax" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['tax'], ENT_QUOTES, 'UTF-8', true);?>
" />
									<span class="input-group-addon">%</span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Billing Address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<textarea name="send_payment_to" cols="50" rows="6"><?php echo $_smarty_tpl->tpl_vars['settings']->value['send_payment_to'];?>
</textarea>
							<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This text will be displayed in invoices<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-7 col-md-offset-2">
							<input type="submit" class="btn btn--primary btn__save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
						</div>
					</div>
				</div>
			</div>

			<div id="seoTab" class="tab-pane clearfix">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Homepage Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="text" name="home_page_title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['home_page_title'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<textarea name="home_page_description" cols="50" rows="6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['home_page_description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-md-7">
							<input type="text" name="home_page_keywords" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['home_page_keywords'], ENT_QUOTES, 'UTF-8', true);?>
" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-7 col-md-offset-2">
							<input type="submit" class="btn btn--primary btn__save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
						</div>
					</div>
				</div>

			</div>

			<?php if (!$_smarty_tpl->tpl_vars['isSaas']->value) {?>
				<div id="mailTab" class="tab-pane clearfix">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<label class="cr-styled cr-styled__radio">
									<input type="radio" name="smtp" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==1) {?>checked="checked"<?php }?> />
									<i class="fa"></i>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Sender Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7"><input type="text" name="smtp_sender" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_sender'];?>
" /></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Port<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7">
								<div class="numerical-block">
									<input type="text" name="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_port'];?>
" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Host<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7">
								<div class="numerical-block">
									<input type="text" name="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_host'];?>
" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Security<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7">
								<div class="radio-inline">
									<label class="cr-styled cr-styled__radio">
										<input type="radio" name="smtp_security" value="none" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']!='ssl'&&$_smarty_tpl->tpl_vars['settings']->value['smtp_security']!='tls') {?>checked="checked"<?php }?> />
										<i class="fa"></i>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
None<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</label>
								</div>
								<div class="radio-inline">
									<label class="cr-styled cr-styled__radio">
										<input type="radio" name="smtp_security" value="ssl" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']=='ssl') {?>checked="checked"<?php }?> />
										<i class="fa"></i>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SSL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</label>
								</div>
								<div class="radio-inline">
									<label class="cr-styled cr-styled__radio">
										<input type="radio" name="smtp_security" value="tls" <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp_security']=='tls') {?>checked="checked"<?php }?> />
										<i class="fa"></i>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TLS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</label>
								</div>
								<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Look for your SMTP mail host requirements<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7"><input type="text" name="smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_username'];?>
" /></div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7"><input type="password" name="smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_password'];?>
" /></div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<label class="cr-styled cr-styled__radio">
									<input type="radio" name="smtp" value="0"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==0) {?>checked="checked"<?php }?> />
									<i class="fa"></i>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Path to sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7"><input type="text" name="sendmail_path" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['sendmail_path'];?>
" /></div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<label class="cr-styled cr-styled__radio">
									<input type="radio" name="smtp" value="3"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['smtp']==3) {?>checked="checked"<?php }?> />
									<i class="fa"></i>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
PHP Mail Function<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Check mail set up<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
							<div class="col-md-7"><input id="checkMail" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Check<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--secondary"/></div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-2">
								<input type="submit" class="btn btn--primary btn__save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		$(document).ready(function() {
			checkUncheckIPBlock();

			$("#maintenance_mode_").click(function() {
				checkUncheckIPBlock();
			});

			$('.btn__save').on('click', function() {
				$('#page').val('#' + $(this).parents('.tab-pane').attr('id'));
			});

			$("#checkMail").click(function () {

				var preloader = $(this).after(getPreloaderCodeForFieldId("checkMailLoader"));
				$("#checkMail").prop('disabled', true);

				$.ajax({
					type: "POST",
					url: window.SJB_GlobalSiteUrl + "/system/miscellaneous/mail_check/",
					data: $("#settingsPane").serialize(),
					complete: function() {
						$("#checkMail").prop('disabled', false);
					},
					success:function (html) {
						$(preloader).next("span").remove();
						var result = JSON.parse(html);
						$(".message").remove();
						$(".error").remove();
						if (result["status"] == true) {
							$("#settingsPane").before('<p class="' + result["type"] + '"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your mail is set up correctly and functions fine.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
						}
						if (result["status"] == false) {
							$("#settingsPane").before('<p class="' + result["type"] + '"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your mail is not functioning. Please check Admin Panel and server settings.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
						}
						if (result["status"] == "fieldError") {
							var fieldCaption = {
								"smtp_host" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Host<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"smtp_port" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Port<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"smtp_sender" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SMTP Sender Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"smtp_username" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"smtp_password" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"sendmail_path" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Path to sendmail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
								"system_email" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
							};
							var messages = result["message"];
							$.each(messages, function(key) {
								if (key == "EMPTY_VALUE") {
									$.each(messages[key], function(key, value) {
										$("#settingsPane").before('<p class="' + result["type"] + '">"' + fieldCaption[value] + '" <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
field is empty.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
									});
								}

								if (key == "NOT_VALID") {
									$.each(messages[key], function(key, value) {
										$("#settingsPane").before('<p class="' + result["type"] + '">"' + fieldCaption[value] + '" <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
field is not valid.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>');
									});
								}
							});
						}
						$(window).scrollTop(0);
					}
				});
				return false;
			});

			$('[name="search_by_location"]').change(function() {
				$('.location__sub-setting').toggle($('[name="search_by_location"]:checked').length > 0);
			}).change();

			$(document).on('click', '.btn--verify-domain', function() {
				$('.tooltip.in').tooltip('hide');
				var modal = $('#verify-domain-modal');
				modal.find('.modal-body')
						.addClass('loading')
						.empty();
				modal.modal('show');
				$.get(
					SJB_AdminSiteUrl + '/system/miscellaneous/domain_verification/',
					{
						email: $('[name="system_email"]').val()
					},
					function(data) {
						modal.find('.modal-body')
								.html(data)
								.removeClass('loading');
					}
				);
			});
			$('.btn--verify-domain-2').click(function() {
				$.get(
						SJB_AdminSiteUrl + '/system/miscellaneous/domain_verification/',
						{
							email: $('[name="system_email"]').val(),
							action: 'verify',
						},
						function(data) {
							$('.error, .message').remove();
							$('#verify-domain-modal').modal('hide');
							$(data).insertAfter('.page-title');
							if ($(data).hasClass('message')) {
								$('.verify-domain .label').removeClass('.label--pending').addClass('label--active').text('Verified');
								$('.btn--verify-domain').remove();
							}
						}
				);
			});
		});

		function checkUncheckIPBlock() {
			$("input[name='maintenance_mode_ip']").prop("disabled", !$("#maintenance_mode_").prop("checked"));
		}

		var page = '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
';

		if (page) {
			$('.nav-tabs').find('li.active a').attr('aria-expanded', 'false');
			$('.nav-tabs').find('li.active').removeClass('active');
			$('.nav-tabs a[href="' + page + '"]').attr('aria-expanded', 'true');
			$('.nav-tabs a[href="' + page + '"]').closest('li').addClass('active');
			$('.tab-content .tab-pane.active').removeClass('active');
			$('.tab-content ' + page).addClass('active');
		}
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
