<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:08:36
         compiled from "template_bootstrap_user:E:\xampp\htdocs\smartjob\templates\Bootstrap\classifieds\search_results_refine_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648458bd03ec166096-87270921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07720341c3958a65fd1395191a8ba4228b1057ac' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\smartjob\\templates\\Bootstrap\\classifieds\\search_results_refine_block.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1648458bd03ec166096-87270921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentSearch' => 0,
    'searchId' => 0,
    'fieldInfo' => 0,
    'fieldValue' => 0,
    'fieldID' => 0,
    'fieldType' => 0,
    'realVal' => 0,
    'val' => 0,
    'GLOBALS' => 0,
    'refineFields' => 0,
    'refineField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd03ec25fe00_41554499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd03ec25fe00_41554499')) {function content_58bd03ec25fe00_41554499($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['currentSearch']->value)) {?>
	<div class="current-search">
		<div class="current-search__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Current Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?>searchId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchId']->value);?>
&amp;action=undo<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php  $_smarty_tpl->tpl_vars["fieldInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fieldInfo"]->_loop = false;
 $_smarty_tpl->tpl_vars["fieldID"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currentSearch']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fieldInfo"]->key => $_smarty_tpl->tpl_vars["fieldInfo"]->value) {
$_smarty_tpl->tpl_vars["fieldInfo"]->_loop = true;
 $_smarty_tpl->tpl_vars["fieldID"]->value = $_smarty_tpl->tpl_vars["fieldInfo"]->key;
?>
			<?php  $_smarty_tpl->tpl_vars["fieldValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fieldValue"]->_loop = false;
 $_smarty_tpl->tpl_vars["fieldType"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldInfo']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fieldValue"]->key => $_smarty_tpl->tpl_vars["fieldValue"]->value) {
$_smarty_tpl->tpl_vars["fieldValue"]->_loop = true;
 $_smarty_tpl->tpl_vars["fieldType"]->value = $_smarty_tpl->tpl_vars["fieldValue"]->key;
?>
				<?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["realVal"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldValue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value) {
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["realVal"]->value = $_smarty_tpl->tpl_vars["val"]->key;
?>
					<a class="badge" href="?<?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
&amp;param=<?php echo $_smarty_tpl->tpl_vars['fieldID']->value;?>
&amp;type=<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
&amp;value=<?php echo rawurlencode($_smarty_tpl->tpl_vars['realVal']->value);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['currentSearch']->value['GooglePlace']['field']) {?>
	<div class="refine-search__block">
		<a class="btn__refine-search" role="button" data-toggle="collapse" href="#refine-block-radius" aria-expanded="true" aria-controls="refine-block-radius}">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search within<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</a>
		<div class="collapse in clearfix dropdown" id="refine-block-radius">
			<a href="#" class="refine-search__item dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				50 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</a>
			<div class="dropdown-menu">
				<a class="refine-search__item refine-search__item-radius" href="#" data-value="10">
					<span class="refine-search__value">10 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				</a>
				<a class="refine-search__item refine-search__item-radius" href="#" data-value="20">
					<span class="refine-search__value">20 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				</a>
				<a class="refine-search__item refine-search__item-radius" href="#" data-value="50">
					<span class="refine-search__value">50 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				</a>
				<a class="refine-search__item refine-search__item-radius" href="#" data-value="100">
					<span class="refine-search__value">100 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				</a>
				<a class="refine-search__item refine-search__item-radius" href="#" data-value="200">
					<span class="refine-search__value">200 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				</a>
			</div>
		</div>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['refineFields']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("trLess", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Less<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("trMore", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
More<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?>searchId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchId']->value);?>
&amp;action=refine<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php  $_smarty_tpl->tpl_vars['refineField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refineField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['refineFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refineField']->key => $_smarty_tpl->tpl_vars['refineField']->value) {
$_smarty_tpl->tpl_vars['refineField']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['refineField']->value['show']&&$_smarty_tpl->tpl_vars['refineField']->value['count_results']) {?>
			<div class="refine-search__block">
				<a class="btn__refine-search" role="button" data-toggle="collapse" href="#refine-block-<?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
" aria-expanded="true" aria-controls="refine-block-<?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
">
					<?php $_smarty_tpl->tpl_vars["field_caption"] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['tr'][0][0]->tr($_smarty_tpl->tpl_vars['refineField']->value['caption']), null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine by $field_caption<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</a>
				<div class="collapse in clearfix" id="refine-block-<?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
">
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['refineField']->value['search_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['total'] = $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['iteration']++;
?>
						<?php $_smarty_tpl->_capture_stack[0][] = array("refineFieldCriteria", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['refineField']->value['type'],array('string'))) {?>[multi_like_and]<?php } else { ?>[multi_like]<?php }?>[]=<?php if ($_smarty_tpl->tpl_vars['val']->value['sid']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['sid'];?>
<?php } else { ?><?php echo rawurlencode($_smarty_tpl->tpl_vars['val']->value['value']);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fieldValue']['iteration']==7) {?>
							<div class="less-more" style="display: none">
						<?php }?>
						<a class="refine-search__item" href="?<?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
&amp;<?php echo Smarty::$_smarty_vars['capture']['refineFieldCriteria'];?>
">
							<span class="refine-search__value"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
							<span class="refine-search__count"><?php if (empty($_smarty_tpl->tpl_vars['refineField']->value['criteria'])) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['val']->value['count'];?>
)<?php }?></span>
						</a>
					<?php } ?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fieldValue']['total']>=7) {?>
						</div><a href="#" class="less-more__btn link"><?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
</a>
					<?php }?>
				</div>
			</div>
		<?php }?>
	<?php } ?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']) {?>
	<div id="refine-block-preloader"></div>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script>
		$(document).on('click', '.less-more__btn', function(e) {
			e.preventDefault();
			var butt = $(this);
			butt.toggleClass('collapse');
			$(this).prev('.less-more').slideToggle('normal', function() {
				if ($(this).css('display') == 'block') {
					butt.html('<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trLess'], ENT_QUOTES, 'UTF-8', true);?>
');
				} else {
					butt.html('<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trMore'], ENT_QUOTES, 'UTF-8', true);?>
');
				}
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
