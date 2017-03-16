<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:input_form_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17927185258b6804d8b82b7-65347472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511080e9e7fda8872457cd07e846d91fa0f2b698' => 
    array (
      0 => 'template_bootstrap_user:input_form_default.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '17927185258b6804d8b82b7-65347472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'form_field' => 0,
    'listing_type_id' => 0,
    'listing' => 0,
    'listingTypeID' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804d961090_93740445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804d961090_93740445')) {function content_58b6804d961090_93740445($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['form_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['form_field']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['form_field'] = clone $_smarty_tpl->tpl_vars['form_field']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['form_field'] = clone $_smarty_tpl->tpl_vars['form_field'];?>
	<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='youtube') {?>
		<div class="form-group">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } elseif (($_smarty_tpl->tpl_vars['listing_type_id']->value=="Resume"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Resume")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=="anonymous") {?>
		<div class="form-group">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } elseif (($_smarty_tpl->tpl_vars['listingTypeID']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='ApplicationSettings') {?>
		<div class="form-group">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'applicationSettings.tpl'),$_smarty_tpl);?>

		</div>
	<?php } elseif (($_smarty_tpl->tpl_vars['listingTypeID']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='expiration_date') {?>
		<div class="form-group form-group__half">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'expiration_date.tpl'),$_smarty_tpl);?>

		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['type']=='location') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='EmploymentType') {?>
		<div class="form-group form-group__half">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='JobCategory') {?>
		<div class="form-group form-group__half">
			<label class="form-label">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?>
			</label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='access_type'||$_smarty_tpl->tpl_vars['form_field']->value['type']=='boolean') {?>
		<div class="form-group">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

			<label class="form-label inline" for="<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='Phone'&&$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=='JobSeeker') {?>
		<div class="form-group form-group__half">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='GooglePlace'&&$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=='JobSeeker') {?>
		<div class="form-group form-group__half">
			<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<div class="form-group <?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=='complex') {?>form-group__complex<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=='complex') {?>
				<h3 class="title__secondary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></h3>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

			<?php } else { ?>
				<label class="form-label">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?>
				</label>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php }?>
<?php } ?>
<?php }} ?>
