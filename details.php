<?php
    include_once "header.php";
    if(isset($_GET['pid'])){
        $id = $_GET['pid'];
        //$getPostData = $blogInfo->getPostDataById($id);
        $getAllPostByCat = $blogInfo->getAllPostByCat($id);

        //echo "<pre>";
        //var_dump($getAllPostByCat);
        //die();
    }
?>
<div class="main">
    <h3 class="heading">
        <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i>
        <a href="<?php echo $sUrl;?>category.php?catid=<?php echo $getAllPostByCat['cat_id'];?>"><?php echo $getAllPostByCat['cat_name'];?></a><i class="fa fa-angle-right"></i>
    </h3>
    <div class="row">
        <div class="col-sm-8" style="padding-right:0;">
            <div class="border">
                <div class="details">
                    <article>
                        <h1><?php echo $getAllPostByCat['post_name'];?></h1>
                        <div class="details-time">
                            <i class="fa fa-calendar"></i> <?php echo $helperClass->formatDate($getAllPostByCat['created_at']);?>,
                            by <a href="#"><?php echo $getAllPostByCat['author'];?></a>
                        </div>
                        <img style="width:100%;" src="<?php echo $sUrl?>images/<?php echo $getAllPostByCat['post_image'];?>" alt="<?php echo $getAllPostByCat['post_image'];?>">
                        <?php echo $getAllPostByCat['post_details'];?>
                    </article>
                </div>
                <div class="related">
                    <h3 class="heading">Related Articles <span class="badge"><?php echo $getAllPostByCat['cat_name'];?></span> </h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/shahali007.JPG" alt="Alt">
                                <div class="caption">
                                    <p>PHP Fundamentals Tutorial (Bangla)</p>
                                    <p>
                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a>
                                    </p>
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