<?php /* Smarty version Smarty-3.1.19, created on 2017-03-03 14:49:03
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\classifieds\search_form_resumes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3157958b93507df87b1-63735968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d54cd8f36fe4379eddc8b94a84aab589a06e371' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\classifieds\\search_form_resumes.tpl',
      1 => 1488532380,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '3157958b93507df87b1-63735968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'searchId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b93507e0a413_46031278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b93507e0a413_46031278')) {function content_58b93507e0a413_46031278($_smarty_tpl) {?><div class="container container-fluid quick-search">
	<div class="quick-search__wrapper well">
		<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/resumes/" class="form-inline row">
			<input type="hidden" name="action" value="search" />
			<input type="hidden" name="listing_type[equal]" value="Resume" />
			<?php if ($_smarty_tpl->tpl_vars['searchId']->value) {?>
				<input type="hidden" name="searchId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php }?>
			<div class="form-group form-group__input <?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>full<?php }?>">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'keywords'),$_smarty_tpl);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>
				<div class="form-group form-group__input">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'GooglePlace','template'=>'google_place.tpl'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="form-group form-group__btn">
				<button type="submit" class="quick-search__find btn btn__orange btn__bold "><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find CVs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
			</div>
		</form>
	</div>
</div><?php }} ?>
