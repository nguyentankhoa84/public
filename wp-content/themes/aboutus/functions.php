<?php
/**
 * Function file to custom.
 *
 * @package aboutus
 */

/**
 * Disable block editor on admin side.
 */
add_filter( 'use_block_editor_for_post', '__return_false' );


add_action( 'wp_enqueue_scripts', 'aboutus_add_theme_scripts' );
/**
 * Implementation of hook "wp_enqueue_scripts"
 * Add css, javascript for this theme.
 */
function aboutus_add_theme_scripts() {
	wp_enqueue_style( 'aboutus-slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'aboutus', get_stylesheet_directory_uri() . '/assets/css/aboutus.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'aboutus-slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'aboutus', get_stylesheet_directory_uri() . '/assets/js/aboutus.js', array( 'jquery', 'aboutus-slick' ), '1.0', true );
}
