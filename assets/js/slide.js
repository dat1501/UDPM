//Viết hàm

$(document).ready(function () {
    //Owl
    $('.hero-slider').owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        navText: ['🡸', '🡺'],
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                nav: false,
            },
            768: {
                nav: true,
            }
        }
    })
});
