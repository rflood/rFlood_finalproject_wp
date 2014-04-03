<?php
/**
 * @package floodwebportfolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


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
