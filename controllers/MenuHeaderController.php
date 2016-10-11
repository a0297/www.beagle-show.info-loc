<?php

namespace app\controllers;
use app\models\MenuHeader;
class MenuHeaderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = MenuHeader::find();
        $menus = $query->all();
        return $this->render('index',
            ['menus' => $menus]);
        }

    public function actionVideo()
    {

        return $this->render('video');
    }
}