<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 19:39:28
         compiled from "template__system/admin_admin:index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132190026658b588d0d4e4e9-50166703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af6e5cbd5b1f33bde2021f2207054bb21170bfff' => 
    array (
      0 => 'template__system/admin_admin:index.tpl',
      1 => 1489066756,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '132190026658b588d0d4e4e9-50166703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588d0e1bc02_26435269',
  'variables' => 
  array (
    'TITLE' => 0,
    'GLOBALS' => 0,
    'isSaas' => 0,
    'billingUrl' => 0,
    'ADMIN_BREADCRUMBS' => 0,
    'MAIN_CONTENT' => 0,
    'intercom_app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588d0e1bc02_26435269')) {function content_58b588d0e1bc02_26435269($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>AssessorList <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin Panel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['TITLE']->value) {?> | <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TITLE']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></title>
	<meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/css/animate.css?v=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['v'];?>
" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/css/toggles.css?v=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['v'];?>
" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/style/style.css?v=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['v'];?>
" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.css" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/css/jquery.multiselect.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/js/toggles.min.js"></script>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['available_datepicker_localizations'][$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language']])) {?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
.min.js" ></script>
	<?php }?>
	<script>
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
	<?php $_smarty_tpl->_capture_stack[0][] = array("displayProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <script language="JavaScript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
';
		window.SJB_AdminSiteUrl  = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
';
		window.SJB_UserSiteUrl   = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
';

		currentSjbVersion = {
			major: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
",
			minor: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
",
			build: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
"
		};

		<?php if (!$_smarty_tpl->tpl_vars['isSaas']->value&&!$_SESSION['update'-'in'-'progress']) {?>
			$(document).ready(function() {
				// check for availabled SJB updates
				$.getJSON(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", function(data) {
					if (data.updateStatus == 'available' && !data.closed_by_user) {
						$(".update-info").show("slide", { direction: "up"}, 500);
					}
				});

				$(".update-info-close").click(function() {
					$(".update-info").hide("slide", { direction: "up"}, 500);
					$.post(window.SJB_AdminSiteUrl + "/system/miscellaneous/update_check/", { action: "mark_as_closed"});
				});
			});
		<?php }?>

		$.extend($.ui.dialog.prototype.options, {
			modal: true
		});

	</script>
</head>
<body>
	<aside class="left-panel" tabindex="5000" style="overflow: hidden; outline: none;">
		<div class="left-panel__top">
			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
" class="logo-expanded text-center">
					<!--<img class="logo__img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
logo.svg" border="0" alt=""/>-->
					<img class="logo__img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
logo_new.png" border="0" alt=""/>
				</a>
			</div>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"menu",'function'=>"show_left_menu"),$_smarty_tpl);?>

	</aside>
	<section class="content">
		<header class="top-head container-fluid">
			<button type="button" class="navbar-toggle pull-left visible-sm visible-xs">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<nav class="navbar-default clearfix" role="navigation">
				<ul class="nav navbar-nav navbar-right top-menu top-right-menu">
					<li class="navbar-nav__icon">
						<a href="<?php if (htmlspecialchars($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain'], ENT_QUOTES, 'UTF-8', true)) {?>http://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['base_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
<?php }?>" class="view-frontend" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View your job board<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
							<i class="fa fa-external-link" aria-hidden="true"></i>
						</a>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['isSaas']->value&&$_SESSION['saas']['trial_expire_date']) {?>
						<li class="trial-expire">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your free trial expires in <?php echo $_SESSION['saas']['trial_expires_in'];?>
 days.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<button type="button" class="trial-expire__upgrade btn btn--primary btn-xs">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upgrade now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</button>
						</li>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<script type="application/javascript">
								$(document).ready(function() {
									$.get('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/system/miscellaneous/update_saas_info/', function(data) {
										if ($.trim(data) != 'Trial') {
											$('.trial-expire').remove();
										}
									});
								});
							</script>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<li class="dropdown text-right pull-right navbar-nav__icon">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							<i class="fa fa-caret-down" aria-hidden="true"></i>
						</a>
						<ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
							<?php if ($_smarty_tpl->tpl_vars['isSaas']->value) {?>
								<li class="upgrade">
									<a href="<?php echo $_smarty_tpl->tpl_vars['billingUrl']->value;?>
/l.php?user=<?php echo rawurlencode($_SESSION['username']);?>
&amp;pass=<?php echo rawurlencode(base64_encode(SJB_HelperFunctions::whmcsEncode($_SESSION['password'])));?>
&amp;product=<?php echo $_SESSION['saas']['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upgrade<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</li>
							<?php }?>
							<li>
								<?php if ($_SESSION['admin']['owner']) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['billingUrl']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/admins/?action=edit&amp;sid=<?php echo $_SESSION['admin']['sid'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								<?php }?>
							</li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/logout/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
						</ul>
					</li>
					<li class="pull-right help-center navbar-nav__icon">
						<a href="http://help.smartjobboard.com/" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Help Center<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</nav>
		</header>

		<div class="update-info">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/update-to-new-version/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
New update available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<span class="update-info-close">X</span>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"guided_tour"),$_smarty_tpl);?>

		<div class="wrapper container-fluid wrapper--main">
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']!=="/"&&$_smarty_tpl->tpl_vars['ADMIN_BREADCRUMBS']->value) {?>
				<div class="breacrumb__wrapper clearfix">
					<ol id="breadCrumbs" class="breadcrumb clearfix">
						<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['ADMIN_BREADCRUMBS']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
					</ol>
				</div>
			<?php }?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>

		</div>
	</section>
	<script>
		
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-71150631-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Chatra  
		<script>
			ChatraID = '8BZ9fXKJPeSkTzHyh';
			(function(d, w, c) {
				var n = d.getElementsByTagName('script')[0],
						s = d.createElement('script');
				w[c] = w[c] || function()
						{ (w[c].q = w[c].q || []).push(arguments); }
				;
				s.async = true;
				s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
						+ '//call.chatra.io/chatra.js';
				n.parentNode.insertBefore(s, n);
			})(document, window, 'Chatra');
		</script>
	 /Chatra  -->

	<?php if ($_smarty_tpl->tpl_vars['isSaas']->value) {?>
		<script>
			window.intercomSettings = {
				app_id: '<?php echo $_smarty_tpl->tpl_vars['intercom_app']->value;?>
',
				user_id: '<?php echo $_SESSION['saas']['id'];?>
',
				domain: '<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain']) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain'];?>
<?php } else { ?><?php echo $_SERVER['HTTP_HOST'];?>
<?php }?>'
			};
			(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/hhrd1569';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()

			$(document).ready(function() {
				$('#generalTab input[name="logo"]').change(function() {
					Intercom('trackEvent', 'change-logo');
				});
			});

			$('.trial-expire__upgrade').click(function() {
				window.open('<?php echo $_smarty_tpl->tpl_vars['billingUrl']->value;?>
/l.php?user=<?php echo rawurlencode($_SESSION['username']);?>
&pass=<?php echo rawurlencode(base64_encode(SJB_HelperFunctions::whmcsEncode($_SESSION['password'])));?>
&product=<?php echo $_SESSION['saas']['id'];?>
', '_blank');
			});
		</script>
		<?php if ($_SESSION['first_login']) {?>
			<script type="text/javascript">
				
				(function(e, t) {
					function i(e, t) {
						e[t] = function() {
							e.push([ t ].concat(Array.prototype.slice.call(arguments, 0)));
						};
					}
					function s() {
						var e = t.location.hostname.match(/[a-z0-9][a-z0-9\-]+\.[a-z\.]{2,6}$/i), n = e ? e[0] : null, i = "; domain=." + n + "; path=/";
						t.referrer && t.referrer.indexOf(n) === -1 ? t.cookie = "jaco_referer=" + t.referrer + i : t.cookie = "jaco_referer=" + r + i;
					}
					var n = "JacoRecorder", r = "none";
					(function(e, t, r, o) {
						if (!r.__VERSION) {
							e[n] = r;
							var u = [ "init", "identify", "startRecording", "stopRecording", "removeUserTracking", "setUserInfo" ];
							for (var a = 0; a < u.length; a++) i(r, u[a]);
							s(), r.__VERSION = 2.1, r.__INIT_TIME = 1 * new Date;
							var f = t.createElement("script");
							f.async = !0, f.setAttribute("crossorigin", "anonymous"), f.src = o;
							var l = t.getElementsByTagName("head")[0];
							l.appendChild(f);
						}
					})(e, t, e[n] || [], "https://recorder-assets.getjaco.com/recorder_v2.js");
				}).call(window, window, document), window.JacoRecorder.push([ "init", "f538927c-7311-437e-858f-312b52e89f5f", {} ]);
				
				window.JacoRecorder.identify('<?php echo $_SERVER['HTTP_HOST'];?>
');
			</script>
		<?php }?>
	<?php }?>
	<script data-pace-options='{ "restartOnRequestAfter": false, "restartOnPushState": false }' src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/js/pace.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';

			dFormat = dFormat.replace('%m', "mm");
			dFormat = dFormat.replace('%d', "dd");
			dFormat = dFormat.replace('%Y', "yyyy");

			$(".input__datepicker").datepicker({
				language: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
',
				format: dFormat,
				autoclose: true,
				todayHighlight: true,
				startDate: new Date(1940, 1 - 1, 1),
				endDate: '+10y',
			});

			$('.ui-datepicker-trigger').on('click', function () {
				$(this).prev().focus();
			});

			var is_touch_device = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch;
			var tooltipPlacement = '';

			if ($(window).width() >= 992 && (!$('.tooltip-job8').length)) {
				tooltipPlacement = 'auto top';
			} else {
				tooltipPlacement = 'auto left';
			}

			$('[data-toggle="tooltip"]').tooltip({
				trigger: is_touch_device ? "click" : "manual",
				html: true,
				placement: tooltipPlacement
			}).on("mouseenter", function() {
				var _this = this;
				$(this).tooltip("show");
				$(this).siblings(".tooltip").on("mouseleave", function() {
					$(_this).tooltip("hide");
				});
			}).on("mouseleave", function() {
				var _this = this;
				setTimeout(function() {
					if (!$(".tooltip:hover").length) {
						$(_this).tooltip("hide")
					}
				}, 200);
			});

		});
	</script>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js'][0][0]->_tpl_javascript_get(array(),$_smarty_tpl);?>

</body>
</html>
<?php }} ?>
