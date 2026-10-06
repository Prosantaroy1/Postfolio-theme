<?php
/**
 * Title: Table of contents
 * Slug: postfolio-blocks/table-of-contents
 * Categories: postfolio-blocks, postfolio-blocks-blog
 * Keywords: toc, contents, headings, index
 * Description: Lists the headings of the post automatically. Place it at the top of a post or in a sidebar.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"className":"postfolio-toc","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group postfolio-toc has-base-2-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
<p class="has-small-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><strong><?php esc_html_e( 'In this article', 'postfolio-blocks' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"fontSize":"small"} -->
<ol class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'The headings of this post will be listed here automatically.', 'postfolio-blocks' ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->
