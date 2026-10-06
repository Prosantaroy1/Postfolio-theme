<?php
/**
 * Title: Post grid: Editorial list
 * Slug: postfolio-blocks/post-list-editorial
 * Categories: postfolio-blocks, postfolio-blocks-posts, query
 * Description: A dense, magazine-style numbered list of posts with a thumbnail, category, title and excerpt in each row. Used on the Home 3 layout.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'The reading list', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":4,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-row-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-row-item" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"width":"160px","height":"120px","style":{"border":{"radius":"0.85rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"postfolio-badge","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":16,"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
