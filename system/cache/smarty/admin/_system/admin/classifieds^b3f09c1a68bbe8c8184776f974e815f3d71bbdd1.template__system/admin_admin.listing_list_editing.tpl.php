<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:41:40
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/classifieds/listing_list_editing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46113708058b6742cd6aa88-44268257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f09c1a68bbe8c8184776f974e815f3d71bbdd1' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/classifieds/listing_list_editing.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '46113708058b6742cd6aa88-44268257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_items' => 0,
    'sid' => 0,
    'list_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6742cd88d21_25566606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6742cd88d21_25566606')) {function content_58b6742cd88d21_25566606($_smarty_tpl) {?><div class="panel-group" id="accordion">
	<div class="panel panel-default panel--max">
		<div class="panel-heading" style="margin-bottom: 0; padding-bottom: 0;">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#accordion__panel" <?php if (!$_REQUEST['list_visible']) {?>aria-expanded="false" class="collapsed"<?php } else { ?>aria-expanded="true"<?php }?>>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
List Items<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</a>
			</h4>
		</div>
		<div id="accordion__panel" class="panel-collapse collapse <?php if ($_REQUEST['list_visible']) {?>in<?php }?>">
			<div class="panel-body">
				<div class="table-responsive__list-editing">
					<table class="table table-striped table__fields-list">
						<tbody class="tbody--sort">
							<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_smarty_tpl->tpl_vars['sid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
 $_smarty_tpl->tpl_vars['sid']->value = $_smarty_tpl->tpl_vars['list_value']->key;
?>
								<tr>
									<td class="sortable-handle">...</td>
									<td class="td-wide">
										<input name="item_value[][<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_value']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
									</td>
									<td>
										<i class="ion-close-circled"></i>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tbody>
							<tr>
								<td></td>
								<td>
									<div class="input-group">
										<input name="list_item_value" class="textField list-item__input" />
										<input name="list_visible" type="hidden" value="<?php if ($_REQUEST['list_visible']) {?>visible<?php }?>" />
											<span class="input-group-btn">
												<input type="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--secondary list-item__add" />
											</span>
									</div>
								</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.tbody--sort').sortable({
				helper: function(e, ui) {
					ui.children().each(function() {
						$(this).width($(this).width());
					});
					return ui;
				},
				handle: '.sortable-handle'
			});
			$(document).on('click', '.ion-close-circled', function() {
				var row = $(this).closest('tr');
				row.hide();
				row.find('input').val('');
			});

			var addNewItem = function() {
				var input = $('.list-item__input');
				if (input.val()) {
					var row = $('<tr><td class="sortable-handle">...</td><td><input name="item_value[][new]" type="text" value="" /></td><td><i class="ion-close-circled"></i></td></tr>');
					row.find('input[type="text"]').val(input.val());
					row.appendTo('.tbody--sort');
					input.val('');
				}
			};
            $('.list-item__add').on('click', addNewItem);
            $('.list-item__input').on('keypress', function(e) {
            	if (e.keyCode == 13) {
					e.preventDefault();
					addNewItem();
				}
			});

            $('#accordion')
				.on('hide.bs.collapse', function () {
					$('input[name="list_visible"]').val('');
				})
				.on('show.bs.collapse', function () {
					$('input[name="list_visible"]').val('visible');
				});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
