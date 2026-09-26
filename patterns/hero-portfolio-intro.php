<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Hero: Portfolio Designer Intro
 * Slug: postfolio-blocks/hero-portfolio-intro
 * Categories: postfolio-blocks, postfolio-blocks-sections, banner
 * Description: A warm rounded hero banner featuring a bold designer introduction on the left and a portrait photo on the right.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"color":{"background":"#fff8f5"},"border":{"radius":"1.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background" style="background-color:#fff8f5;border-radius:1.5rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"contrast-2"} -->
			<p class="has-contrast-2-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'FREELANCE DIGITAL DESIGNER', 'postfolio-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
			<h1 class="wp-block-heading has-huge-font-size" style="font-weight:800;line-height:1.15;margin-top:1rem;margin-bottom:1.5rem"><?php printf( esc_html__( 'Hi, I\'m %sAndrew Garfield%s, and this is my portfolio.', 'postfolio-blocks' ), '<span style="color:#ff5a36">', '</span>' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#ff5a36","text":"#ffffff"},"border":{"radius":"0.5rem"},"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:0.5rem;background-color:#ff5a36;color:#ffffff;font-weight:700"><?php esc_html_e( 'Explore Projects →', 'postfolio-blocks' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","style":{"border":{"radius":"1.25rem"}}} -->
			<figure class="wp-block-image style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'Andrew Garfield Portfolio Portrait', 'postfolio-blocks' ); ?>" style="border-radius:1.25rem;aspect-ratio:4/5;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
