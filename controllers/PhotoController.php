<?php

namespace app\controllers;

use app\models\Photo;
use yii\data\Pagination;
use Yii;

class PhotoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Photo::find()->where(['hide' => 1]);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count()
        ]);

        $photos = $query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'photos' => $photos,
            'active_page' => \Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);

    }

}
