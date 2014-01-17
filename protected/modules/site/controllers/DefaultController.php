<?php

class DefaultController extends SiteBaseController {
    public function actionIndex()
    {
        $this->render('index');
    }
} 