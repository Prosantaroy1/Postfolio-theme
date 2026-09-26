<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Contact: Minimal Info Grid
 * Slug: postfolio-blocks/contact-minimal-grid
 * Categories: postfolio-blocks, postfolio-blocks-meta, contact
 * Description: Minimal 3-column contact info section displaying address, phone and email contact details.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Visit', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.5rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.5rem;font-size:0.95rem"><?php esc_html_e( '123 Example Street, Suite 100', 'postfolio-blocks' ); ?><br><?php esc_html_e( 'Your City, ST 00000', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Call', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.5rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.5rem;font-size:0.95rem"><a href="tel:+10000000000" style="text-decoration:underline"><?php esc_html_e( '+1 (000) 000-0000', 'postfolio-blocks' ); ?></a><br><?php esc_html_e( 'Mon-Fri, 9am-5pm', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Email', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.5rem"}},"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:0.5rem;font-size:0.95rem"><a href="mailto:hello@example.com" style="text-decoration:underline"><?php esc_html_e( 'hello@example.com', 'postfolio-blocks' ); ?></a><br><?php esc_html_e( 'We reply within one business day.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
