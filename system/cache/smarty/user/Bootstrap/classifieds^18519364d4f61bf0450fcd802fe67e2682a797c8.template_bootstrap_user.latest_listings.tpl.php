<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:08:01
         compiled from "template_bootstrap_user:E:\xampp\htdocs\smartjob\templates\Bootstrap\classifieds\latest_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:341858b533baeba750-13438072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18519364d4f61bf0450fcd802fe67e2682a797c8' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\smartjob\\templates\\Bootstrap\\classifieds\\latest_listings.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '341858b533baeba750-13438072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b533baed2d81_35514026',
  'variables' => 
  array (
    'listings' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b533baed2d81_35514026')) {function content_58b533baed2d81_35514026($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
	<section class="main-sections main-sections__listing__latest listing__latest">
		<div class="container container-fluid listing">
			<h4 class="listing__title <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Latest Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
			<div class="listing-item__list <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?>">
				<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ("listing_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0);?>

				<?php } ?>
			</div>
			<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
				<div class="banner banner--right">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

				</div>
			<?php }?>
		</div>
	</section>
	<div class="view-all text-center <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/jobs/" class="btn view-all__btn btn__white"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View all jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	</div>
<?php }?>
<?php }} ?>
