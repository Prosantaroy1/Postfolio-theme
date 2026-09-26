<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Title: Latest News: Split Layout with Sidebar
 * Slug: postfolio-blocks/latest-news-sidebar
 * Categories: postfolio-blocks, postfolio-blocks-posts, query
 * Description: A magazine news layout with main story list with thumbnails on the left and a sidebar widget column on the right.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"padding":{"bottom":"1rem"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--30);padding-bottom:1rem">
		<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Latest News', 'postfolio-blocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","fontSize":"small","style":{"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"1.2rem","right":"1.2rem"}}}} -->
			<div class="wp-block-button is-style-outline has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:0.4rem;padding-right:1.2rem;padding-bottom:0.4rem;padding-left:1.2rem"><?php esc_html_e( 'View All', 'postfolio-blocks' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"68%"} -->
		<div class="wp-block-column" style="flex-basis:68%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"1.5rem"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"width":"55%"} -->
					<div class="wp-block-column" style="flex-basis:55%">
						<!-- wp:paragraph {"style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"}},"fontSize":"small"} -->
						<p class="has-text-color has-background has-small-font-size" style="background-color:#d97706;color:#ffffff;border-radius:999px;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;display:inline-block"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
						<h3 class="wp-block-heading has-x-large-font-size" style="font-weight:700"><?php esc_html_e( 'Worth A Thousand Words', 'postfolio-blocks' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.8rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Theme Admin • October 17, 2008', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.9rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.9rem"><?php esc_html_e( 'Boat.', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"45%"} -->
					<div class="wp-block-column" style="flex-basis:45%">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"0.75rem"}}} -->
						<figure class="wp-block-image style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'News Thumbnail', 'postfolio-blocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"1.5rem"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column {"width":"55%"} -->
					<div class="wp-block-column" style="flex-basis:55%">
						<!-- wp:paragraph {"style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"0.6rem","right":"0.6rem"}},"border":{"radius":"999px"}},"fontSize":"small"} -->
						<p class="has-text-color has-background has-small-font-size" style="background-color:#d97706;color:#ffffff;border-radius:999px;padding-top:0.2rem;padding-right:0.6rem;padding-bottom:0.2rem;padding-left:0.6rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;display:inline-block"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"700"}}} -->
						<h3 class="wp-block-heading has-x-large-font-size" style="font-weight:700"><?php esc_html_e( 'Elements', 'postfolio-blocks' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.8rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.8rem"><?php esc_html_e( 'Theme Admin • September 5, 2008', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.9rem"}}} -->
						<p class="has-contrast-2-color has-text-color" style="font-size:0.9rem"><?php esc_html_e( 'The purpose of this HTML is to help determine what default settings are with CSS and to make sure that...', 'postfolio-blocks' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"45%"} -->
					<div class="wp-block-column" style="flex-basis:45%">
						<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"0.75rem"}}} -->
						<figure class="wp-block-image style-cover"><img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'News Thumbnail', 'postfolio-blocks' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/3;object-fit:cover"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">
			<!-- wp:group {"style":{"border":{"radius":"0.75rem"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.25rem","right":"1.25rem"},"blockGap":"1.25rem"}},"backgroundColor":"base-2"} -->
			<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:0.75rem;padding-top:1.5rem;padding-right:1.25rem;padding-bottom:1.5rem;padding-left:1.25rem">
				<!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php esc_html_e( 'Latest News', 'postfolio-blocks' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.15rem","bottom":"0.15rem","left":"0.5rem","right":"0.5rem"}},"border":{"radius":"999px"}},"fontSize":"small"} -->
					<p class="has-text-color has-background has-small-font-size" style="background-color:#d97706;color:#ffffff;border-radius:999px;padding-top:0.15rem;padding-right:0.5rem;padding-bottom:0.15rem;padding-left:0.5rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;display:inline-block"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
					<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Worth A Thousand Words', 'postfolio-blocks' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
					<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • October 17, 2008', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.15rem","bottom":"0.15rem","left":"0.5rem","right":"0.5rem"}},"border":{"radius":"999px"}},"fontSize":"small"} -->
					<p class="has-text-color has-background has-small-font-size" style="background-color:#d97706;color:#ffffff;border-radius:999px;padding-top:0.15rem;padding-right:0.5rem;padding-bottom:0.15rem;padding-left:0.5rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;display:inline-block"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
					<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'Elements', 'postfolio-blocks' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
					<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • September 5, 2008', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"color":{"background":"#d97706","text":"#ffffff"},"spacing":{"padding":{"top":"0.15rem","bottom":"0.15rem","left":"0.5rem","right":"0.5rem"}},"border":{"radius":"999px"}},"fontSize":"small"} -->
					<p class="has-text-color has-background has-small-font-size" style="background-color:#d97706;color:#ffffff;border-radius:999px;padding-top:0.15rem;padding-right:0.5rem;padding-bottom:0.15rem;padding-left:0.5rem;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;display:inline-block"><?php esc_html_e( 'UNCATEGORIZED', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":4,"fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
					<h4 class="wp-block-heading has-medium-font-size" style="font-weight:700"><?php esc_html_e( 'More Tags', 'postfolio-blocks' ); ?></h4>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"contrast-2","style":{"typography":{"fontSize":"0.75rem"}}} -->
					<p class="has-contrast-2-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'Theme Admin • June 21, 2008', 'postfolio-blocks' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
