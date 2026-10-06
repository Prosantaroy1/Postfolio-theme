<?php
/**
 * Title: Timeline
 * Slug: postfolio-blocks/timeline
 * Categories: postfolio-blocks, postfolio-blocks-showcase, about
 * Keywords: timeline, history, milestones, journey
 * Description: A vertical timeline of milestones — company history or a personal career path.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Our story', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'A short history', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'From a two-person studio to a team of twenty.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-timeline","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-timeline"><!-- wp:group {"className":"postfolio-timeline-item","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-timeline-item"><!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em"}}} -->
<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.06em">2014</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'The first desk', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Two friends start the studio from a shared desk and a borrowed laptop.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-timeline-item","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-timeline-item"><!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em"}}} -->
<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.06em">2017</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'First big client', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'A national retailer trusts us with their complete digital redesign.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-timeline-item","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-timeline-item"><!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em"}}} -->
<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.06em">2020</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Going remote', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'The team goes fully remote and grows to twelve people on four continents.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-timeline-item","style":{"spacing":{"blockGap":"0.35rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-timeline-item"><!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.06em"}}} -->
<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.06em">2024</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Twenty and counting', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'We open a small office again — mostly for the coffee and the whiteboards.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
