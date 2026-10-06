<?php
/**
 * Title: Team: 4-Column Member Cards
 * Slug: postfolio-blocks/team-members-grid
 * Categories: postfolio-blocks, postfolio-blocks-meta, about
 * Description: Four column team member cards with circular avatar, bio, social icons, portfolio and profile buttons.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20","top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.85rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1.25rem;padding-top:1.75rem;padding-right:1.25rem;padding-bottom:1.75rem;padding-left:1.25rem"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Alicia Peterson', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","lineHeight":"1.5"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.85rem;line-height:1.5"><?php esc_html_e( 'Elementum tempus egestas sed risus pretium quam risus feugiat in ante metus dictumat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"accent","size":"has-small-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View portfolio →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View profile', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.85rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1.25rem;padding-top:1.75rem;padding-right:1.25rem;padding-bottom:1.75rem;padding-left:1.25rem"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Michael Anderson', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","lineHeight":"1.5"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.85rem;line-height:1.5"><?php esc_html_e( 'Elementum tempus egestas sed risus pretium quam risus feugiat in ante metus dictumat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"accent","size":"has-small-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View portfolio →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View profile', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.85rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1.25rem;padding-top:1.75rem;padding-right:1.25rem;padding-bottom:1.75rem;padding-left:1.25rem"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Olivia Ortega', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","lineHeight":"1.5"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.85rem;line-height:1.5"><?php esc_html_e( 'Elementum tempus egestas sed risus pretium quam risus feugiat in ante metus dictumat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"accent","size":"has-small-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View portfolio →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View profile', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-card","backgroundColor":"base","style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.85rem"}}} -->
<div class="wp-block-group is-style-card has-base-background-color has-background" style="border-radius:1.25rem;padding-top:1.75rem;padding-right:1.25rem;padding-bottom:1.75rem;padding-left:1.25rem"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Thomas Lewroy', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem","lineHeight":"1.5"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color" style="font-size:0.85rem;line-height:1.5"><?php esc_html_e( 'Elementum tempus egestas sed risus pretium quam risus feugiat in ante metus dictumat.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"accent","size":"has-small-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View portfolio →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline has-custom-font-size has-small-font-size","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="font-weight:600"><?php esc_html_e( 'View profile', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
