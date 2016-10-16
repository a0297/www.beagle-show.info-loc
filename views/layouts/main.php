<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="ru"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="ru"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="ru"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="/http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body id="wrapper" >
<?php $this->beginBody() ?>

<div class="wrap-body">

    <!--////////////////////////////////////Header-->
    <header>

        <div class="wrap-header">
            <div class="zerogrid">
                <div class="row">
                    <a href="/" class="logo"><img src="/images/logo.png" /></a>
                    <ul class="quick-link">
                        <a href="/" class="logo"><img src="/images/logo2.png" /></a>

                        <!--  <li><a href="#" title="Upload Video"><i class="fa fa-upload"></i></a></li>
                          <li><a href="#" title="Log in"><i class="fa fa-user"></i></a></li>
                          <li><a href="#" title="Warning"><i class="fa fa-bell"></i></a></li>-->
                    </ul>
                    <ul class="social">
                     <!--   <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                        <li><a href="https://www.facebook.com/groups/1159155224155508/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a></li>
                     <!--   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                        <!--  <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                      </ul>
                  </div>
              </div>
          </div>
          <div class="bottom">

          </div>
      </header>
      <!--////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
        <ul class="clearfix">
            <li class="colour-1"><a href="/">Главная</a></li>
            <li class="colour-2"><a href="http://www.beagle-show.loc/site/about-beagel/"> Про биглей</a></li>
            <li class="colour-3"><a href="http://www.beagle-show.loc/video/">Видео</a></li>
            <li class="colour-4"><a href="http://www.beagle-show.loc/photo/">Фото</a></li>
            <li class="colour-5"><a href="/">Блог</a></li>
            <li class="colour-6"><a href="http://www.beagle-show.loc/articles/">Статьи</a></li>
            <li class="colour-7"><a href="http://www.beagle-show.loc/site/about/"> О Нас</a></li>
            <li class="colour-8"><a href="http://www.beagle-show.loc/site/contact/"> Контакты</a></li>
        </ul>
    </nav>



    <!--////////////////////////////////////Container-->
    <?= $content?>

    <!--////////////////////////////////////Footer-->
    <footer>
        <div class="zerogrid top-footer">
            <div class="row">
                <div class="col-1-5">
                    <a href="#"><img src="/images/15.jpg" /></a>
                </div>
                <div class="col-1-5">
                    <a href="#"><img src="/images/16.jpg" /></a>
                </div>
                <div class="col-1-5">
                    <a href="#"><img src="/images/17.jpg" /></a>
                </div>
                <div class="col-1-5">
                    <a href="#"><img src="/images/18.jpg" /></a>
                </div>
                <div class="col-1-5">
                    <a href="#"><img src="/images/19.jpg" /></a>
                </div>
            </div>
        </div>


        <div class="zerogrid copyright">
            <div class="wrapper">
                Copyright 2016 - <a href="" target="_blank" rel="nofollow">All about Beagle</a>
                <ul class="quick-link f-right">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Slider -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/classie.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo-1").owlCarousel({
                items : 4,
                lazyLoad : true,
                navigation : true
            });
            $("#owl-demo-2").owlCarousel({
                items : 4,
                lazyLoad : true,
                navigation : true
            });
            $("#owl-demo-3").owlCarousel({
                items : 4,
                lazyLoad : true,
                navigation : true
            });
        });
    </script>
</div>
<?php $this->endBody() ?>
</body></html>
<?php $this->endPage() ?>