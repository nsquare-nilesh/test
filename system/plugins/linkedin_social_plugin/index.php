<?php

if (!extension_loaded('openssl')) {
    $GLOBALS[SJB_SocialPlugin::SOCIAL_ACCESS_ERROR]['SOCIAL_ACCESS_ERROR'] = 'linkedin';
    SJB_Error::getInstance()->addWarning('Linkedin Social Plugin needs the "openssl" PHP extension.');
    return null;
}

require_once 'linkedin_social_plugin.php';

SJB_SocialPlugin::loadPlugin('linkedin', new SocialLoginPlugin());

if (SocialLoginPlugin::getNetwork() === SJB_SocialPlugin::getNetwork()) {

    SJB_Event::handle('Login_Plugin', ['SJB_SocialPlugin', 'login']);
    SJB_Event::handle('Logout', ['SJB_SocialPlugin', 'logout'], 1000);

    /*
     * REGISTRATION
     */
    SJB_Event::handle('FillRegistrationData_Plugin', ['SJB_SocialPlugin', 'fillRegistrationDataWithUser']);
    SJB_Event::handle('MakeRegistrationFieldsNotRequired_SocialPlugin', ['SocialLoginPlugin', 'makeRegistrationFieldsNotRequired']);
    SJB_Event::handle('SocialPlugin_AddListingFieldsIntoRegistration', ['SJB_SocialPlugin', 'addListingFieldsIntoRegistration']);

    SJB_Event::handle('AddReferencePluginDetails', ['SJB_SocialPlugin', 'addReferenceDetails']);

    /*
     * LISTING AUTOFILL SYNCHRONIZATION
     */
    SJB_Event::handle('SocialSynchronization', ['SJB_SocialPlugin', 'autofillListing']);
    SJB_Event::handle('SocialSynchronizationForm', ['SJB_SocialPlugin', 'autofillListingForm']);
}
