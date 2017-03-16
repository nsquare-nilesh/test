<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 12:56:01
         compiled from "template_bootstrap_user:E:\xampp\htdocs\AssessorList\templates\Bootstrap\applications\view_seeker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453058c1038950d363-58861990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f07ed110ae7e60c377b55b480767dbdffebb5b3' => 
    array (
      0 => 'template_bootstrap_user:E:\\xampp\\htdocs\\AssessorList\\templates\\Bootstrap\\applications\\view_seeker.tpl',
      1 => 1488271464,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '453058c1038950d363-58861990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'applications' => 0,
    'listing' => 0,
    'application' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c103895c5601_05210551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c103895c5601_05210551')) {function content_58c103895c5601_05210551($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'trListingTypeName', null); ob_start(); ?>Resumes<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 class="my-account-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<div class="my-account-list">
    <ul class="nav nav-pills">
        <li class="presentation"> <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-listings/resume"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <li class="presentation active"> <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/applications/view/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
        <li class="presentation"> <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-profile/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Account Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
    </ul>
</div>
<div class="col-xs-12 details-body__left applicants">
    <?php if ($_smarty_tpl->tpl_vars['applications']->value) {?>
        <div class="col-xs-12">
            <h3 class="title__primary title__primary-small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3><br/>
        </div>
        <div id="applicants-list">
            <?php  $_smarty_tpl->tpl_vars['application'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['application']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['application']->key => $_smarty_tpl->tpl_vars['application']->value) {
$_smarty_tpl->tpl_vars['application']->_loop = true;
?>
                <article class="media well listing-item <?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Job') {?>listing-item__jobs<?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Resume') {?>listing-item__resumes<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['application']->value['resumeInfo']['Photo']['file_url']) {?>
                        <div class="media-left listing-item__logo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['listing']->value);?>
">
                                <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['application']->value['resumeInfo']['Photo']['file_url'];?>
" />
                            </a>
                        </div>
                    <?php }?>
                    <div class="media-body">
                        <div class="media-heading listing-item__title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['listing_url'][0][0]->listing_url($_smarty_tpl->tpl_vars['application']->value['job']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['application']->value['job']['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                        <div class="listing-item__date visible-xs-480"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Applied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['application']->value['date']);?>
</div>
                        <div class="listings-application-info listing-item__info clearfix">
                            <span class="listing-item__info--item listing-item__info--item-company">
                                <?php echo $_smarty_tpl->tpl_vars['application']->value['company']['CompanyName'];?>

                            </span>
                            <?php if ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['application']->value['job'])) {?>
                                <span class="listing-item__info--item listing-item__info--item-location">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['location'][0][0]->location($_smarty_tpl->tpl_vars['application']->value['job']);?>

                                </span>
                            <?php }?>
                        </div>
                    </div>
                    <div class="media-right text-right hidden-xs-480">
                        <div class="listing-item__date"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Applied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date($_smarty_tpl->tpl_vars['application']->value['date']);?>
</div>
                    </div>
                </article>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div id="applicants-list">
            <div class="alert alert-danger">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You haven't applied to any job yet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        function modifyNote(noteId, url) {
            $.get(url, function(data) {
                $("#formNote_" + noteId).html(data);
                $("#trNote_" + noteId).css("display", "table-row").css("border-bottom","1px solid #B2B2B2");
                $("#trAppl_" + noteId).css("border-bottom","0px");
                $("#tdCheckbox_" + noteId).attr("rowspan", "2");
            });
        }

        function showCoverLetter(id) {
            message('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cover letter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', $("#coverLetter_" + id).text());
        }

        $(document).ready(function() {
            $('.nav-pills').scrollLeft($('.nav-pills').width() / 2);
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
