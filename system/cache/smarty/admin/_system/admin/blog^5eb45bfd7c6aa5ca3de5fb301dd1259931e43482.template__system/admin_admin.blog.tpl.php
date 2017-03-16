<?php /* Smarty version Smarty-3.1.19, created on 2017-03-02 14:08:22
         compiled from "template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/blog/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178178727758b7d9fe01a9a2-48357934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb45bfd7c6aa5ca3de5fb301dd1259931e43482' => 
    array (
      0 => 'template__system/admin_admin:/home/wwwmobintia/public_html/smartjob/templates/_system/admin/blog/blog.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '178178727758b7d9fe01a9a2-48357934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'posts' => 0,
    'item' => 0,
    'paginationInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b7d9fe0ad955_36246483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b7d9fe0ad955_36246483')) {function content_58b7d9fe0ad955_36246483($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/wwwmobintia/public_html/smartjob/system/ext/Smarty/libs/plugins/function.cycle.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<div class="page-title">
    <h1 class="title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blog Posts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
    <div class="page-title__buttons">
        <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/blog/?action=add" class="btn btn--primary"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add Blog Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../classifieds/field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel panel-default panel--max clearfix">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/blog/" name="resultsForm">
        <input type="hidden" name="action" id="action_name" value="">
        <div class="table__pagination table__pagination--header">
            <?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

        </div>
        <div class="table-responsive">
            <table width="100%" class="table table-striped with-bulk">
                <thead>
                    <?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_posts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_posts']['iteration']++;
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                            <td class="text-center" style="width: 46px;">
                                <label class="cr-styled">
                                    <input type="checkbox" name="posts[<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['blog_posts']['iteration'];?>
">
                                    <i class="fa"></i>
                                </label>
                            </td>
                            <td class="td-wide"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/blog/?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['item']->value['date']);?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {?>
                                    <span class="label label--active"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                <?php } else { ?>
                                    <span class="label label--inactive"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="table__pagination table__pagination--footer">
            <?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

        </div>
    </form>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        $('.bulk-action').on('click', function() {
            var action = $(this).data('action');
            if (action == 'delete') {
                if (confirm('<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'];?>
')) {
                    submitForm(action);
                }
            } else {
                submitForm(action);
            }
            return false;
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
