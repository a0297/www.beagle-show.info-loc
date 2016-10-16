
<div class="row">
    <div class="col-1-4">
        <div class="wrap-col">
            <div class="wrap-vid">
                <h3 class="vid-name"><a href="<?= $video->video ?>"><?= $video->title ?></a></h3>

                <iframe width="125%" height="400" src="<?= $video->video ?>" frameborder="0" allowfullscreen></iframe>
                <div class="tags">
                    <a ><?= $video->tags_1 ?></a>
                    <a ><?= $video->tags_2 ?></a>
                    <a ><?= $video->tags_3 ?></a>
                    <a ><?= $video->tags_4 ?></a>
                    <a ><?= $video->tags_5 ?></a>

                </div>

               <div class="info">
                    <h5>By <a href="<?= $video->video ?>"><?= $video->author ?></a></h5>
                    <span><i class="fa fa-calendar"></i><?= $video->date ?></span>
                   <!-- <span><i class="fa fa-heart"></i>1,200</span>-->

                </div>

            </div>
        </div>
    </div>


</div>
<hr>