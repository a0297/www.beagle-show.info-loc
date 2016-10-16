<?php

namespace app\controllers;

use app\models\Articles;
use yii\data\Pagination;
use Yii;

class ArticlesController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $query = Articles::find()->where(['hide' => 1]);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count()
        ]);

        $articles = $query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
//Articles::setNumbers($articles);

        //right menu
        $artMenu = Articles::find()->where(['hide' => 1]);
        $artMenuRights = $artMenu->orderBy(['date' => SORT_DESC])
            ->all();
        //end right menu



        //Полная стать, вывод полной статьи
        //One articles
      //  $artOne = Articles::find()->where(['hide' => 1]);




        return $this->render('index',[
            'articles' => $articles,
            'artMenuRights' => $artMenuRights,
           // 'artOne' => $artOne,
            'active_page' => \Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function action1()
    {
        return $this->render('1');
    }

}
