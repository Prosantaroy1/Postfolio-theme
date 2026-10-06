<?php
/**
 * Title: Latest News: 6-Card Soft Shadow Grid
 * Slug: postfolio-blocks/latest-news-cards-grid
 * Categories: postfolio-blocks, postfolio-blocks-posts, featured
 * Description: A 6-card grid with soft drop shadow container, orange dates, titles, and excerpt previews.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ff5a36"},"typography":{"fontWeight":"700"}}} -->
<p class="has-text-align-center has-text-color" style="color:#ff5a36;font-weight:700"><?php esc_html_e( 'Our Blog', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1.15"}}} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size" style="font-weight:800;line-height:1.15"><?php esc_html_e( 'Stay On Top Of The Latest News', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Worth A Thousand Words', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Boat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'October 17, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Elements', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'The purpose of this HTML is to help determine what default settings are with CSS and to make sure that...', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'September 5, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'More Tags', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'More of these posts need tags.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'HTML', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'What HTML tags would you like to see? Let\'s start with an unordered list: One Two Three Four And then...', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Links', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'A few well known WordPress links: WordPress.org, the Codex and the download page.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'June 20, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.85rem"},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Category Hierarchy', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'This post has 4 categories, part of a hierarchy that is 3 deep. Lorem ipsum dolor sit amet, consectetuer adipiscing...', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#ff5a36"},"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
<p class="has-text-color" style="color:#ff5a36;font-size:0.85rem;font-weight:600"><?php esc_html_e( 'June 20, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
