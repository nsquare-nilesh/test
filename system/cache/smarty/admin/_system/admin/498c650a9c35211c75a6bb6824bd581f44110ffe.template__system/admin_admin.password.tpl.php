<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:29
         compiled from "template__system/admin_admin:../field_types/input/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155664281258b676f10f24e8-95893787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498c650a9c35211c75a6bb6824bd581f44110ffe' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/password.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '155664281258b676f10f24e8-95893787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676f1113879_21056696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676f1113879_21056696')) {function content_58b676f1113879_21056696($_smarty_tpl) {?><div class="row">
    <div class="col-xs-12 col-sm-6 form-range">
        <input type="password"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]" class="inputString" />
    </div>
    <div class="col-xs-12 col-sm-6 form-range">
        <input type="password"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]" class="inputString" /><br />
        <span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
    </div>
</div><?php }} ?>
