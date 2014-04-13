<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package floodwebportfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php
    $args = array( 'post_type' => 'portfoliopost' );
    $portfolioposts = new WP_Query( $args );
    $size = array(500,280);

    ?>


    <?php if ( $portfolioposts -> have_posts() ) : ?>

        <?php /* Start the Loop */ ?>

        <?php while ( $portfolioposts -> have_posts() ) : $portfolioposts -> the_post(); ?>

            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail($size); ?>
                </a>
            <?php endif; ?>



        <?php endwhile; ?>



        <?php floodwebportfolio_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

