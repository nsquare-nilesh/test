<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:../field_types/search/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5225512358b588a68dee64-32559523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de15ad99f297c14b5e03b5b0cd1e0f98561ad1b8' => 
    array (
      0 => 'template_bootstrap_user:../field_types/search/text.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '5225512358b588a68dee64-32559523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a68f2f60_55213567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a68f2f60_55213567')) {function content_58b588a68f2f60_55213567($_smarty_tpl) {?><input type="text" value="<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?><?php echo $_smarty_tpl->tpl_vars['value']->value['all_words'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php }?>" class="form-control <?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?>form-control__centered<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?>all_words<?php } else { ?>like<?php }?>]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?>placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php }?> /><?php }} ?>
