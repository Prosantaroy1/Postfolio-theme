<?php
/**
 * Title: Most Discussed: 4-Column Card Grid
 * Slug: postfolio-blocks/most-discussed-grid
 * Categories: postfolio-blocks, postfolio-blocks-posts, featured
 * Description: A four-column card grid of most discussed articles with category pill badges, thumbnails, and author dates.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1rem"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--30);padding-bottom:1rem"><!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Most Discussed', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"small","style":{"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"1.2rem","right":"1.2rem"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="padding-top:0.4rem;padding-right:1.2rem;padding-bottom:0.4rem;padding-left:1.2rem"><?php esc_html_e( 'View All', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.85rem"},"spacing":{"padding":{"top":"0","bottom":"1.25rem","left":"0","right":"0"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.85rem;padding-top:0;padding-right:0;padding-bottom:1.25rem;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","className":"style-cover","style":{"border":{"radius":{"topLeft":"0.85rem","topRight":"0.85rem"}}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-4.svg' ); ?>" alt="<?php echo esc_attr__( 'Article Thumbnail', 'postfolio-blocks' ); ?>" style="border-top-left-radius:0.85rem;border-top-right-radius:0.85rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:1rem;padding-left:1rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Worth A Thousand Words', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • October 17, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.85rem"},"spacing":{"padding":{"top":"0","bottom":"1.25rem","left":"0","right":"0"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.85rem;padding-top:0;padding-right:0;padding-bottom:1.25rem;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","className":"style-cover","style":{"border":{"radius":{"topLeft":"0.85rem","topRight":"0.85rem"}}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-2.svg' ); ?>" alt="<?php echo esc_attr__( 'Article Thumbnail', 'postfolio-blocks' ); ?>" style="border-top-left-radius:0.85rem;border-top-right-radius:0.85rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:1rem;padding-left:1rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Elements', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • September 5, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.85rem"},"spacing":{"padding":{"top":"0","bottom":"1.25rem","left":"0","right":"0"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.85rem;padding-top:0;padding-right:0;padding-bottom:1.25rem;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","className":"style-cover","style":{"border":{"radius":{"topLeft":"0.85rem","topRight":"0.85rem"}}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-6.svg' ); ?>" alt="<?php echo esc_attr__( 'Article Thumbnail', 'postfolio-blocks' ); ?>" style="border-top-left-radius:0.85rem;border-top-right-radius:0.85rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:1rem;padding-left:1rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'More Tags', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.85rem"},"spacing":{"padding":{"top":"0","bottom":"1.25rem","left":"0","right":"0"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.85rem;padding-top:0;padding-right:0;padding-bottom:1.25rem;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","className":"style-cover","style":{"border":{"radius":{"topLeft":"0.85rem","topRight":"0.85rem"}}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-3.svg' ); ?>" alt="<?php echo esc_attr__( 'Article Thumbnail', 'postfolio-blocks' ); ?>" style="border-top-left-radius:0.85rem;border-top-right-radius:0.85rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:1rem;padding-left:1rem"><!-- wp:paragraph {"className":"postfolio-pill","fontSize":"small","style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"},"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"}}} -->
<p class="postfolio-pill has-text-color has-background has-small-font-size" style="border-radius:999px;color:#ffffff;background-color:#d97706;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'HTML', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 21, 2008', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
