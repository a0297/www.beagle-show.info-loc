<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Video;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }






    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAboutBeagel()
    {
        return $this->render('aboutbeagel');
    }



    public function actionIndex()
    {
        $query_text = Video::find()->where(['hide' => 1]);
        //  $pagination = new Pagination([
        //      'defaultPageSize' => 4,
        //      'totalCount' => $query->count()
        //  ]);

        $main_desc_videos = $query_text->orderBy(['date' => SORT_DESC])

            ->one();


        $query = Video::find()->where(['hide' => 1]);
      //  $pagination = new Pagination([
      //      'defaultPageSize' => 4,
      //      'totalCount' => $query->count()
      //  ]);

        $videos_recents = $query->orderBy(['date' => SORT_DESC])

            ->all();


        //Video RUS
        $query_russ = Video::find()->where(['rus' => 1]);
        //  $pagination = new Pagination([
        //      'defaultPageSize' => 4,
        //      'totalCount' => $query->count()
        //  ]);

        $videos_russ = $query_russ->orderBy(['date' => SORT_DESC])

            ->all();


        //Video ENG
        $query_eng = Video::find()->where(['eng' => 1]);
        //  $pagination = new Pagination([
        //      'defaultPageSize' => 4,
        //      'totalCount' => $query->count()
        //  ]);

        $videos_engs = $query_eng->orderBy(['date' => SORT_DESC])

            ->all();


        return $this->render('index',[
            'main_desc_videos' => $main_desc_videos,
            'videos_recents' => $videos_recents,
            'videos_russ'    => $videos_russ,
            'videos_engs'     => $videos_engs,

        ]);
    }
}
