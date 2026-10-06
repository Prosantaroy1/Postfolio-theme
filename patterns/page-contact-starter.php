<?php
/**
 * Title: Page: contact
 * Slug: postfolio-blocks/page-contact-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Keywords: contact, get in touch, support
 * Description: A contact page with contact details, office hours, a FAQ and a map-style image.
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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"1.25rem"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Contact', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Let’s talk.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Questions, ideas or just a hello — we read every message and reply within one working day.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-section-bordered","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-bordered"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Email', 'postfolio-blocks' ); ?></strong><br>hello@example.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Phone', 'postfolio-blocks' ); ?></strong><br>+1 (555) 010-0199</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Studio', 'postfolio-blocks' ); ?></strong><br><?php esc_html_e( '221 Harbour Street, Lisbon', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://dribbble.com/","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-2.svg' ); ?>" alt="<?php echo esc_attr__( 'Bright blue landscape', 'postfolio-blocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.5rem"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Office hours', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Monday – Friday: 9:00 – 18:00', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Saturday: 10:00 – 14:00', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/faq-modern"} /-->
