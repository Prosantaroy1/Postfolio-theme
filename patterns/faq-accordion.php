<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: FAQ: Collapsible Questions
 * Slug: postfolio-blocks/faq-accordion
 * Categories: postfolio-blocks, postfolio-blocks-sections, faq
 * Description: A clean Frequently Asked Questions accordion section built with core details blocks.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Frequently Asked Questions', 'postfolio-blocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
		<details class="wp-block-details" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem">
			<summary style="font-weight:600;font-size:1.1rem;cursor:pointer"><?php esc_html_e( 'How long does a typical project take?', 'postfolio-blocks' ); ?></summary>
			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem;font-size:0.95rem"><?php esc_html_e( 'Most projects take between 2 to 6 weeks depending on scope, assets provided, and custom block requirements.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
		<details class="wp-block-details" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem">
			<summary style="font-weight:600;font-size:1.1rem;cursor:pointer"><?php esc_html_e( 'Do you offer ongoing support after launch?', 'postfolio-blocks' ); ?></summary>
			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem;font-size:0.95rem"><?php esc_html_e( 'Yes, we offer ongoing maintenance, optimization, and theme updates to ensure smooth operation.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

		<!-- wp:details {"style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
		<details class="wp-block-details" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem">
			<summary style="font-weight:600;font-size:1.1rem;cursor:pointer"><?php esc_html_e( 'What if I need to make changes later?', 'postfolio-blocks' ); ?></summary>
			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem;font-size:0.95rem"><?php esc_html_e( 'All block patterns are built with standard WordPress blocks, so you can edit text, images, and colors directly inside the Site Editor.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
