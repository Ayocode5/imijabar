$('.carousel_kepengurusan').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    smartSpeed: 1000,
    navText: ["<img src='/public/images/arrow-left-carousel.svg'>", "<img src='/public/images/arrow-right-carousel.svg'>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true,
        },
        568: {
            items: 2,
            nav: false
        },
        768: {
            items: 3,
            nav: true
        },
        992: {
            items: 4,
            nav: true,
        }
    }
})

$('.carousel_cabor_detail_event').owlCarousel({
    loop: true,
    margin: 20,
    dots: false,
    navText: ["<img src='/public/images/arrow-left-carousel.svg'>", "<img src='/public/images/arrow-right-carousel.svg'>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: true
        },
        568: {
            items: 2,
            nav: false
        },
        768: {
            items: 3,
            nav: true
        },
        992: {
            items: 4,
            nav: true,
        }
    }
})