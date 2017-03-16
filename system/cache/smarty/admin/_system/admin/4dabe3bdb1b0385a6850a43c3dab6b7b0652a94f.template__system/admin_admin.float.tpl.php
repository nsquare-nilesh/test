<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 13:07:10
         compiled from "template__system/admin_admin:../field_types/input/float.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2308558c10626b360f5-54559133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dabe3bdb1b0385a6850a43c3dab6b7b0652a94f' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/float.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2308558c10626b360f5-54559133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'value' => 0,
    'id' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c10626b50e00_31471476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c10626b50e00_31471476')) {function content_58c10626b50e00_31471476($_smarty_tpl) {?><input type="text" class="inputInteger <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? 0 : $tmp);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />
<?php }} ?>
