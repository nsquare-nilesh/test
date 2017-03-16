<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 17:30:41
         compiled from "template__system/admin_admin:E:\xampp\htdocs\smartjob\templates\_system\admin\I18N\manage_phrases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346058b566691f1667-24245398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1fb5c39a669e8a96ccea8d33fcb6dcd666c0326' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\smartjob\\templates\\_system\\admin\\I18N\\manage_phrases.tpl',
      1 => 1486703692,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1346058b566691f1667-24245398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'languages' => 0,
    'language' => 0,
    'settings' => 0,
    'criteria' => 0,
    'domains' => 0,
    'domain' => 0,
    'errors' => 0,
    'chosen_language_caption' => 0,
    'found_phrases' => 0,
    'phrase' => 0,
    'chosen_language_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b566693f7216_30837365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b566693f7216_30837365')) {function content_58b566693f7216_30837365($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'E:\\xampp\\htdocs\\smartjob\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select[name="i18n_default_language"]').change(function() {
				$('.default-language-form').submit();
			});

			$('.save-phrases').click(function() {
				$('.messages *').hide();
				var phrases = [];
				$('.translated input').each(function() {
					phrases.push(
						{
							'name': $(this).attr('name'),
							'value': $(this).val()
						}
					);
				});
				$.post('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-phrase/', {
						phrases: phrases
					}, function(data) {
						if (data != 'ok') {
							$('.phrases-update-error').show();
						} else {
							$('.phrases-update-success').show();
						}
					}
				);
			});
		});
	</script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="page-title">
	<h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<div class="page-title__buttons">
		<button type="button" class="btn btn--primary save-phrases"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</button>
	</div>
</div>
<div class="panel panel-default panel--max">
	<div class="form-horizontal edit-language">
		<div class="form-group">
			<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			<div class="col-md-7">
				<form class="default-language-form" action="" method="post">
					<select name="i18n_default_language">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['i18n_default_language']==$_smarty_tpl->tpl_vars['language']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
						<?php } ?>
					</select>
				</form>
			</div>
		</div>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-phrases/" class="panel-body">
			<input type="hidden" name="curr_lang" id="curr_lang" value="<?php echo $_smarty_tpl->tpl_vars['criteria']->value['language'];?>
" />
			<div class="form-group">
				<label class="col-md-2 control-label">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter Phrases<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
				<div class="col-md-7">
					<input type="hidden" name="action" value="search_phrases" />
					<input type="hidden" name="page" value="1" />
					<div class="input-group">
						<input type="text" name="phrase_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value['phrase_id'], ENT_QUOTES, 'UTF-8', true);?>
" />
						<span class="input-group-btn"><input type="submit" name="show" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="btn btn--primary" /></span>
					</div>
				</div>
			</div>
			<div class="form-group" style="display: none;">
				<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Domain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				<div class="col-md-7">
					<select name="domain">
						<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['criteria']->value['domain']==$_smarty_tpl->tpl_vars['domain']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group" style="display: none;">
				<label class="col-md-2 control-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Language<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
				<div class="col-md-7">
					<select name="language">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"
									<?php if ($_smarty_tpl->tpl_vars['criteria']->value['language']==$_smarty_tpl->tpl_vars['language']->value['id']) {?>
								selected="selected"
									<?php $_smarty_tpl->tpl_vars['chosen_language_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars['chosen_language_caption'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['caption'], null, 0);?>
									<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="messages">
	<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

	<?php }?>
	<p class="phrases-update-success message" style="display: none;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your changes have been successfully saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<p class="phrases-update-error error" style="display: none;">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unable to update phrases<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</p>
</div>

<div class="panel panel-default panel--max manage-phrases clearfix">
	<div class="table__pagination table__pagination--header">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

	</div>
	<div class="table-responsive">
		<table width="100%" class="table table-striped table__languages">
			<thead>
				<tr>
					<th width="50%" class="text-left"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Phrase ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th width="50%"><?php echo $_smarty_tpl->tpl_vars['chosen_language_caption']->value;?>
</th>
				</tr>
			</thead>
			<?php if (!empty($_smarty_tpl->tpl_vars['found_phrases']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['phrase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['phrase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_phrases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['phrase']->key => $_smarty_tpl->tpl_vars['phrase']->value) {
$_smarty_tpl->tpl_vars['phrase']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['phrase']->value['domain']!=$_smarty_tpl->tpl_vars['domain']->value) {?>
						<tr>
							<th colspan="2" class="text-left"><?php echo $_smarty_tpl->tpl_vars['phrase']->value['domain'];?>
</th>
						</tr>
					<?php }?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
						<td class="text-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="translated">
							<input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['translations'][$_smarty_tpl->tpl_vars['chosen_language_id']->value], ENT_QUOTES, 'UTF-8', true);?>
" />
						</td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['domain'] = new Smarty_variable($_smarty_tpl->tpl_vars['phrase']->value['domain'], null, 0);?>
				<?php } ?>
			<?php }?>
		</table>
	</div>
	<div class="table__pagination table__pagination--footer">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

	</div>
</div><?php }} ?>
