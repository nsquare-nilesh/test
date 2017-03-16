<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:28
         compiled from "template_bootstrap_user:searchFormByCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25252104858b6709c0f9d74-06864310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b30c36b486483fc0c13121dc5afc93c2fccd36f' => 
    array (
      0 => 'template_bootstrap_user:searchFormByCompany.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '25252104858b6709c0f9d74-06864310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6709c11b480_89380951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6709c11b480_89380951')) {function content_58b6709c11b480_89380951($_smarty_tpl) {?><div class="quick-search__inner-pages">
	<div class="container container-fluid quick-search">
		<div class="quick-search__wrapper well">
			<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/companies/" class="form-inline row">
				<input type="hidden" name="action" value="search" />
				<div class="form-group form-group__input <?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>full<?php }?>">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'CompanyName','template'=>"string.like.tpl"),$_smarty_tpl);?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['search_by_location']) {?>
					<div class="form-group form-group__input">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'GooglePlace','template'=>'google_place.tpl'),$_smarty_tpl);?>

					</div>
				<?php }?>
				<div class="form-group form-group__btn">
					<button type="submit" class="quick-search__find btn btn__orange btn__bold"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php }} ?>
