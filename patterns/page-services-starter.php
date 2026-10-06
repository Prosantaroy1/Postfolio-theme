<?php
/**
 * Title: Page: services
 * Slug: postfolio-blocks/page-services-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Keywords: services, agency, what we do
 * Description: A services page with an intro, service cards, process steps, pricing and a call to action.
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"postfolio-badge"} -->
<p class="has-text-align-center postfolio-badge"><?php esc_html_e( 'Services', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Everything you need to launch and grow.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'From the first workshop to the hundredth release, we help you make decisions with confidence.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/services-grid"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/process-steps"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/pricing-table-cards"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-split-image"} /-->
