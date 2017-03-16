<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 17:21:49
         compiled from "template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/listing_product_choice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212774854258b807553b84b5-10212644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0929b37ff0121ea70c4704169884a1c6944a811c' => 
    array (
      0 => 'template_bootstrap_user:/home/wwwmobintia/public_html/smartjob/templates/Bootstrap/classifieds/listing_product_choice.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '212774854258b807553b84b5-10212644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingTypeID' => 0,
    'products_info' => 0,
    'contract_id' => 0,
    'product' => 0,
    'listing_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b807554373e6_38528565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b807554373e6_38528565')) {function content_58b807554373e6_38528565($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post a <?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1 class="title__primary title__primary-small title__centered title__bordered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select a Product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<form id="listing-product-choice-form" method="post" action="">
	<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["contract_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["contract_id"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
		<p>
			<input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['contract_id']->value;?>
" name="contract_id" id="product-<?php echo $_smarty_tpl->tpl_vars['contract_id']->value;?>
" />
			<label for="product-<?php echo $_smarty_tpl->tpl_vars['contract_id']->value;?>
"><span class="strong"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></label>
		</p>
	<?php } ?>
	<input type="hidden" name="listing_id" value="<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
" />
	<input type="hidden" name="listing_type_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listingTypeID']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<div id="listing-product-choice-message"></div>
	<div class="form-group form-group__btns">
		<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__orange btn__bold" />
	</div>
</form>
<?php }} ?>
