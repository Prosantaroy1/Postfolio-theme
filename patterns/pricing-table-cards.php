<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Pricing: 3-Column Plan Cards
 * Slug: postfolio-blocks/pricing-table-cards
 * Categories: postfolio-blocks, postfolio-blocks-sections, pricing
 * Description: Three column pricing table with featured plan highlight, price details, feature checklist, and call-to-action buttons.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"1rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Starter', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"huge","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-huge-font-size" style="font-weight:700"><?php esc_html_e( '$29/mo', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'For individuals just getting started.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"style":{"typography":{"fontSize":"0.9rem"}}} -->
				<ul style="font-size:0.9rem">
					<li><?php esc_html_e( '1 project', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Email support', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Basic reporting', 'postfolio-blocks' ); ?></li>
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"className":"is-style-outline","width":100,"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" style="font-weight:600"><?php esc_html_e( 'Choose Plan', 'postfolio-blocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"1.75rem","right":"1.75rem"},"blockGap":"1rem"}},"backgroundColor":"contrast","textColor":"base"} -->
			<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="border-radius:0.75rem;padding-top:2.25rem;padding-right:1.75rem;padding-bottom:2.25rem;padding-left:1.75rem">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
				<p class="has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'MOST POPULAR', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"textColor":"base","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-base-color has-text-color has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Professional', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"base","fontSize":"huge","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-base-color has-text-color has-huge-font-size" style="font-weight:700"><?php esc_html_e( '$79/mo', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.875rem"}}} -->
				<p class="has-base-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'For growing teams that need more.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"textColor":"base","style":{"typography":{"fontSize":"0.9rem"}}} -->
				<ul class="has-base-color has-text-color" style="font-size:0.9rem">
					<li><?php esc_html_e( '5 projects', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Priority support', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Advanced reporting', 'postfolio-blocks' ); ?></li>
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#101014"},"typography":{"fontWeight":"600"}},"width":100,"fontSize":"small"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:#ffffff;color:#101014;font-weight:600"><?php esc_html_e( 'Choose Plan', 'postfolio-blocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"1rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:0.75rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Enterprise', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"huge","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-huge-font-size" style="font-weight:700"><?php esc_html_e( '$199/mo', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'For organizations with custom needs.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"style":{"typography":{"fontSize":"0.9rem"}}} -->
				<ul style="font-size:0.9rem">
					<li><?php esc_html_e( 'Unlimited projects', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Dedicated support', 'postfolio-blocks' ); ?></li>
					<li><?php esc_html_e( 'Custom integrations', 'postfolio-blocks' ); ?></li>
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:1.5rem">
					<!-- wp:button {"className":"is-style-outline","width":100,"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" style="font-weight:600"><?php esc_html_e( 'Contact Us', 'postfolio-blocks' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
