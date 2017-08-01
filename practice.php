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