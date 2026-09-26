<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: About: Read The Story Behind Our Success
 * Slug: postfolio-blocks/story-success-about
 * Categories: postfolio-blocks, postfolio-blocks-pages, about
 * Description: A 2-column story overview section with a bold title on the left and detailed company history paragraphs on the right.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|30"}}},"verticalAlignment":"top"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1.2"}}} -->
			<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:700;line-height:1.2"><?php esc_html_e( 'Read The Story Behind Our Success', 'postfolio-blocks' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.65"}}} -->
			<p class="has-contrast-2-color has-text-color" style="font-size:0.95rem;line-height:1.65"><?php esc_html_e( 'We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"1.25rem"}},"typography":{"fontSize":"0.95rem","lineHeight":"1.65"}}} -->
			<p class="has-contrast-2-color has-text-color" style="margin-top:1.25rem;font-size:0.95rem;line-height:1.65"><?php esc_html_e( 'More than 25 years of experience working in the industry has enabled us to build our services and solutions in strategy, consulting, digital, technology and operations that help our clients with their trading projects around the world. Capabilities we leverage.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
