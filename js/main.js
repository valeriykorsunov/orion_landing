jQuery(document).ready(function($){

  // Select all links with hashes
  $('a.nav__link[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
        }
      }
  });

    // Nav
    var $navToggle = $('.js-nav-toggle'),
        $nav = $('.js-nav');

    $navToggle.click(function(){
        $nav.slideToggle();
    });

    $(document).click(function(e) {
        var target = e.target;
        if (!$(target).is($navToggle)) {
            $('.js-nav').slideUp('open');
        }
    });

    // Masked Input
    $('.js-tel').mask("+7(999)999-99-99");

    // Switch
    $(".js-switch-input").on('click', function(){
        if ( $(this).is(':checked') ) {
            $('.js-switch-item').addClass('form__group_disabled');
            $('.js-switch-item .form__control, .js-switch-item .button, .js-switch-item input[type=file]').prop( "disabled", true );
        }
        else {
            $('.js-switch-item').removeClass('form__group_disabled');
            $('.js-switch-item .form__control, .js-switch-item .button, .js-switch-item input[type=file]').prop( "disabled", false );
        }
    });

    if ( $(".js-switch-input").is(':checked') ) {
        $('.js-switch-item').addClass('form__group_disabled');
        $('.js-switch-item .form__control, .js-switch-item .button, .js-switch-item input[type=file]').prop( "disabled", true );
    }

    // Input file
    $('input[type=file]').change(function(e) {
        $in = $(this);
        $in.next().html($in.val());
    });

    // Sliders
    $('.js-partners-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
            }
        },
        {
            breakpoint: 992,
            settings: {
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
            }
        },
        {
            breakpoint: 375,
            settings: {
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }
        ]
    });

    $(window).on('resize orientationchange', function() {
        $('.js-partners-slider').slick('resize');
    });
});