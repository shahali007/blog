<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test file</title>
</head>
<body>

</body>
</html>
<script>
    var numbers = [10,20,25,30,55,42];
    function sum(n) {
        var sumation = 0;
        sumation = n.reduce(function (a,n) {
            return a+n;
        });
        return sumation;
    }
    console.log(sum(numbers));
</script>