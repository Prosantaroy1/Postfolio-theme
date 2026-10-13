<?php
/**
 * Title: Post meta header
 * Slug: postfolio-blocks/post-meta
 * Categories: postfolio-blocks-blog
 * Description: Category pills, post title, author, date and reading time. Used by the Post Meta template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"className":"postfolio-post-header","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group postfolio-post-header"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"is-style-pill"} /-->

<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"huge"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-meta-row"><!-- wp:avatar {"size":32,"style":{"border":{"radius":"999px"}}} /-->

<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-date {"fontSize":"small","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-time-to-read {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
