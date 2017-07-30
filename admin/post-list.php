<?php include_once "header.php"; ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Post List</h2>
                        <div class="pull-right">
                            <a href="post-insert.php" class="btn btn-default btn-sm">Add New</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title"># </th>
                                    <th class="column-title">Category</th>
                                    <th class="column-title">Headline</th>
                                    <th class="column-title" style="width: 50px;text-align:center;">Status</th>
                                    <th class="column-title no-link last" style="width: 100px;text-align:center;"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php for($x=1; $x<25; $x++){?>
                                <tr class="even pointer">
                                    <td class=""><?php echo $x; ?></td>
                                    <td class="">Sports  <span class="label bg-green">Sub Category</span></td>
                                    <td class="">Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
                                    <td class="" style="width: 50px;text-align:center;">
                                        <span href="#" class="btn btn-round btn-success btn-xs"><i class="fa fa-check-square-o"></i></span>
                                    </td>
                                    <td class="last" style="width: 100px;text-align:center;">
                                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
    </div>
    <!-- /page content -->

<?php include_once "footer.php"; ?>