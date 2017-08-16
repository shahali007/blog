<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flex</title>
    <style>
        *{
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
        }
        body{
            background: #b3b3b3;
        }
        .container{
            max-width:1000px;
            margin: 50px auto;
            display: flex;
            background: #fff;
            padding:10px;
            flex-wrap:wrap;
            /*justify-content: center;*/
        }
        .container .box {
            width: 20%;
            background: #021070;
            color: #fff;
            padding:15px 15px 25px 15px;
            border: 10px solid #fff;
            position: relative;
        }

        .container .box .tag{
            position: absolute;
            bottom:10px;
            color: purple;
            font-size:12px;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center;">
        <?php
            date_default_timezone_set("Asia/Dhaka");
            echo date("h:i:s A");
        ?>
    </h1>
    <div class="container">
        <div class="box">
            <h4>Feature 1</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <a href="" class="tag">Hello</a>
        </div>
        <div class="box">
            <h4>Feature 2</h4>
            <p>Lorem ipsum dolor sit amet,adipisicing elit. Assumenda at eos ex iusto maxime necessitatibus obcaecati odio</p>
        </div>
        <div class="box">
            <h4>Feature 3</h4>
            <p>Lorem ipsum dolor sit amet, Ex iusto maxime necessitatibus obcaecati odio</p>
            <a href="" class="tag">Hello</a>
        </div>
        <div class="box">
            <h4>Feature 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="box">
            <h4>Feature 5</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 6</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 7</h4>
            <p>Lorem ipsum dolor sit</p>
            <a href="" class="tag">Hello</a>
        </div>
        <div class="box">
            <h4>Feature 8</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 9</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 10</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 11</h4>
            <p>Lorem ipsum dolor sit</p>
            <a href="" class="tag">Hello</a>
        </div>
        <div class="box">
            <h4>Feature 12</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 13</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
        <div class="box">
            <h4>Feature 14</h4>
            <p>Lorem ipsum dolor sit</p>
        </div>
    </div>
</body>
</html>