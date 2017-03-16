<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 21:31:26
         compiled from "template_bootstrap_user:search_results_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14331479558b841d6504b34-51820665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da32e3cd81def110fec6ca22f3c28f932d9e81f' => 
    array (
      0 => 'template_bootstrap_user:search_results_profile.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '14331479558b841d6504b34-51820665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_search' => 0,
    'userInfo' => 0,
    'listings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b841d65b8f92_60382279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b841d65b8f92_60382279')) {function content_58b841d65b8f92_60382279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("company_profile_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container details-body details-body__company-profile">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("company_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="col-xs-12 details-body__left companies-jobs-list">
            <div class="search-results__top clearfix">
                <h3 class="search-results__title">
                    <?php $_smarty_tpl->tpl_vars["jobs_number"] = new Smarty_variable($_smarty_tpl->tpl_vars['listing_search']->value['listings_number'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["company_name"] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['userInfo']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number job(s) at $company_name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </h3>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['listings']->value) {?>
                <div class="search-results listing">
                    <?php echo $_smarty_tpl->getSubTemplate ("search_results_jobs_listings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <button type="button" class="load-more btn btn__white <?php if ($_smarty_tpl->tpl_vars['listing_search']->value['listings_number']<=$_smarty_tpl->tpl_vars['listing_search']->value['listings_per_page']) {?>hidden<?php }?>" data-backfilling="false" data-page="2">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Load more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </button>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>
