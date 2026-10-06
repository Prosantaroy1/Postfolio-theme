<?php
/**
 * Title: Header 06 (Sticky)
 * Slug: postfolio-blocks/part-header-sticky
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Content of the "Header 06 (Sticky)" template part.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-header postfolio-is-sticky","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-header postfolio-is-sticky" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.01em"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"fontSize":"small","style":{"spacing":{"blockGap":"1.75rem"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /-->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles…', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"999px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
