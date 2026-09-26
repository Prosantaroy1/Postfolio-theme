<?php
/**
 * Postfolio Blocks functions and definitions.
 *
 * This is a block theme (full-site editing). Almost all presentation
 * lives in theme.json, /templates, /parts and /patterns. This file only
 * adds the small handful of things that theme.json cannot express:
 * core theme supports, block pattern categories, and one small
 * stylesheet for interactive states (hover/focus) that are outside the
 * scope of the Global Styles API.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'postfolio_blocks_setup' ) ) {
	/**
	 * Set up theme defaults and register the things a block theme still
	 * needs to register in PHP.
	 */
	function postfolio_blocks_setup() {
		// Make the theme translation ready.
		load_theme_textdomain( 'postfolio-blocks', get_template_directory() . '/languages' );

		// Let WordPress manage the document <title> tag.
		add_theme_support( 'title-tag' );

		// Featured images.
		add_theme_support( 'post-thumbnails' );

		// RSS feed links in <head>.
		add_theme_support( 'automatic-feed-links' );

		// Full and wide alignment for blocks.
		add_theme_support( 'align-wide' );

		// Responsive embedded content (YouTube, Vimeo, etc).
		add_theme_support( 'responsive-embeds' );

		// Custom line-height controls in the editor.
		add_theme_support( 'custom-line-height' );

		// Editor styles so the back end matches the front end.
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor.css' );
		add_editor_style( 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap' );
	}
}
add_action( 'after_setup_theme', 'postfolio_blocks_setup' );

if ( ! function_exists( 'postfolio_blocks_styles' ) ) {
	/**
	 * Enqueue the Google Fonts and small supplemental stylesheet used for hover/focus
	 * states and other interactive details that theme.json cannot set.
	 */
	function postfolio_blocks_styles() {
		wp_enqueue_style(
			'postfolio-blocks-google-fonts',
			'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'postfolio-blocks-style',
			get_stylesheet_uri(),
			array( 'postfolio-blocks-google-fonts' ),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style(
			'postfolio-blocks-custom',
			get_theme_file_uri( 'assets/css/custom.css' ),
			array( 'postfolio-blocks-style' ),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'postfolio_blocks_styles' );

if ( ! function_exists( 'postfolio_blocks_pattern_categories' ) ) {
	/**
	 * Register dedicated pattern categories so all of this theme's
	 * bundled patterns are easy to find in the pattern inserter.
	 */
	function postfolio_blocks_pattern_categories() {
		$categories = array(
			'postfolio-blocks'              => array(
				'label'       => _x( 'Postfolio — All', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'All layouts bundled with the Postfolio Blocks theme.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-posts'        => array(
				'label'       => _x( 'Postfolio — Post Grids & Lists', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Magazine grids, editorial lists and spotlight layouts.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-sections'     => array(
				'label'       => _x( 'Postfolio — Heroes & CTAs', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Hero banners, announcement bars and call-to-action sections.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-testimonials' => array(
				'label'       => _x( 'Postfolio — Testimonials & Services', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Customer reviews, star ratings and service grid cards.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-meta'         => array(
				'label'       => _x( 'Postfolio — Author & Contact', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Author bio cards, social link profiles and contact blocks.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-pages'        => array(
				'label'       => _x( 'Postfolio — Page Layouts', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Full body page layouts for About, Contact and 404 pages.', 'postfolio-blocks' ),
			),
		);

		foreach ( $categories as $slug => $args ) {
			register_block_pattern_category( $slug, $args );
		}
	}
}
add_action( 'init', 'postfolio_blocks_pattern_categories' );

if ( ! function_exists( 'postfolio_blocks_block_styles' ) ) {
	/**
	 * Register a couple of extra block styles that support the
	 * card-grid / spotlight look used throughout the theme's patterns.
	 */
	function postfolio_blocks_block_styles() {
		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => _x( 'Card', 'Block style', 'postfolio-blocks' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'rounded',
				'label' => _x( 'Rounded', 'Block style', 'postfolio-blocks' ),
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'  => 'dot',
				'label' => _x( 'Dot', 'Block style', 'postfolio-blocks' ),
			)
		);
	}
}
add_action( 'init', 'postfolio_blocks_block_styles' );

if ( ! function_exists( 'postfolio_blocks_excerpt_length' ) ) {
	/**
	 * Slightly shorter default excerpt length, tuned for the card grid
	 * patterns used on the homepage layouts and blog index.
	 *
	 * @param int $length Current excerpt length.
	 * @return int Filtered excerpt length.
	 */
	function postfolio_blocks_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}
		return 22;
	}
}
add_filter( 'excerpt_length', 'postfolio_blocks_excerpt_length' );

if ( ! function_exists( 'postfolio_blocks_excerpt_more' ) ) {
	/**
	 * Replace the default "[&hellip;]" with an ellipsis on the front end.
	 *
	 * @param string $more Existing "more" string.
	 * @return string Filtered "more" string.
	 */
	function postfolio_blocks_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '&hellip;';
	}
}
add_filter( 'excerpt_more', 'postfolio_blocks_excerpt_more' );

/**
 * Load Theme Admin Dashboard & Starter Site Importer.
 */
require_once get_template_directory() . '/inc/admin-dashboard.php';

