<?php
/**
 * Title: Case study
 * Slug: postfolio-blocks/portfolio-case-study
 * Categories: postfolio-blocks, postfolio-blocks-showcase
 * Keywords: case study, project, results
 * Description: A case study section with a large image, the challenge, the solution and key results.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-6.svg' ); ?>" alt="<?php echo esc_attr__( 'Harbor Finance website shown on a laptop', 'postfolio-blocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Case study', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Harbor Finance: a calmer way to bank', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'The challenge', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Customers found the old site confusing and abandoned sign-up halfway through.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Our solution', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'We rebuilt the journey around three clear steps, rewrote every screen in plain language and designed a friendlier visual system.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Read the full story', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"postfolio-case-stats","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns postfolio-case-stats"><!-- wp:column {"className":"is-style-section-bordered"} -->
<div class="wp-block-column is-style-section-bordered"><!-- wp:paragraph {"className":"postfolio-stat-number","textColor":"accent","style":{"typography":{"fontSize":"2.5rem","fontWeight":"800"}}} -->
<p class="postfolio-stat-number has-accent-color has-text-color" style="font-size:2.5rem;font-weight:800">+48%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'more completed sign-ups', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-section-bordered"} -->
<div class="wp-block-column is-style-section-bordered"><!-- wp:paragraph {"className":"postfolio-stat-number","textColor":"accent","style":{"typography":{"fontSize":"2.5rem","fontWeight":"800"}}} -->
<p class="postfolio-stat-number has-accent-color has-text-color" style="font-size:2.5rem;font-weight:800">2.1×</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'faster page loads', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-section-bordered"} -->
<div class="wp-block-column is-style-section-bordered"><!-- wp:paragraph {"className":"postfolio-stat-number","textColor":"accent","style":{"typography":{"fontSize":"2.5rem","fontWeight":"800"}}} -->
<p class="postfolio-stat-number has-accent-color has-text-color" style="font-size:2.5rem;font-weight:800">4.8/5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'average app rating', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
