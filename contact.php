<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Resurgent AV</title>


    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" rel="stylesheet"
        crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">


</head>

<body>

    <!-- header will be here  -->
    <?php include('header.php') ?>

    <div class="viewport">
        <main id="main">
            <!-- --------------------------------banner---------------------------------- -->
            <section class="common-banner sec-padding">
                <div class="container">
                    <div class="row position-relative justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class="common-banner-text p-0">
                                <h1 class="common-banner-title wow animate__animated animate__flipInX animate__one">
                                    contact</h1>
                                <h2 class="common-banner-sub wow animate__animated animate__fadeInUp animate__two">
                                We integrate audiovisual solutions<br> for clients across the world</h2>
                            </div>

                        </div>
                        <div class="col-md-7">

                            <div class="banner-shape">
                                <img src="./assets/home/micro.webp" alt="">
                                <div class="circle-1 wow animate__animated animate__zoomIn animate__two"></div>

                                <div class="circle-2 wow animate__animated animate__zoomIn animate__three"></div>
                            </div>
                        </div>


                        <div class="scroll">
                            <img src="./assets/common/banner-arrow.svg" alt="">
                            <p>scroll</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec-padding">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6">
                            <div class="contact-form-content">
                                <h2 class="section-title wow animate__animated animate__fadeInUp animate__two">Connect with us</h2>
                                <p class="mb-0 wow animate__animated animate__fadeInUp animate__two">At the heart of our strategy lies a close collaboration with you. We
                                    understand your objectives, aspirations, and unique vision to create a customized
                                    design
                                    strategy. This collaborative process is more than just a partnership, it is a
                                    synergy of
                                    ideas, a fusion of creativity, and a shared journey towards achieving remarkable
                                    outcomes.</p>
                                <ul>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-instagram"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-lg-5">
                            <h4 class="form-heading">Let's talk about your business</h4>
                            <form action="/submit" method="post">
                                <input type="text" id="name" name="name" placeholder="Name" required class="form-field">
                                <input type="email" id="email" name="email" placeholder="Email" required
                                    class="form-field">
                                <input type="tel" id="mobNumber" name="mobNumber" placeholder="Mobile Number"
                                    pattern="[0-9]{10}" required class="form-field">
                                <input type="text" id="companyName" name="companyName" placeholder="Company Name"
                                    required class="form-field">
                                <select id="solutions" name="solutions" required class="form-field form-select">
                                    <option value="" disabled selected>Select a solution</option>
                                    <option value="solution1">Solution 1</option>
                                    <option value="solution2">Solution 2</option>
                                    <option value="solution3">Solution 3</option>
                                    <option value="solution4">Solution 4</option>
                                    <option value="solution5">Solution 5</option>
                                    <option value="solution6">Solution 6</option>
                                </select>
                                <select id="product" name="product" required class="form-field form-select">
                                    <option value="" disabled selected>Select a product</option>
                                    <option value="product1">Product 1</option>
                                    <option value="product2">Product 2</option>
                                    <option value="product3">Product 3</option>
                                    <option value="product4">Product 4</option>
                                    <option value="product5">Product 5</option>
                                    <option value="product6">Product 6</option>
                                </select>
                                <textarea id="message" name="message" rows="4" placeholder="Message..." required
                                    class="w-100"></textarea>
                                <div class="banner-button1 button-hover1 m-0">
                                    <div class="circle-large"></div>
                                    <button type="submit">Submit</button>
                                    <div class="btn-bg-black"></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </section>

            <section class="sec-padding">
                <div class="container">
                    <h2 class="section-title text-center wow animate__animated animate__fadeInUp animate__two">Locations</h2>
                    <div class="all-locations pt-5">
                        <div class="each-location active">
                            <h3>Bengaluru</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>#326, 3rd Floor, Hoysala Nagar, Binnamangala 1st Stage, Indiranagar, Bengaluru -
                                    560038, Karnataka, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <a href="tel:08025139300" class="text-dark">080-2513 9300</a>
                                <!-- <p>080-2513 9300</p> -->
                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/j6ryXMf8gAChE8Ce6" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Chennai</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>3rd Floor, Old No.: 73, New No.: 108, Rajalakshmi Mahal, Sir Theyagaraya Road, Pondy Bazaar, T. Nagar, Chennai - 600017, Tamil Nadu, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <a href="tel:04428151828" class="text-dark">044-2815 1828</a>
                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/GW8qwfWc8b4NTvvs7" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Mumbai</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>Office No. 409, Meadows building, Sahar Plaza, Near Kohinoor Continental Hotel, J. B. Nagar, Andheri-East, Mumbai: 400 059</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <!-- <p>+91 8025139300</p> -->
                                <a href="tel:08025139300" class="text-dark">+91 8025139300</a>

                                <!-- <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p> -->
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/DuBMzvWmKBYViDpN7" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Pune</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>Level 2, Bund Garden, Connaught Place, Pune - 411001, Maharashtra, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <!-- <p>020-4014 7535</p> -->
                                <a href="tel:02040147535" class="text-dark">020-4014 7535</a>

                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/7fYDp5HQiJmsmuG4A" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Ahmedabad</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>11-103, GCP Business Centre, Vijay Char Rasta, Memnagar, Ahmedabad - 380014, Gujarat, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <!-- <p>079-6134 4678</p> -->
                                <a href="tel:07961344678" class="text-dark">079-6134 4678</a>

                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/YZHBdB6GAontCSkG7" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Delhi</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>Regus Elegance Level-2, Elegance Tower, Jasola New Delhi - 110025, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <!-- <p>011-6635 1567</p> -->
                                <a href="tel:01166351567" class="text-dark">011-6635 1567</a>
                                
                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/kTQuwiGnJsZMaYpW9" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Hyderabad</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>4th ﬂoor, Gumidelli Commercial Complex, 1-10-39 to 44, Old Airport Road, Begumpet, Hyderabad - 500016, Telangana, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <!-- <p>91-40-67843907</p> -->
                                <a href="tel:914067843907" class="text-dark">91-40-67843907</a>

                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/1Qp9zaoSkfyxL6nR6" target="blank">View in Map</a>
                            </div>
                        </div>
                        <div class="each-location">
                            <h3>Kolkata</h3>
                            <div class="location-icon">
                                <img src="./assets/logos/bangalore.svg" alt="">
                            </div>
                            <div class="complete-details">
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <p>4th ﬂoor, Gumidelli Commercial Complex, 1-10-39 to 44, Old Airport Road, Begumpet, Hyderabad - 500016, Telangana, India</p>
                                <h3><i class="fas fa-phone"></i></h3>
                                <p>91-40-67843907</p>
                                <h3><i class="fas fa-fax"></i></h3>
                                <p>080-2513 9331</p>
                                <h3><i class="far fa-envelope"></i></h3>
                                <a href="mailto:info@resurgent.co.in" class="text-dark">info@resurgent.co.in</a>
                                <h3><i class="fas fa-map-marker-alt"></i></h3>
                                <a class="text-dark" href="https://maps.app.goo.gl/j6ryXMf8gAChE8Ce6" target="blank">View in Map</a>
                            </div>
                        </div>


                    </div>
                </div>

            </section>

            <?php include('footer.php') ?>
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
    <script src="js/common.js"></script>



    <script>
    new WOW().init();
    </script>




    <script>
    const locations = document.querySelectorAll('.each-location');

    locations.forEach(location => {
        location.addEventListener('mouseover', () => {
            locations.forEach(otherLocation => {
                otherLocation.classList.remove('active');
            });

            location.classList.add('active');
        });
    });
    </script>

</body>

</html>