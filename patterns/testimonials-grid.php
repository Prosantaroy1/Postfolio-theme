<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Testimonials: Trusted by teams
 * Slug: postfolio-blocks/testimonials-grid
 * Categories: postfolio-blocks, postfolio-blocks-testimonials, testimonials
 * Description: Left intro with quote mark and right stacked client testimonial cards with 5-star rating, avatar, name and title.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"5rem","lineHeight":"0.8","fontWeight":"900"}},"textColor":"contrast-2"} -->
			<p class="has-contrast-2-color has-text-color" style="font-size:5rem;font-weight:900;line-height:0.8">”</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"1rem"}},"typography":{"fontWeight":"800"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:800;margin-bottom:1rem"><?php esc_html_e( 'Trusted by teams that care about steady growth', 'postfolio-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"1rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="font-size:1rem"><?php esc_html_e( 'These testimonials speak to the clarity, momentum, and measurable results clients value most after partnering on long-term search growth.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}}},"backgroundColor":"base","className":"is-style-card"} -->
				<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
					<!-- wp:paragraph {"style":{"color":{"text":"#f59e0b"},"typography":{"fontSize":"1.1rem","letterSpacing":"0.15em"}}} -->
					<p class="has-text-color" style="color:#f59e0b;font-size:1.1rem;letter-spacing:0.15em">★★★★★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.5"}}} -->
					<p class="has-contrast-color has-text-color" style="font-size:1.05rem;line-height:1.5"><?php esc_html_e( '"The strategy gave our team direction. Within months, we had clearer priorities, better content decisions, and steady gains in organic traffic."', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.9rem","margin":{"top":"1rem"}}}} -->
					<div class="wp-block-group" style="margin-top:1rem">
						<!-- wp:avatar {"size":48,"style":{"border":{"radius":"0.6rem"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.95rem"}}} -->
							<p style="font-size:0.95rem;font-weight:700"><?php esc_html_e( 'Sarah Chen', 'postfolio-blocks' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem"}}} -->
							<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem"><?php esc_html_e( 'Marketing Director, Northline Studio', 'postfolio-blocks' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}}},"backgroundColor":"base","className":"is-style-card"} -->
				<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
					<!-- wp:paragraph {"style":{"color":{"text":"#f59e0b"},"typography":{"fontSize":"1.1rem","letterSpacing":"0.15em"}}} -->
					<p class="has-text-color" style="color:#f59e0b;font-size:1.1rem;letter-spacing:0.15em">★★★★★</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"contrast","style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.5"}}} -->
					<p class="has-contrast-color has-text-color" style="font-size:1.05rem;line-height:1.5"><?php esc_html_e( '"What stood out was the consistency. We stopped guessing, launched pages with confidence, and saw the content start contributing to leads."', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"0.9rem","margin":{"top":"1rem"}}}} -->
					<div class="wp-block-group" style="margin-top:1rem">
						<!-- wp:avatar {"size":48,"style":{"border":{"radius":"0.6rem"}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.95rem"}}} -->
							<p style="font-size:0.95rem;font-weight:700"><?php esc_html_e( 'David Romero', 'postfolio-blocks' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem"}}} -->
							<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem"><?php esc_html_e( 'Founder, Harbor Peak Advisory', 'postfolio-blocks' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
