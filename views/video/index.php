<?php

/* @var $this yii\web\View */

$this->title = 'Все Видео';
?>

<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <div class="row">

            <div id="main-content" class="col-2-3">
                <section class="all">
                    <div class="header">
                        <h2>All Post || Все Видео</h2>
                    </div>



                    <?php
                    foreach ($videos as $video)
                        include "intro_video.php";
                    ?>



                </section>

                <span><center>Страница № <?= $active_page ?>  из <?= $count_pages ?> </center></span>
                <div class="clear"></div>
                <div class="navigation">
                    <?= \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                        'firstPageLabel' => 'В начало',
                        'lastPageLabel' => 'В конец',
                        'prevPageLabel' => '&laquo;'

                    ]) ?>



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

                <?= \app\components\PopularWidget::widget() ?>

            </div>
        </div>
    </div>
</section>
