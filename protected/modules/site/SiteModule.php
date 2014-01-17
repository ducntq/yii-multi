<?php

class SiteModule extends CWebModule
{
    public function init()
    {
        //var_dump(Yii::getPathOfAlias('site.config') . DS . 'packages.php');die();
        // import các thành phần cơ bản
        $this->setImport(array(
            'site.components.SiteBaseController'
        ));

        // tự động import từ config/import.php
        $autoImport = require(Yii::getPathOfAlias('site.config') . DS . 'import.php');
        if ($autoImport) $this->setImport($autoImport);

        Yii::app()->clientScript->packages = require(Yii::getPathOfAlias('site.config') . DS . 'packages.php');

        Yii::app()->clientScript->coreScriptPosition = CClientScript::POS_END;
    }

    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            Yii::app()->errorHandler->errorAction = 'site/error/index';
            return true;
        }
        else
            return false;
    }
}