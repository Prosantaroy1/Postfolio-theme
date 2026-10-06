<?php
/**
 * Blog features built on core blocks: related posts, popular posts,
 * share buttons and an automatic table of contents.
 *
 * Each feature is switched on by a CSS class on a core block, so the
 * markup stays standard and keeps working if the theme is changed.
 *
 * - Query Loop with class `postfolio-related-posts`  → posts from the same categories.
 * - Query Loop with class `postfolio-popular-posts`  → most commented posts.
 * - Social Icons with class `postfolio-share`         → share links for the current post.
 * - Group with class `postfolio-toc`                  → table of contents of the post headings.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Whether a parsed block carries a CSS class.
 *
 * @param array  $parsed_block Parsed block.
 * @param string $class_name   Class to look for.
 * @return bool
 */
function postfolio_blocks_block_has_class( $parsed_block, $class_name ) {
	if ( empty( $parsed_block['attrs']['className'] ) ) {
		return false;
	}

	return in_array( $class_name, preg_split( '/\s+/', $parsed_block['attrs']['className'] ), true );
}

/**
 * Tag related/popular Query Loops and fill share links before they render.
 *
 * @param array $parsed_block The block being rendered.
 * @return array
 */
function postfolio_blocks_render_block_data( $parsed_block ) {
	$name = isset( $parsed_block['blockName'] ) ? $parsed_block['blockName'] : '';

	if ( 'core/query' === $name ) {
		if ( postfolio_blocks_block_has_class( $parsed_block, 'postfolio-related-posts' ) ) {
			$parsed_block['attrs']['query']['inherit']       = false;
			$parsed_block['attrs']['query']['postfolioMode'] = 'related';
		} elseif ( postfolio_blocks_block_has_class( $parsed_block, 'postfolio-popular-posts' ) ) {
			$parsed_block['attrs']['query']['inherit']       = false;
			$parsed_block['attrs']['query']['postfolioMode'] = 'popular';
		}
	}

	if ( 'core/social-links' === $name && postfolio_blocks_block_has_class( $parsed_block, 'postfolio-share' ) && ! empty( $parsed_block['innerBlocks'] ) ) {
		$parsed_block = postfolio_blocks_fill_share_links( $parsed_block );
	}

	return $parsed_block;
}
add_filter( 'render_block_data', 'postfolio_blocks_render_block_data' );

/**
 * Adjust the WP_Query arguments of tagged Query Loops.
 *
 * @param array    $query Query vars.
 * @param WP_Block $block The post template block.
 * @return array
 */
function postfolio_blocks_query_loop_vars( $query, $block ) {
	$mode = isset( $block->context['query']['postfolioMode'] ) ? $block->context['query']['postfolioMode'] : '';

	if ( 'related' === $mode ) {
		$post_id = get_queried_object_id();

		if ( $post_id ) {
			$query['post__not_in']        = array_merge( isset( $query['post__not_in'] ) ? (array) $query['post__not_in'] : array(), array( $post_id ) );
			$query['ignore_sticky_posts'] = true;

			$categories = wp_get_post_categories( $post_id );
			if ( $categories ) {
				$query['category__in'] = $categories;
			}
		}
	} elseif ( 'popular' === $mode ) {
		$query['orderby']             = 'comment_count';
		$query['order']               = 'DESC';
		$query['ignore_sticky_posts'] = true;

		if ( is_singular() ) {
			$query['post__not_in'] = array_merge( isset( $query['post__not_in'] ) ? (array) $query['post__not_in'] : array(), array( get_queried_object_id() ) );
		}
	}

	return $query;
}
add_filter( 'query_loop_block_query_vars', 'postfolio_blocks_query_loop_vars', 10, 2 );

/**
 * Point each Social Icon inside a `postfolio-share` block at a share URL for
 * the current post. Services without a share endpoint are removed.
 *
 * @param array $parsed_block Social Icons block.
 * @return array
 */
function postfolio_blocks_fill_share_links( $parsed_block ) {
	$post = get_post();

	if ( ! $post ) {
		return $parsed_block;
	}

	$url   = rawurlencode( get_permalink( $post ) );
	$title = rawurlencode( wp_strip_all_tags( get_the_title( $post ) ) );

	$endpoints = array(
		'facebook'  => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
		'x'         => 'https://x.com/intent/post?url=' . $url . '&text=' . $title,
		'twitter'   => 'https://x.com/intent/post?url=' . $url . '&text=' . $title,
		'linkedin'  => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $url,
		'pinterest' => 'https://pinterest.com/pin/create/button/?url=' . $url . '&description=' . $title,
		'reddit'    => 'https://www.reddit.com/submit?url=' . $url . '&title=' . $title,
		'whatsapp'  => 'https://api.whatsapp.com/send?text=' . $title . '%20' . $url,
		'telegram'  => 'https://t.me/share/url?url=' . $url . '&text=' . $title,
		'mail'      => 'mailto:?subject=' . $title . '&body=' . $url,
	);

	$inner = array();
	foreach ( $parsed_block['innerBlocks'] as $child ) {
		$service = isset( $child['attrs']['service'] ) ? $child['attrs']['service'] : '';

		if ( 'core/social-link' !== $child['blockName'] || ! isset( $endpoints[ $service ] ) ) {
			continue;
		}

		$child['attrs']['url'] = $endpoints[ $service ];
		$inner[]               = $child;
	}

	$parsed_block['innerBlocks'] = $inner;

	// Keep innerContent in step with innerBlocks (one null placeholder per child).
	$parsed_block['innerContent'] = array_merge(
		array( isset( $parsed_block['innerContent'][0] ) ? $parsed_block['innerContent'][0] : '' ),
		array_fill( 0, count( $inner ), null ),
		array( end( $parsed_block['innerContent'] ) )
	);

	$parsed_block['attrs']['openInNewTab'] = true;

	return $parsed_block;
}

/**
 * Load the table-of-contents script only on pages that use the TOC block.
 *
 * @param string $block_content Rendered block.
 * @param array  $block         Parsed block.
 * @return string
 */
function postfolio_blocks_maybe_enqueue_toc( $block_content, $block ) {
	if ( postfolio_blocks_block_has_class( $block, 'postfolio-toc' ) ) {
		wp_enqueue_script(
			'postfolio-blocks-toc',
			get_theme_file_uri( 'assets/js/toc.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}

	return $block_content;
}
add_filter( 'render_block_core/group', 'postfolio_blocks_maybe_enqueue_toc', 10, 2 );
