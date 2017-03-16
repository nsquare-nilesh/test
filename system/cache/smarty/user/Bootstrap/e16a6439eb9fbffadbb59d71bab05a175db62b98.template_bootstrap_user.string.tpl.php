<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:08:32
         compiled from "template_bootstrap_user:../field_types/input/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88532568058b670823aca95-41206495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e16a6439eb9fbffadbb59d71bab05a175db62b98' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/string.tpl',
      1 => 1488633325,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '88532568058b670823aca95-41206495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b670823c5874_28868655',
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'value' => 0,
    'complexField' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b670823c5874_28868655')) {function content_58b670823c5874_28868655($_smarty_tpl) {?><input id="<?php if ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" type="text" maxlength="400" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="form-control <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />
<?php }} ?>
