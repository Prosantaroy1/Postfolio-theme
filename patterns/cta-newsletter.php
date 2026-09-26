<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Call to action: Newsletter band
 * Slug: postfolio-blocks/cta-newsletter
 * Categories: postfolio-blocks, call-to-action
 * Description: A bold, full-width gradient band with a headline, short line of copy and a button — a general-purpose call-to-action for the end of a page or between post sections.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","gradient":"indigo-to-coral","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-indigo-to-coral-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"constrained","contentSize":"520px"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":2,"textColor":"base","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Never miss a story.', 'postfolio-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base"} -->
			<p class="has-base-color has-text-color"><?php esc_html_e( 'Join the newsletter for a weekly digest of the best posts from Postfolio — no spam, unsubscribe any time.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Subscribe', 'postfolio-blocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
