<!DOCTYPE html>
<html <html class="no-js" ?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Rich Flood">


    <!-- Adaptive Images -->
    <script>
        document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';
    </script>

    <!-- GoogleFonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Responsive -->
    <script src="js/respond.min.js" type="text/javascript"></script>

    <!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
    <!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
    <!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
    <!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <?php wp_head(); ?>
</head>

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="post-masthead" class="site-header" role="banner">

    <div class="site-branding">

            <div class="header-image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/header-logo.png">
            </div>

            <div class="header-background">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/post-header.png">
            </div>

            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>

            <a class="mobile-menu" href="#mobile-menu">&#9776;</a>

        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">

            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'floodwebportfolio' ); ?></a>

            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->


    </header><!-- #masthead -->

	<div id="content" class="site-content">
