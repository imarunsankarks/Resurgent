const bannerTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#main",
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
  ".banner-shape-element:first-child",
  {
    y: () => -300,
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
bannerTimeline.to(
  ".banner-shape-element:nth-child(3)",
  {
    y: () => -400,
  },
  "<"
);
bannerTimeline.to(
  ".banner-shape-element:nth-child(4)",
  {
    y: () => 100,
  },
  "<"
);
bannerTimeline.to(
  ".banner-shape-element:nth-child(5)",
  {
    y: () => -100,
  },
  "<"
);
bannerTimeline.to(
  ".banner-shape-element:nth-child(6)",
  {
    y: () => -300,
  },
  "<"
);
bannerTimeline.to(
  ".banner-shape-element:nth-child(7)",
  {
    y: () => 400,
  },
  "<"
);
