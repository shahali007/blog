<?php include_once "header.php"; ?>
<div class="main">
    <h3 class="heading">
        <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i>
        <a href="<?php echo $sUrl;?>category.php">Category</a><i class="fa fa-angle-right"></i>
    </h3>
    <div class="row">
        <div class="col-sm-8" style="padding-right:0;">
            <div class="border">
                <div class="details">
                    <article>
                        <h1>PHP Fundamentals Tutorial (Bangla)</h1>
                        <div class="details-time"><i class="fa fa-calendar"></i> 23 July 2017, by <a href="#">Shahali Bogdadi</a></div>
                        <img style="width:100%;" src="https://www.jagonews24.com/media/imgAll/2017July//gas-3-20170727090918.jpg" alt="Shahali007">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores et explicabo fuga tempora voluptatibus. Alias animi, culpa doloremque et laudantium libero minima molestias nemo nihil odio perspiciatis placeat possimus praesentium sunt ullam veritatis vitae. Alias culpa dicta ex in, incidunt magni, numquam officiis perspiciatis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores et explicabo fuga tempora voluptatibus. Alias animi, culpa doloremque et laudantium libero minima molestias nemo nihil odio perspiciatis placeat possimus praesentium sunt ullam veritatis vitae. Alias culpa dicta ex in, incidunt magni, numquam officiis perspiciatis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores et explicabo fuga tempora voluptatibus. Alias animi, culpa doloremque et laudantium libero minima molestias nemo nihil odio perspiciatis placeat possimus praesentium sunt ullam veritatis vitae. Alias culpa dicta ex in, incidunt magni, numquam officiis perspiciatis.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores et explicabo fuga tempora voluptatibus. Alias animi, culpa doloremque et laudantium libero minima molestias nemo nihil odio perspiciatis placeat possimus praesentium sunt ullam veritatis vitae. Alias culpa dicta ex in, incidunt magni, numquam officiis perspiciatis.
                        </p>
                    </article>
                </div>
                <div class="related">
                    <h3 class="heading">Related Articles</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p><a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p><a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p><a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p><a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p><a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="border">
                <h3 class="heading">Categories</h3>
                <ul class="category-list">
                    <li><a href="#">Cras justo odio</a></li>
                    <li><a href="#">Dapibus ac facilisis in</a></li>
                    <li><a href="#">Morbi leo risus</a></li>
                    <li><a href="#">Porta ac consectetur ac</a></li>
                    <li><a href="#">Vestibulum at eros</a></li>
                </ul>
            </div>
            <div class="border" style="margin-top:30px;">
                <h3 class="heading">Latest Articles</h3>
                <div class="latest-list">
                    <?php for($i=0; $i<5; $i++){ ?>
                        <article class="media">
                            <div class="media-left">
                                <div class="img-box">
                                    <img class="media-object" src="https://www.jagonews24.com/media/imgAll/2017July//gas-3-20170727090918.jpg" alt="Shahali007">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">PHP Fundamentals Tutorial (Bangla)</a>
                                </h4>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>