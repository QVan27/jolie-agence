// TweenMax.from(".container-card-flip", 1.5, {
//     delay: 1,
//     y: "200%",
//     ease: Expo.easeInOut,
//   });

// gsap.to(".container-card-flip", {
//     scrollTrigger: ".container-card-flip", // start the animation when ".box" enters the viewport (once)
//     x: 500,
//   });

  gsap.fromTo("#save", {opacity: 0}, {opacity: 1, duration: 2, delay: 1});
  gsap.fromTo(".married", {opacity: 0}, {opacity: 1, duration: 2, delay: 1.5});

//   TweenMax.staggerFrom(
//     ".container-card-flip",
//     1.5,
//     {
//       delay: 5,
//       opacity: 0,
//       x: "-20",
//       ease: Expo.easeInOut,
//     },
//     0.08
//   );

//   TweenMax.from(".second-box-content", 1.5, {
//     delay: 1,
//     x: "115%",
//     ease: Expo.easeInOut,
//   });
