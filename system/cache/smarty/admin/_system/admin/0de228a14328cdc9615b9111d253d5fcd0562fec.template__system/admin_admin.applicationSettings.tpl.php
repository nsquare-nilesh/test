<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 12:52:06
         compiled from "template__system/admin_admin:../field_types/input/applicationSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62532878558b7c81e84b225-65985912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de228a14328cdc9615b9111d253d5fcd0562fec' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/applicationSettings.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '62532878558b7c81e84b225-65985912',
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
  'unifunc' => 'content_58b7c81e8be0e3_22825103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7c81e8be0e3_22825103')) {function content_58b7c81e8be0e3_22825103($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<script type="text/javascript">
	function displayInput(disableId) {
		$("[id^='ApplicationSettings']")
				.prop('disabled', true)
				.closest('div').hide();
		var appSettingsDiv = document.getElementById(disableId);
		$("[id!=" + disableId + "][id^='ApplicationSettings']").val('');
		appSettingsDiv.disabled = false;
		$(appSettingsDiv).closest('div').show();
	}

	function validateForm(formName) {
		var form = document.getElementById(formName);
		var appSettingsRadio		= form.elements['<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]'];
		var appSettingsEmailValue	= form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1"].value;
		var appSettingsWebValue		= form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2"].value;
		for(var i = 0; i < appSettingsRadio.length; i++) {
			if(appSettingsRadio[i].checked && appSettingsRadio[i].value == 1) {
				var exp = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
				if ((appSettingsEmailValue != '') && !(appSettingsEmailValue.match(exp))) {
					message('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"How to Apply" wrong email format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					return false;
				}
			} else if(appSettingsRadio[i].checked && appSettingsRadio[i].value == 2) {
				if (appSettingsWebValue == '') {
					message('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"How to Apply" by url is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					return false;
				} else if( !( appSettingsWebValue.match(/https?:\/\//)) ) {
					form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2"].value = 'http://' + appSettingsWebValue;
					return true;
				}
			}
		}
		return true;
	}

	function getUrl(name) {
		var url = document.getElementById(name);
		if (url.value != '') {
			if (!(url.value.match(/https?:\/\//)) ) {
				url.value = 'http://' + url.value;
			}
			window.open(url.value, "target");
		} else {
			alert('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"Application Settings" url is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
		}
	}

	function message(title, content) {
		var modal = $('#message-modal');
		modal.find('.modal-title').html(title);
		modal.find('.modal-body').html(content);
		modal.modal('show');
	}
</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="message-modal-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<h4 class="modal-title" id="message-modal-label">Modal title</h4>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
			</div>
		</div>
	</div>
</div>
<div id="application-settings" class="form-horizontal">
	<label class="cr-styled cr-styled__radio" style="margin-right: 15px">
		<input id="via-email" class="inputRadio" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==1||$_smarty_tpl->tpl_vars['value']->value['add_parameter']=='') {?>checked="checked"<?php }?> onclick="displayInput('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1');" type="radio" />
		<i class="fa"></i>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
By Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</label>
	<label class="cr-styled cr-styled__radio">
		<input id="via-site" class="inputRadio" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]" value="2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?>checked="checked"<?php }?> onclick="displayInput('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2');" type="radio" />
		<i class="fa"></i>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
By URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</label>
	<div class="row">
		<div class="col-xs-12" valign="top" colspan="2">
			<div class="application-settings__email with-tooltip" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?>style="display: none;"<?php }?>>
				<input value="<?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==1) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
<?php }?>" class="inputString"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?>disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1" type="text" />
				<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send applications to this e-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
			</div>
			<div class="application-settings__site with-tooltip" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']!=2) {?>style="display: none;"<?php }?>>
				<input value="<?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
<?php }?>" class="inputString " name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']!=2) {?>disabled="disabled"<?php }?> type="text" />
				<span data-toggle="tooltip" data-placement="auto left" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use the following format:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 http://yoursite.com"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
