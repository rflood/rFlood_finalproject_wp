<?php
/**
 * @package floodwebportfolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'floodwebportfolio' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
