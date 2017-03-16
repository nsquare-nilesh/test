<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6728839558b6804dab57c0-38528731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0bf224970e267293ce920eba421e4b4e44e68b' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/location.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '6728839558b6804dab57c0-38528731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'parentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804dad2587_67961135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804dad2587_67961135')) {function content_58b6804dad2587_67961135($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["LocationValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<div class="form-group <?php if ($_smarty_tpl->tpl_vars['form_field']->value['hidden']||true) {?>hidden<?php }?>">
		<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['parentID']->value,'template'=>"string.location.tpl"),$_smarty_tpl);?>

		<?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('multilist'))) {?>
			<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
		<?php }?>
	</div>
<?php } ?>
<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"];?><?php }} ?>
