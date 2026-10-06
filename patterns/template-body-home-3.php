<?php
/**
 * Title: Template: home-3
 * Slug: postfolio-blocks/template-body-home-3
 * Categories: postfolio-blocks-pages
 * Description: Content of the home-3.html template.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:paragraph {"align":"center","className":"postfolio-badge"} -->
<p class="has-text-align-center postfolio-badge"><?php esc_html_e( 'Home 3 · Editorial', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'A quieter, list-first way to read.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'No hero photo, no noise — just the reading list, freshly sorted.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/post-list-editorial"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-newsletter"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
