<?php
/**
 * Title: 404 content
 * Slug: postfolio-blocks/404-content
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Description: A centered "page not found" message with a search field and a button back to the homepage. Used on the 404 template.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"huge","style":{"typography":{"fontWeight":"800"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-huge-font-size" style="font-weight:800">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'We couldn\'t find that page.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color"><?php esc_html_e( 'The page you\'re looking for may have been moved or no longer exists. Try a search, or head back to the homepage.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles…', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"999px"}}} /-->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:1.5rem"><!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to homepage', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
