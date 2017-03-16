<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:41:24
         compiled from "template__system/admin_admin:../field_types/input/let_employers_find_my_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189237578558b6ba6ce7cfe0-16528726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de74618d3289df94ea25a05119de71c8081a874' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/let_employers_find_my_resume.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '189237578558b6ba6ce7cfe0-16528726',
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
  'unifunc' => 'content_58b6ba6ce85705_44992994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba6ce85705_44992994')) {function content_58b6ba6ce85705_44992994($_smarty_tpl) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="no_one" />
<label class="cr-styled">
    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value=='everyone') {?>checked="checked" <?php }?> value="everyone" />
    <i class="fa"></i>
</label>
<?php }} ?>
