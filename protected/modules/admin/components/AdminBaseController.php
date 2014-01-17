<?php
class AdminBaseController extends CController {
    /** @var CClientScript */
    public $clientScript;

    public function beforeAction($action)
    {
        $this->layout = 'main';
        $this->clientScript = Yii::app()->clientScript;

        return true;
    }
}