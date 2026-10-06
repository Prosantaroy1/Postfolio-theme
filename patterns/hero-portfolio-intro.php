<?php
/**
 * Title: Hero: Portfolio Designer Intro
 * Slug: postfolio-blocks/hero-portfolio-intro
 * Categories: postfolio-blocks, postfolio-blocks-sections, banner
 * Description: A warm rounded hero banner featuring a bold designer introduction on the left and a portrait photo on the right.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"color":{"background":"#fff8f5"},"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:1.5rem;background-color:#fff8f5;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"700"}}} -->
<p class="has-contrast-2-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'FREELANCE DIGITAL DESIGNER', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
<h1 class="wp-block-heading has-huge-font-size" style="margin-top:1rem;margin-bottom:1.5rem;font-weight:800;line-height:1.15"><?php /* translators: 1: opening highlight tag, 2: closing highlight tag. */ printf( esc_html__( 'Hi, I\'m %1$sJordan Avery%2$s, and this is my portfolio.', 'postfolio-blocks' ), '<mark style="background-color:rgba(0,0,0,0)" class="has-inline-color has-accent-2-color">', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"0.5rem"},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>" style="border-radius:0.5rem;color:#ffffff;background-color:#ff5a36;font-weight:700"><?php esc_html_e( 'Explore Projects →', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","className":"style-cover","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image has-custom-border style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portrait-1.svg' ); ?>" alt="<?php echo esc_attr__( 'Portrait of Jordan Avery', 'postfolio-blocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
