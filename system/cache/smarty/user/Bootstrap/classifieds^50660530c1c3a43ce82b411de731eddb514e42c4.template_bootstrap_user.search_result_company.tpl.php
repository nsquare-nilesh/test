<?php /* Smarty version Smarty-3.1.19, created on 2017-03-15 18:54:31
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\classifieds\search_result_company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:569158c9408ff13223-23873218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50660530c1c3a43ce82b411de731eddb514e42c4' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\classifieds\\search_result_company.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '569158c9408ff13223-23873218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERRORS' => 0,
    'found_users_sids' => 0,
    'user_sid' => 0,
    'GLOBALS' => 0,
    'CompanyName' => 0,
    'companies_number' => 0,
    'companies_per_page' => 0,
    'searchId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c940900b1828_62767564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c940900b1828_62767564')) {function content_58c940900b1828_62767564($_smarty_tpl) {?><div class="container <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner__companies<?php }?>">
	<div class="row details-body details-body__search">
		<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<div class="search-results__top search-results__top-company clearfix">
				<h1 class="title__primary title__primary-small title__centered">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$companies_number Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</h1>
			</div>
			<div class="search-results search-results__companies featured-companies text-center clearfix">
				<?php  $_smarty_tpl->tpl_vars['user_sid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_sid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_users_sids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_sid']->key => $_smarty_tpl->tpl_vars['user_sid']->value) {
$_smarty_tpl->tpl_vars['user_sid']->_loop = true;
?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'State.Code','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'parent'=>'Location','assign'=>'State'),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'City','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'parent'=>'Location','assign'=>'City'),$_smarty_tpl);?>

					<div class="featured-company" aria-hidden="false">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'CompanyName','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'assign'=>'CompanyName'),$_smarty_tpl);?>

						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['pretty_url'][0][0]->pretty_url(htmlspecialchars_decode($_smarty_tpl->tpl_vars['CompanyName']->value, ENT_QUOTES));?>
/" title="<?php echo $_smarty_tpl->tpl_vars['CompanyName']->value;?>
">
							<div class="panel panel-default featured-company__panel">
								<div class="panel-body featured-company__panel-body text-center">
									<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'Logo','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'Logo','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>

									<?php } else { ?>
										<div class="company__no-image"></div>
									<?php }?>
								</div>
								<div class="panel-footer featured-company__panel-footer">
									<div class="featured-companies__name">
										<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'CompanyName','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value),$_smarty_tpl);?>
</span>
									</div>
									<div class="featured-companies__jobs">
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'countListings','object_sid'=>$_smarty_tpl->tpl_vars['user_sid']->value,'assign'=>"jobs_number"),$_smarty_tpl);?>

										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number job(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</div>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
			<button type="button" class="load-more load-more__companies btn btn__white <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['companies_per_page']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['companies_number']->value>$_tmp2) {?>show<?php } else { ?>hidden<?php }?>" data-page="2">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Load more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</button>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
		<div class="banner banner--right banner--companies">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

		</div>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_api_key'];?>
&libraries=places&callback=initService&language=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
" async defer></script>
	<script>
		var listingPerPage = <?php echo $_smarty_tpl->tpl_vars['companies_per_page']->value;?>
;
		$('.load-more').click(function() {
			var self = $(this);
			self.addClass('loading');
			$.get('?searchId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchId']->value, ENT_QUOTES, 'UTF-8', true);?>
&action=search&page=' + self.data('page'), function(data) {
				self.removeClass('loading');
				var listings = $(data).find('.featured-company');
				if (listings.length) {
					$('.featured-company').last().after(listings);
					self.data('page', parseInt(self.data('page')) + 1);
				}
				if (listings.length !== listingPerPage) {
					self.removeClass('show').addClass('hidden');
				}
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
