<?php
/**
 * Title: Image gallery
 * Slug: postfolio-blocks/gallery-grid
 * Categories: postfolio-blocks, postfolio-blocks-showcase, gallery
 * Keywords: gallery, photos, images
 * Description: A three-column cropped image gallery with rounded corners.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","className":"postfolio-badge"} -->
<p class="has-text-align-center postfolio-badge"><?php esc_html_e( 'Gallery', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Moments from the studio', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"full","align":"wide","className":"columns-default","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped columns-default"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-1.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 1', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-2.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 2', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-3.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 3', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-4.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 4', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-5.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 5', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.85rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo-6.svg' ); ?>" alt="<?php echo esc_attr__( 'Gallery image 6', 'postfolio-blocks' ); ?>" style="border-radius:0.85rem"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
