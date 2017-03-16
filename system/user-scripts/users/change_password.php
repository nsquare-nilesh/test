<?php

class SJB_Users_ChangePassword extends SJB_Function
{
    public function execute()
    {
        $tp = SJB_System::getTemplateProcessor();
        $username = SJB_Request::getVar('username', null);
        $verificationKey = SJB_Request::getVar('verification_key', null);
        $errors = [];
        $passwordWasChanged = false;
        $userInfo = SJB_UserManager::getUserInfoByUserName($username);

        if (empty($userInfo)) {
            $errors['EMPTY_USERNAME'] = 1;
        } elseif (empty($verificationKey)) {
            $errors['EMPTY_VERIFICATION_KEY'] = 1;
        } elseif ($userInfo['verification_key'] != $verificationKey) {
            $errors['WRONG_VERIFICATION_KEY'] = 1;
        } elseif (SJB_Request::getMethod() == SJB_Request::METHOD_POST) {
            if (SJB_Request::getVar('password') && SJB_Request::getVar('password') == SJB_Request::getVar('confirm_password')) {
                $passwordWasChanged = SJB_UserManager::changeUserPassword($userInfo['sid'], SJB_Request::getVar('password'));
            } else {
                $errors['NOT_CONFIRMED'] = 1;
            }
        }

        if ($passwordWasChanged) {
            $tp->display('successful_password_change.tpl');
        } else {
            $tp->assign('username', $username);
            $tp->assign('verification_key', $verificationKey);
            $tp->assign('errors', $errors);
            $tp->display('change_password.tpl');
        }
    }
}
