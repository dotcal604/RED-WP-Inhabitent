<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function inhabitent_product_type() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'inhabitent_text_domain' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'inhabitent_text_domain' ),
		'menu_name'                  => __( 'Product Type', 'inhabitent_text_domain' ),
		'all_items'                  => __( 'All Items', 'inhabitent_text_domain' ),
		'parent_item'                => __( 'Parent Item', 'inhabitent_text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'inhabitent_text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'inhabitent_text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'inhabitent_text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'inhabitent_text_domain' ),
		'update_item'                => __( 'Update Item', 'inhabitent_text_domain' ),
		'view_item'                  => __( 'View Item', 'inhabitent_text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'inhabitent_text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'inhabitent_text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'inhabitent_text_domain' ),
		'popular_items'              => __( 'Popular Items', 'inhabitent_text_domain' ),
		'search_items'               => __( 'Search Items', 'inhabitent_text_domain' ),
		'not_found'                  => __( 'Not Found', 'inhabitent_text_domain' ),
		'no_terms'                   => __( 'No items', 'inhabitent_text_domain' ),
		'items_list'                 => __( 'Items list', 'inhabitent_text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'inhabitent_text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'products' ), $args );

}
add_action( 'init', 'inhabitent_product_type', 0 );