<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 13:00:43
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\classifieds\input_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1093158c104a33de563-03902108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79ee2812abc1cdbb4ea4de83ec6c1236a9951838' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\classifieds\\input_form.tpl',
      1 => 1488541453,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1093158c104a33de563-03902108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingTypeID' => 0,
    'nextPage' => 0,
    'prevPage' => 0,
    'pages' => 0,
    'page' => 0,
    'pageSID' => 0,
    'currentPage' => 0,
    'GLOBALS' => 0,
    'listingSID' => 0,
    'form_fields' => 0,
    'productSID' => 0,
    'contract_id' => 0,
    'listing_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c104a34bd8a0_95344684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c104a34bd8a0_95344684')) {function content_58c104a34bd8a0_95344684($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post a <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['nextPage']->value||$_smarty_tpl->tpl_vars['prevPage']->value) {?>
	<div class="bread-crumb">
		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['page']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->iteration++;
 $_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['page_block']['last'] = $_smarty_tpl->tpl_vars['page']->last;
?>
			<div class="input-form-bc"><?php if ($_smarty_tpl->tpl_vars['page']->value['sid']==$_smarty_tpl->tpl_vars['pageSID']->value) {?><b>&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['page']->value['order']<=$_smarty_tpl->tpl_vars['currentPage']->value['order']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['listingSID']->value;?>
">&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php } else { ?>&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['page_block']['last']) {?><?php }?>&nbsp;</div>
		<?php } ?>
	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['listingTypeID']->value=='Job') {?>
	<h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post a Job<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php } else { ?>
	<h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create New CV<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<?php }?>

<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['description'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['page_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['listingSID']->value;?>
"
	  enctype="multipart/form-data" <?php if ($_smarty_tpl->tpl_vars['form_fields']->value['ApplicationSettings']) {?>onsubmit="return validateForm('add-listing-form');"<?php }?>
	  id="add-listing-form" class="form">
	<input type="hidden" name="productSID" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productSID']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="contract_id" value="<?php echo $_smarty_tpl->tpl_vars['contract_id']->value;?>
" />
	<input type="hidden" name="listing_type_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<input type="hidden" id="listing_id" name="listing_id" value="<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
" />
	<?php if (($_smarty_tpl->tpl_vars['contract_id']->value==0)) {?><input type="hidden" name="proceed_to_posting" value="done" /><?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>

	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("input_form_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="form-group form-group__btns text-center">
			<input type="hidden" name="action_add" id="hidden_action_add" value=""/>
			<input type="submit" name="preview_listing" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" id="listingPreview"/>
		</div>
	</div>
</form><?php }} ?>
