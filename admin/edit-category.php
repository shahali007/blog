<?php
    include_once "header.php";
    $catId = $_GET['catid'];
    if (isset($_GET['catid'])){
        $getCatbyCatId = $blogInfo->getCategoryByCatId($catId);
    }
      //echo $_POST['cat_name'];

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>
                        <i class="fa fa-tint" aria-hidden="true"></i>
                        Edit Category
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                        if (isset($_POST['edit-news'])){
                            $updateCatbyCatId = $blogInfo->updateCategoryByCatId($_POST, $catId);
                        }
                        if (isset($updateCatbyCatId)){
                            echo $updateCatbyCatId;
                        }
                    ?>
                    <form class="form-horizontal" data-parsley-validate method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cat_name">Category</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Category" required="required" value="<?php echo $getCatbyCatId->cat_name;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cat_slug">Category Slug</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="cat_slug" id="cat_slug" placeholder="Category Slug" required="required" value="<?php echo $getCatbyCatId->cat_slug;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="status">Status</label>
                            <div class="col-sm-6">
                                <div class="paddingTop10">
                                    <label for="active">
                                        <input type="radio" class="flat" <?php if($getCatbyCatId->status == 1){echo "checked";}?> name="status" value="1" id="active"> Active
                                    </label>
                                    <label for="inactive">
                                        <input type="radio" class="flat" <?php if($getCatbyCatId->status == 2){echo "checked";}?> name="status" value="2" id="inactive"> Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="edit-news" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include_once "footer.php"; ?>
<script type="text/javascript">
    $("#cat_name").blur(function(){ // Create name slug
        var str = this.value;
        $("#cat_slug").val(str.trim().toLowerCase().replace(/  /g,'-').replace(/ /g,'-').replace(/[^\w-]+/g,'-'));
    });
</script>
