<?php
/**
 * Title: Live blog: update timeline
 * Slug: postfolio-blocks/live-blog
 * Categories: postfolio-blocks, postfolio-blocks-news
 * Keywords: live, updates, timeline, breaking, coverage, liveblog
 * Description: A live coverage block: pulsing "Live" badge, key points summary and a timeline of time-stamped updates (newest first). Duplicate an update to add a new one.
 * Inserter: true
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$postfolio_updates = array(
	array( '14:32', __( 'Officials confirm the next steps', 'postfolio-blocks' ), __( 'In a short statement this afternoon, organisers confirmed the plan will go ahead as scheduled, with a full update promised for tomorrow morning.', 'postfolio-blocks' ), true ),
	array( '13:05', __( 'What we know so far', 'postfolio-blocks' ), __( 'Our reporters on the ground say the situation is calm. Here is a summary of the main developments, which we will keep updating through the day.', 'postfolio-blocks' ), false ),
	array( '11:48', __( 'Reaction from the community', 'postfolio-blocks' ), __( 'Local residents and business owners have shared mixed reactions, with many welcoming the news and others asking for more detail.', 'postfolio-blocks' ), false ),
	array( '10:15', __( 'Coverage begins', 'postfolio-blocks' ), __( 'Welcome to our live coverage. Follow along here for the latest updates, photos and reaction as the story develops.', 'postfolio-blocks' ), false ),
);
?>
<!-- wp:group {"className":"postfolio-live","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-live" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"postfolio-live__badge"} -->
<p class="postfolio-live__badge"><?php esc_html_e( 'Live', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e( 'Updated every few minutes · Last update 14:32', 'postfolio-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-live__summary","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0.75rem"},"border":{"radius":"1rem","left":{"color":"var:preset|color|accent","width":"4px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-live__summary has-base-2-background-color has-background" style="border-radius:1rem;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Key points', 'postfolio-blocks' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'The plan goes ahead as scheduled, organisers confirm.', 'postfolio-blocks' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'A full update is expected tomorrow morning.', 'postfolio-blocks' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Reaction from residents has been mixed but mostly positive.', 'postfolio-blocks' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"postfolio-live__timeline","layout":{"type":"default"}} -->
<div class="wp-block-group postfolio-live__timeline"><?php foreach ( $postfolio_updates as $postfolio_update ) : ?><!-- wp:group {"tagName":"article","className":"postfolio-live__entry<?php echo $postfolio_update[3] ? ' is-pinned' : ''; ?>","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<article class="wp-block-group postfolio-live__entry<?php echo $postfolio_update[3] ? ' is-pinned' : ''; ?>"><!-- wp:paragraph {"className":"postfolio-live__time","textColor":"accent","fontSize":"small"} -->
<p class="postfolio-live__time has-accent-color has-text-color has-small-font-size"><?php echo esc_html( $postfolio_update[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $postfolio_update[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $postfolio_update[2] ); ?></p>
<!-- /wp:paragraph --></article>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
