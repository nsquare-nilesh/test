<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 12:53:11
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/users/edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115216310658b7c85f85ddb5-54118819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cd7c61c89153c41ea3aa5aeb3c3b31fe7d43ea' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/users/edit_user.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '115216310658b7c85f85ddb5-54118819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_info' => 0,
    'user_group_info' => 0,
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7c85f8ea6e0_27309845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7c85f8ea6e0_27309845')) {function content_58b7c85f8ea6e0_27309845($_smarty_tpl) {?><form id="login" name="login" target="_blank" action="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['force_custom_domain']) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['custom_domain_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
<?php }?>/login/" method="post">
	<input type="hidden" name="action" value="login" />
	<input type="hidden" name="as_user" />
	<input type="hidden" name="username" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<input type="hidden" name="session" value="<?php echo htmlspecialchars(session_id(), ENT_QUOTES, 'UTF-8', true);?>
" />
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-users/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
/?restore=1">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Profiles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</a>
	/
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<div class="page-title__buttons">
		<button type="button" name="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn--bordered login-as">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</button>
		<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-jobs/?company_name[like]=<?php echo rawurlencode($_smarty_tpl->tpl_vars['user_info']->value['username']);?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php } else { ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-resumes/?company_name[like]=<?php echo rawurlencode($_smarty_tpl->tpl_vars['user_info']->value['username']);?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-products/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	</div>
</div>

<div class="form-group clearfix">

</div>
<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel panel-default panel--max">
	<form method="post" enctype="multipart/form-data" class="panel-body form-horizontal">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>

		<input type="hidden" id="action_name" name="action_name" value="apply_info" />
		<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
			<div class="form-group" <?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='Location') {?>style="display: none;"<?php }?>>
				<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_field']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>&nbsp;<span class="required">*</span><?php }?></label>
				<div class="col-md-7">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

					<?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('multilist'))) {?>
						<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
					<?php }?>
				</div>
			</div>
		<?php } ?>
		<div class="form-group">
			<label class="col-md-2 control-label">IP</label>
			<div class="col-md-7"><label style="padding-top: 7px;"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ip'];?>
</label></div>
		</div>
		<div class="form-group">
			<div class="col-md-7 col-md-offset-2">
				<input type="hidden" name="user_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" />
				<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--primary" />
			</div>
		</div>
	</form>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script>
		$('.login-as').on('click', function() {
			$('#login').submit();
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
