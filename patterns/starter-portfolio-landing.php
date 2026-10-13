<?php
/**
 * Title: Page: Portfolio home
 * Slug: postfolio-blocks/starter-portfolio-landing
 * Categories: postfolio-blocks, postfolio-blocks-pages, postfolio-blocks-showcase
 * Keywords: portfolio, designer, freelancer, homepage, work, case study
 * Description: A complete portfolio homepage: intro with availability and key numbers, client logos, selected work from the "Work" category, services, about and experience, a testimonial and a closing call to action. Every section shares the same wide width.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_work_id  = postfolio_blocks_demo_term_id( 'work' );
$postfolio_work_tax = $postfolio_work_id ? ',"taxQuery":{"category":[' . $postfolio_work_id . ']}' : '';

$postfolio_services = array(
	array( '01', __( 'Product design', 'postfolio-blocks' ), __( 'Research, flows and interfaces for apps and web products people enjoy using.', 'postfolio-blocks' ) ),
	array( '02', __( 'Brand identity', 'postfolio-blocks' ), __( 'Logos, type and colour systems with guidelines your team can actually follow.', 'postfolio-blocks' ) ),
	array( '03', __( 'Web design & build', 'postfolio-blocks' ), __( 'Fast, accessible WordPress sites that are easy to edit after launch.', 'postfolio-blocks' ) ),
);

$postfolio_experience = array(
	array( __( '2023 — Now', 'postfolio-blocks' ), __( 'Independent designer', 'postfolio-blocks' ), __( 'Studio of one', 'postfolio-blocks' ) ),
	array( '2019 — 2023', __( 'Design lead', 'postfolio-blocks' ), 'Harbor Finance' ),
	array( '2016 — 2019', __( 'Senior product designer', 'postfolio-blocks' ), 'Northwind Labs' ),
	array( '2014 — 2016', __( 'Visual designer', 'postfolio-blocks' ), 'Atlas Studio' ),
);
?>
<!-- wp:group {"align":"full","className":"postfolio-portfolio-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-portfolio-hero" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"className":"postfolio-availability","fontSize":"small"} -->
<p class="postfolio-availability has-small-font-size"><?php esc_html_e( 'Available for new projects', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.4rem, 1.5rem + 3.2vw, 4.4rem)","lineHeight":"1.05","letterSpacing":"-0.03em"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.4rem, 1.5rem + 3.2vw, 4.4rem);letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'Hi, I’m Jordan — I design calm, useful', 'postfolio-blocks' ); ?> <mark class="has-inline-color has-accent-color" style="background-color:rgba(0,0,0,0)"><?php esc_html_e( 'digital products.', 'postfolio-blocks' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Product and brand designer helping startups and studios turn messy ideas into clear, beautiful work — from the first sketch to launch.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'work' ) ); ?>"><?php esc_html_e( 'View my work', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get in touch', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"postfolio-hero-stats","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group postfolio-hero-stats" style="border-top-color:var(--wp--preset--color--base-2);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)"><?php foreach ( array( array( '10+', __( 'years designing', 'postfolio-blocks' ) ), array( '60+', __( 'projects shipped', 'postfolio-blocks' ) ), array( '12', __( 'design awards', 'postfolio-blocks' ) ) ) as $postfolio_stat ) : ?><!-- wp:paragraph -->
<p><strong><?php echo esc_html( $postfolio_stat[0] ); ?></strong> <?php echo esc_html( $postfolio_stat[1] ); ?></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%","className":"postfolio-hero-visual"} -->
<div class="wp-block-column is-vertically-aligned-center postfolio-hero-visual" style="flex-basis:42%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"1.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-3.svg' ) ); ?>" alt="<?php esc_attr_e( 'Illustrated portrait of Jordan', 'postfolio-blocks' ); ?>" width="800" height="1000" style="border-radius:1.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"postfolio-hero-float","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"1.1rem","right":"1.1rem"},"blockGap":"0.1rem"},"border":{"radius":"1rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-hero-float has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:1rem;padding-top:0.9rem;padding-right:1.1rem;padding-bottom:0.9rem;padding-left:1.1rem"><!-- wp:paragraph {"className":"postfolio-kicker","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-kicker has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Currently', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600"><?php esc_html_e( 'Designing a calmer banking app', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/logo-cloud"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Selected work', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Projects I’m proud of', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( postfolio_blocks_starter_page_url( 'work' ) ); ?>"><?php esc_html_e( 'All projects', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":95,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","sticky":"","inherit":false<?php echo $postfolio_work_tax; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"className":"postfolio-work-card postfolio-story-card","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-work-card postfolio-story-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"1.25rem"}}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"postfolio-tag-row","fontSize":"small","style":{"spacing":{"margin":{"top":"0.75rem"}}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large","style":{"typography":{"lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"excerptLength":20,"textColor":"contrast-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"postfolio-badge","backgroundColor":"base"} -->
<p class="postfolio-badge has-base-background-color has-background"><?php esc_html_e( 'What I do', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Ways we can work together', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-services","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide postfolio-services"><?php foreach ( $postfolio_services as $postfolio_service ) : ?><!-- wp:group {"className":"postfolio-service-card","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"1.25rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-service-card has-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.25rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"postfolio-service-icon"} -->
<p class="postfolio-service-icon"><?php echo esc_html( $postfolio_service[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_service[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $postfolio_service[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"1.25rem"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'About', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Design that feels obvious — afterwards.', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'For over ten years I have helped teams simplify complicated products. I start with the people who will use the thing, keep the process open, and ship work that holds up long after launch.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'When I am not designing, I am usually walking somewhere with a camera, or teaching a workshop on design systems.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"className":"postfolio-kicker","fontSize":"small","style":{"spacing":{"padding":{"bottom":"0.75rem"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"2px"}}}} -->
<p class="postfolio-kicker has-small-font-size" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:2px;padding-bottom:0.75rem"><?php esc_html_e( 'Experience', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --><?php foreach ( $postfolio_experience as $postfolio_job ) : ?>

<!-- wp:group {"className":"postfolio-experience-row","style":{"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem"}},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-experience-row" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-width:1px;padding-top:1.1rem;padding-bottom:1.1rem"><!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><?php echo esc_html( $postfolio_job[1] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_job[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_job[0] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/testimonial-spotlight"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-portfolio"} /-->
