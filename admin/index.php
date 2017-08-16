<?php

    include_once "header.php";
    $UpdateMsg = Session::get("updatemsg");
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php if($UpdateMsg != NULL){?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $UpdateMsg;?>
                </div>
            <?php } Session::set("updatemsg", NULL) ?>
            <h1 class="text-center" style="margin-top:150px;">Welcome by Shahali bogdadi <br>
                <small>
                    Project Name : Practice PHP<br>
                    Language : PHP, OOP
                </small>

            </h1>
        </div>
    </div>

</div>
<!-- /page content -->

<?php include_once "footer.php"; ?>