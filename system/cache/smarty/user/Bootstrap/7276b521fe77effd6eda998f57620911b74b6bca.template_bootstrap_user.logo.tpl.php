<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:02
         compiled from "template_bootstrap_user:../field_types/input/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161662145558b670823fe855-97425783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7276b521fe77effd6eda998f57620911b74b6bca' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/logo.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '161662145558b670823fe855-97425783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'value' => 0,
    'id' => 0,
    'filesize' => 0,
    'size_token' => 0,
    'form_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6708244c966_16393658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6708244c966_16393658')) {function content_58b6708244c966_16393658($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']) {?>

	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==='FILE_SIZE_EXCEEDS_SYSTEM_LIMIT') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size shouldn't be larger than 5 MB.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
		<div id="profile_logo_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<?php echo $_smarty_tpl->tpl_vars['value']->value['file_name'];?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['filesize']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['size_token']->value;?>
) |
			<a class="delete_profile_logo"
			   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
			   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<br /><br />
		</div>
	<?php }?>
	<input type="file"
		   id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_action="upload_profile_logo"
		   field_target="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   class="autouploadField"
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>style="display:none;"<?php }?> />

<?php } else { ?>
	<div id="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form--move-left profile-logo">

		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
			<div id="profile_logo_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" border="0" />
				<br/>
				<a class="delete_profile_logo"
				   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
				   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
				   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</div>
		<?php }?>
		<input type="file"
			   id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   field_action="upload_profile_logo"
			   field_target="logo_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   class="form-control"
			   <?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>style="display:none;"<?php }?> />
	</div>
<?php }?><?php }} ?>
