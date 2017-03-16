<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:12
         compiled from "template__system/admin_admin:../field_types/search/string.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138101458158b676e03656d1-60562125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bc5e6ba8a0d0e144501c1e08517d50b68435797' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/string.like.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '138101458158b676e03656d1-60562125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676e03a65b6_59214441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676e03a65b6_59214441')) {function content_58b676e03a65b6_59214441($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]" <?php if ($_smarty_tpl->tpl_vars['url']->value=="/manage-users/employer/"||$_smarty_tpl->tpl_vars['url']->value=="/manage-users/jobseeker/") {?>placeholder="<?php if ($_smarty_tpl->tpl_vars['id']->value=='CompanyName') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } elseif ($_smarty_tpl->tpl_vars['id']->value=='username') {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['url']->value=="/guest-alerts/") {?>placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['url']->value=="/manage-invoices/") {?><?php if ($_smarty_tpl->tpl_vars['id']->value=='username') {?><?php }?>placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"<?php }?>
        value="<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['like']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['equal']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['equal'];?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?>" /><?php }} ?>
