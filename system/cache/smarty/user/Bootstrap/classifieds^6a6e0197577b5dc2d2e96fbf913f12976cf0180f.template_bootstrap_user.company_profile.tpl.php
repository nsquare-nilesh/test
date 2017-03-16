<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 21:31:26
         compiled from "template_bootstrap_user:company_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82543422658b841d65e4bd8-76481250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a6e0197577b5dc2d2e96fbf913f12976cf0180f' => 
    array (
      0 => 'template_bootstrap_user:company_profile.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '82543422658b841d65e4bd8-76481250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b841d65fa1d6_93780490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b841d65fa1d6_93780490')) {function content_58b841d65fa1d6_93780490($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['Logo']['file_url']||$_smarty_tpl->tpl_vars['userInfo']->value['CompanyDescription']) {?>
	<div class="sidebar col-xs-10 profile col-xs-offset-1 col-sm-offset-0 pull-right">
		<div class="sidebar__content">
			<?php if ($_smarty_tpl->tpl_vars['userInfo']->value['Logo']['file_url']) {?>
				<div class="text-center profile__image">
					<img class="profile__img profile__img-company" src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['Logo']['file_url'];?>
" alt="" />
				</div>
			<?php }?>
			<div class="profile__info">
				<div class="profile__info__description content-text"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['CompanyDescription'];?>
</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
			<div class="banner banner--right">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

			</div>
		<?php }?>
	</div>
<?php } else { ?>
	<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
		<div class="sidebar col-xs-10 profile col-xs-offset-1 col-sm-offset-0 pull-right with-banner">
			<div class="banner banner--right banner--company-profile">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

			</div>
		</div>
	<?php }?>
<?php }?><?php }} ?>
