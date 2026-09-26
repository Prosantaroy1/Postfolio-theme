<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Featured: Bento Stories Grid
 * Slug: postfolio-blocks/featured-bento-grid
 * Categories: postfolio-blocks, postfolio-blocks-posts, featured
 * Description: A magazine bento grid featuring a large lead story with image overlay next to two compact story cards.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:cover {"dimRatio":50,"minHeight":440,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"1.25rem"}},"className":"postfolio-bento-primary"} -->
			<div class="wp-block-cover postfolio-bento-primary" style="border-radius:1.25rem;min-height:440px">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-50 has-background-dim"></span>
				<div class="wp-block-cover__inner-container" style="display:flex;flex-direction:column;justify-content:space-between;height:100%">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"999px"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"textColor":"base","fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
						<h2 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Augue Mauris Neque Consectetur', 'postfolio-blocks' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
						<p class="has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'Quam pellentesque nec nam aliquam praesent elementum facilisis leo. Praesent elementum facilisis leo vel fringilla est ullamcorper natoque penatibus et magnisdis.', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.25rem"}}}} -->
						<div class="wp-block-buttons" style="margin-top:1.25rem">
							<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#101014"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
							<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="background-color:#ffffff;color:#101014;font-weight:600"><?php esc_html_e( 'Read the full story →', 'postfolio-blocks' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"1rem"}}} -->
						<figure class="wp-block-image style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'Featured Story Image', 'postfolio-blocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->

						<!-- wp:avatar {"size":36,"style":{"border":{"radius":"999px"}}} /-->

						<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
						<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'The Perfect Theme For Stunning Websites!', 'postfolio-blocks' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Lorem ipsum dolor amet consectetur adipiscing elitsed do eiusmod.', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"}}} -->
						<p style="font-size:0.85rem;font-weight:700"><a href="#" style="text-decoration:underline"><?php esc_html_e( 'Read the full story →', 'postfolio-blocks' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"1rem"}}} -->
						<figure class="wp-block-image style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'Featured Story Image', 'postfolio-blocks' ); ?>" style="border-radius:1rem;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->

						<!-- wp:avatar {"size":36,"style":{"border":{"radius":"999px"}}} /-->

						<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
						<h3 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'The Perfect Theme For Stunning Websites!', 'postfolio-blocks' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.875rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Lorem ipsum dolor amet consectetur adipiscing elitsed do eiusmod.', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700"}}} -->
						<p style="font-size:0.85rem;font-weight:700"><a href="#" style="text-decoration:underline"><?php esc_html_e( 'Read the full story →', 'postfolio-blocks' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
