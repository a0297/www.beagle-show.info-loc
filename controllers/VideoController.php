<?php

namespace app\controllers;

use app\models\Video;
use yii\data\Pagination;
use Yii;

class VideoController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $query = Video::find()->where(['hide' => 1]);
        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count()
        ]);

        $videos = $query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'videos' => $videos,
            'active_page' => \Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);



    }

    public function actionSingle()
    {
        return $this->render('single');
    }

}
