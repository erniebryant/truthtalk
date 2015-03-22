<?php
/**
 * TruthTalk functions and definitions
 *
 * @package TruthTalk
 */



add_action( 'after_setup_theme', 'truthtalk__setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function truthtalk__widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'truthtalk_' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'truthtalk__widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function truthtalk__scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'truthtalk__scripts' );


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
