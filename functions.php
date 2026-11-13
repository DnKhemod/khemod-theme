<?php
/**
 * Khemod Theme functions and definitions
 *
 * @package Khemod_Theme
 * @version 1.0.0
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define theme constants.
define( 'KHEMOD_THEME_VERSION', '1.0.0' );
define( 'KHEMOD_THEME_DIR', get_template_directory() );
define( 'KHEMOD_THEME_URI', get_template_directory_uri() );

// Require modular files.
require_once KHEMOD_THEME_DIR . '/inc/theme-setup.php';
require_once KHEMOD_THEME_DIR . '/inc/enqueue.php';
require_once KHEMOD_THEME_DIR . '/inc/cpt-produk.php';