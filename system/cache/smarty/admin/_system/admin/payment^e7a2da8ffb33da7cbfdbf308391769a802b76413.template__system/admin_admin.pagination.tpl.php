<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 18:46:28
         compiled from "template__system/admin_admin:../pagination/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614858c155ac442f12-69644550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a2da8ffb33da7cbfdbf308391769a802b76413' => 
    array (
      0 => 'template__system/admin_admin:../pagination/pagination.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '614858c155ac442f12-69644550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginationInfo' => 0,
    'id' => 0,
    'param' => 0,
    'numberOfElement' => 0,
    'page' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c155ac6146d8_42640238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c155ac6146d8_42640238')) {function content_58c155ac6146d8_42640238($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp64\\www\\AssessorList\\system\\ext\\Smarty\\libs\\plugins\\modifier.escape.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?><?php if (is_array($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams'])) {?><?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['param']->key;
?>&amp;<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
=<?php if ($_smarty_tpl->tpl_vars['param']->value['escape']) {?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['value'], ((string)$_smarty_tpl->tpl_vars['param']->value['escape']));?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['param']->value['value'];?>
<?php }?><?php } ?><?php } else { ?>&amp;<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="items-count"><strong><?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsCount'];?>
</strong> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['item'], ENT_QUOTES, 'UTF-8', true);?>
 found<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>

<div class="pagination__right">
	<div class="number-per-page">
		<select id="itemsPerPage" name="itemsPerPage" onchange="window.location = '?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;page=1<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>&amp;itemsPerPage=' + this.value;" class="per-page">
			<?php  $_smarty_tpl->tpl_vars['numberOfElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numberOfElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['numberOfElementsPageSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numberOfElement']->key => $_smarty_tpl->tpl_vars['numberOfElement']->value) {
$_smarty_tpl->tpl_vars['numberOfElement']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['numberOfElement']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage']==$_smarty_tpl->tpl_vars['numberOfElement']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['numberOfElement']->value;?>
</option>
			<?php } ?>
		</select>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>

	<?php if (count($_smarty_tpl->tpl_vars['paginationInfo']->value['pages'])!=1) {?>
		<ul class="pagination">
			<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']==1) {?>
				<li class="none">
					<a href="#">&nbsp;<i class="fa fa-angle-left"></i></a>
				</li>
			<?php } else { ?>
				<li>
					<a class="arrow-left"  href="?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']-1;?>
&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>">
						&nbsp;<i class="fa fa-angle-left"></i>
					</a>
				</li>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']) {?>
					<li class="active">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
					</li>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']&&$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']<$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']-3) {?> <li><span>...</span></li> <?php }?>
					<li><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>&amp;restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']>4) {?> <li><span>...</span></li> <?php }?>
				<?php }?>
			<?php } ?>


			<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']==$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']) {?>
				<li>
					<a href="#">&nbsp;<i class="fa fa-angle-right"></i></a>
				</li>
			<?php } else { ?>
				<li>
					<a class="arrow-right" href="?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']+1;?>
&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>">
						&nbsp;<i class="fa fa-angle-right"></i>
					</a>
				</li>
			<?php }?>
		</ul>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['layout']->value=='header') {?>
	<div id="actionWarning" style="display: none"></div>
<?php }?>
<?php }} ?>
