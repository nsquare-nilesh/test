<?php

return [
    'SL-314', function() {
        SJB_Settings::saveSetting('topresume_audience', '');
        $success = true;
        foreach (['de', 'en', 'es', 'fr', 'ru', 'nl', 'ro'] as $lang) {
            $langFile = SJB_BASE_DIR . "languages/{$lang}.pages.xml";
            if (!file_exists($langFile)) {
                continue;
            }
            $contents = file_get_contents($langFile);
            $contents = str_replace('TopResume', '$job_board_audience', $contents);
            $success &= (bool) file_put_contents($langFile, $contents);
        }
        return $success;
    },
    '5.0.12', function() {
        ThemeManager::compileStyles();
        SJB_TemplateProcessor::deleteCache();
        return true;
    },
];
