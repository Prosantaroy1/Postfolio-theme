<?php
/**
 * Title: Template: single quote post
 * Slug: postfolio-blocks/template-body-single-quote
 * Categories: postfolio-blocks-pages
 * Description: Content of the single-format-quote.html template: the quote is the hero — large, centered type on a soft panel, with the title and byline underneath.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"postfolio-format-quote","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull postfolio-format-quote has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","className":"postfolio-format-badge"} -->
<p class="has-text-align-center postfolio-format-badge"><?php esc_html_e( 'Quote', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"postfolio-post-header","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-post-header"><!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"large"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"textColor":"contrast-2","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-meta-row has-contrast-2-color has-text-color has-small-font-size"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:pattern {"slug":"postfolio-blocks/post-footer"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"comments","tagName":"section","className":"postfolio-comments-area"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
