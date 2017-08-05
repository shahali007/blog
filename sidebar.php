<div class="col-sm-4">
    <div class="border">
        <h3 class="heading">Categories</h3>
        <ul class="category-list">
            <?php foreach ($allcategory as  $allcategories){
                $allSubcatBYcatId=$blogInfo->allSubcatBYcatId($allcategories['c_id']);
                ?>
                <li class="dropdown">
                    <a href="<?php echo $sUrl;?>category.php?catpage=<?php echo $allcategories['cat_slug'];?>"><?php echo $allcategories['cat_name'];?> <?php if(!empty($allSubcatBYcatId)){echo '<b class="caret"></b>';}?></a>
                    <?php if(!empty($allSubcatBYcatId)){?>
                        <ul class="dropdown-menu">
                            <?php foreach ($allSubcatBYcatId as  $allSubcatBYcatIds){?>
                                <li><a href="<?php echo $allSubcatBYcatIds['s_id'];?>"><?php echo $allSubcatBYcatIds['sub_cat_name'];?></a></li>
                            <?php }  ?>
                        </ul>
                    <?php }  ?>
                </li>
            <?php }  ?>
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