<?php
/**
 * Title: Ad slot: Medium rectangle 300×250
 * Slug: postfolio-blocks/ad-slot-rectangle
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: ad, advert, sidebar, rectangle, mpu, 300x250, adsense
 * Description: A 300×250 ad slot for sidebars and between sections. The space is reserved before the ad loads. Replace the placeholder with a Custom HTML block holding your ad code.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"tagName":"aside","className":"postfolio-ad postfolio-ad--rectangle","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<aside class="wp-block-group postfolio-ad postfolio-ad--rectangle"><!-- wp:paragraph {"className":"postfolio-ad__label"} -->
<p class="postfolio-ad__label"><?php esc_html_e( 'Advertisement', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"postfolio-ad__slot","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-ad__slot"><!-- wp:paragraph {"align":"center","className":"postfolio-ad__size"} -->
<p class="has-text-align-center postfolio-ad__size"><?php esc_html_e( '300 × 250 — replace with your ad code', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
