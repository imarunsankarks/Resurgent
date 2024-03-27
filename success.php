<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success Stories - Resurgent AV Integrators PVT Ltd - AV Solutions</title>


    <link rel="icon" type="image/png" href="./assets/common/resurgent-logo.webp">
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
    <link href="css/success.css" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">


</head>

<body>

    <!-- header will be here  -->
    <?php include('header.php') ?>
    <div class="modal fade modal-form" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="section-sub-heading" id="exampleModalLongTitle">Complete the form for case study</h5>

                </div>
                <div class="modal-body">
                    <form id="pdfForm" onsubmit="return false;">
                        <input type="text" id="name" name="name" placeholder="Your Name"><br><br>
                        <input type="email" id="email" name="email" placeholder="Mail id"><br><br>
                        <input type="number" id="phone" name="phone" placeholder="Mobile number"><br><br>
                        <label for="caseStudy">Choose case study:</label>
                        <select id="caseStudy" name="caseStudy">
                            <option value="caseStudy1">Azim Premji University</option>
                            <option value="caseStudy2">WPP</option>
                        </select><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn button-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn download-button" onclick="downloadPDF()">Download PDF</button>
                </div>
            </div>
        </div>
    </div>

    <div class="viewport">
        <main id="main">
            <!-- --------------------------------banner---------------------------------- -->
            <section class="common-banner sec-padding">
                <div class="container">
                    <div class="row position-relative justify-content-center align-items-center">
                        <div class="col-md-5">
                            <div class="common-banner-text p-0">
                                <h1 class="common-banner-title wow animate__animated animate__flipInX animate__one">
                                    Success</h1>
                                <h1 class="common-banner-title wow animate__animated animate__flipInX animate__one">
                                    Stories</h1>
                                <!-- <h2 class="common-banner-sub wow animate__animated animate__fadeInUp animate__two">
                                    We aren't just a company,<br> we're a community</h2> -->
                            </div>

                        </div>
                        <div class="col-md-7">

                            <div class="banner-shape">
                                <img loading="lazy" src="./assets/common/success-stories.webp" alt="">
                                <div class="circle-1 wow animate__animated animate__zoomIn animate__two"></div>

                                <div class="circle-2 wow animate__animated animate__zoomIn animate__three"></div>
                            </div>
                        </div>


                        <div class="scroll">
                            <img loading="lazy" src="./assets/common/banner-arrow.svg" alt="">
                            <p>scroll</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec-padding">
                <div class="container">
                    <div class="row pt-4 pb-5 align-items-center sectors-head">
                        <div class="col-md-6 br-1">
                            <h2 class="mb-0 section-title">Explore our<br> success stories </h2>
                        </div>
                        <div class="col-md-6">
                            <p class="ps-md-5 mb-0">Explore our success stories, featuring a range of AV integration projects and the impactful outcomes they've achieved, providing insights into our expertise and capabilities.</p>
                        </div>

                    </div>
                    <div class="row align-items-center g-5">
                        <div class="col-md-6">
                            <div class="stories-card">
                                <img loading="lazy" src="./assets/success/azim.webp" alt="">
                                <div class="content">
                                    <h3>Azim Premji University</h3>
                                    <p>Azim Premji University was a unique AV project for Resurgent. With 67 classrooms,
                                        2 Seminar Halls with 250-seater capacity......</p>
                                    <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Get full article &nbsp; <i class="fas fa-arrow-right"></i>
                                    </button>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stories-card">
                                <img loading="lazy" src="./assets/success/wpp.webp" alt="">
                                <div class="content">
                                    <h3>WPP</h3>
                                    <p>For Resurgent, WPP Mumbai was a unique and high visibility project implemented
                                        which catered to
                                        ......</p>
                                    <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Get full article &nbsp; <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
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
    const formButtons = document.querySelectorAll('.form-btn');
    const formModal = document.querySelector('.modal-form');
    const formClose = document.querySelector('.button-close');


    formButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            formModal.classList.add('show', 'd-block');
        });
    });
    formClose.addEventListener('click', function() {
        formModal.classList.remove('show', 'd-block');
    });
    </script>
    <script>
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidPhoneNumber(phoneNumber) {
        var phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phoneNumber);
    }

    function downloadPDF() {
        var caseStudy = document.getElementById('caseStudy').value;

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;


        if (name.trim() === '' || email.trim() === '' || phone.trim() === '') {
            alert('Please fill in all fields.');
            return false;
        }
        if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        if (!isValidPhoneNumber(phone)) {
            alert('Please enter a valid phone number (10 digits only).');
            return false;
        }

        var pdfUrls = {
            'caseStudy1': './assets/success/APU-case-study.pdf',
            'caseStudy2': './assets/success/WPP-case-study.pdf'
        };

        var pdfUrl = pdfUrls[caseStudy];
        if (pdfUrl) {
            window.open(pdfUrl, '_blank');
        } else {
            alert('Invalid case study selection.');
        }

    }
    </script>


</body>

</html>