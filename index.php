<?php
require_once 'bootstrap.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

if (ConfigLoader::getEnv() == 'local') {
    $yii = dirname(__FILE__) . '/../yii-1.1.13/framework/yii.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}
else {
    $yii = dirname(__FILE__) . '/yii-1.1.13/framework/yii.php';
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}

require_once($yii);
Yii::createWebApplication($config)->run();