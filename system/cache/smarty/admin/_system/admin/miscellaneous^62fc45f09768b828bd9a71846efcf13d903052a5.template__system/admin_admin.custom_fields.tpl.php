<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 16:08:25
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\miscellaneous\custom_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1011458bd06ab2f5439-11890451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62fc45f09768b828bd9a71846efcf13d903052a5' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\miscellaneous\\custom_fields.tpl',
      1 => 1488883104,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1011458bd06ab2f5439-11890451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd06ab33d737_29537352',
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd06ab33d737_29537352')) {function content_58bd06ab33d737_29537352($_smarty_tpl) {?><div class="page-title">
    <h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Custom Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>

<div class="panel panel-default panel--wide panel__custom-fields">
    <div class="form-group">
        <a class="btn btn-default btn__custom-fields" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/posting-pages/job/edit/11">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
    </div>
    <div class="form-group">
        <a class="btn btn-default btn__custom-fields" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/posting-pages/resume/edit/19">
            <i class="fa fa-user" aria-hidden="true"></i>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resume Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
    </div>
    <div class="form-group">
        <a class="btn btn-default btn__custom-fields" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-profile-fields/?user_group_sid=41">
            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
employers-icon-gray.svg" alt="">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Employer Profile Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
    </div>
    <div class="form-group">
        <a class="btn btn-default btn__custom-fields" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-profile-fields/?user_group_sid=36">
            <i class="fa fa-user" aria-hidden="true"></i>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Seeker Profile Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
    </div>
	 <div class="form-group">
        <a class="btn btn-default btn__custom-fields" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-profile-fields/?user_group_sid=52">
            <i class="fa fa-user" aria-hidden="true"></i>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Institute/College Profile Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
    </div>
</div><?php }} ?>
