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
	// Enqueue Google Fonts (Playfair Display for headings, Inter for body).
	wp_enqueue_style(
		'khemod-theme-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null // No version for external resources.
	);

	// Enqueue main stylesheet.
	wp_enqueue_style(
		'khemod-theme-style',
		get_stylesheet_uri(),
		array( 'khemod-theme-google-fonts' ),
		KHEMOD_THEME_VERSION
	);

	// Enqueue main JavaScript.
	wp_enqueue_script(
		'khemod-theme-main',
		KHEMOD_THEME_URI . '/assets/js/main.js',
		array(),
		KHEMOD_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'khemod_theme_scripts' );