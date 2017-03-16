<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 12:52:06
         compiled from "template__system/admin_admin:../field_types/input/expiration_date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1435438258b7c81e8c2d81-99750407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2dead91fd26c35305d8d38eb2aa9c8586b97f14' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/expiration_date.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1435438258b7c81e8c2d81-99750407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'mysql_date' => 0,
    'value' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7c81e8d6187_41494559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7c81e8d6187_41494559')) {function content_58b7c81e8d6187_41494559($_smarty_tpl) {?><div class="quarter">
	<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['mysql_date']->value) {?><?php echo $_smarty_tpl->tpl_vars['mysql_date']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="input_date" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
	<img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icon-calendar.svg" alt="..." title="...">
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
		var id = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
		dFormat = dFormat.replace('%m', 'mm');
		dFormat = dFormat.replace('%d', 'dd');
		dFormat = dFormat.replace('%Y', 'yyyy');

		var dp = $('#' + id).datepicker({
			language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
			autoclose: true,
			todayHighlight: true,
			format: dFormat,
			startDate: '+0d',
			endDate: '+10y'
		});

		if (dp.val() == '') {
			dp.datepicker('setDate', '+1m');
		}
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
