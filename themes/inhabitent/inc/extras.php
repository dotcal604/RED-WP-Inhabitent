<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package rafaelsc_inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rafaelsc_inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'rafaelsc_inhabitent_body_classes' );


function rafaelsc_inhabitent_login_logo($url) {
	// return "$url/images/logos/inhabitent-logo-full.svg";
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/build/images/logos/inhabitent-logo-full.svg) !important; }
</style>';
} 
add_filter( 'login_head', 'rafaelsc_inhabitent_login_logo' );


function rafaelsc_inhabitent_login_url($url) {
	return "http://tent.academy.red/";
} 
add_filter( 'login_headerurl', 'rafaelsc_inhabitent_login_url' );
