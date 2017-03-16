<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:40:41
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/display_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143676875458b6ba41eb5737-27877028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf0cbaea7b7498488e7f25f21a6b8a43f12126f' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/display_resume.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '143676875458b6ba41eb5737-27877028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
    'GLOBALS' => 0,
    'errors' => 0,
    'error_code' => 0,
    'url' => 0,
    'EmploymentType' => 0,
    'form_fields' => 0,
    'list_value' => 0,
    'referer' => 0,
    'contract_id' => 0,
    'checkouted' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba4207a473_89319763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba4207a473_89319763')) {function content_58b6ba4207a473_89319763($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['Title'];?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('keywords', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['keywords'][0][0]->_tpl_keywords(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php echo $_smarty_tpl->tpl_vars['listing']->value['Title'];?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['keywords'][0][0]->_tpl_keywords(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('description', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['listing']->value['Skills']),165);?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['description'][0][0]->_tpl_description(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php if ($_REQUEST['isBoughtNow']) {?>
	<div class="alert alert-bought-now text-center content-text">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have successfully posted your resume.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <br/>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/resume/" class="link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit your resume in "My Account" section<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<a href="#" class="alert__close"></a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<div>
		<?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_smarty_tpl->tpl_vars['error_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value) {
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
 $_smarty_tpl->tpl_vars['error_code']->value = $_smarty_tpl->tpl_vars['error_message']->key;
?>
			<p class="alert alert-danger">
				<?php if ($_smarty_tpl->tpl_vars['error_code']->value=='NO_SUCH_FILE') {?> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No such file found in the system<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
			</p>
		<?php } ?>
	</div>
<?php } else { ?>
	<div class="details-header">
		<div class="container">
			<div class="results text-left">
				<?php if ($_smarty_tpl->tpl_vars['url']->value=="/my-resume-details/".((string)$_smarty_tpl->tpl_vars['listing']->value['id'])."/") {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-<?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"
					   class="btn__back">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <script type="text/javascript">
                            if (window.history && window.history.pushState) {
                                window.history.pushState('forward', null, '');
                                $(window).on('popstate', function() {
                                    window.location.href = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-<?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
';
                                });
                            }
                        </script>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<a href="javascript:history.go(-1)"
					   class="btn__back">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				<?php }?>
			</div>
			<h1 class="details-header__title "><?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['FullName'];?>
</h1>
			<ul class="listing-item__info clearfix inline-block">
				<li class="listing-item__info--item listing-item__info--item-company">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>

				</li>
				<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value)) {?>
					<li class="listing-item__info--item listing-item__info--item-location">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['listing']->value);?>

					</li>
				<?php }?>
				<li class="listing-item__info--item listing-item__info--item-date">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['listing']->value['activation_date']);?>

				</li>
			</ul>
			<div class="job-type">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'EmploymentType','assign'=>'EmploymentType'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['EmploymentType']->value) {?>
					<span class="job-type__value"><?php echo $_smarty_tpl->tpl_vars['EmploymentType']->value;?>
</span>
				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'JobCategory','template'=>"multilist_job_category.tpl"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row details-body details-body__resume">
			<div class="sidebar profile col-xs-10 col-xs-offset-1 col-sm-offset-0">
				<div class="sidebar__content">
					<?php if ($_smarty_tpl->tpl_vars['listing']->value['Photo']['file_url']) {?>
						<div class="job-seeker__image">
							<div class="text-center profile__image">
								<img class="profile__img" src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['Photo']['file_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['FullName'], ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
						</div>
					<?php }?>
					<ul class="profile__info-list">
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['Phone']) {?>
							<li class="profile__info-list__item profile__info-list__item-phone">
								<a href="tel:<?php echo $_smarty_tpl->tpl_vars['listing']->value['Phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['Phone'];?>
</a>
							</li>
						<?php }?>
						<li class="profile__info-list__item profile__info-list__item-email">
							<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['username'];?>
</a>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['Resume']['file_url']) {?>
							<li class="profile__info-list__item profile__info-list__item-resume">
								<a href="?filename=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listing']->value['Resume']['saved_file_name']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Resume<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</li>
						<?php }?>
					</ul>
				</div>
				<?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>
					<div class="banner banner--right">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side');?>

					</div>
				<?php }?>
			</div>
			<div class="pull-left details-body__left">
				<?php if ($_smarty_tpl->tpl_vars['listing']->value['Skills']) {?>
					<h3 class="details-body__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_fields']->value['Skills']['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
					<div class="details-body__content content-text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'Skills'),$_smarty_tpl);?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listing']->value['WorkExperience']) {?>
					<h3 class="details-body__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_fields']->value['WorkExperience']['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
					<div class="details-body__content content-text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'WorkExperience'),$_smarty_tpl);?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listing']->value['Education']) {?>
					<h3 class="details-body__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_fields']->value['Education']['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
					<div class="details-body__content content-text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'Education'),$_smarty_tpl);?>
</div>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value) {
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
					<?php if (!$_smarty_tpl->tpl_vars['list_value']->value['is_reserved']) {?>
						<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['list_value']->value['id']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_smarty_tpl->tpl_vars['list_value']->value['id']!='Location'&&$_tmp1) {?>
							<h3 class="details-body__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_value']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
							<div class="details-body__content content-text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>$_smarty_tpl->tpl_vars['list_value']->value['id']),$_smarty_tpl);?>
</div>
						<?php }?>
					<?php }?>
				<?php } ?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/resume-preview/') {?>
				<div class="form-group job-preview__btns col-xs-12">
					<form action="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
" method="post">
						<input type="hidden" name="from-preview" value="1" />
						<input type="submit" name="edit_temp_listing" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" id="listing-preview" />
						<?php if ($_smarty_tpl->tpl_vars['contract_id']->value==0&&!$_smarty_tpl->tpl_vars['checkouted']->value) {?>
							<input type="hidden" name="proceed_to_checkout" />
							<input type="submit" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" />
						<?php } else { ?>
							<input type="submit" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" />
						<?php }?>
					</form>
				</div>
			<?php }?>
		</div>
	</div>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		$('.alert__close').on('click', function(e) {
			e.preventDefault();
			$(this).closest('.alert').hide();
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
