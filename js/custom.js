
$(function(){
    $('.slider').not('.slick-initialized').slick({
      //centerMode: true,
      infinite: true,
      //slidesToShow: 1.925,
      slidesToShow: 1,
      speed: 500,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      variableWidth: true,
      rtl: false,
      responsive : [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 1025,
          settings: {
            //slidesToShow: .92,
            slidesToShow: 1,
          }
        }/*,
        {
          breakpoint: 1401,
          settings: {
            slidesToShow: 0.96,
          }
        },
        {
          breakpoint: 1701,
          settings: {
            slidesToShow: 0.95,
          }
        }*/
      ]
    });
    /*
    $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      //console.log('beforeChange', currentSlide, nextSlide);
    });
    $('.slider').on('afterChange', function(event, slick, currentSlide){
      //console.log('afterChange', currentSlide);
    });
    */
});