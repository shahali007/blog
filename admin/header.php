<?php $sUrl = "http://localhost:9000/workstation/blog/admin/";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project by PHP | Admin Panel</title>

    <!-- CSS -->
    <link href="<?php echo $sUrl;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/nprogress.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/prettify.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/green.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/select2.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/starrr.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/switchery.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>plugins/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/custom.min.css" rel="stylesheet">
    <link href="<?php echo $sUrl;?>css/style.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" target="_new-tab" class="site_title"><span>Practice PHP</span></a>
                </div>

                <div class="clearfix"></div>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a href="<?php echo $sUrl;?>"><i class="fa fa-home"></i> Dashboard </a></li>
                            <li><a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo $sUrl;?>post-insert.php">Insert</a></li>
                                    <li><a href="<?php echo $sUrl;?>post-list.php">LIst</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-plus-square"></i> Category <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo $sUrl;?>category.php">Category</a></li>
                                    <li><a href="<?php echo $sUrl;?>sub-category.php">Sub Category</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/shahali.jpg" alt=""> Shahali Bogdadi
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->