<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/picture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49259462858b6804d96cda9-82654503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c27477dfdab249f2ba0ec274856f43cde425ba' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/picture.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '49259462858b6804d96cda9-82654503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'width' => 0,
    'height' => 0,
    'GLOBALS' => 0,
    'form_token' => 0,
    'listing_id' => 0,
    'listing' => 0,
    'is_classifieds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804d9d2089_61039511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804d9d2089_61039511')) {function content_58b6804d9d2089_61039511($_smarty_tpl) {?><div class="profile-logo">
	<div id="file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" border="0" width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" />&nbsp;
			<a class="delete-file" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
			   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
			   data-type="picture"
			   data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>"
				><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><br/><br/>
			<?php if ($_smarty_tpl->tpl_vars['value']->value['url']) {?>
				<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php }?>
		<?php }?>
	</div>
	<input id="input_file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control" />
</div>
<?php }} ?>
