<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:26:02
         compiled from "template_bootstrap_user:../field_types/input/google_place.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85935174358b670823dc4d5-88778942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac00e1b715f5ca4ec6bbee868056421c7b0844ef' => 
    array (
      0 => 'template_bootstrap_user:../field_types/input/google_place.tpl',
      1 => 1488291264,
      2 => 'template_bootstrap_user',
    ),
  ),
  'nocache_hash' => '85935174358b670823dc4d5-88778942',
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
  'unifunc' => 'content_58b670823f5cc2_19583162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b670823f5cc2_19583162')) {function content_58b670823f5cc2_19583162($_smarty_tpl) {?><input id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<?php $_smarty_tpl->smarty->_tag_stack[] = array('javascript', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <script>
        function initService() {
            var input = /** @type <?php echo !'HTMLInputElement';?>
 */(document.getElementById('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'));
            var options = {
                componentRestrictions: {
                    <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['location_limit']) {?>
                    country: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['location_limit'];?>
'
                    <?php }?>
                }
            };
            $(input).change(function() {
                document.getElementById('City').value =
                        document.getElementById('Country').value =
                                document.getElementById('ZipCode').value =
                                        document.getElementById('State').value =
                                                document.getElementById('Latitude').value =
                                                        document.getElementById('Longitude').value = '';
            });
            var autocomplete = new google.maps.places.Autocomplete(input, options);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    var val = place.address_components[i]['long_name'];
                    switch (addressType) {
                        case 'locality':
                            document.getElementById('City').value = val;
                            break;
                        case 'country':
                            document.getElementById('Country').value = val;
                            break;
                        case 'postal_code':
                            document.getElementById('ZipCode').value = val;
                            break;
                        case 'administrative_area_level_1':
                            document.getElementById('State').value = val;
                            break;
                    }
                }
                document.getElementById('Latitude').value = place.geometry.location.lat();
                document.getElementById('Longitude').value = place.geometry.location.lng();
            });
            $('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').keydown(function (e) {
                if (e.which == 13 && $('.pac-container:visible').length) {
                    return false;
                }
            });
        }
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['google_api_key'];?>
&libraries=places&callback=initService&language=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language'];?>
" async defer></script>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['javascript'][0][0]->_tpl_javascript(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
