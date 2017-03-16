<?php /* Smarty version Smarty-3.1.19, created on 2017-03-01 12:53:29
         compiled from "template__system/admin_admin:../field_types/input/google_place.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60699324758b676f1184af2-63967829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46265c0555f525ee9f138ecebe78053a57586105' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/google_place.tpl',
      1 => 1488291264,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '60699324758b676f1184af2-63967829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'id' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58b676f11a14d6_46666302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b676f11a14d6_46666302')) {function content_58b676f11a14d6_46666302($_smarty_tpl) {?><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="inputString <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
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
" async defer></script><?php }} ?>
