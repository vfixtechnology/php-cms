<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);


    // fetch testimonials
    $testi = mysqli_query($con,"SELECT * FROM testimonials");

    //fetch blog
    $blog = mysqli_query($con,"SELECT * FROM blog");


     //fetch services
    $services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC LIMIT 3");

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $setting['site_name']; ?> - Imports, Exports & Logistic Services</title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

   <?php include "header.php"; ?>

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-cursor"></span></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-calling"></span></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 & 790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-mail"></span></div>
                        <div class="text"><strong>Email</strong><a href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bnner Section -->
    <section class="banner-section">
        <!--<div class="left-panel">
            <div class="side-menu-nav sidemenu-nav-toggler"><span class="flaticon-interface"></span>More</div>
            <div class="option-box">
                <div class="icon"><span class="flaticon-tracking"></span></div>
                <h4>Track <br> Shipment</h4>
                <div class="order-form-area">
                    <div class="wrapper-box">
                        <h4>Track Your Shipment</h4>
                        <form class="order-form">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Shipment Number *">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" name="make">
                                    <option value="*">Type of Reference *</option>
                                    <option value=".category-1">Package</option>
                                    <option value=".category-3">Freight</option>
                                    <option value=".category-4">Mail of Innovations</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Track Now</span></button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div> 
            <div class="option-box">
                <a href="pricing-plan.php">
                    <div class="icon"><span class="flaticon-logistics"></span></div>
                    <h4>Pricing <br> Plan</h4>
                </a>
            </div>
            <div class="option-box">
                <a href="grequest-quote.php">
                    <div class="icon"><span class="flaticon-test"></span></div>
                    <h4>Get A <br>Quote</h4>
                </a>
            </div>
        </div>-->
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div>
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-1.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Competitve rates </h4>
                                <h1>safety & reliable on-time</h1>
                                <div class="text">We denounce with righteous indignation & dislike beguiled</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-2.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>Your logistic partner </h4>
                                <h1>make easy distribution</h1>
                                <div class="text">To take a trivial example which of us ever undertakes laborious.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                               
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-3.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h4>It’s possible here</h4>
                                <h1>Shipments delivered on time</h1>
                                <div class="text">Right to find fault with a man who chooses to enjoy a pleasure.</div>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>More Details </span></a>
                                </div>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav style-two">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="far fa-angle-left"></i>Prev</span></div>
            <div class="banner-slider-control banner-slider-button-next"><span>Next<i class="far fa-angle-right"></i></span> </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Section -->
    <!-- serivice from here -->
         <section class="services-section style-two ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Main Services</div>
                <h2>Moving Your Products Across <br> All Borders</h2>
            </div>
   
        </div>
    </section>
    
    
    
    <!-- boostrap -->
    <style>
.zoom {
    
 
}

.zoom:hover {
  transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
    
      <div class="container pb-5">
          <div class="row ">
              <?php
                        while($row=mysqli_fetch_array($services)){
                    ?>
              <div class="col-md-4 zoom">
                   
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" style="height:270px;" src="admin/images/services/<?php echo $row['img']; ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><b><a href="single-service.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></b></h5>
                              <p class="card-text"><?php echo $row['short']; ?></p>
                            </div>
                            <div class="card-footer">
                             
                               <div class="link"><a href="single-service.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                    
              </div>
              <?php  } ?>
          </div>
      </div>
    
    


    <!-- About Section -->
    <section class="about-section" style="background-image: url(assets/images/background/bg-1.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Company</div>
                        <h2>Providing<br> Reliable Services <br> Since 1998</h2>
                        <div class="text">We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business. </div>
                        <a href="about.php" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-package"></span></div>
                                <div class="content">
                                    <span><h4>Import & Export</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-goal"></span></div>
                                <div class="content">
                                    <span><h4>Expand Business</h4></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1700ms">
                                <div class="icon"><span class="flaticon-binoculars"></span></div>
                                <div class="content">
                                    <span><h4>Experts Assitance</h4></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1900ms">
                                <div class="icon"><span class="flaticon-gold"></span></div>
                                <div class="content">
                                    <span><h4>Home Delivery</h4></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image wow fadeInRight" data-wow-duration="1500ms"><img src="assets/images/resource/image-1.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whychooseus Section -->
    <section class="Whychooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Why Choose Us</div>
                <h2>We Aim to Contribute Well to <br>  Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">01</span><i class="flaticon-shield"></i></div>
                        <div class="content">
                            <h4>Trasparent Pricing</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">02</span><i class="flaticon-delivery"></i></div>
                        <div class="content">
                            <h4>On - Time Delivery</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">03</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>Real Time Tracking</h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 why-choose-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="count">04</span><i class="flaticon-24-hours"></i></div>
                        <div class="content">
                            <h4>24/7 Online Support</h4>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work-process Section -->
    <section class="work-process-section">
        <div class="bg" style="background-image: url(assets/images/background/bg-2.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title text-center">How We Work</div>
                <h2>We Aim to Contribute Well to <br> Your Company</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="icon"><span class="flaticon-shipping"></span></div>
                        <h4>Replenishment <br> & Picking</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="icon"><span class="flaticon-warehouse"></span></div>
                        <h4>Warehousing <br> Operation</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="icon"><span class="flaticon-packing-list"></span></div>
                        <h4>Packaging <br> & Distribution</h4>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 work-process-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="count">04</div>
                        <div class="icon"><span class="flaticon-delivery-1"></span></div>
                        <h4>Transportation <br> Process</h4>
                        
                    </div>
                </div>
            </div>
            <div class="bottom-text">Simplifying Your Freight & Logistics Needs With a Personal Approach. <a href="contact.php"> Get In Touch</a></div>
        </div>
    </section>

    <!-- Industries Covered -->
    <!--<section class="industries-covered" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="background-text" data-parallax='{"x": 100}'>industries</div>
        <div class="outer-box side-container">
            <div class="outer-container">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-2.jpg);">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Industrial and <br> Aerospace</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-4.jpg);">
                            </div>
                            <div class="content">
                                <div class="icon"><span class="flaticon-spaceship"></span></div>
                                <h4>Construction <br> Companies</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="inner-box">
                            <div class="image" style="background-image: url(assets/images/resource/image-5.jpg);">
                            </div> 
                            <div class="content">
                                <div class="icon"><span class="flaticon-box-1"></span></div>
                                <h4>Vehicle <br> Manufacturing</h4>
                                <div class="text">The wise man therefore always holds in <br> these matters to this principle. </div>
                                <div class="link">
                                    <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Pricing Section -->
    <!--<section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Pricing & Plans</div>
                <h2>Our Effective and Affordable <br> Pricing Plans</h2>
            </div>
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Basic Plan</div></div>
                        <div class="price">$89.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/resource/image-3.jpg);">
                        <div class="category-wrapper"><div class="category">Standard Plan</div></div>
                        <div class="price">$129.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pricing-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="category-wrapper"><div class="category">Advanced Plan</div></div>
                        <div class="price">$149.99</div>
                        <div class="time">Per Month</div>
                        <ul class="content">
                            <li>1 Warehouse </li>
                            <li>Custom Business Rules</li>
                            <li>Real Time Rate Shopping</li>
                            <li>100% Insurance</li>
                            <li>50 Freight Shipments</li>
                        </ul>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Buy Now </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Facts Section -->
    <section class="facts-section">
        <div class="auto-container">
            <div class="wrapper-box" style="background-image: url(assets/images/background/bg-4.jpg);">
                <div class="shape">
                    <div class="shape-one"><img src="assets/images/resource/image-4.png" alt=""></div>
                    <div class="shape-two"><img src="assets/images/resource/image-5.png" alt=""></div>
                    <div class="shape-three"><img src="assets/images/resource/image-6.png" alt=""></div>
                    <div class="shape-four"><img src="assets/images/resource/image-7.png" alt=""></div>
                    <div class="shape-five"><img src="assets/images/resource/image-8.png" alt=""></div>
                </div>
                <div class="sec-title text-center light">
                    <div class="sub-title text-center">Interesting Facts</div>
                    <h2>The Numbers Speak for <br> themselves</h2>
                </div>
                <div class="outer-box">
                    <div class="row">
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="6500">0</span>
                                    </div>
                                    <div class="text">Sucessfully  Delivered</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="54">0</span>
                                    </div>
                                    <div class="text">Expert Employee</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2495">0</span>
                                    </div>
                                    <div class="text">Satisfied Clients</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                    </div>
                                    <div class="text">Branches Across</div>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="3879">0</span>
                                    </div>
                                    <div class="text">Tons of Goods</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Testimonials</div>
                <h2>1000+ Happy Customers Said</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel">
            <?php
                while($row=mysqli_fetch_array($testi)){
            ?>
                <div class="testimonial-block"> 
                    <div class="inner-box">
                        <div class="text"><?php echo $row['descrip']; ?>
                        </div>
                        <div class="author-thumb">
                            <img src="admin/images/testimonial/<?php echo $row['img']; ?>" alt="">
                            <div class="quote"><span class="flaticon-right-quote"></span>
                            </div>
                        </div>
                        <h4><?php echo $row['title']; ?></h4>
                        <div class="designation"><?php echo $row['designation']; ?></div>
                        <div class="rating">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                        </div>
                    </div>
                </div>
          <?php } ?>
                <!-- End -->
            </div>
        </div>
    </section>

    <!-- News Section -->
    <!--<section class="news-section">
        <div class="auto-container">
            <div class="sec-top row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">News & Updates</div>
                    <h2>Latest From Our Blog Post</h2>
                </div>
                <div class="link">
                    <a href="blog.php" class="readmore-link"><i class="flaticon-up-arrow"></i>Read All News</a>
                </div>
            </div>
            <div class="row">
                <?php  
                    while($row=mysqli_fetch_array($blog)){

                ?>
                <div class="news-block-one col-lg-4">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="admin/images/blog/<?php echo $row['img']; ?>" alt=""></a>
                            <div class="date"><?php echo $row['date']; ?></div>
                        </div>
                        <div class="lower-content">
                            <div class="category"><i class="fas fa-folder"></i><?php echo $row['category']; ?></div>
                            <h3><a href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
                            <div class="text"><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,180);
                        ?>...</div>
                            <div class="link">
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                            </div>
                        </div>
                     
                    </div>
                </div>
        <?php } ?>
            </div>
        </div>
    </section> -->

    <!-- Map Section -->
  <!--  <section class="map-section">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="490" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section> -->

    <!-- Branches Section -->
   <!-- <section class="branches-section">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "4" }}}'>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Hoxton - HO</h4>
                    <div class="text"> Boat House, 152/21 City Road,
                    Hoxton, N1 6NG, UK.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Melbourne</h4>
                    <div class="text"> 46 Yarra Boulevard, 2nd Cross,
                        Victoria 3010, AUS.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>Houston</h4>
                    <div class="text"> 3333 Raleigh Street, Houston,
                        TX 77021, USA.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
                <div class="single-info">
                    <h4><span class="flaticon-cursor"></span>New Delhi</h4>
                    <div class="text">11/8, Shantipath, Chanakyapuri,
                        New Delhi 110049, IND.</div>
                    <div class="link">
                        <a href="#" class="readmore-link"><i class="flaticon-up-arrow"></i>View On Map</a>
                    </div>
                </div>
            </div>
        </div>        
    </section> -->



    <?php include "footer.php"; ?>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>

</html>

