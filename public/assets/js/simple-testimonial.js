jQuery(document).ready(function($) {
    console.log('Initialisation simple carousel...');
    
    // Variables
    let currentSlide = 0;
    const slides = $('.testimonial_box');
    const totalSlides = slides.length;
    
    if (totalSlides === 0) {
        console.log('Aucun slide trouvé');
        return;
    }
    
    // Fonction pour afficher un slide
    function showSlide(index) {
        slides.hide();
        slides.eq(index).show();
        updateDots(index);
    }
    
    // Fonction pour mettre à jour les dots
    function updateDots(activeIndex) {
        $('.simple-dot').removeClass('active').css('background', '#ccc');
        $('.simple-dot').eq(activeIndex).addClass('active').css('background', '#1340dd');
    }
    
    // Créer les dots de navigation
    function createDots() {
        let dotsHtml = '<div class="simple-carousel-dots" style="text-align: center; margin-top: 20px; direction: ltr;">';
        for(let i = 0; i < totalSlides; i++) {
            dotsHtml += `<span class="simple-dot" data-slide="${i}" style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; background: #ccc; margin: 0 8px; cursor: pointer; transition: all 0.3s ease;"></span>`;
        }
        dotsHtml += '</div>';
        
        $('.testimonial_carousel').append(dotsHtml);
    }
    
    // Initialiser le carousel
    function initCarousel() {
        // Masquer tous les slides sauf le premier
        slides.hide();
        slides.eq(0).show();
        
        // Créer les dots
        createDots();
        updateDots(0);
        
        // Gérer les clics sur les dots
        $('.simple-dot').click(function() {
            currentSlide = $(this).data('slide');
            showSlide(currentSlide);
        });
        
        // Auto-play (optionnel)
        setInterval(function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }, 5000); // Change toutes les 5 secondes
    }
    
    // Démarrer le carousel
    initCarousel();
    
    console.log(`Carousel initialisé avec ${totalSlides} slides`);
});