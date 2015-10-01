<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package BuddApp
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function buddapp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'buddapp_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function buddapp_jetpack_setup
add_action( 'after_setup_theme', 'buddapp_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function buddapp_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function buddapp_infinite_scroll_render
