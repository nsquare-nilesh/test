<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:29:54
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\users\add_user_profile_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1284558bd08ea7de3d9-71927527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec376587b27e1d0a0af0efa05b7e13772dc59fc' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\users\\add_user_profile_field.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1284558bd08ea7de3d9-71927527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_sid' => 0,
    'user_group_info' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'listing_type_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd08ea85aac5_89113428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd08ea85aac5_89113428')) {function content_58bd08ea85aac5_89113428($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/custom-fields/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Custom Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Profile Field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="panel panel-default panel--max">
	<form method="post" class="form-horizontal panel-body">
		<input type="hidden" name="action" value="add" />
		<input type="hidden" name="user_group_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" />
		<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
			<div class="form-group" style="<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='id') {?>display: none;<?php }?>">
				<label class="control-label col-md-2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>&nbsp;<span class="required">*</span><?php }?></label>
				<div class="col-md-7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
			</div>
		<?php } ?>
		<div class="form-group">
			<div class="col-md-7 col-md-offset-2"><input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--primary" /></div>
		</div>
	</form>
</div>
<script>
	$('#caption').change(function() {
		var prefix = 'id_<?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['id'];?>
_';
		var val = prefix + $(this).val();
		val = val.replace(/[^\w]/g, '');
		if (val.length > 50) { // too long
			val = prefix;
		}
		if (val == prefix) { // too long or invalid chars
			var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			for (var i = 0; i < 7; i++)
				val += possible.charAt(Math.floor(Math.random() * possible.length));
		}
		$('#id').val(val);
	}).change();
</script><?php }} ?>
