<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:listing_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7432735058b588a6b3c2f4-26854629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89c6469076ff165ec9f65bcb8608ec15fa2c0d7a' => 
    array (
      0 => 'template_bootstrap_user:listing_item.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '7432735058b588a6b3c2f4-26854629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
    'GLOBALS' => 0,
    'list_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a6b723e7_94530665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a6b723e7_94530665')) {function content_58b588a6b723e7_94530665($_smarty_tpl) {?><article class="media well listing-item listing-item__jobs <?php if ($_smarty_tpl->tpl_vars['listing']->value['featured']) {?>listing-item__featured<?php }?> <?php if (!$_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url']) {?>listing-item__no-logo<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url']) {?>
        <div class="media-left listing-item__logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listing']->value);?>
">
                <img class="media-object profile__img-company" src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['Logo']['file_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
">
            </a>
        </div>
    <?php }?>
    <div class="media-body">
        <div class="media-heading listing-item__title">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listing']->value);?>
" class="link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
        </div>
        <div class="listing-item__info clearfix">
            <span class="listing-item__info--item listing-item__info--item-company">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>

            </span>
            <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value)) {?>
                <span class="listing-item__info--item listing-item__info--item-location">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value);?>

                </span>
            <?php }?>
        </div>
        <div class="listing-item__desc hidden-sm hidden-xs">
            <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']);?>

        </div>
    </div>
    <div class="media-right text-right">
        <div class="listing-item__date">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['listing']->value['activation_date']);?>

        </div>
        <?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['EmploymentType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list_value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
 $_smarty_tpl->tpl_vars['list_value']->index++;
 $_smarty_tpl->tpl_vars['list_value']->first = $_smarty_tpl->tpl_vars['list_value']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["multifor"]['first'] = $_smarty_tpl->tpl_vars['list_value']->first;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['multifor']['first']&&$_smarty_tpl->tpl_vars['list_value']->value) {?>
                <span class="listing-item__employment-type"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
            <?php }?>
        <?php } ?>
    </div>
    <div class="listing-item__desc visible-sm visible-xs">
        <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['JobDescription']);?>

    </div>
</article><?php }} ?>
