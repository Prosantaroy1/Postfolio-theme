<?php
/**
 * Title: Footer 02 (3 Column)
 * Slug: postfolio-blocks/part-footer-3-column
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Content of the "Footer 02 (3 Column)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-footer postfolio-footer-3col","style":{"color":{"background":"#101014","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-footer postfolio-footer-3col has-text-color has-background" style="color:#ffffff;background-color:#101014;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:site-title {"level":0,"textColor":"base","style":{"typography":{"fontWeight":"800"}}} /-->

<!-- wp:paragraph {"className":"has-max-width","textColor":"base","style":{"typography":{"fontSize":"0.95rem"}}} -->
<p class="has-max-width has-base-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'A modern editorial block theme crafted for independent publications, creative studios, and thoughtful writers worldwide.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.75rem"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://github.com/","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":6,"textColor":"base","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.8rem"}}} -->
<h6 class="wp-block-heading has-base-color has-text-color" style="font-size:0.8rem;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Quick Links', 'postfolio-blocks' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"base","overlayMenu":"never","fontSize":"small","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":6,"textColor":"base","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.8rem"}}} -->
<h6 class="wp-block-heading has-base-color has-text-color" style="font-size:0.8rem;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Get In Touch', 'postfolio-blocks' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.9rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.9rem"><?php esc_html_e( 'Have a project or story pitch?', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.9rem;font-weight:700"><a href="mailto:hello@example.com" style="color:#ffffff">hello@example.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.85rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.85rem"><?php /* translators: 1: current year, 2: site name. */ printf( esc_html__( '© %1$s %2$s. All rights reserved.', 'postfolio-blocks' ), esc_html( gmdate( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base","style":{"typography":{"fontSize":"0.85rem"}}} -->
<p class="has-base-color has-text-color" style="font-size:0.85rem"><?php esc_html_e( 'Powered by', 'postfolio-blocks' ); ?> <a href="https://wordpress.org" style="color:#ffffff"><?php esc_html_e( 'WordPress', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
