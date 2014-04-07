<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package floodwebportfolio
 */
?>

	</div><!-- #content -->


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
