jQuery(document).ready(function($) {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin: 10,
        nav:true,
        responsive:{
            0:{
                items:1,
            },
            768:{
                items:3,
            },
            1024:{
                items:5,
            }
        }
    });
});