<?php

/**
 * @package SystemClasses
 * @subpackage ModuleManager
 */

/**
 * ModuleManager - class used to handle modules, including running their functions.
 * @package SystemClasses
 */
class SJB_ModuleManager
{
    var $modules;
    var $call_stack;
    var $prev_requests;

    /**
     * ModuleManager constructor
     */
    public function __construct()
    {
        $this->modules = array();
        $this->call_stack = array();
        $this->prev_requests = array();
        $this->readModuleConfigs();
    }

    function doesModuleExists($module_name)
    {
        return isset($this->modules[$module_name]);
    }

    function doesFunctionExist($module, $function)
    {
        return isset($this->modules[$module]['functions'][$function]);
    }

    /**
     * Returns module information specified in monule configuration
     *
     * @param string $module_name Module name.
     * @return array|bool|mixed
     */
    function getModuleInfo($module_name = '')
    {
        if (empty($module_name))
            return $this->modules;
        return isset($this->modules[$module_name]) ? $this->modules[$module_name] : false;
    }

    /**
     * Returns function's access type
     *
     * @param string $module_name Module name
     * @param string $function_name Function name
     * @return string Access class
     */
    function getFunctionAccessType($module_name, $function_name)
    {
        if (isset ($this->modules[$module_name]['functions'][$function_name]))
            return $this->modules[$module_name]['functions'][$function_name]['access_type'];
    }

    /**
     * Returns function's type
     *
     * @param string $module_name Module name
     * @param string $function_name Function name
     * @return string Function type
     */
    function getFunctionType($module_name, $function_name)
    {
        if (isset($this->modules[$module_name]['functions'][$function_name]))
            return $this->modules[$module_name]['functions'][$function_name]['type'];
    }

    /**
     * Returns module's classes directory
     *
     * @param string $module_name Module name
     * @return string Path to classes directory
     */
    function getModuleClassesDir($module_name)
    {
        return $this->modules[$module_name]['classes'];
    }

    /**
     * Execute module function
     *
     * This function will execute function of the module
     * If function does not exists, it will display error message
     *
     * @param string $module_name name of the module
     * @param string $function_name function's name
     * @param array $parameters_override _REQUEST parameters to rewrite
     * @return string
     */
    function executeFunction($module_name, $function_name, $parameters_override = array(), $pageID = false)
    {
        ob_start();
        if ($this->isFunctionAccessible($module_name, $function_name)) {
            $script_filename = $this->getFunctionScriptFilename($module_name, $function_name);
            if ($script_filename != null && is_readable($script_filename)) {
                $this->prepareFunctionEnvironment($parameters_override);
                $this->pushExecutionStack($module_name, $function_name);
                $function = $this->getFunction($function_name, $module_name, $parameters_override);
                // permissions checking
                if (!$function->isAccessible()) {
                    $function = $this->getFunction('function_is_not_accessible', 'miscellaneous', [
                        'message' => $function->acl->getPermissionMessage($function->getPermissionLabel(), $function->getAclRoleID()),
                    ]);

                    SJB_Request::getInstance()->setPageTemplate('index.tpl');
                }
                if (SJB_Profiler::getInstance()->isProfilerEnable()) {
                    SJB_DB::setFunctionInfo($function_name, $module_name);
                    $startTime = microtime(true);
                    $function->execute();
                    $spendTime = microtime(true) - $startTime;
                    $spendTime = number_format($spendTime, 8);
                    SJB_Profiler::getInstance()->gatherFunctionInfo($module_name, $function_name, $spendTime);
                } else {
                    $function->execute();
                }

                $this->popExecutionStack();
                $this->restoreEnvironment();
            } else {
                return "<!-- Either wrong module/function or function script file does not exist for $module_name, $function_name -->";
            }
        } else {
            return "<!-- No such function or function is not accessible for $module_name, $function_name -->";
        }

        return ob_get_clean();
    }

    /**
     * get SJB_Function instance by function name and module name
     *
     * @param $function_name
     * @param $module_name
     * @param array $params
     * $param int $aclRoleID
     * @return SJB_Function
     */
    public function getFunction($function_name, $module_name, $params = array())
    {
        $aclRoleID = null;
        $adminAccessType = SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE') == SJB_System::getSystemSettings('ADMIN_ACCESS_TYPE');
        $accessTypePrefix = $adminAccessType ? 'Admin_' : '';

        $acl = SJB_Acl::getInstance();

        $functionPart = $this->getCamelCaseName($function_name);
        $modulePart = $this->getCamelCaseName($module_name);
        $className = 'SJB_' . $accessTypePrefix . $modulePart . '_' . $functionPart;
        return new $className($acl, $params, $aclRoleID);
    }

    public function getCamelCaseName($old_name)
    {
        $functionParts = explode('_', strtolower($old_name));
        $functionParts = array_map('ucfirst', $functionParts);
        return implode('', $functionParts);
    }


    function getFunctionScriptFilename($module_name, $function_name)
    {
        if (isset ($this->modules[$module_name]['functions'][$function_name])) {
            $script_path = $this->modules[$module_name]['functions'][$function_name]['script'];
            return SJB_PathManager::getAbsoluteFunctionScriptPath($module_name, $script_path);
        }
        return null;
    }

    function prepareFunctionEnvironment($parameters)
    {
        array_push($this->prev_requests, $_REQUEST);
        if (is_array($parameters)) {
            foreach ($parameters as $key => $value)
                $_REQUEST[$key] = $value;
        }
    }

    function getCurrentModuleAndFunction()
    {
        return $this->getCurrentFunction();
    }

    function restoreEnvironment()
    {
        $c = count($this->prev_requests);
        if ($c > 0)
            $_REQUEST = array_pop($this->prev_requests);
    }

    function pushExecutionStack($module_name, $function_name)
    {
        array_push($this->call_stack, [$module_name, $function_name]);
    }

    function popExecutionStack()
    {
        array_pop($this->call_stack);
    }

    function getCurrentFunction()
    {
        $c = count($this->call_stack);
        if ($c > 0)
            return $this->call_stack[$c - 1];
        return null;
    }

    function isFunctionAccessible($module, $function)
    {
        if ($this->doesModuleExists($module)) {
            $function_access_type = $this->getFunctionAccessType($module, $function);
            if (!is_array($function_access_type))
                $function_access_type = [$function_access_type];
            $current_access_type = SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE');
            if ($current_access_type == SJB_System::getSystemSettings('ADMIN_ACCESS_TYPE')
                || in_array($current_access_type, $function_access_type)
            )
                return true;
        }
        return false;
    }

    function doesFunctionHaveRawOutput($module, $function)
    {
        if (isset($this->modules[$module]) && isset($this->modules[$module]['functions'][$function])) {
            if (isset($this->modules[$module]['functions'][$function]['raw_output']))
                return $this->modules[$module]['functions'][$function]['raw_output'];
            return false;
        }
        return null;
    }

    function readModuleConfigs()
    {
        $modulesPath = SJB_PathManager::getAbsoluteModulesPath();

        $iterator = new DirectoryIterator($modulesPath);
        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isDir() && !in_array($fileinfo->getFilename(), [".", ".."]))
                $this->includeModule($fileinfo->getPath(), $fileinfo->getFilename());
        }
    }

    function executeStartupScript($module_name)
    {
        $module_startup_scripts = $this->getModuleSetting($module_name, 'startup_script');
        if (isset($module_startup_scripts[SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE')])) {
            $module_startup_script = $module_startup_scripts[SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE')];
            if ($module_startup_script instanceof Closure) {
                $module_startup_script();
            } else {
                $this->executeFunction($module_name, $module_startup_script);
            }
        }
    }

    function getModuleSetting($module, $setting)
    {
        if (isset ($this->modules[$module][$setting]))
            return $this->modules[$module][$setting];
        return null;
    }

    function includeModule($path, $name)
    {
        $this->modules[$name] = require($path . DIRECTORY_SEPARATOR . $name . DIRECTORY_SEPARATOR . 'config.php');
    }

    function addFunction($module, $function, $config)
    {
        $this->modules[$module]['functions'][$function] = $config;
    }

    function executeModulesStartupFunctions()
    {
        foreach ($this->modules as $module => $parameters)
            $this->executeStartupScript($module);
    }

    function getModulesList()
    {
        return array_keys($this->modules);
    }

    function getFunctionsList($module)
    {
        return array_keys($this->modules[$module]['functions']);
    }

    function getParamsList($module, $function)
    {
        if (isset($this->modules[$module]['functions'][$function]['params']))
            return $this->modules[$module]['functions'][$function]['params'];
    }

    function getFunctionAccessSystem($module_name, $function_name)
    {
        if (isset ($this->modules[$module_name]['functions'][$function_name]))
            if (isset ($this->modules[$module_name]['functions'][$function_name]['system']))
                return $this->modules[$module_name]['functions'][$function_name]['system'];
        return false;
    }

    function getModuleOfCommand($command)
    {
        foreach ($this->modules as $module_name => $module) {
            if (isset($module['commands'])) {
                foreach ($module['commands'] as $command_name => $command_info)
                    if (strtolower($command) == strtolower($command_name))
                        return $module_name;
            }
        }
    }

    function getRegisteredCommands()
    {
        $commands = array();
        foreach ($this->modules as $module)
            if (isset($module['commands']))
                $commands = array_merge($commands, $module['commands']);
        return $commands;
    }

    function getCommandScriptAbsolutePath($module, $command)
    {
        $script_name = $this->_getCommandScriptName($module, $command);
        if ($script_name)
            return SJB_PathManager::getAbsoluteCommandsPath($module) . $script_name;
    }

    function _getCommandScriptName($module, $command)
    {
        if (isset($this->modules[$module]['commands'])) {
            foreach ($this->modules[$module]['commands'] as $command_name => $command_info) {
                if (strtolower($command_name) == strtolower($command))
                    return $command_info['script'];
            }
        }
        return null;
    }
}
