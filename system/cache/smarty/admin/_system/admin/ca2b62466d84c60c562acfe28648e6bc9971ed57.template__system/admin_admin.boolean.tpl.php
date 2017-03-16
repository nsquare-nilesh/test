<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:43:48
         compiled from "template__system/admin_admin:../field_types/display/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57212435258b682bc139fd3-99195251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca2b62466d84c60c562acfe28648e6bc9971ed57' => 
    array (
      0 => 'template__system/admin_admin:../field_types/display/boolean.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '57212435258b682bc139fd3-99195251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b682bc17ed46_43075430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b682bc17ed46_43075430')) {function content_58b682bc17ed46_43075430($_smarty_tpl) {?><label class="cr-styled" onclick="return false;">
    <input type="hidden" class="" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="0" />
    <input type="checkbox" class="" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>checked="checked" <?php }?> value="1" onchange="return false;" />
    <i class="fa"></i>
</label>
<?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
    <br><span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
<?php }?><?php }} ?>
