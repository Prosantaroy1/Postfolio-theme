<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Post grid: Spotlight split
 * Slug: postfolio-blocks/featured-split
 * Categories: postfolio-blocks, postfolio-blocks-posts, query, featured
 * Description: One large "lead story" with a photo and overlaid title next to a compact list of the next four posts. Used on the Home 2 layout.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Spotlight', 'postfolio-blocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->

					<!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"minHeight":460,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"1.25rem"}},"className":"postfolio-spotlight-primary"} -->
					<div class="wp-block-cover postfolio-spotlight-primary" style="border-radius:1.25rem;min-height:460px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span>
						<div class="wp-block-cover__inner-container">
							<!-- wp:post-terms {"term":"category","textColor":"base","className":"postfolio-badge"} /-->

							<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"xx-large"} /-->

							<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:post-author-name {"textColor":"base","fontSize":"small"} /-->

								<!-- wp:post-date {"textColor":"base","fontSize":"small"} /-->
							</div>
							<!-- /wp:group -->
						</div>
					</div>
					<!-- /wp:cover -->

				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:query {"queryId":3,"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:post-template -->

					<!-- wp:group {"className":"postfolio-row-item","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem"},"blockGap":"0.9rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group postfolio-row-item" style="padding-top:0.9rem;padding-bottom:0.9rem">
						<!-- wp:post-featured-image {"width":"88px","height":"72px","isLink":true,"style":{"border":{"radius":"0.6rem"}}} /-->

						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"medium"} /-->

							<!-- wp:post-date {"fontSize":"small","textColor":"contrast-2"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
