(function($) {
    /* Header Toggle
    ------------------------------------------------------------------ */
    $('.header-toggle').on('click', function() {
        $('.header').toggleClass('open');
    });

    /* Megamenu
    ------------------------------------------------------------------ */
    if ($(window).width() < 768) {
        $('.megamenu-link').on('click', function(e) {
            $(this).parent('li.megamenu').toggleClass('open');
            $(this).parent('li.megamenu').find('.megamenu-wrapper').slideToggle();

            e.preventDefault();
        });
    }

    /* TOC
    ------------------------------------------------------------------ */
    $('.ez-toc-title-toggle').on('click', function(e) {
        $('#ez-toc-container').toggleClass('open');
        console.log('tes');

        e.preventDefault();
    });

    /* Post Slider
    ------------------------------------------------------------------ */
    $('.post-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,

        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1
            }
        },
        {
           breakpoint: 767,
           settings: 'unslick'
        }]
    });

    /* Comment
    ------------------------------------------------------------------ */
    $('#comments-toggle').on( 'click', function() {
        $('.comments-container').slideDown();
        console.log('hmmm');
    } );

    $('.comment-list').on( 'click', '.comment-reply', function(e) {
        $(this).closest('.comment-detail').find('.reply-box').slideDown();

        e.preventDefault();
    });

    $('.comment-list').on( 'click', '.close-form', function(e) {
        $(this).closest('.reply-box').slideUp();

        e.preventDefault();
    });
})(jQuery);