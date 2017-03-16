<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:58
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\classifieds\featured_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3052858c153ae4d5d74-72979672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f1e2a3cd6ae99f67cd3d38511f0c1948039907' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\classifieds\\featured_listings.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '3052858c153ae4d5d74-72979672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listings' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153ae520ef2_19474662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153ae520ef2_19474662')) {function content_58c153ae520ef2_19474662($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
	<section class="main-sections listing__featured">
		<div class="container container-fluid listing">
			<?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
				<h4 class="listing__title <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?>">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Featured Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
			<?php }?>
		</div>
	</section>
<?php }?><?php }} ?>
