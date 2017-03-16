<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:51:40
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/template_manager/navigation_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196673066858b6768446b252-13739358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aecddd346d9746a90b0fa39e0e024f0d05c3f90f' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/template_manager/navigation_menu.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '196673066858b6768446b252-13739358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuItems' => 0,
    'menuItem' => 0,
    'item' => 0,
    'system_pages' => 0,
    'uri' => 0,
    'page' => 0,
    'pages' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676844ef480_23076652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676844ef480_23076652')) {function content_58b676844ef480_23076652($_smarty_tpl) {?><form method="post" action="">
	<div class="page-title page-title--wide">
		<h1 class="title">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Navigation Menu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</h1>
		<div class="page-title__buttons">
			<button type="button" class="btn btn--primary add-menu-item"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add Menu Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
		</div>
	</div>
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Drag items up/down to reorder and left/right to create sub-menu items.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<div class="panel panel-default panel--wide panel__navigation">
		<div class="panel-body">
			<div class="dd submenu">
				<div class="submenu__inner">
					<ol class="dd-list">
						<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ('navigation_menu_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['menuItem']->value,'level'=>0), 0);?>

						<?php } ?>
					</ol>
				</div>
			</div>
			<button class="btn btn--primary" style="margin-right: 10px;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
		</div>
	</div>
</form>

<li class="dd-item prototype" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
	<div class="dd-handle sortable-handle">...</div>
	<div class="dd-content clearfix">
		<input class="dd-content__item" type="text" name="menu_item[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
		<input type="hidden" name="parent[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['parent'];?>
" />
		<select class="page-selector dd-content__item">
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['uri']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</option>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
				<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</option>
			<?php } ?>
			<option value="" selected="selected"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
External Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
		</select>
		<span class="external-link dd-content__item">
			<input type="text" name="link[]" value="http://"/>
		</span>
		<i class="ion-close-circled"></i>
	</div>
</li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/css/jquery.nestable.css?v=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['v'];?>
" />
	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/js/jquery.nestable.js"></script>
	<script>
		$(document).ready(function() {
			$(document).on('click', '.ion-close-circled', function() {
				$(this).closest('li').remove();
			});

			var init = false;

			$(document).on('change', '.page-selector', function() {
				var row = $(this).closest('.dd-content');
				row.find('.external-link').toggle($(this).val() == '');

				if (init) {
					row.find('.external-link').find('input').val($(this).val() == '' ? 'http://' : $(this).val());
					if ($(this).val() != '') {
						row.find('[name="menu_item[]"]').val($(this).find('option:selected').text());
					} else {
						row.find('[name="menu_item[]"]').val('');
					}
				}
			});
			$(document).find('.page-selector').change();
			init = true;

			var setParents = function() {
				$('input[name="parent[]"]').each(function() {
					if ($(this).parents('li').length > 1) {
						$(this).val($('.dd li').index($(this).closest('ol').closest('li')) + 1);
					} else {
						$(this).val('0');
					}
				});
			};

			$('.add-menu-item').click(function() {
				$('.dd > .submenu__inner > .dd-list').append($('.prototype').clone().removeClass('prototype'));
				setParents();
			});

			$('.dd').nestable({
				autoscroll: true,
				maxDepth: 2,
				callback: setParents
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
