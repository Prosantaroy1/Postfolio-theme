<?php
/**
 * Recommended plugins.
 *
 * Follows the WordPress.org theme requirements: only plugins hosted on
 * WordPress.org are recommended, they are installed and activated only when
 * the user clicks (through WordPress core's own installer), the theme makes
 * no external requests itself, and the single admin notice is permanently
 * dismissible. The theme works fully without these plugins.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Recommended plugins, keyed by their WordPress.org slug.
 *
 * @return array<string, array<string, mixed>>
 */
function postfolio_blocks_recommended_plugins() {
	return array(
		'advanced-post-block' => array(
			'name'     => __( 'Advanced Post Block', 'postfolio-blocks' ),
			'tagline'  => __( 'Display your posts exactly how you want.', 'postfolio-blocks' ),
			'desc'     => __( 'Show posts, pages and custom post types in grid, masonry, slider, ticker, news ticker, accordion and magazine layouts — with filters, pagination and a Load More button.', 'postfolio-blocks' ),
			'features' => array(
				__( 'Magazine, masonry & slider layouts', 'postfolio-blocks' ),
				__( 'News ticker for breaking stories', 'postfolio-blocks' ),
				__( 'Category, tag & author filters', 'postfolio-blocks' ),
				__( 'Pagination and Load More', 'postfolio-blocks' ),
			),
			'best_for' => __( 'Online Magazine, Editorial News, Personal Blog', 'postfolio-blocks' ),
			'icon'     => 'apb',
		),
		'b-blocks'            => array(
			'name'     => __( 'bBlocks', 'postfolio-blocks' ),
			'tagline'  => __( 'Essential Gutenberg blocks & patterns.', 'postfolio-blocks' ),
			'desc'     => __( '80+ lightweight blocks for every kind of section: pricing tables, countdowns, team members, sliders, charts, tabs, timelines, testimonials and much more.', 'postfolio-blocks' ),
			'features' => array(
				__( 'Pricing tables & comparison tables', 'postfolio-blocks' ),
				__( 'Sliders, carousels & testimonials', 'postfolio-blocks' ),
				__( 'Countdown, counters & charts', 'postfolio-blocks' ),
				__( 'Tabs, accordions & timelines', 'postfolio-blocks' ),
			),
			'best_for' => __( 'Business & Agency, Creative Portfolio', 'postfolio-blocks' ),
			'icon'     => 'bb',
		),
	);
}

/**
 * Find an installed plugin's main file by its folder slug.
 *
 * @param string $slug Plugin slug (folder name).
 * @return string Plugin file relative to the plugins folder, or ''.
 */
function postfolio_blocks_plugin_file( $slug ) {
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

	foreach ( array_keys( get_plugins() ) as $file ) {
		if ( 0 === strpos( $file, $slug . '/' ) ) {
			return $file;
		}
	}

	return '';
}

/**
 * Status and action URL for a recommended plugin.
 *
 * @param string $slug Plugin slug.
 * @return array{status: string, url: string, file: string}
 */
function postfolio_blocks_plugin_status( $slug ) {
	$file = postfolio_blocks_plugin_file( $slug );

	if ( ! $file ) {
		return array(
			'status' => 'install',
			'file'   => '',
			// WordPress core's own install screen; the theme downloads nothing itself.
			'url'    => wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . $slug ), 'install-plugin_' . $slug ),
		);
	}

	if ( ! is_plugin_active( $file ) ) {
		return array(
			'status' => 'activate',
			'file'   => $file,
			'url'    => wp_nonce_url( self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $file ) ), 'activate-plugin_' . $file ),
		);
	}

	return array(
		'status' => 'active',
		'file'   => $file,
		'url'    => '',
	);
}

/**
 * A small brand mark for each plugin, drawn inline (no remote images).
 *
 * @param string $icon Icon key.
 * @return string SVG markup.
 */
function postfolio_blocks_plugin_icon( $icon ) {
	if ( 'apb' === $icon ) {
		return '<svg viewBox="0 0 64 64" aria-hidden="true" focusable="false"><defs><linearGradient id="pf-apb" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#6366f1"/><stop offset="1" stop-color="#8b5cf6"/></linearGradient></defs><rect width="64" height="64" rx="16" fill="url(#pf-apb)"/><rect x="14" y="15" width="16" height="16" rx="3" fill="#fff"/><rect x="34" y="15" width="16" height="16" rx="3" fill="#fff" opacity=".7"/><rect x="14" y="35" width="16" height="16" rx="3" fill="#fff" opacity=".7"/><rect x="34" y="35" width="16" height="4" rx="2" fill="#fff"/><rect x="34" y="42" width="12" height="4" rx="2" fill="#fff" opacity=".7"/></svg>';
	}

	return '<svg viewBox="0 0 64 64" aria-hidden="true" focusable="false"><defs><linearGradient id="pf-bb" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#0ea5e9"/><stop offset="1" stop-color="#2563eb"/></linearGradient></defs><rect width="64" height="64" rx="16" fill="url(#pf-bb)"/><path d="M16 18h12a7 7 0 0 1 0 14H16zM16 32h14a7 7 0 0 1 0 14H16z" fill="none" stroke="#fff" stroke-width="4" stroke-linejoin="round"/><rect x="38" y="18" width="10" height="10" rx="2.5" fill="#fff" opacity=".75"/><rect x="38" y="32" width="10" height="14" rx="2.5" fill="#fff"/></svg>';
}

/**
 * Render the Recommended Plugins tab content.
 */
function postfolio_blocks_render_recommended_plugins() {
	$can_install  = current_user_can( 'install_plugins' );
	$can_activate = current_user_can( 'activate_plugins' );
	?>
	<div class="postfolio-section-header">
		<h2><?php esc_html_e( 'Recommended Plugins', 'postfolio-blocks' ); ?></h2>
	</div>
	<p class="postfolio-starter-intro"><?php esc_html_e( 'Free plugins from the makers of Postfolio Blocks that add more layouts and blocks. They are optional — the theme works fully without them — and they install from WordPress.org only when you click.', 'postfolio-blocks' ); ?></p>

	<div class="postfolio-plugin-grid">
		<?php
		foreach ( postfolio_blocks_recommended_plugins() as $slug => $plugin ) :
			$state = postfolio_blocks_plugin_status( $slug );
			?>
			<div class="postfolio-plugin-card is-<?php echo esc_attr( $state['status'] ); ?>">
				<div class="postfolio-plugin-head">
					<span class="postfolio-plugin-icon"><?php echo postfolio_blocks_plugin_icon( $plugin['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static inline SVG. ?></span>
					<div>
						<h3><?php echo esc_html( $plugin['name'] ); ?></h3>
						<p class="postfolio-plugin-tagline"><?php echo esc_html( $plugin['tagline'] ); ?></p>
					</div>
					<span class="postfolio-plugin-free"><?php esc_html_e( 'Free', 'postfolio-blocks' ); ?></span>
				</div>

				<p class="postfolio-plugin-desc"><?php echo esc_html( $plugin['desc'] ); ?></p>

				<ul class="postfolio-plugin-features">
					<?php foreach ( $plugin['features'] as $feature ) : ?>
						<li><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php echo esc_html( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>

				<p class="postfolio-plugin-bestfor">
					<strong><?php esc_html_e( 'Pairs well with:', 'postfolio-blocks' ); ?></strong>
					<?php echo esc_html( $plugin['best_for'] ); ?>
				</p>

				<div class="postfolio-plugin-actions">
					<?php if ( 'active' === $state['status'] ) : ?>
						<span class="postfolio-plugin-active"><span class="dashicons dashicons-yes-alt" aria-hidden="true"></span><?php esc_html_e( 'Active', 'postfolio-blocks' ); ?></span>
					<?php elseif ( 'activate' === $state['status'] && $can_activate ) : ?>
						<a class="button button-primary postfolio-plugin-btn" href="<?php echo esc_url( $state['url'] ); ?>"><?php esc_html_e( 'Activate', 'postfolio-blocks' ); ?></a>
					<?php elseif ( 'install' === $state['status'] && $can_install ) : ?>
						<a class="button button-primary postfolio-plugin-btn postfolio-plugin-install" href="<?php echo esc_url( $state['url'] ); ?>" data-slug="<?php echo esc_attr( $slug ); ?>" data-name="<?php echo esc_attr( $plugin['name'] ); ?>"><?php esc_html_e( 'Install & activate', 'postfolio-blocks' ); ?></a>
					<?php else : ?>
						<span class="description"><?php esc_html_e( 'Ask a site administrator to install this plugin.', 'postfolio-blocks' ); ?></span>
					<?php endif; ?>

					<a class="button postfolio-plugin-details thickbox open-plugin-details-modal" href="<?php echo esc_url( self_admin_url( 'plugin-install.php?tab=plugin-information&plugin=' . $slug . '&TB_iframe=true&width=772&height=600' ) ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: plugin name. */ __( 'More details about %s', 'postfolio-blocks' ), $plugin['name'] ) ); ?>"><?php esc_html_e( 'Details', 'postfolio-blocks' ); ?></a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Load core's plugin installer script and the details modal on the theme page.
 *
 * @param string $hook_suffix Current admin page.
 */
function postfolio_blocks_recommended_plugins_assets( $hook_suffix ) {
	if ( 'appearance_page_postfolio-blocks-dashboard' !== $hook_suffix ) {
		return;
	}

	if ( current_user_can( 'install_plugins' ) ) {
		wp_enqueue_script( 'updates' );
	}
	add_thickbox();
}
add_action( 'admin_enqueue_scripts', 'postfolio_blocks_recommended_plugins_assets' );

/**
 * One admin notice that points to the recommended plugins. Shown only while
 * one of them is not active, and dismissed permanently per user.
 */
function postfolio_blocks_recommended_plugins_notice() {
	$screen = get_current_screen();

	if ( ! current_user_can( 'install_plugins' ) || ! $screen || ! in_array( $screen->id, array( 'dashboard', 'themes' ), true ) ) {
		return;
	}

	if ( get_user_meta( get_current_user_id(), 'postfolio_blocks_dismissed_plugins_notice', true ) ) {
		return;
	}

	$missing = array();
	foreach ( postfolio_blocks_recommended_plugins() as $slug => $plugin ) {
		$state = postfolio_blocks_plugin_status( $slug );
		if ( 'active' !== $state['status'] ) {
			$missing[] = $plugin['name'];
		}
	}

	if ( ! $missing ) {
		return;
	}

	printf(
		'<div class="notice notice-info is-dismissible postfolio-plugins-notice" data-nonce="%1$s"><p>%2$s <a href="%3$s">%4$s</a></p></div>',
		esc_attr( wp_create_nonce( 'postfolio_blocks_dismiss_plugins_notice' ) ),
		esc_html(
			sprintf(
				/* translators: %s: list of plugin names. */
				__( 'Postfolio Blocks works even better with these free plugins: %s.', 'postfolio-blocks' ),
				implode( ', ', $missing )
			)
		),
		esc_url( admin_url( 'themes.php?page=postfolio-blocks-dashboard#recommended-plugins' ) ),
		esc_html__( 'See recommended plugins', 'postfolio-blocks' )
	);
	?>
	<script>
		( function () {
			var notice = document.querySelector( '.postfolio-plugins-notice' );
			if ( ! notice ) {
				return;
			}
			notice.addEventListener( 'click', function ( event ) {
				if ( ! event.target.closest( '.notice-dismiss' ) ) {
					return;
				}
				var body = new FormData();
				body.append( 'action', 'postfolio_blocks_dismiss_plugins_notice' );
				body.append( 'nonce', notice.getAttribute( 'data-nonce' ) );
				fetch( window.ajaxurl, { method: 'POST', credentials: 'same-origin', body: body } );
			} );
		} )();
	</script>
	<?php
}
add_action( 'admin_notices', 'postfolio_blocks_recommended_plugins_notice' );

/**
 * AJAX: remember that the current user dismissed the notice.
 */
function postfolio_blocks_dismiss_plugins_notice() {
	check_ajax_referer( 'postfolio_blocks_dismiss_plugins_notice', 'nonce' );
	update_user_meta( get_current_user_id(), 'postfolio_blocks_dismissed_plugins_notice', 1 );
	wp_send_json_success();
}
add_action( 'wp_ajax_postfolio_blocks_dismiss_plugins_notice', 'postfolio_blocks_dismiss_plugins_notice' );
