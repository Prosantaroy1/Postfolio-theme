<?php
/**
 * Case study body markup, filled from  (see postfolio_blocks_case_study_markup()).
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:group {"align":"wide","className":"postfolio-case-facts","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"grid","minimumColumnWidth":"10rem"}} -->
<div class="wp-block-group alignwide postfolio-case-facts" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php foreach ( $d['facts'] as $postfolio_fact ) : ?><!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"contrast-2","fontSize":"small"} -->
<p class="postfolio-kicker has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_fact[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600"><?php echo esc_html( $postfolio_fact[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"postfolio-case-heading"} -->
<h2 class="wp-block-heading postfolio-case-heading"><?php esc_html_e( 'The challenge', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html( $d['challenge_lead'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $d['challenge'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"postfolio-case-heading"} -->
<h2 class="wp-block-heading postfolio-case-heading"><?php esc_html_e( 'The process', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"postfolio-case-steps","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide postfolio-case-steps"><?php foreach ( $d['steps'] as $postfolio_step ) : ?><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.6rem"},"border":{"radius":"1rem"}},"backgroundColor":"base-2"} -->
<div class="wp-block-column has-base-2-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-accent-color has-text-color" style="font-size:2rem;font-weight:700;line-height:1"><?php echo esc_html( $postfolio_step[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $postfolio_step[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_step[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/' . $d['image'] ) ); ?>" alt="<?php echo esc_attr( $d['image_alt'] ); ?>" style="border-radius:1.25rem"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"postfolio-case-heading"} -->
<h2 class="wp-block-heading postfolio-case-heading"><?php esc_html_e( 'The result', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $d['result'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote {"className":"is-style-plain postfolio-case-quote"} -->
<blockquote class="wp-block-quote is-style-plain postfolio-case-quote"><!-- wp:paragraph -->
<p><?php echo esc_html( $d['quote'] ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html( $d['cite'] ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:heading {"className":"postfolio-case-heading"} -->
<h2 class="wp-block-heading postfolio-case-heading"><?php esc_html_e( 'The impact', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"postfolio-case-metrics","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide postfolio-case-metrics"><?php foreach ( $d['metrics'] as $postfolio_metric ) : ?><!-- wp:column {"style":{"spacing":{"blockGap":"0.4rem","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|accent","width":"3px"}}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--accent);border-top-width:3px;padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(2.4rem, 1.8rem + 2vw, 3.5rem)","fontWeight":"700","lineHeight":"1","letterSpacing":"-0.02em"}}} -->
<p style="font-size:clamp(2.4rem, 1.8rem + 2vw, 3.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html( $postfolio_metric[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $postfolio_metric[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->
