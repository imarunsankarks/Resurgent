<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Resurgent AV</title>


    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" rel="stylesheet"
        crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/2.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">


</head>

<body>

    <!-- header will be here  -->
    <?php include('header.php') ?>

    <div class="viewport">
        <main>

            <div id="banner-trigger">
                <section id="product-banner">
                    <div class="container">
                        <div class="row g-5 align-items-center justify-content-center">
                            <div class="col-lg-7">
                                <div class="banner-product-img">
                                    <img src="./assets/products/jabra/jabra-banner.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="banner-product-content">
                                    <h1 class="product-banner-title">Jabra Panacast</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, magni laborum? Sed
                                        corrupti blanditiis sapiente commodi rerum obcaecati libero perferendis.</p>
                                    <div class="banner-button1 button-hover1 cta-btn">
                                        <div class="circle-large"></div>
                                        <button>learn more</button>
                                        <div class="btn-bg-black"></div>
                                    </div>
                                    <div class="scroll">
                                        <img src="./assets/common/banner-arrow.svg" alt="">
                                        <p>scroll</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="sec-padding z-9" id="experience">
                    <div class="container">
                        <div class="row align-items-center g-4 g-md-0">
                            <div class="col-md-6 br-1">
                                <h2 class="section-title m-0">Experience the<br>
                                    Samsung Flip</h2>
                            </div>
                            <div class="col-md-6 ps-lg-5">
                                <p class="m-0">From businesses to schools and retail outlets to hospitals, our
                                    audiovisual
                                    solutions can be customised</p>
                            </div>
                            <div class="product-feature-img">
                                <img src="./assets/products/jabra/panacast-features.webp" alt="">
                                <div class="feature-marker-1 active" onmouseover="showFeature(1)">
                                    <span>1</span>
                                    <div class="ripple"></div>
                                </div>
                                <div class="feature-marker-2" onmouseover="showFeature(2)">
                                    <span>2</span>
                                    <div class="ripple"></div>
                                </div>
                                <div class="feature-marker-3" onmouseover="showFeature(3)"><span>3</span>
                                    <div class="ripple"></div>
                                </div>
                                <div class="feature-marker-4" onmouseover="showFeature(4)"><span>4</span>
                                    <div class="ripple"></div>
                                </div>
                                <div class="each-feature-det f-1">
                                    <span>01</span>
                                    <div class="content">
                                        <h3>Surface Hub Smart Camera</h3>
                                        <p>The AI-enabled camera's aperture and ultra-wide field of view of 136 degrees,
                                            renders everything in focus, near and far.</p>
                                    </div>
                                </div>
                                <div class="each-feature-det f-2">
                                    <span>02</span>
                                    <div class="content">
                                        <h3>Second feature</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, itaque! Harum,
                                            molestias.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <section class="sec-padding bg-white z-9">
                <div class="d-sm-block z-9">
                    <div class="continer p-0">
                        <div class="product-banner-img position-relative">
                            <div class="img-scroll-ht">
                                <div class="initial-ht"></div>
                                <div id="button-trigger">
                                </div>
                            </div>
                            <div class="product-img-container">
                                <div class="product-imgs">
                                    <div class="product-img">
                                        <img src="./assets/products/jabra/jabra-contact.webp"
                                            alt="product image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="product-det">
                                    <div class="content">
                                        <h2>To know more</h2>
                                        <div class="zoomIn-button">
                                            <button>
                                                Connect with us
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------why-us---------------------------------- -->
            <section class="sec-padding pt-0">
                <div class="container">
                    <h2 class="section-title text-md-center">Product features</h2>
                    <div class="row mt-md-5">
                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>Flexible</h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">Use</h3>
                                </div>
                                <p>Work seamlessly with your team, no matter where they are located, ensuring instant collaboration.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>intelligent </h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">180deg</h3>
                                </div>
                                <p>Seamless connectivity for your team, regardless of the equipment they utilize, with the world's first intelligent 180° Panoramic-4K Video Solution.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>For All </h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">Meeting Rooms</h3>
                                </div>
                                <p>From Individual use to Boardrooms, Jabra Panacast webcam gives you the edge you need visually.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>intelligent AI-enabled</h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">video conferencing</h3>
                                </div>
                                <p>AI-powered 4K Ultra-HD video Intelligent Zoom Intelligent Lighting Optimization Intuitive Picture-in-Picture mode.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>Changing </h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">ways of working</h3>
                                </div>
                                <p>On-device processing & integrated privacy cover Optimized for all leading UC platforms.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="why-card">
                                <h3>Discover the</h3>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="why-card-line"></span>
                                    <h3 class="why-second-head mb-0">difference</h3>
                                </div>
                                <p>Microsoft Teams and Zoom certify top devices for superior audio and user experience. Jabra exceeds these standards.</p>
                            </div>
                        </div>

                      

                    </div>
                </div>
            </section>

            <!-- --------------------------------------------------CTA---------------------------------------- -->
            <section class="cta">
                <div class="container">
                    <div class="row z-9">
                        <div class="col-12">
                            <p class="cta-text-1">Changing to a hybrid work culture?</p>
                            <p class="cta-text-2">Make an effortless transition<br>
                                with our AV solutions.</p>
                            <a href="about.html" aria-label="Know about the company">
                                <div class="banner-button1 button-hover1 cta-btn">
                                    <div class="circle-large"></div>
                                    <button>learn more</button>
                                    <div class="btn-bg-black"></div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>

            </section>

            <!-- ------------------------------------------features----------------------------------- -->
            <section id="product-feature-imgs">
                <div class="container">
                    <div class="row">
                        <h2 class="section-title">Know the product features</h2>
                        <div class="gallery">
                            <div class="left">
                                <div class="features-scroll">
                                </div>
                            </div>
                            <div class="right">
                                <div class="photos">

                                    <div class="each-feature-card">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div class="other-cards">
                                                    <img src="./assets/products/jabra/jabra-panacast-50-whiteboard.jpg"
                                                        alt="">
                                                    <div class="content">
                                                        <!-- <img src="./assets/logos/ouline.svg" alt=""> -->
                                                        <!-- <h3>Microsoft Whiteboard-enabled</h3> -->
                                                        <p>Collaborate anywhere with Steelcase Roam Mobile Stands and
                                                            the APC Charge Mobile Battery3 for Surface Hub 2S 50"</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="each-feature-card">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div class="other-cards">
                                                    <img src="./assets/products/jabra/jabra-panacast-f-2.webp"
                                                        alt="">
                                                    <div class="content">
                                                        <!-- <img src="./assets/logos/ouline.svg" alt="">
                                                        <h3>Instant meetings on Microsoft Teams</h3> -->
                                                        <p>Samsung Flip provides users with a smooth and familiar pen to
                                                            paper writing experience in a variety of available colors,
                                                            styles and widths. Up to 4 people can write simultaneously,
                                                            using any object as a writing tool.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="each-feature-card">
                                        <div class="container h-100">
                                            <div class="row h-100">
                                                <div class="other-cards">
                                                    <img src="./assets/products/jabra/jabra-panacast-f-3.webp"
                                                        alt="">
                                                    <div class="content">

                                                        <!-- <h3>Microsoft Whiteboard-enabled</h3> -->
                                                        <p>Samsung Flip can be used for a wide range of business
                                                            applications, providing embedded versatile templates. You
                                                            can use the Flip as a calendar, scheduler, note or checklist
                                                            board.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ---------------------------------------footer------------------------------- -->
            <?php include 'footer.php' ?>
            <!-- <div class="pb-5"></div> -->
        </main>
    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    <!-- <script src="js/home.js"></script> -->
    <script src="js/common.js"></script>



    <script>
        new WOW().init();
    </script>

    <script>
        function showFeature(arg) {
            const testimonialClass = `.f-${arg}`;
            const testimonial = document.querySelector(testimonialClass);
            const featureMarkers = document.querySelectorAll('[class^="feature-marker-"]');

            featureMarkers.forEach(marker => {
                marker.classList.remove("active");
            });
            const activeMarker = document.querySelector(`.feature-marker-${arg}`);
            if (activeMarker) {
                activeMarker.classList.add("active");
            }

            if (testimonial) {
                const allTestimonials = document.querySelectorAll('.each-feature-det');
                allTestimonials.forEach((t) => {
                    if (t !== testimonial) {
                        t.style.opacity = 0;
                    }
                });

                testimonial.style.opacity = 1;
            }
        }
    </script>

    <script>
        // <!-- --------------for banner image and content------------------------------------------- -->

        document.addEventListener("DOMContentLoaded", function () {
            if (window.innerWidth > 767) {
                gsap.set(".product-img img", {
                    x: () => {
                        const imageWidth = window.innerWidth > 750 ? 700 : window.innerWidth * 0.9;
                        const viewportWidth = window.innerWidth;
                        const xValue = (viewportWidth - imageWidth) / 2;
                        console.log(xValue);

                        return xValue;
                    },
                    y: "-=25%",
                    scale: 1,
                    width: window.innerWidth > 750 ? 700 : '90vw',
                    height: window.innerWidth > 750 ? 700 : '50vh',
                    borderRadius: window.innerWidth > 750 ? '50%' : '25px'
                });
                const animation = gsap.to(".product-img img", {
                    x: 0,
                    y: "+=10%",
                    scale: 1.2,
                    duration: 1,
                    width: '100%',
                    height: '80vh',
                    borderRadius: '0px',
                    ease: "power1.inOut",
                    stagger: 1,
                });

                ScrollTrigger.create({
                    trigger: ".product-banner-img",
                    start: "top top",
                    end: "bottom bottom",
                    pin: ".product-img-container",
                    animation: animation,
                    scrub: true,
                    markers: false,
                    threshold: 1,
                });



                gsap.set(".product-det", {
                    opacity: 0,
                    scale: 1,
                    x: 0
                });


                const buttonTimeline = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#button-trigger",
                        start: "top 50%",
                        end: "bottom 40%",
                        // markers: true,
                        // scrub: true,
                        toggleActions: "play reverse play reverse",
                    },
                });

                buttonTimeline.to(".product-det", {
                    opacity: 1,
                    scale: 1.2,
                    x: "0%",
                    duration: .3,
                    ease: "power1.out"
                });


            }
        })
    </script>

    <script>
        if (window.innerWidth > 767) {
            gsap.set(".each-feature-card:not(:first-child)", {
                x: "0%",
                opacity: 0,
            });

            const animation = gsap.to(".each-feature-card:not(:first-child)", {
                x: "0%",
                opacity: 1,
                duration: 0.5,
                stagger: 1,
                paused: true,
            });

            ScrollTrigger.create({
                trigger: ".features-scroll",
                start: "top top",
                end: "bottom bottom",
                pin: ".right",
                animation: animation,
                scrub: true,
                // markers: true,
                threshold: 0,
            });
        }
    </script>

    <script>
        // <!-- ------------------------------for mouse positioning--------------------------------------------- -->

        const parallaxSection = document.querySelector('.product-det');
        const parallaxImages = document.querySelectorAll('.zoomIn-button');



        parallaxSection.addEventListener('mousemove', (e) => {
            const centerX = parallaxSection.offsetWidth / 2;
            const centerY = parallaxSection.offsetHeight / 2;
            const mouseX = e.clientX - parallaxSection.getBoundingClientRect().left;
            const mouseY = e.clientY - parallaxSection.getBoundingClientRect().top;

            parallaxImages.forEach((image, index) => {
                const x = (mouseX - centerX) * (index + 1) * 0.08;
                const y = (mouseY - centerY) * (index + 1) * 0.08;
                image.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>
<!-- --------------------------banner-animation------------------------- -->
    <script>
        const bannerTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: "#banner-trigger",
                start: "top top",
                end: "center center",
                scrub: true,
                markers: false,
                invalidateOnRefresh: true,
            },
        });
        bannerTimeline.to(
            ".banner-product-img img",
            {
                x: () => 200,
                scale: 1.5,
            },
            "<"
        );
    </script>

</body>

</html>