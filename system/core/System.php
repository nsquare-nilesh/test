<?php

class SJB_System
{
    static $pluginsErrors = [];

    public static function boot()
    {
        // force include Base.php file (compatibility and specific functions)
        require_once SJB_BASE_DIR . 'system/core/Base.php';
        require_once SJB_BASE_DIR . 'system/ext/Zend/Loader/ClassMapAutoloader.php';
        $loader = new Zend_Loader_ClassMapAutoloader();
        $loader->registerAutoloadMap(SJB_BASE_DIR . 'system/core/.classmapcache.php');
        $loader->register();

        require_once SJB_BASE_DIR . 'system/ext/vendor/autoload.php';

        set_include_path(
            SJB_System::getSystemSettings('EXT_LIBRARY_DIR') . PATH_SEPARATOR .
            SJB_System::getSystemSettings('LIBRARY_DIR') . PATH_SEPARATOR . get_include_path());
    }

    public static function loadSystemSettings($file_name)
    {
        if (!file_exists($file_name)) {
            return false;
        }
        if (is_readable($file_name)) {
            if (!isset($GLOBALS['system_settings'])) {
                $GLOBALS['system_settings'] = [];
            }
            $settings = include($file_name);
            $GLOBALS['system_settings'] = array_merge($GLOBALS['system_settings'], $settings);
        } else {
            die ("index.php" . " File {$file_name} isn't readable Cannot read config file");
        }
        if (empty($GLOBALS['system_settings']['env']) && !empty($GLOBALS['system_settings']['isSaas'])) {
            $GLOBALS['system_settings']['env'] = parse_ini_file('/srv/sjb/sjb.cfg', true);
        }
        return true;
    }

    public static function getSystemSettings($setting_name)
    {
        return (isset($GLOBALS['system_settings'][$setting_name])) ? $GLOBALS['system_settings'][$setting_name] : null;
    }

    public static function setSystemSettings($setting_name, $value)
    {
        $GLOBALS['system_settings'][$setting_name] = $value;
    }

    public static function getGlobalTemplateVariables()
    {
        return $GLOBALS['TEMPLATE_VARIABLES'];
    }

    public static function getGlobalTemplateVariable($variable_name)
    {
        return (isset($GLOBALS['TEMPLATE_VARIABLES'][$variable_name])) ? $GLOBALS['TEMPLATE_VARIABLES'][$variable_name] : null;
    }

    public static function setGlobalTemplateVariable($name, $value, $in_global_array = true)
    {
        if ($in_global_array) {
            $GLOBALS['TEMPLATE_VARIABLES']['GLOBALS'][$name] = $value;
        } else {
            $GLOBALS['TEMPLATE_VARIABLES'][$name] = $value;
        }
    }

    /**
     * @return SJB_ModuleManager
     */
    public static function getModuleManager()
    {
        return $GLOBALS['System']['MODULE_MANAGER'];
    }

    /**
     * Get Template Processor
     *
     * @return SJB_TemplateProcessor
     */
    public static function getTemplateProcessor()
    {
        list($module) = SJB_System::getModuleManager()->getCurrentModuleAndFunction();
        if ($module != null) {
            return new SJB_TemplateProcessor(new SJB_TemplateSupplier($module));
        }
        return null;
    }

    public static function setPageTitle($page_title)
    {
        SJB_System::setGlobalTemplateVariable('TITLE', trim($page_title), false);
    }

    public static function setCurrentUserInfo($current_user_info)
    {
        SJB_System::setGlobalTemplateVariable('current_user', $current_user_info);
    }

    public static function setCurrentUserGroupsInfo($userGroupInfo)
    {
        SJB_System::setGlobalTemplateVariable('user_groups', $userGroupInfo);
    }

    public static function getPageTitle()
    {
        return SJB_System::getGlobalTemplateVariable('TITLE');
    }

    public static function setPageKeywords($page_keywords)
    {
        SJB_System::setGlobalTemplateVariable('KEYWORDS', trim($page_keywords), false);
    }

    public static function getPageKeywords()
    {
        return SJB_System::getGlobalTemplateVariable('KEYWORDS');
    }

    public static function setPageDescription($page_description)
    {
        SJB_System::setGlobalTemplateVariable('DESCRIPTION', trim($page_description), false);
    }

    public static function getPageDescription()
    {
        return SJB_System::getGlobalTemplateVariable('DESCRIPTION');
    }

    public static function setPageHead($page_head)
    {
        $head = SJB_System::getPageHead();
        if (empty($head)) {
            $head = '';
        }
        SJB_System::setGlobalTemplateVariable('HEAD', $head . "\n" . $page_head, false);
    }

    public static function getPageHead()
    {
        return SJB_System::getGlobalTemplateVariable('HEAD');
    }

    public static function executeFunction($module, $setting, $parameters = [], $pageID = false)
    {
        return SJB_System::getModuleManager()->executeFunction($module, $setting, $parameters, $pageID);
    }

    public static function init()
    {
        ini_set('gd.jpeg_ignore_warning', 1);
        SJB_Error::getInstance();
        SJB_DB::init(SJB_System::getSystemSettings('DBHOST'), SJB_System::getSystemSettings('DBUSER'), SJB_System::getSystemSettings('DBPASSWORD'), SJB_System::getSystemSettings('DBNAME'));

        SJB_Session::init(SJB_System::getSystemSettings('SITE_URL'));

        //set timezone
        if (SJB_Settings::getSettingByName('timezone')) {
            ini_set('date.timezone', SJB_Settings::getSettingByName('timezone'));
        }

        if (SJB_Settings::getValue('force_custom_domain') && SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE') == 'user') {
            $host = SJB_Array::get($_SERVER, 'HTTP_HOST');
            if (
                SJB_Request::getMethod() == SJB_Request::METHOD_GET &&
                SJB_Settings::getValue('domain') && SJB_Settings::getValue('domain') != $host &&
                php_sapi_name() != 'cli' &&
                !preg_match('/jobg8/ui', $_SERVER['REQUEST_URI'])
            ) {
                $url = SJB_H::getCustomDomainUrl() . SJB_Navigator::getURIThis();
                $url = preg_replace('|https://|ui', 'http://', $url);
                SJB_H::redirect($url, '301 Moved Permanently');
            }
        }

        SJB_System::prepareGlobalArrays();
        SJB_System::setGlobalTemplateVariable('is_ajax', SJB_Request::isAjax());
        SJB_System::setGlobalTemplateVariable('site_url', SJB_System::getSystemSettings('SITE_URL'));
        SJB_System::setGlobalTemplateVariable('base_url', SJB_System::getSystemSettings('BASEURL'));
        SJB_System::setGlobalTemplateVariable('user_site_url', SJB_System::getSystemSettings('USER_SITE_URL'));
        SJB_System::setGlobalTemplateVariable('custom_domain_url', SJB_H::getCustomDomainUrl());
        SJB_System::setGlobalTemplateVariable('admin_site_url', SJB_System::getSystemSettings('ADMIN_SITE_URL'));
        SJB_System::setGlobalTemplateVariable('radius_search_unit', SJB_System::getSettingByName('radius_search_unit'));
        SJB_System::setGlobalTemplateVariable('settings', SJB_Settings::getSettings());
        $themeSettings = ThemeManager::getThemeSettings();
        SJB_System::setGlobalTemplateVariable('theme_settings', $themeSettings);

        $theme = ThemeManager::getCurrentTheme();

        SJB_PluginManager::loadPlugins(SJB_System::getSystemSettings('PLUGINS_DIR'));
        SJB_System::setGlobalTemplateVariable('plugins', SJB_PluginManager::getAllPluginsList());

        $GLOBALS['System']['MODULE_MANAGER'] = new SJB_ModuleManager();
        SJB_Event::dispatch('moduleManagerCreated');
        $GLOBALS['System']['MODULE_MANAGER']->executeModulesStartupFunctions();
        $GLOBALS['uri'] = SJB_Navigator::getURI();

        SJB_System::setPageHead('<link rel="icon" href="' . SJB_HelperFunctions::getSiteUrl() . "/templates/{$theme}/assets/images/" . $themeSettings['favicon'] . '" type="image/x-icon" />');
        SJB_System::setPageHead(SJB_FontsManager::getFontLink());
    }

    public static function getSystemURLByModuleAndFunction($module, $function, $parameters)
    {
        $params = [];

        foreach ($parameters as $parameter_name => $parameter_value)
            array_push($params, urlencode($parameter_name) . '=' . urlencode($parameter_value));

        $parameters_str = join('&', $params);
        $site_url = SJB_System::getSystemSettings("SITE_URL");
        $system_url_base = SJB_System::getSystemSettings("SYSTEM_URL_BASE");
        return $site_url . '/' . $system_url_base . '/' . $module . '/' . $function . '?' . $parameters_str;
    }

    public static function getModuleAndFunctionBySystemURL($url)
    {
        list($uri) = explode('?', $url);
        $uriParts = explode('/', $uri);
        $module = SJB_Array::get($uriParts, 2);
        $function = SJB_Array::get($uriParts, 3);
        return ['module' => $module, 'function' => $function];
    }

    public static function getFunctionInfo($module, $function)
    {
        $module_manager = SJB_System::getModuleManager();
        if ($module_manager->doesModuleExists($module)) {
            $module_info = $module_manager->getModuleInfo($module);
            return (isset($module_info['functions'][$function])) ? $module_info['functions'][$function] : [];
        }
        return [];
    }

    public static function getSystemDefaultTemplate()
    {
        return SJB_System::getSystemSettings('SYSTEM_DEFAULT_TEMPLATE');
    }

    public static function isFunctionAccessible($module, $function)
    {
        return SJB_System::getModuleManager()->isFunctionAccessible($module, $function);
    }

    public static function prepareGlobalArrays()
    {
        // simulating turning off register_globals if it's on
        if (@ini_get("register_globals")) {
            $unset = array_keys($_ENV + $_GET + $_POST + $_COOKIE + $_SERVER + $_SESSION);
            foreach ($unset as $rg_var) {
                if (isset ($$rg_var))
                    unset ($$rg_var);
            }
            unset ($unset);
        }

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST':
                $_REQUEST = $_POST;
                break;
            case 'GET';
                $_REQUEST = $_GET;
                break;
        }

        //-- setting temp directory if there isn't available one
        $isCacheDirGood = false;
        foreach ([$_ENV, $_SERVER] as $tab) {
            foreach (['TMPDIR', 'TEMP', 'TMP', 'windir', 'SystemRoot'] as $key) {
                if (isset($tab[$key])) {
                    if ($key == 'windir' || $key == 'SystemRoot') {
                        $dir = realpath($tab[$key] . '\\temp');
                    } else {
                        $dir = realpath($tab[$key]);
                    }
                    if (is_readable($dir) && is_writable($dir)) {
                        $isCacheDirGood = true;
                        break 2;
                    }
                }
            }
        }

        if ($isCacheDirGood === false) {
            $_SERVER['TMP'] = SJB_BASE_DIR . 'system/cache/';
        }
    }

    public static function requireAllFilesInDirectory($dir)
    {
        if (is_dir($dir) && $dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                    if (($file != '.') && ($file != '..')) {
                        SJB_System::requireAllFilesInDirectory($dir . DIRECTORY_SEPARATOR . $file);
                    }
                } else {
                    if (strlen($file) > 4 && strtolower(substr($file, strlen($file) - 4)) == '.php') {
                        require_once($dir . DIRECTORY_SEPARATOR . $file);
                    }
                }
            }
            closedir($dh);
        }
    }

    public static function doesFunctionHaveRawOutput($module, $function)
    {
        return SJB_System::getModuleManager()->doesFunctionHaveRawOutput($module, $function);
    }

    public static function getPageConfig($uri)
    {
        return SJB_PageConfig::getPageConfig($uri);
    }

    public static function deleteUserPage($uri)
    {
        return SJB_PageManager::delete_page($uri);
    }

    public static function doesUserPageExists($uri)
    {
        return SJB_PageManager::doesPageExists($uri, 'user');
    }

    public static function getModulesList()
    {
        return SJB_System::getModuleManager()->getModulesList();
    }

    public static function getFunctionsList($module)
    {
        return SJB_System::getModuleManager()->getFunctionsList($module);
    }

    public static function getParamsList($module, $function)
    {
        return SJB_System::getModuleManager()->getParamsList($module, $function);
    }

    public static function getFunctionsUserList($module)
    {
        $module_manager = SJB_System::getModuleManager();
        $func_list = $module_manager->getFunctionsList($module);
        $user_func_list = [];
        foreach ($func_list as $func) {
            if (($module_manager->getFunctionType($module, $func) == 'user') && ($module_manager->getFunctionAccessSystem($module, $func) == false)) {
                $user_func_list[] = $func;
            }
        }
        return $user_func_list;
    }

    public static function getModulesUserList()
    {
        $module_manager = SJB_System::getModuleManager();
        $module_list = $module_manager->getModulesList();
        $user_module_list = [];
        foreach ($module_list as $module) {
            if (isset($func_list)) {
                unset($func_list);
            }
            $is_user = 0;
            $func_list = $module_manager->getFunctionsList($module);

            foreach ($func_list as $func) {
                if ($module_manager->getFunctionType($module, $func) == 'user' && ($module_manager->getFunctionAccessSystem($module, $func) == false)) {
                    $is_user = 1;
                    break;
                }
            }

            if ($is_user == 1) {
                $user_module_list[] = $module;
            }
        }
        return $user_module_list;
    }

    public static function getURI()
    {
        return SJB_Navigator::getURI();
    }

    public static function getRegisteredCommands()
    {
        return SJB_System::getModuleManager()->getRegisteredCommands();
    }

    public static function getCommandScriptAbsolutePath($module, $command)
    {
        return SJB_System::getModuleManager()->getCommandScriptAbsolutePath($module, $command);
    }

    public static function getModuleOfCommand($command)
    {
        return SJB_System::getModuleManager()->getModuleOfCommand($command);
    }

    public static function getSettingsFromFile($file_name, $setting_name)
    {
        $settings = require($file_name);
        return isset($settings[$setting_name]) ? $settings[$setting_name] : null;
    }

    public static function getSettingByName($setting_name)
    {
        return SJB_Settings::getSettingByName($setting_name);
    }

    public static function doesParentUserPageExist($uri)
    {
        return SJB_PageManager::doesParentPageExist($uri, SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE'));
    }
}
