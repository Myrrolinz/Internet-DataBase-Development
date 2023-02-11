<?php
/**
 * Team:ddl驱动队,NKU
 * coding by sunyiqi 2012810,20230207
 * default action
 */
namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
