<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 17:30:46
         compiled from "template__system/admin_admin:E:\xampp\htdocs\smartjob\templates\_system\admin\template_manager\theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208258b5666e10dc34-55810331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633775a22586a892551da21090b46d50bcbd5e29' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\smartjob\\templates\\_system\\admin\\template_manager\\theme_editor.tpl',
      1 => 1486703692,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1208258b5666e10dc34-55810331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'themes' => 0,
    'theme' => 0,
    'theme_system_name' => 0,
    'theme_name' => 0,
    'GLOBALS' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b5666e189ae3_14451828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b5666e189ae3_14451828')) {function content_58b5666e189ae3_14451828($_smarty_tpl) {?><div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>
<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=="ALREADY_EXISTS") {?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme already exists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</p>
<?php } elseif ($_smarty_tpl->tpl_vars['ERROR']->value=="EMPTY_NAME") {?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter a name of the New Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }?>
<div class="active-theme">
	<div class="active-theme__left">
		<div class="theme-name">
			<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value) {
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['theme_system_name']->value) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php } ?>
		</div>
		<div class="theme-tools">
			<a href="<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain']) {?>http://<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['domain'];?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['base_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
<?php }?>" class="btn btn--primary theme-tools__btn" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/customize-theme/" class="btn btn--primary theme-tools__btn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customize Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		</div>
	</div>
	<div class="active-theme__right">
		<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/assets/images/thumb.png" alt="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['TEMPLATE_USER_THEME'];?>
" />
	</div>
</div>

<div class="theme__lists__title">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change Theme<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div class="theme__lists">
	<?php  $_smarty_tpl->tpl_vars["theme_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["theme_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["theme_system_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["theme_name"]->key => $_smarty_tpl->tpl_vars["theme_name"]->value) {
$_smarty_tpl->tpl_vars["theme_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["theme_system_name"]->value = $_smarty_tpl->tpl_vars["theme_name"]->key;
?>
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
		<div class="theme__item <?php if ($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['theme_system_name']->value) {?>current<?php }?>">
			<span class="theme__item__name"><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['theme']->value==$_smarty_tpl->tpl_vars['theme_system_name']->value) {?><strong>- <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Current<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><?php }?></span>
			<div class="theme-img__wrapper">
				<a href="?theme=<?php echo $_smarty_tpl->tpl_vars['theme_system_name']->value;?>
" class="theme__link"></a>
				<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/<?php echo $_smarty_tpl->tpl_vars['theme_system_name']->value;?>
/assets/images/thumb.png" id="pic" />
			</div>
			<div class="theme__center">
				<a href="?theme=<?php echo $_smarty_tpl->tpl_vars['theme_system_name']->value;?>
" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Make current<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</div>
		</div>
	<?php } ?>
</div><?php }} ?>
