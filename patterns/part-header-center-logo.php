<?php
/**
 * Title: Header 02 (Center Logo + Menu)
 * Slug: postfolio-blocks/part-header-center-logo
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Content of the "Header 02 (Center Logo + Menu)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-header postfolio-header-center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-header postfolio-header-center" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.01em"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"fontSize":"small","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
