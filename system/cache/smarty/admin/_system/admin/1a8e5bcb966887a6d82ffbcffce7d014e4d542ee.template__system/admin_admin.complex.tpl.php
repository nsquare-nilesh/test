<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:41:24
         compiled from "template__system/admin_admin:../field_types/input/complex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101223959658b6ba6ce886d1-26036265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8e5bcb966887a6d82ffbcffce7d014e4d542ee' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/complex.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '101223959658b6ba6ce886d1-26036265',
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
    'listing_type_id' => 0,
    'listing' => 0,
    'form_field' => 0,
    'caption' => 0,
    'field_caption' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba6cef6151_92157101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba6cef6151_92157101')) {function content_58b6ba6cef6151_92157101($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable($_smarty_tpl->tpl_vars['id']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<div id='complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
' class="complex">
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
' class="complex">
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
            <?php if (($_smarty_tpl->tpl_vars['listing_type_id']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='ApplicationSettings') {?>
                <div class="form-group">
                    <label class="col-md-2 inputName control-label">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?>
                    </label>
                    <div class="col-md-7 inputField">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'applicationSettings.tpl','complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

                    </div>
                </div>
            <?php } else { ?>
                <div class="form-group">
                    <div class="col-md-2 inputName control-label">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?>
                    </div>
                    <div class="col-md-7 inputField">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

                    </div>
                </div>
            <?php }?>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['complexElementKey']->value==1) {?>
            </div><div id='complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
'>
        <?php } else { ?>
            <div class="form-group"><div class="col-md-7 col-md-offset-2"><a href='' class="btn btn--danger remove" onclick='removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div></div></div>
        <?php }?>
    <?php } ?>
</div>
<div class="form-group form-gorup__complex">
    <div class="col-md-7 col-md-offset-2">
        <?php $_smarty_tpl->tpl_vars["field_caption"] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['tr'][0][0]->tr($_smarty_tpl->tpl_vars['caption']->value), null, 0);?>
        <a href='#' class="btn btn--secondary add" onclick='addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_caption']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
    </div>
</div>

<script>

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
        $(this).next().val($(this).data('datepicker').getFormattedDate(dFormat));
    });

    function addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
() {
        tinymce.remove();
        var id = "complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_" + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
;
        var oldField = $('#complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
');
		var oldMultiLists = oldField.find("select[multiple]").multiselect("destroy");

        var newField = oldField.clone();

        $("<div id='" + id + "' />").appendTo("#complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
");
        newField.append('<div class="form-group"><div class="col-md-7 col-md-offset-2"><a class="remove btn btn--danger" href="" onclick="removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(' + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
 + '); return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></div></div>');

        var str = newField.html();
        re = /\[1]/g;
        var newStr = str.replace(re, '['+i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
+']');
        newField.html(newStr);
        newField.find('.inputField textarea').each(function(){
            $(this).val('');
        });
        newField.appendTo('#' + id);
        tinymce.init(tinyconfig);

		oldMultiLists.each(function() {
			var oldMultiListName = $(this).attr("name");
			var newMultiListName = oldMultiListName.replace('[1]', '['+i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
+']');
			var multiListId = oldMultiListName.replace('<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[', '').replace('][1][]', '');
			var options = {
				selectedList: 3,
				selectedText: "# <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				noneSelectedText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click to select<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				checkAllText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select all<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				uncheckAllText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deselect all<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
				header: true,
				height: 'auto',
				minWidth: 209
			};
			newField.find("select[name='" + newMultiListName + "']").val('').getCustomMultiList(options, multiListId, null);
			oldField.find("select[name='" + oldMultiListName + "']").getCustomMultiList(options, multiListId, null);
		});

        $('#' + id + ' input[type=text]').val('');
        $("#" + id + " .form-control__visible").next().val('');

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
            $(this).next().val($(this).data('datepicker').getFormattedDate(dFormat));
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

<?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<?php }} ?>
