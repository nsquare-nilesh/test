<?php /* Smarty version Smarty-3.1.19, created on 2017-03-06 17:52:30
         compiled from "template__system/admin_admin:E:\xampp\htdocs\AssessorList\templates\_system\admin\miscellaneous\admins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713058bd5486d44111-68510013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b060b8a2e30de741f929870ca38553250feb7d55' => 
    array (
      0 => 'template__system/admin_admin:E:\\xampp\\htdocs\\AssessorList\\templates\\_system\\admin\\miscellaneous\\admins.tpl',
      1 => 1488271464,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1713058bd5486d44111-68510013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'admins' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bd5486dd2013_79743385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd5486dd2013_79743385')) {function content_58bd5486dd2013_79743385($_smarty_tpl) {?><div class="page-title">
    <h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site Admins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
    <div class="page-title__buttons">
        <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/admins/?action=new" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add New Admin<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
    </div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>


<div class="panel panel-default panel--max clearfix">
    <div class="table-responsive">
        <table width="100%" class="table table-striped">
            <thead>
                <tr>
                    <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                    <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                    <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permissions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                    <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Status<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars["admin"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["admin"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["admin"]->key => $_smarty_tpl->tpl_vars["admin"]->value) {
$_smarty_tpl->tpl_vars["admin"]->_loop = true;
?>
                    <tr>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/admins/?action=edit&amp;sid=<?php echo $_smarty_tpl->tpl_vars['admin']->value['sid'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['admin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/admins/?action=edit&amp;sid=<?php echo $_smarty_tpl->tpl_vars['admin']->value['sid'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['admin']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['admin']->value['owner']) {?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Owner<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['admin']->value['permissions_type'];?>

                            <?php }?>
                        </td>
                        <td><span class="label <?php if ($_smarty_tpl->tpl_vars['admin']->value['status']=='Active') {?>label--active<?php } elseif ($_smarty_tpl->tpl_vars['admin']->value['status']=='Pending') {?>label--pending<?php } else { ?>label--inactive<?php }?>"><?php echo $_smarty_tpl->tpl_vars['admin']->value['status'];?>
</span></td>
                        <td>
                            <?php if (!$_smarty_tpl->tpl_vars['admin']->value['owner']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/admins/?action=delete&amp;sid=<?php echo $_smarty_tpl->tpl_vars['admin']->value['sid'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" onclick="return confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this site admin?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');">
                                    <i class="ion-close-circled"></i>
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php }} ?>
