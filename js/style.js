$(function () {
    $(".dropdown").hover(function () {
        $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).toggleClass('open');
        $('i', this).toggleClass("fa-caret-up");
    }, function () {
        $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).toggleClass('open');
        $('i', this).toggleClass("fa-caret-up");
    });
});