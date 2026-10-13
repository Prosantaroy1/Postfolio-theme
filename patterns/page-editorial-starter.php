<?php
/**
 * Title: Page: Editorial news home
 * Slug: postfolio-blocks/page-editorial-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages, postfolio-blocks-posts
 * Keywords: news, editorial, newspaper, homepage, headlines
 * Description: A calm, list-first news homepage: centered masthead with topics, a lead story next to the latest headlines, a story list with a sticky sidebar (most discussed, topics, newsletter) and topic columns.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_tax_query = function ( $slug ) {
	$term_id = postfolio_blocks_demo_term_id( $slug );
	return $term_id ? ',"taxQuery":{"category":[' . $term_id . ']}' : '';
};

$postfolio_term_link = function ( $slug ) {
	$term = get_term_by( 'slug', $slug, 'category' );
	$link = $term ? get_term_link( $term ) : '';
	return $term && ! is_wp_error( $link ) ? $link : home_url( '/' );
};

$postfolio_topics = postfolio_blocks_demo_categories();
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Independent · Daily · Ad-free', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.2rem, 1.5rem + 2.6vw, 3.6rem)","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2.2rem, 1.5rem + 2.6vw, 3.6rem);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'The news that matters, clearly told.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color"><?php esc_html_e( 'Careful reporting on technology, business, culture and the way we live — updated every morning.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","className":"postfolio-topic-nav","fontSize":"small","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<?php foreach ( $postfolio_topics as $postfolio_slug => $postfolio_topic ) : ?><!-- wp:navigation-link {"label":"<?php echo esc_attr( $postfolio_topic[0] ); ?>","url":"<?php echo esc_url( $postfolio_term_link( $postfolio_slug ) ); ?>","kind":"custom"} /-->
<?php endforeach; ?><!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:query {"queryId":60,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-story-card","style":{"spacing":{"blockGap":"0.9rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.5rem"}}} /-->

<!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"clamp(1.7rem, 1.25rem + 1.6vw, 2.6rem)","lineHeight":"1.1"}}} /-->

<!-- wp:post-excerpt {"excerptLength":34,"textColor":"contrast-2","fontSize":"large"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-author-name /-->

<!-- wp:post-date {"textColor":"contrast-2"} /-->

<!-- wp:post-time-to-read {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%","className":"postfolio-headlines"} -->
<div class="wp-block-column postfolio-headlines" style="flex-basis:34%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.6rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-bottom:0.6rem"><!-- wp:paragraph {"className":"postfolio-kicker","fontSize":"small"} -->
<p class="postfolio-kicker has-small-font-size"><?php esc_html_e( 'Latest', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"postfolio-live-dot","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-live-dot has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Updated today', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":61,"query":{"perPage":5,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-headline-item","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"blockGap":"0.35rem"},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-headline-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"typography":{"lineHeight":"1.3"}}} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.6rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-bottom:0.6rem"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'More stories', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'blog' ) ); ?>"><?php esc_html_e( 'All news →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":62,"query":{"perPage":6,"pages":0,"offset":6,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-story-card postfolio-news-row","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"},"blockGap":"1.5rem"},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group postfolio-story-card postfolio-news-row" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1.5rem;padding-bottom:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.45rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large","style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"excerptLength":22,"textColor":"contrast-2"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-author-name /-->

<!-- wp:post-date {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"width":"220px","height":"150px","style":{"border":{"radius":"0.5rem"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"className":"postfolio-sticky-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-sticky-sidebar"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-kicker","style":{"spacing":{"padding":{"bottom":"0.6rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"fontSize":"small"} -->
<p class="postfolio-kicker has-small-font-size" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-bottom:0.6rem"><?php esc_html_e( 'Most discussed', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":63,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"className":"postfolio-popular-posts postfolio-numbered","layout":{"type":"default"}} -->
<div class="wp-block-query postfolio-popular-posts postfolio-numbered"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-numbered-item","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem"},"blockGap":"0.25rem"},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-numbered-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:0.9rem;padding-bottom:0.9rem"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium","style":{"typography":{"lineHeight":"1.35"}}} /-->

<!-- wp:post-comments-link {"textColor":"contrast-2","fontSize":"small","className":"postfolio-comment-count"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"0.75rem"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:0.75rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'The morning briefing', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Five stories, five minutes, every weekday at 7am. Free, and easy to unsubscribe.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Subscribe for free', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-kicker","style":{"spacing":{"padding":{"bottom":"0.6rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"fontSize":"small"} -->
<p class="postfolio-kicker has-small-font-size" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-bottom:0.6rem"><?php esc_html_e( 'Topics', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:categories {"showPostCounts":true,"className":"postfolio-topic-list","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><?php foreach ( array( 'technology', 'business', 'culture' ) as $postfolio_slug ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.6rem"},"margin":{"bottom":"0.5rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;margin-bottom:0.5rem;padding-bottom:0.6rem"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html( $postfolio_topics[ $postfolio_slug ][0] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( $postfolio_term_link( $postfolio_slug ) ); ?>"><?php esc_html_e( 'More →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":<?php echo (int) ( 70 + array_search( $postfolio_slug, array_keys( $postfolio_topics ), true ) ); ?>,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_tax_query( $postfolio_slug ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-row-item","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem"},"blockGap":"0.9rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group postfolio-row-item" style="padding-top:0.9rem;padding-bottom:0.9rem"><!-- wp:post-featured-image {"isLink":true,"width":"88px","height":"66px","style":{"border":{"radius":"0.4rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium","style":{"typography":{"lineHeight":"1.35"}}} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
