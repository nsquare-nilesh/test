<?php /* Smarty version Smarty-3.1.19, created on 2017-03-03 13:55:06
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\classifieds\browse_by_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2580958b7b98324b805-83840065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22501213e2e08336a6eb9c35b9fbeb8acc9299b5' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\classifieds\\browse_by_category.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2580958b7b98324b805-83840065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7b983275867_16129537',
  'variables' => 
  array (
    'browseItems' => 0,
    'category' => 0,
    'i' => 0,
    'recordsNumToDisplay' => 0,
    'GLOBALS' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7b983275867_16129537')) {function content_58b7b983275867_16129537($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\AssessorList\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
<ul class="list-unstyled browse-by__list">
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['browseItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['category']->value['count']>0&&$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['recordsNumToDisplay']->value) {?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/categories/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['pretty_url'][0][0]->pretty_url($_smarty_tpl->tpl_vars['category']->value['caption']);?>
-jobs/">
					<span class="browse-by__item"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['caption'], ENT_QUOTES, 'UTF-8', true),28,"...",true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					<span class="count">(<?php echo $_smarty_tpl->tpl_vars['category']->value['count'];?>
)</span>
				</a>
			</li>
		<?php }?>
	<?php }
if (!$_smarty_tpl->tpl_vars['category']->_loop) {
?>
		<li class="browse-by__list-empty"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, we don't currently have any jobs for this search. Please try another search.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
	<?php } ?>
</ul><?php }} ?>
