// $(function() {
//   $('.rw-slider').bxSlider({
//     auto: false,
//     autoControls: false,
//     speed: 500,
//     slideSelector: 'div.item',
//     minSlides: 1,
//     maxSlides: 4,
//     moveSlides: 1,
//     slideWidth: 600,
//     slideMAXWidth: 400,
//     pager: false,
//     responsive: false,
//     touchEnabled: false,
//     infiniteLoop: false
//   });
// });
var windowsize = $(window).width();

    if (windowsize < 601) {
      $('.rw-slider').bxSlider({
        auto: false,
        autoControls: false,
        speed: 500,
        slideSelector: 'div.item',
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        pager: false,
        responsive: false,
        touchEnabled: true,
        infiniteLoop: true,
        slideMargin: 60,
        shrinkItem: true,
        mySlides: 1
      });
		
	} else {
    $('.rw-slider').bxSlider({
      auto: false,
      autoControls: false,
      speed: 500,
      slideSelector: 'div.item',
      minSlides: 2,
      maxSlides: 4,
      moveSlides: 1,
      pager: false,
      responsive: false,
      touchEnabled: true,
      infiniteLoop: true,
      slideMargin: 60,
      shrinkItem: true,
      slideWidth: 350,
      mySlides: 1
    });
  }
  
