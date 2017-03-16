<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:57:28
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/menu/admin_left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139952841158b588d0e29170-91828601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c76a1210db9d6e3b57ac78287c3cdf7ce2b91f' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/menu/admin_left_menu.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '139952841158b588d0e29170-91828601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'GLOBALS' => 0,
    'left_admin_menu' => 0,
    'section_items' => 0,
    'section' => 0,
    'item' => 0,
    'chars' => 0,
    'acl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588d0e72bf8_34251593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588d0e72bf8_34251593')) {function content_58b588d0e72bf8_34251593($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars["chars"] = new Smarty_variable(array(' ','/'), null, 0);?>

<nav class="navigation">
	<ul class="list-unstyled">
		<li id="dashboard" <?php if ($_smarty_tpl->tpl_vars['url']->value=='/') {?>class="active"<?php }?>>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
">
				<i class="fa fa-tachometer"></i> <span class="nav-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
			</a>
		</li>
		<?php  $_smarty_tpl->tpl_vars["section_items"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["section_items"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["section_items"]->key => $_smarty_tpl->tpl_vars["section_items"]->value) {
$_smarty_tpl->tpl_vars["section_items"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["section_items"]->key;
?>
			<li class="has-submenu nav__item <?php if ($_smarty_tpl->tpl_vars['section_items']->value['active']) {?>active<?php }?>" id="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['section_items']->value['id'], 'UTF-8');?>
">
                <a href="#"><i class="fa <?php echo mb_strtolower($_smarty_tpl->tpl_vars['section_items']->value['id'], 'UTF-8');?>
"></i> <span class="nav-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                <ul class="list-unstyled">
                    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['reference'];?>
" data-accordion="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['section_items']->value['id'], 'UTF-8');?>
" class="sub-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['item']->value['title'], 'UTF-8'),$_smarty_tpl->tpl_vars['chars']->value,'');?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </li>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('Settings and Configuration')) {?>
			<li id="plugins" class="<?php if (in_array($_smarty_tpl->tpl_vars['url']->value,array('/system/miscellaneous/plugins/','/system/miscellaneous/jobg8_settings/','/social-media/linkedin','/system/miscellaneous/plugins/','/system/miscellaneous/fb_app_settings/'))) {?>active<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/system/miscellaneous/plugins/" data-accordion="plugins"><span class="nav-label"><i class="fa fa-plug"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
			</li>
		<?php }?>
	</ul>
</nav>
<div class="packageVersion text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['major'];?>
.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['minor'];?>
.<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['version']['build'];?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/admin/assets/third-party/js/jquery.nicescroll.js"></script>

	<script>
		var $sideBar = $('aside.left-panel');
		var $navbarItem = $("aside.left-panel nav.navigation > ul > li > a");

		// mark left menu item as active if none marked
		// todo: refactor
		if ($('.left-panel nav .active').length == 0) {
			if (localStorage.getItem("currentMenu") !== null) {
				var openMenu = localStorage.getItem('currentMenu');
				$('#' + openMenu).addClass('active');
			}

			if (localStorage.getItem("currentSubMenu") !== null) {
				var openSubMenu = localStorage.getItem('currentSubMenu');
				$('.' + openSubMenu).closest('li').addClass('active');
			}
		}

		$('.navbar-toggle').on('click', function () {
			$sideBar.toggleClass('collapsed');
		});

		$('.has-submenu ul a').on('click', function() {
			localStorage.setItem('currentSubMenu', $(this).attr('class'));
		});

		$('[data-accordion]').on('click', function() {
			localStorage.setItem('currentMenu', $(this).data('accordion'));
		});

		$navbarItem.click(function (e) {
			if ($(this).closest('li').hasClass('has-submenu')) {
				e.preventDefault();
				$("aside.left-panel nav.navigation > ul > li > ul").slideUp(300);
				$("aside.left-panel nav.navigation > ul > li").removeClass('active');

				if (!$(this).next().is(":visible")) {
					$(this).next().slideToggle(300, function () {
						$("aside.left-panel:not(.collapsed)").getNiceScroll().resize();
					});
					$(this).closest('li').addClass('active');
				}
				return false;
			}
		});

		$("aside.left-panel").niceScroll({
			cursorcolor: '#8e909a',
			cursorborder: '0px solid #fff',
			cursoropacitymax: '0.5',
			cursorborderradius: '0px'
		});

	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
