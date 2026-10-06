<?php
/**
 * Title: FAQ: accordion
 * Slug: postfolio-blocks/faq-modern
 * Categories: postfolio-blocks, postfolio-blocks-sections, text
 * Keywords: faq, questions, accordion, help
 * Description: Frequently asked questions as expandable panels next to a short introduction.
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
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'FAQ', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Questions, answered', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Cannot find what you are looking for? Send us a message and we will get back to you.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact us', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:details {"className":"postfolio-faq-item","style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
<details class="wp-block-details postfolio-faq-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><summary><?php esc_html_e( 'Do I need any plugins?', 'postfolio-blocks' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem"><?php esc_html_e( 'No. Every layout is built from core WordPress blocks, so the theme works on a fresh install.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"postfolio-faq-item","style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
<details class="wp-block-details postfolio-faq-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><summary><?php esc_html_e( 'Can I change the colors and fonts?', 'postfolio-blocks' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem"><?php esc_html_e( 'Yes. Open Appearance → Editor → Styles to pick a style variation, a color palette or a font pairing.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"postfolio-faq-item","style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
<details class="wp-block-details postfolio-faq-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><summary><?php esc_html_e( 'Is the theme translation ready?', 'postfolio-blocks' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem"><?php esc_html_e( 'Yes. All text in patterns is translatable and the theme supports right-to-left languages.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"postfolio-faq-item","style":{"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}}} -->
<details class="wp-block-details postfolio-faq-item" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1rem;padding-bottom:1rem"><summary><?php esc_html_e( 'Will my content survive a theme change?', 'postfolio-blocks' ); ?></summary><!-- wp:paragraph {"textColor":"contrast-2","style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
<p class="has-contrast-2-color has-text-color" style="margin-top:0.75rem"><?php esc_html_e( 'Yes. Content is stored as standard blocks, so it keeps working with any block theme.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
