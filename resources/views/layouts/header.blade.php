<html>

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Reallist- Bootstrap Responsive Real estate Classifieds, Dealer, Rentel, Builder and Agent Multipurpose HTML Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html template, real estate websites, real estate html template, property websites, premium html templates, real estate company website, bootstrap real estate template, real estate marketplace html template, listing website template, property listing html template, real estate bootstrap template, real estate html5 template, real estate listing template, property template, property dealer website">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Bootstrap Css -->
    <link href="{{ asset('users/css/base.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('users/css/icons.css') }}">
    <meta http-equiv="imagetoolbar" content="no">
</head>

<body>
    <div class="horizontalMenucontainer">
        <!--Loader-->
        <div id="global-loader" style="display: none;"> <img src="../../users/images/loader.svg" class="loader-img" alt=""> </div>
        <!--Topbar-->
        <div class="header-main">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                            <div class="top-bar-left d-flex">
                                <div class="clearfix">
                                    <ul class="socials">
                                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a> </li>
                                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a> </li>
                                        <li> <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                            <div class="top-bar-right">
                                <ul class="custom">
                                    <li> <a href="register.html" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a> </li>
                                    <li> <a href="login.html" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a> </li>
                                    <li class="dropdown"> <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a href="mydash.html" class="dropdown-item"> <i class="dropdown-icon icon icon-user"></i> My Profile </a>
                                            <a class="dropdown-item" href="#"> <i class="dropdown-icon icon icon-speech"></i> Inbox </a>
                                            <a class="dropdown-item" href="#"> <i class="dropdown-icon icon icon-bell"></i> Notifications </a>
                                            <a href="mydash.html" class="dropdown-item"> <i class="dropdown-icon  icon icon-settings"></i> Account Settings </a>
                                            <a class="dropdown-item" href="#"> <i class="dropdown-icon icon icon-power"></i> Log out </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Duplex Houses Header -->
            <div class="horizontal-header clearfix ">
                <div class="container"> <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a> <span class="smllogo"><img src="../../users/images/brand/logo2.png" width="120" alt=""></span> <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a> </div>
            </div>
            <!-- /Duplex Houses Header -->
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 63px;">
                <div class="horizontal-main bg-dark-transparent clearfix">
                    <div class="horizontal-mainwrapper container clearfix">
                        <div class="desktoplogo">
                            <a href="index.html"><img src="../../users/images/brand/logo2.png" alt=""></a>
                        </div>
                        <div class="desktoplogo-1">
                            <a href="index.html"><img src="../../users/images/brand/logo2.png" alt=""></a>
                        </div>
                        <!--Nav-->
                        <nav class="horizontalMenu clearfix d-md-flex">
                            <div class="overlapblackbg"></div>
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Home <span class="fa fa-caret-down m-0"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="index.html">Home-default</a></li>
                                        <li aria-haspopup="true"><a href="index-text.html">Home style-1</a></li>
                                        <li aria-haspopup="true"><a href="index-slides.html">Home style-2</a></li>
                                        <li aria-haspopup="true"><a href="index-video.html">Home style-3</a></li>
                                        <li aria-haspopup="true"><a href="index-animation.html">Home style-4 </a></li>
                                        <li aria-haspopup="true"><a href="index-map.html">Home style-5</a></li>
                                        <li aria-haspopup="true"><a href="intro-page.html">Home Intro Page</a></li>
                                        <li aria-haspopup="true"><a href="popup-login.html">Home Pop-up login</a></li>
                                        <li aria-haspopup="true"><a href="banner.html">Banners</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="about.html">About Us </a></li>
                                <li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
                                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Pages <span class="fa fa-caret-down m-0"></span></a>
                                    <div class="horizontal-megamenu clearfix">
                                        <div class="container">
                                            <div class="megamenu-content">
                                                <div class="row">
                                                    <ul class="col link-list">
                                                        <li class="title">Custom Pages</li>
                                                        <li> <a href="page-list.html">RealEstate List</a> </li>
                                                        <li> <a href="page-list-right.html">RealEstate Right</a> </li>
                                                        <li> <a href="page-list-map.html">RealEstate Map list</a> </li>
                                                        <li> <a href="page-list-map2.html">RealEstate Map list 02</a> </li>
                                                        <li> <a href="page-list-map3.html">RealEstate Map style 03</a> </li>
                                                        <li> <a href="categories.html">Categories</a> </li>
                                                        <li> <a href="inovice.html">Invoice</a> </li>
                                                        <li> <a href="usersall.html">User Lists</a> </li>
                                                        <li> <a href="pricing.html">Pricing</a> </li>
                                                    </ul>
                                                    <ul class="col link-list">
                                                        <li class="title">Custom Pages</li>
                                                        <li> <a href="ad-list.html">Ad Listing</a> </li>
                                                        <li> <a href="ad-list-right.html">Ad Listing Right</a> </li>
                                                        <li> <a href="ad-details.html">Ad Details</a> </li>
                                                        <li> <a href="add-details1.html">Page Details 1<span class="badge badge-primary ml-2">New</span></a> </li>
                                                        <li> <a href="ad-details-right.html">Ad Details Right</a> </li>
                                                        <li> <a href="ad-posts.html">Ad Posts</a> </li>
                                                        <li> <a href="ad-posts2.html">Ad Posts2</a> </li>
                                                        <li> <a href="typography.html">Typography</a> </li>
                                                        <li> <a href="testimonial.html">Testimonials</a> </li>
                                                    </ul>
                                                    <ul class="col link-list">
                                                        <li class="title">Custom Pages</li>
                                                        <li> <a href="userprofile.html"> User Profile</a> </li>
                                                        <li> <a href="mydash.html">My Dashboard</a> </li>
                                                        <li> <a href="myads.html">Ads</a> </li>
                                                        <li> <a href="myfavorite.html">Favorite Ads</a> </li>
                                                        <li> <a href="manged.html">Manged Ads</a> </li>
                                                        <li> <a href="payments.html">Payments</a> </li>
                                                        <li> <a href="orders.html"> Orders</a> </li>
                                                        <li> <a href="settings.html"> Settings</a> </li>
                                                        <li> <a href="tips.html">Tips</a> </li>
                                                    </ul>
                                                    <ul class="col link-list">
                                                        <li class="title">Custom Pages</li>
                                                        <li><a href="underconstruction.html">Under 3BHk Homes</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="login-2.html">Login 02</a></li>
                                                        <li><a href="forgot.html">Forgot Password</a></li>
                                                        <li><a href="lockscreen.html">Lock Screen</a></li>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="userprofile2.html"> User Profile2</a></li>
                                                    </ul>
                                                    <ul class="col link-list">
                                                        <li class="title">Custom Pages</li>
                                                        <li><a href="header-style1.html">Header Style 01</a></li>
                                                        <li><a href="header-style2.html">Header Style 02</a></li>
                                                        <li><a href="header-style3.html">Header Style 03</a></li>
                                                        <li><a href="header-style4.html">Header Style 04</a></li>
                                                        <li><a href="footer-style.html">Footer Style 01</a></li>
                                                        <li><a href="footer-style2.html">Footer Style 02</a></li>
                                                        <li><a href="footer-style3.html">Footer Style 03</a></li>
                                                        <li><a href="footer-style4.html">Footer Style 04</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="active">Blog <span class="fa fa-caret-down m-0"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#" class="active">Blog Grid <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="blog-grid.html">Blog Grid Left</a></li>
                                                <li aria-haspopup="true"><a href="blog-grid-right.html">Blog Grid Right</a></li>
                                                <li aria-haspopup="true" class="active"><a href="blog-grid-center.html" class="active">Blog Grid Center</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Blog List <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="blog-list.html">Blog List Left</a></li>
                                                <li aria-haspopup="true"><a href="blog-list-right.html">Blog List Right</a></li>
                                                <li aria-haspopup="true"><a href="blog-list-center.html">Blog List Center</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true"><span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Blog Details <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="blog-details.html">Blog Details Left</a></li>
                                                <li aria-haspopup="true"><a href="blog-details-right.html">Blog Details Right</a></li>
                                                <li aria-haspopup="true"><a href="blog-details-center.html">Blog Details Center</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="col-left.html">RealEstate Left</a></li>
                                        <li aria-haspopup="true"><a href="col-right.html">RealEstate Right </a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="contact.html"> Contact Us <span class="hmarrow"></span></a></li>
                                <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0"> <span><a class="btn btn-secondary" href="ad-posts.html">Post Property Ad</a></span> </li>
                            </ul>
                            <ul class="mb-0">
                                <li aria-haspopup="true" class="mt-3 d-none d-lg-block top-postbtn"> <span><a class="btn btn-secondary ad-post " href="ad-posts.html">Post Property Ad</a></span> </li>
                            </ul>
                        </nav>
                        <!--Nav-->
                    </div>
                </div>
            </div>
        </div>
