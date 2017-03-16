<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:40:42
         compiled from "template_bootstrap_user:../field_types/display/multilist_job_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106934297958b6ba420aca95-27868869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9d35fcccf4597277f7b88be00b3edc1dbcbc1a' => 
    array (
      0 => 'template_bootstrap_user:../field_types/display/multilist_job_category.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '106934297958b6ba420aca95-27868869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'list_value' => 0,
    'display_list_values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba420bf112_88448024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba420bf112_88448024')) {function content_58b6ba420bf112_88448024($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
        <span class="job-type__value">
            <?php if ($_smarty_tpl->tpl_vars['display_list_values']->value[$_smarty_tpl->tpl_vars['list_value']->value]) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['display_list_values']->value[$_smarty_tpl->tpl_vars['list_value']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } else { ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>
        </span>
    <?php } ?>
<?php }?>
<?php }} ?>
