<?php

    error_reporting(0);
    include "admin/conn.php";

    $category = $_GET['category'];

  
    //fetch blogs 
    //fetch blog for category
    $blog = mysqli_query($con,"SELECT * FROM blog WHERE category LIKE '%".$category."%' ORDER BY id DESC ");

    //fetch category

    $cat = mysqli_query($con,"SELECT * FROM category ORDER BY id DESC");


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM blog ORDER BY id DESC LIMIT 4 ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Transide Transport & Logistics HTML Template</title>
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
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
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
            <!-- <div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div>-->
            <div class="auto-container">
                <div class="content-box">
                    <div class="content-wrapper">
                        <div class="title">
                            <h1></h1>
                        </div>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-8">

                        <?php   
                        while ($row=mysqli_fetch_array($blog)){
                       
                    ?>
                        <div class="news-block-four">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="admin/images/blog/<?php echo $row['img']; ?>" alt="">
                                    <div class="date"><?php echo $row['date']; ?></div>
                                    <div class="overlay-two"><a href="assets/images/resource/news-27.jpg"
                                            class="lightbox-image" data-fancybox="gallery"><span
                                                class="flaticon-zoom-in"></span></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><i class="fas fa-folder"></i> <?php echo $row['category']; ?>
                                    </div>
                                    <h3><a
                                            href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                    </h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-user"></i>By: Admin</a></li>

                                    </ul>
                                    <div class="text">
                                        <p><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,180);
                        ?>...</p>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="link-box">
                                            <a href="blog-details.php?id=<?php echo $row['id']; ?>"
                                                class="theme-btn btn-style-one"><span><i
                                                        class="flaticon-up-arrow"></i>More Details </span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  } ?>


                        <!--  <ul class="pagination">
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="flaticon-right-arrow-6"></i></a></li>
                    </ul> -->
                    </div>

                    <aside class="col-lg-4 sidebar">
                        <div class="blog-sidebar style-two">

                            <div class="widget widget_categories">
                                <h4 class="widget_title">Categories</h4>
                                <div class="widget-content">
                                    <ul class="categories-list clearfix">
                                        <?php
                                        // while($row=mysqli_fetch_array($cat)){

                                        //     // to make the count of category posts
                                        // $counter  = mysqli_query($con,"SELECT * FROM blog WHERE category='".$row['cat_name']."'");
                                        // $counti = mysqli_num_rows($counter);

                                        while ($row = mysqli_fetch_array($cat)) {
                                            // Query to count the number of blog posts in the current category
                                            $counter = mysqli_query($con, "SELECT COUNT(*) AS post_count FROM blog WHERE category='" . $row['cat_name'] . "'");
                                            $result = mysqli_fetch_assoc($counter);
                                            $counti = $result['post_count'];
                                        
                                    ?>
                                        <?php
                                       if($counti > 0){
                                       ?>
                                        <li><a href="blog-category.php?category=<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?>
                                                <i class="flaticon-right-arrow-6"></i>
                                                <span><?php echo $counti; ?></span></a></li>
                                        <?php  }
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget news-widget-two">
                                <h4 class="widget_title">Recent Post</h4>
                                <div class="wrapper-box">
                                    <?php
                                    while($row=mysqli_fetch_array($recent)){
                                ?>
                                    <div class="post"
                                        style="background-image: url(assets/images/resource/news-26.jpg);">
                                        <div class="content">
                                            <div class="date"><i class="far fa-calendar"></i>
                                                <?php echo $row['date']; ?></div>
                                            <h4><a
                                                    href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php } ?>
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
                    </aside>
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