<?php
    include_once "header.php";
    $loginMsg = Session::get("loginmsg");
    $UpdateMsg = Session::get("updatemsg");
    $getAllCategory = $blogInfo->allcategory();
    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['add_category'])){
        $insertCategory = $blogInfo->insertCategory($_POST);
    }
    $catExistsMsg = Session::get("catExistMsg");
    $catInsertMsg = Session::get("catInsertMsg");
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <?php if($catInsertMsg != NULL){?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $catInsertMsg;?>
                    </div>
                <?php } Session::set("catInsertMsg", NULL) ?>
                <?php if($catExistsMsg != NULL){?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $catExistsMsg;?>
                    </div>
                <?php } Session::set("catExistMsg", NULL) ?>
                <div class="x_title">
                    <h2><i class="fa fa-paper-plane-o"></i> Add Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <?php
/*                    echo "<pre>";
                    print_r($blogInfo->getCategoryByCatId(5));
                    die();
                */?>
                <div class="x_content">
                    <form method="post" action="" id="demo-form" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="row">
                            <!-- form input -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <label for="cat_name" class="sr-only">Category Name *</label>
                                                <input type="text" id="cat_name" class="form-control" name="cat_name" required="required" placeholder="Category Name"/>
                                            </div>
                                            <div class="col-sm-5">
                                                <label for="cat_slug" class="sr-only">Category Slug *</label>
                                                <input type="text" id="cat_slug" class="form-control" name="cat_slug" required="required" placeholder="Category Slug"/>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="sr-only"></label>
                                                <button type="submit" name="add_category" class="btn btn-success btn-block">Create Category</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /form input -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /add category -->
    <!-- view category -->
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <?php if($UpdateMsg != NULL){?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $UpdateMsg;?>
                    </div>
                <?php } Session::set("updatemsg", NULL) ?>
                <div class="x_title">
                    <h2>
                        <i class="fa fa-eye"></i> View Category
                        (<?php echo count($getAllCategory);?>)
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
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Slug</th>
                                <th style="width: 100px;text-align:center;">Status</th>
                                <th style="width: 120px;text-align:center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $x = 1;
                            foreach ($getAllCategory as $getAllCategories){
                        ?>
                            <tr>
                                <td><?php echo $x++; ?></td>
                                <td><?php echo $getAllCategories['cat_name'];?></td>
                                <td><?php echo $getAllCategories['cat_slug'];?></td>
                                <td style="width: 100px;text-align:center;">
                                    <?php if ($getAllCategories['status'] == 1){?>
                                        <span class="btn btn-round btn-success btn-xs"><i class="fa fa-check-square-o"></i></span>
                                    <?php } else{?>
                                        <span class="btn btn-round btn-danger btn-xs"><i class="fa fa-close"></i></span>
                                    <?php }?>
                                </td>
                                <td style="width: 120px;text-align:center;">
                                    <a href="edit-category.php?catid=<?php echo $getAllCategories['c_id'];?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="delete-category.php?catidelid=<?php echo $getAllCategories['c_id'];?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
