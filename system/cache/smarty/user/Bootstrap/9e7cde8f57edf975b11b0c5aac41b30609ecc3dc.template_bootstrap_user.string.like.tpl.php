<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:28
         compiled from "template_bootstrap_user:../field_types/search/string.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127031715158b6709c11e662-46160125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e7cde8f57edf975b11b0c5aac41b30609ecc3dc' => 
    array (
      0 => 'template_bootstrap_user:../field_types/search/string.like.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '127031715158b6709c11e662-46160125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'parentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6709c172361_84374680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6709c172361_84374680')) {function content_58b6709c172361_84374680($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/modifier.replace.php';
?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]"  placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['like']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0]) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['equal'];?>
<?php }?>"/>
<?php if ($_smarty_tpl->tpl_vars['parentID']->value) {?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['parentID']->value,''), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'_',''), null, 0);?>
<?php }?><?php }} ?>
