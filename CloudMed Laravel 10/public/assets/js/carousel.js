$(document).ready(function () {

    var owl = $(".owl-carousel");

    owl.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        slideBy: 2, 
        slideTransition: 'ease-in-out',
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1
            },
            720: {
                items: 2
            },
            1000: {
                items: 3
            },
            1500: {
                items: 4
            },
            2000: {
                items: 5
            },
        }
    });

});
