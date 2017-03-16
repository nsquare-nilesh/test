<?php /* Smarty version Smarty-3.1.19, created on 2017-02-28 19:56:46
         compiled from "template_bootstrap_user:../field_types/search/google_place.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128006359158b588a68f5713-04879064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd769d0b88d52251530beda844788fee41e285f46' => 
    array (
      0 => 'template_bootstrap_user:../field_types/search/google_place.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '128006359158b588a68f5713-04879064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b588a6914480_72688259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b588a6914480_72688259')) {function content_58b588a6914480_72688259($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[location][value]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control form-control__google-location" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['location']['value'];?>
" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Location<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[location][radius]" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['location']['radius']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['location']['radius'];?>
<?php } else { ?>50<?php }?>" id="radius" class="hidden-radius"/>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        function initService() {
            var input = /** @type <?php echo !'HTMLInputElement';?>
 */($('.form-control__google-location'));
            var options = {
                componentRestrictions: {
                    <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['location_limit']) {?>
                        country: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['location_limit'];?>
'
                    <?php }?>
                }
            };

            for(var i=0; i<input.length; i++){
                new google.maps.places.Autocomplete(input[i], options);
            }

        }

        $('#ajax-refine-search').on('click', '.refine-search__item-radius', function(e) {
            e.preventDefault();
            var radiusValue = $(this).data('value');

            $('.hidden-radius').each(function() {
                $(this).val(radiusValue);
            });

            $('#refine-block-radius .dropdown-toggle').text($(this).data('value') + ' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['radius_search_unit'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
            $('.quick-search__wrapper').find('form').submit();
        });

        $('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').keydown(function (e) {
            if (e.which == 13 && $('.pac-container:visible').length) {
                return false;
            }
        });
    </script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
