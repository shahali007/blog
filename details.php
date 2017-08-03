<?php
    include_once "header.php";
    if(isset($_GET['pid'])){
        $id = $_GET['pid'];
        $getPostById = $blogInfo->getPostById($id);
        $getAllPostByCatId = $blogInfo->getAllPostByCatId($getPostById['cat_slug'], $id);
        $getCategoryName = $blogInfo->getCategoryNameByCatId($getPostById['cat_slug']);
    }
?>
<div class="main">
    <h3 class="heading">
        <a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i>
        <a href="<?php echo $sUrl;?>category.php?catpage=<?php echo $getPostById['cat_slug'];?>"><?php echo $getCategoryName->cat_name;?></a>
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
                        <div id="network">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                            <a href="#" class="paper-plane"><i class="fa fa-paper-plane"></i>Email</a>
                            <a href="#" class="print pull-right"><i class="fa fa-print"></i>Print</a>
                        </div>
                        <img style="width:100%;" src="<?php echo $sUrl?>images/<?php echo $getPostById['post_image'];?>" alt="<?php echo $getPostById['post_image'];?>">
                        <?php echo $getPostById['post_details'];?>
                        <div id="network">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                            <a href="#" class="paper-plane"><i class="fa fa-paper-plane"></i>Email</a>
                            <a href="#" class="print pull-right"><i class="fa fa-print"></i>Print</a>
                        </div>
                    </article>
                </div>
                <?php
                    if(count($getAllPostByCatId) > 0){
                ?>
                <div class="related">
                    <h3 class="heading">Related Articles - <span class="text-info"><?php echo $getCategoryName->cat_name;?></span></h3>
                    <div class="row">
                        <?php
                            foreach ($getAllPostByCatId as $getAllPostByCatIds){
                        ?>
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
            <?php } ?>
            </div>
        </div>
        <?php include_once "sidebar.php"?>
    </div>
</div>
<?php include_once "footer.php"; ?>