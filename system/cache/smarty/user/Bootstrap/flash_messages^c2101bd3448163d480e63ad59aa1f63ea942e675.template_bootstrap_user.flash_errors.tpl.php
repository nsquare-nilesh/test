<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:02
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/flash_messages/flash_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36974827658b670825766e2-70674821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2101bd3448163d480e63ad59aa1f63ea942e675' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/flash_messages/flash_errors.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '36974827658b670825766e2-70674821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messagesArray' => 0,
    'messages' => 0,
    'message' => 0,
    'messageId' => 0,
    'METADATA' => 0,
    'type' => 0,
    'messageValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b670825c4e03_55890718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b670825c4e03_55890718')) {function content_58b670825c4e03_55890718($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['messages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['messages']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messagesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['messages']->key => $_smarty_tpl->tpl_vars['messages']->value) {
$_smarty_tpl->tpl_vars['messages']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['messages']->key;
?>
	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['message']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['messageId'] = new Smarty_variable($_smarty_tpl->tpl_vars['message']->value['messageId'], null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['messageId'] = new Smarty_variable($_smarty_tpl->tpl_vars['message']->value, null, 0);?>
		<?php }?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'messageValue', null); ob_start(); ?>
			
			<?php if ($_smarty_tpl->tpl_vars['messageId']->value=='EMPTY_VALUE') {?>
				<?php $_smarty_tpl->tpl_vars["field_caption"] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['tr'][0][0]->tr($_smarty_tpl->tpl_vars['message']->value['fieldCaption']), null, 0);?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter '$field_caption'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['messageId']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<p class="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messageValue']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php } ?>
<?php } ?>
<?php }} ?>
