$(".slider").slick({
  centerMode: true,
  infinite: true,
  // centerPadding: '0',
  slidesToShow: 1,
  speed: 400,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 4000,
  dots: true,
  variableWidth: true,
  rtl: false,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 1025,
      settings: {
        //slidesToShow: .92,
        slidesToShow: 1,
      },
    },
  ],
});

// $(".slider").on(
//   "beforeChange",
//   function (event, slick, currentSlide, nextSlide) {
//     //console.log('beforeChange', currentSlide, nextSlide);
//   }
// );
// $(".slider").on("afterChange", function (event, slick, currentSlide) {
//   //console.log('afterChange', currentSlide);
// });
