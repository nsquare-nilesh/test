<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:08:27
         compiled from "template_bootstrap_user:E:\xampp\htdocs\smartjob\templates\Bootstrap\classifieds\search_results_resumes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558358bd03e3ce2132-96671394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d24ed13b623b6f69987d19e6073041a2032f1e5' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\smartjob\\templates\\Bootstrap\\classifieds\\search_results_resumes.tpl',
      1 => 1488532776,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '558358bd03e3ce2132-96671394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'searchId' => 0,
    'ERRORS' => 0,
    'refineSearch' => 0,
    'listing_search' => 0,
    'refineField' => 0,
    'listings' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd03e3e7f528_43172548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd03e3e7f528_43172548')) {function content_58bd03e3e7f528_43172548($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('description', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resumes from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('search', null, null); ob_start(); ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'classifieds','function'=>'search_form','form_template'=>'search_form_resumes.tpl','listing_type_id'=>'Resume','searchId'=>$_smarty_tpl->tpl_vars['searchId']->value),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<div class="search-header hidden-xs-480"></div>
	<div class="quick-search__inner-pages hidden-xs-480">
		<?php echo Smarty::$_smarty_vars['capture']['search'];?>

	</div>
	<div class="container">
		<div class="details-body details-body__search clearfix <?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>row<?php } else { ?>no-refine-search<?php }?><?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?> with-banner<?php }?>">
			<div class="search-results__top clearfix">
				<h1 class="search-results__title col-sm-offset-3 col-xs-offset-0">
					<?php $_smarty_tpl->tpl_vars["resumes_number"] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['listings_number'], null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$resumes_number resumes found<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</h1>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>
				<div id="ajax-refine-search" class="col-sm-3 col-xs-12 refine-search">
					<a class="toggle--refine-search visible-xs" role="button" data-toggle="collapse" href="#" aria-expanded="true">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['refineField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
					<div class="refine-search__wrapper loading">
						<div class="quick-search__inner-pages visible-xs-480">
							<?php echo Smarty::$_smarty_vars['capture']['search'];?>

						</div>
						<?php echo $_smarty_tpl->getSubTemplate ("search_results_refine_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
				</div>
			<?php }?>
			<div class="search-results search-results__resumes <?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>col-sm-9 col-xs-12<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
					<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['current_page']*$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']-$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page'], null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listing']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['listing']->iteration=0;
 $_smarty_tpl->tpl_vars['listing']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['listing']->iteration++;
 $_smarty_tpl->tpl_vars['listing']->index++;
 $_smarty_tpl->tpl_vars['listing']->last = $_smarty_tpl->tpl_vars['listing']->iteration === $_smarty_tpl->tpl_vars['listing']->total;
?>
						<article class="media well listing-item <?php if ($_smarty_tpl->tpl_vars['listing']->value['featured']) {?>listing-item__featured<?php }?> <?php if (!$_smarty_tpl->tpl_vars['listing']->value['Photo']['file_url']) {?>listing-item__no-logo<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['Photo']['file_url']) {?>
								<div class="media-left listing-item__logo listing-item__resumes">
									<div class="job-seeker__image">
										<a class="profile__image" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listing']->value);?>
">
											<img class="media-object profile__img" src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['Photo']['file_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
">
										</a>
									</div>
								</div>
							<?php }?>
							<div class="media-body">
								<div class="media-heading listing-item__title">
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listing']->value);?>
" class="strong">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['FullName'], ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</div>
								<div class="listing-item__info clearfix">
									<?php if ($_smarty_tpl->tpl_vars['listing']->value['Title']) {?>
										<span class="listing-item__info--item listing-item__info--item-company">
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>

										</span>
									<?php }?>
									<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value)) {?>
										<span class="listing-item__info--item listing-item__info--item-location">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value);?>

										</span>
									<?php }?>
								</div>
								<div class="listing-item__desc listing-item__desc-job-seeker hidden-sm hidden-xs">
									<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['Skills']);?>

								</div>
							</div>
							<div class="listing-item__desc visible-sm visible-xs listing-item__desc-job-seeker">
								<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['Skills']);?>

							</div>
						</article>
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
					<?php } ?>
				<?php } else { ?>
					<div class="alert alert-danger no-listings-found">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, we don't currently have any resumes for this search. Please try another search.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				<?php }?>
				<button type="button" class="load-more btn btn__white <?php if (count($_smarty_tpl->tpl_vars['listings']->value)<$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']) {?>hidden<?php }?>" data-page="2">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Load more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</button>
			</div>
		</div>
		<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
			<div class="banner banner--right banner--search">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

			</div>
		<?php }?>
	</div>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_api_key'];?>
&libraries=places&callback=initService&language=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
" async defer></script>
	<script type="text/javascript" language="JavaScript">
		$(document).ready(function() {
			var ajaxUrl = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/ajax/";
			var ajaxParams = {
				'action' : 'get_refine_search_block',
				'listing_type[equal]' : 'Resume',
				'searchId' : '<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
',
				'showRefineFields' : <?php echo $_smarty_tpl->tpl_vars['listing_search']->value['listings_number'];?>
 > 0
			};

			$.get(ajaxUrl, ajaxParams, function(data) {
				if (data.length > 0) {
					$('.current-search').remove();
					$('#ajax-refine-search').find('.refine-search__wrapper .refine-search__block').remove();
					$('#ajax-refine-search').find('.refine-search__wrapper').append(data);
					$('.refine-search__wrapper').removeClass('loading');

					$('.refine-search__item-radius.active').removeClass('active');
					var miles = $('.form-group__input input[type="hidden"]').val();
					$('#refine-block-radius .dropdown-toggle').text(miles + ' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
				}
			});
		});

		var listingPerPage = <?php echo $_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page'];?>
;
		$('.load-more').click(function() {
			var self = $(this);
			self.addClass('loading');
			$.get('?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&action=search&page=' + self.data('page'), function(data) {
				self.removeClass('loading');
				var listings = $(data).find('.listing-item');
				if (listings.length) {
					$('.listing-item').last().after(listings);
					self.data('page', parseInt(self.data('page')) + 1);
				}
				if (listings.length !== listingPerPage) {
					self.hide();
					$('.load-more').click();
				}
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
