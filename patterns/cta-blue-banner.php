<?php
/**
 * Title: Call to Action: Vibrant Blue Banner
 * Slug: postfolio-blocks/cta-blue-banner
 * Categories: postfolio-blocks, postfolio-blocks-sections, call-to-action
 * Description: A full-width vibrant blue hero banner with headline and white button.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#2563eb","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="color:#ffffff;background-color:#2563eb;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","textColor":"base","fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1.15"}}} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-huge-font-size" style="font-weight:800;line-height:1.15"><?php esc_html_e( 'Ready to launch a site that turns visitors into customers?', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#2563eb"},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color:#2563eb;background-color:#ffffff;font-weight:700"><?php esc_html_e( 'Get in touch', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
