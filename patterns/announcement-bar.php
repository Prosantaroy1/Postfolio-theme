<?php
/**
 * Title: Sticky Header / Announcement Bar
 * Slug: postfolio-blocks/announcement-bar
 * Categories: postfolio-blocks, postfolio-blocks-headers, postfolio-blocks-sections
 * Description: A full-width top notification banner for announcements, special updates, or marketing alerts.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background" style="padding-top:0.6rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:0.6rem;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"postfolio-badge-white","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<p class="postfolio-badge-white has-small-font-size" style="font-weight:700"><?php esc_html_e( 'NEW RELEASE', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-small-font-size" style="font-weight:500"><?php esc_html_e( 'Discover our new 2026 Editorial Layouts & Block Patterns!', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","fontSize":"small","style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.85rem","right":"0.85rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="padding-top:0.25rem;padding-right:0.85rem;padding-bottom:0.25rem;padding-left:0.85rem"><?php esc_html_e( 'Learn More →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
