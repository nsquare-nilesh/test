<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:37:58
         compiled from "template_bootstrap_user:C:\wamp64\www\AssessorList\templates\Bootstrap\template_manager\navigation_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2444558c153ae0116a0-35077548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfcac1b9c688f9f8a0ab63b1c7870f12bb0dcde9' => 
    array (
      0 => 'template_bootstrap_user:C:\\wamp64\\www\\AssessorList\\templates\\Bootstrap\\template_manager\\navigation_menu.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2444558c153ae0116a0-35077548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuItems' => 0,
    'url' => 0,
    'menuItem' => 0,
    'sub_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153ae0ae6e2_07022874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153ae0ae6e2_07022874')) {function content_58c153ae0ae6e2_07022874($_smarty_tpl) {?><ul class="nav navbar-nav navbar-left">
    <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
        <li class="navbar__item <?php if ($_smarty_tpl->tpl_vars['url']->value==$_smarty_tpl->tpl_vars['menuItem']->value['url']) {?>active<?php }?><?php if ($_REQUEST['listing_type_id']=='Job'&&$_smarty_tpl->tpl_vars['menuItem']->value['url']=='/add-listing/?listing_type_id=Job') {?>active<?php }?><?php if ($_smarty_tpl->tpl_vars['menuItem']->value['children']) {?> dropdown<?php }?>">
            <a class="navbar__link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value['fixed_url'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
            <?php if ($_smarty_tpl->tpl_vars['menuItem']->value['children']) {?>
                <ul class="dropdown-menu">
                    <?php  $_smarty_tpl->tpl_vars['sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuItem']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_item']->key => $_smarty_tpl->tpl_vars['sub_item']->value) {
$_smarty_tpl->tpl_vars['sub_item']->_loop = true;
?>
                        <li class="navbar__item <?php if ($_smarty_tpl->tpl_vars['url']->value==$_smarty_tpl->tpl_vars['sub_item']->value['url']) {?>active<?php }?><?php if ($_REQUEST['listing_type_id']=='Job'&&$_smarty_tpl->tpl_vars['sub_item']->value['url']=='/add-listing/?listing_type_id=Job') {?>active<?php }?>">
                            <a class="navbar__link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_item']->value['fixed_url'], ENT_QUOTES, 'UTF-8', true);?>
"><span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['sub_item']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></a>
                        </li>
                    <?php } ?>
                </ul>
            <?php }?>
        </li>
    <?php } ?>
</ul>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        $('.navbar__link').on('click', function(e) {
            if ($(this).attr('href') == '' || $(this).attr('href') == 'http://' ||
                    $(this).attr('href') == 'https://' || $(this).attr('href') == '#') {
                e.preventDefault();
            }
        });

        $('.dropdown > a').on('touchstart', function (e) {
            var link = $(this);
            if (link.hasClass('hover')) {
                return true;
            } else {
                link.addClass('hover');
                $('.dropdown > a').not(this).removeClass('hover');
                e.preventDefault();
                return false;
            }
        });

        $(document).on('click', function (e) {
            var dropdown = $('.navbar__link.hover').closest('.navbar__item');

            if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
                dropdown.find('.navbar__link.hover').removeClass('hover');
            }
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
