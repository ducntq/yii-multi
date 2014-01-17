<?php
return array(
    'global' => array(
        'basePath' => SITE_BASE_PATH,
        'css' => array(),
        'js' => array(),
        'depends' => array('jquery', 'bootstrap', 'font-awesome')
    ),
    'jquery' => array(
        'basePath' => SITE_BASE_PATH,
        'js' => array('vendors/jquery/jquery-1.10.2.min.js')
    ),
    'bootstrap' => array(
        'basePath' => SITE_BASE_PATH,
        'js' => array('vendors/bootstrap/js/bootstrap.min.js'),
        'css' => array('vendors/bootstrap/css/bootstrap.min.css'),
        'depends' => array('jquery')
    ),
    'font-awesome' => array(
        'basePath' => SITE_BASE_PATH,
        'css' => array('vendors/font-awesome/css/font-awesome.min.css')
    )
);