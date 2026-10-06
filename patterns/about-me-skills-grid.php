<?php
/**
 * Title: About me: Skills Tabs & Feature Cards
 * Slug: postfolio-blocks/about-me-skills-grid
 * Categories: postfolio-blocks, postfolio-blocks-pages, about
 * Description: An about section featuring a portrait photo on the left and skill tab navigation with 4 feature cards on the right.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","className":"style-cover","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portrait-3.svg' ); ?>" alt="<?php echo esc_attr__( 'About Me Photo', 'postfolio-blocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:heading {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'About me', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.65"}}} -->
<p class="has-contrast-2-color has-text-color" style="font-size:0.9rem;line-height:1.65"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci purus, posuere sit amet nulla id, efficitur condimentum metus. Donec vestibulum vehicula risus, a euismod ante porta ac. Morbi bibendum vitae eros vel pellentesque. Ut nec aliquam metus, sit amet lacinia ante. Phasellus sit amet metus eget nibh pharetra varius. Praesent at sem ultricies, laoreet ex quis, tristique odio.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"top":"1.25rem","bottom":"1.25rem"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:1.25rem;margin-bottom:1.25rem"><!-- wp:paragraph {"fontSize":"small","style":{"color":{"text":"#ff5a36"},"border":{"bottom":{"color":"#ff5a36","width":"2px"}},"spacing":{"padding":{"bottom":"0.25rem"}},"typography":{"fontWeight":"700"}}} -->
<p class="has-text-color has-small-font-size" style="border-bottom-color:#ff5a36;border-bottom-width:2px;color:#ff5a36;padding-bottom:0.25rem;font-weight:700"><?php esc_html_e( 'Main Skills', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-contrast-2-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Awards', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-contrast-2-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Experience', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-contrast-2-color has-text-color has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Education & Certification', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1rem","top":"1rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.6rem","right":"0.6rem"}},"typography":{"fontSize":"1.2rem"}}} -->
<p class="has-text-color has-background" style="border-radius:999px;color:#ffffff;background-color:#ff5a36;padding-top:0.6rem;padding-right:0.6rem;padding-bottom:0.6rem;padding-left:0.6rem;font-size:1.2rem">💼</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Understand Your Vision', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.6rem","right":"0.6rem"}},"typography":{"fontSize":"1.2rem"}}} -->
<p class="has-text-color has-background" style="border-radius:999px;color:#ffffff;background-color:#ff5a36;padding-top:0.6rem;padding-right:0.6rem;padding-bottom:0.6rem;padding-left:0.6rem;font-size:1.2rem">💡</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Craft Creative Solutions', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1rem","top":"1rem"},"margin":{"top":"1rem"}}}} -->
<div class="wp-block-columns" style="margin-top:1rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.5rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.6rem","right":"0.6rem"}},"typography":{"fontSize":"1.2rem"}}} -->
<p class="has-text-color has-background" style="border-radius:999px;color:#ffffff;background-color:#ff5a36;padding-top:0.6rem;padding-right:0.6rem;padding-bottom:0.6rem;padding-left:0.6rem;font-size:1.2rem">🎯</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Business Planning Strategies', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"0.5rem"},"color":{"background":"#ff5a36","text":"#ffffff"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"},"blockGap":"0.75rem"}}} -->
<div class="wp-block-group has-text-color has-background" style="border-radius:0.5rem;color:#ffffff;background-color:#ff5a36;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.85rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"background":"#000000","text":"#ffffff"},"border":{"radius":"999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"0.6rem","right":"0.6rem"}},"typography":{"fontSize":"1.2rem"}}} -->
<p class="has-text-color has-background" style="border-radius:999px;color:#ffffff;background-color:#000000;padding-top:0.6rem;padding-right:0.6rem;padding-bottom:0.6rem;padding-left:0.6rem;font-size:1.2rem">🌙</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"base","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading has-base-color has-text-color has-small-font-size" style="font-weight:700"><?php esc_html_e( 'Skilled & Professional team', 'postfolio-blocks' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
