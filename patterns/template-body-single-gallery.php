<?php
/**
 * Title: Template: single gallery post
 * Slug: postfolio-blocks/template-body-single-gallery
 * Categories: postfolio-blocks-pages
 * Description: Content of the single-format-gallery.html template: centered header and a wide, image-first layout where galleries and images span the wide width.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","className":"postfolio-format-gallery","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull postfolio-format-gallery"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"1rem"}},"className":"postfolio-post-header","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-post-header" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-format-badge"} -->
<p class="postfolio-format-badge"><?php esc_html_e( 'Photo story', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"huge"} /-->

<!-- wp:post-excerpt {"textAlign":"center","textColor":"contrast-2","fontSize":"large"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"full","layout":{"type":"constrained","contentSize":"760px"}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:pattern {"slug":"postfolio-blocks/post-footer"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/related-posts"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"comments","tagName":"section","className":"postfolio-comments-area"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
