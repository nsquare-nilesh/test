<?php /* Smarty version Smarty-3.1.19, created on 2017-03-03 13:55:06
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\users\featured_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2929058b7b9827edfd2-35911717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '104d33394653d805789712ee504cbbcdd4d3907f' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\users\\featured_profiles.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '2929058b7b9827edfd2-35911717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7b982875c49_08515119',
  'variables' => 
  array (
    'profiles' => 0,
    'GLOBALS' => 0,
    'profile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7b982875c49_08515119')) {function content_58b7b982875c49_08515119($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\AssessorList\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['profiles']->value) {?>
	<section class="main-sections main-sections__featured-companies">
		<div class="container container-fluid featured-companies">
			<h4 class="featured-companies__title text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Featured Companies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
			<ul class="featured-companies__slider featured-companies__slider__js">
				<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
					<li class="featured-company">
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['pretty_url'][0][0]->pretty_url($_smarty_tpl->tpl_vars['profile']->value['CompanyName']);?>
/" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
">
							<div class="panel panel-default featured-company__panel">
								<div class="panel-body featured-company__panel-body">
									<?php if ($_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url']) {?>
										<img class="featured-company__image" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['WebSite'];?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['profile']->value['CompanyName'],23);?>
"/>
									<?php } else { ?>
										<div class="company__no-image" title="<?php echo $_smarty_tpl->tpl_vars['profile']->value['CompanyName'];?>
"></div>
									<?php }?>
								</div>
								<div class="panel-footer featured-company__panel-footer">
									<div class="featured-companies__name">
										<span><?php echo $_smarty_tpl->tpl_vars['profile']->value['CompanyName'];?>
</span>
									</div>
									<div class="featured-companies__jobs">
										<?php $_smarty_tpl->tpl_vars["jobs_number"] = new Smarty_variable($_smarty_tpl->tpl_vars['profile']->value['countListings'], null, 0);?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$jobs_number job(s)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								</div>
							</div>
						</a>
					</li>
				<?php } ?>
			</ul>
			<span class="featured-companies__slider--arrows featured-companies__slider--prev"></span>
			<span class="featured-companies__slider--arrows featured-companies__slider--next"></span>
		</div>
	</section>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<script type="text/javascript">
			var oneSlide = {
				auto: true,
				infiniteLoop: true,
				minSlides: 1,
				maxSlides: 1,
				slideWidth: 306,
				moveSlides: 1,
				pager: false,
				useCSS: true,
				responsive: true,
				nextSelector: '.featured-companies__slider--next',
				prevSelector: '.featured-companies__slider--prev',
				nextText: '',
				prevText: ''
			};
			var twoSlides = {
				auto: true,
				infiniteLoop: true,
				minSlides: 1,
				maxSlides: 2,
				slideWidth: 306,
				moveSlides: 1,
				pager: false,
				useCSS: true,
				responsive: true,
				nextSelector: '.featured-companies__slider--next',
				prevSelector: '.featured-companies__slider--prev',
				nextText: '',
				prevText: ''
			};
			var threeSlides = {
				auto: true,
				infiniteLoop: true,
				minSlides: 1,
				maxSlides: 3,
				slideWidth: 306,
				moveSlides: 1,
				pager: false,
				useCSS: true,
				responsive: true,
				nextSelector: '.featured-companies__slider--next',
				prevSelector: '.featured-companies__slider--prev',
				nextText: '',
				prevText: ''
			};
			var slider;
			if ($(document).width() > 680 && $(document).width() <= 1200) {
				slider = $('.featured-companies__slider__js').bxSlider(twoSlides);
			}
			else if ($(document).width() <= 680) {
				slider = $('.featured-companies__slider__js').bxSlider(oneSlide);
			}
			else {
				slider = $('.featured-companies__slider__js').bxSlider(threeSlides);
			}
			$(window).on('resize orientationchange', function() {
				if ($(document).width() > 680 && $(document).width() <= 1200) {
					slider.destroySlider();
					slider.reloadSlider(twoSlides);
				}
				if($(document).width() <= 680) {
					slider.destroySlider();
					slider.reloadSlider(oneSlide);
				}
				if ($(document).width() > 1200){
					slider.destroySlider();
					slider.reloadSlider(threeSlides);
				}
			});
		</script>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
