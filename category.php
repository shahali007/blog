<?php
    include_once "header.php";
    if(isset($_GET['catpage'])){
        $id = $_GET['catpage'];
        $getAllPostByCatId = $blogInfo->getAllPostByCatId($id);
    }
?>
    <div class="main">
        <h3 class="heading">
            <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i>
            <span><?php echo $getAllPostByCatId[0]->cat_name;?></span>
        </h3>
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="article-list">
                        <?php foreach ($getAllPostByCatId as $getAllPostByCatIds){?>
                            <article class="media">
                                <div class="media-left">
                                    <div class="img-box">
                                        <img class="media-object" src="<?php echo $sUrl;?>images/<?php echo $getAllPostByCatIds->post_image;?>" alt="<?php echo $getAllPostByCatIds->post_image;?>">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $getAllPostByCatIds->post_name;?></h4>
                                    <p><?php echo $helperClass->textShortener($getAllPostByCatIds->post_brief, 150);?></p>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="<?php echo $sUrl;?>details.php?pid=<?php echo $getAllPostByCatIds->id;?>" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a>
                                        </div>
                                        <div class="col-sm-8 text-right">
                                            <small class="text-muted time">
                                                <i class="fa fa-calendar"></i> <?php echo $helperClass->formatDate($getAllPostByCatIds->created_at);?>,
                                                <em><?php echo $getAllPostByCatIds->author?></em>
                                            </small>
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
                        <?php foreach ($allcategory as $allcategories){?>
                            <li class="<?php echo ($allcategories['c_id'] == $_GET['catpage']) ? 'active' : '' ?>">
                                <a href="<?php echo $sUrl;?>category.php?catpage=<?php echo $allcategories['c_id'];?>"><?php echo $allcategories['cat_name'];?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="border" style="margin-top:30px;">
                    <h3 class="heading">Latest Articles</h3>
                    <div class="latest-list">
                        <div class="latest-list">
                            <?php foreach($allpost as $key => $allposts){
                                if($key<5){?>
                                <article class="media">
                                    <div class="media-left">
                                        <div class="img-box">
                                            <img class="media-object" src="<?php echo $sUrl;?>images/<?php echo $allposts['post_image'];?>" alt="Shahali007">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?php echo $sUrl;?>details.php?pid=<?php echo $allposts['id'];?>"><?php echo $allposts['post_name'];?></a>
                                        </h4>
                                    </div>
                                </article>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "footer.php"; ?>