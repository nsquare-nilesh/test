<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 17:41:24
         compiled from "template__system/admin_admin:../field_types/input/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188465989058b6ba6ccf5169-61166022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb4635ba70fbf2f4d80bb62929ff8b00d7a5a72' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/user.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '188465989058b6ba6ccf5169-61166022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_group' => 0,
    'value' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b6ba6cd1cfd8_86748608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6ba6cd1cfd8_86748608')) {function content_58b6ba6cd1cfd8_86748608($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user_group']->value['name']=='Job Seeker') {?>
    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter full name or email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
<?php } else { ?>
    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter company name, contact name or email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
<?php }?>
<i class="fa fa-caret-down" aria-hidden="true"></i>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        $(document).ready(function() {
            $('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').autocomplete({
                delay: 1,
                minLength: 0,
                source: function(request, response) {
                    var params = {
                        'username[user_like]': request.term,
                        action: 'search',
                        format: 'json',
                        page: 1,
                        itemsPerPage: 20,
                        minLength: 0
                    };
                    $.get(window.SJB_AdminSiteUrl + '/manage-users/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group']->value['id'], 'UTF-8');?>
/', params, function(data) {
                        var users = [];
                        $.each(data, function() {
                            var user = {
                                label: (this.CompanyName ? this.CompanyName : this.FullName) + ' - ' + this.username,
                                value: this.username
                            };
                            users.push(user);
                        });
                        response(users);
                    });
                }
            }).focus(function () {
                $(this).autocomplete('search', '')
            });
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
