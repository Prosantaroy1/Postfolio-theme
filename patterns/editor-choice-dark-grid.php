<?php
/**
 * Title: Editor Choice: Dark Magazine Grid
 * Slug: postfolio-blocks/editor-choice-dark-grid
 * Categories: postfolio-blocks, postfolio-blocks-posts, featured
 * Description: A dark magazine layout with a featured story spotlight next to a 2x2 grid of editor choices.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#1e1e1e","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="color:#ffffff;background-color:#1e1e1e;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"1rem"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#333333","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:#333333;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--30);padding-bottom:1rem"><!-- wp:heading {"textColor":"base","fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Editor Choice', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"color":{"background":"transparent","text":"#ffffff"},"border":{"width":"1px","color":"#ffffff","style":"solid"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"1.2rem","right":"1.2rem"}}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background has-border-color has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="border-color:#ffffff;border-style:solid;border-width:1px;color:#ffffff;background-color:transparent;padding-top:0.4rem;padding-right:1.2rem;padding-bottom:0.4rem;padding-left:1.2rem"><?php esc_html_e( 'View All', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%"><!-- wp:group {"backgroundColor":"contrast","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"1rem"}}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-radius:0.75rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="font-weight:700"><?php esc_html_e( 'Worth A Thousand Words', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'Boat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Theme Admin', 'postfolio-blocks' ); ?> • <?php esc_html_e( 'October 17, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"contrast","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.6rem"}}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Elements', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • September 5, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"contrast","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.6rem"}}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'More Tags', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"contrast","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.6rem"}}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'HTML', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"contrast","style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.6rem"}}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-radius:0.75rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"base","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Links', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 20, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
