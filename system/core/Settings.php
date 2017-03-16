<?php

class SJB_Settings
{
    private static $settings = [];

    public static function isLoaded()
    {
        return !empty(self::$settings);
    }

    public static function addSetting($name, $value)
    {
        if (!self::isLoaded())
            self::loadSettings();
        self::$settings[$name] = $value;
        return SJB_DB::query("INSERT INTO `settings` SET `name` = ?s, `value` = ?s", $name, $value);
    }

    public static function loadSettings()
    {
        self::$settings = [];
        $settingsInfo = SJB_DB::query("SELECT `name`, `value` FROM `settings`");
        foreach ($settingsInfo as $settingInfo)
            self::$settings[$settingInfo['name']] = $settingInfo['value'];
    }

    public static function getSettings()
    {
        if (!self::isLoaded())
            self::loadSettings();
        return self::$settings;
    }

    public static function updateSettings($settings)
    {
        if (!self::isLoaded())
            self::loadSettings();

        foreach ($settings as $name => $value) {
            // convert array value to string for multilist
            if (is_array($value)) {
                $value = implode(',', $value);
            }
            if (self::getValue($name, false) === false) {
                self::addSetting($name, $value);
            } else {
                SJB_DB::query("UPDATE `settings` SET `value` = ?s WHERE `name` = ?s", $value, $name);
            }

            self::$settings[$name] = $value;
        }
    }

    public static function getSettingByName($name)
    {
        if (!self::isLoaded())
            self::loadSettings();
        if (isset(self::$settings[$name]))
            return self::$settings[$name];
        return false;
    }

    public static function updateSetting($name, $value)
    {
        if (!self::isLoaded())
            self::loadSettings();
        self::$settings[$name] = $value;
        return SJB_DB::query("UPDATE `settings` SET `value` = ?s WHERE `name` = ?s", $value, $name);
    }

    public static function setValue($name, $value)
    {
        self::updateSetting($name, $value);
    }

    public static function getValue($name, $default = "")
    {
        $setting = self::getSettingByName($name);
        if ($setting === false)
            return $default;
        return $setting;
    }

    public static function changeValue($name, $value)
    {
        if (isset(self::$settings[$name])) {
            self::$settings[$name] = $value;
        }
    }

    public static function deleteSetting($name)
    {
        return SJB_DB::query('DELETE FROM `settings` WHERE `name` = ?s', $name);
    }

    public static function saveSetting($name, $value)
    {
        if (self::getValue($name, false) !== false) {
            return self::updateSetting($name, $value);
        } else {
            return self::addSetting($name, $value);
        }
    }

    public static function updateCustomDomainRedirect()
    {
        SJB_Settings::saveSetting(
            'force_custom_domain',
            gethostbyname(self::getValue('domain')) == SJB_System::getSystemSettings('env')['SJB']['sites_ip']
        );
    }
}
