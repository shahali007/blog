<?php include_once "header.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-paper-plane-o"></i> Add Sub Category</h2>
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
                    <form method="post" id="demo-form" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="row">
                            <!-- form input -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="cat_name" class="sr-only">Category Name *</label>
                                                <select id="cat_name" name="cat_name" class="form-control" required>
                                                    <option>-- Choose Category Name --</option>
                                                    <option value="1">জাতীয়</option>
                                                    <option value="2">রাজনীতি</option>
                                                    <option value="3">অর্থনীতি</option>
                                                    <option value="4">দেশজুড়ে</option>
                                                    <option value="5">খেলাধুলা</option>
                                                    <option value="6">বিনোদন</option>
                                                    <option value="7">আন্তর্জাতিক</option>
                                                    <option value="8">লাইফস্টাইল</option>
                                                    <option value="9">ফিচার</option>
                                                    <option value="10">অন্যান্য</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="sub_cat_name" class="sr-only">Sub Category Name *</label>
                                                <input type="text" id="sub_cat_name" class="form-control" name="sub_cat_name" required="required" placeholder="Sub Category Name"/>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="sub_cat_slug" class="sr-only">Sub Category Slug *</label>
                                                <input type="text" id="sub_cat_slug" class="form-control" name="sub_cat_slug" required="required" placeholder="Sub Category Slug"/>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="sr-only"></label>
                                                <button type="submit" name="add_sub_category" class="btn btn-success btn-block">Create Sub Category</button>
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
                <div class="x_title">
                    <h2><i class="fa fa-eye-slash"></i> View Sub Category</h2>
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
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Sub Category Name</th>
                            <th>Sub Category Slug</th>
                            <th style="width: 100px;text-align:center;">Status</th>
                            <th style="width: 120px;text-align:center;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($x=1; $x<10; $x++){?>
                            <tr>
                                <td><?php echo $x; ?></td>
                                <td>Sub Category Name <span class="label bg-green">Category : </span></td>
                                <td>Sub Category slug</td>
                                <td style="width: 100px;text-align:center;">
                                    <span href="#" class="btn btn-round btn-info btn-xs"><i class="fa fa-check-square-o"></i></span>
                                    <span href="#" class="btn btn-round btn-danger btn-xs"><i class="fa fa-close"></i></span>
                                </td>
                                <td style="width: 120px;text-align:center;">
                                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#" class="btn btn-xs btn-dark"><i class="fa fa-trash-o"></i></a>
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
    $("#sub_cat_name").blur(function(){ // Create name slug
        var str = this.value;
        $("#sub_cat_slug").val(str.trim().toLowerCase().replace(/  /g,'-').replace(/ /g,'-').replace(/[^\w-]+/g,'-'));
    });
</script>
