<?php
/**
 * Title: Template: single video post
 * Slug: postfolio-blocks/template-body-single-video
 * Categories: postfolio-blocks-pages
 * Description: Content of the single-format-video.html template: a dark "theater" area with the title and a wide video, then the usual post footer, related posts and comments.
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
<main class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-section-dark postfolio-format-video","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull is-style-section-dark postfolio-format-video" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"postfolio-post-header","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-post-header"><!-- wp:paragraph {"className":"postfolio-format-badge"} -->
<p class="postfolio-format-badge"><?php esc_html_e( 'Watch', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"huge"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date /-->

<!-- wp:post-author-name /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:pattern {"slug":"postfolio-blocks/post-footer"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/related-posts"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"comments","tagName":"section","className":"postfolio-comments-area"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
