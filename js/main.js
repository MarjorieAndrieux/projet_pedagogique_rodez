$(document).ready(function(){
    $(".owl-proj").owlCarousel(
    {
        center: true,
        // items:3,
        loop:true,
        center:true,
        nav:false,
        rewind:false,
        lazyLoad:true,
        autoplay:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    $("#owl-contrib").owlCarousel(
        {
            center: true,
            // items:5,
            loop:true,
            center:true,
            nav:false,
            rewind:false,
            lazyLoad:true,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:5
                }
            }
        })
});

