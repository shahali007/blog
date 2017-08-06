<?php
    include_once "../config/session.php";
    Session::init();

    include_once "../config/config.php";
    include_once "../config/bloginfo.php";
    include_once "../helper/helper-functions.php";

    $blogInfo = new blogInfo();
    $helperClass = new helperClass();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
            background: #eee;
        }
        form{
            width:360px;
            padding: 30px;
            border: 2px solid #eee;
            margin:100px auto;
            background: #fff;
        }
        form h3{
            margin-top:0;
            text-align: center;
            color: #148871;
            font-size:24px;
        }
        form b{
            color: #000;
            margin:-30px -30px -15px -30px;
            background: #eee;
            display: block;
            font-size:100px;
            text-shadow: 0px 2px 4px green;
            -webkit-animation: color_change 1s infinite alternate;
            -moz-animation: color_change 1s infinite alternate;
            -ms-animation: color_change 1s infinite alternate;
            -o-animation: color_change 1s infinite alternate;
            animation: color_change 1s infinite alternate;
        }
        form input{
            width:95%;
            border:1px solid #cbcbcb;
            box-shadow: none;
            padding:10px 0 10px 15px;
            margin-bottom:15px;
        }
        form input:focus,
        form input:hover{
            border:1px solid #148871;
        }
        form button{
            border:none;
            background: #169F85;
            padding:10px 15px;
            color: #FFF;
            width:100%;
        }
        form button:hover{
            background: #148871;
            cursor: pointer;
        }
        form p{
            color: lightgray;
            margin-bottom:0;
        }


        @-webkit-keyframes color_change {
            from { color: #000; }
            to { color: #eee; }
        }
        @-moz-keyframes color_change {
            from { color: #000; }
            to { color: #eee; }
        }
        @-ms-keyframes color_change {
            from { color: #000; }
            to { color: #eee; }
        }
        @-o-keyframes color_change {
            from { color: #000; }
            to { color: #eee; }
        }
        @keyframes color_change {
            from { color: #000; }
            to { color: #eee; }
        }

        /*Mobile layout: 320px. */
        @media only screen and (max-width: 480px){
            form{
                width:260px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h3><b>&#9760;</b> <br> Login Admin Panel</h3>
        <div class="form-group">
            <input type="text" name="user_name" id="user_name" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="user_password" id="user_password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
        <p>User: admin, Pass: admin</p>
    </form>
</body>
</html>