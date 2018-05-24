<?php
/**
 * The template for displaying all pages.
 *
 * @package rafaelsc_inhabitent_Theme
 */

function rafaelsc_inhabitent_about_body_classes( $classes ) {
    $classes[] = 'about';
	return $classes;
}
add_filter( 'body_class', 'rafaelsc_inhabitent_about_body_classes' );


get_header(); ?>

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
