$(document).ready(function (){
    //nav effect
    const nav = $('#nav');
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            nav.addClass('shadow-5 sticky-top');
        } else {
            nav.removeClass('shadow-5 sticky-top')
        }
    });
});