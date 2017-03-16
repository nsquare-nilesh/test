<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:41:24
         compiled from "template__system/admin_admin:../field_types/input/file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43614431958b6ba6cde2459-35025835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80147547fd7c78c669330aefce998e351b56b6a9' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/file.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '43614431958b6ba6cde2459-35025835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'fomr_field' => 0,
    'id' => 0,
    'value' => 0,
    'filesize' => 0,
    'size_token' => 0,
    'form_token' => 0,
    'listing_id' => 0,
    'listing' => 0,
    'user_info' => 0,
    'is_classifieds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba6ce6f3f7_58542223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba6ce6f3f7_58542223')) {function content_58b6ba6ce6f3f7_58542223($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']) {?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='NOT_ACCEPTABLE_FILE_FORMAT') {?>
			<p class="error"><?php echo $_smarty_tpl->tpl_vars['fomr_field']->value['caption'];?>
: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File format is not supported<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='UPLOAD_ERR_INI_SIZE'||$_smarty_tpl->tpl_vars['key']->value=='MAX_FILE_SIZE_EXCEEDED') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size shouldn't be larger than 5 MB.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p class="error"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</p>
		<?php }?>
	<?php } ?>
	<div id="file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['filesize']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['size_token']->value;?>
)
			| <a class="delete_file"
				 form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
				 listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
				 field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				 file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
		<?php }?>
	</div>

	<input type="file"
		   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_action="upload_file"
		   field_target="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
		   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   id="input_file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   <?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>style="display:none;"<?php }?> />
<?php } else { ?>
	<div class="input-group input-group__file" id="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div class="errors"></div>
		<?php if ($_smarty_tpl->tpl_vars['value']->value['saved_file_name']) {?>
			<a class="form-control" href="?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;filename=<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['saved_file_name']);?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php } else { ?>
			<a class="form-control" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_url'];?>
" style="pointer-events: none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php }?>

		<input type="file"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   field_action="upload_file"
			   field_target="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
			   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   id="input_file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
		<span class="input-group-btn">
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
				<a href="#" class="btn btn-default btn-change btn-change__replace btn-change__replace-file"><i class="fa fa-exchange" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<a href="#" class="btn btn-default btn-change btn-change__upload btn-change__replace-file hidden"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
					<a class="delete_file btn btn--danger deletebutton-file"
					   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
					   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
					   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
					   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
					   data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>">
						<i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				<?php } else { ?>
					<a class="delete_file btn btn--danger deletebutton-file"
					   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
					   listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
					   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
					   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
					   data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>">
						<i class="fa fa-trash-o" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</a>
				<?php }?>
			<?php } else { ?>
				<a href="#" class="btn btn-default btn-change btn-change__upload btn-change__replace-file"><i class="fa fa-upload" aria-hidden="true"></i><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		</span>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<script type="text/javascript">
			// check temporary uploaded data of field
			$(function() {
				getFileFieldData('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>', '<?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']) {?><?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
<?php }?>', '<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
');
			});
		</script>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?><?php }} ?>
