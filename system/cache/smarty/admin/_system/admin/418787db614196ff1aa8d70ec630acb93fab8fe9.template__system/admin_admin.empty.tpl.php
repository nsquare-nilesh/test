<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 21:17:54
         compiled from "template__system/admin_admin:empty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68940962958b83eaab3d494-62612825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418787db614196ff1aa8d70ec630acb93fab8fe9' => 
    array (
      0 => 'template__system/admin_admin:empty.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '68940962958b83eaab3d494-62612825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b83eaabbf209_70112027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b83eaabbf209_70112027')) {function content_58b83eaabbf209_70112027($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('messages', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo trim(Smarty::$_smarty_vars['capture']['messages']);?>
<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>
<?php }} ?>
