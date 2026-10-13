<?php
/**
 * Title: Template: single audio post
 * Slug: postfolio-blocks/template-body-single-audio
 * Categories: postfolio-blocks-pages
 * Description: Content of the single-format-audio.html template: a podcast-style header with square cover art next to the episode title, then the player and show notes.
 * Inserter: false
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:template-part {"slug":"header","tagName":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","className":"postfolio-format-audio","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull postfolio-format-audio"><!-- wp:group {"align":"wide","className":"postfolio-audio-hero","backgroundColor":"base-2","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"1.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide postfolio-audio-hero has-base-2-background-color has-background" style="border-radius:1.5rem;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:34%"><!-- wp:post-featured-image {"aspectRatio":"1","className":"postfolio-cover-art","style":{"border":{"radius":"1rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66%","style":{"spacing":{"blockGap":"0.9rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66%"><!-- wp:paragraph {"className":"postfolio-format-badge"} -->
<p class="postfolio-format-badge"><?php esc_html_e( 'Listen', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"fontSize":"huge"} /-->

<!-- wp:post-excerpt {"textColor":"contrast-2"} /-->

<!-- wp:group {"className":"postfolio-meta-row","style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-meta-row has-small-font-size"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:pattern {"slug":"postfolio-blocks/post-footer"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/related-posts"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"comments","tagName":"section","className":"postfolio-comments-area"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","area":"footer"} /-->
