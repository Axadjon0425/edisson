$(document).ready(function() {
    $('.carusel').slick({
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 1500,
        fade: true,
        cssEase: 'linear'
      });
});
$(document).ready(function() {
    $('.caruselTwo').slick({
        dots: false,
        arrows:false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2500,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});
$(window).on('scroll', function() {
    if ($(window).scrollTop()) {
        $('.navbar').addClass('scrollMenu')
    } else {
        $('.navbar').removeClass('scrollMenu')
    }
})


              