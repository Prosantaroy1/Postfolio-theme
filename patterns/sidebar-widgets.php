<?php
/**
 * Title: Sidebar widgets
 * Slug: postfolio-blocks/sidebar-widgets
 * Categories: postfolio-blocks-blog
 * Description: Search, about card, popular posts, categories, tags and a newsletter box. Used by the Sidebar template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"className":"postfolio-sidebar-sticky","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-sidebar-sticky"><!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles…', 'postfolio-blocks' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:group {"className":"is-style-section-bordered","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-bordered"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'About this blog', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:site-tagline {"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Popular posts', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"postfolio-popular-posts"} -->
<div class="wp-block-query postfolio-popular-posts"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1rem"}}} -->
<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"0.85rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"72px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"72px","height":"72px","style":{"border":{"radius":"0.75rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0.25rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontSize":"1rem","lineHeight":"1.35"}}} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'No posts yet.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Categories', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Tags', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"smallestFontSize":"0.8rem","largestFontSize":"1.1rem","className":"is-style-outline"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-dark" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Get the weekly digest', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'One email every Friday with the best new stories. No spam.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Subscribe', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
