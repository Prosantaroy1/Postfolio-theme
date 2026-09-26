<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Big statement
 * Slug: postfolio-blocks/hero-home
 * Categories: postfolio-blocks, banner
 * Description: A full-width headline hero with a short standfirst and two call-to-action buttons, used at the top of the Home 1 layout.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"align":"center","className":"postfolio-badge","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
		<p class="has-text-align-center postfolio-badge" style="margin-bottom:0.5rem"><?php esc_html_e( 'Fresh on Postfolio', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
		<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Stories worth your morning coffee.', 'postfolio-blocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large","style":{"spacing":{"margin":{"bottom":"1rem"}}}} -->
		<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size" style="margin-bottom:1rem"><?php esc_html_e( 'A modern, editorial-style blog covering design, culture and the internet — updated daily by a small independent team.', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start reading', 'postfolio-blocks' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'About the team', 'postfolio-blocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
