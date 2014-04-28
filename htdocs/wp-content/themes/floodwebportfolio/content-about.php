<?php
/*
Template Name: About Me Page
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">

        <?php the_content(); ?>

        <?php

        $about_image = get_field('about_image');
        $about_content = get_field('about_content');

        ?>
        <div class="wrapper">

            <img class="about-image" src= <?php echo $about_image; ?>>

            <div class="about-content">
                <h1 class="content-title"><?php the_title(); ?></h1>
                <p class="about-content"><?php echo $about_content; ?></p>
            </div>

        </div>

    </div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'floodwebportfolio' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php get_footer(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>