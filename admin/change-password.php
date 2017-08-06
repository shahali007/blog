<?php include_once "header.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        Change Password
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
                    <form class="form-horizontal" data-parsley-validate method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="old_password">Old Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old password" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="new_password">New Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New password" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "footer.php"; ?>
