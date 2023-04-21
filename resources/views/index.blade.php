@extends('layouts.app')

@section('content')

@endsection

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Lato:100,300,400,400i,700,900%7CRoboto:400">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic context-dark" data-layout="rd-navbar-fixed"
                 data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                 data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                 data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                 data-xl-device-layout="rd-navbar-fixed" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
                 data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true"
                 data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                            </button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                                                 src="images/logo-default-438x92.png"
                                                                                                 alt="" width="219"
                                                                                                 height="46"/><img
                                        class="brand-logo-light" src="images/logo-inverse-438x92.png" alt="" width="219"
                                        height="46"/></a>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Services</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#repairs">Repairs</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a>
                                    </li>
                                </ul>
                                <div class="rd-nav-tel">
                                    <div class="icon mdi mdi-phone icon-secondary"></div>
                                    <a href="tel:#">1-800-123-1234</a>
                                </div>
                            </div>
                        </div>
                        <div class="rd-nav-tel">
                            <div class="icon mdi mdi-phone text-primary"></div>
                            <a href="tel:#">1-800-123-1234</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Swiper-->
    <section class="section section-main-bunner context-dark" id="home">
        <div class="main-bunner-img"
             style="background-image: url(&quot;images/bg-bunner-1.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-md-7 col-xl-6">
                        <h1>We Сan Fix Anything</h1>
                        <h4 class="text-opacity-80 fw-normal">TechDoc provides a wide variety of repair<br
                                class="d-none d-xl-block">services for your gadgets and various devices.</h4><a
                            class="button button-primary" href="#contacts">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="section section-lg bg-default text-center" id="services">
        <div class="container">
            <div class="row row-lg-75 row-35">
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInLeft">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-triangle"><span
                                    class="text-secondary icon-xl electro-icon-02"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Laptop Repair</a></h4>
                                <p>We offer affordable repair services of all laptop brands and models to individual and
                                    corporate clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInDown">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-circle"><span
                                    class="text-secondary icon-xl electro-icon-04"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Smartphone Repair</a></h4>
                                <p>We provide smartphone repair services that include solutions even for the most
                                    complex issues.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInRight">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-rectangle"><span
                                    class="text-secondary icon-xl electro-icon-08"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Computer Repair</a></h4>
                                <p>Our highly qualified team offers a wide range of PC & Mac repair services as well as
                                    free diagnostics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInLeft">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-circle"><span
                                    class="text-secondary icon-xxl electro-icon-11"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Media Player Repair</a></h4>
                                <p>The trained technicians of TechDoc maintain and repair a variety of media
                                    players.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInDown">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-rectangle"><span
                                    class="text-secondary icon-xl electro-icon-05"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Smartwatch Repair</a></h4>
                                <p>We are ready to help you get smartwatches of any brand and model working again.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInRight">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-triangle"><span
                                    class="text-secondary icon-xxl electro-icon-13"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="#">Game Console Repair</a></h4>
                                <p>TechDoc provides reliable and reasonably priced game console repair services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Problems Can We Fix?-->
    <section class="section section-xl bg-gray-700 bg-decorate-light" id="repairs">
        <div class="container">
            <div class="row row-35 justify-content-center text-center">
                <div class="col-12 wow-outer">
                    <div class="wow slideInDown">
                        <h2>What Problems Can We Fix?</h2>
                    </div>
                </div>
                <div class="col-lg-8 wow-outer">
                    <div class="wow fadeInUp">
                        <p class="sub-title text-opacity-80 px-lg-4">From screen repair to battery replacement, our team
                            of talented repair technicians can find a suitable solution for any device that our
                            customers want us to fix.</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-1-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Water Damage</a></h4>
                            <p>from $50</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-2-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Cracked Screen</a></h4>
                            <p>from $30</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-3-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Non-working Speaker</a></h4>
                            <p>from $35</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-4-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">No Signal</a></h4>
                            <p>from $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-5-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Broken Buttons</a></h4>
                            <p>from $25</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="images/team-classic-6-391x252.jpg" alt="" width="391"
                                                              height="252"/>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Dead Battery</a></h4>
                            <p>from $40</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA-->
    <section class="parallax-container" data-parallax-img="images/parallax-img-1.jpg">
        <div class="parallax-content section-xl-2 text-center">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 wow-outer">
                        <div class="wow fadeInUp">
                            <h2>Do You Need Help?</h2>
                            <p class="sub-title">We are always ready to help you with repair of any electronic
                                device.</p><a class="button button-primary" href="#contacts">send request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Pricing-->
    <section class="section-lg section bg-gray-2" id="pricing">
        <div class="container">
            <div class="row row-35 justify-content-center text-center">
                <div class="col-12 wow-outer">
                    <div class="wow slideInDown">
                        <h2>Our Pricing</h2>
                    </div>
                </div>
                <div class="col-lg-8 wow-outer">
                    <div class="wow fadeInUp">
                        <p class="sub-title text-opacity-80 px-lg-5">Below you can learn more about different pricing
                            options and devices we work with. Please note that repairs usually take more than one day
                            and depend on your device.</p>
                    </div>
                </div>
            </div>
            <div class="tabs-custom tabs-horizontal tabs-modern" id="tabs-1">
                <div class="row g-0">
                    <div class="col-lg-4 col-xl-3 order-lg-2 wow-outer">
                        <div class="wow slideInRight">
                            <ul class="nav nav-tabs nav-tabs-modern">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                                            data-bs-toggle="tab">iphone 8/10</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                                                            data-bs-toggle="tab">Galaxy S10</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                                                            data-bs-toggle="tab">ipad pro</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4"
                                                                            data-bs-toggle="tab">macbook</a></li>
                            </ul>
                            <a class="button button-lg button-primary button-tabs-modern" href="#">View more</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 order-lg-1 wow-outer">
                        <div class="wow slideInLeft">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-1-1">
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">1-2 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Diagnostic Service</a></h4>
                                            <h5>Price&nbsp;<span>$14.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">5-8 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Screen
                                                    Repair/Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$34.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-4 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Battery Replacement</a>
                                            </h4>
                                            <h5>Price&nbsp;<span>$24.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-5 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Speaker Repair</a></h4>
                                            <h5>Price&nbsp;<span>$18.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">2-3 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Wi-Fi Module
                                                    Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$44.99</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-2">
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">2-3 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Wi-Fi Module
                                                    Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$44.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-5 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Speaker Repair</a></h4>
                                            <h5>Price&nbsp;<span>$18.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">1-2 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Diagnostic Service</a></h4>
                                            <h5>Price&nbsp;<span>$14.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">5-8 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Screen
                                                    Repair/Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$34.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-4 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Battery Replacement</a>
                                            </h4>
                                            <h5>Price&nbsp;<span>$24.99</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-3">
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">5-8 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Screen
                                                    Repair/Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$34.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">1-2 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Diagnostic Service</a></h4>
                                            <h5>Price&nbsp;<span>$14.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-4 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Battery Replacement</a>
                                            </h4>
                                            <h5>Price&nbsp;<span>$24.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-5 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Speaker Repair</a></h4>
                                            <h5>Price&nbsp;<span>$18.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">2-3 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Wi-Fi Module
                                                    Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$44.99</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-4">
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-5 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Speaker Repair</a></h4>
                                            <h5>Price&nbsp;<span>$18.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">2-3 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Wi-Fi Module
                                                    Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$44.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">1-2 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Diagnostic Service</a></h4>
                                            <h5>Price&nbsp;<span>$14.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">5-8 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Screen
                                                    Repair/Replacement</a></h4>
                                            <h5>Price&nbsp;<span>$34.99</span></h5>
                                        </div>
                                    </div>
                                    <div class="event-item-classic">
                                        <div class="event-item-classic-caption">
                                            <p class="events-time">3-4 work days</p>
                                            <h4 class="event-item-classic-title"><a href="#">Battery Replacement</a>
                                            </h4>
                                            <h5>Price&nbsp;<span>$24.99</span></h5>
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

    <!-- Testimonials-->
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <div class="wow-outer">
                <div class="wow slideInDown">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-autoplay="false"
                 data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel"
                 data-for="#child-carousel">
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>My PC was fixed promptly and at a very reasonable price. I was without my computer only
                                for several hours, and it was picked up and delivered at the promised time. Thank you
                                for the great job!</p>
                        </div>
                        <h4 class="testimonials-modern-name">Joanna Smith</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>Thank you for your responsiveness to my situation. You were quick to diagnose the problem
                                with my Samsung Galaxy S9 and took great measures to ensure a speedy solution. I am up
                                and running clear of any viruses.</p>
                        </div>
                        <h4 class="testimonials-modern-name">James Williams</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>TechDoc provides excellent service at very reasonable rates. Their technicians
                                continuously kept me informed about the repair progress of my laptop. The repairs were
                                performed with excellent results.</p>
                        </div>
                        <h4 class="testimonials-modern-name">Kate Anderson</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>I am completely confident in TechDoc's ability to troubleshoot my IT problems in a timely
                                and cost-efficient fashion. Their team is very bright and completely knowledgeable about
                                a very wide range of computer issues.</p>
                        </div>
                        <h4 class="testimonials-modern-name">Peter McMillan</h4>
                    </div>
                </div>
            </div>
            <div class="slick-slider slider-dots" id="child-carousel" data-for=".carousel-parent" data-arrows="false"
                 data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4"
                 data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                <div class="item">
                    <div class="slick-dot-item"><img src="images/user-1-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="images/user-2-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="images/user-3-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="images/user-4-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News-->
    <section class="section section-xl bg-gray-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="row row-30">
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="post-modern">
                            <div class="post-modern-figure"><a href="#"><img src="images/post-modern-1-370x255.jpg"
                                                                             alt="" width="370" height="255"/></a><a
                                    class="badge" href="#">News</a></div>
                            <div class="post-modern-caption">
                                <p class="post-modern-date">May 11, 2019</p>
                                <h4 class="post-modern-title"><a href="#">10 Reasons iPhone and iPad Screens Crack</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow-outer">
                    <div class="wow slideInDown">
                        <div class="post-modern post-modern-reverse">
                            <div class="post-modern-figure"><a href="#"><img src="images/post-modern-2-370x255.jpg"
                                                                             alt="" width="370" height="255"/></a><a
                                    class="badge" href="#">News</a></div>
                            <div class="post-modern-caption">
                                <p class="post-modern-date">April 25, 2019</p>
                                <h4 class="post-modern-title"><a href="#">Why Your Tablet May Not Be Charging
                                        Properly</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow-outer">
                    <div class="wow fadeInUp">
                        <div class="post-modern post-modern-text">
                            <div class="post-modern-caption">
                                <p class="post-modern-date">July 02, 2019</p>
                                <h4 class="post-modern-title"><a href="#">20 Useful Tips on Keeping Your PC Safe</a>
                                </h4>
                                <div class="post-modern-text">
                                    <p>Computers are created to increase productivity – personal or business use.
                                        Automation is possible through the use of computers and the internet which make
                                        everyday operations and transactions more efficient and more accurate. However,
                                        there are threats to the...</p>
                                </div>
                                <a class="badge" href="#">News</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Officially Authorized Repair Center-->
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <div class="wow-outer">
                <div class="wow slideInDown">
                    <h2>Officially Authorized Repair Center</h2>
                    <p class="sub-title-2">brands we Work With</p>
                </div>
            </div>
            <div class="row row-30 mt-45">
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#"><img
                            src="images/logo-1-136x20.png" alt="" width="136" height="20"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.3s"><img
                            src="images/logo-2-111x38.png" alt="" width="111" height="38"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.6s"><img
                            src="images/logo-3-94x36.png" alt="" width="94" height="36"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.9s"><img
                            src="images/logo-4-156x35.png" alt="" width="156" height="35"/></a></div>
            </div>
            <div class="wow-outer mt-50">
                <div class="wow fadeInUp"><a class="button button-xl button-primary" href="#contacts">Get in touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Maps-->
    <section class="section">
        <div class="google-map-container" data-zoom="5" data-icon="images/gmap_marker.png"
             data-icon-active="images/gmap_marker.png" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
             data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                    data-description="9870 St Vincent Place, Glasgow, DC 45 Fr 45."></li>
            </ul>
        </div>
    </section>

    <section class="section section-lg text-center bg-default">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-triangle"><span
                                class="text-secondary linearicons-phone-incoming icon-lg"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="tel:#">1-800-123-1234</a></h4>
                            <p>You can call us anytime</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-circle"><span
                                class="text-secondary linearicons-map2 icon-lg"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">51 Francis Street, Darlinghurst NSW 2010, United States</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-rectangle"><span
                                class="text-secondary linearicons-paper-plane icon-lg"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="mailto:#">info@demolink.org</a></h4>
                            <p>Feel free to email us your questions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us-->
    <section class="section section-lg bg-gray-2 text-center" id="contacts">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h2>Get in Touch</h2>
                    <!-- RD Mailform-->
                    {{--                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">--}}
                    {{--                            <label class="form-label" for="contact-name">Name</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">--}}
                    {{--                            <label class="form-label" for="contact-email">Email</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">--}}
                    {{--                            <label class="form-label" for="contact-subject">Subject</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <label class="form-label" for="contact-message">Message</label>--}}
                    {{--                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>--}}
                    {{--                        </div>--}}
                    {{--                        <button class="button button-md button-primary" type="submit">send message</button>--}}
                    {{--                    </form>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Page Footer-->
    <footer class="section footer-classic context-dark">
        <div class="container">
            <div class="row row-50 justify-content-sm-between">
                <div class="col-lg-8 order-lg-2 wow-outer ps-xl-82">
                    <div class="wow slideInRight">
                        <div class="row row-35 justify-content-between">
                            <div class="col-12">
                                <p class="sub-title-2 footer-title">Subscribe & Stay Updated</p>
                                <!-- RD Mailform-->
                                {{--                                <form class="rd-mailform text-start rd-form-inline" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
                                {{--                                    <div class="form-wrap">--}}
                                {{--                                        <label class="form-label" for="subscribe-email">E-mail</label>--}}
                                {{--                                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="form-button group-sm text-center text-lg-start">--}}
                                {{--                                        <button class="button button-md button-primary" type="submit">subscribe</button>--}}
                                {{--                                    </div>--}}
                                {{--                                </form>--}}
                            </div>
                            <div class="col-md-6">
                                <p class="sub-title-2 footer-title">Phone and address</p>
                                <ul class="list-contact-info">
                                    <li><span class="icon mdi mdi-map-marker icon-md icon-primary"></span><span
                                            class="list-item-text"><a href="#">51 Francis Street, Darlinghurst NSW 2010, United States</a></span>
                                    </li>
                                    <li><span class="icon mdi mdi-phone icon-sm icon-primary"></span><span
                                            class="list-item-text"><a href="tel:#">1-800-123-1234</a></span></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-5">
                                <p class="sub-title-2 footer-title">Get Social</p>
                                <p>Follow us to stay connected and receive instant updates.</p>
                                <ul class="social-list">
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"
                                           href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram"
                                           href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"
                                           href="#"></a></li>
                                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"
                                           href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1 wow-outer pe-xl-85">
                    <div class="wow slideInLeft">
                        <div class="row row-30">
                            <div class="col-12"><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                                        src="{{ asset('images/logo-default-438x92.png') }}"
                                                                                        alt="" width="219" height="46"/><img
                                        class="brand-logo-light" src="images/logo-inverse-438x92.png" alt="" width="219"
                                        height="46"/></a>
                            </div>
                            <div class="col-12">
                                <p>TechDoc was founded by an experienced team of technicians who know how to get any
                                    modern PC or gadget working the right way. With over 20 years of expertise, you can
                                    always trust us.</p>
                                <div class="footer-divider"></div>
                                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>TechDoc</span><span>.&nbsp;</span><span>All Rights Reserved.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<!-- coded by dyoma-->
</body>
</html>
