$(document).ready(function () {
    if ($('.show').val()!==true){
        // console.log(123)
        $('.show').hide();
    }
    $('.hide').click(function () {
        $('.hide-name').hide();
        $('.show').show();
        $('.hide').hide();
    });
    $('.show').click(function () {
        $('.hide-name').show();
        $('.show').hide();
        $('.hide').show();
    });
});
