<?php
/**
 * Title: Reading-focused post
 * Slug: postfolio-blocks/template-single-reading
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Description: A distraction-free single post with table of contents, share buttons, related posts and comments.
 * Template Types: single
 * Viewport Width: 1400
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
<main class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:template-part {"slug":"post-meta","tagName":"div"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"21/9","align":"wide","style":{"border":{"radius":"1.25rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:pattern {"slug":"postfolio-blocks/table-of-contents"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/post-footer"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/related-posts"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"comments","tagName":"section"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
