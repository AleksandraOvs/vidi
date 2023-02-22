window.onload = function () {
  "use strict";
};


$(function () {
  let width = $(window).width();
  let body = $('.body');
  let menu = $('.menu');

  $(document).on('click', '.js-toggle-menu', function () {
    $(this).toggleClass('_open');
    menu.toggleClass('_open');
    body.toggleClass('_fixed');
  });

  $(document).on('click', '.js-show-work-more', function () {
    $('.work__inner').addClass('_show');
    $(this).addClass('_hide');
  });


  //anim numbers

  if ($('.about').length) {
    let isAnim = 0;
    scrollTracking();

    function scrollTracking() {

      let wt = $(window).scrollTop();
      let wh = $(window).height();
      let et = $('.about').offset().top + 50;
      let eh = $('.about').outerHeight();
      let dh = $(document).height();

      if (wt + wh >= et || wh + wt == dh || eh + et < wh) {
        isAnim = 1;
        $('.js-anim-numbers').addClass('_show')
        $('.js-anim-numbers').delay(800).spincrement({
          thousandSeparator: "",
          duration: 3500
        });
      }
    };

    $(window).scroll(function () {
      if (!isAnim) {
        scrollTracking();
      }
    });
  }



  let slidesCount = $('.blog-slider__slide-wrap').length;
  if (width > 1024) {
    if (slidesCount > 4) {
      $('.js-blog-slider').addClass('_dots');
    }
  } else if (width > 768) {
    if (slidesCount > 3) {
      $('.js-blog-slider').addClass('_dots');
    }
  } else if (width > 576) {
    if (slidesCount > 2) {
      $('.js-blog-slider').addClass('_dots');
    }
  } else {
    $('.js-blog-slider').addClass('_dots');
  }

  $('.js-blog-slider').slick({
    arrows: false,
    slidesToShow: 4,
    dots: true,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1025,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  $('.js-cases-slider').slick({
    arrows: false,
    slidesToShow: 1,
    dots: true,
    slidesToScroll: 1,
  });

  if (width < 577) {
    $('.js-types-slider').slick({
      arrows: false,
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
      adaptiveHeight: true
    });

    $('.js-slider-portfolio').slick({
      arrows: false,
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
    });
  }

  //scroll to section
  $(".js-to-section").on("click", function () {

    if ($('.menu').hasClass('_open')) {
      $('.menu').removeClass('_open');
      body.removeClass('_fixed');
      $('.js-toggle-menu').removeClass('_open')
    }

    let href = $(this).attr("href");

    $("html, body").animate({
      scrollTop: $(href).offset().top 
    }, {
      duration: 370, // по умолчанию «400»
      easing: "linear" // по умолчанию «swing»
    });

    return false;
  });
  //scroll to section

});