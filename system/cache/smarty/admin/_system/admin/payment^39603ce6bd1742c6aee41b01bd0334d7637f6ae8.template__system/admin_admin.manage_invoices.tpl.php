<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:46:27
         compiled from "template__system/admin_admin:C:\wamp64\www\AssessorList\templates\_system\admin\payment\manage_invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3166558c155aba9d5e6-92147302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39603ce6bd1742c6aee41b01bd0334d7637f6ae8' => 
    array (
      0 => 'template__system/admin_admin:C:\\wamp64\\www\\AssessorList\\templates\\_system\\admin\\payment\\manage_invoices.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '3166558c155aba9d5e6-92147302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'found_invoices' => 0,
    'invoice' => 0,
    'invoiceTotal' => 0,
    'paginationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c155abbb1276_35649363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c155abbb1276_35649363')) {function content_58c155abbb1276_35649363($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<div class="panel panel-default panel--max">
	<form method="post" name="invoices_form" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-invoices/" class="panel-body">
		<input type="hidden" name="action_name" id="action_name" value="" />
		<div class="table__pagination table__pagination--header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

		</div>
		<div class="table-responsive">
			<table class="table table-striped with-bulk">
				<thead>
					<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invoices_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invoices_block']['iteration']++;
?>
						<tr>
							<td style="width: 46px;">
								<label class="cr-styled">
									<input type="checkbox" name="invoices[<?php echo $_smarty_tpl->tpl_vars['invoice']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invoices_block']['iteration'];?>
" />
									<i class="fa"></i>
								</label>
							</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/view-invoice/?sid=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['sid'];?>
</a></td>
							<td class="td-wide">
								<?php if ($_smarty_tpl->tpl_vars['invoice']->value['user']) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['user_sid'];?>
">
										<?php if ($_smarty_tpl->tpl_vars['invoice']->value['user']['CompanyName']) {?>
											<?php echo $_smarty_tpl->tpl_vars['invoice']->value['user']['CompanyName'];?>

										<?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value['user']['FullName']) {?>
											<?php echo $_smarty_tpl->tpl_vars['invoice']->value['user']['FullName'];?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['invoice']->value['user']['username'];?>

										<?php }?>
									</a>
								<?php } else { ?>
									<span class="invoice-washy"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
								<?php }?>
							</td>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'date','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</td>
							<td>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'payment_method','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>

								<?php if ($_smarty_tpl->tpl_vars['invoice']->value['recurring_id']) {?>
									<span class="label label-info"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recurring<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
								<?php }?>
							</td>
							<td>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "invoiceTotal", null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'total','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['invoiceTotal']->value),$_smarty_tpl);?>

							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['invoice']->value['status']=='Paid') {?>
									<span class="label label--active"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'status','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</span>
								<?php } else { ?>
									<span class="label label--inactive"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'status','object_sid'=>$_smarty_tpl->tpl_vars['invoice']->value['sid']),$_smarty_tpl);?>
</span>
								<?php }?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="table__pagination table__pagination--footer">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

		</div>
	</form>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script>
		$('.bulk-action').on('click', function() {
			var action = $(this).data('action');
			if (action == 'delete') {
				if (confirm('<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'];?>
')) {
					submitForm(action);
				}
			} else {
				submitForm(action);
			}
			return false;
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
