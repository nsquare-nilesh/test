<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/string.location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192097433858b6804dad4ea4-07928436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39fd9b165f857dddfb8bd0a51b1c7f1411e7c65b' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/string.location.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '192097433858b6804dad4ea4-07928436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'parentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804daeecf3_86523785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804daeecf3_86523785')) {function content_58b6804daeecf3_86523785($_smarty_tpl) {?><input id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="form-control " name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />
<?php }} ?>
