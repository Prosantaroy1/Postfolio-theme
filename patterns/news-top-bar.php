<?php
/**
 * Title: News top bar: date, trending and dark mode
 * Slug: postfolio-blocks/news-top-bar
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: top bar, date, trending, topics, utility bar
 * Description: A slim bar above the header with today's date (always current), trending tags, social links and a light/dark switch (works when the Dark mode module is on).
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-top-bar","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-top-bar has-base-2-background-color has-background has-small-font-size" style="padding-top:0.5rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:0.5rem;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"postfolio-top-bar__left","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-top-bar__left"><!-- wp:paragraph {"className":"postfolio-top-bar__date","metadata":{"bindings":{"content":{"source":"postfolio-blocks/today"}}}} -->
<p class="postfolio-top-bar__date"><?php esc_html_e( 'Today’s date', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"postfolio-top-bar__trending","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-top-bar__trending"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent"} -->
<p class="postfolio-kicker has-accent-color has-text-color"><?php esc_html_e( 'Trending', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"numberOfTags":5,"smallestFontSize":"0.8125rem","largestFontSize":"0.8125rem","className":"postfolio-trending-tags"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"currentColor","size":"has-small-icon-size","className":"is-style-logos-only postfolio-top-bar__social","style":{"spacing":{"blockGap":{"left":"0.75rem"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only postfolio-top-bar__social"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-theme-toggle postfolio-top-bar__toggle","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-theme-toggle postfolio-top-bar__toggle has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Dark mode', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
