<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:../menu/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18642940258b588a6cbd440-28160560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf9f728f5ebf0c8133563b3d3ad61eecc8e0de0' => 
    array (
      0 => 'template_bootstrap_user:../menu/footer.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '18642940258b588a6cbd440-28160560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a6cdd244_81513030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a6cdd244_81513030')) {function content_58b588a6cdd244_81513030($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><div class="page-row hidden-print">
	<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_bottom')) {?>
		<div class="banner banner--bottom <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/job/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/job-preview/') {?>banner--job-details<?php }?>">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_bottom');?>

		</div>
	<?php }?>

	<footer class="footer">
		<div class="container">
			<?php $_smarty_tpl->tpl_vars["current_year"] = new Smarty_variable(smarty_modifier_date_format(time(),"%Y"), null, 0);?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['footer'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	</footer>
	<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_TrackingID']) {?>
	<script>
		
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_TrackingID'];?>
', 'auto');
		ga('send', 'pageview');
	</script>
	<?php }?>
</div><?php }} ?>
