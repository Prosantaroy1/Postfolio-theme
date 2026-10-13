<?php
/**
 * Title: Page: Portfolio work
 * Slug: postfolio-blocks/page-portfolio-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages, postfolio-blocks-showcase
 * Keywords: portfolio, work, projects, case studies, grid
 * Description: A work index page: intro, a grid of every post in the "Work" category (each opens as a case study), client logos, a testimonial and a closing call to action.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_work_id  = postfolio_blocks_demo_term_id( 'work' );
$postfolio_work_tax = $postfolio_work_id ? ',"taxQuery":{"category":[' . $postfolio_work_id . ']}' : '';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem","padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Portfolio', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.4rem, 1.5rem + 3.2vw, 4.4rem)","lineHeight":"1.05","letterSpacing":"-0.03em"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.4rem, 1.5rem + 3.2vw, 4.4rem);letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'Work that speaks for itself.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-lede","textColor":"contrast-2","fontSize":"large"} -->
<p class="postfolio-lede has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Selected projects for startups, studios and established brands. Open any project to read the full case study — the challenge, the process and the results.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":96,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_work_tax; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"className":"postfolio-work-card postfolio-story-card","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-work-card postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"1.25rem"}}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"postfolio-tag-row","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} /-->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"x-large","style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"excerptLength":24,"textColor":"contrast-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Add posts to the “Work” category to show your projects here.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/logo-cloud"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/testimonial-spotlight"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-portfolio"} /-->
