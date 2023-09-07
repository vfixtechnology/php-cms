<?php
    error_reporting(0);
    include "admin/conn.php";

    //fetch faq
    $faq = mysqli_query($con,"SELECT * FROM faqs ORDER BY id DESC");
    
      //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Privacy Policies - <?php echo $setting['site_name']; ?></title>
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
 

    <!-- Main Header -->
    <?php include "header.php"; ?>
        <!--End Header Upper-->


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

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-20.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Our Privay Poloicies</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li>Faq’s</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2 class="pb-3">Privacy Policies</h2>
                <h5 class="text-left"><b>What is Privacy Policies About?</b></h5>
               <p class="text-left">Global Worldwide Solution and its affiliates (collectively or individually, as applicable, referred to as "S&P Global", "Company", "we", "our", "us") respect your right to privacy. This global Corporate Privacy Policy (“Policy”) explains who we are, how we collect, share and use personal information about you, and how you can exercise your privacy rights. This Policy applies to interactions we have with you via our websites, applications and other products and services including events, where you otherwise contact us and where we otherwise display or link to this Policy (“Services”) or in the course of our receipt of products or services from you or your employer. You also may have certain rights with respect to your personal information under applicable data protection laws. We have included supplemental information for certain jurisdictions in this Policy. Third parties that link from or to our Services, or from whom we collect personal information may have their own privacy policies and practices. Please review their policies to learn more about their practices.</p>
            <h5 class="text-left"><b>What personal information we collect?</b></h5>
                <p class="text-left">The information that we collect from or about you - some of which is personal information under applicable data protection laws - falls into the following broad categories:</p>
                <p class="text-left">As part of our Services, you may provide certain information to us, such as your contact details, user credentials, and employment information.</p>
                <p class="text-left">A few examples include, when you fill out an on-line form to register to use our Services, such as to attend an event or to receive research through our website. You may also provide us with your business card information or other contact information as you do business with us or you request information from us. Information we ask you for and why we ask you for it include:</p>
                <p class="text-left"><b>Types of personal information</b></p>
                <p class="text-left">Contact details such as name, telephone numbers (which may include cell/mobile numbers), email address and postal address and details of any correspondence you send us.</p>
                <p class="text-left"><b>Why we collect it</b></p>
                <p class="text-left">To respond to your correspondence and inquiries, such as when you want to learn more about our conferences and webinars. To gather information needed to provide Services requested by you or your employer. To obtain your feedback regarding our Services, including an event you attended, such as when we or our agents send you a customer satisfaction survey.</p>
            <h5 class="text-left"><b>Do we use cookies?</b></h5>
                <p class="text-left">We use cookies and similar tracking technology (collectively, "Cookies") in certain Services (in particular our websites and some mobile applications) to collect and use personal information about you and to serve our interest-based advertising. These technologies may also allow certain third parties to collect information about you, such as information about you clicking on advertisements or installing our Services. Where permitted by applicable law, we will deploy first party performance or analytics cookies automatically when you visit our websites. Where required by applicable law, we will obtain your consent before we place any Cookies on your device that are not strictly necessary for the functioning of our websites. To learn more, including about how to consent to or withdraw your consent to Cookies, please see our Cookie Notice.</p>
                <p class="text-left">We use Google Analytics to better understand how visitors use our Services. Google Analytics provides us with information about users of our Services. Google Analytics uses Cookies that Google or its affiliate DoubleClick recognizes when you visit other websites and applications. For more information about how Google collects, uses, and shares your information, including information collected through our Services, please visit the Google Privacy Policy - Partners website at https://www.google.com/policies/privacy/partners/ or see Google’s own Privacy Policy at https://policies.google.com/privacy.</p>
                <p class="text-left">Google Analytics uses Cookies to help us analyze how users use our Services. Personal information generated by these Cookies about your use of our Services (including your IP address) will be transmitted to and stored by Google on servers in the United States of America. On our behalf, Google will use this information to evaluate your use of our Services and will compile reports on your activity for us</p>
            <h5 class="text-left"><b>How lond we retain personal informations?</b></h5>
                <p class="text-left">We retain your personal information for as long as we have an ongoing legitimate business need to do so (for example, to provide you with a Service you have requested, or to comply with applicable legal, tax or accounting requirements).</p>
                <p class="text-left">Once we no longer have a legitimate business need to process your personal information, we follow our applicable information governance policies, procedures and standards and retain your information for as long as necessary to accomplish the purpose for which it was collected, following which we either delete or anonymize your personal information, or if deletion or anonymization is not possible, then we pseudonymize and/or securely store your personal information and isolate it from any further processing until deletion is possible.</p>
                <p class="text-left">Please contact us for more information about the period of time for which we will process your personal information.</p>
                <p class="text-left"></p>
            </div>
         
        </div>
        </div>
    </section>



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













