// Menu Burger
const menu = document.querySelector(".menu");
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
  menu.classList.toggle("active");
  burger.classList.toggle("active");
});

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

// window.cookieconsent.initialise({
//   cookie: {
//      domain : "/",
//      name: "cookie_consent",
//    },
//    palette:{
//      popup:  { background: "#f8f5f3"  },
//      button: { background: "#092636"},
//    },
//    content:{
//      message: "Nous utilisons des cookies pour vous offrir une meilleure expérience de navigation et analyser le trafic du site. Si vous continuez à utiliser ce site, vous consentez à notre utilisation des cookies",
//      dismiss: "Compris",
//      learnMore: "En savoir plus",
//    },
//  });

