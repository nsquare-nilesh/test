<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 12:20:09
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\template_manager\manage_email_templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:481358bd06a1920b18-41130803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98511fff6bb298e8a2f73a7d30cf45b5c165c245' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\template_manager\\manage_email_templates.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '481358bd06a1920b18-41130803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'etGroups' => 0,
    'templates' => 0,
    'counter' => 0,
    'template' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd06a199a379_18359602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd06a199a379_18359602')) {function content_58bd06a199a379_18359602($_smarty_tpl) {?><div class="page-title">
	<h1 class="title"><?php if ($_smarty_tpl->tpl_vars['etGroups']->value[$_smarty_tpl->tpl_vars['group']->value]) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['etGroups']->value[$_smarty_tpl->tpl_vars['group']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email Templates<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></h1>
</div>
<div class="panel panel-default panel--wide">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table__email-templates">
				<thead>
					<tr>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Template Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th class="actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars["template"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["template"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["template"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["template"]->key => $_smarty_tpl->tpl_vars["template"]->value) {
$_smarty_tpl->tpl_vars["template"]->_loop = true;
 $_smarty_tpl->tpl_vars["template"]->index++;
?>
						<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
						<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['template']->index)) {?>oddrow<?php } else { ?>evenrow<?php }?>">
							<td style="width: 100%;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td align=center>
								<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/<?php echo $_smarty_tpl->tpl_vars['template']->value['sid'];?>
/" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--secondary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div><?php }} ?>
