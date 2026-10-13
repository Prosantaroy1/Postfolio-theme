<?php
/**
 * Title: Page: Magazine home
 * Slug: postfolio-blocks/page-magazine-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages, postfolio-blocks-posts
 * Keywords: magazine, news, homepage, spotlight, editor's picks
 * Description: A complete magazine homepage: masthead with topic links, spotlight story with top stories, latest stories, a dark editor's picks section, topic columns and a newsletter call to action. Topic sections show the demo categories when they exist and the latest posts otherwise.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_query_id = 20;

/**
 * Build the "taxQuery" fragment for a demo term, or nothing when it is missing.
 */
$postfolio_tax_query = function ( $taxonomy, $slug ) {
	$term_id = postfolio_blocks_demo_term_id( $slug, $taxonomy );
	return $term_id ? ',"taxQuery":{"' . $taxonomy . '":[' . $term_id . ']}' : '';
};

$postfolio_term_link = function ( $slug ) {
	$term = get_term_by( 'slug', $slug, 'category' );
	$link = $term ? get_term_link( $term ) : '';
	return $term && ! is_wp_error( $link ) ? $link : home_url( '/' );
};

$postfolio_topics = postfolio_blocks_demo_categories();
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"64%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:64%"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'The weekly edition', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.4rem, 1.6rem + 3vw, 4.25rem)","lineHeight":"1.02","letterSpacing":"-0.025em"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.4rem, 1.6rem + 3vw, 4.25rem);letter-spacing:-0.025em;line-height:1.02"><?php esc_html_e( 'Stories worth slowing down for.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"36%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:36%"><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Independent reporting on technology, design, travel and culture — written by people who care about getting it right.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"className":"postfolio-topic-pills","style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-buttons postfolio-topic-pills"><?php foreach ( $postfolio_topics as $postfolio_slug => $postfolio_topic ) : ?><!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $postfolio_term_link( $postfolio_slug ) ); ?>"><?php echo esc_html( $postfolio_topic[0] ); ?></a></div>
<!-- /wp:button --><?php endforeach; ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":100,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 30%,rgba(0,0,0,0.82) 100%)","minHeight":540,"contentPosition":"bottom left","className":"postfolio-spotlight-primary","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left postfolio-spotlight-primary" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 30%,rgba(0,0,0,0.82) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"postfolio-badge-accent"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"clamp(1.8rem, 1.3rem + 1.8vw, 2.9rem)","lineHeight":"1.08"}}} /-->

<!-- wp:post-excerpt {"excerptLength":24,"textColor":"base","className":"postfolio-spotlight-excerpt"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"textColor":"base","fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-base-color has-text-color has-small-font-size"><!-- wp:post-author-name /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"className":"postfolio-kicker","fontSize":"small"} -->
<p class="postfolio-kicker has-small-font-size"><?php esc_html_e( 'Top stories', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-row-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group postfolio-row-item" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:post-featured-image {"isLink":true,"width":"104px","height":"78px","style":{"border":{"radius":"0.6rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium","style":{"typography":{"lineHeight":"1.3"}}} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.75rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-bottom:0.75rem"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Latest stories', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'blog' ) ); ?>"><?php esc_html_e( 'All stories →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":3,"pages":0,"offset":5,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"postfolio-story-card","style":{"spacing":{"blockGap":"0.7rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"1rem"}}} /-->

<!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large","style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"textColor":"contrast-2"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"999px"}}} /-->

<!-- wp:post-author-name /-->

<!-- wp:post-date {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.75rem"}},"border":{"bottom":{"color":"var:preset|color|contrast-2","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-2);border-bottom-width:1px;padding-bottom:0.75rem"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Editor’s picks', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-muted","fontSize":"small"} -->
<p class="postfolio-muted has-small-font-size"><?php esc_html_e( 'Hand-picked reads from this week', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_tax_query( 'post_tag', 'editors-pick' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-story-card","style":{"spacing":{"blockGap":"0.9rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"1rem"}}} /-->

<!-- wp:post-terms {"term":"category","className":"postfolio-badge-accent"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"huge","style":{"typography":{"lineHeight":"1.1"}}} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"postfolio-muted"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_tax_query( 'post_tag', 'editors-pick' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-dark-row","style":{"spacing":{"padding":{"bottom":"1.25rem"},"margin":{"bottom":"1.25rem"},"blockGap":"1.1rem"},"border":{"bottom":{"color":"var:preset|color|contrast-2","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-dark-row" style="border-bottom-color:var(--wp--preset--color--contrast-2);border-bottom-width:1px;margin-bottom:1.25rem;padding-bottom:1.25rem"><!-- wp:post-featured-image {"isLink":true,"width":"140px","height":"104px","style":{"border":{"radius":"0.75rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"postfolio-kicker postfolio-muted","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"typography":{"lineHeight":"1.25"}}} /-->

<!-- wp:post-date {"className":"postfolio-muted","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><?php foreach ( array_chunk( $postfolio_topics, 3, true ) as $postfolio_row ) : ?><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><?php foreach ( $postfolio_row as $postfolio_slug => $postfolio_topic ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.6rem"},"margin":{"bottom":"1.25rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;margin-bottom:1.25rem;padding-bottom:0.6rem"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_topic[0] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( $postfolio_term_link( $postfolio_slug ) ); ?>"><?php esc_html_e( 'More →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":<?php echo (int) $postfolio_query_id++; ?>,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_tax_query( 'category', $postfolio_slug ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-story-card","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"0.9rem"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"typography":{"lineHeight":"1.25"}}} /-->

<!-- wp:post-excerpt {"excerptLength":16,"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-newsletter"} /-->
