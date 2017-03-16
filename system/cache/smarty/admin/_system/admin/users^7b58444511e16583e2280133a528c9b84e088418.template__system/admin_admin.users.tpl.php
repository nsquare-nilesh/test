<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:12
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/users/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149432036158b676e04685e6-54282501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b58444511e16583e2280133a528c9b84e088418' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/users/users.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '149432036158b676e04685e6-54282501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'METADATA' => 0,
    'error' => 0,
    'found_users' => 0,
    'user' => 0,
    'userGroupInfo' => 0,
    'GLOBALS' => 0,
    'paginationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676e04c3c24_41334621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676e04c3c24_41334621')) {function content_58b676e04c3c24_41334621($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<script type="text/javascript">
	var parentReload = false;

	function isPopUp(button, textChooseAction, textChooseItem, textToDelete) {
		if (isActionEmpty(button, textChooseAction, textChooseItem)) {
			var action = $("#selectedAction_" + button).val();
			switch (action) {
				case "delete":
					if (confirm(textToDelete)) {
						submitForm("delete");
					}
					break;
				default:
					submitForm(action);
					break;
			}
		}
		$("#selectedAction_" + button).val('');
	}

	function viewListingBlock() {
        $("#product_select option").each(function () {
        	$("#block_"+this.value).css('display', 'none');
          });
	
        $("#product_select option:selected").each(function () {
           $("#block_"+this.value).css('display', 'block');
         });
	}
	</script>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } ?>
<?php }?>
<div class="panel panel-default panel--max clearfix">
	<div class="table__pagination table__pagination--header">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

	</div>
	<form method="post" name="users_form" class="clearfix">
		<input type="hidden" name="action_name" id="action_name" value="" />
		
		<input type="hidden" name="number_of_listings" id="number_of_listings" value="" />
		<div class="table-responsive">
			<table width="100%" class="table table-striped with-bulk">
				<thead>
					<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</thead>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']++;
?>
					<tr>
						<td class="text-center">
							<label class="cr-styled">
								<input type="checkbox" name="users[<?php echo $_smarty_tpl->tpl_vars['user']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['users_block']['iteration'];?>
" />
								<i class="fa"></i>
							</label>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer') {?>
							<td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user']->value['sid'];?>
" title="Edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
							<td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user']->value['sid'];?>
" title="Edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
							<td class="td-wide">
								<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['user']->value), ENT_QUOTES, 'UTF-8', true);?>

							</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker') {?>
							<td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user']->value['sid'];?>
" title="Edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['FullName'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
							<td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user']->value['sid'];?>
" title="Edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
						<?php }?>

						<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['user']->value['registration_date'],null,true);?>
</td>
						<td>
							<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['status'][0][0]->status($_smarty_tpl->tpl_vars['user']->value['active'])=='active') {?>
								<span class="label label--active"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<?php } elseif ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['status'][0][0]->status($_smarty_tpl->tpl_vars['user']->value['active'])=='pending') {?>
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
			</table>
		</div>
	</form>
	<div class="table__pagination table__pagination--footer">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

	</div>
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
