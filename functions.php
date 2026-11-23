<?php
/**
 * Theme setup and asset enqueuing for the gcdotnet2026 theme.
 *
 * @package gcdotnet2026
 */

if ( ! function_exists( 'gcdotnet2026_support' ) ) :
	/**
	 * Sets up theme support for core features.
	 *
	 * @since 0.1.0
	 */
	function gcdotnet2026_support() {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'gcdotnet2026_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function gcdotnet2026_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'gcdotnet2026-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue compiled build assets.
		$asset_file = get_template_directory() . '/build/index.asset.php';
	if ( file_exists( $asset_file ) ) {
			$asset = include $asset_file;
			wp_enqueue_script( 'gcdotnet2026-script', get_template_directory_uri() . '/build/index.js', $asset['dependencies'], $asset['version'], true );
			wp_enqueue_style( 'gcdotnet2026-build-style', get_template_directory_uri() . '/build/style-index.css', array(), $asset['version'] );
	}
}

add_action( 'wp_enqueue_scripts', 'gcdotnet2026_scripts' );

/**
 * Enqueue compiled styles in the block editor, so the editor canvas matches the frontend.
 */
function gcdotnet2026_editor_assets() {
	$asset_file = get_template_directory() . '/build/index.asset.php';
	if ( file_exists( $asset_file ) ) {
		$asset = include $asset_file;
		wp_enqueue_style( 'gcdotnet2026-editor-style', get_template_directory_uri() . '/build/style-index.css', array(), $asset['version'] );
	}
}

add_action( 'enqueue_block_editor_assets', 'gcdotnet2026_editor_assets' );
