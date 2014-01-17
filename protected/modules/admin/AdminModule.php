<?php

class AdminModule extends CWebModule
{
    public function init()
    {
        // import các thành phần cơ bản
        $this->setImport(array(
                'admin.components.AdminBaseController'
            ));

        // tự động import từ config/import.php
        $autoImport = require(Yii::getPathOfAlias('admin.config') . DS . 'import.php');
        if ($autoImport) $this->setImport($autoImport);

        Yii::app()->clientScript->packages = require(Yii::getPathOfAlias('admin.config') . DS . 'packages.php');

        Yii::app()->clientScript->coreScriptPosition = CClientScript::POS_END;
    }

    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            Yii::app()->errorHandler->errorAction = 'admin/error/index';
            return true;
        }
        else
            return false;
    }
}