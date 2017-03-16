<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:54:16
         compiled from "template_bootstrap_user:../field_types/input/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11857802358b6772059eae8-53774982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7cd29c7aaea387d670a8b913182b3906f31cb32' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/date.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '11857802358b6772059eae8-53774982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'value' => 0,
    'id' => 0,
    'complexStep' => 0,
    'mysql_date' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b677205f06e1_31797976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b677205f06e1_31797976')) {function content_58b677205f06e1_31797976($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>
	<input type="text" class="form-control form-control__visible" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,"%m.%Y"), ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<input <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>type="hidden"<?php } else { ?>type="text"<?php }?> class="form-control input-date" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['mysql_date']->value&&!$_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mysql_date']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
<img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/Bootstrap/assets/images/icon-calendar.svg" alt="..." title="...">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
		dFormat = dFormat.replace('%m', "mm");
		dFormat = dFormat.replace('%d', "dd");
		dFormat = dFormat.replace('%Y', "yyyy");

		$('.input-date:not(.form-control__visible)').datepicker({
			language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
			format: dFormat,
			autoclose: true,
			todayHighlight: true,
			startDate: new Date(1940, 1 - 1, 1),
			endDate: '+10y',
		});

		$('.ui-datepicker-trigger').on('click', function () {
			$(this).closest('.form-group').find('.form-control').focus();
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
