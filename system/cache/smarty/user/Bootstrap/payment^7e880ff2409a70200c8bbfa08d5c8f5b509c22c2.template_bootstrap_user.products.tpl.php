<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 12:56:48
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\payment\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315458c103b8a41e64-77209477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e880ff2409a70200c8bbfa08d5c8f5b509c22c2' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\payment\\products.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '1315458c103b8a41e64-77209477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'availableProducts' => 0,
    'permission' => 0,
    'GLOBALS' => 0,
    'product' => 0,
    'listing_id' => 0,
    'productPrice' => 0,
    'wrongGroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c103b8b280e2_48378770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c103b8b280e2_48378770')) {function content_58c103b8b280e2_48378770($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value=='PRODUCT_IS_ONLY_ONCE_AVAILABLE') {?>
        <div class="alert alert-danger"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You cannot subscribe for a Trial Product again because you have already subscribed for it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
    <?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['availableProducts']->value) {?>
    <h1 class="title__primary title__primary-small title__centered title__margin">
        <?php if ($_smarty_tpl->tpl_vars['permission']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select Product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pricing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </h1>
    <div class="row product-items-wrapper <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['banner'][0][0]->banner('banner_right_side')) {?>with-banner<?php }?>">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['availableProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
            <?php $_smarty_tpl->tpl_vars["wrongGroup"] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']&&$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['user_group_sid']!=$_smarty_tpl->tpl_vars['product']->value['user_group_sid'], null, 0);?>
            <div class="well product-item">
                <div class="product-item__content">
                    <h3 class="product-item__title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
                    <div class="product-item__description content-text">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['detailed_description'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['listing_id']->value&&($_smarty_tpl->tpl_vars['permission']->value=='post_job'||$_smarty_tpl->tpl_vars['permission']->value=='post_resume')) {?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['listing_type_id'];?>
" class="form">
                        <input type="hidden" name="productSID" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" />
                        <input type="hidden" name="listing_type_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['listing_type_id'];?>
" />
                        <div class="form-group">
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "productPrice", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <div class="product-item__price">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['productPrice']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['recurring']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
per <?php echo $_smarty_tpl->tpl_vars['product']->value['billing_cycle'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="proceed_to_posting" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post a <?php echo $_smarty_tpl->tpl_vars['product']->value['listing_type_id'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__blue"  <?php if ($_smarty_tpl->tpl_vars['wrongGroup']->value) {?>disabled<?php }?> />
                        </div>
                    </form>
                <?php } else { ?>
                    <form method="post" action="" class="form">
                        <input type="hidden" name="action" value="view_product_detail" />
                        <input type="hidden" name="event" value="add_product" />
                        <input type="hidden" name="product_sid" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" />
                        <input type="hidden" name="listing_id" value="<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
" />
                        <div class="form-group">
                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "productPrice", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <div class="product-item__price">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['productPrice']->value),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['recurring']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
per <?php echo $_smarty_tpl->tpl_vars['product']->value['billing_cycle'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Buy<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn__blue" <?php if ($_smarty_tpl->tpl_vars['wrongGroup']->value) {?>disabled<?php }?> />
                        </div>
                    </form>
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="alert alert-warning">
        <?php if ($_smarty_tpl->tpl_vars['permission']->value=='post_job') {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry. You don't have permissions to post jobs.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['permission']->value=='post_resume') {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry. You don't have permissions to post resume.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['permission']->value=='resume_access') {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry. You don't have permissions to search resumes.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sorry. There are no are no products available.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
