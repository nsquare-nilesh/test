<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>AssessorList [[Admin Panel]]{if $TITLE} | {$TITLE|escape}{/if}</title>
	<meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.user_site_url}/templates/_system/admin/assets/third-party/css/animate.css?v={$GLOBALS.v}" />
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.user_site_url}/templates/_system/admin/assets/third-party/css/toggles.css?v={$GLOBALS.v}" />
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.user_site_url}/templates/_system/admin/assets/style/style.css?v={$GLOBALS.v}" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.css" />
	<link href="{$GLOBALS.user_site_url}/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{$GLOBALS.user_site_url}/system/ext/jquery/css/jquery.multiselect.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/autoupload_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/multilist_functions.js"></script>
	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/templates/_system/admin/assets/third-party/js/toggles.min.js"></script>

	<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	{if isset( $GLOBALS.available_datepicker_localizations[$GLOBALS.current_language] )}
		<script type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.{$GLOBALS.current_language}.min.js" ></script>
	{/if}
	<script>
		var langSettings = {
			thousands_separator : '{$GLOBALS.current_language_data.thousands_separator}',
			decimal_separator : '{$GLOBALS.current_language_data.decimal_separator}',
			decimals : '{$GLOBALS.current_language_data.decimals}',
			currencySign: '{currencySign}',
			showCurrencySign: 1,
			currencySignLocation: '{$GLOBALS.current_language_data.currencySignLocation}',
			rightToLeft: {$GLOBALS.current_language_data.rightToLeft}
		};
	</script>
	<script language="JavaScript" type="text/javascript" src="{common_js}/floatnumbers_functions.js"></script>
	{capture name="displayProgressBar"}<img style="vertical-align: middle;" src="{$GLOBALS.user_site_url}/system/ext/jquery/progbar.gif" alt="[[Please wait ...]]" /> [[Please wait ...]]{/capture}
    <script language="JavaScript" type="text/javascript">

		// Set global javascript value for page
		window.SJB_GlobalSiteUrl = '{$GLOBALS.site_url}';
		window.SJB_AdminSiteUrl  = '{$GLOBALS.admin_site_url}';
		window.SJB_UserSiteUrl   = '{$GLOBALS.user_site_url}';

		currentSjbVersion = {
			major: "{$GLOBALS.version.major}",
			minor: "{$GLOBALS.version.minor}",
			build: "{$GLOBALS.version.build}"
		};

		{if not $isSaas && !$smarty.session.{update-in-progress}}
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
		{/if}

		$.extend($.ui.dialog.prototype.options, {
			modal: true
		});

	</script>
</head>
<body>
	<aside class="left-panel" tabindex="5000" style="overflow: hidden; outline: none;">
		<div class="left-panel__top">
			<div class="logo">
				<a href="{$GLOBALS.admin_site_url}" class="logo-expanded text-center">
					<!--<img class="logo__img" src="{image}logo.svg" border="0" alt=""/>-->
					<img class="logo__img" src="{image}logo_new.png" border="0" alt=""/>
				</a>
			</div>
		</div>
		{module name="menu" function="show_left_menu"}
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
						<a href="{if $GLOBALS.settings.domain|escape}http://{$GLOBALS.settings.domain|escape}{$GLOBALS.base_url}{else}{$GLOBALS.user_site_url}{/if}" class="view-frontend" target="_blank" title="[[View your job board]]">
							<i class="fa fa-external-link" aria-hidden="true"></i>
						</a>
					</li>
					{if $isSaas && $smarty.session.saas.trial_expire_date}
						<li class="trial-expire">
							[[Your free trial expires in {$smarty.session.saas.trial_expires_in} days.]]
							<button type="button" class="trial-expire__upgrade btn btn--primary btn-xs">
								[[Upgrade now]]
							</button>
						</li>
						{javascript}
							<script type="application/javascript">
								$(document).ready(function() {
									$.get('{$GLOBALS.admin_site_url}/system/miscellaneous/update_saas_info/', function(data) {
										if ($.trim(data) != 'Trial') {
											$('.trial-expire').remove();
										}
									});
								});
							</script>
						{/javascript}
					{/if}
					<li class="dropdown text-right pull-right navbar-nav__icon">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							<i class="fa fa-caret-down" aria-hidden="true"></i>
						</a>
						<ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
							{if $isSaas}
								<li class="upgrade">
									<a href="{$billingUrl}/l.php?user={$smarty.session.username|escape:'url'}&amp;pass={$smarty.session.password|whmcs_encode|base64_encode|escape:'url'}&amp;product={$smarty.session.saas.id}">[[Upgrade]]</a>
								</li>
							{/if}
							<li>
								{if $smarty.session.admin.owner}
									<a href="{$billingUrl}">[[My Account]]</a>
								{else}
									<a href="{$GLOBALS.site_url}/admins/?action=edit&amp;sid={$smarty.session.admin.sid}">[[My Account]]</a>
								{/if}
							</li>
							<li><a href="{$GLOBALS.site_url}/system/users/logout/">[[Log out]]</a></li>
						</ul>
					</li>
					<li class="pull-right help-center navbar-nav__icon">
						<a href="http://help.smartjobboard.com/" target="_blank" title="[[Help Center]]">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</nav>
		</header>

		<div class="update-info">
			<a href="{$GLOBALS.site_url}/update-to-new-version/">[[New update available]]</a>
			<span class="update-info-close">X</span>
		</div>
		{module name="miscellaneous" function="guided_tour"}
		<div class="wrapper container-fluid wrapper--main">
			{if $GLOBALS.user_page_uri !== "/" && $ADMIN_BREADCRUMBS}
				<div class="breacrumb__wrapper clearfix">
					<ol id="breadCrumbs" class="breadcrumb clearfix">
						<li>[[{$ADMIN_BREADCRUMBS}]]</li>
					</ol>
				</div>
			{/if}
			{module name='flash_messages' function='display'}
			{$MAIN_CONTENT}
		</div>
	</section>
	<script>
		{literal}
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		{/literal}
		ga('create', 'UA-71150631-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Chatra {literal} 
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
	 /Chatra {/literal} -->

	{if $isSaas}
		<script>
			window.intercomSettings = {
				app_id: '{$intercom_app}',
				user_id: '{$smarty.session.saas.id}',
				domain: '{if $GLOBALS.settings.domain}{$GLOBALS.settings.domain}{else}{$smarty.server.HTTP_HOST}{/if}'
			};
			{literal}(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/hhrd1569';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})(){/literal}

			$(document).ready(function() {
				$('#generalTab input[name="logo"]').change(function() {
					Intercom('trackEvent', 'change-logo');
				});
			});

			$('.trial-expire__upgrade').click(function() {
				window.open('{$billingUrl}/l.php?user={$smarty.session.username|escape:'url'}&pass={$smarty.session.password|whmcs_encode|base64_encode|escape:'url'}&product={$smarty.session.saas.id}', '_blank');
			});
		</script>
		{if $smarty.session.first_login}
			<script type="text/javascript">
				{literal}
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
				{/literal}
				window.JacoRecorder.identify('{$smarty.server.HTTP_HOST}');
			</script>
		{/if}
	{/if}
	<script data-pace-options='{ "restartOnRequestAfter": false, "restartOnPushState": false }' src="{$GLOBALS.user_site_url}/templates/_system/admin/assets/third-party/js/pace.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var dFormat = '{$GLOBALS.current_language_data.date_format}';

			dFormat = dFormat.replace('%m', "mm");
			dFormat = dFormat.replace('%d', "dd");
			dFormat = dFormat.replace('%Y', "yyyy");

			$(".input__datepicker").datepicker({
				language: '{$GLOBALS.current_language}',
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
	{js}
</body>
</html>
