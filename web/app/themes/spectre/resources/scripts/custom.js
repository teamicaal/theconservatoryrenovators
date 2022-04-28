import mixitup from 'mixitup';

(function($) {
  $('#menu-header-menu li.menu-item-has-children').append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-8 py-4"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');

  var timing = 200;

  $('#menu-header-menu > li.menu-item-has-children > .toggle').on('click', function() {
    if ($(this).parent().hasClass('open')) {
      $(this).parent().parent().find('li.menu-item-has-children').removeClass('open');
      $(this).parent().parent().find('.sub-menu').slideUp(timing);
    } else {
      $(this).parent().parent().find('li.menu-item-has-children.open').removeClass('open');
      $(this).parent().parent().find('li.menu-item-has-children.open > .sub-menu').slideUp(timing);
      $(this).parent().toggleClass('open');
      $(this).prev().slideToggle(timing);
    }
  });

  $('#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle').on('click', function() {
    if ($(this).parent().hasClass('open')) {
      $(this).parent().parent().find('li.menu-item-has-children').removeClass('open');
      $(this).parent().parent().find('.sub-menu').slideUp(timing);
    } else {
      $(this).parent().parent().find('li.menu-item-has-children.open').removeClass('open');
      $(this).parent().parent().find('li.menu-item-has-children.open > .sub-menu').slideUp(timing);
      $(this).parent().toggleClass('open');
      $(this).prev().slideToggle(timing);
    }
  });

  // Desktop nav
  $('#menu-header-menu > li > .sub-menu > li.menu-item-has-children').on('hover', function() {
    if( $(window).innerWidth() > 991 ) {
      var target = $(this).find('> ul.sub-menu');
      var width = $(target).outerWidth();

      var right_of_screen = $(window).innerWidth();
      var right_of_parent = $(this).offset().left + $(this).outerWidth();
      var right_of_element = right_of_parent + width;

      if (right_of_screen > right_of_element){
        $(target).css('transform', 'translateX(100%)');
        $(target).css('right', '0');
      } else {
        $(target).css('transform', 'translateX(-100%)');
        $(target).css('left', '0');
      }
    }
  });

  $('.slick-banner').on('init', function() {
    var hiddenSlides = $('.slick-banner .hidden');
    if(hiddenSlides.length > 1) {
      $('.slick-banner .hidden').each(function(i, el) {
        $(el).removeClass('hidden');
      })
    } else {
      hiddenSlides.removeClass('hidden');
    }
  })

  if ($('body').hasClass('home')) {
    $(document).on('click', 'a[href^="/#"]', function (event) {
      event.preventDefault();
      var scrollEl = $.attr(this, 'href').replace('/', '')
      $('html, body').animate({
          scrollTop: $(scrollEl).offset().top - 130
      }, 500);
    });
  }

  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    var scrollEl = $.attr(this, 'href').replace('/', '')
    $('html, body').animate({
        scrollTop: $(scrollEl).offset().top - 130
    }, 500);
  });


  // Slick
  $('.slick-banner').slick({
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidestoScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    infinite: true,
  });

  $('.testimonials-carousel').slick({
    dots: true,
    arrows: false,
    fade: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidestoScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    infinite: true,
  });


  // Gallery Slider
  $('.slick-gallery-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 2,
    autoplay: true,
    slidesToScroll: 1,
    swipeToSlide: true,
    draggable: true,
    centerMode: false,
  });

  $('.slick-p').on('click', function() {
    $(this).parent().prev().slick('slickPrev');
  });
  $('.slick-n').on('click', function() {
    $(this).parent().prev().slick('slickNext');
  });

  // Mixitup
  if( $('.mix-container').length ) {
    var mixer = mixitup('.mix-container');
    if(mixer) {
      console.log('mix');
    }
  }
  if( $('.mix-container-products').length ) {
    var mixer = mixitup('.mix-container-products', {
      load: {
        filter: '.windows'
      }
    });
    if(mixer) {
      console.log('mix');
    }
  }

  // Cookie Policy
  $.fn.CookieNotice = function() {
    if (!localStorage.getItem('cookie-notice-dismissed')) {
      var notice = this;
      setTimeout(function() {
        notice.addClass('active');
      }, 1000);
    }
    this.addClass('cookie-notice');
    return this
  }
  $(document).on('click', '.cookie-notice-dismiss', function() {
    localStorage.setItem('cookie-notice-dismissed', true);
    $(this).parents('.cookie-notice').removeClass('active');
  })
  $('#cookie-notice').CookieNotice();

  // Share Button
  $('.page-share').on('click', function() {
    if( navigator.share ) {
      navigator.share({
        title: 'Share This Page',
        url: window.location,
      }).then(() => {
        console.log('Thanks for sharing!');
      })
      .catch(err => {
        console.log('Couldnt share because of', err.message);
      });
    } else {
      $('#panel-share').toggleClass('active');
      console.log('navigator.share not supported!')
    }
  });

  $('.panel-share-close').on('click', function() {
    $('#panel-share').removeClass('active');
  });

  // Mobile Nav
  $('#nav-primary-toggle').on('click', function() {
    $('.nav-primary').toggleClass('open');
    $('.nav-backdrop').toggleClass('show');
  });

  $('.toggle').on('click', function(e) {
    var $this = $(this);
    var $parent = $this.parents('.checkout-step.active');
    $parent.removeClass('active');
    $parent.next().addClass('active');
  });

  var $document = $(document);
  $document.on('scroll', function() {
    if ($document.scrollTop() >= 800) {
      // user scrolled 50 pixels or more;
      // do stuff
      $('#fixed-sidebar').addClass(' block')
      $('#fixed-sidebar').removeClass("hidden");

    } else {
      $('#fixed-sidebar').removeClass("block");
      $('#fixed-sidebar').addClass(' hidden')

    }
  });


  $('.toggler').on('click', function () {
    $(this).parents('#fixed-sidebar').toggleClass('hide');
  });

  $(document).ready(function() {
    var checkoutSummaryHeight = $('#checkout-summary-fixed').outerHeight();
    $('#checkout-summary-fixed').css('bottom', '-' + checkoutSummaryHeight + 'px');
  });
  $('#checkout-summary-toggle').on('click', function() {
    $(this).toggleClass('active');
    var checkoutSummaryHeight = $('#checkout-summary-fixed').outerHeight();
    var combinedHeight = checkoutSummaryHeight + 53;
    if( $('#checkout-summary-fixed').hasClass('active') ) {
      $('#checkout-summary-fixed').css('bottom', '-' + checkoutSummaryHeight + 'px');
      $('#checkout-summary-fixed').removeClass('active')
    } else {
      $('#checkout-summary-fixed').css('bottom', '50px');
      $('#checkout-summary-fixed').addClass('active')
    }
  });

  $('input[name="card_number"]').on('keyup', function () {
    if (this.value.length == this.maxLength) {
      $('input[name="expiry_date"]').focus();
    }
  });

  $('input[name="expiry_date"]').on('keyup', function () {
    if (this.value.length == this.maxLength) {
      $('input[name="cvc"]').focus();
    }
  });
})(jQuery);
