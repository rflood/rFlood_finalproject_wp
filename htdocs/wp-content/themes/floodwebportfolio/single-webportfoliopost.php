
<?php
/*
Template Name Posts: Portfolio Post
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Rich Flood">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- GoogleFonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Responsive -->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">

            <div class="header-image">
                <img src="img/header-logo.png">
            </div>

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h1 class="menu-toggle"><?php _e( 'Menu', 'floodwebportfolio' ); ?></h1>
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'floodwebportfolio' ); ?></a>

            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>

                <!-- <div class="entry-meta"> -->
                <!--	<?php floodwebportfolio_posted_on(); ?> -->
                <!-- </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">

                <?php the_content(); ?>

                <?php

                $top_image = get_field('top_image');
                $about_subtitle = get_field('about_subtitle');
                $date_created = get_field('date_created');
                $description = get_field('description');
                $project_gallery = get_field('project_gallery');

                ?>
                <div class="wrapper">

                    <img class="top_image" src= <?php echo $top_image; ?>>

                    <div class="project-content">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <p class="about_subtitle"><?php echo $about_subtitle; ?></p>
                        <p class="date_created"><?php echo $date_created; ?></p>
                        <p class="description"><?php echo $description; ?></p>
                        <button type="button">View Project</button>
                    </div>

                    <div class="project-gallery">
                        <?php
                        $images = get_field('project_gallery');

                        if( $images ): ?>
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <?php foreach( $images as $image ): ?>
                                        <li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <p class="flex-caption"><?php echo $image['caption']; ?></p>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>

                            </div>

                        <?php endif; ?>

                    </div>


                    <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'floodwebportfolio' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>
            </div><!-- .entry-content -->
