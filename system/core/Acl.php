<?php

class SJB_Acl_Resource
{
    protected $title = '';
    protected $resourceId = '';
    protected $group = 'general';

    public function __construct($resourceId, $title = '', $group = '')
    {
        $this->resourceId = $resourceId;
        $this->title = $title;
        $this->group = $group;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function getGroup()
    {
        return $this->group;
    }
}

class SJB_Acl_Resource_Limitable extends SJB_Acl_Resource
{
}

class SJB_AdminAcl extends SJB_Acl
{
    protected static $admin = [];
    protected static $infoUpdated = false;

    public function isAllowed($resource, $roleId = null, $type = 'user', $returnParams = false, $returnMessage = false)
    {
        if ($type != 'user') {
            return parent::isAllowed($resource, $roleId, $type, $returnParams, $returnMessage);
        }
        return $this->_isAllowed($resource, $roleId, $type, $returnParams, $returnMessage);
    }

    public function isFeatureAllowed($feature)
    {
        if (!SJB_H::isSaas()) {
            return true;
        }
        $info = SJB_Session::getValue('saas');

        $allowed = in_array($feature, $info['features']);
        if (!$allowed && !self::$infoUpdated) {
            self::$infoUpdated = true;
            $info = SJB_HelperFunctions::whmcsCall('saasinfo', [
                'domain' => SJB_System::getSystemSettings('HTTPHOST'),
            ]);
            SJB_Session::setValue('saas', $info['saas']);
            $allowed = in_array($feature, $info['saas']['features']);
        }
        return $allowed;
    }

    public static function getUpgradeUrl()
    {
        $info = SJB_Session::getValue('saas');
        $admin = SJB_Session::getValue('admin');
        if ($admin['owner']) {
            return SJB_H::getBillingUrl() . '/l.php?' . http_build_query([
                'user' => SJB_Session::getValue('username'),
                'pass' => base64_encode(SJB_H::whmcsEncode(SJB_Session::getValue('password'))),
                'product' => $info['id'],
            ]);
        }
        return SJB_H::getBillingUrl();
    }

    protected function _isAllowed($resource, $roleId = null, $type = 'user', $returnParams = false, $returnMessage = false)
    {
        if (SJB_Session::getValue('update-in-progress')) {
            return true;
        }
        if (!self::$admin) {
            $admin = SJB_DB::query('select * from `admins` where `email` = ?s', SJB_Session::getValue('username'));
            if (!$admin) {
                return false;
            }
            self::$admin = current($admin);
        }
        if (self::$admin['owner'] || self::$admin['permissions_type'] == 'Full Admin Access') {
            return true;
        }

        $availablePermissions = explode(',', self::$admin['permissions']);
        $availablePermissions[] = SJB_Acl::ADMIN_GENERAL;
        $resource = mb_strtolower($resource);
        foreach ($availablePermissions as $permission) {
            if ($resource == mb_strtolower($permission)) {
                return true;
            }
        }
        return false;
    }
}

class SJB_Acl
{
    const ADMIN_JOB_BOARD = 'Job Board';
    const ADMIN_APPEARANCE = 'Appearance';
    const ADMIN_CONTENT = 'Content';
    const ADMIN_ECOMMERCE = 'Ecommerce';
    const ADMIN_SETTINGS = 'Settings and Configuration';
    const ADMIN_FULL = 'Full';
    const ADMIN_GENERAL = 'General';


    /**
     * @var SJB_Acl
     */
    protected static $instance = null;

    /**
     * Ресурсы (то на что можно задавать привелегии)
     * @var array
     */
    protected $resources = [];

    protected $permissions = [];

    public static function copyPermissions($product, $contract, $number_of_listings)
    {
        SJB_DB::query('delete from `permissions` where `type` = \'contract\' and `role` = ?s', $contract);
        SJB_DB::query('insert into `permissions` (`type`, `role`, `name`, `value`, `params`, `message`)'
            . ' select \'contract\', ?s, `name`, `value`, `params`, `message` from `permissions` '
            . ' where `type` = \'product\' and `role` = ?s', $contract, $product);
        if ($number_of_listings) {
            $listingTypes = SJB_ListingTypeManager::getAllListingTypesInfo();
            $permissions = SJB_DB::query("SELECT * FROM `permissions` WHERE `type` = 'contract' and `role` = ?s", $contract);
            foreach ($permissions as $key => $permission) {
                $permissions[$permission['name']] = $permission;
                unset($permissions[$key]);
            }
            foreach ($listingTypes as $listingType) {
                if (isset($permissions['post_' . strtolower($listingType['id'])])) {
                    $permission = $permissions['post_' . strtolower($listingType['id'])];
                    if ($permission['value'] == 'allow')
                        SJB_DB::query('UPDATE `permissions` SET `params` = ?n WHERE `id` = ?n', $number_of_listings, $permission['id']);
                }
            }
        }
    }

    /**
     * @return SJB_Acl
     */
    public static function getInstance($reload = false)
    {
        if (null === self::$instance || $reload) {
            if (SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE') == 'user') {
                self::$instance = new self();
            } else {
                self::$instance = $acl = new SJB_AdminAcl();
            }
        }
        return self::$instance;
    }

    /**
     * @return array
     */
    public function getResources($type = 'all', $role = '')
    {
        $listingTypes = SJB_ListingTypeManager::getAllListingTypesInfo();

        $resources = [
            'resume_access' => [
                'title' => "Resume access",
                'limitable' => false,
                'group' => 'Resume',
                'type' => 'guest'
            ],
        ];

        if ($type == 'guest')
            return $resources;

        if ($type == 'group')
            return $resources;

        foreach ($listingTypes as $listingType) {
            $typeId = strtolower($listingType['id']);
            $resources = array_merge($resources, [
                "post_{$typeId}" => [
                    'title' => "Post {$listingType['name']}",
                    'limitable' => true,
                    'group' => $listingType['id'],
                    'type' => 'plan'],
            ]);
        }
        return $resources;
    }

    /**
     * Можно ли?
     * @param $resource
     * @param $roleId
     * @param string $type
     * @param bool $returnParams
     * @param bool $returnMessage
     * @return bool|string
     */
    public function isAllowed($resource, $roleId = null, $type = 'user', $returnParams = false, $returnMessage = false)
    {
        $resource = strtolower($resource);

        $userInfo = [];
        if (null === $roleId) { // если не задан пользователь, то попробуем использовать текущего
            $userInfo = SJB_UserManager::getCurrentUserInfo();
            if (!empty($userInfo))
                $roleId = $userInfo['sid'];
            if (null === $roleId) {
                $roleId = 'guest';
            }
        } else {
            $cacheId = 'SJB_Acl::SJB_UserManager::getUserInfoBySID' . $roleId;
            if (SJB_MemoryCache::has($cacheId))
                $userInfo = SJB_MemoryCache::get($cacheId);
            else {
                $userInfo = SJB_UserManager::getUserInfoBySID($roleId);
                SJB_MemoryCache::set($cacheId, $userInfo);
            }
        }

        $role = $type . '_' . $roleId;

        if (!isset($this->permissions[$role])) {
            switch ($type) {
                case 'user':
                case 'guest':
                    if ($roleId == 'guest' || $type == 'guest') {
                        $role = 'user_guest';
                        if (empty($this->permissions[$role]))
                            $this->permissions[$role] = $this->getPermissions('guest', 'guest');
                    } else {
                        $permissions = $this->getPermissions('user', $roleId);
                        $groupPermissions = $this->getPermissions('group', $userInfo['user_group_sid']);
                        $this->permissions['group_' . $userInfo['user_group_sid']] = $groupPermissions;

                        $contracts = SJB_ContractManager::getAllContractsSIDsByUserSID($roleId);
                        if (!empty($contracts)) {
                            foreach ($contracts as $contract) {
                                $contractPermissions = $this->mergePermissionsWithGroup($this->getPermissions('contract', $contract), $groupPermissions);
                                $this->permissions['contract_' . $contract] = $contractPermissions;
                                $permissions = $this->mergePermissions($contractPermissions, $permissions);
                            }
                        } else {
                            $permissions = $this->mergePermissionsWithGroup($permissions, $groupPermissions);
                        }
                        $this->permissions[$role] = $permissions;
                    }
                    break;

                case 'group':
                    $this->permissions[$role] = $this->getPermissions($type, $roleId);
                    break;

                case 'product':
                    $productInfo = SJB_ProductsManager::getProductInfoBySID($roleId);
                    if (!empty($productInfo['user_group_sid'])) {
                        $groupRole = 'group_' . $productInfo['user_group_sid'];
                        if (empty($this->permissions[$groupRole]))
                            $this->permissions[$groupRole] = $this->getPermissions('group', $productInfo['user_group_sid']);
                        $this->permissions[$role] = $this->mergePermissionsWithGroup($this->getPermissions('product', $roleId), $this->permissions[$groupRole]);
                    } else {
                        $this->permissions[$role] = $this->getPermissions('product', $roleId);
                    }
                    break;

                case 'contract':
                    $this->permissions[$role] = $this->getPermissions('contract', $roleId);
                    break;
            }
        }

        if (!isset($userInfo))
            $userInfo = SJB_UserManager::getCurrentUserInfo();

        $is_display_resume = (!preg_match_all("/.*\/(?:display_resume|display_job)\/(\d*)/i", $_SERVER['REQUEST_URI'], $match)) ? (isset($_SERVER['REDIRECT_URL'])) ? preg_match_all("/.*\/(?:display_resume|display_job)\/(\d*)/i", $_SERVER['REDIRECT_URL'], $match) : false : true;
        // Allow access to Resume/Job Details page if an employer has an application linked to the resume
        if (isset($userInfo) && $is_display_resume) {
            $apps = SJB_DB::query("SELECT `a`.resume FROM `applications` `a`
						            INNER JOIN `listings` l ON
						                  `l`.`sid` = `a`.`listing_id`
						            WHERE `l`.`user_sid` = ?n AND `a`.`show_emp` = 1  ORDER BY a.`date` DESC", $userInfo['sid']);

            if (isset($match[1]) && (in_array(["resume" => array_pop($match[1])], $apps))) {
                $this->permissions[$role][$resource]['value'] = 'allow';
                $this->permissions[$role][$resource]['params'] = '';
            }
        }

        if ($returnParams)
            return empty($this->permissions[$role][$resource]['params']) ? '' : $this->permissions[$role][$resource]['params'];
        elseif ($returnMessage) {
            $message = empty($this->permissions[$role][$resource]['message']) ? '' : $this->permissions[$role][$resource]['message'];
            if (!$message) {
                if (!empty($userInfo)) {
                    $groupRole = 'group_' . $userInfo['user_group_sid'];
                    $message = empty($this->permissions[$groupRole][$resource]['message']) ? '' : $this->permissions[$groupRole][$resource]['message'];
                }
            }
            return $message;
        }

        return isset($this->permissions[$role][$resource]['value']) && $this->permissions[$role][$resource]['value'] == 'allow';
    }

    /**
     *
     * @param string $type
     * @param string $role
     */
    public static function clearPermissions($type, $role)
    {
        SJB_DB::query('delete from `permissions` where `type` = ?s and `role` = ?s', $type, $role);
    }

    public static function allow($name, $type, $role, $value, $params = '', $message = '')
    {
        SJB_DB::query('insert into `permissions` (`name`, `type`, `role`, `value`, `params`, `message`) values (?s, ?s, ?s, ?s, ?s, ?s)',
            $name, $type, $role, $value, $params, $message);
    }

    public function getPermissionParams($resource, $roleId = null, $type = 'user')
    {
        return $this->isAllowed($resource, $roleId, $type, true);
    }

    public function getPermissionMessage($resource, $roleId = null, $type = 'user')
    {
        return $this->isAllowed($resource, $roleId, $type, false, true);
    }

    /**
     * @param  string $type
     * @param  string $role
     * @return array
     */
    public function getPermissions($type, $role)
    {
        $permissions = [];

        $rows = SJB_DB::query("select `name`, `value`, `params`, `message` from `permissions` where `type` = ?s and `role` = ?s", $type, $role);
        foreach ($rows as $row) {
            $permissions[$row['name']] = [
                'value' => $row['value'],
                'params' => $row['params'],
                'message' => $row['message']
            ];
        }

        return $permissions;
    }

    protected function mergePermissions($permissions, $parentPermissions)
    {
        foreach ($permissions as $key => $permission) {
            switch ($permission['value']) {
                case 'allow':
                    if (isset($parentPermissions[$key]) && $parentPermissions[$key]['value'] == 'allow') {
                        if (empty($permissions[$key]['params']) || empty($parentPermissions[$key]['params'])) {
                            $permissions[$key]['params'] = '';
                        } else {
                            $permissions[$key]['params'] = intval($permissions[$key]['params']) + intval($parentPermissions[$key]['params']);
                        }
                    }
                    break;

                case 'deny':
                    if (isset($parentPermissions[$key])) {
                        $oldPermissions = false;
                        if ($parentPermissions[$key]['value'] == 'allow') {
                            $oldPermissions = $permissions[$key];
                            $permissions[$key] = $parentPermissions[$key];
                        }
                        if ($permissions[$key]['message'] == '') {
                            if ($oldPermissions)
                                $permissions[$key]['message'] = $oldPermissions['message'];
                            else
                                $permissions[$key]['message'] = $parentPermissions[$key]['message'];
                        }
                        if ($permissions[$key]['params'] == 'hide') {
                            if ($oldPermissions)
                                $permissions[$key]['params'] = $oldPermissions['params'];
                            else
                                $permissions[$key]['params'] = $parentPermissions[$key]['params'];
                        }
                    }
                    break;

                default:
                    if (isset($parentPermissions[$key]))
                        $permissions[$key] = $parentPermissions[$key];
                    break;
            }
        }
        return array_merge(array_diff_key($parentPermissions, $permissions), $permissions);
    }

    protected function mergePermissionsWithGroup($permissions, $groupPermissions)
    {
        foreach ($permissions as $key => $permission) {
            switch ($permission['value']) {
                case 'allow':
                case 'deny':
                    break;

                default:
                    if (isset($groupPermissions[$key]))
                        $permissions[$key] = $groupPermissions[$key];
                    break;
            }
        }
        return array_merge(array_diff_key($groupPermissions, $permissions), $permissions);
    }

}
