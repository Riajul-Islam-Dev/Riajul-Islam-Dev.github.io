<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Riajul Islam - View Resume</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="images/favicon.png" rel="icon">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">

    <link href="assets/libs/toastr/toastr.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .toast {
            background-color: #32BC38 !important;
            /* Lime background */
            color: white !important;
            /* White text */
        }

        #progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #f3f3f3;
            z-index: 1000;
        }

        #progress-bar {
            height: 100%;
            width: 0;
            background: #32bc38;
        }

        .scrollToTop {
            position: fixed;
            bottom: 20px;
            right: 30px;
            display: none;
            /* Hidden by default */
            width: 62px;
            height: 62px;
            background-color: #4caf50;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
            overflow: hidden;
            border: 4px solid #32bc38;
            /* Add white border */
        }

        .scrollToTop span {
            font-size: 26px;
            z-index: 1;
            /* Ensure icon is above the circular progress */
        }

        .circular-progress {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: conic-gradient(#4caf50 0%, rgba(255, 255, 255, 1) 0%);
            transition: background 0.3s;
            z-index: 0;
            /* Ensure it is behind the icon */
        }

        .circular-progress::before {
            content: '';
            position: absolute;
            top: 5px;
            /* Inner circle padding */
            left: 5px;
            /* Inner circle padding */
            right: 5px;
            /* Inner circle padding */
            bottom: 5px;
            /* Inner circle padding */
            background: #4caf50;
            /* Inner circle color */
            border-radius: 50%;
        }

        .pdf-viewer {
            width: 100%;
            min-height: 1195px;
            /* Minimum height equivalent to A4 size */
            border: 1px solid #ddd;
            overflow: auto;
            /* Allows scrolling if the content exceeds the height */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a subtle shadow for aesthetics */
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="position: relative; z-index: 0;">

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#32bc38" />
        </svg>
    </div>

    <div id="progress-container">
        <div id="progress-bar"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Riajul Islam</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                    <li class="nav-item"><a href="https://softkit.io" class="nav-link"><span>SoftkIT <img src="images/softkit-logo.png" alt="Icon" style="width: 30px; height: 30px;"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_1.png); width: 98%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About Me</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>As a dedicated Full Stack Web Developer, I bring unwavering passion and commitment to the
                                dynamic realm of software development, where I consistently craft inventive and
                                real-world web solutions.</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name: </span><span style="color: #32bc38;">Riajul Islam</span>
                                </li>
                                <li class="d-flex"><span>Address: </span><a href="https://www.google.com/maps?q=4+Tala+Office,South+Banasree,Dhaka,Bangladesh" target="_blank" rel="noopener noreferrer" aria-label="Google Maps Location">
                                        Banasree, Dhaka, Bangladesh
                                    </a></li>
                                <li class="d-flex"><span>Email: </span><a href="mailto:riajul.islam.dev@gmail.com">riajul.islam.dev@gmail.com</a></li>
                                <li class="d-flex"><span>Phone: </span><a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer">
                                        +880 17*****007</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="21">0</span>
                                <span>Projects complete</span>
                            </p>
                            <p>
                                <a href="Riajul_Islam_Software_Engineer_Resume.pdf" class="btn btn-outline-success py-3 px-3" download>Download Resume</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Riajul Islam - Resume</h1>
                    <h2 class="mb-4">Riajul Islam - Resume</h2>
                    <p>Here is my resume. You can also download it using the button below.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- First Resume Image -->
                <div class="col-md-10 mb-4">
                    <img src="images/Riajul_Islam_Software_Engineer_Resume-1.png"
                        alt="Riajul Islam Resume Page 1"
                        class="img-fluid">
                </div>
                <!-- Second Resume Image -->
                <div class="col-md-10">
                    <img src="images/Riajul_Islam_Software_Engineer_Resume-2.png"
                        alt="Riajul Islam Resume Page 2"
                        class="img-fluid">
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p>
                        <a href="Riajul_Islam_Software_Engineer_Resume.pdf" class="btn btn-outline-success py-3 px-3" download>Download Resume</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact Me</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>As the sun sets over the Padma River, Bangladesh unveils a breathtaking panorama, blending the
                        tranquility of rural life with the resilience of a nation on the rise.</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <a href="https://www.google.com/maps?q=4+Tala+Office,South+Banasree,Dhaka,Bangladesh" target="_blank" rel="noopener noreferrer" aria-label="Google Maps Location">
                                <span class="icon-map-signs" aria-hidden="true"></span>
                            </a>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>
                            <a href="https://www.google.com/maps?q=4+Tala+Office,South+Banasree,Dhaka,Bangladesh" target="_blank" rel="noopener noreferrer" aria-label="Google Maps Location" style="color: #32bc38;">
                                Banasree, Rampura, Dhaka, Bangladesh
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                                <span class="icon-phone2" aria-hidden="true"></span>
                            </a>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" style="color: #32bc38;">+880 17*****007</a></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <a href="mailto:riajul.islam.dev@gmail.com" aria-label="Email">
                                <span class="icon-paper-plane" aria-hidden="true"></span>
                            </a>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:riajul.islam.dev@gmail.com" aria-label="Email" style="color: #32bc38;">riajul.islam.dev@gmail.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <a href="https://softkit.io" target="_blank" rel="noopener noreferrer" aria-label="Visit Softkit Website">
                                <span class="icon-globe" aria-hidden="true"></span>
                            </a>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="https://softkit.io" target="_blank" rel="noopener noreferrer" aria-label="Visit Softkit Website" style="color: #32bc38;">softkit.io</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form id="contactForm" action="server_script.php" method="POST" class="border border-warning p-4 p-md-5 contact-form" style="background-color: #f1ffef;" onsubmit="return validateForm();">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                            <span id="nameError" style="color: red; display: none;">Please enter your name.</span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            <span id="emailError" style="color: red; display: none;">Please enter a valid email address.</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone Number">
                            <span id="phoneError" style="color: red; display: none;">Please enter a valid phone number.</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                            <span id="subjectError" style="color: red; display: none;">Please enter a subject.</span>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            <span id="messageError" style="color: red; display: none;">Please enter your message.</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success py-3 px-3">Send Message</button>
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url(images/bg_1.png); background-size: 56%;"></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a>
                            </li>
                            <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a>
                            </li>
                            <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/maps?q=4+Tala+Office,South+Banasree,Dhaka,Bangladesh" target="_blank" rel="noopener noreferrer" aria-label="Google Maps Location">
                                        <span class="icon icon-map-marker"></span>
                                        <span class="text">Banasree, Rampura, Dhaka, Bangladesh</span>

                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer">
                                        <span class="icon icon-phone"></span>
                                        <span class="text">+880 17*****007</span>
                                    </a>
                                </li>
                                <li><a href="mailto:riajul.islam.dev@gmail.com"><span class="icon icon-envelope"></span><span class="text">riajul.islam.dev@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Connect with Me!</h2>
                        <ul class="ftco-footer-social list-unstyled mt-3">
                            <li class="ftco-animate">
                                <a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-whatsapp"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="mailto:riajul.islam.dev@gmail.com">
                                    <span class="icon-envelope"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.linkedin.com/in/riajul-islam-dev/" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://github.com/Riajul-Islam-Dev" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-github"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://riajul-islam-dev.github.io/" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-globe"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://twitter.com/RiajulIslamDev" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-twitter"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.facebook.com/RiajulIslamDEV" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-facebook"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.instagram.com/tonmoy_ins/" target="_blank" rel="noopener noreferrer">
                                    <span class="icon-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This website
                        made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer" style="color: #32bc38; text-decoration: none; font-weight: bold;">Riajul Islam</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="scrollToTop" id="scrollToTopBtn" title="Go to top">
        <span>↑</span>
        <div class="circular-progress" id="circularProgress"></div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>

    <script src="assets/libs/toastr/toastr.min.js"></script>

    <script src="landing-assets/vendor/lottie/lottie.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        var animation = lottie.loadAnimation({
            container: document.getElementById(
                'animation-code-green'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'landing-assets/img/animations/animation-code-green.json'
        });
    </script>

    <script>
        function validateForm() {
            // Get form elements
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var phone = document.getElementById("phone").value.trim();
            var subject = document.getElementById("subject").value.trim();
            var message = document.getElementById("message").value.trim();

            var isValid = true;

            // Name validation
            if (name === "") {
                document.getElementById("nameError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("nameError").style.display = "none";
            }

            // Email validation
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email === "" || !emailPattern.test(email)) {
                document.getElementById("emailError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("emailError").style.display = "none";
            }

            // Phone validation
            var phonePattern = /^01[3-9]\d{8}$/; // Adjusted pattern for Bangladeshi phone numbers
            if (phone === "" || !phonePattern.test(phone)) {
                document.getElementById("phoneError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("phoneError").style.display = "none";
            }

            // Subject validation
            if (subject === "") {
                document.getElementById("subjectError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("subjectError").style.display = "none";
            }

            // Message validation
            if (message === "") {
                document.getElementById("messageError").style.display = "block";
                isValid = false;
            } else {
                document.getElementById("messageError").style.display = "none";
            }

            return isValid;
        }
    </script>

    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right", // You can change this to your desired position
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000", // Set duration for how long the toast should be visible
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            <?php
            if (isset($_SESSION['toastr'])) {
                echo "toastr.success('" . addslashes($_SESSION['toastr']) . "');";
                unset($_SESSION['toastr']);
            }
            ?>
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66b5e945146b7af4a43837a1/1i4r9eeec';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        // Get the button and progress elements
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        const progressBar = document.getElementById("progress-bar");
        const circularProgress = document.getElementById("circularProgress");

        // Initially hide the button
        scrollToTopBtn.style.display = "none";

        // Show button when scrolling down
        window.onscroll = function() {
            const scrollTop = document.documentElement.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

            // Update progress bar
            const scrollPercentage = (scrollTop / scrollHeight) * 100;
            progressBar.style.width = scrollPercentage + "%";

            // Update circular progress
            circularProgress.style.background = `conic-gradient(#4caf50 ${scrollPercentage}%, rgba(255, 255, 255, 0.3) ${scrollPercentage}%)`;

            // Show button if scrolled down
            if (scrollTop > 300) {
                scrollToTopBtn.style.display = "flex"; // Show the button when scrolled down
            } else {
                scrollToTopBtn.style.display = "none"; // Hide the button when near the top
            }
        };

        // Scroll to top function
        scrollToTopBtn.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    </script>

</body>

</html>