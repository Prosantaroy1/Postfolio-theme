<?php
/**
 * Title: Comments
 * Slug: postfolio-blocks/comments
 * Categories: postfolio-blocks-blog
 * Description: Comment list with avatars, pagination and the reply form. Used by the Comments template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:comments {"className":"postfolio-comments"} -->
<div class="wp-block-comments postfolio-comments"><!-- wp:comments-title {"fontSize":"x-large"} /-->

<!-- wp:comment-template -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"1rem"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"44px"} -->
<div class="wp-block-column" style="flex-basis:44px"><!-- wp:avatar {"size":44,"style":{"border":{"radius":"999px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.35rem"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} /-->

<!-- wp:comment-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-reply-link {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->
