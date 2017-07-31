<?php
    include_once "header.php";
    if(isset($_GET['pid'])){
        $id = $_GET['pid'];
        $getPostById = $blogInfo->getPostById($id);
        $getAllPostByCatId = $blogInfo->getAllPostByCatId($getPostById['cat_id']);
    }
?>
<div class="main">
    <h3 class="heading">
        <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i>
        <a href="<?php echo $sUrl;?>category.php?catpage=<?php echo $getPostById['cat_id'];?>"><?php echo $getPostById['cat_name'];?></a>
    </h3>
    <div class="row">
        <div class="col-sm-8" style="padding-right:0;">
            <div class="border">
                <div class="details">
                    <article>
                        <h1><?php echo $getPostById['post_name'];?></h1>
                        <div class="details-time">
                            <i class="fa fa-calendar"></i> <?php echo $helperClass->formatDate($getPostById['created_at']);?>,
                            by <a href="#"><?php echo $getPostById['author'];?></a>
                        </div>
                        <img style="width:100%;" src="<?php echo $sUrl?>images/<?php echo $getPostById['post_image'];?>" alt="<?php echo $getPostById['post_image'];?>">
                        <?php echo $getPostById['post_details'];?>
                    </article>
                </div>
                <div class="related">
                    <h3 class="heading">Related Articles - <span class="text-info"><?php echo $getPostById['cat_name'];?></span></h3>
                    <div class="row">
                        <?php foreach ($getAllPostByCatId as $getAllPostByCatIds){?>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="<?php echo $sUrl;?>images/<?php echo $getAllPostByCatIds->post_image;?>" alt="<?php echo $getAllPostByCatIds->post_image;?>">
                                <div class="caption">
                                    <p><?php echo $helperClass->textShortener($getAllPostByCatIds->post_name,40);?></p>
                                    <p>
                                        <a href="<?php echo $sUrl?>details.php?pid=<?php echo $getAllPostByCatIds->id;?>" class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
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