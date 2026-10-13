<?php
/**
 * Demo content for starter sites.
 *
 * Creates a small, realistic set of categories, tags and posts (with
 * featured images bundled in /assets/images/demo) plus a navigation menu,
 * so a freshly imported starter site looks complete. Everything is
 * tracked in one option and updated in place on re-import, never duplicated.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Demo categories: slug => array( name, description ).
 *
 * @return array<string, array{0: string, 1: string}>
 */
function postfolio_blocks_demo_categories() {
	return array(
		'technology' => array( __( 'Technology', 'postfolio-blocks' ), __( 'Software, science and the tools that shape everyday life.', 'postfolio-blocks' ) ),
		'design'     => array( __( 'Design', 'postfolio-blocks' ), __( 'Graphic design, architecture and the craft of making things.', 'postfolio-blocks' ) ),
		'travel'     => array( __( 'Travel', 'postfolio-blocks' ), __( 'Slow journeys, remote places and the people who live there.', 'postfolio-blocks' ) ),
		'culture'    => array( __( 'Culture', 'postfolio-blocks' ), __( 'Art, music, books and the ideas everyone is talking about.', 'postfolio-blocks' ) ),
		'business'   => array( __( 'Business', 'postfolio-blocks' ), __( 'Independent companies, cities and the new economy.', 'postfolio-blocks' ) ),
		'lifestyle'  => array( __( 'Lifestyle', 'postfolio-blocks' ), __( 'Food, homes, habits and living well.', 'postfolio-blocks' ) ),
	);
}

/**
 * Demo posts, newest first.
 *
 * @return array<string, array<string, mixed>>
 */
function postfolio_blocks_demo_posts() {
	return array(
		'high-atlas'       => array(
			'title'    => __( 'Seven days on foot through the High Atlas', 'postfolio-blocks' ),
			'category' => 'travel',
			'tags'     => array( 'editors-pick', 'long-read', 'outdoors' ),
			'image'    => 'travel-mountains.jpg',
			'excerpt'  => __( 'Mule tracks, mountain villages and the slow pleasure of walking from one valley to the next with nothing but a pack and a rough map.', 'postfolio-blocks' ),
			'quote'    => __( 'Up here, distance is measured in cups of tea rather than kilometres.', 'postfolio-blocks' ),
			'points'   => array( __( 'Walk in spring or autumn, when the passes are clear and the days are mild.', 'postfolio-blocks' ), __( 'Hire a local guide — the paths change after every winter.', 'postfolio-blocks' ), __( 'Pack light: villages along the way offer simple rooms and hot meals.', 'postfolio-blocks' ) ),
		),
		'bauhaus'          => array(
			'title'    => __( 'Why Bauhaus still shapes the way we design', 'postfolio-blocks' ),
			'category' => 'design',
			'tags'     => array( 'editors-pick', 'history' ),
			'image'    => 'design-bauhaus.jpg',
			'excerpt'  => __( 'A school that lasted only fourteen years still decides how our chairs, posters and apps look. We traced its ideas from Dessau to your phone screen.', 'postfolio-blocks' ),
			'quote'    => __( 'Good design is not decoration added at the end. It is the decision you make at the start.', 'postfolio-blocks' ),
			'points'   => array( __( 'Form follows function — every element has a job to do.', 'postfolio-blocks' ), __( 'Primary colours and simple shapes create instant hierarchy.', 'postfolio-blocks' ), __( 'Craft and industry belong together, not in separate rooms.', 'postfolio-blocks' ) ),
		),
		'local-first'      => array(
			'title'    => __( 'The quiet rise of local-first software', 'postfolio-blocks' ),
			'category' => 'technology',
			'tags'     => array( 'software', 'privacy' ),
			'image'    => 'tech-workspace.jpg',
			'excerpt'  => __( 'Apps that keep your data on your own device — and still sync everywhere — are moving from research papers to the tools we use every day.', 'postfolio-blocks' ),
			'quote'    => __( 'The fastest server is the one you never have to call.', 'postfolio-blocks' ),
			'points'   => array( __( 'Your work stays available offline, on a plane or in a tunnel.', 'postfolio-blocks' ), __( 'Changes merge automatically when devices reconnect.', 'postfolio-blocks' ), __( 'You own the files, even if the company disappears.', 'postfolio-blocks' ) ),
		),
		'coffee-ritual'    => array(
			'title'    => __( 'The case for a slower morning ritual', 'postfolio-blocks' ),
			'category' => 'lifestyle',
			'tags'     => array( 'habits', 'food' ),
			'image'    => 'lifestyle-coffee.jpg',
			'excerpt'  => __( 'Twenty unhurried minutes with a good cup of coffee might be the most productive part of your day. Here is how to protect them.', 'postfolio-blocks' ),
			'quote'    => __( 'The day goes the way the first half hour goes.', 'postfolio-blocks' ),
			'points'   => array( __( 'Leave your phone in another room until the cup is finished.', 'postfolio-blocks' ), __( 'Make it by hand — the process is the point.', 'postfolio-blocks' ), __( 'Write down one thing that would make today a good day.', 'postfolio-blocks' ) ),
		),
		'small-museums'    => array(
			'title'    => __( 'Small museums are having a big moment', 'postfolio-blocks' ),
			'category' => 'culture',
			'tags'     => array( 'editors-pick', 'art' ),
			'image'    => 'culture-gallery.jpg',
			'excerpt'  => __( 'Forget the blockbuster queues. Single-room galleries and house museums are drawing new visitors with intimate, surprising collections.', 'postfolio-blocks' ),
			'quote'    => __( 'You can see everything in an hour — and remember it for years.', 'postfolio-blocks' ),
			'points'   => array( __( 'Curators talk to visitors directly, often on the gallery floor.', 'postfolio-blocks' ), __( 'Collections focus on one place, one maker or one idea.', 'postfolio-blocks' ), __( 'Tickets are cheap, and many are free one evening a week.', 'postfolio-blocks' ) ),
		),
		'indie-publishers' => array(
			'title'    => __( 'How independent publishers are growing again', 'postfolio-blocks' ),
			'category' => 'business',
			'tags'     => array( 'media', 'startups' ),
			'image'    => 'business-growth.jpg',
			'excerpt'  => __( 'Newsletters, memberships and print are back. Small media companies explain the numbers behind their comeback.', 'postfolio-blocks' ),
			'quote'    => __( 'A thousand readers who pay beat a million who scroll past.', 'postfolio-blocks' ),
			'points'   => array( __( 'Reader revenue is steadier than advertising.', 'postfolio-blocks' ), __( 'A clear niche makes every story easier to sell.', 'postfolio-blocks' ), __( 'Small teams publish less, but publish better.', 'postfolio-blocks' ) ),
		),
		'space-race'       => array(
			'title'    => __( 'What the new space race means for the rest of us', 'postfolio-blocks' ),
			'category' => 'technology',
			'tags'     => array( 'editors-pick', 'science' ),
			'image'    => 'tech-orbit.jpg',
			'excerpt'  => __( 'Cheaper rockets and tiny satellites are changing weather forecasts, farming and internet access far from any launch pad.', 'postfolio-blocks' ),
			'quote'    => __( 'The most important thing in orbit is the data it sends back down.', 'postfolio-blocks' ),
			'points'   => array( __( 'Satellite internet is reaching remote schools and clinics.', 'postfolio-blocks' ), __( 'Farmers use daily images to water only where it is needed.', 'postfolio-blocks' ), __( 'Space debris is now a problem everyone has to solve together.', 'postfolio-blocks' ) ),
		),
		'slow-sailing'     => array(
			'title'    => __( 'Slow sailing: a coastline at four knots', 'postfolio-blocks' ),
			'category' => 'travel',
			'tags'     => array( 'outdoors', 'sea' ),
			'image'    => 'travel-sea.jpg',
			'excerpt'  => __( 'A week aboard a small wooden boat, following the wind instead of a schedule, taught us more about the coast than any road trip.', 'postfolio-blocks' ),
			'quote'    => __( 'The sea decides the itinerary. You only choose the snacks.', 'postfolio-blocks' ),
			'points'   => array( __( 'Book a skippered trip if you are new to sailing.', 'postfolio-blocks' ), __( 'Harbour towns are best explored in the early evening.', 'postfolio-blocks' ), __( 'Bring layers — it is always colder on the water.', 'postfolio-blocks' ) ),
		),
		'color-studio'     => array(
			'title'    => __( 'Inside a studio that designs with colour first', 'postfolio-blocks' ),
			'category' => 'design',
			'tags'     => array( 'studio-visit', 'colour' ),
			'image'    => 'design-studio.jpg',
			'excerpt'  => __( 'Before a single line is drawn, this small studio picks a palette. Their method turns brand projects into bold, memorable identities.', 'postfolio-blocks' ),
			'quote'    => __( 'Colour is the first thing people notice and the last thing they forget.', 'postfolio-blocks' ),
			'points'   => array( __( 'Start with three colours: one loud, one calm, one neutral.', 'postfolio-blocks' ), __( 'Test the palette in print and on screen on day one.', 'postfolio-blocks' ), __( 'Check contrast early so the design stays accessible.', 'postfolio-blocks' ) ),
		),
		'vinyl'            => array(
			'title'    => __( 'Vinyl is back — and it is not just nostalgia', 'postfolio-blocks' ),
			'category' => 'culture',
			'tags'     => array( 'music' ),
			'image'    => 'culture-vinyl.jpg',
			'excerpt'  => __( 'Record sales keep climbing, driven by listeners who were born long after the CD. We asked them why they choose to press play the hard way.', 'postfolio-blocks' ),
			'quote'    => __( 'An album on vinyl asks for twenty minutes of attention. That is the feature.', 'postfolio-blocks' ),
			'points'   => array( __( 'Artwork and liner notes are part of the experience again.', 'postfolio-blocks' ), __( 'Independent record shops have become meeting places.', 'postfolio-blocks' ), __( 'Many buyers also stream — vinyl is how they support artists.', 'postfolio-blocks' ) ),
		),
		'people-downtown'  => array(
			'title'    => __( 'The city that rebuilt its downtown around people', 'postfolio-blocks' ),
			'category' => 'business',
			'tags'     => array( 'cities' ),
			'image'    => 'business-city.jpg',
			'excerpt'  => __( 'Wider pavements, fewer cars and late-night shops brought life back to an empty centre — and the local businesses followed.', 'postfolio-blocks' ),
			'quote'    => __( 'We designed the streets for staying, not for passing through.', 'postfolio-blocks' ),
			'points'   => array( __( 'Footfall rose within the first year of the changes.', 'postfolio-blocks' ), __( 'Empty shops became studios, cafés and workshops.', 'postfolio-blocks' ), __( 'Residents now help decide how public space is used.', 'postfolio-blocks' ) ),
		),
		'houseplants'      => array(
			'title'    => __( 'Houseplants, light and the art of paying attention', 'postfolio-blocks' ),
			'category' => 'lifestyle',
			'tags'     => array( 'home', 'habits' ),
			'image'    => 'lifestyle-plants.jpg',
			'excerpt'  => __( 'Keeping plants alive is less about green fingers and more about noticing. A simple guide to light, water and patience.', 'postfolio-blocks' ),
			'quote'    => __( 'Most plants are not killed by neglect, but by too much love and too much water.', 'postfolio-blocks' ),
			'points'   => array( __( 'Move plants closer to the window in winter.', 'postfolio-blocks' ), __( 'Water when the top of the soil is dry, not on a schedule.', 'postfolio-blocks' ), __( 'Rotate pots every week so they grow evenly.', 'postfolio-blocks' ) ),
		),
	);
}

/**
 * Get the ID of a demo term by slug (0 when it does not exist).
 *
 * @param string $slug     Term slug.
 * @param string $taxonomy Taxonomy name.
 * @return int
 */
function postfolio_blocks_demo_term_id( $slug, $taxonomy = 'category' ) {
	$term = get_term_by( 'slug', $slug, $taxonomy );
	return $term ? (int) $term->term_id : 0;
}

/**
 * Build the block markup for a demo post.
 *
 * @param array<string, mixed> $post Demo post definition.
 * @return string
 */
function postfolio_blocks_demo_post_content( $post ) {
	$items = '';
	foreach ( $post['points'] as $point ) {
		$items .= '<!-- wp:list-item --><li>' . esc_html( $point ) . '</li><!-- /wp:list-item -->';
	}

	$paragraph = function ( $text ) {
		return '<!-- wp:paragraph --><p>' . esc_html( $text ) . '</p><!-- /wp:paragraph -->' . "\n\n";
	};
	$heading   = function ( $text ) {
		return '<!-- wp:heading --><h2 class="wp-block-heading">' . esc_html( $text ) . '</h2><!-- /wp:heading -->' . "\n\n";
	};

	return '<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">' . esc_html( $post['excerpt'] ) . '</p><!-- /wp:paragraph -->' . "\n\n"
		. $paragraph( __( 'It started as a small idea and grew into something much bigger. Over the past few months we spoke to the people closest to the story — the ones doing the work, not just talking about it — to understand what is really changing and why it matters now.', 'postfolio-blocks' ) )
		. $heading( __( 'What is changing', 'postfolio-blocks' ) )
		. $paragraph( __( 'The short answer is: more than most people expect. What once felt like a niche interest has quietly become part of everyday life, and the habits around it are shifting just as quickly. Three things stood out in almost every conversation we had.', 'postfolio-blocks' ) )
		. '<!-- wp:list --><ul class="wp-block-list">' . $items . '</ul><!-- /wp:list -->' . "\n\n"
		. '<!-- wp:quote --><blockquote class="wp-block-quote"><!-- wp:paragraph --><p>' . esc_html( $post['quote'] ) . '</p><!-- /wp:paragraph --></blockquote><!-- /wp:quote -->' . "\n\n"
		. $heading( __( 'Why it matters', 'postfolio-blocks' ) )
		. $paragraph( __( 'Small changes add up. Each of these shifts on its own looks modest, but together they point to a different way of working, travelling and spending time — one that values quality over speed and attention over noise.', 'postfolio-blocks' ) )
		. $paragraph( __( 'Not everyone agrees on where this leads, and that is part of what makes it interesting. The people we met were optimistic, but practical: they know that lasting change takes patience, good tools and a community that shows up.', 'postfolio-blocks' ) )
		. $heading( __( 'What comes next', 'postfolio-blocks' ) )
		. $paragraph( __( 'Expect the ideas here to spread further over the next year. If you want to try them for yourself, start small, pay attention to what works, and share what you learn — that is exactly how this story began.', 'postfolio-blocks' ) );
}

/**
 * Copy a bundled demo image into the media library (or reuse it).
 *
 * @param string $file  File name inside /assets/images/demo.
 * @param string $title Attachment title and alt text.
 * @param int    $known Previously imported attachment ID.
 * @return int Attachment ID, or 0 on failure.
 */
function postfolio_blocks_demo_image( $file, $title, $known ) {
	if ( $known && 'attachment' === get_post_type( $known ) ) {
		return (int) $known;
	}

	$path = get_theme_file_path( 'assets/images/demo/' . $file );
	if ( ! is_readable( $path ) ) {
		return 0;
	}

	$upload = wp_upload_bits( 'postfolio-' . $file, null, file_get_contents( $path ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
	if ( ! empty( $upload['error'] ) ) {
		return 0;
	}

	$attachment_id = wp_insert_attachment(
		array(
			'post_title'     => $title,
			'post_mime_type' => 'image/jpeg',
			'post_status'    => 'inherit',
		),
		$upload['file']
	);

	if ( is_wp_error( $attachment_id ) || ! $attachment_id ) {
		return 0;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	wp_update_attachment_metadata( $attachment_id, wp_generate_attachment_metadata( $attachment_id, $upload['file'] ) );
	update_post_meta( $attachment_id, '_wp_attachment_image_alt', $title );

	return (int) $attachment_id;
}

/**
 * Create or update the demo categories, tags, posts and images.
 *
 * @return array{posts: int} Summary.
 */
function postfolio_blocks_import_demo_content() {
	$state = get_option( 'postfolio_blocks_demo_content', array() );
	$state = wp_parse_args( is_array( $state ) ? $state : array(), array( 'posts' => array(), 'images' => array() ) );

	foreach ( postfolio_blocks_demo_categories() as $slug => $category ) {
		if ( ! postfolio_blocks_demo_term_id( $slug ) ) {
			wp_insert_term( $category[0], 'category', array( 'slug' => $slug, 'description' => $category[1] ) );
		}
	}

	if ( ! postfolio_blocks_demo_term_id( 'editors-pick', 'post_tag' ) ) {
		wp_insert_term( __( 'Editor’s pick', 'postfolio-blocks' ), 'post_tag', array( 'slug' => 'editors-pick' ) );
	}

	$index = 0;
	foreach ( postfolio_blocks_demo_posts() as $key => $post ) {
		$image_id = postfolio_blocks_demo_image(
			$post['image'],
			$post['title'],
			isset( $state['images'][ $post['image'] ] ) ? (int) $state['images'][ $post['image'] ] : 0
		);

		$postarr = array(
			'post_title'   => $post['title'],
			'post_excerpt' => $post['excerpt'],
			'post_content' => wp_slash( postfolio_blocks_demo_post_content( $post ) ),
			'post_status'  => 'publish',
			'post_type'    => 'post',
		);

		$existing = isset( $state['posts'][ $key ] ) ? get_post( $state['posts'][ $key ] ) : null;

		if ( $existing && 'post' === $existing->post_type && 'trash' !== $existing->post_status ) {
			$postarr['ID'] = $existing->ID;
			$post_id       = wp_update_post( $postarr, true );
		} else {
			// Stagger dates so the newest demo stories lead the homepage.
			$postarr['post_date'] = gmdate( 'Y-m-d H:i:s', current_time( 'timestamp' ) - ( $index * 19 + 2 ) * HOUR_IN_SECONDS ); // phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested
			$post_id              = wp_insert_post( $postarr, true );
		}

		++$index;

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		wp_set_post_categories( $post_id, array( postfolio_blocks_demo_term_id( $post['category'] ) ) );
		// Tags are matched by slug first, so "long-read" becomes the tag "Long read".
		$tags = array();
		foreach ( $post['tags'] as $tag ) {
			$tags[] = 'editors-pick' === $tag ? $tag : ucfirst( str_replace( '-', ' ', $tag ) );
		}
		wp_set_post_tags( $post_id, $tags );

		if ( $image_id ) {
			set_post_thumbnail( $post_id, $image_id );
			wp_update_post( array( 'ID' => $image_id, 'post_parent' => $post_id ) );
			$state['images'][ $post['image'] ] = $image_id;
		}

		$state['posts'][ $key ] = (int) $post_id;
	}

	$state = postfolio_blocks_import_demo_comments( $state );

	update_option( 'postfolio_blocks_demo_content', $state, false );

	return array( 'posts' => count( $state['posts'] ) );
}

/**
 * Add a few approved reader comments to some demo posts (once per post), so
 * comment sections and "most discussed" lists have something to show.
 *
 * @param array<string, mixed> $state Demo content state.
 * @return array<string, mixed> Updated state.
 */
function postfolio_blocks_import_demo_comments( $state ) {
	$counts   = array(
		'bauhaus'       => 6,
		'local-first'   => 5,
		'space-race'    => 4,
		'small-museums' => 3,
		'coffee-ritual' => 2,
		'vinyl'         => 2,
	);
	$readers  = array( 'Maya Patel', 'Jonas Berg', 'Amara Okafor', 'Leo Fischer', 'Sofia Rossi', 'Daniel Kim' );
	$comments = array(
		__( 'Really enjoyed this — it put into words something I have been thinking about for a while.', 'postfolio-blocks' ),
		__( 'Great piece. The second section especially changed how I look at the whole topic.', 'postfolio-blocks' ),
		__( 'Saving this to share with my team on Monday. Thank you for writing it.', 'postfolio-blocks' ),
		__( 'I would love a follow-up that goes deeper into what comes next.', 'postfolio-blocks' ),
		__( 'Beautifully written and refreshingly calm. More of this, please!', 'postfolio-blocks' ),
		__( 'I tried this myself last month and can confirm: it is worth it.', 'postfolio-blocks' ),
	);

	$state['comments'] = isset( $state['comments'] ) && is_array( $state['comments'] ) ? $state['comments'] : array();

	foreach ( $counts as $key => $count ) {
		if ( ! empty( $state['comments'][ $key ] ) || empty( $state['posts'][ $key ] ) ) {
			continue;
		}

		$post_id = (int) $state['posts'][ $key ];
		$base    = strtotime( get_post_field( 'post_date', $post_id ) );

		for ( $i = 0; $i < $count; $i++ ) {
			$name = $readers[ ( $i + strlen( $key ) ) % count( $readers ) ];

			wp_insert_comment(
				array(
					'comment_post_ID'      => $post_id,
					'comment_author'       => $name,
					'comment_author_email' => sanitize_title( $name ) . '@example.com',
					'comment_content'      => $comments[ ( $i + $count ) % count( $comments ) ],
					'comment_approved'     => 1,
					'comment_date'         => gmdate( 'Y-m-d H:i:s', $base + ( $i + 1 ) * 47 * MINUTE_IN_SECONDS ),
				)
			);
		}

		$state['comments'][ $key ] = $count;
	}

	return $state;
}

/**
 * Create or update the starter site navigation menu.
 *
 * Header navigation blocks without a saved menu show the most recently
 * published menu, so the new menu appears in the header straight away.
 *
 * @param array<string, int> $page_ids    Imported page IDs keyed by page key.
 * @param bool               $with_topics Link the demo categories (news sites) or only the pages.
 * @return int Navigation post ID.
 */
function postfolio_blocks_import_demo_menu( $page_ids, $with_topics = true ) {
	$links    = array();
	$add_page = function ( $key ) use ( &$links, $page_ids ) {
		if ( isset( $page_ids[ $key ] ) ) {
			$links[] = array( get_the_title( $page_ids[ $key ] ), 'page', $page_ids[ $key ], get_permalink( $page_ids[ $key ] ), 'post-type' );
		}
	};

	if ( ! $with_topics ) {
		// Portfolio-style sites: every page of the starter site, in order.
		foreach ( array_keys( $page_ids ) as $key ) {
			$add_page( $key );
		}
	} else {
		$add_page( 'home' );

		foreach ( array_slice( postfolio_blocks_demo_categories(), 0, 4, true ) as $slug => $category ) {
			$term_id = postfolio_blocks_demo_term_id( $slug );
			if ( $term_id ) {
				$links[] = array( $category[0], 'category', $term_id, get_term_link( $term_id, 'category' ), 'taxonomy' );
			}
		}

		$add_page( 'about' );
		$add_page( 'contact' );
	}

	$content = '';
	foreach ( $links as $link ) {
		$content .= get_comment_delimited_block_content(
			'core/navigation-link',
			array(
				'label' => $link[0],
				'type'  => $link[1],
				'id'    => (int) $link[2],
				'url'   => is_wp_error( $link[3] ) ? '' : $link[3],
				'kind'  => $link[4],
			),
			''
		);
	}

	$state   = get_option( 'postfolio_blocks_demo_content', array() );
	$menu_id = isset( $state['menu'] ) ? (int) $state['menu'] : 0;
	$postarr = array(
		'post_title'   => __( 'Starter site menu', 'postfolio-blocks' ),
		'post_content' => wp_slash( $content ),
		'post_status'  => 'publish',
		'post_type'    => 'wp_navigation',
	);

	if ( $menu_id && 'wp_navigation' === get_post_type( $menu_id ) && 'trash' !== get_post_status( $menu_id ) ) {
		$postarr['ID'] = $menu_id;
		$menu_id       = wp_update_post( $postarr, true );
	} else {
		$menu_id = wp_insert_post( $postarr, true );
	}

	if ( is_wp_error( $menu_id ) ) {
		return 0;
	}

	$state         = is_array( $state ) ? $state : array();
	$state['menu'] = (int) $menu_id;
	update_option( 'postfolio_blocks_demo_content', $state, false );

	return (int) $menu_id;
}

/**
 * Demo portfolio projects: posts in the "Work" category that open in the
 * Case Study template.
 *
 * @return array<string, array<string, mixed>>
 */
function postfolio_blocks_demo_projects() {
	return array(
		'northwind' => array(
			'title'   => __( 'Northwind Coffee: a brand that feels like home', 'postfolio-blocks' ),
			'excerpt' => __( 'A new identity, packaging system and online shop for a much-loved local roaster.', 'postfolio-blocks' ),
			'tags'    => array( 'Branding', 'Website' ),
			'image'   => 'lifestyle-coffee.jpg',
			'data'    => array(),
		),
		'harbor'    => array(
			'title'   => __( 'Harbor Finance: a calmer way to bank', 'postfolio-blocks' ),
			'excerpt' => __( 'Redesigning sign-up and the everyday app experience for a fast-growing fintech.', 'postfolio-blocks' ),
			'tags'    => array( 'Product', 'App' ),
			'image'   => 'tech-workspace.jpg',
			'data'    => array(
				'facts'          => array(
					array( __( 'Client', 'postfolio-blocks' ), 'Harbor Finance' ),
					array( __( 'Year', 'postfolio-blocks' ), '2025' ),
					array( __( 'Role', 'postfolio-blocks' ), __( 'Product design', 'postfolio-blocks' ) ),
					array( __( 'Timeline', 'postfolio-blocks' ), __( '4 months', 'postfolio-blocks' ) ),
				),
				'challenge_lead' => __( 'Customers found the old app confusing, and half of them abandoned sign-up before they ever saw their account.', 'postfolio-blocks' ),
				'challenge'      => __( 'Harbor needed a sign-up that felt as simple as opening a door, and an app that answered the one question people really have: am I okay this month?', 'postfolio-blocks' ),
				'image'          => 'tech-orbit.jpg',
				'image_alt'      => __( 'Abstract illustration of a planet and a satellite', 'postfolio-blocks' ),
				'result'         => __( 'We cut sign-up from eleven screens to four and rebuilt the home screen around a single, friendly summary.', 'postfolio-blocks' ),
				'quote'          => __( 'Support tickets about sign-up dropped to almost zero in the first month.', 'postfolio-blocks' ),
				'cite'           => __( 'Amara Okafor, Head of Product', 'postfolio-blocks' ),
				'metrics'        => array(
					array( '+48%', __( 'more completed sign-ups', 'postfolio-blocks' ) ),
					array( '-62%', __( 'support tickets', 'postfolio-blocks' ) ),
					array( '4.8★', __( 'app store rating', 'postfolio-blocks' ) ),
				),
			),
		),
		'atlas'     => array(
			'title'   => __( 'Atlas Outdoor: an online store for the long trail', 'postfolio-blocks' ),
			'excerpt' => __( 'A faster, story-led shop for an independent outdoor gear brand.', 'postfolio-blocks' ),
			'tags'    => array( 'E-commerce', 'Website' ),
			'image'   => 'travel-mountains.jpg',
			'data'    => array(
				'facts'          => array(
					array( __( 'Client', 'postfolio-blocks' ), 'Atlas Outdoor' ),
					array( __( 'Year', 'postfolio-blocks' ), '2025' ),
					array( __( 'Role', 'postfolio-blocks' ), __( 'Web design & build', 'postfolio-blocks' ) ),
					array( __( 'Timeline', 'postfolio-blocks' ), __( '12 weeks', 'postfolio-blocks' ) ),
				),
				'challenge_lead' => __( 'Atlas made beautiful gear, but its store was slow, generic and hid the stories behind every product.', 'postfolio-blocks' ),
				'challenge'      => __( 'We set out to build a shop that loads instantly on a mountain signal and sells through trail stories, not discounts.', 'postfolio-blocks' ),
				'image'          => 'travel-sea.jpg',
				'image_alt'      => __( 'Illustration of a sailboat on the sea', 'postfolio-blocks' ),
				'result'         => __( 'The new store launched before the summer season, with guides, maps and gear lists woven into every product page.', 'postfolio-blocks' ),
				'quote'          => __( 'For the first time, our website feels like the trail.', 'postfolio-blocks' ),
				'cite'           => __( 'Jonas Berg, Founder', 'postfolio-blocks' ),
				'metrics'        => array(
					array( '+92%', __( 'conversion rate', 'postfolio-blocks' ) ),
					array( '0.9s', __( 'largest contentful paint', 'postfolio-blocks' ) ),
					array( '3×', __( 'time on product pages', 'postfolio-blocks' ) ),
				),
			),
		),
		'museum'    => array(
			'title'   => __( 'The Small Museum: an identity with room to breathe', 'postfolio-blocks' ),
			'excerpt' => __( 'A flexible visual identity and website for a single-room gallery with big ideas.', 'postfolio-blocks' ),
			'tags'    => array( 'Branding', 'Identity' ),
			'image'   => 'culture-gallery.jpg',
			'data'    => array(
				'facts'          => array(
					array( __( 'Client', 'postfolio-blocks' ), 'The Small Museum' ),
					array( __( 'Year', 'postfolio-blocks' ), '2024' ),
					array( __( 'Role', 'postfolio-blocks' ), __( 'Identity & website', 'postfolio-blocks' ) ),
					array( __( 'Timeline', 'postfolio-blocks' ), __( '8 weeks', 'postfolio-blocks' ) ),
				),
				'challenge_lead' => __( 'A tiny gallery with a changing programme needed an identity that could flex for every exhibition without losing itself.', 'postfolio-blocks' ),
				'challenge'      => __( 'The team is three people, so everything (posters, tickets, the website) had to be easy to update in-house.', 'postfolio-blocks' ),
				'image'          => 'culture-vinyl.jpg',
				'image_alt'      => __( 'Illustration of a record and its sleeve', 'postfolio-blocks' ),
				'result'         => __( 'A modular system of arches and colour fields now carries every show, from flyers to the homepage.', 'postfolio-blocks' ),
				'quote'          => __( 'We design a new exhibition poster in an hour, and it always looks like us.', 'postfolio-blocks' ),
				'cite'           => __( 'Sofia Rossi, Curator', 'postfolio-blocks' ),
				'metrics'        => array(
					array( '+65%', __( 'ticket sales', 'postfolio-blocks' ) ),
					array( '2×', __( 'newsletter sign-ups', 'postfolio-blocks' ) ),
					array( '12', __( 'shows designed in-house', 'postfolio-blocks' ) ),
				),
			),
		),
	);
}

/**
 * Create or update the demo portfolio projects (posts in "Work").
 *
 * @return int Number of projects.
 */
function postfolio_blocks_import_demo_projects() {
	$state = get_option( 'postfolio_blocks_demo_content', array() );
	$state = wp_parse_args( is_array( $state ) ? $state : array(), array( 'projects' => array(), 'images' => array() ) );

	$work = postfolio_blocks_demo_term_id( 'work' );
	if ( ! $work ) {
		$term = wp_insert_term( __( 'Work', 'postfolio-blocks' ), 'category', array( 'slug' => 'work', 'description' => __( 'Selected client projects and case studies.', 'postfolio-blocks' ) ) );
		$work = is_wp_error( $term ) ? 0 : (int) $term['term_id'];
	}

	$index = 0;
	foreach ( postfolio_blocks_demo_projects() as $key => $project ) {
		$image_id = postfolio_blocks_demo_image(
			$project['image'],
			$project['title'],
			isset( $state['images'][ $project['image'] ] ) ? (int) $state['images'][ $project['image'] ] : 0
		);

		$postarr  = array(
			'post_title'   => $project['title'],
			'post_excerpt' => $project['excerpt'],
			'post_content' => wp_slash( postfolio_blocks_case_study_markup( $project['data'] ) ),
			'post_status'  => 'publish',
			'post_type'    => 'post',
		);
		$existing = isset( $state['projects'][ $key ] ) ? get_post( $state['projects'][ $key ] ) : null;

		if ( $existing && 'post' === $existing->post_type && 'trash' !== $existing->post_status ) {
			$postarr['ID'] = $existing->ID;
			$post_id       = wp_update_post( $postarr, true );
		} else {
			// Older than the journal posts, so projects never lead a news homepage.
			$postarr['post_date'] = gmdate( 'Y-m-d H:i:s', current_time( 'timestamp' ) - ( 30 + $index * 9 ) * DAY_IN_SECONDS ); // phpcs:ignore WordPress.DateTime.CurrentTimeTimestamp.Requested
			$post_id              = wp_insert_post( $postarr, true );
		}

		++$index;

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		if ( $work ) {
			wp_set_post_categories( $post_id, array( $work ) );
		}
		wp_set_post_tags( $post_id, $project['tags'] );

		if ( $image_id ) {
			set_post_thumbnail( $post_id, $image_id );
			$state['images'][ $project['image'] ] = $image_id;
		}

		$state['projects'][ $key ] = (int) $post_id;
	}

	update_option( 'postfolio_blocks_demo_content', $state, false );

	return count( $state['projects'] );
}
