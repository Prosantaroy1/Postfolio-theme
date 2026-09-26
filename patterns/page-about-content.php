<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About page content
 * Slug: postfolio-blocks/page-about-content
 * Categories: postfolio-blocks, postfolio-blocks-pages, about
 * Description: An intro headline, a mission statement with image, a row of stat highlights and a values section — the full body content for an About page.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:paragraph {"className":"postfolio-badge"} -->
	<p class="postfolio-badge"><?php esc_html_e( 'About Postfolio', 'postfolio-blocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'We write for curious minds.', 'postfolio-blocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large","textColor":"contrast-2"} -->
	<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Postfolio started as a weekend newsletter and grew into a small, independent editorial team covering design, culture and the internet — one carefully reported story at a time.', 'postfolio-blocks' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">

	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
		<!-- wp:cover {"dimRatio":0,"gradient":"indigo-to-coral","minHeight":360,"minHeightUnit":"px","style":{"border":{"radius":"1.25rem"}}} -->
		<div class="wp-block-cover" style="border-radius:1.25rem;min-height:360px">
			<span aria-hidden="true" class="wp-block-cover__background has-indigo-to-coral-gradient-background has-background-dim-0 has-background-dim wp-block-cover__gradient-background"></span>
			<div class="wp-block-cover__inner-container"></div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
		<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Our mission', 'postfolio-blocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'We believe the best writing on the internet still comes from small teams who care about a subject deeply. Postfolio exists to give that kind of writing a clean, fast, ad-light home — and to share the layout and publishing tools behind it as an open block theme.', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Every layout on this site, including this page, is built from standard WordPress blocks, so you can remix it freely in the Site Editor.', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"huge","textColor":"accent","style":{"typography":{"fontWeight":"800"}}} -->
		<p class="has-accent-color has-text-color has-huge-font-size" style="font-weight:800">2019</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Founded', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"huge","textColor":"accent","style":{"typography":{"fontWeight":"800"}}} -->
		<p class="has-accent-color has-text-color has-huge-font-size" style="font-weight:800">1,200+</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Stories published', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"huge","textColor":"accent","style":{"typography":{"fontWeight":"800"}}} -->
		<p class="has-accent-color has-text-color has-huge-font-size" style="font-weight:800">40+</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Countries reached', 'postfolio-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
