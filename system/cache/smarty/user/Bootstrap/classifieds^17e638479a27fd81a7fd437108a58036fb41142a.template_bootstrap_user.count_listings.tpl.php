<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:58
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\classifieds\count_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2827458c153ae1ffc61-60972208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e638479a27fd81a7fd437108a58036fb41142a' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\classifieds\\count_listings.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2827458c153ae1ffc61-60972208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153ae20f508_17750403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153ae20f508_17750403')) {function content_58c153ae20f508_17750403($_smarty_tpl) {?><div class="main-banner__head">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['main_banner_text'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
