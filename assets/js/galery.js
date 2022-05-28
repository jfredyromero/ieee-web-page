gsap.timeline({
  scrollTrigger: {
    trigger: ".grid-container",
    start: "top top",
    end: "bottom bottom",
    scrub: true,
    pin: ".grid",
    anticipatePin: 1
  }
})
  .set(".gridBlock:not(.centerBlock)", { autoAlpha: 0 })
  .to(".gridBlock:not(.centerBlock)", { duration: 0.1, autoAlpha: 1 }, 0.001)
  .from(".gridLayer", {
    scale: 2,
    ease: "none",
  });


// Images to make it look better, not related to the effect
const size = Math.max(innerWidth, innerHeight);
gsap.set('.gridBlock', { backgroundImage: i => `url(https://picsum.photos/${size}/${size}?random=${i})` });

const bigImg = new Image;
bigImg.addEventListener("load", function () {
  gsap.to(".centerPiece .gridBlock", { autoAlpha: 1, duration: 0.5 });
});

bigImg.src = `https://picsum.photos/${size}/${size}?random=50`;