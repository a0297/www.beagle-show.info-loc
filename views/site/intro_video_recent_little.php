<div class="item wrap-vid">
    <div class="zoom-container">
        <a href="<?= $videos_recent->video ?>">


        </a>
        <iframe width="100%" height="125" src="<?= $videos_recent->video ?>" frameborder="0" allowfullscreen></iframe>

    </div>
    <h3 class="vid-name"><?= $videos_recent->title ?></h3>
    <div class="info">
        <h5>By <?= $videos_recent->author ?></h5>
        <span><i class="fa fa-calendar"></i><?= $videos_recent->date ?></span>
       <!-- <span><i class="fa fa-heart"></i>1,200</span>-->
    </div>
</div>