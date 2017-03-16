<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:57
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\classifieds\quick_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1923958c153adc083e5-46586596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38bac27cc11aa84bd429992c75b38959d8fcab9' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\classifieds\\quick_search.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1923958c153adc083e5-46586596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'searchId' => 0,
    'browse_request_data' => 0,
    'browse_item' => 0,
    'criteria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153adcdf092_89861414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153adcdf092_89861414')) {function content_58c153adcdf092_89861414($_smarty_tpl) {?><div class="container container-fluid quick-search">
	<div class="quick-search__wrapper well">
		<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/jobs/" class="form-inline row">
			<input type="hidden" name="listing_type[equal]" value="Job" />
			<?php if ($_smarty_tpl->tpl_vars['searchId']->value) {?>
				<input type="hidden" name="searchId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php }?>
			<input type="hidden" name="action" value="search" />
			<div class="form-group form-group__input <?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>full<?php }?>">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'keywords'),$_smarty_tpl);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>
				<div class="form-group form-group__input">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'GooglePlace','template'=>'google_place.tpl'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['browse_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browse_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browse_request_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['browse_item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['browse_item']->key => $_smarty_tpl->tpl_vars['browse_item']->value) {
$_smarty_tpl->tpl_vars['browse_item']->_loop = true;
 $_smarty_tpl->tpl_vars['browse_item']->index++;
 $_smarty_tpl->tpl_vars['browse_item']->first = $_smarty_tpl->tpl_vars['browse_item']->index === 0;
?>
				<?php if ($_smarty_tpl->tpl_vars['browse_item']->first) {?>
					<?php  $_smarty_tpl->tpl_vars['criteria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criteria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browse_item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criteria']->key => $_smarty_tpl->tpl_vars['criteria']->value) {
$_smarty_tpl->tpl_vars['criteria']->_loop = true;
?>
						<?php if (is_array($_smarty_tpl->tpl_vars['criteria']->value)) {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['browse_item']->key;?>
[<?php echo $_smarty_tpl->tpl_vars['criteria']->key;?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value[0], ENT_QUOTES, 'UTF-8', true);?>
">
						<?php } else { ?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['browse_item']->key;?>
[<?php echo $_smarty_tpl->tpl_vars['criteria']->key;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<?php }?>
					<?php } ?>
				<?php }?>
			<?php } ?>
			<div class="form-group form-group__btn">
				<button type="submit" class="quick-search__find btn btn__orange btn__bold "><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
			</div>
		</form>
	</div>
</div><?php }} ?>
