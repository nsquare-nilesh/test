<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:02
         compiled from "template_bootstrap_user:../field_types/input/password_in_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40791208158b670823c7aa1-29351747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d4b8e7d5671426b504574f87ac61b1578e6cdc' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/password_in_row.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '40791208158b670823c7aa1-29351747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b670823d7c01_74413561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b670823d7c01_74413561')) {function content_58b670823d7c01_74413561($_smarty_tpl) {?><div class="form-group form-group__half">
    <label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_fields']->value['password']['is_required']) {?>*<?php }?></label>
    <input type="password" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]" class="form-control" />
</div>
<div class="form-group form-group__half">
    <label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_fields']->value['password']['is_required']) {?>*<?php }?></label>
    <input type="password" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]" class="form-control" />
</div><?php }} ?>
