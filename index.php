<?php
    include_once "header.php";

    //echo "<pre>";
    //var_dump($allpost);
    //die();
?>
    <div class="main">
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="article-list">
                        <h3 class="heading">All Articles</h3>
                        <?php foreach($allpostWithCat as $allpostWithCats){ ?>
                        <article class="media">
                            <div class="media-left">
                                <div class="img-box">
                                    <img class="media-object" src="<?php echo $sUrl;?>images/<?php echo $allpostWithCats['post_image'];?>" alt="Shahali007">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $allpostWithCats['post_name'];?></h4>
                                <p><?php echo $helperClass->textShortener($allpostWithCats['post_brief'], 100);?></p>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="<?php echo $sUrl;?>details.php?pid=<?php echo $allpostWithCats['id'];?>" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a>
                                    </div>
                                    <div class="col-sm-8 text-right">
                                        <small class="text-muted time">
                                            <a href="<?php echo $sUrl;?>category.php?catpage=<?php echo $allpostWithCats['cat_id'];?>" class="label label-info">
                                                <?php echo $allpostWithCats['cat_name'];?>
                                            </a>  &nbsp;
                                            <i class="fa fa-calendar"></i> <?php echo $helperClass->formatDate($allpostWithCats['created_at']);?>,
                                            <em><?php echo $allpostWithCats['author'];?></em>
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
<?php include_once "footer.php"; ?>