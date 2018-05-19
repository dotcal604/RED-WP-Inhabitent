<?php
/**
 * The Main HomePage
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1>front-page.php</h1>

<?php 
    $args = array(
        'order' => 'ASC',
        'posts_per_page' => 8,
        //'post_type' => 'product'
        //,
        // 'tax_query' => array(
        //     array(
        //         'taxonomy' => 'product-type',
        //         'field'    => 'slug',
        //         'terms'    => 'bread',
        //     ),
        // ),
    );
    $products = new WP_Query( $args ); /* $args set above*/ 
?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
