<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 14:07:52
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/user_pages/edit_user_pages_add_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169062429458b7d9e0e83fa2-63687088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c3a6a594fbf7f23da4bb0936e9208a3d29d5747' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/user_pages/edit_user_pages_add_form.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '169062429458b7d9e0e83fa2-63687088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_NEW' => 0,
    'GLOBALS' => 0,
    'user_page' => 0,
    'ERRORS' => 0,
    'ERROR' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7d9e10286a9_71584771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d9e10286a9_71584771')) {function content_58b7d9e10286a9_71584771($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['IS_NEW']->value==1) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-pages/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add a New Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="page-title">
		<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add a New Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	</div>
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-pages/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> / <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="page-title">
		<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
		<div class="page-title__buttons">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/..<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_page']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"  class="btn--bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		</div>
	</div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['ERROR_DATA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ERROR_DATA']->_loop = false;
 $_smarty_tpl->tpl_vars['ERROR'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ERRORS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ERROR_DATA']->key => $_smarty_tpl->tpl_vars['ERROR_DATA']->value) {
$_smarty_tpl->tpl_vars['ERROR_DATA']->_loop = true;
 $_smarty_tpl->tpl_vars['ERROR']->value = $_smarty_tpl->tpl_vars['ERROR_DATA']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='URI_NOT_SPECIFIED') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page URL is not specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='ADD_ERROR') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cannot add new Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='CHANGE_ERROR') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cannot change data of the Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='PAGE_EXISTS') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page with such URI is already exist<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='DELETE_PAGE') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page URL is not defined<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='PAGE_ALREADY_EXISTS') {?><p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page with such url already exists<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
<?php } ?>

<div class="panel panel-default panel--max">
	<form name="form1" method="post" class="panel-body form-horizontal">
		<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
		<input type="hidden" id="submit" name="submit" value="apply_page" />
		<input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['user_page']->value['ID'];?>
" />
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			<div class="col-md-7"><input type="text" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			<div class="col-md-7">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['WYSIWYGEditor'][0][0]->WYSIWYGEditor(array('name'=>'content','class'=>'inputText','width'=>"100%",'height'=>"150",'type'=>'ckeditor','value'=>$_smarty_tpl->tpl_vars['user_page']->value['content'],'conf'=>"Admin"),$_smarty_tpl);?>

			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span class="required">*</span></label>
			<div class="col-md-7">
				<div class="input-group">
					<span class="input-group-addon hidden-xs"><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['custom_domain_url'];?>
</span>
					<input type="text" name="uri" value="<?php if (!$_smarty_tpl->tpl_vars['user_page']->value['ID']&&!$_smarty_tpl->tpl_vars['user_page']->value['uri']) {?>/<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_page']->value['uri'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			<div class="col-md-7"><textarea name="description" cols="55" rows="4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_page']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			<div class="col-md-7"><input name="keywords" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_page']->value['keywords'], ENT_QUOTES, 'UTF-8', true);?>
"></div>
		</div>
		<div class="form-group">
			<div class="col-md-7 col-md-offset-2">
				<input type="submit" id="apply" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--primary" />
			</div>
		</div>
	</form>
</div><?php }} ?>
