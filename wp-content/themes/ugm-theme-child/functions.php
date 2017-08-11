<?php

// parent theme
define( 'PARENT_THEME_DIR', 		get_template_directory() );
define( 'PARENT_THEME_DIR_ASSETS', 	get_template_directory() . '/assets' );
define( 'PARENT_THEME_DIR_INC', 	get_template_directory() . '/inc' );
define( 'PARENT_THEME_URI', 		get_template_directory_uri() );
define( 'PARENT_THEME_URI_ASSETS', 	get_template_directory_uri() . '/assets' );
define( 'PARENT_THEME_URI_INC', 	get_template_directory_uri() . '/inc' );

// child theme
define( 'CHILD_THEME_DIR', 			get_stylesheet_directory() );
define( 'CHILD_THEME_DIR_ASSETS', 	get_stylesheet_directory() . '/assets' );
define( 'CHILD_THEME_URI', 			get_stylesheet_directory_uri() );
define( 'CHILD_THEME_URI_ASSETS', 	get_stylesheet_directory_uri() . '/assets' );

/* contoh */
function ugm_child_theme_scripts() {
	wp_enqueue_style( 'ugm-theme-child', CHILD_THEME_URI_ASSETS . '/css/style.css', array('ugm-theme'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ugm_child_theme_scripts', 999 );