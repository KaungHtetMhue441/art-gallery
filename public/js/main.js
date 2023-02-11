$(document).ready(function (){
    //nav effect
    const nav = $('#nav');
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            nav.addClass('shadow-5 sticky-top glass-blur');
        } else {
            nav.removeClass('shadow-5 sticky-top glass-blur')
        }
    });

    //scroll
    window.sr = ScrollReveal({
        afterReveal: function(el) {
            sup.clean(el);
        },
        duration : 1000,
        viewOffset: {
            top: 500
        },
        delay : 100,
        opacity : 0
    });

    sr.reveal('.appear');

    const scale = {
        scale : '0.8'
    }

    sr.reveal('.scaleUp', scale);

    const scaleDown = {
        scale : '1.2'
    }

    sr.reveal('.scaleDown', scaleDown);

    const up = {
        origin : 'bottom',
        distance : '100px',
    }

    sr.reveal('.upreveal', up);

    const left = {
        origin : 'right',
        distance : '100px',
    }
    sr.reveal('.leftreveal', left);

});