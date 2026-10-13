<?php
/**
 * Title: Template: category
 * Slug: postfolio-blocks/template-body-category
 * Categories: postfolio-blocks-pages
 * Description: Content of the category.html template: section header with sub-categories, lead story and a grid of the latest posts in the category.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"postfolio-section-head","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide postfolio-section-head" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:query-title {"type":"archive","showPrefix":false,"style":{"typography":{"fontSize":"clamp(2.4rem, 1.6rem + 3vw, 4.25rem)","lineHeight":"1.02","letterSpacing":"-0.025em"}}} /-->

<!-- wp:term-description {"textColor":"contrast-2","fontSize":"large"} /-->

<!-- wp:categories {"className":"postfolio-subcategories"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":90,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"className":"postfolio-current-term","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide postfolio-current-term"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","className":"postfolio-story-card postfolio-category-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center postfolio-story-card postfolio-category-lead" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"1rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Top story', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":2,"isLink":true,"style":{"typography":{"fontSize":"clamp(1.7rem, 1.25rem + 1.6vw, 2.6rem)","lineHeight":"1.1"}}} /-->

<!-- wp:post-excerpt {"excerptLength":30,"textColor":"contrast-2","fontSize":"large"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date {"textColor":"contrast-2"} /-->

<!-- wp:post-time-to-read {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:heading {"fontSize":"x-large","style":{"spacing":{"padding":{"bottom":"0.6rem"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}}} -->
<h2 class="wp-block-heading has-x-large-font-size" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-bottom:0.6rem"><?php esc_html_e( 'Latest in this section', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":91,"query":{"perPage":9,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"className":"postfolio-current-term","layout":{"type":"default"}} -->
<div class="wp-block-query postfolio-current-term"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<!-- wp:group {"className":"postfolio-story-card","style":{"spacing":{"blockGap":"0.7rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"0.9rem"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"typography":{"lineHeight":"1.25"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":16,"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-date {"textColor":"contrast-2"} /-->

<!-- wp:post-time-to-read {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'No more stories in this section yet.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
