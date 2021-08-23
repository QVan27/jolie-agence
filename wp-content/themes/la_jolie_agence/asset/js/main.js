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
  $(window).scroll(function () {
    // checks if window is scrolled more than 700px, hide/show --->  navbar
    if ($(this).scrollTop() > 300) {
      $(".navbar").css("background-color", "var(--beige-color)");
      $(".nav-link").css("color", "var(--bleu-color)");
    } else {
      $(".navbar").css("background-color", "transparent");
      $(".nav-link").css("color", "var(--beige-color)");
    }
  });
});
