
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
    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Adaptive Images -->
    <script>
        document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';
    </script>

    <!-- GoogleFonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Responsive -->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>

    <?php wp_head(); ?>
</head>

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

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="entry-content">

            <?php the_content(); ?>

            <?php

            $top_image = get_field('top_image');
            $about_subtitle = get_field('about_subtitle');
            $date_created = get_field('date_created');
            $description = get_field('description');
            $project_gallery = get_field('project_gallery');
            $button = get_field('button');

            ?>
            <div class="wrapper">

                <img class="top-image" src= <?php echo $top_image; ?>>

                <div class="project-content">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <p class="about-subtitle"><?php echo $about_subtitle; ?></p>
                    <p class="date-created"><?php echo $date_created; ?></p>
                    <p class="description"><?php echo $description; ?></p>
                    <button type="button"><?php echo $button; ?></button>
                </div>

                <!-- for display at 768px -->
                <p class="responsive-description"><?php echo $description; ?></p>

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

        <footer id="colophon" class="site-footer" role="contentinfo">
            <a name="mobile-menu">
                <nav id="site-navigation" class="mobile-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
                </nav><!-- #mobile-navigation -->

                <div class="footer-background">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/footer.png">
                </div>

        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

</body>
</html>
