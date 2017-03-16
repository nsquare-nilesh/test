<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<meta name="keywords" content="{$KEYWORDS|escape}">
	<meta name="description" content="{$DESCRIPTION|escape}">
	<link rel="alternate" type="application/rss+xml" title="[[Jobs]]" href="{$GLOBALS.site_url}/rss/">

	<title>{if $TITLE}{tr}{$TITLE}{/tr|escape} | {/if}{$GLOBALS.settings.site_title}</title>

	<link href="{$GLOBALS.site_url}/templates/Breeze/assets/third-party/jquery-ui.css" rel="stylesheet">
	<link href="{$GLOBALS.site_url}/templates/Breeze/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="{$GLOBALS.site_url}/templates/Breeze/assets/style/styles.css" rel="stylesheet">

	[[$HEAD]]
	<style type="text/css">{$GLOBALS.theme_settings.custom_css}</style>
	{$GLOBALS.theme_settings.custom_js}
</head>
<body>
<style>
	body {
		overflow: hidden;
		padding: 0;
		margin: 0;
		width: auto;
	}
</style>
{module name='flash_messages' function='display'}
{$MAIN_CONTENT}
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{$GLOBALS.site_url}/templates/Breeze/assets/third-party/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{$GLOBALS.site_url}/templates/Breeze/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{$GLOBALS.site_url}/templates/Breeze/assets/third-party/jquery-ui.min.js"></script>

<script language="JavaScript" type="text/javascript" src="{common_js}/main.js"></script>
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/templates/Breeze/assets/third-party/jquery.form.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/jquery.validate.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/templates/Breeze/common_js/autoupload_functions.js"></script>
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/imagesize.js"></script>
<link rel="Stylesheet" type="text/css" href="{$GLOBALS.site_url}/system/ext/jquery/css/jquery.multiselect.css" />
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.user_site_url}/system/ext/jquery/multilist/jquery.multiselect.min.js"></script>
<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/templates/Breeze/common_js/multilist_functions.js"></script>
<script>
	document.addEventListener("touchstart", function() { }, false);

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

<script language="JavaScript" type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
{if isset( $GLOBALS.available_datepicker_localizations[$GLOBALS.current_language] )}
	<script type="text/javascript" src="{$GLOBALS.site_url}/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.{$GLOBALS.current_language}.min.js" ></script>
{/if}

<script language="javascript" type="text/javascript">

	// Set global javascript value for page
	window.SJB_GlobalSiteUrl = '{$GLOBALS.site_url}';
	window.SJB_UserSiteUrl   = '{$GLOBALS.user_site_url}';

</script>

{* load scripts for used indeed *}
{if $GLOBALS.user_page_uri == '/jobs/'}
	{if $GLOBALS.plugins.IndeedPlugin.active == 1}
		<script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
	{/if}
{/if}

{js}

<script>
	function message(title, content) {
		var modal = $('#message-modal');
		modal.find('.modal-title').html(title);
		modal.find('.modal-body').html(content);
		modal.modal('show');
	}
</script>
</body>
</html>