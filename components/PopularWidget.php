<?php
namespace app\components;
use app\models\Video;
use yii\base\Widget;
use Yii;

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 09.10.2016
 * Time: 17:27
 */

class PopularWidget extends Widget{

    public $tpl;
    public $data;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
      //  if($this->tpl === null){
      //      $this->tpl = 'popular_tpl';//
       // }
      //  $this->tpl .= '.php';
    }

    public function run()
    {

       // $this->data = Video::find()->all();
      //  return  $this->tpl;
        return $this->render('popular');
    }
}