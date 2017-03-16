<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:46:25
         compiled from "template__system/admin_admin:../field_types/search/date.from.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2298658c155a9c6c0b8-38670537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f3d9d5dbd7b42077d662f01623822ca8f852b9' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/date.from.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2298658c155a9c6c0b8-38670537',
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
  'unifunc' => 'content_58c155a9c849e2_23694105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c155a9c849e2_23694105')) {function content_58c155a9c849e2_23694105($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[not_less]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['not_less'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_notless" class="input__datepicker"/>
<img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icon-calendar.svg" alt="..." title="...">
<?php }} ?>
