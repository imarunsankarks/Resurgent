const bannerTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#banner-trigger",
    start: "top top",
    end: "center center",
    // pin: '#horizontal-scoll',
    scrub: true,
    markers: false,
    invalidateOnRefresh: true,
  },
});
// bannerTimeline.to(".banner-title", {
//   scale: 1.1,
//   x: () => 420,
// });
bannerTimeline.to(
  ".banner-product-img img",
  {
    y: () => 300,
    scale: 2,
  },
  "<"
);
bannerTimeline.to(
  ".banner-shape-element:nth-child(2)",
  {
    y: () => 500,
  },
  "<"
);


if (window.innerWidth > 768) {
  let horizontalSection = document.querySelector('#product-banner');

  gsap.to('#product-banner', {
      x: () => horizontalSection.scrollWidth * -1,
      xPercent: 100,
      scrollTrigger: {
          trigger: '#product-banner',
          start: 'center-=30px center',
          end: '+=500px',
          pin: '#product-banner',
          scrub: true,
          ease: 'none',
          // markers:true,
          invalidateOnRefresh: true,
      }
  });

}


    // <!-- ------------------------------for mouse positioning--------------------------------------------- -->

    const parallaxBanner = document.querySelector('#product-banner');
    const parallaxBannerImgs = document.querySelectorAll('.banner-product-img img');



    parallaxBanner.addEventListener('mousemove', (e) => {
        const centerX = parallaxBanner.offsetWidth / 2;
        const centerY = parallaxBanner.offsetHeight / 2;
        const mouseX = e.clientX - parallaxBanner.getBoundingClientRect().left;
        const mouseY = e.clientY - parallaxBanner.getBoundingClientRect().top;

        parallaxBannerImgs.forEach((image, index) => {
            const x = (mouseX - centerX) * (index + 1) * 0.05;
            const y = (mouseY - centerY) * (index + 1) * 0.05;
            image.style.transform = `translate(${x}px, ${y}px)`;
        });
    });