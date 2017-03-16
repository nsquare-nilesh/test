<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:51:40
         compiled from "template__system/admin_admin:navigation_menu_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13605231358b676844f6bf7-76266960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc66d7ad9840a397d9aa6dd23abb46fe600c84de' => 
    array (
      0 => 'template__system/admin_admin:navigation_menu_item.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '13605231358b676844f6bf7-76266960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'system_pages' => 0,
    'uri' => 0,
    'page' => 0,
    'pages' => 0,
    'selected' => 0,
    'sub_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676845308d2_32841558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676845308d2_32841558')) {function content_58b676845308d2_32841558($_smarty_tpl) {?><li class="dd-item">
	<div class="dd-handle sortable-handle">...</div>
	<div class="dd-content clearfix">
		<input class="dd-content__item" type="text" name="menu_item[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="parent[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent'];?>
" />
		<select class="page-selector dd-content__item">
			<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(false, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['uri']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['url']==$_smarty_tpl->tpl_vars['uri']->value) {?>selected="selected" <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(true, null, 0);?><?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</option>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['url']==$_smarty_tpl->tpl_vars['page']->value['uri']) {?>selected="selected" <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(true, null, 0);?><?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</option>
			<?php } ?>
			<option value="" <?php if ($_smarty_tpl->tpl_vars['selected']->value==false) {?>selected="selected<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
External Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
		</select>
		<span class="external-link dd-content__item">
			<input type="text" name="link[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" />
		</span>
		<i class="ion-close-circled"></i>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
		<ol class="dd-list">
			<?php  $_smarty_tpl->tpl_vars['sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_item']->key => $_smarty_tpl->tpl_vars['sub_item']->value) {
$_smarty_tpl->tpl_vars['sub_item']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ('navigation_menu_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['sub_item']->value), 0);?>

			<?php } ?>
		</ol>
	<?php }?>
</li>
<?php }} ?>
