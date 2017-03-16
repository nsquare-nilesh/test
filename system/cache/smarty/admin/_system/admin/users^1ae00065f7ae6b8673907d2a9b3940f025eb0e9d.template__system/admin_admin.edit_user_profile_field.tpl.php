<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:45:37
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\users\edit_user_profile_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:782758bd0c992ebae0-60197423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae00065f7ae6b8673907d2a9b3940f025eb0e9d' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\users\\edit_user_profile_field.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '782758bd0c992ebae0-60197423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_sid' => 0,
    'user_group_info' => 0,
    'user_profile_field_info' => 0,
    'user_profile_field_sid' => 0,
    'form_fields' => 0,
    'field_name' => 0,
    'form_field' => 0,
    'field_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd0c9939eba9_26620695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd0c9939eba9_26620695')) {function content_58bd0c9939eba9_26620695($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/custom-fields/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Custom Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_profile_field_info']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Profile Field Info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="panel panel-default panel--max">
	<form id="fieldData" method="post" enctype="multipart/form-data" class="form-horizontal panel-body">
		<input type="hidden" id="action" name="action" value="apply">
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['user_profile_field_sid']->value;?>
">
		<input type="hidden" name="user_group_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
">
		<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
			<div class="form-group" id="tr_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='type'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='id'||($_smarty_tpl->tpl_vars['form_field']->value['id']=='second_width'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo')||($_smarty_tpl->tpl_vars['form_field']->value['id']=='second_height'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo')||($_smarty_tpl->tpl_vars['form_field']->value['id']=='width'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo')||($_smarty_tpl->tpl_vars['form_field']->value['id']=='height'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo')) {?>display: none;<?php }?>">
				<label class="control-label col-md-2" id="td_caption_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>&nbsp;<span class="required">*</span><?php }?>
				</label>
				<div class="col-md-7">
					<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='choiceLimit') {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
<br />
						<small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Set empty or 0 for unlimited selection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value=='display_as'&&($_smarty_tpl->tpl_vars['field_type']->value=='list'||$_smarty_tpl->tpl_vars['field_type']->value=='multilist')) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"list_empty.tpl"),$_smarty_tpl);?>

					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='width'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='height') {?>
							<div class="numerical-block">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

							</div>
						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

						<?php }?>
					<?php }?>
				</div>
			</div>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['field_type']->value=='list'||$_smarty_tpl->tpl_vars['field_type']->value=='multilist') {?>
			<div class="form-group">
				<div class="col-md-7 col-md-offset-2">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"users",'function'=>"edit_list",'field_sid'=>$_smarty_tpl->tpl_vars['user_profile_field_sid']->value),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<div class="form-group">
			<div class="col-md-7 col-md-offset-2">
				<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--primary"/>
			</div>
		</div>
	</form>
</div><?php }} ?>
