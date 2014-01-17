<?php
return array(
    'urlManager' => array(
        'urlFormat' => 'path',
        'showScriptName' => false,
        'rules' => require(dirname(__FILE__).'/rewrite.php'),
    ),

    'errorHandler' => array(
        'errorAction'=>'error/index',
    ),

    'log' => array(
        'class' => 'CLogRouter',
        'routes'=> array(
            array(
                'class'=>'CFileLogRoute',
                'levels'=>'error,warning',
            )
        ),
    ),

    'clientScript' => array(
        'scriptMap' => array(
            'jquery.js' => false,
            'jquery.ajaxqueue.js' => false,
            'jquery.metadata.js' => false,
        ),
        'coreScriptPosition' => CClientScript::POS_HEAD,
        //'packages' => require(__DIR__ . '/packages.php')
    ),

    // db cho môi trường local
    'db'=> array(
        'class'=>'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=2voi',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => '12345678',
        'charset' => 'utf8',
        'enableProfiling'=> true,
        'schemaCacheID' => 'cache',
        'schemaCachingDuration' => 0
    ),

    // cache giả cho môi trường local
    'cache' => array(
        'class' => 'CDummyCache'
    )
);