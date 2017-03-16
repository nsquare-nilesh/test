<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:29
         compiled from "template__system/admin_admin:../field_types/input/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108569906558b676f11a9b08-40579725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c467d059d7be4ca2e5175d90a706b781d83e8e' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/logo.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '108569906558b676f11a9b08-40579725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'id' => 0,
    'value' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676f12169b0_42230432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676f12169b0_42230432')) {function content_58b676f12169b0_42230432($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']) {?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==='NOT_ACCEPTABLE_FILE_FORMAT') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not supported file format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==='UPLOAD_ERR_INI_SIZE') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size shouldn't be larger than 5 MB.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==='NOT_SUPPORTED_IMAGE_FORMAT') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not supported file format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>
	<div id="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div class="input-group input-group__file">
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_name'];?>
" alt="" />

			<input type="file"
				   id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   field_action="upload_profile_logo"
				   field_target="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   class="autouploadField"
				   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

			<span class="input-group-btn">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
					<a href="#" class="btn btn-default btn-change btn-change__replace"><i class="fa fa-exchange" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<a href="#" class="btn btn-default btn-change btn-change__upload hidden"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<a  field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
						user_sid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
"
						href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						class="delete_profile_logo btn btn--danger">
						<i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				<?php } else { ?>
					<a href="#" class="btn btn-default btn-change"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php }?>
			</span>
		</div>
		<div id="profile_logo_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pull-left">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" border="0" />
		</div>
	</div>
<?php } else { ?>
	<div id="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div class="input-group input-group__file">
			<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_name'];?>
" alt="" />

			<input type="file"
				   id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   field_action="upload_profile_logo"
				   field_target="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   class="autouploadField"
				   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

			<span class="input-group-btn">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
					<a href="#" class="btn btn-default btn-change btn-change__replace"><i class="fa fa-exchange" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<a href="#" class="btn btn-default btn-change btn-change__upload hidden"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<a  field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
						user_sid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
"
						href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						class="delete_profile_logo btn btn--danger">
						<i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				<?php } else { ?>
					<a href="#" class="btn btn-default btn-change"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php }?>
			</span>
		</div>
		<div id="profile_logo_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pull-left">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" border="0" />
		</div>
	</div>
<?php }?><?php }} ?>
