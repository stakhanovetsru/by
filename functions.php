<?php
/**
 * stakhanovets functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stakhanovets
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	//define('_S_VERSION', '1.0.0');
	define( '_S_VERSION', current_time( 'timestamp' ) );
}


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
include get_theme_file_path( 'inc/template-functions.php' );


/**
 * Подключение Carbon Fields
 */
include get_theme_file_path( 'inc/carbon-fields.php' );
