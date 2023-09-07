<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Thanks - <?php echo $setting['site_name']; ?></title>
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

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></div>
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
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.html">
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

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
        <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div>
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Thanks</h1>
                    </div>
                   <!--<ul class="bread-crumb style-two">
                        <li class="active"><a href="about.html">About Company <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.html">Our History <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.html">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="global-networks.html">Global Network <i class="flaticon-up-arrow"></i></a></li>
                    </ul> -->
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
           
           <div class="row">
        <div class="col-md-12 text-center"><h2>Thank you for getting in touch!</h2></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center pb-3"><p>We appreciate you contacting us. One of our colleagues will get back in touch with you soon!</p></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center pt-3"><a class="btn btn-info btn-lg" href="index.php">BACK TO HOME</a></div>
    </div>
            
        </div>
        <div class="overview">
    
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Statement -->

    
   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

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













