<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:31
         compiled from "template_bootstrap_user:search_results_jobs_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148763124458b6709f38f0a8-51265388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ac60f2729dcfa1f3c645d5b98c613d6ea072566' => 
    array (
      0 => 'template_bootstrap_user:search_results_jobs_listings.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '148763124458b6709f38f0a8-51265388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_search' => 0,
    'listings' => 0,
    'listing' => 0,
    'list_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6709f3ed618_71062860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6709f3ed618_71062860')) {function content_58b6709f3ed618_71062860($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['current_page']*$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']-$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page'], null, 0);?>
<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listing']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listing']->iteration=0;
 $_smarty_tpl->tpl_vars['listing']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['listing']->iteration++;
 $_smarty_tpl->tpl_vars['listing']->index++;
 $_smarty_tpl->tpl_vars['listing']->first = $_smarty_tpl->tpl_vars['listing']->index === 0;
 $_smarty_tpl->tpl_vars['listing']->last = $_smarty_tpl->tpl_vars['listing']->iteration === $_smarty_tpl->tpl_vars['listing']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings']['first'] = $_smarty_tpl->tpl_vars['listing']->first;
?>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['api']) {?>
		<?php if ($_REQUEST['page']=='1'&&$_smarty_tpl->getVariable('smarty')->value['foreach']['listings']['first']) {?>
			<?php echo $_smarty_tpl->tpl_vars['listing']->value['code'];?>

		<?php }?>
		<article class="media well listing-item listing-item__jobs listing-item__no-logo listing_item__backfilling">
			<div class="media-body">
				<div class="media-heading listing-item__title">
					<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['listing']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['listing']->value['target'];?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['onmousedown'];?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['onclick'];?>
><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
				</div>
				<div class="listing-item__info clearfix">
					<?php if ($_smarty_tpl->tpl_vars['listing']->value['CompanyName']) {?>
						<span class="listing-item__info--item listing-item__info--item-company">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>

						</span>
					<?php }?>
					<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value)) {?>
						<span class="listing-item__info--item listing-item__info--item-location">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value);?>

						</span>
					<?php }?>
				</div>
				<div class="listing-item__desc hidden-sm hidden-xs">
					<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']);?>

				</div>
			</div>
			<div class="media-right text-right">
				<div class="listing-item__date">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['listing']->value['activation_date']);?>

				</div>
				<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['EmploymentType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list_value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
 $_smarty_tpl->tpl_vars['list_value']->index++;
 $_smarty_tpl->tpl_vars['list_value']->first = $_smarty_tpl->tpl_vars['list_value']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["multifor"]['first'] = $_smarty_tpl->tpl_vars['list_value']->first;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['multifor']['first']&&$_smarty_tpl->tpl_vars['list_value']->value) {?>
						<span class="listing-item__employment-type"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					<?php }?>
				<?php } ?>
			</div>
			<div class="listing-item__desc visible-sm visible-xs">
				<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']);?>

			</div>
		</article>
	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("listing_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0);?>

		<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_inline')) {?>
			<?php if ($_smarty_tpl->tpl_vars['listing']->index==9) {?>
				<div class="banner banner--inline">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_inline');?>

				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['listing']->index<10&&$_smarty_tpl->tpl_vars['listing']->last) {?>
				<div class="banner banner--inline">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_inline');?>

				</div>
			<?php }?>
		<?php }?>
	<?php }?>
<?php } ?><?php }} ?>
