<?php
/**
 * Title: Page: Agency landing
 * Slug: postfolio-blocks/page-landing-starter
 * Categories: postfolio-blocks, postfolio-blocks-pages
 * Keywords: agency, business, landing, services, pricing, team, portfolio
 * Description: A complete agency homepage for the Landing Page template: split hero with social proof, client logos, services, selected work, process, numbers, team, testimonial, pricing, FAQ and a closing call to action.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_img = function ( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
};

$postfolio_services = array(
	array( '01', __( 'Brand strategy', 'postfolio-blocks' ), __( 'Positioning, naming and messaging that make you the obvious choice.', 'postfolio-blocks' ) ),
	array( '02', __( 'Visual identity', 'postfolio-blocks' ), __( 'Logos, type and colour systems that work on every surface.', 'postfolio-blocks' ) ),
	array( '03', __( 'Website design', 'postfolio-blocks' ), __( 'Fast, accessible sites designed to turn visitors into customers.', 'postfolio-blocks' ) ),
	array( '04', __( 'Development', 'postfolio-blocks' ), __( 'WordPress and headless builds your team can edit with confidence.', 'postfolio-blocks' ) ),
	array( '05', __( 'Content & SEO', 'postfolio-blocks' ), __( 'Copy, structure and search strategy that bring the right traffic.', 'postfolio-blocks' ) ),
	array( '06', __( 'Growth marketing', 'postfolio-blocks' ), __( 'Campaigns, landing pages and testing that compound month after month.', 'postfolio-blocks' ) ),
);

$postfolio_work = array(
	array( 'demo/design-studio.jpg', __( 'Northwind Coffee', 'postfolio-blocks' ), __( 'Branding · Website', 'postfolio-blocks' ), __( '+140% online orders', 'postfolio-blocks' ) ),
	array( 'demo/business-city.jpg', __( 'Civic Downtown', 'postfolio-blocks' ), __( 'Strategy · Campaign', 'postfolio-blocks' ), __( '3× event sign-ups', 'postfolio-blocks' ) ),
	array( 'demo/tech-workspace.jpg', __( 'Localfirst App', 'postfolio-blocks' ), __( 'Product · Web app', 'postfolio-blocks' ), __( '42k users in 6 months', 'postfolio-blocks' ) ),
	array( 'demo/culture-gallery.jpg', __( 'The Small Museum', 'postfolio-blocks' ), __( 'Identity · Website', 'postfolio-blocks' ), __( '+65% ticket sales', 'postfolio-blocks' ) ),
);

$postfolio_steps = array(
	array( '01', __( 'Discover', 'postfolio-blocks' ), __( 'We listen, research and agree on what success looks like.', 'postfolio-blocks' ) ),
	array( '02', __( 'Define', 'postfolio-blocks' ), __( 'A clear plan, scope and timeline — no surprises later.', 'postfolio-blocks' ) ),
	array( '03', __( 'Design', 'postfolio-blocks' ), __( 'We sketch, prototype and test until it feels obvious.', 'postfolio-blocks' ) ),
	array( '04', __( 'Deliver', 'postfolio-blocks' ), __( 'Launch, measure and keep improving together.', 'postfolio-blocks' ) ),
);

$postfolio_team = array(
	array( 'portrait-1.svg', __( 'Maya Chen', 'postfolio-blocks' ), __( 'Founder & Strategy', 'postfolio-blocks' ) ),
	array( 'portrait-2.svg', __( 'Daniel Okafor', 'postfolio-blocks' ), __( 'Design Director', 'postfolio-blocks' ) ),
	array( 'portrait-3.svg', __( 'Sofia Rossi', 'postfolio-blocks' ), __( 'Lead Developer', 'postfolio-blocks' ) ),
	array( 'portrait-4.svg', __( 'Leo Fischer', 'postfolio-blocks' ), __( 'Growth & Content', 'postfolio-blocks' ) ),
);

$postfolio_plans = array(
	array(
		'name'     => __( 'Launch', 'postfolio-blocks' ),
		'desc'     => __( 'For new brands that need a strong start.', 'postfolio-blocks' ),
		'price'    => '$2,900',
		'unit'     => __( 'per project', 'postfolio-blocks' ),
		'features' => array( __( 'Brand essentials & logo', 'postfolio-blocks' ), __( '5-page website', 'postfolio-blocks' ), __( 'Basic SEO setup', 'postfolio-blocks' ), __( '2 rounds of revisions', 'postfolio-blocks' ) ),
		'featured' => false,
	),
	array(
		'name'     => __( 'Growth', 'postfolio-blocks' ),
		'desc'     => __( 'Our most popular plan for growing teams.', 'postfolio-blocks' ),
		'price'    => '$5,900',
		'unit'     => __( 'per project', 'postfolio-blocks' ),
		'features' => array( __( 'Full identity system', 'postfolio-blocks' ), __( 'Up to 15 pages + blog', 'postfolio-blocks' ), __( 'Content & SEO strategy', 'postfolio-blocks' ), __( 'Analytics & conversion setup', 'postfolio-blocks' ), __( '30 days of launch support', 'postfolio-blocks' ) ),
		'featured' => true,
	),
	array(
		'name'     => __( 'Partner', 'postfolio-blocks' ),
		'desc'     => __( 'An embedded team for ongoing work.', 'postfolio-blocks' ),
		'price'    => __( 'Custom', 'postfolio-blocks' ),
		'unit'     => __( 'monthly retainer', 'postfolio-blocks' ),
		'features' => array( __( 'Dedicated design & dev team', 'postfolio-blocks' ), __( 'Unlimited requests', 'postfolio-blocks' ), __( 'Monthly growth reports', 'postfolio-blocks' ), __( 'Priority support', 'postfolio-blocks' ) ),
		'featured' => false,
	),
);

$postfolio_contact  = postfolio_blocks_starter_page_url( 'contact' );
$postfolio_services_url = postfolio_blocks_starter_page_url( 'services' );
?>
<!-- wp:group {"align":"full","className":"postfolio-agency-hero","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"11rem","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull postfolio-agency-hero has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:11rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"54%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%"><!-- wp:paragraph {"className":"postfolio-hero-pill","fontSize":"small"} -->
<p class="postfolio-hero-pill has-small-font-size"><?php esc_html_e( 'Strategy · Design · Development', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","style":{"typography":{"fontSize":"clamp(2.5rem, 1.5rem + 3.6vw, 4.6rem)","fontWeight":"800","lineHeight":"1.04","letterSpacing":"-0.03em"}}} -->
<h1 class="wp-block-heading has-base-color has-text-color" style="font-size:clamp(2.5rem, 1.5rem + 3.6vw, 4.6rem);font-weight:800;letter-spacing:-0.03em;line-height:1.04"><?php esc_html_e( 'We build brands and websites people remember.', 'postfolio-blocks' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-muted","fontSize":"large"} -->
<p class="postfolio-muted has-large-font-size"><?php esc_html_e( 'An independent studio helping ambitious teams launch faster — with clear strategy, beautiful design and websites that actually convert.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( $postfolio_contact ); ?>"><?php esc_html_e( 'Start a project', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="#work"><?php esc_html_e( 'See our work', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"postfolio-trust","style":{"spacing":{"blockGap":"0.9rem","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group postfolio-trust" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"postfolio-avatar-stack","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group postfolio-avatar-stack"><?php foreach ( array_slice( $postfolio_team, 0, 4 ) as $postfolio_person ) : ?><!-- wp:image {"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo $postfolio_img( $postfolio_person[0] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="" style="border-radius:999px;object-fit:cover;width:40px;height:40px"/></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><span class="postfolio-stars" aria-hidden="true">★★★★★</span><br><?php esc_html_e( 'Rated 4.9/5 by 120+ teams', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"46%","className":"postfolio-hero-visual"} -->
<div class="wp-block-column is-vertically-aligned-center postfolio-hero-visual" style="flex-basis:46%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"1.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo $postfolio_img( 'demo/design-studio.jpg' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php esc_attr_e( 'Colour swatches and design tools on a studio desk', 'postfolio-blocks' ); ?>" style="border-radius:1.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"postfolio-hero-float","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.25rem","right":"1.25rem"},"blockGap":"0.15rem"},"border":{"radius":"1rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-hero-float has-contrast-color has-base-background-color has-text-color has-background" style="border-radius:1rem;padding-top:1rem;padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem"><!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"1.75rem","fontWeight":"800","lineHeight":"1.1"}}} -->
<p class="has-accent-color has-text-color" style="font-size:1.75rem;font-weight:800;line-height:1.1">+140%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'average growth in online sales', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/logo-cloud"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'What we do', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Services built around your goals', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'One senior team from the first workshop to launch day — and beyond.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-services","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide postfolio-services"><?php foreach ( $postfolio_services as $postfolio_service ) : ?><!-- wp:group {"className":"postfolio-service-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"1.25rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-service-card has-border-color" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.25rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"postfolio-service-icon"} -->
<p class="postfolio-service-icon"><?php echo esc_html( $postfolio_service[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_service[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $postfolio_service[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"postfolio-more-link","fontSize":"small"} -->
<p class="postfolio-more-link has-small-font-size"><a href="<?php echo esc_url( $postfolio_services_url ); ?>"><?php esc_html_e( 'Learn more →', 'postfolio-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"work","align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div id="work" class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge","backgroundColor":"base"} -->
<p class="postfolio-badge has-base-background-color has-background"><?php esc_html_e( 'Selected work', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Results we are proud of', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $postfolio_services_url ); ?>"><?php esc_html_e( 'All case studies', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-work-grid","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group alignwide postfolio-work-grid"><?php foreach ( $postfolio_work as $postfolio_project ) : ?><!-- wp:group {"className":"postfolio-work-card postfolio-story-card","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-work-card postfolio-story-card"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","className":"wp-block-post-featured-image","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image size-full has-custom-border wp-block-post-featured-image"><img src="<?php echo $postfolio_img( $postfolio_project[0] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( $postfolio_project[1] ); ?>" style="border-radius:1.25rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"0.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0.5rem"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_project[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"postfolio-result-pill","fontSize":"small"} -->
<p class="postfolio-result-pill has-small-font-size"><?php echo esc_html( $postfolio_project[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $postfolio_project[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'How we work', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'A clear path from idea to launch', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-steps","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide postfolio-steps"><?php foreach ( $postfolio_steps as $postfolio_step ) : ?><!-- wp:group {"className":"postfolio-step","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-step"><!-- wp:paragraph {"className":"postfolio-step__number"} -->
<p class="postfolio-step__number"><?php echo esc_html( $postfolio_step[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_step[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html( $postfolio_step[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/stats-counters"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Our team', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'The people behind the work', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Small on purpose: you always work with the senior people you meet.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-team","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","minimumColumnWidth":"13rem"}} -->
<div class="wp-block-group alignwide postfolio-team"><?php foreach ( $postfolio_team as $postfolio_person ) : ?><!-- wp:group {"className":"postfolio-team-card","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-team-card"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","style":{"border":{"radius":"1.25rem"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-bottom:0.75rem"><img src="<?php echo $postfolio_img( $postfolio_person[0] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( $postfolio_person[1] ); ?>" style="border-radius:1.25rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $postfolio_person[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_person[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/testimonial-spotlight"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-badge"} -->
<p class="postfolio-badge"><?php esc_html_e( 'Pricing', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Simple, honest pricing', 'postfolio-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Fixed prices, clear scope. No hourly surprises.', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"postfolio-pricing","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","minimumColumnWidth":"17rem"}} -->
<div class="wp-block-group alignwide postfolio-pricing"><?php foreach ( $postfolio_plans as $postfolio_plan ) : ?><!-- wp:group {"className":"postfolio-plan<?php echo $postfolio_plan['featured'] ? ' is-featured' : ''; ?>",<?php echo $postfolio_plan['featured'] ? '"backgroundColor":"contrast","textColor":"base",' : ''; ?>"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"1rem"},"border":{"radius":"1.5rem","width":"1px","color":"var:preset|color|base-2"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group postfolio-plan<?php echo $postfolio_plan['featured'] ? ' is-featured has-base-color has-contrast-background-color has-text-color has-background' : ''; ?> has-border-color" style="border-color:var(--wp--preset--color--base-2);border-width:1px;border-radius:1.5rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $postfolio_plan['name'] ); ?></h3>
<!-- /wp:heading --><?php if ( $postfolio_plan['featured'] ) : ?>

<!-- wp:paragraph {"className":"postfolio-plan__badge","fontSize":"small"} -->
<p class="postfolio-plan__badge has-small-font-size"><?php esc_html_e( 'Most popular', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --><?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"postfolio-muted"} -->
<p class="postfolio-muted"><?php echo esc_html( $postfolio_plan['desc'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"postfolio-plan__price"} -->
<p class="postfolio-plan__price"><strong><?php echo esc_html( $postfolio_plan['price'] ); ?></strong> <span><?php echo esc_html( $postfolio_plan['unit'] ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"postfolio-checklist"} -->
<ul class="wp-block-list postfolio-checklist"><?php foreach ( $postfolio_plan['features'] as $postfolio_feature ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $postfolio_feature ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"postfolio-plan__cta"} -->
<div class="wp-block-buttons postfolio-plan__cta"><!-- wp:button {"width":100<?php echo $postfolio_plan['featured'] ? ',"backgroundColor":"accent","textColor":"base"' : ',"className":"is-style-outline"'; ?>} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100<?php echo $postfolio_plan['featured'] ? '' : ' is-style-outline'; ?>"><a class="wp-block-button__link<?php echo $postfolio_plan['featured'] ? ' has-base-color has-accent-background-color has-text-color has-background' : ''; ?> wp-element-button" href="<?php echo esc_url( $postfolio_contact ); ?>"><?php echo $postfolio_plan['featured'] ? esc_html__( 'Get started', 'postfolio-blocks' ) : esc_html__( 'Talk to us', 'postfolio-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"postfolio-blocks/faq-modern"} /-->

<!-- wp:pattern {"slug":"postfolio-blocks/cta-split-image"} /-->
