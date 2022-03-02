$('.single-item').slick({
    slidesToShow: 1,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    prevArrow: $('.prev-hero'),
    nextArrow: $('.next-hero'),    
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
         
      }
    }
  ]
});
$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 4,        
    prevArrow: $('.prev-movie'),
    nextArrow: $('.next-movie'),
    responsive: [
        {
            breakpoint: 1024,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  