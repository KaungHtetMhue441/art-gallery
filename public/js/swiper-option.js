$(document).ready(function () {
    const swiper = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: true,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
        },

        // autoplay
        autoplay: {
            delay: 5000,
        },
    });
});
