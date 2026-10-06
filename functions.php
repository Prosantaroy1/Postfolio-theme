<?php
/**
 * Postfolio Blocks functions and definitions.
 *
 * This is a block theme (full-site editing). Almost all presentation
 * lives in theme.json, /styles, /templates, /parts and /patterns. This file
 * only adds the handful of things that theme.json cannot express: core
 * theme supports, pattern categories, block styles and one small
 * stylesheet for interactive states (hover/focus).
 *
 * Fonts are bundled in /assets/fonts and loaded through theme.json, so the
 * theme makes no requests to third-party font services.
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
		// Translations are loaded automatically by WordPress (language packs, since 4.6).

		// Editor styles so the back end matches the front end.
		add_theme_support( 'editor-styles' );
		add_editor_style( array( 'assets/css/custom.css', 'assets/css/editor.css' ) );
	}
}
add_action( 'after_setup_theme', 'postfolio_blocks_setup' );

if ( ! function_exists( 'postfolio_blocks_styles' ) ) {
	/**
	 * Enqueue the theme stylesheet and the small supplemental stylesheet used
	 * for hover/focus states and other details that theme.json cannot set.
	 */
	function postfolio_blocks_styles() {
		$version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'postfolio-blocks-style', get_stylesheet_uri(), array(), $version );
		wp_enqueue_style( 'postfolio-blocks-custom', get_theme_file_uri( 'assets/css/custom.css' ), array( 'postfolio-blocks-style' ), $version );
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
			'postfolio-blocks-blog'         => array(
				'label'       => _x( 'Postfolio — Blog Extras', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Related posts, popular posts, share buttons, table of contents and sidebar widgets.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-sections'     => array(
				'label'       => _x( 'Postfolio — Heroes & CTAs', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Hero banners, announcement bars and call-to-action sections.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-showcase'     => array(
				'label'       => _x( 'Postfolio — Portfolio & Showcase', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Portfolio grids, case studies, galleries, logos, stats and timelines.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-testimonials' => array(
				'label'       => _x( 'Postfolio — Testimonials & Services', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Customer reviews, star ratings, pricing and service grid cards.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-meta'         => array(
				'label'       => _x( 'Postfolio — Author & Contact', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Author bio cards, social link profiles and contact blocks.', 'postfolio-blocks' ),
			),
			'postfolio-blocks-pages'        => array(
				'label'       => _x( 'Postfolio — Page Layouts', 'Block pattern category', 'postfolio-blocks' ),
				'description' => __( 'Full page layouts for home, landing, about, services, portfolio, contact and 404 pages.', 'postfolio-blocks' ),
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
	 * Section styles and the "Pill" terms style live in /styles as JSON.
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

require_once get_template_directory() . '/inc/modules.php';
require_once get_template_directory() . '/inc/blog-features.php';
require_once get_template_directory() . '/inc/starter-sites.php';
require_once get_template_directory() . '/inc/admin-dashboard.php';
