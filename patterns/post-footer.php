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

<!-- wp:group {"className":"postfolio-share-row","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"1rem"},"border":{"radius":"1.25rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-share-row has-border-color" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.25rem;padding-top:1.25rem;padding-right:var(--wp--preset--spacing--30);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><?php esc_html_e( 'Share this post', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","className":"postfolio-share","style":{"spacing":{"blockGap":{"left":"0.6rem"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size postfolio-share"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://www.pinterest.com/","service":"pinterest"} /-->

<!-- wp:social-link {"url":"https://www.reddit.com/","service":"reddit"} /-->

<!-- wp:social-link {"url":"https://www.whatsapp.com/","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-author-box","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"1.5rem"},"border":{"radius":"1.25rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group postfolio-author-box has-border-color" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.25rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:avatar {"size":72,"className":"postfolio-author-ring","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"className":"postfolio-author-name","fontSize":"large"} /-->

<!-- wp:post-author-biography {"className":"postfolio-author-bio","textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
