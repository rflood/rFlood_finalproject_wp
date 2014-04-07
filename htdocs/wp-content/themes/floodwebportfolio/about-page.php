<?php
/*
Template Name: About Me
*/
?>

<?php get_header(); ?>

    <div class="aboutme-picture">
        <img class=aboutme-img" src=<?php the_field('aboutme_img'); ?>>
    </div>

    <div class="aboutme-content">
        <h1><?php the_field('aboutme_title'); ?></h1>
        <p><?php the_field('aboutme_text'); ?></p>
    </div>

<?php get_footer(); ?>