<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:39:14
         compiled from "template__system/admin_admin:C:\wamp64\www\AssessorList\templates\_system\admin\dashboard\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:636958c153fa1fe388-43253646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dec9efdc441734d904ddedd3ddfa343838b5e76' => 
    array (
      0 => 'template__system/admin_admin:C:\\wamp64\\www\\AssessorList\\templates\\_system\\admin\\dashboard\\index.tpl',
      1 => 1488781944,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '636958c153fa1fe388-43253646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'applicationsInfo' => 0,
    'i' => 0,
    'invoicesInfo' => 0,
    'paymentAmount' => 0,
    'listingsInfo' => 0,
    'groupsInfo' => 0,
    'jobAlertsInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c153fa2fe9f2_31428574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c153fa2fe9f2_31428574')) {function content_58c153fa2fe9f2_31428574($_smarty_tpl) {?><div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AssessorList<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<div class="stats page-title__buttons">
		<div class="btn-group">
			<button type="button" class="btn btn-default choose-period active" data-target="#today">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Today<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</button>
			<button type="button" class="btn btn-default choose-period" data-target="#this-week" href="#">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last 7 days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</button>
			<button type="button" class="btn btn-default choose-period" data-target="#this-month" href="#">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last 30 days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</button>
			<button type="button" class="btn btn-default choose-period" data-target="#total" href="#">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</button>
		</div>
	</div>
</div>

<div id="dashboard" class="dashboard">
	<div class="tab-contents" class="row">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['applicationsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div id="<?php if ($_smarty_tpl->tpl_vars['i']->value=='Today') {?>today<?php } elseif ($_smarty_tpl->tpl_vars['i']->value=='Last 7 days') {?>this-week<?php } elseif ($_smarty_tpl->tpl_vars['i']->value=='Last 30 days') {?>this-month<?php } elseif ($_smarty_tpl->tpl_vars['i']->value=='Total') {?>total<?php }?>" class="tab-pane fade in <?php if ($_smarty_tpl->tpl_vars['i']->value=='Today') {?>active<?php }?>">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<i class="fa fa-usd" aria-hidden="true"></i>
							<h2 class="m-0 counter">
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "paymentAmount", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['invoicesInfo']->value[$_smarty_tpl->tpl_vars['i']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['paymentAmount']->value),$_smarty_tpl);?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sales<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<h2 class="m-0 counter">
								<?php echo $_smarty_tpl->tpl_vars['listingsInfo']->value['Job']['periods'][$_smarty_tpl->tpl_vars['i']->value];?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vacancy Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<div class="icon-img">
								<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
employers-icon.svg" border="0" alt=""/>
							</div>
							<h2 class="m-0 counter">
								<?php echo $_smarty_tpl->tpl_vars['groupsInfo']->value['Employer'][$_smarty_tpl->tpl_vars['i']->value];?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Employer Profiles Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<i class="fa fa-user" aria-hidden="true"></i>
							<h2 class="m-0 counter">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['groupsInfo']->value['Job Seeker'][$_smarty_tpl->tpl_vars['i']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Seeker Profiles Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							<h2 class="m-0 counter">
								<?php echo $_smarty_tpl->tpl_vars['applicationsInfo']->value[$_smarty_tpl->tpl_vars['i']->value];?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Applications Sent<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="widget-panel widget-style-2 white-bg">
							<i class="ion-ios7-email"></i>
							<h2 class="m-0 counter">
								<?php echo $_smarty_tpl->tpl_vars['jobAlertsInfo']->value[$_smarty_tpl->tpl_vars['i']->value];?>

							</h2>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job Alerts Created<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.choose-period').click(function(e) {
				e.preventDefault();
				$('.choose-period.active').removeClass('active');

				var target = $(this).data('target');
				$('.tab-pane.active').removeClass('active');
				$(this).addClass('active');
				$(target).addClass('active');
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
