$(window).load(function () {

  // Flexslider
  $(".flexslider").flexslider({
    animation: "fade",
    directionNav: false,
    controlNav: false,
    slideshowSpeed: 4000,
    animationSpeed: 1500,
  });

  // NAVBAR JS
  // $(window).scroll(function () {
    // checks if window is scrolled more than 700px, hide/show --->  navbar
  //   if ($(this).scrollTop() > 700) {
  //     $(".navbar").css("position", "fixed");
  //     $(".navbar").css("background-color", "#fff");
  //     $(".nav-link").css("color", "#666");
  //   } else {
  //     $(".navbar").css("position", "absolute");
  //     $(".navbar").css("background-color", "transparent");
  //     $(".nav-link").css("color", "#fff");
  //   }
  // });

  
});
