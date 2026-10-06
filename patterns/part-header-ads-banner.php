<?php
/**
 * Title: Header 04 (Logo + Ads Banner + Social)
 * Slug: postfolio-blocks/part-header-ads-banner
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Content of the "Header 04 (Logo + Ads Banner + Social)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-header postfolio-header-ads","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-header postfolio-header-ads" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","fontSize":"1.5rem"}}} /-->

<!-- wp:site-tagline {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.85rem"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"0.25rem"},"color":{"background":"#000000","text":"#ffffff"},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem","left":"2.5rem","right":"2.5rem"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-text-color has-background" style="border-radius:0.25rem;color:#ffffff;background-color:#000000;padding-top:0.85rem;padding-right:2.5rem;padding-bottom:0.85rem;padding-left:2.5rem"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.15em","fontSize":"1.2rem"}}} -->
<p style="font-size:1.2rem;font-weight:700;letter-spacing:0.15em"><?php esc_html_e( 'Advertisement', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.6rem"}}}} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-top:0.75rem;padding-bottom:0.75rem"><!-- wp:navigation {"fontSize":"small","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /-->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search…', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"999px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
