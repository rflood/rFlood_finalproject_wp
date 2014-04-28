<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

    <div id="contact" class="js">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <div id=alt-contact>
        <h1>Contact Me</h1>
        <h2>raflood@gmail.com</h2>
    </div>

<?php get_footer(); ?>