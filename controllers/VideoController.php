<?php

namespace app\controllers;

class VideoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

}
