<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:02
         compiled from "template_bootstrap_user:index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70205169858b6708248fb59-74488071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a32ae45372db41414c9dc409bd152fb98b9b354' => 
    array (
      0 => 'template_bootstrap_user:index.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '70205169858b6708248fb59-74488071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'KEYWORDS' => 0,
    'DESCRIPTION' => 0,
    'GLOBALS' => 0,
    'TITLE' => 0,
    'METADATA' => 0,
    'HEAD' => 0,
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6708255da66_52595624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6708255da66_52595624')) {function content_58b6708255da66_52595624($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['KEYWORDS']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
	<link rel="alternate" type="application/rss+xml" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/rss/">

	<title><?php if ($_smarty_tpl->tpl_vars['TITLE']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
 | <?php }?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['site_title'];?>
</title>

	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

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


	<div id="loading"></div>

	<div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="message-modal-label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
					<h4 class="modal-title" id="message-modal-label">Modal title</h4>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
				</div>
			</div>
		</div>
	</div>

	<div class="flash-messages">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/categories/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/states/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/countries/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/cities/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/job-preview/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/resume-preview/') {?>
		<div class="page-row page-row-expanded">
			<div class="display-item">
				
					<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

				
			</div>
		</div>
	<?php } else { ?>
		<div class="page-row page-row-expanded">
			<div class="container container--small <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?> <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/employer-products/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/jobseeker-products/') {?>with-banner__products<?php }?>">
				<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
					<div class="with-banner__wrapper">
				<?php }?>
				
					<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

				
				<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
					</div>
                    <div class="banner banner--right">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

                    </div>
				<?php }?>
			</div>
		</div>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ("../menu/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery-ui.min.js"></script>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/third-party/jquery.form.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery.validate.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/common_js/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/imagesize.js"></script>
	<link rel="Stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/common_js/multilist_functions.js"></script>
	<script>
		document.addEventListener("touchstart", function() { }, false);

		var langSettings = {
			thousands_separator : '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['thousands_separator'];?>
',
			decimal_separator : '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['decimal_separator'];?>
',
			decimals : '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['decimals'];?>
',
			currencySign: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencySign'][0][0]->currencySign(array(),$_smarty_tpl);?>
',
			showCurrencySign: 1,
			currencySignLocation: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['currencySignLocation'];?>
',
			rightToLeft: <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['rightToLeft'];?>

		};
	</script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/floatnumbers_functions.js"></script>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['available_datepicker_localizations'][$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language']])) {?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
.min.js" ></script>
	<?php }?>

	<script language="javascript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
		window.SJB_UserSiteUrl   = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
';

	</script>

	
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/jobs/') {?>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['plugins']['IndeedPlugin']['active']==1) {?>
			<script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
		<?php }?>
	<?php }?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0][0]->_tpl_javascript_get(array(),$_smarty_tpl);?>


	<script>
		function message(title, content) {
			var modal = $('#message-modal');
			modal.find('.modal-title').html(title);
			modal.find('.modal-body').html(content);
			modal.modal('show');
		}
	</script>
</body>
</html><?php }} ?>
