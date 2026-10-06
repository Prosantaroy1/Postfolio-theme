<?php
/**
 * One-click starter sites.
 *
 * Each starter site builds its pages from the theme's own block patterns,
 * sets the reading settings and can optionally apply a matching style
 * variation. Re-importing updates the pages it created before instead of
 * creating duplicates.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Starter site definitions.
 *
 * @return array<string, array<string, mixed>>
 */
function postfolio_blocks_starter_sites() {
	return array(
		'blog'      => array(
			'title'       => __( 'Personal Blog', 'postfolio-blocks' ),
			'description' => __( 'Latest posts on the homepage, plus About and Contact pages.', 'postfolio-blocks' ),
			'style'       => '',
			'image'       => 'photo-1.svg',
			'front'       => '',
			'pages'       => array(
				'about'   => array( __( 'About', 'postfolio-blocks' ), 'postfolio-blocks/page-about-content', '' ),
				'contact' => array( __( 'Contact', 'postfolio-blocks' ), 'postfolio-blocks/page-contact-starter', '' ),
			),
		),
		'magazine'  => array(
			'title'       => __( 'Online Magazine', 'postfolio-blocks' ),
			'description' => __( 'Spotlight homepage with featured stories and a separate blog page.', 'postfolio-blocks' ),
			'style'       => 'Retro',
			'image'       => 'photo-5.svg',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'    => array( __( 'Home', 'postfolio-blocks' ), '', 'home-2' ),
				'blog'    => array( __( 'Blog', 'postfolio-blocks' ), '', '' ),
				'about'   => array( __( 'About', 'postfolio-blocks' ), 'postfolio-blocks/page-about-content', '' ),
				'contact' => array( __( 'Contact', 'postfolio-blocks' ), 'postfolio-blocks/page-contact-starter', '' ),
			),
		),
		'editorial' => array(
			'title'       => __( 'Editorial News', 'postfolio-blocks' ),
			'description' => __( 'Clean editorial list homepage in the Nordic style.', 'postfolio-blocks' ),
			'style'       => 'Nordic',
			'image'       => 'photo-6.svg',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'    => array( __( 'Home', 'postfolio-blocks' ), '', 'home-3' ),
				'blog'    => array( __( 'Latest', 'postfolio-blocks' ), '', '' ),
				'about'   => array( __( 'About', 'postfolio-blocks' ), 'postfolio-blocks/page-about-content', '' ),
				'contact' => array( __( 'Contact', 'postfolio-blocks' ), 'postfolio-blocks/page-contact-starter', '' ),
			),
		),
		'portfolio' => array(
			'title'       => __( 'Creative Portfolio', 'postfolio-blocks' ),
			'description' => __( 'Portfolio homepage, project grid, case study and contact page.', 'postfolio-blocks' ),
			'style'       => 'Midnight',
			'image'       => 'photo-7.svg',
			'front'       => 'home',
			'posts'       => 'journal',
			'pages'       => array(
				'home'    => array( __( 'Home', 'postfolio-blocks' ), 'postfolio-blocks/starter-portfolio-landing', 'page-no-title' ),
				'work'    => array( __( 'Work', 'postfolio-blocks' ), 'postfolio-blocks/page-portfolio-starter', 'page-no-title' ),
				'journal' => array( __( 'Journal', 'postfolio-blocks' ), '', '' ),
				'contact' => array( __( 'Contact', 'postfolio-blocks' ), 'postfolio-blocks/page-contact-starter', '' ),
			),
		),
		'business'  => array(
			'title'       => __( 'Business & Agency', 'postfolio-blocks' ),
			'description' => __( 'Landing page with transparent header, services, pricing and contact.', 'postfolio-blocks' ),
			'style'       => 'Sunset',
			'image'       => 'photo-2.svg',
			'front'       => 'home',
			'posts'       => 'news',
			'pages'       => array(
				'home'     => array( __( 'Home', 'postfolio-blocks' ), 'postfolio-blocks/page-landing-starter', 'page-landing' ),
				'services' => array( __( 'Services', 'postfolio-blocks' ), 'postfolio-blocks/page-services-starter', 'page-no-title' ),
				'about'    => array( __( 'About', 'postfolio-blocks' ), 'postfolio-blocks/page-about-content', '' ),
				'news'     => array( __( 'News', 'postfolio-blocks' ), '', '' ),
				'contact'  => array( __( 'Contact', 'postfolio-blocks' ), 'postfolio-blocks/page-contact-starter', '' ),
			),
		),
	);
}

/**
 * Get the registered content of a theme pattern.
 *
 * @param string $slug Pattern name.
 * @return string
 */
function postfolio_blocks_pattern_content( $slug ) {
	if ( ! $slug ) {
		return '';
	}

	$pattern = WP_Block_Patterns_Registry::get_instance()->get_registered( $slug );

	return $pattern ? $pattern['content'] : '';
}

/**
 * Apply a theme style variation to the user's Global Styles.
 *
 * Presets are stored under the "theme" origin, exactly like the Site Editor
 * does when a variation is picked in Styles → Browse styles.
 *
 * @param string $title Variation title.
 * @return bool
 */
function postfolio_blocks_apply_style_variation( $title ) {
	$variation = null;

	foreach ( WP_Theme_JSON_Resolver::get_style_variations() as $candidate ) {
		if ( isset( $candidate['title'] ) && $candidate['title'] === $title ) {
			$variation = $candidate;
			break;
		}
	}

	if ( ! $variation ) {
		return false;
	}

	$settings = isset( $variation['settings'] ) ? $variation['settings'] : array();
	$presets  = array(
		array( 'color', 'palette' ),
		array( 'color', 'gradients' ),
		array( 'typography', 'fontFamilies' ),
		array( 'typography', 'fontSizes' ),
	);

	foreach ( $presets as $path ) {
		if ( isset( $settings[ $path[0] ][ $path[1] ] ) && isset( $settings[ $path[0] ][ $path[1] ][0] ) ) {
			$settings[ $path[0] ][ $path[1] ] = array( 'theme' => $settings[ $path[0] ][ $path[1] ] );
		}
	}

	$user_styles = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true );

	if ( empty( $user_styles['ID'] ) ) {
		return false;
	}

	$data = array(
		'version'                     => WP_Theme_JSON::LATEST_SCHEMA,
		'isGlobalStylesUserThemeJSON' => true,
		'title'                       => $variation['title'],
		'settings'                    => $settings,
		'styles'                      => isset( $variation['styles'] ) ? $variation['styles'] : array(),
	);

	$result = wp_update_post(
		array(
			'ID'           => $user_styles['ID'],
			'post_content' => wp_slash( wp_json_encode( $data ) ),
		),
		true
	);

	if ( is_wp_error( $result ) ) {
		return false;
	}

	WP_Theme_JSON_Resolver::clean_cached_data();

	return true;
}

/**
 * Import a starter site.
 *
 * @param string $slug        Starter site key.
 * @param bool   $apply_style Whether to apply the matching style variation.
 * @return array|WP_Error Summary on success.
 */
function postfolio_blocks_import_starter_site( $slug, $apply_style = false ) {
	$sites = postfolio_blocks_starter_sites();

	if ( ! isset( $sites[ $slug ] ) ) {
		return new WP_Error( 'postfolio_unknown_site', __( 'Unknown starter site.', 'postfolio-blocks' ) );
	}

	$site     = $sites[ $slug ];
	$imported = get_option( 'postfolio_blocks_imported_pages', array() );
	$imported = is_array( $imported ) ? $imported : array();
	$page_ids = array();

	foreach ( $site['pages'] as $key => $page ) {
		list( $title, $pattern, $template ) = $page;

		$content  = postfolio_blocks_pattern_content( $pattern );
		$existing = isset( $imported[ $slug ][ $key ] ) ? get_post( $imported[ $slug ][ $key ] ) : null;
		$postarr  = array(
			'post_title'   => $title,
			'post_content' => wp_slash( $content ),
			'post_status'  => 'publish',
			'post_type'    => 'page',
		);

		if ( $existing && 'page' === $existing->post_type && 'trash' !== $existing->post_status ) {
			$postarr['ID'] = $existing->ID;
			$page_id       = wp_update_post( $postarr, true );
		} else {
			$page_id = wp_insert_post( $postarr, true );
		}

		if ( is_wp_error( $page_id ) ) {
			return $page_id;
		}

		if ( $template ) {
			update_post_meta( $page_id, '_wp_page_template', $template );
		} else {
			delete_post_meta( $page_id, '_wp_page_template' );
		}

		$page_ids[ $key ] = (int) $page_id;
	}

	$imported[ $slug ] = $page_ids;
	update_option( 'postfolio_blocks_imported_pages', $imported, false );

	if ( $site['front'] && isset( $page_ids[ $site['front'] ] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $page_ids[ $site['front'] ] );
		update_option( 'page_for_posts', isset( $site['posts'], $page_ids[ $site['posts'] ] ) ? $page_ids[ $site['posts'] ] : 0 );
	} else {
		update_option( 'show_on_front', 'posts' );
		update_option( 'page_on_front', 0 );
		update_option( 'page_for_posts', 0 );
	}

	$style_applied = false;
	if ( $apply_style && $site['style'] ) {
		$style_applied = postfolio_blocks_apply_style_variation( $site['style'] );
	}

	return array(
		'pages'         => count( $page_ids ),
		'style_applied' => $style_applied,
	);
}

/**
 * AJAX: import a starter site from the dashboard.
 */
function postfolio_blocks_ajax_import_demo() {
	check_ajax_referer( 'postfolio_blocks_demo_nonce', 'security' );

	if ( ! current_user_can( 'manage_options' ) || ! current_user_can( 'edit_theme_options' ) ) {
		wp_send_json_error( array( 'message' => __( 'You are not allowed to import starter sites.', 'postfolio-blocks' ) ), 403 );
	}

	$slug        = isset( $_POST['demo_slug'] ) ? sanitize_key( wp_unslash( $_POST['demo_slug'] ) ) : '';
	$apply_style = ! empty( $_POST['apply_style'] );
	$result      = postfolio_blocks_import_starter_site( $slug, $apply_style );

	if ( is_wp_error( $result ) ) {
		wp_send_json_error( array( 'message' => $result->get_error_message() ) );
	}

	$page_count = (int) $result['pages'];
	$message    = sprintf(
		/* translators: %d: number of pages created or updated. */
		_n( 'Starter site imported: %d page created or updated.', 'Starter site imported: %d pages created or updated.', $page_count, 'postfolio-blocks' ),
		$page_count
	);

	if ( $result['style_applied'] ) {
		$message .= ' ' . __( 'The matching style variation was applied.', 'postfolio-blocks' );
	}

	wp_send_json_success(
		array(
			'message' => $message,
			'url'     => home_url( '/' ),
		)
	);
}
add_action( 'wp_ajax_postfolio_blocks_import_demo', 'postfolio_blocks_ajax_import_demo' );

/**
 * Let a static front page use the custom template assigned to it
 * (for example "Home 2" or "Landing Page") instead of front-page.html.
 *
 * @param string[] $templates Front page template candidates.
 * @return string[]
 */
function postfolio_blocks_front_page_template_hierarchy( $templates ) {
	if ( 'page' === get_option( 'show_on_front' ) ) {
		$front_id = (int) get_option( 'page_on_front' );

		if ( $front_id && get_page_template_slug( $front_id ) ) {
			return array();
		}
	}

	return $templates;
}
add_filter( 'frontpage_template_hierarchy', 'postfolio_blocks_front_page_template_hierarchy' );
