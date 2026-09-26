<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Services: Grid Cards
 * Slug: postfolio-blocks/services-grid
 * Categories: postfolio-blocks, postfolio-blocks-testimonials, services
 * Description: A 3-column numbered grid of services with section numbers, bold headings, and detailed descriptions.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"fontWeight":"800"}}} -->
		<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:800"><?php esc_html_e( 'Services built for measurable search growth', 'postfolio-blocks' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">01</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'SEO', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Technical foundations, on-page architecture, and high-intent keyword strategy built for competitive metro search.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">02</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'Local SEO', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Borough-level visibility - Google Business Profile, map pack, and neighborhood landing pages tuned to local intent.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">03</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'Content Marketing', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Editorial and conversion content that earns rankings and moves buyers - written by people who understand your market.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">04</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'Paid Media', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Google, Bing, and paid social managed against pipeline - not impressions - and coordinated with organic so the two don\'t compete.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">05</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'Technical & Web', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Core Web Vitals, site speed, and conversion-focused builds so the traffic you earn actually turns into revenue.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.8rem"}},"backgroundColor":"base","className":"is-style-card"} -->
			<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:1.75rem;padding-bottom:2rem;padding-left:1.75rem">
				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.85rem;font-weight:600">06</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:800"><?php esc_html_e( 'Digital PR & Links', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}}} -->
				<p class="has-contrast-2-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Earned coverage and authority links from real publications - the kind that hold up to algorithm updates.', 'postfolio-blocks' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
