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
    <button type="submit" id="info" onclick="getterText()">
        Lorem ipsum dolor sit amet.
    </button>
</body>
</html>
<script>

    // get inner text of a div
    function getterText() {
        //var inner = document.getElementById(info).innerHTML;
        alert("hskd");
    }

    // for sum of array value
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