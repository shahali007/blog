<?php include_once "header.php"; ?>
    <div class="main">
        <h3 class="heading">
            <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i>
            <span>Category</span>
        </h3>
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="article-list">

                        <?php for($i=0; $i<15; $i++){ ?>
                            <article class="media">
                                <div class="media-left">
                                    <div class="img-box">
                                        <img class="media-object" src="https://www.jagonews24.com/media/imgAll/2017July//gas-3-20170727090918.jpg" alt="Shahali007">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">PHP Fundamentals Tutorial (Bangla)</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur magni minima reprehenderit vel veritatis?Aperiam consectetur magni minima reprehenderit vel veritatis?reprehenderit vel veritatis?</p>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="<?php echo $sUrl;?>details.php" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <small class="text-muted time"><a href="<?php echo $sUrl;?>category.php">Category</a>, &nbsp;<i class="fa fa-calendar"></i> 23 July 2017, <em>Shahali Bogdadi, </em></small>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                    </div>

                    <nav aria-label="Page navigation" id="pagination">
                        <ul class="pager">
                            <li><a href="#"><span>First</span></a></li>
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                            <li><a href="#"><span>Last</span></a></li>
                        </ul>
                    </nav>
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