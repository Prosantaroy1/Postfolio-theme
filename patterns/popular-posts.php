<?php
/**
 * Title: Popular posts list
 * Slug: postfolio-blocks/popular-posts
 * Categories: postfolio-blocks, postfolio-blocks-blog, query
 * Keywords: popular, trending, most commented
 * Description: A compact list of the most-commented posts with thumbnails — great for sidebars.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Popular right now', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"postfolio-popular-posts"} -->
<div class="wp-block-query postfolio-popular-posts"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1rem"}}} -->
<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"0.85rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"72px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"72px","height":"72px","style":{"border":{"radius":"0.75rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0.25rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"1rem","lineHeight":"1.35"}}} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'No posts yet.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
