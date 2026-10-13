<?php
/**
 * Title: Template: case study
 * Slug: postfolio-blocks/template-body-single-case-study
 * Categories: postfolio-blocks-pages
 * Description: Content of the single-case-study.html template, used automatically for posts in the "Work" category: project hero, wide cover image, the case study and a next-project / contact footer.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","className":"postfolio-case-study","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull postfolio-case-study"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"1rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Case study', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","className":"is-style-pill","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(2.4rem, 1.5rem + 3.4vw, 4.75rem)","lineHeight":"1.02","letterSpacing":"-0.03em"}}} /-->

<!-- wp:post-excerpt {"textColor":"contrast-2","fontSize":"large","style":{"layout":{"selfStretch":"fit"}},"className":"postfolio-case-study__lede"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","style":{"border":{"radius":"1.5rem"}}} /-->

<!-- wp:post-content {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1.5rem"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background postfolio-case-study__cta" style="border-radius:1.5rem;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-kicker postfolio-muted","fontSize":"small"} -->
<p class="postfolio-kicker postfolio-muted has-small-font-size"><?php esc_html_e( 'More work', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow","taxonomy":"category","className":"postfolio-next-project","fontSize":"large"} /-->

<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow","taxonomy":"category","className":"postfolio-next-project","fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Start a project', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
