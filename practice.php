<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test PHP Page</title>
</head>
<body>

    <?php
        $somthing = "lorem is a real or fake content.";
        //$somthing = strlen($somthing);
        $somthing = ucwords($somthing);

        echo $somthing;
    ?>

</body>
</html>