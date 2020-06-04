(function($) {
    // header toggle
    $('.header-toggle').on('click', function() {
        $('.header').toggleClass('open');
    });

    // megamenu
    if ($(window).width() < 768) {
        $('.megamenu-link').on('click', function() {
            $(this).parent('li.megamenu').toggleClass('open');
            $(this).parent('li.megamenu').find('.megamenu-wrapper').slideToggle();
        });
    }

    // post slider
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

    // toc 
    $('.ez-toc-title-toggle').on('click', function() {
        $('.ez-toc-container nav').slideToggle();
        $('.ez-toc-container').toggleClass('open');
    });

    /* Comment
    ------------------------------------------------------------------ */
    $('#comments-toggle').on( 'click', function() {
        $('.comments-container').slideDown();
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