<?php
/**
 * Title: CTA: Let's work together
 * Slug: postfolio-blocks/cta-portfolio
 * Categories: postfolio-blocks, postfolio-blocks-sections, postfolio-blocks-showcase
 * Keywords: call to action, contact, hire, freelance, portfolio
 * Description: A full-width closing call to action for portfolios and studios, with an availability note, email link and contact button.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"full","className":"postfolio-cta-band","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-cta-band has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"},"layout":{"selfStretch":"fixed","flexSize":"40rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-availability","fontSize":"small"} -->
<p class="postfolio-availability has-small-font-size"><?php esc_html_e( 'Available for new projects', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base","style":{"typography":{"fontSize":"clamp(2rem, 1.4rem + 2.4vw, 3.4rem)","lineHeight":"1.08","letterSpacing":"-0.02em"}}} -->
<h2 class="wp-block-heading has-base-color has-text-color" style="font-size:clamp(2rem, 1.4rem + 2.4vw, 3.4rem);letter-spacing:-0.02em;line-height:1.08"><?php esc_html_e( 'Have a project in mind? Let’s make something good together.', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Start a project', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="mailto:hello@example.com">hello@example.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
