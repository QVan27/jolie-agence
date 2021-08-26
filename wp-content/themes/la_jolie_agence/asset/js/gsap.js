// TweenMax.from(".container-card-flip", 1.5, {
//     delay: 1,
//     y: "200%",
//     ease: Expo.easeInOut,
//   });


// gsap.registerPlugin(ScrollTrigger);

// gsap.fromTo("#save", {opacity: 0}, {opacity: 1, duration: 2, delay: 1});
// gsap.fromTo(".married", {opacity: 0}, {opacity: 1, duration: 2, delay: 1.5});

  // let t1 = gsap.timeline({
  //     scrollTrigger : {
  //         trigger: '#third',
  //         start: "center bottom",
  //     }
  // });
  // t1.from(".third-box-content", {x: 200, opacity: 0, duration: 1})

  // gsap.to(".container-card-flip", {
  //   scrollTrigger: ".container-card-flip", // start the animation when ".box" enters the viewport (once)
  //   x: 500
  // });

  gsap.utils.toArray(".box-presta-text").forEach(function (elem) {
    ScrollTrigger.create({
      trigger: elem,
      start: "top 80%",
      end: "bottom 20%",
      // markers: true,
      onEnter: function () {
        gsap.fromTo(
          elem,
          { y: 100, autoAlpha: 0 },
          {
            duration: 1.25,
            y: 0,
            autoAlpha: 1,
            ease: "back",
            overwrite: "auto"
          }
        );
      },
      onLeave: function () {
        gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
      },
      onEnterBack: function () {
        gsap.fromTo(
          elem,
          { y: -100, autoAlpha: 0 },
          {
            duration: 1.25,
            y: 0,
            autoAlpha: 1,
            ease: "back",
            overwrite: "auto"
          }
        );
      },
      onLeaveBack: function () {
        gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
      }
    });
  });
  

  // TweenMax.staggerFrom(
  //   ".container-card-flip",
  //   1.5,
  //   {
  //     delay: 5,
  //     opacity: 0,
  //     x: "-20",
  //     ease: Expo.easeInOut,
  //   },
  //   0.08
  // );

//   TweenMax.from(".second-box-content", 1.5, {
//     delay: 1,
//     x: "115%",
//     ease: Expo.easeInOut,
//   });
