$(document).ready(function (){
    window.sr = ScrollReveal({
        afterReveal: function(el) {
            sr.clean(el);
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