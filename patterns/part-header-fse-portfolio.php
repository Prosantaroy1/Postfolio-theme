<?php
/**
 * Title: Header 05 (FSE Portfolio + CTA Buttons)
 * Slug: postfolio-blocks/part-header-fse-portfolio
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Content of the "Header 05 (FSE Portfolio + CTA Buttons)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-header postfolio-header-fse","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-header postfolio-header-fse" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","fontSize":"1.5rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"fontSize":"small","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"0.5rem"},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:0.5rem;color:#ffffff;background-color:#ff5a36;font-weight:700"><?php esc_html_e( 'Buy Now', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-font-size has-small-font-size","fontSize":"small","style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"0.5rem"},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background has-small-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="border-radius:0.5rem;color:#ffffff;background-color:#ff5a36;font-weight:700"><?php esc_html_e( 'Let’s Talk', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
