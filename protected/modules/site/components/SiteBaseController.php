<?php
class SiteBaseController extends BaseController
{
    public function beforeAction($action)
    {
        parent::beforeAction($action);
        return true;
    }
}