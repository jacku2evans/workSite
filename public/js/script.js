$(document).ready(function () {
    $(".brand").owlCarousel({
        
        items: 6,
        autoplay: true,
        autoplayTimeout: 2000,
        loop: true,
    });
    

	$("#slider").owlCarousel({
      loop: true,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 1500,
      autoplayHoverPause: true,
      smartSpeed: 1000,
      margin: 10,
      items: 1,
      center: true
    });

});
