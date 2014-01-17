<?php
/**
 * Do not modify this file unless you're know what you're doing
 */
$configLoader = new ConfigLoader(__DIR__);

return array(
    'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
    'name' => '2voi CMS',
    'sourceLanguage' => 'en_US',

    'preload' => array('log'),

    'import' => $configLoader->loadConfig('import'),

    'modules' => $configLoader->loadConfig('modules'),

    'components' => $configLoader->loadConfig('components'),

    'params' => $configLoader->loadConfig('params'),

    'behaviors' => $configLoader->loadConfig('behaviors')
);