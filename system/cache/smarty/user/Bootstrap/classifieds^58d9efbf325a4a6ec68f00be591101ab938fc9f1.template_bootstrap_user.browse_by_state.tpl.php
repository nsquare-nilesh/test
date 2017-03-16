<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:58
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\classifieds\browse_by_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828458c153aeb76863-54802023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d9efbf325a4a6ec68f00be591101ab938fc9f1' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\classifieds\\browse_by_state.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1828458c153aeb76863-54802023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'browseItems' => 0,
    'item' => 0,
    'i' => 0,
    'recordsNumToDisplay' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153aebf72b5_58044289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153aebf72b5_58044289')) {function content_58c153aebf72b5_58044289($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp64\\www\\AssessorList\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
<ul class="list-unstyled browse-by__list">
	<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browseItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['count']>0&&$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['recordsNumToDisplay']->value) {?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/states/jobs-in-<?php echo rawurlencode($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['pretty_url'][0][0]->pretty_url($_smarty_tpl->tpl_vars['item']->value['caption'],false));?>
/">
					<span class="browse-by__item"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['caption'], ENT_QUOTES, 'UTF-8', true),28,"...",true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					<span class="count">(<?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
)</span>
				</a>
			</li>
		<?php }?>
	<?php }
if (!$_smarty_tpl->tpl_vars["item"]->_loop) {
?>
		<li class="browse-by__list-empty"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, we don't currently have any jobs for this search. Please try another search.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
	<?php } ?>
</ul>
<?php }} ?>
