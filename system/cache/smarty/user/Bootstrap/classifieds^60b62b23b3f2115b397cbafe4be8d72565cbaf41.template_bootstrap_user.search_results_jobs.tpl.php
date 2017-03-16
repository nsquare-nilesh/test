<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:08:35
         compiled from "template_bootstrap_user:E:\xampp\htdocs\smartjob\templates\Bootstrap\classifieds\search_results_jobs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2633158bd03eb2b42d1-23777922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b62b23b3f2115b397cbafe4be8d72565cbaf41' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\smartjob\\templates\\Bootstrap\\classifieds\\search_results_jobs.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2633158bd03eb2b42d1-23777922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'browse_request_data' => 0,
    'searchId' => 0,
    'ERRORS' => 0,
    'is_company_profile_page' => 0,
    'user_page_uri' => 0,
    'refineSearch' => 0,
    'listing_search' => 0,
    'browse_navigation_elements' => 0,
    'element' => 0,
    'listing_type_id' => 0,
    'refineField' => 0,
    'listings' => 0,
    'jobs_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd03eb3dec45_03673885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd03eb3dec45_03673885')) {function content_58bd03eb3dec45_03673885($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["site_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'], null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('description', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
jobs from $site_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('search', null, null); ob_start(); ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'classifieds','function'=>'search_form','form_template'=>'quick_search.tpl','listing_type_id'=>'Job','browse_request_data'=>$_smarty_tpl->tpl_vars['browse_request_data']->value,'searchId'=>$_smarty_tpl->tpl_vars['searchId']->value),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/company/') {?>
	<?php $_smarty_tpl->tpl_vars['refineSearch'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['is_company_profile_page']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("search_results_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<div class="search-header <?php if (!$_smarty_tpl->tpl_vars['user_page_uri']->value) {?>hidden-xs-480<?php }?>"></div>
		<div class="quick-search__inner-pages <?php if (!$_smarty_tpl->tpl_vars['user_page_uri']->value) {?>hidden-xs-480<?php }?>">
			<?php echo Smarty::$_smarty_vars['capture']['search'];?>

		</div>
		<div class="container">
			<div class="details-body details-body__search <?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>row<?php } else { ?>no-refine-search<?php }?><?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?> with-banner<?php }?>">
				<?php if ($_REQUEST['not_found']) {?>
					<div class="col-xs-12">
						<div class="alert alert-info text-center">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, that job is no longer available. Here are some results that may be similar to the job you were looking for.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
					</div>
				<?php }?>
				<div class="search-results__top clearfix">
					<?php $_smarty_tpl->tpl_vars["jobs_number"] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['listings_number'], null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['user_page_uri']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browse_navigation_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
							<h1 class="search-results__title <?php if ($_smarty_tpl->tpl_vars['user_page_uri']->value) {?>browse-by__title <?php } else { ?>col-sm-offset-3 col-xs-offset-0<?php }?>">
								<?php if ($_smarty_tpl->tpl_vars['user_page_uri']->value=='/categories/') {?>
									<?php $_smarty_tpl->tpl_vars["category_name"] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['caption'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number $category_name jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars["location"] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['caption'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number jobs found in $location<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php }?>
							</h1>
						<?php } ?>
					<?php } else { ?>
						<h1 class="search-results__title <?php if ($_smarty_tpl->tpl_vars['user_page_uri']->value) {?>browse-by__title <?php } else { ?>col-sm-offset-3 col-xs-offset-0<?php }?>">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number jobs found<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</h1>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['listing_type_id']->value!='') {?>
						<a class="btn create-job-alert btn__blue"
						   data-toggle="modal"
						   data-target="#apply-modal"
						   data-href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/guest-alerts/create/?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
'
						   data-title='<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create Job Alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email me jobs like this<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</a>
					<?php }?>
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
				<div class="search-results <?php if ($_smarty_tpl->tpl_vars['refineSearch']->value) {?>col-xs-12 col-sm-9<?php }?><?php if ($_smarty_tpl->tpl_vars['user_page_uri']->value) {?> search-results__small<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate ("search_results_jobs_listings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<button type="button" class="load-more btn btn__white" data-page="2" data-backfilling="<?php if (count($_smarty_tpl->tpl_vars['listings']->value)<$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']&&$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/company/') {?>true<?php } else { ?>false<?php }?>" data-backfilling-page="1">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Load more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</button>
					<?php } else { ?>
						<div class="alert alert-danger no-listings-found hidden">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry, we don't currently have any jobs for this search. Please try another search.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</div>
						<button type="button" class="load-more btn btn__white" data-page="2" data-backfilling="<?php if (count($_smarty_tpl->tpl_vars['listings']->value)<$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']&&$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/company/') {?>true<?php } else { ?>false<?php }?>" data-backfilling-page="1">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Load more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</button>
					<?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
				<div class="banner banner--right banner--search">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

				</div>
			<?php }?>
		</div>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/jobs/'||$_smarty_tpl->tpl_vars['browse_request_data']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_api_key'];?>
&libraries=places&callback=initService&language=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
" async defer></script>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script>
		var listingPerPage = <?php echo $_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page'];?>
;
		var listingNumber = '<?php echo $_smarty_tpl->tpl_vars['jobs_number']->value;?>
';
		$(document).ready(function() {
			// refine search
			var ajaxUrl = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/ajax/";
			var ajaxParams = {
				'action': 'get_refine_search_block',
				'listing_type[equal]': 'Job',
				'searchId': '<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
',
				'showRefineFields': <?php echo $_smarty_tpl->tpl_vars['listing_search']->value['listings_number'];?>
 > 0
			};

			$.get(ajaxUrl, ajaxParams, function (data) {
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

			if (listingNumber != '' && listingNumber < listingPerPage) {
				$('.load-more').trigger('click');
			}
		});


		$('.load-more').click(function() {
			var self = $(this);
			self.addClass('loading');
			if (self.data('backfilling')) {
				var page = self.data('backfilling-page');
				self.data('backfilling-page', parseInt(page) + 1);

				// request to listings providers
				var ajaxUrl = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/ajax/";
				var ajaxParams = {
					'action' : 'request_for_listings',
					'searchId' : '<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
',
					'page' : page
				};

				$.get(ajaxUrl, ajaxParams, function(data) {
					if (data.length > 0) {
						$('.no-listings-found').hide();
					} else {
						self.prop('disabled', true);
						$('.no-listings-found').removeClass('hidden');
					}
					self.before(data);
					if ($('.listing_item__backfilling').length < listingPerPage) {
						self.hide();
					}
					self.removeClass('loading');
				});
				return;
			}

			$.get('?searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&action=search&page=' + self.data('page'), function(data) {
				var listings = $(data).find('.listing-item');
				self.removeClass('loading');
				if (listings.length) {
					$('.listing-item').last().after(listings);
					self.data('page', parseInt(self.data('page')) + 1);
				}
				if (listings.length !== listingPerPage) {
					if ('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!='/company/';?>
') {
						self.data('backfilling', true);
						$('.load-more').click();
					} else {
						self.hide();
					}
				}
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
