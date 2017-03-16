<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:45:48
         compiled from "template__system/admin_admin:../field_types/input/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184155429858b67524642065-93426181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba20a348f522c53f3ef8d6a4b13515cf0c06587c' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/list.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '184155429858b67524642065-93426181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'parentID' => 0,
    'list_values' => 0,
    'enabled' => 0,
    'disable' => 0,
    'listingFieldInfo' => 0,
    'userFieldInfo' => 0,
    'caption' => 0,
    'list_value' => 0,
    'value' => 0,
    'is_required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b675246b65c2_58803024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b675246b65c2_58803024')) {function content_58b675246b65c2_58803024($_smarty_tpl) {?><select class="searchList <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" <?php if (($_smarty_tpl->tpl_vars['parentID']->value&&!$_smarty_tpl->tpl_vars['list_values']->value&&!$_smarty_tpl->tpl_vars['enabled']->value)||$_smarty_tpl->tpl_vars['disable']->value) {?> disabled="disabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&$_smarty_tpl->tpl_vars['id']->value=="Country") {?> onchange = "get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(this.value)" <?php }?> >
	<?php if ($_smarty_tpl->tpl_vars['listingFieldInfo']->value['parent_sid']&&($_smarty_tpl->tpl_vars['listingFieldInfo']->value['id']=='Country'||$_smarty_tpl->tpl_vars['listingFieldInfo']->value['id']=='State')&&$_smarty_tpl->tpl_vars['id']->value=='display_as') {?>
	<?php } elseif ($_smarty_tpl->tpl_vars['userFieldInfo']->value['parent_sid']&&($_smarty_tpl->tpl_vars['userFieldInfo']->value['id']=='Country'||$_smarty_tpl->tpl_vars['userFieldInfo']->value['id']=='State')&&$_smarty_tpl->tpl_vars['id']->value=='display_as') {?>
	<?php } else { ?>
		<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['list_value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
 $_smarty_tpl->tpl_vars['list_value']->index++;
 $_smarty_tpl->tpl_vars['list_value']->first = $_smarty_tpl->tpl_vars['list_value']->index === 0;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value']->value||(!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['list_value']->first&&!$_smarty_tpl->tpl_vars['is_required']->value)) {?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select>
<?php }} ?>
