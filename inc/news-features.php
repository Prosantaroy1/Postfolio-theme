<?php
/**
 * News, archive and portfolio helpers.
 *
 * - Post formats (video, gallery, quote, audio) with their own single templates.
 * - "Work" category posts use the Case Study template.
 * - Category archives: a lead story + grid scoped to the current term, and a
 *   sub-category list.
 * - Author archives: avatar, bio, stats and social links for the hero.
 * - A "today's date" Block Bindings source for the top bar.
 * - The breaking news ticker script, loaded only when a ticker is on the page.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Post formats that have their own single template.
 *
 * @return string[]
 */
function postfolio_blocks_supported_formats() {
	return array( 'video', 'gallery', 'quote', 'audio' );
}

/**
 * Enable post formats.
 */
function postfolio_blocks_post_formats_support() {
	add_theme_support( 'post-formats', postfolio_blocks_supported_formats() );
}
add_action( 'after_setup_theme', 'postfolio_blocks_post_formats_support' );

/**
 * Pick a single template by post format, or the Case Study template for
 * posts in the "Work" category. A template chosen in the editor still wins,
 * because WordPress checks the assigned custom template first.
 *
 * @param string[] $templates Template candidates.
 * @return string[]
 */
function postfolio_blocks_single_template_hierarchy( $templates ) {
	$post = get_queried_object();

	if ( ! $post instanceof WP_Post || 'post' !== $post->post_type ) {
		return $templates;
	}

	$extra = array();

	if ( has_category( 'work', $post ) ) {
		$extra[] = 'single-case-study';
	}

	$format = get_post_format( $post );
	if ( $format && in_array( $format, postfolio_blocks_supported_formats(), true ) ) {
		$extra[] = 'single-format-' . $format;
	}

	return array_merge( $extra, $templates );
}
add_filter( 'single_template_hierarchy', 'postfolio_blocks_single_template_hierarchy' );

/**
 * Body classes for format and case study layouts.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function postfolio_blocks_news_body_class( $classes ) {
	if ( is_singular( 'post' ) && has_category( 'work' ) ) {
		$classes[] = 'postfolio-is-case-study';
	}
	return $classes;
}
add_filter( 'body_class', 'postfolio_blocks_news_body_class' );

/**
 * Today's date for block bindings, e.g. a paragraph in the top bar:
 * {"metadata":{"bindings":{"content":{"source":"postfolio-blocks/today"}}}}
 */
function postfolio_blocks_register_binding_sources() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'postfolio-blocks/today',
		array(
			'label'              => __( 'Today’s date', 'postfolio-blocks' ),
			'get_value_callback' => function () {
				return esc_html( wp_date( _x( 'l, F j, Y', 'top bar date format', 'postfolio-blocks' ) ) );
			},
		)
	);
}
add_action( 'init', 'postfolio_blocks_register_binding_sources' );

/**
 * Category archive: list the child categories of the current category (or
 * its siblings when it has none) in a block with the "postfolio-subcategories"
 * class. Renders nothing when there is nothing to list.
 *
 * @param string $block_content Rendered block.
 * @param array  $block         Parsed block.
 * @return string
 */
function postfolio_blocks_render_subcategories( $block_content, $block ) {
	if ( ! postfolio_blocks_block_has_class( $block, 'postfolio-subcategories' ) ) {
		return $block_content;
	}

	$term = get_queried_object();
	if ( ! $term instanceof WP_Term || 'category' !== $term->taxonomy ) {
		return '';
	}

	$terms = get_terms(
		array(
			'taxonomy'   => 'category',
			'parent'     => $term->term_id,
			'hide_empty' => true,
		)
	);

	if ( empty( $terms ) || is_wp_error( $terms ) ) {
		$terms = $term->parent ? get_terms(
			array(
				'taxonomy'   => 'category',
				'parent'     => $term->parent,
				'hide_empty' => true,
				'exclude'    => array( $term->term_id ),
			)
		) : array();
	}

	if ( empty( $terms ) || is_wp_error( $terms ) ) {
		return '';
	}

	$items = '';
	foreach ( $terms as $child ) {
		$items .= sprintf(
			'<li><a href="%1$s">%2$s <span>%3$s</span></a></li>',
			esc_url( get_term_link( $child ) ),
			esc_html( $child->name ),
			esc_html( number_format_i18n( $child->count ) )
		);
	}

	return sprintf(
		'<nav class="postfolio-subcategories" aria-label="%1$s"><span class="postfolio-kicker">%2$s</span><ul>%3$s</ul></nav>',
		esc_attr__( 'Sub-categories', 'postfolio-blocks' ),
		esc_html__( 'Explore', 'postfolio-blocks' ),
		$items
	);
}
add_filter( 'render_block_core/categories', 'postfolio_blocks_render_subcategories', 10, 2 );

/**
 * Author archive: show the queried author in an Avatar block with the
 * "postfolio-author-hero-avatar" class.
 *
 * @param array $parsed_block Block being rendered.
 * @return array
 */
function postfolio_blocks_author_hero_avatar( $parsed_block ) {
	if ( 'core/avatar' === $parsed_block['blockName'] && is_author() && postfolio_blocks_block_has_class( $parsed_block, 'postfolio-author-hero-avatar' ) ) {
		$parsed_block['attrs']['userId'] = (int) get_queried_object_id();
	}
	return $parsed_block;
}
add_filter( 'render_block_data', 'postfolio_blocks_author_hero_avatar' );

/**
 * Author archive: fill paragraphs with the "postfolio-author-hero-bio" and
 * "postfolio-author-hero-stats" classes, and Social Icons with the
 * "postfolio-author-social" class, from the queried author's profile.
 *
 * @param string $block_content Rendered block.
 * @param array  $block         Parsed block.
 * @return string
 */
function postfolio_blocks_author_hero_content( $block_content, $block ) {
	if ( ! is_author() ) {
		return $block_content;
	}

	$author_id = (int) get_queried_object_id();

	if ( 'core/paragraph' === $block['blockName'] && postfolio_blocks_block_has_class( $block, 'postfolio-author-hero-bio' ) ) {
		$bio = get_the_author_meta( 'description', $author_id );
		if ( ! $bio ) {
			/* translators: %s: site name. */
			$bio = sprintf( __( 'Writer and contributor at %s.', 'postfolio-blocks' ), get_bloginfo( 'name' ) );
		}
		return preg_replace( '#(<p[^>]*>).*?(</p>)#s', '$1' . esc_html( $bio ) . '$2', $block_content, 1 );
	}

	if ( 'core/paragraph' === $block['blockName'] && postfolio_blocks_block_has_class( $block, 'postfolio-author-hero-stats' ) ) {
		$posts    = (int) count_user_posts( $author_id, 'post', true );
		$comments = (int) get_comments(
			array(
				'post_author' => $author_id,
				'status'      => 'approve',
				'count'       => true,
			)
		);
		$since    = wp_date( 'Y', strtotime( get_the_author_meta( 'user_registered', $author_id ) ) );
		$stats    = sprintf(
			'<span><strong>%1$s</strong> %2$s</span><span><strong>%3$s</strong> %4$s</span><span>%5$s</span>',
			esc_html( number_format_i18n( $posts ) ),
			esc_html( _n( 'article', 'articles', $posts, 'postfolio-blocks' ) ),
			esc_html( number_format_i18n( $comments ) ),
			esc_html( _n( 'reader comment', 'reader comments', $comments, 'postfolio-blocks' ) ),
			/* translators: %s: year the author joined. */
			esc_html( sprintf( __( 'Writing since %s', 'postfolio-blocks' ), $since ) )
		);
		return preg_replace( '#(<p[^>]*>).*?(</p>)#s', '$1' . $stats . '$2', $block_content, 1 );
	}

	if ( 'core/social-links' === $block['blockName'] && postfolio_blocks_block_has_class( $block, 'postfolio-author-social' ) ) {
		// Profile fields used by WordPress core and the common SEO plugins.
		$services = array(
			'x'         => 'twitter',
			'facebook'  => 'facebook',
			'instagram' => 'instagram',
			'linkedin'  => 'linkedin',
			'youtube'   => 'youtube',
			'chain'     => 'user_url',
		);
		$items    = '';

		foreach ( $services as $service => $meta_key ) {
			$value = trim( (string) get_the_author_meta( $meta_key, $author_id ) );
			if ( '' === $value ) {
				continue;
			}
			if ( 'twitter' === $meta_key && ! preg_match( '#^https?://#', $value ) ) {
				$value = 'https://x.com/' . ltrim( $value, '@' );
			}

			$items .= render_block(
				array(
					'blockName'    => 'core/social-link',
					'attrs'        => array(
						'service' => $service,
						'url'     => $value,
					),
					'innerBlocks'  => array(),
					'innerHTML'    => '',
					'innerContent' => array(),
				)
			);
		}

		if ( '' === $items ) {
			return '';
		}

		return preg_replace( '#(<ul[^>]*>).*(</ul>)#s', '$1' . $items . '$2', $block_content, 1 );
	}

	return $block_content;
}
add_filter( 'render_block', 'postfolio_blocks_author_hero_content', 10, 2 );

/**
 * Load the ticker script only on pages that show a breaking news ticker.
 *
 * @param string $block_content Rendered block.
 * @param array  $block         Parsed block.
 * @return string
 */
function postfolio_blocks_maybe_enqueue_ticker( $block_content, $block ) {
	if ( postfolio_blocks_block_has_class( $block, 'postfolio-ticker' ) && ! wp_script_is( 'postfolio-blocks-ticker' ) ) {
		wp_enqueue_script(
			'postfolio-blocks-ticker',
			get_theme_file_uri( 'assets/js/ticker.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
		wp_add_inline_script(
			'postfolio-blocks-ticker',
			'window.postfolioTicker = ' . wp_json_encode(
				array(
					'pause' => __( 'Pause headlines', 'postfolio-blocks' ),
					'play'  => __( 'Play headlines', 'postfolio-blocks' ),
				)
			) . ';',
			'before'
		);
	}
	return $block_content;
}
add_filter( 'render_block_core/group', 'postfolio_blocks_maybe_enqueue_ticker', 10, 2 );

/**
 * Markup for the case study body (facts, challenge, process, result, impact).
 *
 * Used by the "Case study" pattern and by the portfolio demo projects, which
 * pass their own client, copy and numbers.
 *
 * @param array<string, mixed> $data Values to override the sample content.
 * @return string
 */
function postfolio_blocks_case_study_markup( $data = array() ) {
	$d = wp_parse_args(
		$data,
		array(
			'facts'          => array(
				array( __( 'Client', 'postfolio-blocks' ), __( 'Northwind Coffee Co.', 'postfolio-blocks' ) ),
				array( __( 'Year', 'postfolio-blocks' ), '2026' ),
				array( __( 'Role', 'postfolio-blocks' ), __( 'Brand & web design', 'postfolio-blocks' ) ),
				array( __( 'Timeline', 'postfolio-blocks' ), __( '10 weeks', 'postfolio-blocks' ) ),
			),
			'challenge_lead' => __( 'A much-loved local roaster had outgrown its look. Online sales were flat, the website was slow on phones, and the brand felt different on every bag, shelf and screen.', 'postfolio-blocks' ),
			'challenge'      => __( 'The goal: one clear identity, a site that sells as well as the shop does, and tools the team could use without calling an agency every week.', 'postfolio-blocks' ),
			'steps'          => array(
				array( '01', __( 'Discover', 'postfolio-blocks' ), __( 'Workshops with the team, customer interviews and a review of every touchpoint, from packaging to checkout.', 'postfolio-blocks' ) ),
				array( '02', __( 'Design', 'postfolio-blocks' ), __( 'A flexible identity and a component library, tested with real customers every two weeks.', 'postfolio-blocks' ) ),
				array( '03', __( 'Deliver', 'postfolio-blocks' ), __( 'A fast new site, launch assets and a guide so the in-house team can keep everything consistent.', 'postfolio-blocks' ) ),
			),
			'image'          => 'design-studio.jpg',
			'image_alt'      => __( 'Colour swatches and design tools from the project', 'postfolio-blocks' ),
			'result'         => __( 'The new identity rolled out across packaging, the shop and the website in a single week. Customers noticed straight away — and so did the numbers.', 'postfolio-blocks' ),
			'quote'          => __( 'It finally feels like us, everywhere. Our team can launch a new product page in an afternoon.', 'postfolio-blocks' ),
			'cite'           => __( 'Sara Lind, Founder', 'postfolio-blocks' ),
			'metrics'        => array(
				array( '+140%', __( 'online orders in the first quarter', 'postfolio-blocks' ) ),
				array( '2.1s', __( 'faster average page load', 'postfolio-blocks' ) ),
				array( '4.9★', __( 'average rating from new customers', 'postfolio-blocks' ) ),
			),
		)
	);

	ob_start();
	include get_theme_file_path( 'inc/partials/case-study.php' );
	return (string) ob_get_clean();
}
