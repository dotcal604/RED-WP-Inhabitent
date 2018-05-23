<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

function red_starter_about_body_classes( $classes ) {
    $classes[] = 'about';
	return $classes;
}
add_filter( 'body_class', 'red_starter_about_body_classes' );


get_header( "about" ); ?>

    <!-- <div class="content-to-center"> -->
        <div id="primary" class="about-content-area">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page-about' ); ?>

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    <!-- </div> -->
    
<?php get_footer(); ?>
