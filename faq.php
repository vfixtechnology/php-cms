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
    <title>FAQ - <?php echo $setting['site_name']; ?></title>
    <meta name="description"
        content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons'
        async='async'></script>

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
                        <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that
                            they cannot foresees the pain.</div>
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
                    <!-- <div class="contact-widget">
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
                </div> -->
                    <!-- Link Btn -->
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i
                                    class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
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
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
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
                            <h1>Faq’s</h1>
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
                    <div class="sub-title">Get Answers</div>
                    <h2>Things You Need to Know and <br>
                        We Know Your’s</h2>
                </div>
                <div class="tab-area">
                    <!--<ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                            <h4>I am a  Customer <i class="flaticon-up-arrow"></i></h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                            <h4>I am a Supplier <i class="flaticon-up-arrow"></i></h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                            <h4>I am a Job Applicant <i class="flaticon-up-arrow"></i></h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                            <h4>About Company <i class="flaticon-up-arrow"></i></h4>
                        </a>
                    </li>
                </ul> -->
                    <!-- Tab panes -->
                    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel"
                            aria-labelledby="tab-one">
                            <ul class="accordion-box style-two mb-30">

                                <?php
                            $i=0;
                                while($row=mysqli_fetch_array($faq)){
                                    $i++;
                            ?>
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div>
                                        <strong><?php echo $i; ?>.</strong> <?php echo $row['title']; ?>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text"><?php echo $row['descc']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php  } ?>
                                <!-- End Block -->
                            </ul>
                        </div>
                        <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                            <ul class="accordion-box style-two mb-30">
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>01.</strong>
                                        What warranties do i have for my shipments?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>02.</strong>
                                        What is included in your service?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>03.</strong>
                                        What are the usual methods of freight payment in transida?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>04. </strong>
                                        Can i get payment terms?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Block -->
                            </ul>
                        </div>
                        <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel"
                            aria-labelledby="tab-three">
                            <ul class="accordion-box style-two mb-30">
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>01.</strong>
                                        What warranties do i have for my shipments?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>02.</strong>
                                        What is included in your service?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>03.</strong>
                                        What are the usual methods of freight payment in transida?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>04. </strong>
                                        Can i get payment terms?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Block -->
                            </ul>
                        </div>
                        <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel"
                            aria-labelledby="tab-four">
                            <ul class="accordion-box style-two mb-30">
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>01.</strong>
                                        What warranties do i have for my shipments?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>02.</strong>
                                        What is included in your service?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>03.</strong>
                                        What are the usual methods of freight payment in transida?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Accordion Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon_plus far fa-plus"></span> <span
                                                class="icon icon_minus far fa-plus "></span></div><strong>04. </strong>
                                        Can i get payment terms?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Equal blame belongs to those who fail in their duty
                                                through weaknes of will which is the same as saying through shrinking
                                                from toil and <br> pain. These cases are perfectly simple and easy to
                                                distinguish.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Block -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--Main Footer-->
        <?php include "footer.php"; ?>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span>
        </div>

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