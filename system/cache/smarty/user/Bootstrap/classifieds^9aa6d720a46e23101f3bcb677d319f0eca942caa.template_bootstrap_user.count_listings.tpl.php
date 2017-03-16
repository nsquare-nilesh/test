<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/count_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190519610858b588a6a78797-27292285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa6d720a46e23101f3bcb677d319f0eca942caa' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/count_listings.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '190519610858b588a6a78797-27292285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a6a7cf18_53118671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a6a7cf18_53118671')) {function content_58b588a6a7cf18_53118671($_smarty_tpl) {?><div class="main-banner__head">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['main_banner_text'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }} ?>
