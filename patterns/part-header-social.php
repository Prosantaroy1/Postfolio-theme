<?php
/**
 * Title: Header 03 (Logo + Menu + Social)
 * Slug: postfolio-blocks/part-header-social
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Content of the "Header 03 (Logo + Menu + Social)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-header postfolio-header-social","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-header postfolio-header-social" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.01em"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"fontSize":"small","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.6rem"}}}} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search…', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"999px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
