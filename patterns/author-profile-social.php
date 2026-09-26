<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Author profile with social links
 * Slug: postfolio-blocks/author-profile-social
 * Categories: postfolio-blocks, postfolio-blocks-meta, about
 * Description: An author bio card with avatar, name, social links, biography text and action button.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="border-radius:1.25rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:avatar {"size":120,"style":{"border":{"radius":"999px"}},"className":"postfolio-author-avatar"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<p class="has-contrast-2-color has-text-color has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Featured Author', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Sarah Chen', 'postfolio-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.95rem"}}} -->
			<p class="has-contrast-2-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'Senior Editorial Director covering design trends, digital culture, and modern publishing tools. Based in San Francisco.', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"0.6rem"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"github"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
