<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:57
         compiled from "template_bootstrap_user:../menu/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154842703158b588a69e12c8-87343945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841ccaf74f9bd0afea33f5e217a702fe1dbe45e3' => 
    array (
      0 => 'template_bootstrap_user:../menu/header.tpl',
      1 => 1488881678,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '154842703158b588a69e12c8-87343945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a6a13788_49575990',
  'variables' => 
  array (
    'GLOBALS' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a6a13788_49575990')) {function content_58b588a6a13788_49575990($_smarty_tpl) {?><?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_top')) {?>
	<div class="banner banner--top">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_top');?>

	</div>
<?php }?>
<nav class="navbar navbar-default">
	<div class="container container-fluid">
		<div class="logo navbar-header">
			<a class="logo__text navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/Bootstrap/assets/images/<?php echo rawurlencode($_smarty_tpl->tpl_vars['GLOBALS']->value['theme_settings']['logo']);?>
" />
			</a>
		</div>
		<div class="burger-button__wrapper burger-button__wrapper__js visible-sm visible-xs"
			 data-target="#navbar-collapse" data-toggle="collapse">
			<div class="burger-button"></div>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<div class="visible-sm visible-xs">
				<?php $_smarty_tpl->_capture_stack[0][] = array('nav_menu', null, null); ob_start(); ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'template_manager','function'=>'navigation_menu'),$_smarty_tpl);?>

				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo Smarty::$_smarty_vars['capture']['nav_menu'];?>

			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']) {?>
					<li class="navbar__item"><a class="navbar__link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/logout/"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="navbar__item navbar__item__filled">
                        <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="Employer") {?>
                            <a class="navbar__link btn__blue" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/job/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        <?php } else { ?>
                            <a class="navbar__link btn__blue" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/resume/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        <?php }?>
                    </li>
				<?php } else { ?>
					<li class="navbar__item navbar__item <?php if ($_smarty_tpl->tpl_vars['url']->value=='/login/') {?>active<?php }?>">
						<a class="navbar__link navbar__login" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/login/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
					<li class="navbar__item navbar__item__filled"><a class="navbar__link  btn__blue" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/registration/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
				<?php }?>
			</ul>
			<div class="visible-md visible-lg">
				<?php echo Smarty::$_smarty_vars['capture']['nav_menu'];?>

			</div>
		</div>
	</div>
</nav><?php }} ?>
