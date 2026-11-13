<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Khemod_Theme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function khemod_theme_scripts(): void {
	// Enqueue main stylesheet.
	wp_enqueue_style(
		'khemod-theme-style',
		get_stylesheet_uri(),
		array(),
		KHEMOD_THEME_VERSION
	);

	// Enqueue main JavaScript (placeholder for future).
	wp_enqueue_script(
		'khemod-theme-main',
		KHEMOD_THEME_URI . '/assets/js/main.js',
		array(),
		KHEMOD_THEME_VERSION,
		true // Load in footer.
	);
}
add_action( 'wp_enqueue_scripts', 'khemod_theme_scripts' );