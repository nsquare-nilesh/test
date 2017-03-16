<?php /* Smarty version Smarty-3.1.19, created on 2017-03-03 14:49:12
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\classifieds\browseCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311058b93510795a48-62311598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15cbac870f9d38971962b38a1ae741ec18aa15b5' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\classifieds\\browseCompany.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1311058b93510795a48-62311598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b935107d5087_58077166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b935107d5087_58077166')) {function content_58b935107d5087_58077166($_smarty_tpl) {?><div class="search-header"></div>
<?php $_smarty_tpl->tpl_vars["site_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'], null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('description', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Companies on $site_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->getSubTemplate ("searchFormByCompany.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
