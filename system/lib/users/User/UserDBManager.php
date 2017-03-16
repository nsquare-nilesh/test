<?php

class SJB_UserDBManager extends SJB_ObjectDBManager
{
    /**
     * @param SJB_User $user
     * @return array|bool|int
     */
    public static function saveUser($user)
    {
        $user_group_sid = $user->getUserGroupSID();
        $user_exists = !is_null($user->getSID());

        if (!is_null($user_group_sid)) {
			//echo json_encode($user);echo ">>";die;
            parent::saveObject("users", $user);
            if (!$user_exists) {
                SJB_DB::query("UPDATE ?w
						   SET `registration_date` = ?s, `verification_key` = ?s, `email` = `username`
						   WHERE `sid` = ?n",
                    "users", SJB_DateType::mysqlNow(), $user->getVerificationKey(), $user->getSID());
            }
            return SJB_DB::query("UPDATE ?w SET `user_group_sid` = ?n WHERE `sid` = ?n", "users", $user_group_sid, $user->getSID());
        }

        return false;
    }

    public static function deleteUserById($id)
    {
        return parent::deleteObjectInfoFromDB('users', $id);
    }

    public static function deleteEmptyUsers()
    {
        SJB_DB::query("DELETE FROM `users` WHERE `username` = ?s OR `username` IS NULL", "");
    }

    public static function setStatus($id, $status)
    {
        return SJB_DB::query('UPDATE `users` SET `active` = ?n WHERE `sid` = ?n', $status, $id);
    }

    public static function getUserInfoByUserName($username)
    {
        if (empty($username))
            return null;
        $user_sid = SJB_DB::queryValue("SELECT `sid` FROM `users` WHERE `username` = ?s", $username);
        if (empty($user_sid))
            return null;
        return parent::getObjectInfo("users", $user_sid);
    }

    public static function getUserInfoByExtUserID($extUserID, $listingTypeID)
    {
        if (empty($extUserID)) {
            return null;
        }
        $userInfo = SJB_DB::query("SELECT u.`sid`, ug.`id` as user_group FROM `users` u INNER JOIN `user_groups` ug ON ug.`sid` = u.`user_group_sid` WHERE u.`extUserID` = ?s", $extUserID);
        foreach ($userInfo as $key => $user) {
            unset($userInfo[$key]);
            $userInfo[$user['user_group']] = $user['sid'];
        }
        $userSID = null;
        if (!$userInfo) {
            return null;
        } elseif (count($userInfo) > 1) {
            if ($listingTypeID == 'Job' && array_key_exists('Employer', $userInfo)) {
                $userSID = $userInfo['Employer'];
            } elseif ($listingTypeID == 'Resume' && array_key_exists('JobSeeker', $userInfo)) {
                $userSID = $userInfo['JobSeeker'];
            } else {
                $userSID = array_pop($userInfo);
            }
        } else {
            $userSID = array_pop($userInfo);
        }

        return parent::getObjectInfo("users", $userSID);
    }

    public static function getUserInfoBySID($user_sid)
    {
        return parent::getObjectInfo("users", $user_sid);
    }

    public static function getUserNameByUserSID($user_sid)
    {
        return SJB_DB::queryValue("SELECT `username` FROM `users` WHERE `sid` = ?n", $user_sid);
    }

    public static function getExtUserIDByUserSID($user_sid)
    {
        return SJB_DB::queryValue("SELECT `extUserID` FROM `users` WHERE `sid` = ?n", $user_sid);
    }

    public static function getUserSIDsLikeUsername($username)
    {
        if (empty($username))
            return null;

        $users_info = SJB_DB::query("SELECT `sid` FROM `users` WHERE `username` LIKE '%?w%'", $username);
        if (!empty($users_info)) {
            $users_sids = [];
            foreach ($users_info as $user_info)
                $users_sids[$user_info['sid']] = $user_info['sid'];
            return $users_sids;
        }
        return null;
    }

    public static function getUserSIDsLikeCompanyName($companyName)
    {
        if (empty($companyName)) {
            return null;
        }

        $usersInfo = SJB_DB::query("SELECT `sid` FROM `users` WHERE `CompanyName` LIKE '%?w%'", SJB_DB::quote($companyName));
        if (!empty($usersInfo)) {
            $usersSids = [];
            foreach ($usersInfo as $userInfo) {
                $usersSids[$userInfo['sid']] = $userInfo['sid'];
            }
            return $usersSids;
        }
        return null;
    }

    public static function getUserSIDsLikeSearchString($string)
    {
        if (empty($string)) {
            return null;
        }
        $string = SJB_DB::quote($string);
        $users = SJB_DB::query("SELECT `sid` FROM `users` WHERE `username` LIKE '%?w%' OR `FullName` LIKE '%?w%' OR `CompanyName` LIKE '%?w%'", $string, $string, $string);
        if (!empty($users)) {
            $sids = [];
            foreach ($users as $user) {
                $sids[$user['sid']] = $user['sid'];
            }
            return $sids;
        }
        return null;
    }
}
