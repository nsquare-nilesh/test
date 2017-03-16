<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:41:40
         compiled from "template__system/admin_admin:../field_types/input/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17702392858b6742ccdbe46-86558876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419a9ecb25107b3baea08df4781c1aa5ac96e32b' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/string.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '17702392858b6742ccdbe46-86558876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'id' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'parentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6742ccf5191_89596624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6742ccf5191_89596624')) {function content_58b6742ccf5191_89596624($_smarty_tpl) {?><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="inputString <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><?php }} ?>
