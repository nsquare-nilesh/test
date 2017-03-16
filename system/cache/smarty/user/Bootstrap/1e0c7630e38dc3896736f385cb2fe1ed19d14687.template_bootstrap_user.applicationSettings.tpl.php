<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 13:02:06
         compiled from "template_bootstrap_user:../field_types/input/applicationSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2415958c104f6d590d5-36389113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0c7630e38dc3896736f385cb2fe1ed19d14687' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/applicationSettings.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2415958c104f6d590d5-36389113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c104f6e28022_79924767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c104f6e28022_79924767')) {function content_58c104f6e28022_79924767($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">

		function displayInput(disableValue, disableId) {
			$("[id^='ApplicationSettings']").prop("disabled", true);
			var appSettingsDiv = document.getElementById(disableId);
			$("[id!=" + disableId + "][id^='ApplicationSettings']");
			appSettingsDiv.disabled = disableValue;
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
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="application-settings" class="form--move-left clearfix row">
	<div class="form-group form-group__half">
		<input id="via-email" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==1||$_smarty_tpl->tpl_vars['value']->value['add_parameter']=='') {?>checked="checked"<?php }?> onclick="displayInput(false, '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1');" type="radio" />
		<label for="via-email" class="form-label">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
By Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
		</label>
		<input value="<?php if ($_smarty_tpl->tpl_vars['listing']->value['ApplicationSettings']['value']&&$_smarty_tpl->tpl_vars['listing']->value['ApplicationSettings']['add_parameter']=='1') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['ApplicationSettings']['value'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['username'];?>
<?php }?>" class="form-control"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?>disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1" type="text" />
	</div>
	<div class="form-group form-group__half">
		<input id="via-site" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]" value="2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?>checked="checked"<?php }?> onclick="displayInput(false, '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2');" type="radio" />
		<label for="via-site" class="form-label">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
By URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</label>
		<input value="<?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
<?php }?>" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']!=2) {?>disabled="disabled"<?php }?> type="text" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
e.g. http://www.yourwebsite.com<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
	</div>
</div><?php }} ?>
