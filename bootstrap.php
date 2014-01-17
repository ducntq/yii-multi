<?php

define('DS', DIRECTORY_SEPARATOR);

class ConfigLoader
{
    /**
     * Thư mục config hiện tại
     *
     * @var string
     */
    private $_currentDir = '';

    /**
     * Môi trường hiện tại
     *
     * @var string
     */
    private $_currentEnv = 'local';

    /**
     * Thư mục chứa config
     *
     * @var string
     */
    private $_configDir = '';

    /**
     * Thư mục chứa config môi trường
     *
     * @var string
     */
    private $_envConfigDir = '';

    /**
     * Khởi tạo ConfigLoader với thư mục hiện tại
     *
     * @param $currentDir
     */
    public function __construct($currentDir = __DIR__)
    {
        $this->_currentDir = $currentDir;

        $this->_currentEnv = self::getEnv();

        $this->_configDir = $this->_currentDir;
        $this->_envConfigDir = $this->_configDir . DIRECTORY_SEPARATOR . $this->_currentEnv;
    }

    public function loadConfig($configName)
    {
        $configPath = $this->_configDir . DIRECTORY_SEPARATOR . $configName . '.php';
        $config = require($configPath);
        $envConfigPath = $this->_envConfigDir . DIRECTORY_SEPARATOR . $configName . '.php';
        if (is_file($envConfigPath)) {
            $envConfig = require($envConfigPath);
            $config = array_merge_recursive($config, $envConfig);
        }
        return $config;
    }

    public static function getEnv()
    {
        if (defined('ENV_CONSOLE') && ENV_CONSOLE && !YII_DEBUG) return 'production';
        else if (defined('ENV_CONSOLE') && ENV_CONSOLE && YII_DEBUG) return 'local';
        return (isset($_SERVER['2VOI_ENV']) && !empty($_SERVER['2VOI_ENV'])) ? $_SERVER['2VOI_ENV'] : 'local';
    }
}