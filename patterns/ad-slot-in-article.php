<?php
/**
 * Title: Ad slot: In-article
 * Slug: postfolio-blocks/ad-slot-in-article
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: ad, advert, in-article, in-content, native, adsense
 * Description: A fluid ad slot to drop between paragraphs of a post, clearly labelled and separated from the story. Replace the placeholder with a Custom HTML block holding your ad code.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"tagName":"aside","className":"postfolio-ad postfolio-ad--in-article","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0.35rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<aside class="wp-block-group postfolio-ad postfolio-ad--in-article" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-ad__label"} -->
<p class="postfolio-ad__label"><?php esc_html_e( 'Advertisement · Story continues below', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"postfolio-ad__slot","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-ad__slot"><!-- wp:paragraph {"align":"center","className":"postfolio-ad__size"} -->
<p class="has-text-align-center postfolio-ad__size"><?php esc_html_e( 'Fluid in-article ad — replace with your ad code', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
