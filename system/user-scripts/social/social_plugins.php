<?php

class SJB_Social_SocialPlugins extends SJB_Function
{
    public function execute()
    {
        if (!SJB_Settings::getValue('li_signin')) {
            return;
        }
        $tp = SJB_System::getTemplateProcessor();

        if (!SJB_Authorization::isUserLoggedIn()
            && class_exists('SJB_SocialPlugin')
            && '/registration-social/' != SJB_Navigator::getUri()
            && $socPlugins = SJB_SocialPlugin::getAvailablePlugins()
        ) {
            $tp->assign('user_group_id', SJB_Request::getVar('user_group_id', null));

            $socNetworks = SJB_SocialPlugin::getSocialNetworks($socPlugins);

            $tp->assign('label', SJB_Request::getVar('label', null));
            $tp->assign('social_plugins', $socNetworks);
            $tp->assign('shoppingCart', SJB_Request::getVar('shoppingCart', null));
        }
        if (!empty($GLOBALS[SJB_SocialPlugin::SOCIAL_LOGIN_ERROR])) {
            $tp->assign('errors', $GLOBALS[SJB_SocialPlugin::SOCIAL_LOGIN_ERROR]);
        }

        if (!empty($GLOBALS[SJB_SocialPlugin::SOCIAL_ACCESS_ERROR])) {
            $tp->assign('errors', $GLOBALS[SJB_SocialPlugin::SOCIAL_ACCESS_ERROR]);
            $tp->assign('socialNetwork', SJB_SocialPlugin::getNetwork());
        }
        $tp->display('social_plugins.tpl');
    }
}
