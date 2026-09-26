<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Author profile card
 * Slug: postfolio-blocks/author-bio-card
 * Categories: postfolio-blocks, about
 * Description: Avatar, name, biographical description and post count for the queried author. Used at the top of the Author Profile template.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:avatar {"size":112,"style":{"border":{"radius":"999px"}},"className":"postfolio-author-avatar"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
			<p class="has-contrast-2-color has-text-color has-small-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Author profile', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:query-title {"type":"author","level":1,"fontSize":"xx-large"} /-->

			<!-- wp:post-author-biography {"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
