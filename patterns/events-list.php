<?php
/**
 * Title: Upcoming events
 * Slug: postfolio-blocks/events-list
 * Categories: postfolio-blocks, postfolio-blocks-showcase
 * Keywords: events, calendar, schedule, meetup
 * Description: A list of upcoming events with a date badge, details and a sign-up button.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"880px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Events', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Upcoming events', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Join us online or in person.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-section-bordered","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-section-bordered"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.9rem","right":"0.9rem"},"blockGap":"0"},"border":{"radius":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-accent-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:0.6rem;padding-right:0.9rem;padding-bottom:0.6rem;padding-left:0.9rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800","lineHeight":"1"}}} -->
<p style="font-size:1.5rem;font-weight:800;line-height:1">12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} -->
<p class="has-small-font-size" style="font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Mar', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Design Systems Meetup', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Online · 18:00 – 19:30', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Reserve a seat', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-bordered","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-section-bordered"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.9rem","right":"0.9rem"},"blockGap":"0"},"border":{"radius":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-accent-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:0.6rem;padding-right:0.9rem;padding-bottom:0.6rem;padding-left:0.9rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800","lineHeight":"1"}}} -->
<p style="font-size:1.5rem;font-weight:800;line-height:1">04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} -->
<p class="has-small-font-size" style="font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Apr', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Writing for the Web Workshop', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Berlin · 10:00 – 16:00', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Reserve a seat', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-bordered","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-section-bordered"><!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.9rem","right":"0.9rem"},"blockGap":"0"},"border":{"radius":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-color has-accent-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:0.6rem;padding-right:0.9rem;padding-bottom:0.6rem;padding-left:0.9rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"800","lineHeight":"1"}}} -->
<p style="font-size:1.5rem;font-weight:800;line-height:1">22</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} -->
<p class="has-small-font-size" style="font-weight:600;text-transform:uppercase"><?php esc_html_e( 'May', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Open Studio Evening', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Lisbon · 19:00 – 22:00', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Reserve a seat', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
