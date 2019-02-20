<?php
/**
* Enqueue scripts and styles.
*/
function nepsoft_css_scripts() {
	
	wp_enqueue_style('css-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('css-fonts', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'css-style', get_stylesheet_uri() );
	wp_enqueue_style('css-slick', get_template_directory_uri().'/assets/css/slick.css');
	wp_enqueue_style('css-slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css');
	wp_enqueue_style('css-responsive', get_template_directory_uri().'/assets/css/responsive.css');
	wp_enqueue_style('css-menustyle', get_template_directory_uri().'/assets/css/menustyle.css');
	wp_enqueue_style('css-ionicons', get_template_directory_uri().'/assets/css/ionicons.min.css');
if ( is_page_template( 'listing.php' )  || is_page_template( 'single-inner.php' ) || is_category() || is_single() || (!is_front_page() && is_page())  || is_author()){
	
	wp_enqueue_style('css-responsive-tabstyle', get_template_directory_uri().'/assets/css/responsive-tabs.css');
	wp_enqueue_style('css-tabstyle', get_template_directory_uri().'/assets/css/tabstyle.css');
}
}
add_action( 'wp_enqueue_scripts', 'nepsoft_css_scripts' );

function nepsoft_js_scripts() {
wp_enqueue_script( 'nepsoft-slim', get_template_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js',array(), '3.2.1', true );
wp_enqueue_script( 'nepsoft-popper', get_template_directory_uri() . '/assets/js/popper.min.js',array('nepsoft-slim'), '', true );
wp_enqueue_script( 'nepsoft-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('nepsoft-slim'), '', true);
wp_enqueue_script( 'nepsoft-old', get_template_directory_uri() . '/assets/js/jquery.min.1.1.js',array(), '', true );
wp_enqueue_script( 'nepsoft-slick', get_template_directory_uri() . '/assets/js/slick.min.js',array('nepsoft-old'), '', true );
wp_enqueue_script( 'nepsoft-megamenu', get_template_directory_uri() . '/assets/js/megamenu.js',array(''), '', true );
wp_enqueue_script( 'nepsoft-customfont', get_template_directory_uri() . '/assets/js/index.js.',array(''), '', true );
wp_enqueue_script( 'nepsoft-modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js.',array(''), '', true );
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'wp_enqueue_scripts', 'nepsoft_js_scripts' );
