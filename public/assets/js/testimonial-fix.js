jQuery(document).ready(function($) {
    // Initialisation du carousel testimonial
    if ($('.testimonial_carousel .theme_carousel').length) {
        $('.testimonial_carousel .theme_carousel').owlCarousel({
            loop: false,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            smartSpeed: 300,
            rtl: true, // Support RTL pour l'arabe
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    }
    
    // Force l'affichage en cas de problème
    $('.testimonial_carousel').css('opacity', '1').css('visibility', 'visible');
    $('.theme_carousel').css('opacity', '1').css('visibility', 'visible');
});