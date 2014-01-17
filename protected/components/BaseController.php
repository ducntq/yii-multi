<?php
class BaseController extends CController
{
    /** @var CClientScript */
    public $clientScript;

    public function beforeAction($action)
    {
        $this->layout = 'main';
        $this->clientScript = Yii::app()->clientScript;

        return true;
    }
}