<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<a href="#" class="nav-toggle">Toggle Navigation</a>

<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <div class="row">
            <div id="main-content" class="col-2-3">
                <div class="contact">

                    <h2>Contact</h2>

                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'subject') ?>

                            <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>

                </div>
            </div>
            <div id="sidebar" class="col-1-3">
                <form id="form-container" action="">
                    <!--<input type="submit" id="searchsubmit" value="" />-->
                    <a class="search-submit-button" href="javascript:void(0)">
                        <i class="fa fa-search"></i>
                    </a>
                    <div id="searchtext">
                        <input type="text" id="s" name="s" placeholder="Search Something...">
                    </div>
                </form>
                <!---- Start Widget ---->
                <div class="widget wid-post">
                    <div class="wid-header">
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="wid-content">
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                    <img src="images/4.jpg" />
                                </a>
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                    <img src="images/14.jpg" />
                                </a>
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <a href="single.html">
										<span class="zoom-caption">
											<i class="icon-play fa fa-play"></i>
										</span>
                                    <img src="images/3.jpg" />
                                </a>
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-news">
                    <div class="wid-header">
                        <h5>Top News</h5>
                    </div>
                    <div class="wid-content">
                        <div class="row">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                        <img src="images/1.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name">Video's Name</h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                        <img src="images/2.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name">Video's Name</h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="wrap-vid">
                                <div class="zoom-container">
                                    <a href="single.html">
											<span class="zoom-caption">
												<i class="icon-play fa fa-play"></i>
											</span>
                                        <img src="images/4.jpg" />
                                    </a>
                                </div>
                                <h3 class="vid-name">Video's Name</h3>
                                <div class="info">
                                    <h5>By <a href="#">Kelvin</a></h5>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
