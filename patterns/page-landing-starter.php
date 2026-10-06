<?php
/**
 * Title: Page: business landing
 * Slug: postfolio-blocks/page-landing-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Keywords: landing, business, agency, homepage
 * Description: A complete landing page: hero, logos, features, process, stats, testimonial, pricing, FAQ and a call to action. Pairs with the "Landing Page" template.
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-7.svg' ); ?>","alt":"<?php echo esc_attr__( 'Purple abstract landscape', 'postfolio-blocks' ); ?>","dimRatio":50,"overlayColor":"contrast","minHeight":640,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--20);min-height:640px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Purple abstract landscape', 'postfolio-blocks' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-7.svg' ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"600"}}} -->
<p class="has-text-align-center has-base-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Strategy · Design · Development', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"base","style":{"typography":{"fontSize":"clamp(2.25rem, 1.5rem + 3vw, 4rem)","fontWeight":"800","lineHeight":"1.08"}}} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:clamp(2.25rem, 1.5rem + 3vw, 4rem);font-weight:800;line-height:1.08"><?php esc_html_e( 'We build brands and websites people remember.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size"><?php esc_html_e( 'An independent studio helping ambitious teams launch faster with clear strategy and beautiful design.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start a project', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'See our work', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:pattern {"slug":"postfolio-blocks/logo-cloud"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/features-grid"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/process-steps"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/stats-counters"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/testimonial-spotlight"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/pricing-simple"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/faq-modern"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-split-image"} /-->
