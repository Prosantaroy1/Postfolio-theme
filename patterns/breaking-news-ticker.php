<?php
/**
 * Title: Breaking news ticker
 * Slug: postfolio-blocks/breaking-news-ticker
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: ticker, marquee, breaking, headlines, news
 * Description: A full-width bar with the latest headlines scrolling like a marquee. Pauses on hover, on keyboard focus and with its pause button; visitors who prefer reduced motion get a static, scrollable list.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-ticker","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull postfolio-ticker has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"className":"postfolio-ticker__label","backgroundColor":"accent","textColor":"base","fontSize":"small"} -->
<p class="postfolio-ticker__label has-base-color has-accent-background-color has-text-color has-background has-small-font-size"><?php esc_html_e( 'Breaking', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":80,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"className":"postfolio-ticker__track","layout":{"type":"default"}} -->
<div class="wp-block-query postfolio-ticker__track"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
