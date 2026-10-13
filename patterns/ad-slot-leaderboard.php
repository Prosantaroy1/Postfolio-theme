<?php
/**
 * Title: Ad slot: Leaderboard 728×90
 * Slug: postfolio-blocks/ad-slot-leaderboard
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: ad, advert, banner, leaderboard, 728x90, adsense
 * Description: A centered 728×90 ad slot (320×100 on phones). The space is reserved before the ad loads, so the page does not jump. Replace the placeholder with a Custom HTML block holding your ad code.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"tagName":"aside","align":"wide","className":"postfolio-ad postfolio-ad--leaderboard","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0.35rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<aside class="wp-block-group alignwide postfolio-ad postfolio-ad--leaderboard" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-ad__label"} -->
<p class="postfolio-ad__label"><?php esc_html_e( 'Advertisement', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"postfolio-ad__slot","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-ad__slot"><!-- wp:paragraph {"align":"center","className":"postfolio-ad__size"} -->
<p class="has-text-align-center postfolio-ad__size"><?php esc_html_e( '728 × 90 — replace with your ad code', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
