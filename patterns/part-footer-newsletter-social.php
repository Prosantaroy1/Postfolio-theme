<?php
/**
 * Title: Footer 03 (Newsletter + Social)
 * Slug: postfolio-blocks/part-footer-newsletter-social
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Content of the "Footer 03 (Newsletter + Social)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-footer postfolio-footer-newsletter","style":{"color":{"background":"#101014","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-footer postfolio-footer-newsletter has-text-color has-background" style="color:#ffffff;background-color:#101014;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Stay updated with our latest stories', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'Get weekly curations directly delivered to your inbox. No spam, ever.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Subscribe', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"textColor":"base","style":{"typography":{"fontWeight":"800"}}} /-->

<!-- wp:navigation {"textColor":"base","overlayMenu":"never","fontSize":"small","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.75rem"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.85rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.85rem"><?php /* translators: 1: current year, 2: site name. */ printf( esc_html__( '© %1$s %2$s. All rights reserved.', 'postfolio-blocks' ), esc_html( gmdate( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.85rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.85rem"><?php esc_html_e( 'Built with', 'postfolio-blocks' ); ?> <a href="https://wordpress.org" style="color:#ffffff"><?php esc_html_e( 'WordPress Block Editor', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
