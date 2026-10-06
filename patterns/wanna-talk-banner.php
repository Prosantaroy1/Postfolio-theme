<?php
/**
 * Title: Call to Action: Wanna Talk To Us?
 * Slug: postfolio-blocks/wanna-talk-banner
 * Categories: postfolio-blocks, postfolio-blocks-sections, call-to-action
 * Description: A full-width night skyline CTA banner with question title, paragraph, and purple contact button.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-1.svg' ); ?>","alt":"<?php echo esc_attr__( 'Night Skyline CTA Background', 'postfolio-blocks' ); ?>","dimRatio":70,"overlayColor":"contrast","minHeight":240,"minHeightUnit":"px","align":"full","className":"is-dark"} -->
<div class="wp-block-cover alignfull is-dark" style="min-height:240px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Night Skyline CTA Background', 'postfolio-blocks' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-1.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textColor":"base","fontSize":"huge","style":{"typography":{"fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-base-color has-text-color has-huge-font-size" style="font-weight:700"><?php esc_html_e( 'Wanna Talk To Us?', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'Please feel free to contact us. We\'re super happy to talk to you. Feel free to ask anything.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"color":{"background":"#8b5cf6","text":"#ffffff"},"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color:#ffffff;background-color:#8b5cf6;font-weight:600"><?php esc_html_e( 'Contact US', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
