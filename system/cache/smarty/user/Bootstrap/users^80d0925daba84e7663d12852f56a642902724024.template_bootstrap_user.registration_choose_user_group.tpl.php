<?php /* Smarty version Smarty-3.1.19, created on 2017-03-03 14:50:27
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\users\registration_choose_user_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618758b9355b70af20-54924236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d0925daba84e7663d12852f56a642902724024' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\users\\registration_choose_user_group.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '618758b9355b70af20-54924236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_groups_info' => 0,
    'user_group_info' => 0,
    'METADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b9355b748d96_91784709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b9355b748d96_91784709')) {function content_58b9355b748d96_91784709($_smarty_tpl) {?><div class="form form__modal">
	<h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create an account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Choose account type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</p>
	<?php  $_smarty_tpl->tpl_vars['user_group_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_group_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_groups_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_group_info']->key => $_smarty_tpl->tpl_vars['user_group_info']->value) {
$_smarty_tpl->tpl_vars['user_group_info']->_loop = true;
?>
		<p><a href="?user_group_id=<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['user_group_info']['name']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>
	<?php } ?>
</div><?php }} ?>
