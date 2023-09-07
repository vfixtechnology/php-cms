<?php

    include "admin/conn.php";

    //fetch blogs 
    $blogg = mysqli_query($con,"SELECT * FROM blog");

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Transide  Transport & Logistics HTML Template</title>
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

    <!-- Main Header -->
    <?php include "header.php"; ?>

    <!-- End Main Header -->

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
                        <h1>3 Columns Sidebar</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li>3 Columns Sidebar</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                      <?php

                        while($row=mysqli_fetch_array($blogg)){
                           
                      

                      ?>
                        <div class="news-block-one style-two col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/news-18.jpg" alt="">
                                    <div class="date">14 <br> May</div>
                                    <div class="overlay-two"><a href="assets/images/resource/news-18.jpg" class="lightbox-image" data-fancybox="gallery"><span class="flaticon-zoom-in"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><i class="fas fa-folder"></i> Industry News</div>
                                    <h3><a href="blog-details.html">Named a Finalist For Year <br> ‘19 Best Choice Award</a></h3>
                                    <div class="text">Pleasure and praising pain was born
                                        givea complete your account ...</div>
                                    <div class="link">
                                        <a href="blog-details.html" class="readmore-link"><i class="flaticon-up-arrow"></i>More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php  } ?>                  
                    </div>
                    <ul class="pagination">
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                    </ul>
                </div>
                <aside class="col-lg-3 sidebar">
                    <div class="blog-sidebar">
                        <div class="widget widget_search">
                            <h4 class="widget_title">Search</h4>
                            <form action="http://st.ourhtmldemo.com/new/Transida2/blog-2.html" method="post" class="search-form">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Enter Keyword ..." required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget widget_categories">
                            <h4 class="widget_title">Categories</h4>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                    <li><a href="#">Entrepreneurs <i class="flaticon-right-arrow-6"></i> <span>[12]</span></a></li>
                                    <li><a href="#">Freight Management <i class="flaticon-right-arrow-6"></i> <span>[08]</span></a></li>
                                    <li><a href="#">Industry News <i class="flaticon-right-arrow-6"></i> <span>[07]</span></a></li>
                                    <li><a href="#">Warehousing <i class="flaticon-right-arrow-6"></i> <span>[14]</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget news-widget-two">
                            <h4 class="widget_title">Recent Post</h4>
                            <div class="wrapper-box">
                                <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                    <div class="content">
                                        <div class="date"><i class="far fa-calendar"></i> 25 Jul 2020</div>
                                        <h4><a href="blog-details.html">Named a Finalist For Year 2019 Best Choice Award</a></h4>
                                    </div>
                                </div>
                                <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                    <div class="content">
                                        <div class="date"><i class="far fa-calendar"></i> 14 May 2020</div>
                                        <h4><a href="blog-details.html">Conditions for Applying C / O  for  Transited Your Cargo</a></h4>
                                    </div>
                                </div>
                                <div class="post" style="background-image: url(assets/images/resource/news-26.jpg);">
                                    <div class="content">
                                        <div class="date"><i class="far fa-calendar"></i> 10 May 2020</div>
                                        <h4><a href="blog-details.html">Introduce new boat service in this spring</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tag-cloud Widget -->
                        <div class="widget tag-cloud-widget">
                            <h4 class="widget_title">Tag Cloud</h4>
                            <ul class="clearfix">
                                <li><a href="#">Cargo</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Ground</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Ocean</a></li>
                                <li><a href="#">Offers</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Shipment</a></li>
                                <li><a href="#">Transportation</a></li>
                                <li><a href="#">Warehouse</a></li>
                            </ul>
                        </div>
                        <!-- Advertisement Widget -->
                        <div class="widget advertisement-widget">
                            <div class="content">
                                <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></div>
                                <h4>We Offering <br> Speed & Reliable <br> Services.</h4>
                                <div class="link-box">
                                    <a href="#" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Contact</span></a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <h3><span class="flaticon-email"></span> Subscribe Our Newsletter <br> & Get Updates.</h3>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <i class="far fa-envelope-open"></i>
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn btn-style-one"><span><i class="flaticon-up-arrow"></i>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

	
</div>
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













