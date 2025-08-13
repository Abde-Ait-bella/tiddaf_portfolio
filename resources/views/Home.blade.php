<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>تضاف - جمعية للتنمية والثقافة والتضامن</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>تضاف - جمعية للتنمية والثقافة والتضامن</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/gif/png" href="assets/images/logo/headLogo.png">
    <!-- Fav Icon -->
    <!-- Googel Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=latin%2Clatin-ext"
        type="text/css" media="all" />
    
    <!-- Responsive Styles -->
    <style>
        @media (max-width: 991px) {
            /* Contact form adjustments */
            .contact_form_box_all {
                margin-right: 0 !important;
            }
            .mr_left_minus_100 {
                margin-left: 0 !important;
            }

            /* Navbar adjustments */
            .top_bar .row {
                flex-direction: column;
                gap: 15px !important;
            }
            .top_bar .contact_header_one {
                justify-content: center;
            }
            .top_bar .col-lg-auto {
                width: 100%;
                text-align: center;
            }
            .column_menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                width: 100%;
                background-color: white;
                z-index: 1000;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                padding: 15px;
                display: none;
            }
            .column_menu .navbar_nav {
                flex-direction: column;
                align-items: center;
            }
            .column_menu .navbar_nav li {
                margin: 10px 0;
                width: 100%;
                text-align: center;
            }
            .navbar_togglers.hamburger_menu {
                display: inline-block;
                cursor: pointer;
            }
            .navbar_togglers.hamburger_menu.active .line:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }
            .navbar_togglers.hamburger_menu.active .line:nth-child(2) {
                opacity: 0;
            }
            .navbar_togglers.hamburger_menu.active .line:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
            
            /* Footer adjustments */
            footer .call_to_action {
                flex-direction: column;
                text-align: center;
            }
            footer .call_to_action .section_title {
                margin-bottom: 20px;
            }
            footer .call_to_action .theme_btn_all {
                margin: 15px 0;
            }
            footer .contact_header_one {
                justify-content: center;
                margin-top: 20px;
            }
        }

        @media (max-width: 767px) {
            /* Header and footer text adjustments */
            .title_whole h2.title {
                font-size: 24px;
                line-height: 1.4;
            }
            .section_title .sm_title {
                font-size: 16px;
            }
            
            /* Contact form and images */
            .image_box_only img {
                max-width: 100%;
                height: auto;
            }
            
            /* Fix spacing in testimonials section */
            #testimonials .pd_right_60 {
                padding-right: 0 !important;
            }
            
            /* Fix spacing in about section */
            #about .pd_right_60 {
                padding-right: 0 !important;
            }

            /* Footer social icons */
            footer .title_20.d-flex {
                justify-content: center;
            }
            footer .contact_header_one {
                width: 100%;
                margin-top: 20px;
            }
            
            /* Fix mobile spacing */
            .pd_right_60, .pd_left_20, .pd_left_30 {
                padding-right: 15px !important;
                padding-left: 15px !important;
            }
            .mr_left_minus_40 {
                margin-left: 0 !important;
            }
        }
    </style>
    <!-- Arabic Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Googel Fonts -->
    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/select.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/owl.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/rangeslider.css" type="text/css" media="all" />
    <!-- Plugins -->
    <!-- Vankine Styles -->
    <link rel="stylesheet" href="assets/css/global-settings.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/theme.css" type="text/css" media="all" />
    <!-- Vankine Styles -->
    <!-- Icon Styles -->
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-rounded.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/uicons-regular-straight.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/plugins/flaticon_vankine.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel-fix.css') }}">
    <!-- Icon Styles -->
    <!-- styling for demo purpose
    <link rel='stylesheet' href='assets/css/color-3.css' type='text/css' media='all' />
   styling for demo purpose -->
</head>

<body class="theme-vankine scrollbarcolor s_color_one">
    <div class="line_box_outer">
        <div class="lined"></div>
        <div class="lined two"></div>
        <div class="lined three"></div>
        <div class="lined four"></div>
        <div class="lined"></div>
    </div>
    <!----=============page_wapper=============---->
    <div id="page" class="page_wapper hfeed site">
        <!----=============Header=============---->
        <div class="header_area" id="header_contents">
            <header class="header-area header-style-5 htype_one">
                <div class="top_bar">
                    <div class="container">
                        <div class="row align-items-center flex-lg-nowrap" style="gap: 38px">
                            <div class="flex-lg-fill col-md-6 col-sm-6 col-xs-12">
                                <div class="logo_box">
                                    <a href="#" class="logo navbar-brand">
                                        <img style="height: 55px;" src="{{ asset('assets/images/logo/headLogo.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="content">
                                        <h6 class="tite">العنوان</h6>
                                        <div class="title_no_a_20">دوار اكركين، جماعة سيدي وعزيز</div>
                                    </div>
                                    <div class="icon_s">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">
                                    <div class="content">
                                        <h6 class="tite">فيسبوك</h6>
                                        <div class="title_no_a_20">
                                            <a style=" font-size: 20px;  line-height: 28px;font-weight: 700; color: var(--heading-color-one);"
                                                href="https://www.facebook.com/profile.php?id=100083167518896"
                                                target="_blank">تضاف</a>
                                        </div>
                                    </div>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100083167518896">
                                        <div class="icon_s">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 320 512" fill="currentColor">
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91V127.89c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.09 44.38-121.09 124.72v70.62H22.89V288h81.38v224h100.2V288z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-auto col-md-6 col-sm-6 col-xs-12">
                                <div class="d-flex align-items-center contact_header_one">

                                    <div class="content">
                                        <h6 class="tite">العنوان الالكتروني</h6>
                                        <div class="title_no_a_20">
                                            <span dir="ltr" href="https://www.instagram.com/tiddaf_association/"
                                                target="_blank">Ass.tidaf07@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="icon_s">
                                        <i class="flaticon-black-back-closed-envelope-shape"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="medium-container position-relative">
                    <div class="main_header_content default_header">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-0 col-sm-0 col-xs-0 column_menu">
                                    <div class="navbar_content d-flex align-items-center">
                                        <ul class="navbar_nav">
                                            <li class="menu-item nav-item">
                                                <a href="#wrapper_full" class="nav_link">
                                                    <span class="text-link">الرئيسية</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="#about" class="nav_link">
                                                    <span class="text-link">من نحن</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item">
                                                <a href="#services" class="nav_link">
                                                    <span class="text-link">أنشطتنا</span>
                                                </a>
                                            </li>
                                            <li class="menu-item nav-item me-3">
                                                <a href="#testimonials" class="nav_link" id="testimonial">
                                                    <span class="text-link">إنجازات </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 nav_tog_column">
                                    <div class="d-flex right_content align-items-center">
                                        <!--menu icon-->
                                        <div class="navbar_togglers hamburger_menu">
                                            <span class="line"></span>
                                            <span class="line"></span>
                                            <span class="line"></span>
                                        </div>
                                        <!--menu icon-->
                                        <div class="theme_btn_all">
                                            <a href="#contact" style="padding-left: 1px !important;" class="theme_btn">
                                                تواصل معنا <span> <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="blue"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!----=============Header end=============---->
        <!----==============sticky header==============--->
        <div class="sticky_header_area sticky_header_content color_one">
            <header class="header-area header-style-1 htype_one">
                <div class="main_header_content default_header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-5 col-sm-5 col-xs-5">
                                <div class="logobox">
                                    <a href="#" class="logo navbar-brand">
                                        <img style="height: 55px;" src="{{ asset('assets/images/logo/headLogo.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-0 col-sm-0 col-xs-0 column_menu">
                                <div class="navbar_content d-flex align-items-center">
                                    <ul class="navbar_nav">
                                        <li class="menu-item nav-item">
                                            <a href="#banner" class="nav_link">
                                                <span class="text-link">الرئيسية</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#about" class="nav_link">
                                                <span class="text-link">من نحن</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a href="#services" class="nav_link">
                                                <span class="text-link">أنشطتنا</span>
                                            </a>
                                        </li>
                                        <li class="menu-item nav-item me-3">
                                            <a href="#testimonials" class="nav_link" id="testimonial">
                                                <span class="text-link">إنجازات </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-7 col-sm-7 col-xs-7 nav_tog_column">
                                <div class="d-flex right_content align-items-center">
                                    <!--menu icon-->
                                    <div class="navbar_togglers hamburger_menu">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                    <!--menu icon-->
                                    <div class="button">
                                        <a href="#contact" style="padding-left: 1px !important;" class="theme_btn">
                                            تواصل معنا
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!----==============sticky header end==============--->
        <!----==============content_all_warpper==============--->
        <div id="wrapper_full" class="content_all_warpper">
            <!--content start-->
            <div id="content" class="site-content">
                <!---slider-->
                <div class="slider style_five">
                    <div class="tab_content_slick">
                        <div class="slide-item-content">
                            <div class="image-layer" style="background-image: url(assets/images/testimonial/بيئة.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">
                                                <h1 class="animate_left">بيئة وخدمات</h1>
                                                <h6 class="animate_up">
                                                    جمعية تضاف للتنمية تُعنى بحماية البيئة وتجميل المحيط، وتقديم خدمات
                                                    مجتمعية تُعزز جودة الحياة واستدامة الموارد
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer" style="background-image: url(assets/images/testimonial/تقافة.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">
                                                <h1 class="animate_left">الثقافة</h1>
                                                <h6 class="animate_up">
                                                    جمعية تضاف للتنمية تسهم في نشر الثقافة وترسيخ قيم التربية، وتنظيم برامج للتكوين وبناء القدرات بما يخدم تطور الفرد والمجتمع
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item-content">
                            <div class="image-layer" style="background-image: url(assets/images/testimonial/رياضة.jpg)">
                            </div>
                            <div class="slide-item content_left">
                                <div class="auto-container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 text-center">
                                            <div class="slider_content">
                                                <h1 class="animate_left">الرياضة</h1>
                                                <h6 class="animate_up">
                                                    جمعية تضاف للتنمية تدعم الرياضة كوسيلة لبناء الصحة الجسدية وروح الفريق، من خلال أنشطة ومسابقات تعزز التنافس الإيجابي بين مختلف الفئات
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab_postion_absolute">
                        <div class="container">
                            <div class="slider tab_slick">
                                <div class="title">
                                    <h3>بيئة و خدمات</h3>
                                </div>
                                <div class="title">
                                    <h3>ثقافة</h3>
                                </div>
                                <div class="title">
                                    <h3>رياضة</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---slider end-->
                <!--about-->
                <section id="about" class="about-section">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 pd_right_60">
                                <div class="section_title">
                                    <h4 class="sm_title">جمعية تضاف</h4>
                                    <div class="title_whole">
                                        <h2 class="title">للتنمية </h2>
                                    </div>

                                    <p>جمعية تضاف هي منظمة غير ربحية تهدف إلى تحسين ظروف المعيشة في المجتمعات المحلية من
                                        خلال العمل في مجالات التنمية الاجتماعية والثقافية والرياضية. نؤمن بأهمية التضامن
                                        والعمل الجماعي في بناء مجتمع أفضل وأكثر تماسكاً.</p>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                                <div class="position-relative">
                                    <ul class="list_box list">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <circle cx="12" cy="12" r="10" fill="#1340dd" />
                                                        <path d="M9 12l2 2 4-4" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7 18c2.5 1 5 1 10 0" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path d="M12 7v1" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <a class="links">برامج التنمية المجتمعية</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <rect x="3" y="6" width="18" height="12" rx="2"
                                                            fill="#1340dd" />
                                                        <path d="M7 10h10M7 14h6" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <circle cx="19" cy="18" r="2" fill="#1340dd" stroke="#fff"
                                                            stroke-width="1.5" />
                                                    </svg>
                                                </div>
                                                <a class="links">الأنشطة الثقافية والتعليمية</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="icon trans">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="12" r="10" fill="#1340dd" />
                                                        <path d="M8 16c0-2.21 1.79-4 4-4s4 1.79 4 4" stroke="#fff"
                                                            stroke-width="1.5" stroke-linecap="round" />
                                                        <circle cx="12" cy="10" r="2" fill="#fff" stroke="#1340dd"
                                                            stroke-width="1.5" />
                                                        <path d="M12 6v2" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path d="M12 18v-2" stroke="#fff" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <a class="links">المبادرات الرياضية</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_25"></div>
                                <!---============spacing==========--->
                            </div>
                            <div class="col-lg-4 col-md-8 mr_left_minus_40">
                                <div class="image_video_box_only type_two">
                                    <div class="image one">
                                        <img src="assets/images/about/about.jpg" alt="img" class="imf-fluid" />

                                        <div class="fun_facts type_two">
                                            <h6 class="title_no_a_18">
                                                <small>+</small>17
                                            </h6>
                                            <h6 class="title_no_a_26">
                                                سنوات <br />
                                                من العطاء
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 pd_left_30">
                                <div class="fun_facts type_one text-right">
                                    <h4>
                                        <span class="count">1000</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">نشاط منجز</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-right">
                                    <h4>
                                        <span class="count">9000</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">مستفيد</h6>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_20"></div>
                                <div class="divider"></div>
                                <div class="mr_bottom_20"></div>
                                <!---============spacing==========--->
                                <div class="fun_facts type_one text-right">
                                    <h4>
                                        <span class="count">4000</span>
                                        <small> + </small>
                                    </h4>
                                    <h6 class="title_no_a_18">متابع وداعم</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_90"></div>
                    <!---============spacing==========--->
                </section>
                <!--about end-->

                <!---service-->
                <section id="services" class="service-section position-relative bg_2 overflow-hidden">
                    <!---============spacing==========--->
                    <div class="pd_top_80"></div>
                    <!---============spacing==========--->
                    <div class="ab_img_left_top mr_top_minus_40 z_0">
                        <img src="assets/images/shape/wave-pattern-2.png" class="img-fluid" alt="img">
                    </div>
                    <div class="position-relative z_1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 m-auto">
                                    <div class="section_title text-center type_one color_white">
                                        <h4 class="sm_title">أنشطة متنوعة</h4>
                                        <div class="title_whole">
                                            <h2 class="title">مجالات عملنا</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="users"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">التنمية الاجتماعية</a>
                                                    </div>
                                                    <p class="trans">
                                                        برامج دعم الأسر المحتاجة وتحسين ظروف المعيشة في المجتمعات
                                                        المحلية
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="book-open"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">التعليم والثقافة</a>
                                                    </div>
                                                    <p class="trans">
                                                        ورش تدريبية وأنشطة ثقافية لتطوير قدرات الشباب وتعزيز الوعي
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="activity"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">الرياضة والصحة</a>
                                                    </div>
                                                    <p class="trans">
                                                        فعاليات رياضية وبرامج توعوية صحية لجميع الفئات العمرية
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="heart"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">العمل التطوعي</a>
                                                    </div>
                                                    <p class="trans">
                                                        تنظيم وتنسيق أعمال المتطوعين في مختلف المشاريع والأنشطة
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="globe"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">البيئة والاستدامة</a>
                                                    </div>
                                                    <p class="trans">
                                                        مبادرات حماية البيئة وتعزيز التنمية المستدامة في المجتمع
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex">
                                    <div class="service_box type_five style_two icon_box_only type_three trans d-flex">
                                        <div class="icon_inner trans">
                                            <div class="d-flex trans">
                                                <div class="icon trans">
                                                    <i class="" data-feather="gift"></i>
                                                </div>
                                                <div class="content">
                                                    <div class="title_22">
                                                        <a href="#">المساعدات الإنسانية</a>
                                                    </div>
                                                    <p class="trans">
                                                        توزيع المساعدات والهدايا على الأسر المحتاجة في المناسبات
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ab_img_right_bottom mr_bottom_minus_250 z_0">
                        <img src="assets/images/shape/wave-pattern-1.png" class="img-fluid" alt="img">
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_80"></div>
                    <!---============spacing==========--->
                </section>
                <!---service end-->

                <!--testimonial-section-->
                <section id="testimonials" class="testimonial-section bg_op_5"
                    style="background-image: url(assets/images/map-frame-2.png)">
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 pd_right_60">
                                <div class="image_box_only type_six color_one">
                                    <div class="image one">
                                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                            alt="img" class="img-fluid" />
                                        <div class="content text-center">
                                            <!-- <a href="#"> -->
                                                <div>
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="28" cy="27" r="20" fill="white">
                                                    </circle>
                                                    <circle cx="27.5" cy="27.5" r="27.5" fill="white"
                                                        fill-opacity="0.1"></circle>
                                                    <path d="M22 33.25L33.25 22M33.25 22H24.8125M33.25 22V30.4375"
                                                        stroke="#1340dd" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <h6 class="title_no_a_20">
                                                    نفتخر بإنجازاتنا المتميزة
                                                </h6>
                                                <svg width="71" height="7" viewBox="0 0 71 7" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M61.3463 7C58.7897 7 57.4874 5.61327 56.3384 4.38975C55.301 3.28482 54.4815 2.41206 52.7303 2.41206C50.979 2.41206 50.1595 3.28482 49.1219 4.38975C47.9731 5.61327 46.6709 7 44.1141 7C41.5573 7 40.2553 5.61327 39.1063 4.38975C38.0689 3.28482 37.2495 2.41206 35.4983 2.41206C33.7472 2.41206 32.9278 3.28482 31.8905 4.38975C30.7416 5.61327 29.4394 7 26.8826 7C24.3262 7 23.0243 5.61327 21.8755 4.38975C20.8383 3.28482 20.0189 2.41206 18.268 2.41206C16.517 2.41206 15.6976 3.28482 14.6602 4.38975C13.5114 5.61327 12.2091 7 9.65253 7C7.09575 7 5.79352 5.61327 4.64453 4.38975C3.60713 3.28482 2.78775 2.41206 1.03653 2.41206C0.464193 2.41206 0 1.87216 0 1.20603C0 0.540101 0.464193 0 1.03653 0C3.59314 0 4.89537 1.38673 6.04436 2.61025C7.08176 3.71518 7.90131 4.58794 9.65253 4.58794C11.4036 4.58794 12.223 3.71518 13.2604 2.61045C14.4092 1.38673 15.7114 0 18.268 0C20.8244 0 22.1265 1.38693 23.2753 2.61045C24.3125 3.71538 25.1317 4.58794 26.8826 4.58794C28.6338 4.58794 29.4532 3.71518 30.4906 2.61045C31.6394 1.38673 32.9417 0 35.4983 0C38.0551 0 39.3571 1.38673 40.5061 2.61045C41.5435 3.71518 42.3631 4.58794 44.1141 4.58794C45.8655 4.58794 46.6849 3.71518 47.7223 2.61045C48.8713 1.38673 50.1735 0 52.7303 0C55.287 0 56.5893 1.38673 57.7383 2.61045C58.7757 3.71518 59.595 4.58794 61.3463 4.58794C63.0978 4.58794 63.9174 3.71518 64.9551 2.61025C66.1041 1.38673 67.4065 0 69.9635 0C70.5358 0 71 0.540101 71 1.20603C71 1.87216 70.5358 2.41206 69.9635 2.41206C68.2119 2.41206 67.3924 3.28482 66.3546 4.38975C65.2056 5.61327 63.9034 7 61.3463 7Z"
                                                        fill="white"></path>
                                                </svg>

                                                </div>
                                            <!-- </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="section_title pd_left_20">
                                    <h4 class="sm_title">مشاريعنا</h4>
                                    <div class="title_whole">
                                        <h2 class="title">أبرز إنجازاتنا</h2>
                                    </div>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_30"></div>
                                <!---============spacing==========--->
                                <div class="testimonial_carousel_wrapper position-relative">
                                    <div class="testimonial_slider color_one">
                                        <div class="testimonial_box type_two type_three color_one active">
                                            <div class="auth d-flex justify-content-between align-items-center clearfix">
                                                <div class="image_box">
                                                    <img src="assets/images/testimonial/qoranLogo.jpg"
                                                        class="img-fluid" alt="مسابقة حفظ وتجويد القرآن الكريم" />
                                                </div>
                                                <div class="cont">
                                                    <h4 class="title_no_a_24">مسابقة حفظ وتجويد القرآن الكريم</h4>
                                                    <p>نشاط ثقافي ديني</p>
                                                </div>
                                            </div>
                                            <div class="title_no_a_22 t_comment">
                                                <sup>"</sup>
                                                جمعية تضاف للتنمية تنظم مسابقة "أهل القرآن" لحفظ وتجويد كتاب الله، تشجيعًا على حفظ كتاب الله وإتقان تلاوته والعمل بأحكامه، يشارك في المسابقة أزيد من 50 مشاركا كل سنة.
                                                <sub>"</sub>
                                            </div>
                                        </div>
                                        <div class="testimonial_box type_two type_three color_one">
                                            <div class="auth d-flex justify-content-between align-items-center clearfix">
                                                <div class="image_box">
                                                    <img src="assets/images/testimonial/tahadi.png"
                                                        class="img-fluid" alt="تحدي القراءة" />
                                                </div>
                                                <div class="cont">
                                                    <h4 class="title_no_a_24">تحدي القراءة</h4>
                                                    <p>نشاط ثقافي</p>
                                                </div>
                                            </div>
                                            <div class="title_no_a_22 t_comment">
                                                <sup>"</sup>
                                               جمعية تضاف للتنمية تطلق "تحدي تضاف للقراءة" لتعزيز حب المطالعة وتنمية الفكر، من خلال منافسات تثري المعرفة وتفتح آفاق الإبداع، شارك في التحدي أزيد من ثلاثين مشاركا.
                                                <sub>"</sub>
                                            </div>
                                        </div>
                                        <!-- <div class="testimonial_box type_two type_three color_one">
                                            <div class="auth d-flex justify-content-between align-items-center clearfix">
                                                <div class="image_box">
                                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                                                        class="img-fluid" alt="بطولة الحي الرياضية" />
                                                </div>
                                                <div class="cont">
                                                    <h4 class="title_no_a_24">بطولة الحي الرياضية</h4>
                                                    <p>نشاط رياضي - 2023</p>
                                                </div>
                                            </div>
                                            <div class="title_no_a_22 t_comment">
                                                <sup>"</sup>نظمنا بطولة رياضية محلية في كرة القدم شارك فيها أكثر من 50
                                                شاباً من مختلف الأحياء. الهدف كان تعزيز روح التنافس الإيجابي والتضامن
                                                بين الشباب في المجتمع<sub>"</sub>
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- Navigation dots -->
                                    <div class="testimonial_dots">
                                        <span class="dot active" onclick="currentTestimonialSlide(1)"></span>
                                        <span class="dot" onclick="currentTestimonialSlide(2)"></span>
                                        <!-- <span class="dot" onclick="currentTestimonialSlide(3)"></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_90"></div>
                    <!---============spacing==========--->
                </section>
                <!--testimonial-section-->

                <div class="divider"></div>

                <div class="pd_bottom_90"></div>
                <section id="contact" class="form-section mr_bottom_minus_250 position-relative z_1"
                    style="margin-bottom: 0;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="contact_form_box_all style_one bg_2 bg_op_4 z_1"
                                    style="background-image: url(assets/images/form-shape-1.png); margin-right: 40px;">
                                    <div class="section_title color_white type_one">
                                        <h4 class="sm_title">انضم إلينا</h4>
                                        <div class="title_whole">
                                            <h2 class="title">كن جزءاً من التغيير</h2>
                                        </div>
                                    </div>
                                    <div class="contact_form_shortcode">
                                        <form method="post" action="{{ route('contact.send') }}">
                                            @csrf
                                            <div class="forms-field-name mr_bottom_20">
                                                <input type="text" name="nom" placeholder="الاسم الكامل"
                                                    spellcheck="false" required="">
                                            </div>
                                            <div class="forms-field-email mr_bottom_20">
                                                <input type="text" name="email" placeholder="البريد الإلكتروني"
                                                    spellcheck="false" required="">
                                            </div>
                                            <div class="forms-field-email mr_bottom_20">
                                                <input type="tel" name="tel" placeholder="الهاتف" spellcheck="false">
                                            </div>
                                            <div class="forms-field-Dropdown mr_bottom_40">
                                                <select name="subject">
                                                    <option value="" class="placeholder" disabled=""
                                                        selected="selected">كيف تريد المساهمة؟</option>
                                                    <option value="volunteer">التطوع</option>
                                                    <option value="donation">التبرع</option>
                                                    <option value="partnership">الشراكة</option>
                                                    <option value="info">طلب معلومات</option>
                                                </select>
                                            </div>
                                            <div class="forms-field-name mr_bottom_20">
                                                <input type="text" name="message" placeholder="رسالتك"
                                                    style="height: 100px !important" required="">
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="theme_btn">إرسال عبر البريد</button>
                                                <button type="button" class="theme_btn" id="whatsappSend" style="
                                                margin-right:10px;background:#25D366;color:#fff;
                                                
                                                    font-size: 17px;
    margin-top: 15px;
    line-height: 26px;
    display: block;
    min-height: 50px;
    height: unset !important;
    font-weight: 500;
    border-radius: 7px;
    padding: 5px 15px;
    box-shadow: unset;
    border: 1px solid var(--color-set-one-1);
    transition: 0.5s ease-in-out;
                                                ">إرسال عبر واتساب</button>
                                            </div>
                                            @if(session('success'))
                                            <div class="alert alert-success mt-3" style="color: white; background-color: #28a745; padding: 10px; border-radius: 5px; margin-top: 15px;">
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                            @if(session('error'))
                                            <div class="alert alert-danger mt-3" style="color: white; background-color: #dc3545; padding: 10px; border-radius: 5px; margin-top: 15px;">
                                                {{ session('error') }}
                                            </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mr_left_minus_100">
                                <div class="image_box_only type_nine">
                                    <img src="assets/images/about/contact.webp" class="img-fluid" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--news section-->
                <div class="pd_bottom_90"></div>
                <section id="blog" class="news-section bg_light_2 position-relative">
                    <div class="ab_img_right_top z_1">
                        <img src="assets/images/line.png" class="img-fluid" alt="img">
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_top_90"></div>
                    <!---============spacing==========--->
                    <div class="container z_1 position-relative">
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <div class="section_title text-center type_one">
                                    <h4 class="sm_title">أخبارنا</h4>
                                    <div class="title_whole">
                                        <h2 class="title">آخر الأنشطة والفعاليات</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_40"></div>
                        <!---============spacing==========--->
                        <div class="blog_post position-relative">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm d-flex align-items-center justify-content-center">
                                                    <i class="fi-rr-calendar" style="margin-left: 8px;"></i>
                                                    <time class="date published" datetime="2024-01-15T10:06:24+00:00">
                                                        27 يوليوز 2025
                                                    </time>
                                                </span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="assets/images/blog/kitab.jpg" alt="تحدي تضاف للقراءة"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#" class="text-center">تحدي تضاف للقراءة</a>
                                                </h4>
                                                <div class="description-wrapper">
                                                    <p class="descs description-text">
                                                        حفل يجمع بين الكلمة الهادفة، والتكريم المستحق، والاعتراف بجهود
                                                        المشاركين الذين جعلوا من القراءة فعلًا يوميًا ومشروعا للتغيير
                                                    </p>
                                                    <button class="read-more-btn" onclick="toggleDescription(this)">
                                                        اقرأ المزيد<i class="fi-rr-arrow-small-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm d-flex align-items-center justify-content-center">
                                                    <i class="fi-rr-calendar" style="margin-left: 8px;"></i>
                                                    <time class="date published" datetime="2024-01-10T10:06:24+00:00">
                                                        22 مارس 2025
                                                    </time>
                                                </span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="assets/images/blog/ahlelquran.jpg" alt="أهل القرآن"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#" class="text-center">أهل القرآن</a>
                                                </h4>
                                                <div class="description-wrapper">
                                                    <p class="descs description-text">
                                                        في جو روحاني بهيج، نظمت جمعية تضاف للتنمية يوم السبت 21 رمضان
                                                        1446هـ، الموافق 22 مارس 2025، الحفل الختامي لمسابقة "أهل القرآن"
                                                        لحفظ وتجويد القرآن الكريم.
                                                        تميز الحفل بقراءات قرآنية عطرة من قبل المشاركين وكلمات قيمة
                                                        ألقاها السادة الأساتذة: الإمام المرشد "حسن أرحوي" والأستاذ "عبد
                                                        الله البودي" وفضيلة الشيخ "عبد الرحمان بن بوهو".
                                                        وفي هذا الصدد، تتقدم جمعية تضاف للتنمية بجزيل الشكر والامتنان
                                                        إلى جميع المساهمين والداعمين لهذا الحدث، الذين كان لهم الدور
                                                        البارز في إنجاح هذه المسابقة. كما نشكر لجنة التحكيم الموقرة على
                                                        جهودها الكبيرة في التقييم والإرشاد، ولا يفوتنا أن نعبر عن خالص
                                                        الشكر والتقدير للحضور الكريم على دعمهم وتشجيعهم، ولجميع
                                                        المشاركين الذين أظهروا تفوقًا واجتهادًا يستحق الإشادة. نرجو من
                                                        الله أن يبارك في مسيرتهم، وأن يجعل القرآن الكريم نورًا لقلوبهم
                                                        وحياتهم.
                                                    </p>
                                                    <button class="read-more-btn" onclick="toggleDescription(this)">
                                                        اقرأ المزيد<i class="fi-rr-arrow-small-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog_box type_one trans hover_1_get">
                                        <div class="blog_inner trans">
                                            <div class="vertical_text_1">
                                                <span class="date_tm d-flex align-items-center justify-content-center">
                                                    <i class="fi-rr-calendar" style="margin-left: 8px;"></i>
                                                    <time class="date published" datetime="2024-01-05T10:06:24+00:00">
                                                        30 يناير 2023
                                                    </time>
                                                </span>
                                            </div>
                                            <div class="image_box trans hover_1">
                                                <a href="#">
                                                    <img src="assets/images/blog/sport.jpg" alt="صبحية رياضية"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title_22">
                                                    <a href="#" class="text-center">صبحية رياضية</a>
                                                </h4>
                                                <div class="description-wrapper">
                                                    <p class="descs description-text">
                                                        ننظمت جمعية "تضاف للتنمية" صباح اليوم الخميس 30 يناير 2023،
                                                        صبحية رياضية تهدف إلى تعزيز الروح الرياضية ونشر ثقافة النشاط
                                                        البدني بين المشاركين، وقد شهدت الفعالية مشاركة واسعة من مختلف
                                                        الفئات العمرية، حيث تم تنظيم مجموعة من الأنشطة الترفيهية
                                                        والرياضية، ولا يسعنا إلا أن نتقدم بالشكر الجزيل للسيد رئيس
                                                        الجماعة الترابية تافنكولت الحاج حسن البور على تلبيته طلب الجمعية
                                                        من خلال وضعه الملعب الجماعي رهن إشارتها، كما نتقدم بالشكر
                                                        والتقدير للسيد سعيد أوشن رئيس الجماعة الترابية لسيدي وعزيز على
                                                        وضعه وسيلة النقل رهن إشارة الجمعية، والشكر موصول كذلك لجميع
                                                        المساهمين والمتعاونين على إنجاح هذا النشاط.
                                                    </p>
                                                    <button class="read-more-btn" onclick="toggleDescription(this)">
                                                        اقرأ المزيد<i class="fi-rr-arrow-small-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <a href="#" class="theme_btn">
                                    المزيد من الأخبار <span><i class="fi-rr-arrow-small-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_70"></div>
                    <!---============spacing==========--->
                </section>
                <!--news section-->
            </div>
            <!--content end-->
        </div>
        <!----==============content_all_warpper end==============--->
        <!---footer start--->
        <footer class="footer style_four">
            <!---============spacing==========--->
            <div class="pd_top_80"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="call_to_action style_one d-flex justify-content-between align-items-center flex-wrap">
                    <div class="section_title type_one">
                        <div class="title_whole">
                            <h2 class="title">
                                معاً نبني مجتمعاً أفضل
                            </h2>
                        </div>
                    </div>
                    <div class="theme_btn_all">
                        <a href="#contact" class="theme_btn">
                            تواصل معنا
                            <span> <i class=" fi-rr-arrow-small-up"></i></span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center contact_header_one">
                        <div class="content">
                            <h6 class="tite">تابعنا على</h6>
                            <div class="title_20 d-flex gap-4 mt-4">
                                <a href="https://www.facebook.com/profile.php?id=100083167518896" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 320 512"
                                        fill="currentColor">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91V127.89c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.09 44.38-121.09 124.72v70.62H22.89V288h81.38v224h100.2V288z" />
                                    </svg>
                                </a>
                                |
                                <a href="https://www.instagram.com/tiddaf_association/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                        aria-hidden="true" role="img">
                                        <title>Instagram</title>
                                        <path fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5z" />
                                        <circle cx="12" cy="12" r="3.2" fill="none" stroke="#FFFFFF"
                                            stroke-width="1.6" />
                                        <circle cx="17.5" cy="6.5" r="0.6" fill="#FFFFFF" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="mid_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list_box text-center linline">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#wrapper_full">
                                            الرئيسية </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#about">
                                            من نحن </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#services">
                                            أنشطتنا </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icon trans"></div>
                                        <a class="links color_white" href="#testimonials">
                                            إنجازات </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <section class="container">
                <div class="bottom_content">
                    <div class="row" style="display: flex; align-items: end;">
                        <div class="col-lg-5">
                            <div class="logo_box">
                                <a href="#" class="logo navbar-brand">
                                    <img style="height: 6rem;" src="{{ asset('assets/images/logo/headLogo.png') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 text-md-end">
                            <div class="position-relative color_white">
                                ٢٠٢٣ © تضاف | جميع الحقوق محفوظة</div>
                        </div>
                    </div>

                </div>
            </section>
            <!---============spacing==========--->
            <div class="pd_bottom_60"></div>
            <!---============spacing==========--->
            <div class="pattern_2">
                <img src="assets/images/pattern-3.png" class="img-fluid" alt="img" />
            </div>
        </footer>
        <!--footer end---
        <!----=================Script================---->

        <style>
            .description-wrapper {
                position: relative;
            }

            .description-text {
                max-height: 120px;
                overflow: hidden;
                transition: max-height 0.3s ease;
                line-height: 1.6;
            }

            .description-text.expanded {
                max-height: none;
            }

            .read-more-btn {
                background: none;
                border: none;
                color: #1340dd;
                font-weight: 500;
                cursor: pointer;
                padding: 5px 0;
                display: flex;
                align-items: center;
                gap: 5px;
                transition: color 0.3s ease;
            }

            .read-more-btn:hover {
                color: #0d2db8;
            }

            .read-more-btn i {
                transition: transform 0.3s ease;
            }

            .read-more-btn.expanded i {
                transform: rotate(90deg);
            }

            /* Blog cards styling */
            .blog_box {
                height: 100%;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border-radius: 8px;
                overflow: hidden;
                margin-bottom: 30px;
            }

            .blog_box:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }

            .blog_inner {
                height: 100%;
                display: flex;
                flex-direction: column;
                background-color: #fff;
                border-radius: 8px;
            }

            .image_box {
                position: relative;
                overflow: hidden;
                border-radius: 8px 8px 0 0;
            }

            .image_box img {
                width: 100%;
                height: 220px;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .blog_box:hover .image_box img {
                transform: scale(1.05);
            }

            .blog_box .content {
                flex: 1;
                padding: 20px;
                display: flex;
                flex-direction: column;
            }

            .blog_box .title_22 {
                margin-bottom: 15px;
                text-align: center;
            }

            .blog_box .title_22 a {
                color: #222;
                font-weight: 600;
                transition: color 0.3s ease;
            }

            .blog_box .title_22 a:hover {
                color: #1340dd;
            }

            .vertical_text_1 {
                padding: 10px 20px;
                background-color: #f9f9f9;
                font-size: 14px;
                color: #666;
                border-bottom: 1px solid #eee;
            }

            .date_tm {
                justify-content: center;
                color: #777;
                font-size: 14px;
            }

            /* Responsive adjustments for blog section */
            @media (max-width: 991px) {
                .blog_box .image_box img {
                    height: 200px;
                }
            }

            @media (max-width: 767px) {
                .blog_post .row {
                    margin: 0 -10px;
                }
                
                .blog_post .col-sm-6 {
                    padding: 0 10px;
                }
                
                .blog_box {
                    margin-bottom: 20px;
                }
                
                .blog_box .content {
                    padding: 15px;
                }
                
                .blog_box .title_22 {
                    font-size: 18px;
                }
            }

            @media (max-width: 576px) {
                .blog_post .col-sm-6 {
                    width: 100%;
                }
            }

            .testimonial_carousel_wrapper {
                position: relative;
                padding-bottom: 50px;
            }

            .testimonial_slider {
                position: relative;
                overflow: hidden;
                min-height: 280px;
            }

            .testimonial_box {
                display: none;
                opacity: 0;
                transform: translateX(50px);
                transition: all 0.5s ease-in-out;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            .testimonial_box.active {
                display: block;
                opacity: 1;
                transform: translateX(0);
                position: relative;
                z-index: 10;
            }

            /* Force hide all boxes initially */
            .testimonial_box:not(.active) {
                display: none !important;
                opacity: 0 !important;
                visibility: hidden !important;
            }

            .testimonial_dots {
                text-align: left;
                margin-top: 30px;
                position: absolute;
                bottom: 0;
                left: 0;
            }

            .testimonial_dots .dot {
                cursor: pointer;
                height: 12px;
                width: 12px;
                margin: 0 5px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: all 0.3s ease;
                border: none;
                outline: none;
            }

            .testimonial_dots .dot.active,
            .testimonial_dots .dot:hover {
                background-color: #1340dd;
                transform: scale(1.2);
            }

            /* Animation fade effect */
            @keyframes testimonialFadeIn {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .testimonial_box.active {
                animation: testimonialFadeIn 0.5s ease-in-out;
            }
        </style>

        <script>
            function toggleDescription(button) {
                const wrapper = button.closest('.description-wrapper');
                const description = wrapper.querySelector('.description-text');
                const isExpanded = description.classList.contains('expanded');

                // Fermer tous les autres descriptions expansées
                document.querySelectorAll('.description-text.expanded').forEach(function(expandedDesc) {
                    if (expandedDesc !== description) {
                        expandedDesc.classList.remove('expanded');
                        const btn = expandedDesc.closest('.description-wrapper').querySelector('.read-more-btn');
                        btn.innerHTML = 'اقرأ المزيد<i class="fi-rr-arrow-small-right"></i>';
                        btn.classList.remove('expanded');
                    }
                });

                // Toggle l'état actuel
                if (isExpanded) {
                    description.classList.remove('expanded');
                    button.innerHTML = 'اقرأ المزيد<i class="fi-rr-arrow-small-right"></i>';
                    button.classList.remove('expanded');
                    
                    // Scroll vers le haut de la carte
                    const blogBox = button.closest('.blog_box');
                    blogBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    description.classList.add('expanded');
                    button.innerHTML = 'اقرأ أقل<i class="fi-rr-arrow-small-right"></i>';
                    button.classList.add('expanded');
                }

                // Effet de transition pour une meilleure UX
                const blogBox = button.closest('.blog_box');
                blogBox.style.transition = 'box-shadow 0.3s ease';
                blogBox.style.boxShadow = '0 10px 30px rgba(19, 64, 221, 0.1)';
                
                setTimeout(function() {
                    blogBox.style.boxShadow = '';
                }, 500);
            }
        </script>

        <script>
            let testimonialSlideIndex = 1;
            let testimonialInterval;

            function currentTestimonialSlide(n) {
                clearInterval(testimonialInterval);
                showTestimonialSlide(testimonialSlideIndex = n);
                startTestimonialAutoSlide();
            }

            function showTestimonialSlide(n) {
                let slides = document.getElementsByClassName("testimonial_box");
                let dots = document.getElementsByClassName("dot");

                if (n > slides.length) { testimonialSlideIndex = 1 }
                if (n < 1) { testimonialSlideIndex = slides.length }

                // Remove active class from all slides
                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove("active");
                    slides[i].style.display = "none";
                    slides[i].style.opacity = "0";
                    slides[i].style.visibility = "hidden";
                }

                // Remove active class from all dots
                for (let i = 0; i < dots.length; i++) {
                    dots[i].classList.remove("active");
                }

                // Show the current slide
                if (slides[testimonialSlideIndex - 1]) {
                    slides[testimonialSlideIndex - 1].classList.add("active");
                    slides[testimonialSlideIndex - 1].style.display = "block";
                    slides[testimonialSlideIndex - 1].style.opacity = "1";
                    slides[testimonialSlideIndex - 1].style.visibility = "visible";
                }

                // Activate the current dot
                if (dots[testimonialSlideIndex - 1]) {
                    dots[testimonialSlideIndex - 1].classList.add("active");
                }
            }

            function nextTestimonialSlide() {
                testimonialSlideIndex++;
                if (testimonialSlideIndex > 3) testimonialSlideIndex = 1;
                showTestimonialSlide(testimonialSlideIndex);
            }

            function startTestimonialAutoSlide() {
                testimonialInterval = setInterval(nextTestimonialSlide, 4000);
            }

            // Initialize when DOM is loaded
            document.addEventListener('DOMContentLoaded', function () {
                // Force hide all slides first
                let slides = document.getElementsByClassName("testimonial_box");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove("active");
                    slides[i].style.display = "none";
                }

                // Then show the first slide
                setTimeout(function () {
                    showTestimonialSlide(testimonialSlideIndex);
                    startTestimonialAutoSlide();
                }, 100);
            });
        </script>

        <script>
            feather.replace()
        </script>

        <script>
            // Mobile menu functionality
            document.addEventListener('DOMContentLoaded', function() {
                const hamburgerMenus = document.querySelectorAll('.navbar_togglers.hamburger_menu');
                const menuColumns = document.querySelectorAll('.column_menu');
                
                hamburgerMenus.forEach(menu => {
                    menu.addEventListener('click', function() {
                        // Toggle active class on hamburger
                        this.classList.toggle('active');
                        
                        // Toggle visibility of menu columns
                        menuColumns.forEach(column => {
                            if (window.innerWidth <= 991) {
                                if (column.style.display === 'block') {
                                    column.style.display = 'none';
                                } else {
                                    column.style.display = 'block';
                                }
                            }
                        });
                    });
                });

                // Adjust menu visibility on window resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth > 991) {
                        menuColumns.forEach(column => {
                            column.style.display = '';
                        });
                        hamburgerMenus.forEach(menu => {
                            menu.classList.remove('active');
                        });
                    } else {
                        menuColumns.forEach(column => {
                            column.style.display = 'none';
                        });
                    }
                });

                // Initialize menu state on page load
                if (window.innerWidth <= 991) {
                    menuColumns.forEach(column => {
                        column.style.display = 'none';
                    });
                }
                
                // Handle mobile menu item clicks (close menu when item is clicked)
                const menuItems = document.querySelectorAll('.navbar_nav .menu-item a');
                menuItems.forEach(item => {
                    item.addEventListener('click', function() {
                        if (window.innerWidth <= 991) {
                            menuColumns.forEach(column => {
                                column.style.display = 'none';
                            });
                            hamburgerMenus.forEach(menu => {
                                menu.classList.remove('active');
                            });
                        }
                    });
                });

                // Animation pour les cartes de blog
                const animateBlogCards = function() {
                    const blogCards = document.querySelectorAll('.blog_box');
                    blogCards.forEach((card, index) => {
                        setTimeout(() => {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                            
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 100);
                        }, index * 150);
                    });
                };

                // Exécuter l'animation lorsque la section devient visible
                const blogSection = document.getElementById('blog');
                if (blogSection) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                animateBlogCards();
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.1 });
                    
                    observer.observe(blogSection);
                }
            });
        </script>
        <script type="text/javascript" src="assets/js/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/appear.js"></script>
        <script type="text/javascript" src="assets/js/plugins/TweenMax.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/waypoints.js"></script>
        <script type="text/javascript" src="assets/js/plugins/select.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/js/plugins/isotope.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/owl.js"></script>
        <script type="text/javascript" src="assets/js/plugins/sharer.js"></script>
        <script type="text/javascript" src="assets/js/plugins/rangeslider.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/counterup.js"></script>
        <script type="text/javascript" src="assets/js/plugins/slick.js"></script>
        <script type="text/javascript" src="include/validator.min.js"></script>
        <script type="text/javascript" src="include/contact.js"></script>
        <!-- map script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/map-helper.js"></script>
        <!-- main-js -->
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/simple-carousel.js"></script>
        <script>
        document.getElementById('whatsappSend').addEventListener('click', function() {
            var nom = document.querySelector('input[name="nom"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var tel = document.querySelector('input[name="tel"]').value;
            var subject = document.querySelector('select[name="subject"]').options[document.querySelector('select[name="subject"]').selectedIndex].text;
            var message = document.querySelector('input[name="message"]').value;
            var whatsappNumber = '+212681783861'; // Remplace par le numéro WhatsApp de l'association
            var text = `الاسم الكامل: ${nom}%0Aالبريد الإلكتروني: ${email}%0Aالهاتف: ${tel}%0Aنوع المساهمة: ${subject}%0Aالرسالة: ${message}`;
            var url = `https://wa.me/${whatsappNumber}?text=${text}`;
            window.open(url, '_blank');
        });
        </script>
        <!----=================Script================---->
</body>

</html>