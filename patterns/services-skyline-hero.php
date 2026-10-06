<?php
/**
 * Title: Services: City Skyline Hero Cover
 * Slug: postfolio-blocks/services-skyline-hero
 * Categories: postfolio-blocks, postfolio-blocks-sections, banner
 * Description: A full-width city skyline cover banner with centered heading and uppercase tagline.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-8.svg' ); ?>","alt":"<?php echo esc_attr__( 'City Skyline', 'postfolio-blocks' ); ?>","dimRatio":60,"overlayColor":"contrast","minHeight":420,"minHeightUnit":"px","align":"full","className":"is-dark"} -->
<div class="wp-block-cover alignfull is-dark" style="min-height:420px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'City Skyline', 'postfolio-blocks' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-8.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","fontSize":"huge","style":{"typography":{"fontWeight":"700"}}} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-huge-font-size" style="font-weight:700"><?php esc_html_e( 'Our Services', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"small","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"600"}}} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'WE PROVIDE THE SOLUTION FOR ASSET MANAGEMENT', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
