<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:41:24
         compiled from "template__system/admin_admin:../field_types/input/picture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7743670258b6ba6cd23882-68755762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66a874f13045d24f511cd3477616834dc6947db' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/picture.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '7743670258b6ba6cd23882-68755762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'id' => 0,
    'user_info' => 0,
    'form_token' => 0,
    'listing_id' => 0,
    'listing' => 0,
    'is_classifieds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba6cd750b9_58962041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba6cd750b9_58962041')) {function content_58b6ba6cd750b9_58962041($_smarty_tpl) {?><div class="input-group input-group__file">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_name'];?>
" alt="" />
    <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <span class="input-group-btn">
        <?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
            <a href="#" class="btn btn-default btn-change btn-change__replace"><i class="fa fa-exchange" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
            <a href="#" class="btn btn-default btn-change btn-change__upload hidden"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
                <a class="delete_file btn btn--danger"
                   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
                   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
                   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
                   data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>">
                    <i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </a>
            <?php } else { ?>
                <a class="delete_file btn btn--danger"
                   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
                   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
                   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
                   data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>">
                    <i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </a>
            <?php }?>
        <?php } else { ?>
            <a href="#" class="btn btn-default btn-change btn-change__upload"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        <?php }?>
    </span>
</div>
<div id="file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_url'];?>
" alt="" border="0" />
</div>
<?php }} ?>
