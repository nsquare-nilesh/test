<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:46:25
         compiled from "template__system/admin_admin:../field_types/search/date.to.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3052358c155a9cd0642-81813303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4b5b4d202c1aa4807e8ac9a0e5f4f3cc1e5aed' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/date.to.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '3052358c155a9cd0642-81813303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c155a9ce3ed7_43274401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c155a9ce3ed7_43274401')) {function content_58c155a9ce3ed7_43274401($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[not_more]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['not_more'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_notmore" class="input__datepicker"/>
<img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icon-calendar.svg" alt="..." title="..."><?php }} ?>
