<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       //'css/site.css',
        //'css/bootstrap.css',
      //  'css/style.css',
      //  'css/chocolat.css'
        'css/menu.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/style.css',
        'css/zerogrid.css',
        'font-awesome/css/font-awesome.css',
        'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
      //  'js/jquery.chocolat.js',
      //  'js/jquery.min.js',
       // 'js/menu_jquery.js',
      //  'application/x-javascript'
        'js/classie.js',
        'js/css3-mediaqueries.js',
        'js/demo.js',
        'js/html5.js',
        'js/jquery-2.1.1.js',
        'js/owl.carousel.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
