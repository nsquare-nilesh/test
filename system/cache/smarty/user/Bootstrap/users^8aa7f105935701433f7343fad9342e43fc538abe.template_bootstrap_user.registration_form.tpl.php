<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 18:08:47
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\users\registration_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2785758b9350ecd0a22-77614682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aa7f105935701433f7343fad9342e43fc538abe' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\users\\registration_form.tpl',
      1 => 1488976505,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2785758b9350ecd0a22-77614682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b9350ed97815_09857273',
  'variables' => 
  array (
    'user_group_info' => 0,
    'GLOBALS' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'METADATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b9350ed97815_09857273')) {function content_58b9350ed97815_09857273($_smarty_tpl) {?><h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
 Profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"social",'function'=>"social_plugins"),$_smarty_tpl);?>

<div class="text-center form-group cloud">
	<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I already have a Job Seeker account.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I already have an Employer account.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='School') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I already have an Institute account.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/login/<?php if ($_REQUEST['return_url']) {?>?return_url=<?php echo rawurlencode($_REQUEST['return_url']);?>
<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign me in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form class="form" method="post" action="" enctype="multipart/form-data" id="registr-form">
	<input type="hidden" name="action" value="register" />
	<input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>

	<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value) {
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=='password'&&$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker') {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='Location') {?>
		<?php } elseif (($_smarty_tpl->tpl_vars['form_field']->value['id']=='username'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='FullName'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='CompanyName'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='WebSite'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='Phone'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='GooglePlace')&&$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer') {?>
			<div class="form-group form-group__half <?php echo mb_strtolower($_smarty_tpl->tpl_vars['form_field']->value['id'], 'UTF-8');?>
">
					<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['id']=='password'&&($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='School')) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"password_in_row.tpl"),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['form_field']->value['type']=='boolean') {?>
			<div class="form-group <?php echo mb_strtolower($_smarty_tpl->tpl_vars['form_field']->value['id'], 'UTF-8');?>
">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

				<label class="form-label inline" for="<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
			</div>
		<?php } else { ?>
			<div class="form-group <?php echo mb_strtolower($_smarty_tpl->tpl_vars['form_field']->value['id'], 'UTF-8');?>
">
				<label class="form-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']) {?>*<?php }?></label>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

			</div>
		<?php }?>
	<?php } ?>
	<div class="form-group">
		<label class="form-label hidden-xs-480"></label>
		<div class="form--move-left">
			<div class="inline-block checkbox-field">
				<input type="checkbox" name="terms" checked="checked" id="terms" />
			</div>
			<span class="form-label inline">
				<a class="link" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/terms-of-use/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I agree to the terms of use<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 *</a>
			</span>
		</div>
	</div>
	<div class="form-group form-group__btns text-center">
		<input type="hidden" name="user_group_id" value="<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
" />
		<input type="submit" class="btn btn__orange btn__bold" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Register<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
	</div>
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript" language="JavaScript">
		function checkField( obj, name ) {
			if (obj.val() != "") {
				var options = {
					data: { isajaxrequest: 'true', type: name },
					success: showResponse
				};
				$("#registr-form").ajaxSubmit( options );
			}
			function showResponse(responseText, statusText, xhr, $form) {
				var mes = "";
				switch(responseText) {
					case 'NOT_VALID_EMAIL_FORMAT':
						obj.closest('.form-group').find('.form-label').addClass('form-label__error').text('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please enter valid email address<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
						break;
					case 'NOT_UNIQUE_VALUE':
						obj.closest('.form-group').find('.form-label').addClass('form-label__error').text('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This email address is already in use.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
						break;
					case '1':
						mes = "";
						if (name == 'username') {
							obj.closest('.form-group').find('.form-label').removeClass('form-label__error').text('Email <?php if ($_smarty_tpl->tpl_vars['form_fields']->value["username"]['is_required']) {?>*<?php }?>');
						}
						else {
							obj.closest('.form-group').find('.form-label').removeClass('form-label__error').text(name + ' <?php if ($_smarty_tpl->tpl_vars['form_fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['is_required']) {?>*<?php }?>');
						}
						break;
				}
				$("#am_" + name).text(mes);
			}
		};
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
