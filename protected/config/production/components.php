<?php
return array(
    // db cho môi trường production
    'db'=> array(
        'class'=>'CDbConnection',
        'connectionString' => 'mysql:host=localhost;dbname=2voi',
        'emulatePrepare' => true,
        'username' => '2voi',
        'password' => '12345678',
        'charset' => 'utf8',
        'enableProfiling'=> true,
        'schemaCacheID' => 'cache',
        'schemaCachingDuration' => 100000
    ),

    // cache giả cho môi trường production
    'cache' => array(
        'class' => 'CFileCache'
    )
);