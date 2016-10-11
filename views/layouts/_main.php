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
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!---->

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--header-->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="/images/logo.png" alt="" ></a>
        </div>
        <div class="head-right">
            <div class="head-grid">
                <ul>
                    <li ><span>+125775858</span></li>
                    <li ><span>+1486754582</span></li><label>|</label>
                    <li><div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                            <div id="loginBox">
                                <form id="loginForm">
                                    <fieldset id="body">
                                        <fieldset>
                                            <label for="email">Email Address</label>
                                            <input type="text" name="email" id="email">
                                        </fieldset>
                                        <fieldset>
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password">
                                        </fieldset>
                                        <input type="submit" id="login" value="Sign in">
                                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                    </fieldset>
                                    <span><a href="#">Forgot your password?</a></span>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="/images/menu.png" alt=""> </span>
                <ul>




                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery<edX/a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <div class="clearfix"> </div>
                </ul>

                <!--script-->
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
                </script>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//header-->
<div class="banner">
    <div class="banner-1"> </div>
    <div class="container">
        <div class="banner-top">
            <div class="col-sm-6 head-banner">
                <h1>Lorem <span>&</span> Ipsum</h1>
                <h4>It is a long established fact that a reader</h4>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Latin literature from 45 BC.</p>
            </div>
            <div class="col-sm-6 banner-head1">
                <img src="/images/dog1.png" class="img-responsive" alt="">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>



<!--content-->
<?=$content?>



<!--footer-->
<div class="footer ">
    <div class="footer-1"> </div>
    <div class="container">
        <div class="footer_top">
            <div class="col-md-3 footer-head">
                <h4>Navigation</h4>
                <ul class="list1">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-3 footer-head">
                <h4>Recent News</h4>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="/images/te.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam.</a> </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="/images/te2.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam.</a> </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="footer-new">
                    <div class="footer-new1">
                        <a href="single.html"><img src="/images/te3.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="footer-new2">
                        <p><a href="single.html">Masagni dolores eoquie voluptaquisquam. </a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 footer-head">
                <h4>Follow Us</h4>
                <ul class="socials">
                    <li><a href="#"><i ></i></a></li>
                    <li><a href="#"><i class="dribbble"></i></a></li>
                    <li><a href="#"><i class="twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-head1">
                <h4>Location</h4>
                <p><b>Company Name</b></p>
                <p>Masagni dolores</p>
                <p>+17478895959</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="footer-bottom">
            <p> © 2015 Fidele. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>
    </div>
</div>
<!--//footer-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>