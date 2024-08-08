<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Riajul Islam - Portfolio</title>
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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Riajul Islam</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png); background-size: 60%;">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>Riajul Islam</span></h1>
                                <h2 class="mb-4">A Full Stack Web Developer</h2>
                                <p><a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer" class="btn btn-primary py-3 px-4">Hire me</a>
                                    <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My
                                        works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_2.png); background-size: 60%;">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">What are you waiting for!</span>
                                <h1 class="mb-4 mt-3"><span>Together,</span></h1>
                                <h2>we'll turn dreams into reality and build something <span style="color: #32bc38;">amazing</span></h2>
                                <p><a href="https://wa.me/+8801722787007" target="_blank" rel="noopener noreferrer" class="btn btn-primary py-3 px-4">Hire me</a>
                                    <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My
                                        works</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-3" id="animation-code-green"></div>
        </div>
    </section>

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
                            <p><a href="Riajul_Islam_Software_Engineer_Resume.pdf" class="btn btn-primary py-3 px-3" download>Download Resume</a></p>
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
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>Bangladesh, a picturesque land of rivers, brims with the serenity of flowing waters and the
                        harmony of vibrant cultures.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Nov 2023 - Present</span>
                        <h2>Senior Full-Stack Web Developer</h2>
                        <span class="position">Trust Innovation Limited</span>
                        <p class="mt-4">With a focus on Full-Stack Development, I bring expertise in Vue.js, Laravel,
                            PHP, and JavaScript. My proficiency in these technologies enables me to create dynamic and
                            responsive web applications with a strong emphasis on user experience and functionality.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Dec 2022 – Feb 2023</span>
                        <h2>Intern Software Engineer (Remote)</h2>
                        <span class="position">ZUU Co.,Ltd.</span>
                        <p class="mt-4">I have a versatile skill set encompassing Web Development, Go (Programming
                            Language), PostgreSQL, Redis, and CLI, applied in full-stack development. My hands-on
                            experience includes contributing to the Zuu Online website, where I utilized my proficiency
                            in Japanese languages, ensuring a seamless and culturally nuanced web development
                            experience.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">May 2022 – Oct 2023</span>
                        <h2>Junior Full Stack Web Developer</h2>
                        <span class="position">Leotech BD</span>
                        <p class="mt-4">I achieved hands-on experience in Full-Stack Development, having successfully
                            contributed to e-commerce projects and played a pivotal role in the development of BRAC's
                            case management website for Lawyers, "CaseHub". My proficiency spans PHP applications,
                            Laravel, Yii, PHP, MySQL, Bootstrap, and JavaScript, ensuring robust and innovative
                            solutions in web development.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Oct 2021 – Apr 2022</span>
                        <h2>Junior Software Engineer</h2>
                        <span class="position">NexKraft Limited</span>
                        <p class="mt-4">I achieved hands-on experience in Full-Stack Development, having successfully
                            contributed to e-commerce projects and played a pivotal role in the development of BRAC's
                            case management website for Lawyers, "CaseHub". My proficiency spans PHP applications,
                            Laravel, Yii, PHP, MySQL, Bootstrap, and JavaScript, ensuring robust and innovative
                            solutions in web development.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Sep 2020 – Oct 2021</span>
                        <h2>Associate Web Developer</h2>
                        <span class="position">Perky Rabbit</span>
                        <p class="mt-4">My web development journey has honed my skills in learning new languages and advanced coding techniques. This expertise enables me to transform innovative ideas into impactful solutions, establishing a solid presence in the ever-evolving world of web development.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">May 2014 – Aug 2019</span>
                        <h2>Bachelor's Degree of Computer Science and Engineering</h2>
                        <span class="position">East West University</span>
                        <p class="mt-4">My education has equipped me with knowledge in computer systems, algorithms, and
                            programming languages, refining my skills in problem-solving and software development. This
                            foundation enables me to design and implement innovative solutions in the dynamic realm of
                            technology.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="Riajul_Islam_Software_Engineer_Resume.pdf" class="btn btn-primary py-3 px-3" download>Download Resume</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <h5>Offering you a range of services including web development, mobile app development, custom
                        software solutions, UI/UX design, and digital marketing.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-web-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Development</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ux-design"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Design</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-innovation"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">App Development</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Branding</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ideas"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Product Strategy</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#services-section" class="services-1">
                        <span class="icon">
                            <i class="flaticon-idea"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Innovative Ideas</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">My Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    <p>Far, far into the future, in a world where technology and imagination converge, humanity embarks
                        on an uncharted journey of endless possibilities.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h2 style="color: #32bc38">Front-end Technologies:</h2>
                    </div>
                </div>

                <!-- HTML5 -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>HTML5</h3>
                        <div class="progress">
                            <div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CSS3 -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>CSS3</h3>
                        <div class="progress">
                            <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Bootstrap</h3>
                        <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>JavaScript</h3>
                        <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- jQuery -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>jQuery</h3>
                        <div class="progress">
                            <div class="progress-bar color-7" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ajax -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Ajax</h3>
                        <div class="progress">
                            <div class="progress-bar color-8" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vue.js -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Vue.js</h3>
                        <div class="progress">
                            <div class="progress-bar color-9" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back-end Technologies -->
                <div class="col-md-12 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h2 style="color: #32bc38">Back-end Technologies:</h2>
                    </div>
                </div>

                <!-- C, C++, C# -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>C, C++, C#</h3>
                        <div class="progress">
                            <div class="progress-bar color-10" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PHP -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>PHP</h3>
                        <div class="progress">
                            <div class="progress-bar color-10" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Laravel -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Laravel</h3>
                        <div class="progress">
                            <div class="progress-bar color-12" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yii -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Yii</h3>
                        <div class="progress">
                            <div class="progress-bar color-12" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Golang -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Golang</h3>
                        <div class="progress">
                            <div class="progress-bar color-10" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                                <span>55%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MySQL, PostgreSQL -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>MySQL, PostgreSQL</h3>
                        <div class="progress">
                            <div class="progress-bar color-11" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ASP.NET Core MVC -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>ASP.NET Core MVC</h3>
                        <div class="progress">
                            <div class="progress-bar color-13" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Skills -->
                <div class="col-md-12 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h2 style="color: #32bc38">Additional Skills:</h2>
                    </div>
                </div>

                <!-- IoT -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>IoT</h3>
                        <div class="progress">
                            <div class="progress-bar color-14" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Microsoft Office -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Microsoft Office</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pro. Photography -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Pro. Photography</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Photoshop, Lightroom -->
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Photoshop, Lightroom</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Projects</h2>
                    <h5>Check out my diverse portfolio of projects that demonstrate my expertise and
                        commitment to delivering exceptional digital solutions.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://casehub.brac.net/">CaseHub BRAC</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-2.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ieandi.tilbd.net/">Inspectorate Automation System - Bangladesh Army</a>
                            </h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-3.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://www.dgmsbd.net/">Directorate General of Medical Service - Bangladesh
                                    Army</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://aoc.tilbd.net/">Army Officers Club</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://120.89.64.28/ALC/">Army Ladies Club</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ems.softkit.xyz/">Expense Management - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-7.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ec.softkit.xyz/">eCommerce - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-8.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ec.softkit.xyz/">eCommerce - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-9.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ec.softkit.xyz/">eCommerce - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-10.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ec.softkit.xyz/">eCommerce - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-11.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://ec.softkit.xyz/">eCommerce - SoftkIT</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/portfolio/portfolio-0.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Updating Soon</a></h3>
                            <span>Web Development</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blogs</h1>
                    <h2 class="mb-4">Blogs</h2>
                    <p>In every corner of Bangladesh, from the rolling hills to the bustling cities, there's a rich
                        narrative of history and warmth etched into its very essence.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>In the heart of South Asia, Bangladesh beckons with its lush landscapes and a tapestry
                                woven with the traditions of a resilient people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>Blessed with the beauty of the Bay of Bengal, Bangladesh is a coastal masterpiece where
                                sunsets paint the sky in hues of gold and crimson.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>Immerse yourself in the vibrant tapestry of Bangladesh, where the warmth of its people is
                                as inviting as the serene banks of the Padma and Jamuna rivers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="365">0</strong>
                            <span>Days Service</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="21">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="13">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="36">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center py-3" style="position: relative; z-index: 1; background-color: rgba(0, 150, 185, 0.5);">
                    <h2 style="color: white;">I'm <span>Available</span> for freelancing</h2>
                    <p style="color: white;">In the heart of this enchanting land, the Sundarbans Delta weaves a tale of
                        ecological wonder, where the majestic Bengal tiger roams freely.</p>
                    <p class="mb-0">
                        <a href="https://wa.me/+8801722787007" class="btn btn-primary py-3 px-5" target="_blank" rel="noopener noreferrer" style="position: relative; z-index: 2;">Hire me</a>
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
                            <a href="https://softkit.xyz" target="_blank" rel="noopener noreferrer" aria-label="Visit Softkit Website">
                                <span class="icon-globe" aria-hidden="true"></span>
                            </a>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="https://softkit.xyz" target="_blank" rel="noopener noreferrer" aria-label="Visit Softkit Website" style="color: #32bc38;">softkit.xyz</a></p>
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
                            <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
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

</body>

</html>