$(function() {
    $('.autoplay').slick({
        dots: true,
        arrows:true,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        centermode:true,
      });
    })




    
    $(function() {
      $('.autoplay').slick({
          dots: true,
          arrows:true,
          infinite: true,
          autoplay: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplaySpeed: 2000,
          centermode:true,
        });
      })

    

      $(document).ready(function(){
        $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
        });

        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});