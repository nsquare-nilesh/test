<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:40:42
         compiled from "template_bootstrap_user:../field_types/display/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115326159258b6ba4213fff0-50589923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e62c0a2fa7b329cdba86f57a8280c10fb841ba' => 
    array (
      0 => 'template_bootstrap_user:../field_types/display/date.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '115326159258b6ba4213fff0-50589923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'format' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba4214f175_17315547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba4214f175_17315547')) {function content_58b6ba4214f175_17315547($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['format']->value) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['format']->value);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['value']->value);?>

<?php }?><?php }} ?>
