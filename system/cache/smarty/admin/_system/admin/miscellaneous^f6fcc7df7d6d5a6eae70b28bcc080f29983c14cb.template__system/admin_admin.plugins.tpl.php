<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 21:36:01
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/miscellaneous/plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212219448258b842e9d5c247-11460601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6fcc7df7d6d5a6eae70b28bcc080f29983c14cb' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/miscellaneous/plugins.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '212219448258b842e9d5c247-11460601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'saved' => 0,
    'groups' => 0,
    'plugins' => 0,
    'key' => 0,
    'plugin' => 0,
    'GLOBALS' => 0,
    'acl' => 0,
    'upgradeUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b842e9e258f3_41866735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b842e9e258f3_41866735')) {function content_58b842e9e258f3_41866735($_smarty_tpl) {?>
<div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>

<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }
if (!$_smarty_tpl->tpl_vars["error"]->_loop) {
?>
	<?php if ($_smarty_tpl->tpl_vars['saved']->value) {?>
		<p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved Successfully<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['plugins'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugins']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugins']->key => $_smarty_tpl->tpl_vars['plugins']->value) {
$_smarty_tpl->tpl_vars['plugins']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['plugins']->key;
?>
	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
		<form method="post" class="panel panel-default list-widget">
			<input type="hidden" name="action" value="save" />
			<input type="hidden" name="plugin" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<div class="panel-heading">
				<h3 class="panel-title <?php if ($_smarty_tpl->tpl_vars['plugin']->value['active']==0&&$_smarty_tpl->tpl_vars['plugin']->value['settings']==1) {?>inactive<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['plugin']->value['socialMedia']) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['socialMedia'];?>
">
							<i class="ion-ios7-locked"></i> <span class="list-widget__caption"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Social Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
						</a>
					<?php } else { ?>
						<a href="?action=settings&amp;plugin=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
">
							<img class="list-widget__img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin']->value['name'], 'UTF-8');?>
-logo.png" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
"/>
						</a>
					<?php }?>
				</h3>
				<div class="list-widget__description">
					<?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>

				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<?php if (!$_smarty_tpl->tpl_vars['plugin']->value['active']&&$_smarty_tpl->tpl_vars['plugin']->value['name']=='FacebookApplicationPlugin'&&!$_smarty_tpl->tpl_vars['acl']->value->isFeatureAllowed('Facebook app')) {?>
						<div class="alert alert-danger">
							<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Facebook app is not available for your current plan.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
							<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
It allows you to create your own Facebook jobs tab and turn your fans into candidates. <a href="https://www.smartjobboard.com/facebook-application/" target="_blank">Learn more.</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['upgradeUrl']->value;?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upgrade your account now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
						</div>
					<?php } elseif (!$_smarty_tpl->tpl_vars['plugin']->value['active']&&$_smarty_tpl->tpl_vars['plugin']->value['name']=='JobG8IntegrationPlugin'&&!$_smarty_tpl->tpl_vars['acl']->value->isFeatureAllowed('Jobg8')) {?>
						<div class="alert alert-danger">
							<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobg8 integration is not available for your current plan.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
							<p><a href="<?php echo $_smarty_tpl->tpl_vars['upgradeUrl']->value;?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upgrade your account now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
						</div>
					<?php } else { ?>
						<div class="col-xs-12 col-sm-12 col-md-6 list-widget__status">
							<?php if ($_smarty_tpl->tpl_vars['plugin']->value['active']) {?>
								<span class="label label--active"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php } else { ?>
								<span class="label label--inactive"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php }?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 list-widget__tools">
							<?php if ($_smarty_tpl->tpl_vars['plugin']->value['active']) {?>
								<input type="hidden" value="0" name="active" />
								<button type="submit" class="btn btn-default">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deactivate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</button>
								<a href="<?php if ($_smarty_tpl->tpl_vars['plugin']->value['socialMedia']) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social-media/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['socialMedia'];?>
<?php } else { ?>?action=settings&amp;plugin=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
<?php }?>" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							<?php } else { ?>
								<input type="hidden" value="1" name="active" />
								<button type="submit" class="btn btn-default">
									<i class="fa fa-eye" aria-hidden="true"></i>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</button>
							<?php }?>
						</div>
					<?php }?>
				</div>
			</div>
		</form>
	<?php } ?>
<?php } ?>
<?php }} ?>
