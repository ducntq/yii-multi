<?php
require_once 'bootstrap.php';
define('ENV_CONSOLE', true);
$config = dirname(__FILE__) . '/protected/config/main.php';

$yii = dirname(__FILE__) . '/../yii-1.1.13/framework/yii.php';
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createConsoleApplication($config)->run();