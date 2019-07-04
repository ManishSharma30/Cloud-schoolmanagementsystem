<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="it">
    <meta name="keywords" content="cloud-sms,creative, agency, startup, Mobicon,onepage, clean, modern,business, company,it">
    <meta name="author" content="Dreambuzz">

    <!-- Plugins CSS -->
    <link href="{{ asset('forntend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('forntend/fonts/themify/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('forntend/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('forntend/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('forntend/css/all.css') }}" rel="stylesheet">

    <!-- Theme CSS -->

     <link href="{{ asset('forntend/css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('forntend/css/responsive.css') }}" rel="stylesheet">
      
    <title>Cloud : School Managment System</title>
</head>


<body class="top-header">

    <!-- LOADER TEMPLATE -->
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->

    <div class="top-bar bg-dark " id="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="top-bar-left text-white">
                        <i class="fa fa-map-marker"></i>
                        <span class="ml-2">78 - Ganesh Nager - Murlipura Jaipur - 302039</span>
                    </div>
                </div>

                <div class="col-lg-4 ml-lg-auto col-md-6">
                    <ul class="d-flex list-unstyled header-socials float-lg-right">
                        <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"> <i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <h2>Cloud-SMS</h2>
                            <h3>[School Management System]</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">+91-8562893738</h5>
                            <p>Call Free</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">info@cloud-sms.com</h5>
                            <p>Email Us</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">Mon-Sat 10:00-06.00 </h5>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <h4>cloud-sms</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                   
                        <li class="nav-item ">
                            <a href="/" class="nav-link js-scroll-trigger">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#process" class="nav-link js-scroll-trigger">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-2" class="nav-link js-scroll-trigger">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link js-scroll-trigger">
                                Pricing
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="project.html" class="nav-link js-scroll-trigger">
                                Projects
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/contact" class="nav-link">
                                Contact
                            </a>
                        </li>

                    </ul>

                     @if (Route::has('login'))
                        @auth

                        <ul class="ml-lg-auto list-unstyled m-0">
                            <li>
                                <a href="{{ route('home') }}" class="btn btn-white btn-circled">
                                    SMS Home
                                </a>
                            </li>
                        </ul>   
                        
                        @else
                        <ul class="ml-lg-auto list-unstyled m-0">
                            <li>
                                <a href="{{ route('login') }}" class="btn btn-white btn-circled">
                                    Login
                                </a>
                            </li>
                        </ul>          
                     
                        @endauth
                    @endif


                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>


    <!-- HERO
    ================================================== -->
    <section class="banner-area py-7">
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-7 text-center text-lg-left">
                    <div class="main-banner">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 font-weight-normal">
                            School Leading Managed Services Solutions
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-4">
                           cloud-sms is set of school and support pages aimed at helping companies promote new products and business launches.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="#" target="_blank" class="btn btn-primary btn-circled">
                                Purchase now
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <div class="banner-img-block">
                        <img src="forntend/img/banner.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SECTIONS
    ================================================== -->

    <!-- FEATURES
    ================================================== -->
    <section class="section bg-grey" id="feature">
        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-thumb-up"></i>
                        </div>
                        <h4 class="mb-2">The right advice</h4>
                        <p>Our team are experts in matching you with the right provider.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-cup"></i>
                        </div>
                        <h4 class="mb-2">Recognised for excellence</h4>
                        <p>We've been awarded for our high rate of customer satisfaction.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-wallet"></i>
                        </div>
                        <h4 class="mb-2">Compare the best</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-dashboard"></i>
                        </div>
                        <h4 class="mb-2">Premium Services</h4>
                        <p>We only compare market leaders with a reputation for service quality.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>


    <!-- SERVICE-1
    ================================================== -->
    <section class="bg-grey" id="service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="forntend/img/blog-lg.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>Get a better deal and start saving money today</h1>
                        <p>We compare hundreds of leading products and plans across many categories to bring you the best value for money.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 service-wrap">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-4">
                    <div class="carousel slide " id="service-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-reload"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Backup System</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-cloud"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Cloud Hosting</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-world"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Web hosting</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                    <i class="ti-server"></i>
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <h4>Office Cloud</h4>
                                                    <p>Our team are experts in matching you with the right provider.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Working Process
    ================================================== -->
    <section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Our Working process
                        </h2>

                        <!-- Subheading -->
                        <p>
                            cloud-sms can be used to create anything from a small marketing page to a sophisticated website.
                        </p>

                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="forntend/img/process/process-1.jpg" alt="" class="img-fluid">

                        <h3>Project Research</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="forntend/img/process/process-2.jpg" alt="" class="img-fluid">

                        <h3>Project demostration</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="forntend/img/process/process-3.jpg" alt="" class="img-fluid">

                        <h3>Development & delivery</h3>
                        <p>Nihil facere delectus eaque aut possimus nobis laudantium reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Web services
    ================================================== -->
    <section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Web Services
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5 text-white">
                            cloud-sms can be used to create anything from a small marketing page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-light-bulb"></i>
                        <h3>Creative Design</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-desktop"></i>
                        <h3>Web Development</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <i class="ti-announcement"></i>
                        <h3>Digital Marketing</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-layers-alt"></i>
                        <h3>Graphic Design</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-mobile"></i>
                        <h3>App Development</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <i class="ti-settings"></i>
                        <h3>Wordpress Installation</h3>
                        <p>Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Pricing
    ================================================== -->
    <section class="section" id="pricing">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Affordable Price Plan
                        </h2>

                        <!-- Subheading -->
                        <p>
                            cloud-sms can be used to create anything from a small management page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="pricing-box">
                       <h1> Six Months</h1>
                        <div class="price-block">
                             <h2><strong>&#8377;</strong>2999</h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Data Managment Software</li>
                            <li>School Website</li>
                            <li>Free Ads on Social Media</li>
                            <li>Include Top 5 School in Your Area</li>
                            <li>Manage Your Account</li>
                            <li>Free Notification every Week</li>
                        </ul>

                        <a href="#" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h1>One Year</h1>
                        <div class="price-block">
                             <h2><strong>&#8377;</strong>4999</h2>
                        </div>

                        <ul class="price-features list-unstyled">
                           <li>Data Managment Software</li>
                            <li>School Website</li>
                            <li>Free Ads on Social Media</li>
                            <li>Include Top 5 School in Your Area</li>
                            <li>Manage Your Account</li>
                            <li>Free Notification every Week</li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-circled">Purchase Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Projects
    ================================================== -->

    <section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">We are trying to deliver 100% quality product and success their business to achieve ultimate goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="forntend/img/projects/p-1.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: onepage</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="forntend/img/projects/p-4.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: business</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="forntend/img/projects/p-3.jpg" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project : Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="forntend/img/bg/banner_bg.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Do you know who we are?</h4>
                        <h2>More than just service your products...</h2>
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    
   <!-- TESTIMONIAL
    ================================================== -->
    <section class="section" id="section-testimonial">
        <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>What they say <br>about us</h1>
                        <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/ritesh.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Ritesh Sharma</h3>
                                       <h6>SDM School</h6>
                                   </div>
                               </div>

                                Best Software to manages school data. am happy for this working software.
                                easy to manages record like Student, Techers, Event, Result etc.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/atul_goel.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Atul Goel</h3>
                                       <h6>Ever Green Childern school</h6>
                                   </div>
                               </div>

                                Cloud-SMS shool managment service application best for manageing data online. Am increen student using cloud sms services.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/vijay.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Vijay Gupta</h3>
                                       <h6>Grow Up Internation School</h6>
                                   </div>
                               </div>

                               Great, I like this software.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/rahul.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Rahul Malya</h3>
                                       <h6>Malya senior secondary school</h6>
                                   </div>
                               </div>

                                    Access any time any where all records my school. 
                               
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/neha.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Neha Matur</h3>
                                       <h6>Vaidik Girls Higher Secondary School</h6>
                                   </div>
                               </div>

                                Am join cloud-sms few months ago. this is good for managment data platform online easy to upload download get all students and facality details.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="test-inner">
                               <div class="test-author-thumb d-flex">
                                   <img src="forntend/img/client/sunil.jpg" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h3>Sunil Sharma</h3>
                                       <h6>Bharat Senior secondry school</h6>
                                   </div>
                               </div>

                                Cloud-SMS Working Good.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER
    ================================================== -->
    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            cloud-sms
                        </a>
                        <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Account</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Terms and conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy policy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Affiliate services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Help and support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Frequently Asked Question
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <!-- Links -->
                        <ul class="footer-links ">
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Products Shop
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li>
                            <a href="#"><i class="fab fa-twitter"></i>Twitter
                            </a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest
                            </a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin
                            </a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>YouTube
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year"><a href="#">Cloud-SMS</a></span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href=".top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="{{ asset('forntend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('forntend/js/popper.min.js') }}"></script>
  
    <!-- Plugins JS -->
    <script src="{{ asset('forntend/js/bootstrap.min.js') }}"></script>
   
    <!-- Slick JS -->
    <script src="{{ asset('forntend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('forntend/js/slick.min.js') }}"></script>
 
    <!-- Theme JS -->
    <script src="{{ asset('forntend/js/theme.js') }}"></script>

</body>

</html>

