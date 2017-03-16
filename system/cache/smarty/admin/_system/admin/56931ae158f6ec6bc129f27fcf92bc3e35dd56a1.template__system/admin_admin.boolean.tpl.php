<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:38
         compiled from "template__system/admin_admin:../field_types/search/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42450737258b676faead970-08324681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56931ae158f6ec6bc129f27fcf92bc3e35dd56a1' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/boolean.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '42450737258b676faead970-08324681',
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
  'unifunc' => 'content_58b676faeb39d1_25719979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676faeb39d1_25719979')) {function content_58b676faeb39d1_25719979($_smarty_tpl) {?><label class="cr-styled">
    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" <?php if ($_smarty_tpl->tpl_vars['value']->value['equal']=='1') {?>checked="checked"<?php }?> value="1"/>
    <i class="fa"></i>
</label><?php }} ?>
