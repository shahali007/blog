<?php
    include_once "config/config.php";
    include_once "config/bloginfo.php";
    include_once "helper/helper-functions.php";
    $blogInfo = new blogInfo();
    $helperClass = new helperClass();

    $allpost = $blogInfo->allpost();
    $allpostWithCat = $blogInfo->allpostWithCat();
    $allcategory = $blogInfo->allcategory();



?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $sUrl;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $sUrl;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $sUrl;?>css/grid.css">
    <link rel="stylesheet" href="<?php echo $sUrl;?>css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<section class="container" id="wraper">
    <header class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?php echo $sUrl;?>about.php">About</a></li>
                <li><a href="<?php echo $sUrl;?>contact.php">Contact</a></li>
                <li><a href="<?php echo $sUrl;?>settings.php">Settings</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="GET" action="search.php" role="search" style="margin-right:-5px;">
                <div class="input-group">
                    <input type="text" class="form-control" name="yoyo_search" placeholder="Search" value="<?php if (!empty($_GET['yoyo_search'])){echo $_GET['yoyo_search'];}?>" autofocus>
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="submit"><i class="fa fa-microphone"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </header>
    <div class="banner">
        <h1 class="text-center">Practice Project<br>
            <small class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </small>
        </h1>
    </div>