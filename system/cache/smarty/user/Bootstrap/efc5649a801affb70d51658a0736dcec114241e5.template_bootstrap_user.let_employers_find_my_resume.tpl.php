<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/let_employers_find_my_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186722365658b6804daf3f82-33109472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efc5649a801affb70d51658a0736dcec114241e5' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/let_employers_find_my_resume.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '186722365658b6804daf3f82-33109472',
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
  'unifunc' => 'content_58b6804dafc305_70358756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804dafc305_70358756')) {function content_58b6804dafc305_70358756($_smarty_tpl) {?><div class="inline-block checkbox-field">
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="no_one" />
    <input type="checkbox" class="inline-block" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value=='everyone') {?>checked="checked" <?php }?> value="everyone" />
</div><?php }} ?>
