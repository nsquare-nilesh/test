<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 13:33:25
         compiled from "template_bootstrap_user:../field_types/input/file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42245307258b6804da1f2e0-40732712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532d1ba5f4c0cdec9d4b0b58536f5a613d51cd33' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/file.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '42245307258b6804da1f2e0-40732712',
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
    'is_classifieds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6804daade29_92333062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6804daade29_92333062')) {function content_58b6804daade29_92333062($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']) {?>
	
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<div class="alert alert-danger">
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='NOT_ACCEPTABLE_FILE_FORMAT') {?>
				<?php echo $_smarty_tpl->tpl_vars['fomr_field']->value['caption'];?>
: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File format is not supported<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='UPLOAD_ERR_INI_SIZE'||$_smarty_tpl->tpl_vars['key']->value=='MAX_FILE_SIZE_EXCEEDED') {?>
				<?php echo $_smarty_tpl->tpl_vars['fomr_field']->value['caption'];?>
: <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size shouldn't be larger than 5 MB.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

			<?php }?>
		</div>
	<?php } ?>

	<div id="file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['filesize']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['size_token']->value;?>
)
			| <a class="delete-file"
				 form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
				 listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
				 field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				 file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
				 data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>"
				 href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/classifieds/delete-uploaded-file/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<br/><br/>
		<?php }?>
	</div>

	<input type="file"
			field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			field_action="upload_file<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			field_target="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
			name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			class="autouploadField"
			id="input_file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>style="display:none;"<?php }?> />

<?php } else { ?>
	<div id="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form--move-left">
		<div class="errors"></div>
		<div id="file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['saved_file_name']) {?>
					<a class="link" href="?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;filename=<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['saved_file_name']);?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php } else { ?>
					<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
				| <a class="delete-file link"
					 form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
					 listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
					 field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
					 file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
					 data-is-classifieds="<?php if ($_smarty_tpl->tpl_vars['is_classifieds']->value) {?>true<?php } else { ?>false<?php }?>"
					 href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/classifieds/delete-uploaded-file/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		</div>

		<input type="file"
				field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				field_action="upload_file<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				field_target="file_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				listing_id="<?php if ($_smarty_tpl->tpl_vars['listing_id']->value) {?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?>"
				name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				class="form-control"
				id="input_file_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null) {?>style="display:none;"<?php }?> />
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

<?php }?>

<?php }} ?>
