<?php

/* @var $this yii\web\View */

$this->title = 'Статьи';
?>
<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <div class="row">
            <div id="main-content" class="col-2-3">
                <section class="all">
                    <div class="header">
                       <center> <h1><b>Статьи</b></h1></center>
                    </div>
                    <div class="header">
                        <center> <h1><b>Реклама Гугл!!!</b></h1></center>
                    </div>


                    <?php
                    foreach ($articles as $article)
                    include "intro_articles.php";
                    ?>

                    <div class="header">
                        <center> <h1><b>Реклама Гугл!!!</b></h1></center>
                    </div>

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
                        <center><h1><b>Реклама Гугл!!! / Реклама Гугл \ Реклама Гугл \Реклама Гугл \ Реклама Гугл!!!</b></h1></center>
                    </div>

                    <?php
                    foreach ($artMenuRights as $artMenuRight)
                        include "intro_right_menu_articles.php";
                    ?>


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