<?php
/**
 * Title: Services: Financial 6-Card Grid
 * Slug: postfolio-blocks/services-financial-grid
 * Categories: postfolio-blocks, postfolio-blocks-testimonials, services
 * Description: A 6-card grid of financial services with a highlighted navy blue insurance card in the top row.
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
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Services We Provide', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontSize":"0.9rem"}}} -->
<p class="has-text-align-center has-accent-color has-text-color" style="font-size:0.9rem"><?php esc_html_e( 'Covered in these areas', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Capital Markets', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0.5rem"},"color":{"background":"#0a1152","text":"#ffffff"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group has-text-color has-background" style="border-radius:0.5rem;color:#ffffff;background-color:#0a1152;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"base","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Insurance', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Blockchain', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Technology Advisory', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Finance and Risk', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Portfolio Management', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.875rem;line-height:1.6"><?php esc_html_e( 'Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, clearing houses.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
