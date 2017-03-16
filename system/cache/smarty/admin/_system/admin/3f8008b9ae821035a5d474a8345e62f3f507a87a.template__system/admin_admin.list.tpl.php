<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:41:40
         compiled from "template__system/admin_admin:../field_types/display/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207396623158b6742ccf8a58-62670192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8008b9ae821035a5d474a8345e62f3f507a87a' => 
    array (
      0 => 'template__system/admin_admin:../field_types/display/list.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '207396623158b6742ccf8a58-62670192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_values' => 0,
    'list_value' => 0,
    'value' => 0,
    'displayAS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6742cd2fec1_69436174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6742cd2fec1_69436174')) {function content_58b6742cd2fec1_69436174($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value']->value) {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['displayAS']->value)) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value[$_smarty_tpl->tpl_vars['displayAS']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }?>
<?php } ?><?php }} ?>
