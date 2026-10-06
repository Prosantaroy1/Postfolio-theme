<?php
/**
 * Title: No results message
 * Slug: postfolio-blocks/hidden-no-results
 * Categories: postfolio-blocks-blog
 * Description: Message and search form shown when a query finds no posts.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Sorry, nothing was found here. Try a search instead.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search articles…', 'postfolio-blocks' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'postfolio-blocks' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->
