$(document).ready(function () {

    var owl = $(".owl-carousel");

    owl.owlCarousel({
        loop: true,
        margin: 0,
        nav: false, //botão pra ficar passando < >
        autoplay: true,
        autoplayTimeout: 2000, //tempo para passar as imagens
        autoplayHoverPause: true, //passar o mouse na imagem faz parar o autoplay
        slideBy: 2, //qts imagens passam por vez
        slideTransition: 'ease-in-out',
        dots: false,  //bolinha que fica embaixo das imagens (progresso)
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
