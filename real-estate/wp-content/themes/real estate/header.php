<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TNL8QV6');</script>
    <!-- End Google Tag Manager -->
    <title>KEY SPOT - Агенция за недвижими имоти</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/flaticon/font/flaticon.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_directory'); ?>/css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/initial.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?php bloginfo('template_directory'); ?>/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo('template_directory'); ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNL8QV6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header th10 d-none d-lg-block d-md-block" id="top-header-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-7">
                <div class="list-inline">
                    <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i>089 880 7434</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@keyspot.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Вход</a>
                    </li>
                    <li>
                        <a href="signup.html" class="sign-in"><i class="fa fa-user"></i> Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header sticky-header header-fixed" id="main-header-1">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="main-logo" href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logos/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'top-menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <div class="nav-item submit-property-button">
                    <a href="http://localhost/real-estate/продай-имот" class="button btn-3">
                        Продай имот
                    </a>
                </div>
            </div>
        </nav>        
    </div>
    <?php wp_head(); ?> 
</header>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logos/logo.png" alt="sidebarlogo">
            </a>
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Страници</h3>
            <ul class="menu-list">
                <?php 
                wp_nav_menu(array(
                    'theme_location'  => 'side-menu',
                    'menu'            => 'navigation',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class'    => '',
                    'menu_class'      => 'menu-list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                ));
            ?>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Свържете се с нас</h3>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="body-info">
                    <a href="tel:<?php the_field('phone', 'menu_' . 6) ?>"><?php the_field('phone', 'menu_' . 6) ?></a>
                </div>
            </div>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="body-info">
                    <a href="#"><?php the_field('email', 'menu_' . 6) ?></a>
                </div>
            </div>
            <div class="sidebar-contact-info mb-0">
                <div class="icon">
                    <i class="fa fa-fax"></i>
                </div>
                <div class="body-info">
                    <a href="tel:<?php the_field('phone-2', 'menu_' . 6) ?>"><?php the_field('phone-2', 'menu_' . 6) ?></a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Последвайте ни</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->