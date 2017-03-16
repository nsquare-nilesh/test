<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/complex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124884273958b6804dafee16-21670847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c3df7b25ef3e1ba0d2cf2e905e0dfa349d35eac' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/complex.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '124884273958b6804dafee16-21670847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_field' => 0,
    'complexField' => 0,
    'complexElements' => 0,
    'complexElementKey' => 0,
    'form_fields' => 0,
    'caption' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804db9c9a7_21045248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804db9c9a7_21045248')) {function content_58b6804db9c9a7_21045248($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable($_smarty_tpl->tpl_vars['form_field']->value['id'], null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<div class="complex-wrapper">
	<div id='complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
' class="complex clearfix">
		<?php  $_smarty_tpl->tpl_vars["complexElementItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["complexElementItem"]->_loop = false;
 $_smarty_tpl->tpl_vars["complexElementKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['complexElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["complexElementItem"]->key => $_smarty_tpl->tpl_vars["complexElementItem"]->value) {
$_smarty_tpl->tpl_vars["complexElementItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["complexElementKey"]->value = $_smarty_tpl->tpl_vars["complexElementItem"]->key;
?>

			<?php if ($_smarty_tpl->tpl_vars['complexElementKey']->value!=1) {?>
				<div id='complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
' class="clearfix complex">
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=="ED_From"||$_smarty_tpl->tpl_vars['form_field']->value['id']=="WE_From") {?>
					<div class="form-group form-group__half form-group__range">
						<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=="ED_To"||$_smarty_tpl->tpl_vars['form_field']->value['id']=="WE_To") {?>
					<div class="form-group form-group__half form-group__range">
						<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=="ED_DegreeSpecialty"||$_smarty_tpl->tpl_vars['form_field']->value['id']=="WE_JobTitle") {?>
					<div class="form-group form-group__half">
						<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=="ED_UniversityInstitution"||$_smarty_tpl->tpl_vars['form_field']->value['id']=="WE_Company") {?>
					<div class="form-group form-group__half">
						<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</div>
				<?php } else { ?>
					<div class="form-group">
						<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

					</div>
				<?php }?>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['complexElementKey']->value!=1) {?>
				<div class="form-group text-right form-group__remove">
					<button class="remove btn btn__white" onclick='removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
				</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['complexElementKey']->value==1) {?>
				</div>
			<?php }?>
		<?php } ?>
</div>
<div class="form-group form-group__add">
	<?php $_smarty_tpl->tpl_vars["field_caption"] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['tr'][0][0]->tr($_smarty_tpl->tpl_vars['caption']->value), null, 0);?>
	<button class="add btn btn__white" onclick='addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add $field_caption<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<script type="text/javascript">

	var i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
 + 1;

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yyyy");

	$('.form-control__visible').datepicker({
		language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
		autoclose: true,
		format: 'mm.yyyy',
		startView: 1,
		minViewMode: 1,
		startDate: new Date(1940, 1 - 1, 1),
		endDate: '+10y',
	});

	$('.form-control__visible').on('change', function() {
		$(this).closest('.form-group').find('input[type="hidden"]').val($(this).data('datepicker').getFormattedDate(dFormat));
	});

	function addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
() {
		tinymce.remove();
		var id = "complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_" + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
;
		var oldField = $('#complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
');
		var newField = oldField.clone();

		$("<div id='" + id + "'/>").addClass('complex clearfix').appendTo($('#complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
').closest('.complex-wrapper'));
		newField.removeClass('complex clearfix');
		newField.append('<div class="form-group text-right form-group__remove"><button class="remove btn btn__white" onclick="removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(' + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
 + '); return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<\/button><\/div>');

		var str = newField.html();
		var newStr = str.replace(/\[1]/g, '['+i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
+']');
		newField.html(newStr);
		newField.find('textarea').each(function(){
			$(this).val('');
		});
		newField.appendTo('#' + id);

		tinymce.init(tinyconfig);

		$('#' + id + ' input[type=text]').val('');
		$("#" + id + " .form-group__range input").attr('value', ''); //почему то только так обнуляется значение в инпуте

		$('.form-control__visible').datepicker({
			language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
			autoclose: true,
			format: 'mm.yyyy',
			startView: 1,
			minViewMode: 1,
			startDate: new Date(1940, 1 - 1, 1),
			endDate: '+10y'
		});

		$('.form-control__visible').on('change', function() {
			$(this).closest('.form-group').find('input[type="hidden"]').val($(this).data('datepicker').getFormattedDate(dFormat));
		});

		$('.ui-datepicker-trigger').on('click', function () {
			$(this).closest('.form-group').find('.form-control__visible').focus();
		});

		i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
++;

	}

	function removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(id) {
		$('#complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_' + id).remove();
	}
</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<?php }} ?>
