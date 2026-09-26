<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Contact info columns
 * Slug: postfolio-blocks/contact-info
 * Categories: postfolio-blocks, contact
 * Description: A three-column contact block — email, location and social links — used as the main body of the Contact page.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"margin":{"bottom":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
		<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Let\'s talk.', 'postfolio-blocks' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
		<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Questions, pitches, or just want to say hello? Pick whichever channel suits you best.', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"className":"is-style-card"} -->
		<div class="wp-block-column is-style-card">
			<!-- wp:paragraph {"fontSize":"small","className":"postfolio-badge"} -->
			<p class="postfolio-badge has-small-font-size"><?php esc_html_e( 'Email', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'General & editorial', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><a href="mailto:hello@example.com">hello@example.com</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-card"} -->
		<div class="wp-block-column is-style-card">
			<!-- wp:paragraph {"fontSize":"small","className":"postfolio-badge"} -->
			<p class="postfolio-badge has-small-font-size"><?php esc_html_e( 'Studio', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Where we work from', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Remote-first — writers and editors contribute from a dozen cities worldwide.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-card"} -->
		<div class="wp-block-column is-style-card">
			<!-- wp:paragraph {"fontSize":"small","className":"postfolio-badge"} -->
			<p class="postfolio-badge has-small-font-size"><?php esc_html_e( 'Follow', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'On social', 'postfolio-blocks' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"x"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
