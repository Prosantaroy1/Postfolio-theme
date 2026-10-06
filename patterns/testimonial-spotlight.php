<?php
/**
 * Title: Testimonial spotlight
 * Slug: postfolio-blocks/testimonial-spotlight
 * Categories: postfolio-blocks, postfolio-blocks-testimonials, testimonials
 * Keywords: testimonial, review, quote
 * Description: A single large testimonial quote with the reviewer photo, name and role.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"accent-2","fontSize":"x-large"} -->
<p class="has-text-align-center has-accent-2-color has-text-color has-x-large-font-size">★★★★★</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"x-large","style":{"typography":{"fontWeight":"600","lineHeight":"1.45"}}} -->
<p class="has-text-align-center has-x-large-font-size" style="font-weight:600;line-height:1.45"><?php esc_html_e( '“Working with this team felt like having a calm, very talented co-founder. They turned a messy idea into a product our customers genuinely love.”', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"56px","height":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portrait-2.svg' ); ?>" alt="<?php echo esc_attr__( 'Photo of Maya Chen', 'postfolio-blocks' ); ?>" style="aspect-ratio:1;object-fit:cover;width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Maya Chen', 'postfolio-blocks' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Founder, Coastal Travel', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
