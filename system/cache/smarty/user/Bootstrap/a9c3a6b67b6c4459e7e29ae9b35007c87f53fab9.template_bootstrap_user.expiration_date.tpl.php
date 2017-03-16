<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 13:02:07
         compiled from "template_bootstrap_user:../field_types/input/expiration_date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065258c104f7029927-76396243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9c3a6b67b6c4459e7e29ae9b35007c87f53fab9' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/expiration_date.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2065258c104f7029927-76396243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extraInfo' => 0,
    'contract' => 0,
    'productInfo' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
    'mysql_date' => 0,
    'value' => 0,
    'maxExpirationDate' => 0,
    'expired' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c104f70d2b77_79923311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c104f70d2b77_79923311')) {function content_58c104f70d2b77_79923311($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['extraInfo']->value['listing_duration'])) {?>
	<?php $_smarty_tpl->createLocalArrayVariable('extraInfo', null, 0);
$_smarty_tpl->tpl_vars['extraInfo']->value['listing_duration'] = isset($_smarty_tpl->tpl_vars['contract']->value['listing_duration']) ? $_smarty_tpl->tpl_vars['contract']->value['listing_duration'] : $_smarty_tpl->tpl_vars['productInfo']->value['listing_duration'];?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['extraInfo']->value['listing_duration']) {?>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['activation_date']) {?>
		<?php $_smarty_tpl->tpl_vars['maxExpirationDate'] = new Smarty_variable(strftime(((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format']),strtotime("+".((string)$_smarty_tpl->tpl_vars['extraInfo']->value['listing_duration'])." day",strtotime($_smarty_tpl->tpl_vars['listing']->value['activation_date']))), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['maxExpirationDate'] = new Smarty_variable(strftime(((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format']),strtotime("+".((string)$_smarty_tpl->tpl_vars['extraInfo']->value['listing_duration'])." day")), null, 0);?>
	<?php }?>
<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array('date_value', null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['mysql_date']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['mysql_date']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['maxExpirationDate']->value;?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<input <?php if ($_smarty_tpl->tpl_vars['expired']->value) {?>disabled="disabled"<?php } else { ?>readonly<?php }?> type="text" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo Smarty::$_smarty_vars['capture']['date_value'];?>
" class="form-control input-date" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
<?php if ($_smarty_tpl->tpl_vars['expired']->value) {?>
	<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo Smarty::$_smarty_vars['capture']['date_value'];?>
" class="form-control input-date" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
<?php }?>
<img class="ui-datepicker-trigger" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/Bootstrap/assets/images/icon-calendar.svg" alt="..." title="...">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
		var maxExpirationDate = '<?php echo $_smarty_tpl->tpl_vars['maxExpirationDate']->value;?>
';
		var id = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';

		dFormat = dFormat.replace('%m', 'mm');
		dFormat = dFormat.replace('%d', 'dd');
		dFormat = dFormat.replace('%Y', 'yyyy');

        <?php if (!$_smarty_tpl->tpl_vars['expired']->value) {?>
            $('#' + id).datepicker({
                language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
                autoclose: true,
                todayHighlight: true,
                format: dFormat,
                startDate: '+0d',
                endDate: maxExpirationDate
            });
        <?php }?>

		if (!maxExpirationDate && !'<?php echo strtr(Smarty::$_smarty_vars['capture']['date_value'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
') {
			$('#' + id).datepicker('setDate', '+1y');
		}

		$('.ui-datepicker-trigger').on('click', function () {
			$(this).closest('.form-group').find('.form-control').focus();
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
