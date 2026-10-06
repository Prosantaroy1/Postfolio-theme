<?php
/**
 * Title: Share buttons
 * Slug: postfolio-blocks/share-buttons
 * Categories: postfolio-blocks, postfolio-blocks-blog
 * Keywords: share, social, sharing
 * Description: Share links for the current post. Every icon automatically points to the right share URL.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"className":"postfolio-share-row","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-share-row"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php esc_html_e( 'Share this post', 'postfolio-blocks' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","className":"postfolio-share"} -->
<ul class="wp-block-social-links has-normal-icon-size postfolio-share"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://www.pinterest.com/","service":"pinterest"} /-->

<!-- wp:social-link {"url":"https://www.reddit.com/","service":"reddit"} /-->

<!-- wp:social-link {"url":"https://www.whatsapp.com/","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"https://telegram.org/","service":"telegram"} /-->

<!-- wp:social-link {"url":"mailto:hello@example.com","service":"mail"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
