<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:43:30
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167653990158b6749ab1d451-49507267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4207f7a089dbef70348e444bdb0a9cc9d066c10' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/users/login.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '167653990158b6749ab1d451-49507267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxRelocate' => 0,
    'errors' => 0,
    'GLOBALS' => 0,
    'return_url' => 0,
    'proceedToPosting' => 0,
    'productSID' => 0,
    'listingTypeID' => 0,
    'skip_registration_return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6749abb6ca6_15634230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6749abb6ca6_15634230')) {function content_58b6749abb6ca6_15634230($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value) {?>
	<script type="text/javascript">
		function loginSubmit() {
			var options = {
				target: "#apply-modal .modal-body",
				url:  $("#login-form").attr("action"),
				success: function(response) {
					if ($('<div />').append(response).find('.alert-danger').length == 0) {
						$('#apply-modal .modal-title').html($('#apply-modal .modal-title').data('title'));
						$.ajax(top.location.href, {
							success: function(data) {
								$('.nav.navbar-nav.navbar-right').replaceWith(
										$('<div />').append(data).find('.nav.navbar-nav.navbar-right')
								);
							},
							crossDomain: true
						});
					}
				}
			};
			$("#login-form").ajaxSubmit(options);
			return false;
		}

		$(document).ready(function() {
			var title = $('#apply-modal .modal-title');
			if (!title.data('title')) {
				title.data('title', title.html());
			}
			title.html($('.title__primary').html());
			$('.title__primary').remove();
		});
	</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("../users/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>


<form class="form form__modal" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/login/" method="post" id="login-form" <?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value) {?> onsubmit="return loginSubmit()" <?php }?> novalidate>
	<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" />
	<input type="hidden" name="action" value="login" />
	<?php if ($_smarty_tpl->tpl_vars['proceedToPosting']->value) {?><input type="hidden" name="proceed_to_posting" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['proceedToPosting']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['productSID']->value) {?><input type="hidden" name="productSID" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productSID']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['listingTypeID']->value) {?><input type="hidden" name="listing_type_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value) {?><input type="hidden" name="ajaxRelocate" value="1" /><?php }?>
	<h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"social",'function'=>"social_plugins"),$_smarty_tpl);?>

	<div class="form-group">
		<input type="email" name="username" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
	</div>
	<div class="form-group text-center">
		<input type="checkbox" name="keep" id="keep"/>
		<label for="keep" class="form-label checkbox-label"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keep me signed in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
	</div>
	<div class="form-group form-group__btns text-center">
		<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" />
	</div>
	<div class="form-group login-help text-center">
		<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/password-recovery/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forgot Your Password?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<div>
			<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/registration/?user_group_id=Employer<?php if ($_smarty_tpl->tpl_vars['return_url']->value&&!$_smarty_tpl->tpl_vars['skip_registration_return']->value) {?>&return_url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['return_url']->value);?>
<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Employer Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;|&nbsp;
			<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/registration/?user_group_id=JobSeeker<?php if ($_smarty_tpl->tpl_vars['return_url']->value&&!$_smarty_tpl->tpl_vars['skip_registration_return']->value) {?>&return_url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['return_url']->value);?>
<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Seeker Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		</div>
	</div>
</form>
<?php }} ?>
