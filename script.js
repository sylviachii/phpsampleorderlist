$(document).ready(function () {
    $('.menu-icon').click(function () {
        $('.sidebar').toggleClass('open');
        $('.content').toggleClass('shift');
    });
});