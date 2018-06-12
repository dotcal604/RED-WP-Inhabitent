<?php
/**
 * The template for displaying product type taxonomy.
 *
 * @package rafaelsc_inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

            <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

            <header class = "entry-header taxonomy-heading">
                <h1><?php echo $term->name; ?></h1>
                <p><?php echo $term->description; ?></p>
            </header>

            <session class = "entry-container">

                <?php
                    $args = array( 
                        'post_type' => 'Products',
                        'posts_per_page' => -1, 
                        'orderby'=> 'title', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_type',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            )
                        ),
                    ); 
                    $products = new WP_Query( $args );
                ?>

                <?php if ( $products->have_posts() ) : ?>
                    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                        <div class="entry-post product-post">
                            <div class="entry-thumbnail">
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="entry-info product-info">
                                <h2><?php the_title(); ?></h2>
                                <span><?php echo CFS()->get('price'); ?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <h2>Nothing found!</h2>
                <?php endif; ?>

            </session>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>