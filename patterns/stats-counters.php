<?php
/**
 * Title: Stats
 * Slug: postfolio-blocks/stats-counters
 * Categories: postfolio-blocks, postfolio-blocks-showcase
 * Keywords: stats, numbers, counters, metrics
 * Description: Four big numbers with short labels on a dark band.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"postfolio-stat-number","style":{"typography":{"fontSize":"clamp(2.5rem, 2rem + 2vw, 3.5rem)","fontWeight":"800"}}} -->
<p class="postfolio-stat-number" style="font-size:clamp(2.5rem, 2rem + 2vw, 3.5rem);font-weight:800">12+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><?php esc_html_e( 'Years of experience', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"postfolio-stat-number","style":{"typography":{"fontSize":"clamp(2.5rem, 2rem + 2vw, 3.5rem)","fontWeight":"800"}}} -->
<p class="postfolio-stat-number" style="font-size:clamp(2.5rem, 2rem + 2vw, 3.5rem);font-weight:800">340</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><?php esc_html_e( 'Projects delivered', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"postfolio-stat-number","style":{"typography":{"fontSize":"clamp(2.5rem, 2rem + 2vw, 3.5rem)","fontWeight":"800"}}} -->
<p class="postfolio-stat-number" style="font-size:clamp(2.5rem, 2rem + 2vw, 3.5rem);font-weight:800">98%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><?php esc_html_e( 'Happy clients', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"postfolio-stat-number","style":{"typography":{"fontSize":"clamp(2.5rem, 2rem + 2vw, 3.5rem)","fontWeight":"800"}}} -->
<p class="postfolio-stat-number" style="font-size:clamp(2.5rem, 2rem + 2vw, 3.5rem);font-weight:800">24</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><?php esc_html_e( 'Design awards', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
