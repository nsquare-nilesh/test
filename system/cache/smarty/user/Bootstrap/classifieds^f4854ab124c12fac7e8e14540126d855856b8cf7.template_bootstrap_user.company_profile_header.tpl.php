<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 21:31:26
         compiled from "template_bootstrap_user:company_profile_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11487003258b841d65bcfe3-16892408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4854ab124c12fac7e8e14540126d855856b8cf7' => 
    array (
      0 => 'template_bootstrap_user:company_profile_header.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '11487003258b841d65bcfe3-16892408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b841d65e0d27_66311956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b841d65e0d27_66311956')) {function content_58b841d65e0d27_66311956($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'], null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs at $company_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('description', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jobs at $company_name on $site_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="details-header">
    <div class="container">
        <div class="results">
            <a href="javascript:history.go(-1)"
               class="btn__back">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        </div>
        <h1 class="details-header__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <ul class="listing-item__info">
            <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['userInfo']->value)) {?>
                <li class="listing-item__info--item listing-item__info--item-location">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['userInfo']->value);?>

                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['WebSite']) {?>
                <li class="listing-item__info--item listing-item__info--item-website">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['WebSite'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['WebSite'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        $(document).on('ready', function() {
            var website = $('.listing-item__info--item-website a');
            var href = website.attr('href');
            if (href && !href.match(/^http([s]?):\/\/.*/)) {
                website.attr('href', 'http://' + href);
            }
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
