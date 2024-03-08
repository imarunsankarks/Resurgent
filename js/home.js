var owl1 = $(".fourth-carousel");
owl1.owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  dots: false,
  smartSpeed: 3000,
  autoplay: true,
  autoplayTimeout: 5000,
  mouseDrag: false,
  autoplayHoverPause: false,
  animateOut: 'fadeOut',
  // animateIn: "fadeInUp",
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1200: {
      items: 1,
    },
  },
});

gsap.set(".photo:not(:first-child)", {
  x: "0%",
  opacity: 0,
});

gsap.set(".photo:first-child", {
  x: "0%",
  scale: 1,
});

const animation = gsap.to(".photo:not(:first-child)", {
  x: "0%",
  opacity: 1,
  duration: 0.1,
  stagger: 1,
  paused: false,

});
const scaleDownAnimation = gsap.to(".photo:nth-child(1)", {
  scale: 1,
  x: "0%",
  duration: 0.1,
  paused: false,
});

ScrollTrigger.create({
  trigger: ".detailsWrapper",
  start: "top top",
  end: "bottom bottom",
  pin: ".right",
  animation: animation,
  scrub: true,
  // markers: true,
  threshold: 0,
  onToggle: () => {
    scaleDownAnimation.play();
  },
  onToggleBack: () => {
    scaleDownAnimation.reverse();
  },
});

window.addEventListener("scroll", function () {
  let hideCarousel = document.querySelector(".fourth-carousel");
  if (window.scrollY > 0) {
    hideCarousel.classList.add("op-0");
  }
  if (window.scrollY < 70) {
    hideCarousel.classList.remove("op-0");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  $(function () {
    const cards = gsap.utils.toArray(".sticky-image");

    cards.forEach((image, index) => {
      const tween = gsap.to(image, {
        scrollTrigger: {
          trigger: image,
          start: () => `40% center+=30`,
          endTrigger: "#design",
          end: () => `top-=300 bottom-=300`,
          scrub: true,
          pin: true,
          pinSpacing: false,
          // markers: true,
          invalidateOnRefresh: true,
        },
        ease: "none",
        scale: () => 1 - (cards.length - index) * 0.1,
      });
    });

    const content = gsap.utils.toArray(".services_content");

    gsap.set(".services_content:not(:first-child)", {
      opacity: 0,
      // height:0,
    });

    gsap.set(".services_content:first-child", {
      opacity: 1,
    });

    content.forEach((image, index) => {
      const tween = gsap.to(image, {
        scrollTrigger: {
          trigger: image,
          start: () => `40% center+=50`,
          endTrigger: "#design",
          end: () => `top-=300 bottom-=300`,
          scrub: true,
          pin: true,
          pinSpacing: false,
          // markers: true,
          invalidateOnRefresh: true,
        },
        // zIndex:10,
        ease: "none",
        opacity: 100,
        // height: 320
      });
    });


    gsap.timeline({
      scrollTrigger: {
        trigger: ".sectors-head",
        start: $(window).width() > 567 ? "top top+=70" : "top top+=40",
        endTrigger: "#design",
        end: "bottom bottom",
        pin: true,
        pinSpacing: false,
        // markers: true
      },
    });
    



  });
});


var owlProcess = $(".owl-process").owlCarousel({
  loop: false,
  autoplay: false, 
  stagePadding:  window.innerWidth > 1201 ? 260 : 0,
  margin: 10,
  nav: true,
  dots: false,
  autoplayTimeout: 10000,
  autoplayHoverPause: false,
  smartSpeed: 1000,
  navText: [
    "<i class='fal fa-arrow-left'></i>",
    "<i class='fal fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

ScrollTrigger.create({
  trigger: ".owl-process",
  start: "top bottom-=300px", 
  end: "bottom+=400 bottom",
  onToggle: function () {
    owlProcess.trigger("to.owl.carousel", [0]).trigger("play.owl.autoplay", [6000]); 
  },
  onToggleBack: function () {
    owlProcess.trigger("to.owl.carousel", [0]).trigger("stop.owl.autoplay"); 
  },
});



var owlClient = $(".owl-client");
owlClient.owlCarousel({
  items: 4,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 2500,
  autoplayHoverPause: true,
  smartSpeed: 4000,
  animateOut: "fadeOut",
  dots: false,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  }
});

var owlLinkedin = $(".owl-linkedin");
owlLinkedin.owlCarousel({
  items: 3,
  loop: true,
  margin: 10,
  autoplay: false,
  smartSpeed: 1000,
  nav: true,
  dots: false,
  navText: [
    "<i class='fal fa-arrow-left'></i>",
    "<i class='fal fa-arrow-right'</i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    991: {
      items: 2,
    },
    1200: {
      items: 3,
    },
  }
});

// <!-- ------------------------------------------------------------products----------------------------------------------------- -->

gsap.set(".port-photo", {
  x: "-50%",
  y: "-22%",
  scale: 3.2,
});

gsap.set(".port-photo a:not(:nth-child(5))", {
  opacity: 0,
});

const portScaleDownAnimation = gsap.to(".port-photo", {
  scale: 1,
  x: "-50%",
  y: "0%",
  duration: 0.1,
  paused: true,
  stagger: true,
});

const portOpacityAnimation = gsap.to(".port-photo a:not(:nth-child(5))", {
  opacity: 1,
  // y: "25%",
  duration: 0.5,
  paused: true,
  stagger: true,
});

ScrollTrigger.create({
  trigger: ".port-gallery",
  start: "top top",
  end: "bottom bottom",
  pin: ".port-right",
  animation: portScaleDownAnimation,
  scrub: true,
  markers: false,
  onEnter: () => {
    portOpacityAnimation.play();
  },
  onLeaveBack: () => {
    portOpacityAnimation.reverse();
  },
});

const incNum = document.querySelector(".owl-process .owl-nav .owl-next");
const decNum = document.querySelector(".owl-process .owl-nav .owl-prev");

var number = 1;

incNum.addEventListener("click", function () {
  let proccessNum = document.querySelector(".process-num p");
  if (number < 5) {
    number += 1;
    proccessNum.innerHTML = `0${number}`;
  }
});

decNum.addEventListener("click", function () {
  let proccessNum = document.querySelector(".process-num p");
  if (number > 1) {
    number -= 1;
    proccessNum.innerHTML = `0${number}`;
  }
});

// <!-- -------------------------------------------------------------counter---------------------------------------------------- -->

var isCounterActivated = false;

$(window).scroll(function () {
  if (!isCounterActivated) {
    var counterOffset = $(".counter").offset().top;
    var windowHeight = $(window).height();
    var scrollPosition = $(window).scrollTop();

    if (scrollPosition + windowHeight >= counterOffset) {
      isCounterActivated = true;

      $(".counter").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");

        $({
          countNum: $this.text(),
        }).animate(
          {
            countNum: countTo,
          },
          {
            duration: 2000,
            easing: "linear",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
            },
          }
        );
      });
    }
  }
});




function startLoader(){
	let counterElement = document.querySelector('.preloader-counter');
	let currentValue = 0;

	function updateCounter(){
		if (currentValue === 100){
			return;
		}

		currentValue +=  Math.floor(Math.random()* 10) + 1; 

		if (currentValue > 100){
			currentValue = 100;
		}

		counterElement.textContent = currentValue;

		let delay =  Math.floor(Math.random()* 100); 

		setTimeout(updateCounter, delay);

	}
	updateCounter();

	gsap.to(".preloader-counter", .25,{
		delay: 1,
		opacity: 0
	})
	
	gsap.to(".preloader-overlay .bar", 1.5,{
		delay: 1,
		height: 0,
		stagger:{
			amount: 0.5,
		},
		ease: "power4.inOut"
	})
	setTimeout(() => {
		let counterElement = document.querySelector('.preloader-counter');
		let counterOverlay = document.querySelector('.preloader-overlay');
	
		counterElement.style.zIndex = -1;
		counterOverlay.style.zIndex = -1;
	},3000)
}

startLoader();

