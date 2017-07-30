<?php include_once "header.php"; ?>
    <style>
        header.navbar{
            display: none;
        }
    </style>
    <div class="main">
        <div class="row">
            <div class="col-sm-12">
                <div class="border">
                    <div class="__404_not_found">
                        <h1>
                            <i class="fa fa-blind"></i>
                            404 <br>
                            <small>The page not found!</small>
                        </h1>
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="How can we help you?">
                                        <span class="input-group-btn">
        <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
      </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a href="<?php echo $sUrl;?>" class="btn btn-info"><i class="fa fa-home"></i> Back to Home Page.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "footer.php"; ?>