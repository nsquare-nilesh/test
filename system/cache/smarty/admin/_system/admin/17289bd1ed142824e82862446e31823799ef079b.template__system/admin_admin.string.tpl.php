<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:46:25
         compiled from "template__system/admin_admin:../field_types/search/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2824858c155a9d86912-77006884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17289bd1ed142824e82862446e31823799ef079b' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/string.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2824858c155a9d86912-77006884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c155a9db1675_90329366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c155a9db1675_90329366')) {function content_58c155a9db1675_90329366($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['equal'];?>
" <?php if ($_smarty_tpl->tpl_vars['url']->value=="/manage-invoices/") {?><?php if ($_smarty_tpl->tpl_vars['id']->value=='sid') {?><?php }?>placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invoice#<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php }?>/><?php }} ?>
