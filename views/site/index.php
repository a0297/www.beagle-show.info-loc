<?php

/* @var $this yii\web\View */

$this->title = 'Бигли-Шмигли';
?>
<section id="container" class="index-page" xmlns="http://www.w3.org/1999/html">
    <div class="wrap-container zerogrid">
        <!------------------------------------->
        <div class="row">

            <div class="header">
                <h2>New !!! || Новинка!!!</h2>
            </div>

            <div class="row">

            <?php
          // foreach ($main_desc_videos as $main_desc_video)
                include "intro_video_recent.php";
            ?>


                <div class="most-viewed">

                    <div class="col-2-4">
                        <div class="wrap-col">
                            <div class="zoom-container">
                                <div class="main_text_title">
                                <h1><b>Beagle - Show!!! Бигли Шмигли)))</b></h1>
                                    </div>
                                <br>
                               <div class="main_text_ru">
                                <h3><b>Мечтаешь о Бигле? или уже являешся счастливым обладателем этой породы???</b></h3>
                               <h3> <b>Смотрите видео собак, породы Бигль!!!</b></h3>
                                   <h3><b>Для Вас мы собираем САМЫЕ интерестные видео, и подборки.</b></h3>
                                       <h3><b>Приятного просмотра!!!</b></h3>
                                </div>
                                <br>

                            <div class="main_text_en">
                                        <h3><b>  Do you dream of Beagle, or are already a proud owner of this breed ???</b></h3>
                                        <h3><b>See videos of dogs, beagle !!!</b></h3>
                                        <h3><b>For you, we collect the most interesting videos and collections.</b></h3>
                                        <h3><b>Enjoy watching!!!</b></h3>

                                </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <div class="row">
            <div id="main-content" class="col-2-3">
                <div class="wrap-content">


                    <section class="vid-tv">
                        <div class="header">
                            <h2>Реклама Гугл</h2>
                        </div>
                        <div class="header">
                            <h2>Recent video || Последние видео</h2>
                        </div>

                        <div class="row">
                            <div id="owl-demo-1" class="owl-carousel">


                                <?php
                                foreach ($videos_recents as $videos_recent)
                                include "intro_video_recent_little.php";
                                ?>

                            </div>
                        </div>

                    </section>






                    <section class="vid-sport">
                        <div class="header">
                            <h2>Video in Russian || Видео на русском языке</h2>
                        </div>
                        <div class="row"><!--Start Box-->
                            <div id="owl-demo-2" class="owl-carousel">



                                <?php
                                foreach ($videos_russ as $videos_rus)
                                    include "intro_video_rus.php";
                                ?>



                            </div>
                        </div>
                    </section>




                    <section class="vid-music">
                        <div class="header">
                            <h2>Video in English || Видео на английском языке </h2>
                        </div>
                        <div class="row"><!--Start Box-->
                            <div id="owl-demo-3" class="owl-carousel">








                                <?php
                                foreach ($videos_engs as $videos_eng)
                                    include "intro_videos_eng.php";
                                ?>






                            </div>
                        </div>
                    </section>


                </div>
            </div>





            <div id="sidebar" class="col-1-3">
                <!--
                <form id="form-container" action="">
                    <!--<input type="submit" id="searchsubmit" value="" />-->
                <!--
                <a class="search-submit-button" href="javascript:void(0)">
                    <i class="fa fa-search"></i>
                </a>
                <div id="searchtext">
                    <input type="text" id="s" name="s" placeholder="Search Something...">
                </div>
            </form>
            -->

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
                                    <img src="/images/4.jpg" />
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
                                    <img src="/images/14.jpg" />
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
                                    <img src="/images/3.jpg" />
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
