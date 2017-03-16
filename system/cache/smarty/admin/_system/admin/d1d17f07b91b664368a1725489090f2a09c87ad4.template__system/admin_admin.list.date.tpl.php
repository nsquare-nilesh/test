<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:20
         compiled from "template__system/admin_admin:../field_types/search/list.date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84921711658b676e89bf1f6-27729096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d17f07b91b664368a1725489090f2a09c87ad4' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/list.date.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '84921711658b676e89bf1f6-27729096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'list_values' => 0,
    'list_value' => 0,
    'value' => 0,
    'value_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676e8a64527_18045255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676e8a64527_18045255')) {function content_58b676e8a64527_18045255($_smarty_tpl) {?><select name='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[multi_like][]' class="searchList">
	<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
" <?php  $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['multi_like']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->key => $_smarty_tpl->tpl_vars['value_id']->value) {
$_smarty_tpl->tpl_vars['value_id']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value_id']->value) {?>selected="selected"<?php }?><?php } ?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>
