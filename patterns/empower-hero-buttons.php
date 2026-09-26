<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Empower Your Financial (Purple Buttons)
 * Slug: postfolio-blocks/empower-hero-buttons
 * Categories: postfolio-blocks, postfolio-blocks-sections, banner
 * Description: A full-width office cover hero section with tag, large title, subtitle, and dual purple action buttons.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>","dimRatio":50,"overlayColor":"contrast","minHeight":500,"minHeightUnit":"px","isDark":true,"align":"full"} -->
	<div class="wp-block-cover alignfull is-dark" style="min-height:500px">
		<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-50 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Office Meeting Background', 'postfolio-blocks' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.85rem"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:paragraph {"textColor":"base","fontSize":"large","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-base-color has-text-color has-large-font-size" style="font-weight:600"><?php esc_html_e( 'Empower', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"textColor":"base","fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} -->
				<h1 class="wp-block-heading has-base-color has-text-color has-huge-font-size" style="font-weight:800;line-height:1.1"><?php esc_html_e( 'Your Financial', 'postfolio-blocks' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
				<p class="has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'We help you managing asset, provide financial advise. Leave money issue with us and focus on your core business.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.25rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.25rem">
					<!-- wp:button {"style":{"color":{"background":"#8b5cf6","text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:#8b5cf6;color:#ffffff;font-weight:600"><?php esc_html_e( 'Learn More', 'postfolio-blocks' ); ?></a></div>
					<!-- /wp:button -->

					<!-- wp:button {"style":{"color":{"background":"#8b5cf6","text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
					<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:#8b5cf6;color:#ffffff;font-weight:600"><?php esc_html_e( 'Contact US', 'postfolio-blocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->

</div>
<!-- /wp:group -->
