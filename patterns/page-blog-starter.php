<?php
/**
 * Title: Page: Personal blog home
 * Slug: postfolio-blocks/page-blog-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages, postfolio-blocks-posts
 * Keywords: blog, personal, homepage, journal, writer
 * Description: A warm personal blog homepage: intro with a photo, the latest story as a large feature, recent writing in two columns, topic links and a newsletter call to action.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_term_link = function ( $slug ) {
	$term = get_term_by( 'slug', $slug, 'category' );
	$link = $term ? get_term_link( $term ) : '';
	return $term && ! is_wp_error( $link ) ? $link : home_url( '/' );
};
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'A personal journal', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.3rem, 1.6rem + 2.6vw, 3.75rem)","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.3rem, 1.6rem + 2.6vw, 3.75rem);letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Notes on design, travel and living a little slower.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'I write about the things I make, the places I walk and the small habits that make a good day. New stories every week — pour a coffee and stay a while.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'blog' ) ); ?>"><?php esc_html_e( 'Read the blog', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'about' ) ); ?>"><?php esc_html_e( 'About me', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"postfolio-blog-hero-image","style":{"border":{"radius":"1.5rem"}}} -->
<figure class="wp-block-image size-full has-custom-border postfolio-blog-hero-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/lifestyle-coffee.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A cup of coffee on a wooden table', 'postfolio-blocks' ); ?>" style="border-radius:1.5rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"postfolio-kicker","fontSize":"small"} -->
<p class="postfolio-kicker has-small-font-size"><?php esc_html_e( 'Latest story', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":40,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"postfolio-feature-card postfolio-story-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1.5rem"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-feature-card postfolio-story-card has-base-2-background-color has-background" style="border-radius:1.5rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"1rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"blockGap":"1rem","padding":{"right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--20);flex-basis:45%"><!-- wp:post-terms {"term":"category","className":"postfolio-badge-accent"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"style":{"typography":{"fontSize":"clamp(1.6rem, 1.2rem + 1.4vw, 2.4rem)","lineHeight":"1.12"}}} /-->

<!-- wp:post-excerpt {"excerptLength":30,"textColor":"contrast-2"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:avatar {"size":28,"style":{"border":{"radius":"999px"}}} /-->

<!-- wp:post-author-name /-->

<!-- wp:post-date {"textColor":"contrast-2"} /-->

<!-- wp:post-time-to-read {"textColor":"contrast-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0.75rem"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-bottom:0.75rem"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Recent writing', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'blog' ) ); ?>"><?php esc_html_e( 'All posts →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":41,"query":{"perPage":6,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"postfolio-story-card postfolio-list-card","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-story-card postfolio-list-card"><!-- wp:post-featured-image {"isLink":true,"width":"180px","height":"140px","style":{"border":{"radius":"1rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textColor":"accent","className":"postfolio-kicker","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","style":{"typography":{"lineHeight":"1.25"}}} /-->

<!-- wp:post-excerpt {"excerptLength":14,"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"1.5rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.5rem;margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'What I write about', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"postfolio-topic-pills","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-buttons postfolio-topic-pills"><?php foreach ( postfolio_blocks_demo_categories() as $postfolio_slug => $postfolio_topic ) : ?><!-- wp:button {"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $postfolio_term_link( $postfolio_slug ) ); ?>"><?php echo esc_html( $postfolio_topic[0] ); ?></a></div>
<!-- /wp:button --><?php endforeach; ?></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-newsletter"} /-->
