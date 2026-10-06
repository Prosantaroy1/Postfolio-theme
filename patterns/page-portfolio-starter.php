<?php
/**
 * Title: Page: portfolio
 * Slug: postfolio-blocks/page-portfolio-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Keywords: portfolio, work, projects
 * Description: A portfolio page with an intro, project grid, case study, client logos and a call to action.
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"postfolio-badge"} -->
<p class="has-text-align-center postfolio-badge"><?php esc_html_e( 'Portfolio', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Work that speaks for itself.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'A selection of projects for startups, studios and established brands.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/portfolio-grid"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/portfolio-case-study"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/logo-cloud"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/testimonial-spotlight"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-split-image"} /-->
