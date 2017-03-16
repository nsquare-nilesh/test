<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:40:42
         compiled from "template_bootstrap_user:../field_types/display/complex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136972064658b6ba420c46c2-82007796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ee049070a192248a9c6b75bd81d2c495f160c6' => 
    array (
      0 => 'template_bootstrap_user:../field_types/display/complex.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '136972064658b6ba420c46c2-82007796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'complexField' => 0,
    'complexElements' => 0,
    'complexElementKey' => 0,
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba42139243_26495213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba42139243_26495213')) {function content_58b6ba42139243_26495213($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable($_smarty_tpl->tpl_vars['id']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<?php if ($_smarty_tpl->tpl_vars['complexField']->value=="Education") {?>

	<?php  $_smarty_tpl->tpl_vars["complexElementItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["complexElementItem"]->_loop = false;
 $_smarty_tpl->tpl_vars["complexElementKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['complexElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["complexElementItem"]->key => $_smarty_tpl->tpl_vars["complexElementItem"]->value) {
$_smarty_tpl->tpl_vars["complexElementItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["complexElementKey"]->value = $_smarty_tpl->tpl_vars["complexElementItem"]->key;
?>
		<div class="complex-block">
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_DegreeSpecialty','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
				<div class="listing-item__title">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_DegreeSpecialty','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="listing-item__info clearfix">
				<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>"ED_From",'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_To','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3||$_tmp4) {?>
					<span class="listing-item__info--item listing-item__info--item-date">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>"ED_From",'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value,'format'=>"%b %Y"),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_To','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value,'format'=>"%b %Y"),$_smarty_tpl);?>

					</span>
				<?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_UniversityInstitution','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5) {?>
					<span class="listing-item__info--item listing-item__info--item-education">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'ED_UniversityInstitution','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</span>
				<?php }?>
			</div>
		</div>
	<?php } ?>

<?php } elseif ($_smarty_tpl->tpl_vars['complexField']->value=="WorkExperience") {?>

	<?php  $_smarty_tpl->tpl_vars["complexElementItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["complexElementItem"]->_loop = false;
 $_smarty_tpl->tpl_vars["complexElementKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['complexElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["complexElementItem"]->key => $_smarty_tpl->tpl_vars["complexElementItem"]->value) {
$_smarty_tpl->tpl_vars["complexElementItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["complexElementKey"]->value = $_smarty_tpl->tpl_vars["complexElementItem"]->key;
?>
		<div class="complex-block">
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_JobTitle','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6) {?>
				<div class="listing-item__title">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_JobTitle','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="listing-item__info clearfix">
				<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>"WE_From",'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_To','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp7||$_tmp8) {?>
					<span class="listing-item__info--item listing-item__info--item-date">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>"WE_From",'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value,'format'=>"%b %Y"),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_To','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value,'format'=>"%b %Y"),$_smarty_tpl);?>

					</span>
				<?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_Company','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9) {?>
					<span class="listing-item__info--item listing-item__info--item-company">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_Company','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</span>
				<?php }?>
			</div>
			<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_Description','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10) {?>
				<div>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WE_Description','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

				</div>
			<?php }?>
		</div>
	<?php } ?>
<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars["complexElementItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["complexElementItem"]->_loop = false;
 $_smarty_tpl->tpl_vars["complexElementKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['complexElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["complexElementItem"]->key => $_smarty_tpl->tpl_vars["complexElementItem"]->value) {
$_smarty_tpl->tpl_vars["complexElementItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["complexElementKey"]->value = $_smarty_tpl->tpl_vars["complexElementItem"]->key;
?>
		<div class="complexField">
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("displayPropertyValue", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (Smarty::$_smarty_vars['capture']['displayPropertyValue']) {?>
					<fieldset>
						<span class="strong"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
:&nbsp;</span>
						<?php echo Smarty::$_smarty_vars['capture']['displayPropertyValue'];?>

					</fieldset>
				<?php }?>
			<?php } ?>
		</div>
	<?php } ?>

<?php }?>
<?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<?php }} ?>
