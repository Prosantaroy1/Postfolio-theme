<?php
/**
 * Title: Logo cloud
 * Slug: postfolio-blocks/logo-cloud
 * Categories: postfolio-blocks, postfolio-blocks-showcase
 * Keywords: logos, clients, partners, trusted by
 * Description: A "trusted by" row of six client logos that light up on hover.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}}} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Trusted by teams at', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"postfolio-logo-cloud","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"8rem"}} -->
<div class="wp-block-group postfolio-logo-cloud"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-1.svg' ); ?>" alt="<?php echo esc_attr__( 'Nordline', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-2.svg' ); ?>" alt="<?php echo esc_attr__( 'Lumora', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-3.svg' ); ?>" alt="<?php echo esc_attr__( 'Apexa', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-4.svg' ); ?>" alt="<?php echo esc_attr__( 'Orbitly', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-5.svg' ); ?>" alt="<?php echo esc_attr__( 'Kitewave', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-6.svg' ); ?>" alt="<?php echo esc_attr__( 'Vertexa', 'postfolio-blocks' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
