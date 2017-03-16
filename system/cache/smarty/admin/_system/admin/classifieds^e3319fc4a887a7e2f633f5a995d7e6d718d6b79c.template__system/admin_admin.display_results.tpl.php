<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:20
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/classifieds/display_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185364450558b676e8ae6168-06525901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3319fc4a887a7e2f633f5a995d7e6d718d6b79c' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/classifieds/display_results.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '185364450558b676e8ae6168-06525901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingsType' => 0,
    'GLOBALS' => 0,
    'listings' => 0,
    'listing' => 0,
    'paginationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676e8c16f15_66896128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676e8c16f15_66896128')) {function content_58b676e8c16f15_66896128($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<?php $_smarty_tpl->_capture_stack[0][] = array("confirmToDelete", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this <?php echo mb_strtolower($_smarty_tpl->tpl_vars['listingsType']->value['name'], 'UTF-8');?>
?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="panel panel-default panel--max clearfix">
	<div class="table__pagination table__pagination--header">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

	</div>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-actions/" name="resultsForm" class="clearfix">
		<input type="hidden" name="action_name" id="action_name" value="">
		<input type="hidden" name="listingTypeId" value="<?php echo $_smarty_tpl->tpl_vars['listingsType']->value['id'];?>
">
		<div class="table-responsive">
			<table width="100%" class="table table-striped with-bulk">
				<thead>
					<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
					<tr>
						<td class="text-center">
							<label class="cr-styled">
								<input type="checkbox" name="listings[<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration'];?>
" />
								<i class="fa"></i>
							</label>
						</td>
						<td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
						<td class="td-wide">
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['sid'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Job') {?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>

								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['FullName'], ENT_QUOTES, 'UTF-8', true);?>

								<?php }?>
							</a>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Job') {?>
							<td class="td-wide"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<?php }?>
						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['listing']->value['activation_date'],null,true);?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Job') {?>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['listing']->value['applications']||!$_smarty_tpl->tpl_vars['listing']->value['application_redirects']) {?>
									<span class="nowrap">
										<?php if ($_smarty_tpl->tpl_vars['listing']->value['applications']) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/applications/view/?user_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['id'];?>
&amp;appJobId=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
">
												<?php echo $_smarty_tpl->tpl_vars['listing']->value['applications'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

											</a>
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['listing']->value['applications'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['listing']->value['application_redirects']) {?>
									<span class="nowrap"><?php if ($_smarty_tpl->tpl_vars['listing']->value['applications']) {?>/<?php }?> <?php echo $_smarty_tpl->tpl_vars['listing']->value['application_redirects'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
apply clicks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
								<?php }?>
							</td>
						<?php }?>
						<td>
							<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['status'][0][0]->status($_smarty_tpl->tpl_vars['listing']->value['active'])=='active') {?>
								<span class="label label--active"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php } elseif ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['status'][0][0]->status($_smarty_tpl->tpl_vars['listing']->value['active'])=='pending') {?>
								<span class="label label--pending"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pending Approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php } else { ?>
								<span class="label label--inactive"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php }?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</form>
	<div class="table__pagination table__pagination--footer">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

	</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
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

		function isPopUp(button, textChooseAction, textChooseItem, textToDelete) {
			if (isActionEmpty(button, textChooseAction, textChooseItem)) {
				var action = $("#selectedAction_" + button).val();
				switch (action) {
					case "delete":
						if (confirm(textToDelete)) {
							submitForm(action);
						}
						break;
					default:
						submitForm(action);
						break;
				}
			}
		}

	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
