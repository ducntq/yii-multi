<?php

class ApplicationBehavior extends CBehavior {
    public function attach($owner)
    {
        // nếu môi trường ko phải là console
        if (!defined('ENV_CONSOLE') || !ENV_CONSOLE) {
            $owner->attachEventHandler('onBeginRequest', array($this, 'prepareAssets'));
        }
        else {

        }
    }

    public function prepareAssets($event)
    {
        /** @var CClientScript $cs */
        $cs = Yii::app()->clientScript;
        $cs->registerPackage('global');
    }
} 