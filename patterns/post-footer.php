<?php
/**
 * Title: Post footer
 * Slug: postfolio-blocks/post-footer
 * Categories: postfolio-blocks-blog
 * Description: Tags, share buttons, author box and previous/next links shown under a post.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","className":"is-style-pill"} /-->

<!-- wp:group {"className":"postfolio-share-row","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-share-row"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php esc_html_e( 'Share this post', 'postfolio-blocks' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","className":"postfolio-share"} -->
<ul class="wp-block-social-links has-normal-icon-size postfolio-share"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://www.whatsapp.com/","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"mailto:hello@example.com","service":"mail"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"1.25rem"},"border":{"radius":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":64,"style":{"border":{"radius":"999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Written by', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-author-biography {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
