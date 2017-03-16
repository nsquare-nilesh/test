<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88642420758b588a6918345-91105272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f13bb37529745ec6b54ebac6c61215b28a3b0de' => 
    array (
      0 => 'template_bootstrap_user:main.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '88642420758b588a6918345-91105272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'KEYWORDS' => 0,
    'DESCRIPTION' => 0,
    'METADATA' => 0,
    'HEAD' => 0,
    'MAIN_CONTENT' => 0,
    'isFirstBrowse' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a69dc404_29458394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a69dc404_29458394')) {function content_58b588a69dc404_29458394($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_keywords']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_keywords'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['KEYWORDS']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_description']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_description'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
	<link rel="alternate" type="application/rss+xml" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/rss/">

	<title><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_title']) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['home_page_title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
<?php }?></title>

	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery-ui.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.bxslider.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/style/styles.css" rel="stylesheet">

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['HEAD']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['HEAD']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<style type="text/css"><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['custom_css'];?>
</style>
	<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['custom_js'];?>

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("../menu/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="main-banner">
		<div class="main-banner__wrapper">
			<div class="container text-center">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"count_listings"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
	<div class="quick-search__frontpage">
		<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

	</div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"featured_profiles",'items_count'=>"20"),$_smarty_tpl);?>

	<section class="main-sections main-sections__middle-banner middle-banner">
		<div class="container container-fluid text-center middle-banner__wrapper">
			<div class="middle-banner__block--wrapper">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['secondary_banner_text'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
	</section>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"featured_listings",'items_count'=>"4",'listing_type'=>"Job"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"latest_listings",'items_count'=>"4",'listing_type'=>"Job"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_category']||$_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_city']||$_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_state']||$_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_country']) {?>
		<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(true, null, 0);?>
		<section class="main-sections main-sections__jobs-by jobs-by">
			<div class="jobs-by__wrapper">
				<div class="container container-fluid">
					<ul class="nav nav-pills" role="tablist">
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_category']) {?>
							<li role="presentation" <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>class="active"<?php }?>><a href="#jobs-by__category" aria-controls="jobs-by__category" role="tab" data-toggle="pill"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_city']) {?>
							<li role="presentation" <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>class="active"<?php }?>><a href="#jobs-by__city" aria-controls="jobs-by__city" role="tab" data-toggle="pill"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_state']) {?>
							<li role="presentation" <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>class="active"<?php }?>><a href="#jobs-by__state" aria-controls="jobs-by__state" role="tab" data-toggle="pill"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_country']) {?>
							<li role="presentation" <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>class="active"<?php }?>><a href="#jobs-by__country" aria-controls="jobs-by__country" role="tab" data-toggle="pill"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs by Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
					</ul>
					<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(true, null, 0);?>
					<div class="tab-content">
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_category']) {?>
							<div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>in active<?php }?>" id="jobs-by__category">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'columns'=>3,'browseUrl'=>"/categories/",'browse_template'=>"browse_by_category.tpl"),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_city']) {?>
							<div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>in active<?php }?>" id="jobs-by__city">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'columns'=>3,'browseUrl'=>"/cities/",'browse_template'=>"browse_by_city.tpl"),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_state']) {?>
							<div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>in active<?php }?>" id="jobs-by__state">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'columns'=>3,'browseUrl'=>"/states/",'browse_template'=>"browse_by_state.tpl"),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['jobs_by_country']) {?>
							<div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['isFirstBrowse']->value) {?>in active<?php }?>" id="jobs-by__country">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"classifieds",'function'=>"browse",'columns'=>3,'browseUrl'=>"/countries/",'browse_template'=>"browse_by_country.tpl"),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->tpl_vars["isFirstBrowse"] = new Smarty_variable(false, null, 0);?>
						<?php }?>
					</div>
				</div>
			</div>
		</section>
	<?php }?>
	<section class="main-sections main-sections__alert alert">
		<div class="container container-fluid">
			<div class="alert__block subscribe__description">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['bottom_section_html'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div class="alert__block alert__block-form">
				<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/guest-alerts/create/" method="post" id="create-alert" class="well alert__form">
					<input type="hidden" name="action" value="save" />
					<div class="alert__messages">
					</div>
					<div class="form-group alert__form__input">
						<input type="email" class="form-control" name="email" value="" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
					</div>
					<div class="form-group alert__form__input">
						<select class="form-control" name="email_frequency">
							<option value="daily"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Daily<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<option value="weekly"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Weekly<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<option value="monthly"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Monthly<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						</select>
					</div>
					<div class="form-group alert__form__input text-center">
						<input type="submit" name="save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create alert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn__submit-modal btn btn__orange btn__bold" onclick="return createAlert();">
					</div>
				</form>
			</div>
		</div>
	</section>
	<?php echo $_smarty_tpl->getSubTemplate ("../menu/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.bxslider.min.js"></script>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_api_key'];?>
&libraries=places&callback=initService&language=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
" async defer></script>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<script language="javascript" type="text/javascript">
			document.addEventListener("touchstart", function() { }, false);

			function createAlert() {
				var options = {
					target: '.alert__messages',
					url:  $('#create-alert').attr('action'),
					success: function(data) {
						if (data) {
							$('#create-alert').find('.form-control[name="email"]').text('').val('');
							$('#create-alert').find('.btn').blur();
						}
						$('.alert__messages').find('#create-alert').remove();
					}
				};
				$('#create-alert').ajaxSubmit(options);
				return false;
			}

			$(document).ready(function() {
				$('.nav-pills li').on('click', function() {
					var current = $('.nav-pills').scrollLeft();
					var left = $(this).position().left;

					if ( $( this ).is(':first-child') ) {
						$('.nav-pills').scrollLeft(0);
					} else {
						$('.nav-pills').animate({
							scrollLeft: current + left - 15
						}, 300);
					}
				});
			});
		</script>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0][0]->_tpl_javascript_get(array(),$_smarty_tpl);?>

</body>
</html><?php }} ?>
