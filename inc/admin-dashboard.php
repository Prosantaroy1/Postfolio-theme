<?php
/**
 * Postfolio Blocks Admin Dashboard
 *
 * Theme welcome page with quick links, the module settings form, the
 * starter site importer and a feature overview.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register theme dashboard menu item under Appearance.
 */
function postfolio_blocks_admin_menu() {
	add_theme_page(
		__( 'Postfolio Blocks', 'postfolio-blocks' ),
		__( 'Postfolio Blocks', 'postfolio-blocks' ),
		'manage_options',
		'postfolio-blocks-dashboard',
		'postfolio_blocks_admin_page_render'
	);
}
add_action( 'admin_menu', 'postfolio_blocks_admin_menu' );

/**
 * Enqueue scripts and styles for the theme admin dashboard.
 *
 * @param string $hook_suffix The current admin page hook.
 */
function postfolio_blocks_admin_assets( $hook_suffix ) {
	if ( 'appearance_page_postfolio-blocks-dashboard' !== $hook_suffix ) {
		return;
	}

	wp_enqueue_style(
		'postfolio-blocks-admin-css',
		get_theme_file_uri( 'assets/css/admin-dashboard.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'postfolio-blocks-admin-js',
		get_theme_file_uri( 'assets/js/admin-dashboard.js' ),
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'postfolio-blocks-admin-js',
		'postfolioDashboardVars',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'postfolio_blocks_demo_nonce' ),
			'i18n'    => array(
				/* translators: %s: starter site name. */
				'confirm'   => __( 'Import the "%s" starter site? Its pages will be created (or updated if you imported it before) and your homepage settings will change.', 'postfolio-blocks' ),
				'importing' => __( 'Importing…', 'postfolio-blocks' ),
				'imported'  => __( 'Imported!', 'postfolio-blocks' ),
				'failed'    => __( 'Import failed. Please try again.', 'postfolio-blocks' ),
				'error'     => __( 'An unexpected server error occurred during import.', 'postfolio-blocks' ),
				'visit'     => __( 'View site', 'postfolio-blocks' ),
			),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'postfolio_blocks_admin_assets' );

/**
 * Count bundled theme assets for the overview (always accurate).
 *
 * @return array<string, int>
 */
function postfolio_blocks_asset_counts() {
	$dir   = get_template_directory();
	$parts = wp_get_theme_data_template_parts();
	$count = array(
		'patterns'   => 0,
		'templates'  => count( (array) glob( $dir . '/templates/*.html' ) ),
		'variations' => count( (array) glob( $dir . '/styles/*.json' ) ),
		'colors'     => count( (array) glob( $dir . '/styles/colors/*.json' ) ),
		'fonts'      => count( (array) glob( $dir . '/styles/typography/*.json' ) ),
		'sections'   => count( (array) glob( $dir . '/styles/sections/*.json' ) ),
		'headers'    => 0,
		'footers'    => 0,
		'modules'    => count( postfolio_blocks_module_definitions() ),
		'starters'   => count( postfolio_blocks_starter_sites() ),
	);

	foreach ( WP_Block_Patterns_Registry::get_instance()->get_all_registered() as $pattern ) {
		if ( 0 === strpos( $pattern['name'], 'postfolio-blocks/' ) && ( ! isset( $pattern['inserter'] ) || false !== $pattern['inserter'] ) ) {
			++$count['patterns'];
		}
	}

	foreach ( $parts as $part ) {
		if ( isset( $part['area'] ) && 'header' === $part['area'] ) {
			++$count['headers'];
		} elseif ( isset( $part['area'] ) && 'footer' === $part['area'] ) {
			++$count['footers'];
		}
	}

	return $count;
}

/**
 * Render a quick-action card.
 *
 * @param string $icon  Dashicon name (without the dashicons- prefix).
 * @param string $title Card title.
 * @param string $text  Card description.
 * @param string $url   Link target.
 */
function postfolio_blocks_admin_card( $icon, $title, $text, $url ) {
	?>
	<div class="postfolio-card">
		<div class="postfolio-card-icon"><span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span></div>
		<div class="postfolio-card-body">
			<h3><?php echo esc_html( $title ); ?></h3>
			<p><?php echo esc_html( $text ); ?></p>
		</div>
		<a href="<?php echo esc_url( $url ); ?>" class="postfolio-card-link" aria-label="<?php echo esc_attr( $title ); ?>">
			<span class="dashicons dashicons-external" aria-hidden="true"></span>
		</a>
	</div>
	<?php
}

/**
 * Render the main theme dashboard admin page.
 */
function postfolio_blocks_admin_page_render() {
	$theme   = wp_get_theme();
	$counts  = postfolio_blocks_asset_counts();
	$modules = postfolio_blocks_get_modules();
	?>
	<div class="wrap postfolio-dashboard-wrap">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Postfolio Blocks', 'postfolio-blocks' ); ?></h1>

		<div class="postfolio-dashboard-navbar">
			<div class="postfolio-dashboard-brand">
				<div class="postfolio-brand-logo" aria-hidden="true">P</div>
				<span class="postfolio-brand-title"><?php esc_html_e( 'Postfolio Blocks', 'postfolio-blocks' ); ?></span>
			</div>
			<ul class="postfolio-nav-tabs" role="tablist">
				<li><button type="button" role="tab" class="nav-tab nav-tab-active" data-tab="welcome"><?php esc_html_e( 'Welcome', 'postfolio-blocks' ); ?></button></li>
				<li><button type="button" role="tab" class="nav-tab" data-tab="modules"><?php esc_html_e( 'Modules', 'postfolio-blocks' ); ?></button></li>
				<li><button type="button" role="tab" class="nav-tab" data-tab="starter-sites"><?php esc_html_e( 'Starter Sites', 'postfolio-blocks' ); ?></button></li>
				<li><button type="button" role="tab" class="nav-tab" data-tab="features"><?php esc_html_e( 'All Features', 'postfolio-blocks' ); ?></button></li>
			</ul>
		</div>

		<?php settings_errors(); ?>
		<div id="postfolio-import-notice" class="postfolio-notice-toast" role="status" aria-live="polite"></div>

		<!-- TAB 1: WELCOME -->
		<div id="welcome" class="postfolio-tab-panel active" role="tabpanel">
			<div class="postfolio-dashboard-banner">
				<div class="postfolio-banner-content">
					<h2>
						<?php
						printf(
							/* translators: %s: Theme version number */
							esc_html__( 'Welcome to Postfolio %s', 'postfolio-blocks' ),
							'<span class="postfolio-version-badge">v' . esc_html( $theme->get( 'Version' ) ) . '</span>'
						);
						?>
					</h2>
					<p><?php esc_html_e( 'Customize your block theme layouts, navigation, and styles.', 'postfolio-blocks' ); ?></p>
				</div>
				<button type="button" class="postfolio-btn-primary postfolio-btn-browse-starters">
					<?php esc_html_e( 'Browse Starter Sites', 'postfolio-blocks' ); ?>
				</button>
			</div>

			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Quick Actions', 'postfolio-blocks' ); ?></h2>
			</div>
			<div class="postfolio-grid-3">
				<?php
				postfolio_blocks_admin_card( 'admin-customizer', __( 'Global styles', 'postfolio-blocks' ), __( 'Pick a style variation, color palette or font pairing.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Fstyles' ) );
				postfolio_blocks_admin_card( 'layout', __( 'Templates', 'postfolio-blocks' ), __( 'Browse page, post and archive templates.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Ftemplate' ) );
				postfolio_blocks_admin_card( 'screenoptions', __( 'Patterns', 'postfolio-blocks' ), __( 'Insert ready-made sections and full pages.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Fpattern' ) );
				postfolio_blocks_admin_card( 'heading', __( 'Header', 'postfolio-blocks' ), __( 'Swap or edit the site header template part.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Fpattern&categoryId=header' ) );
				postfolio_blocks_admin_card( 'editor-insertmore', __( 'Footer', 'postfolio-blocks' ), __( 'Swap or edit the site footer template part.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Fpattern&categoryId=footer' ) );
				postfolio_blocks_admin_card( 'menu', __( 'Navigation', 'postfolio-blocks' ), __( 'Manage the menus used in headers and footers.', 'postfolio-blocks' ), admin_url( 'site-editor.php?p=%2Fnavigation' ) );
				?>
			</div>

			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'What is included', 'postfolio-blocks' ); ?></h2>
			</div>
			<ul class="postfolio-stats">
				<?php
				$stats = array(
					array( $counts['patterns'], __( 'Block patterns', 'postfolio-blocks' ) ),
					array( $counts['templates'], __( 'Templates', 'postfolio-blocks' ) ),
					array( $counts['headers'] + $counts['footers'], __( 'Headers & footers', 'postfolio-blocks' ) ),
					array( $counts['variations'], __( 'Style variations', 'postfolio-blocks' ) ),
					array( $counts['colors'], __( 'Color presets', 'postfolio-blocks' ) ),
					array( $counts['fonts'], __( 'Font pairings', 'postfolio-blocks' ) ),
					array( $counts['sections'], __( 'Section styles', 'postfolio-blocks' ) ),
					array( $counts['starters'], __( 'Starter sites', 'postfolio-blocks' ) ),
				);
				foreach ( $stats as $stat ) {
					printf( '<li><strong>%1$s</strong><span>%2$s</span></li>', esc_html( number_format_i18n( $stat[0] ) ), esc_html( $stat[1] ) );
				}
				?>
			</ul>
		</div>

		<!-- TAB 2: MODULES -->
		<div id="modules" class="postfolio-tab-panel" role="tabpanel">
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Build Better with Modules', 'postfolio-blocks' ); ?></h2>
			</div>
			<form method="post" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>">
				<?php settings_fields( 'postfolio_blocks_modules_group' ); ?>
				<div class="postfolio-grid-3">
					<?php foreach ( postfolio_blocks_module_definitions() as $key => $module ) : ?>
						<div class="postfolio-module-card">
							<div class="postfolio-module-info">
								<h3 id="postfolio-module-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $module['label'] ); ?></h3>
								<p><?php echo esc_html( $module['description'] ); ?></p>
							</div>
							<label class="postfolio-switch">
								<input type="checkbox" name="postfolio_blocks_modules[<?php echo esc_attr( $key ); ?>]" value="1" aria-labelledby="postfolio-module-<?php echo esc_attr( $key ); ?>" <?php checked( ! empty( $modules[ $key ] ) ); ?>>
								<span class="postfolio-slider" aria-hidden="true"></span>
							</label>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="postfolio-section-header">
					<h2><?php esc_html_e( 'Module settings', 'postfolio-blocks' ); ?></h2>
				</div>
				<div class="postfolio-settings-panel">
					<p>
						<label for="postfolio-dark-default"><?php esc_html_e( 'Default color scheme for new visitors', 'postfolio-blocks' ); ?></label>
						<select id="postfolio-dark-default" name="postfolio_blocks_modules[dark_mode_default]">
							<option value="light" <?php selected( $modules['dark_mode_default'], 'light' ); ?>><?php esc_html_e( 'Light', 'postfolio-blocks' ); ?></option>
							<option value="dark" <?php selected( $modules['dark_mode_default'], 'dark' ); ?>><?php esc_html_e( 'Dark', 'postfolio-blocks' ); ?></option>
							<option value="auto" <?php selected( $modules['dark_mode_default'], 'auto' ); ?>><?php esc_html_e( 'Follow the visitor\'s device', 'postfolio-blocks' ); ?></option>
						</select>
					</p>
					<p>
						<label for="postfolio-contact-phone"><?php esc_html_e( 'Phone number (floating contact)', 'postfolio-blocks' ); ?></label>
						<input type="tel" id="postfolio-contact-phone" class="regular-text" name="postfolio_blocks_modules[contact_phone]" value="<?php echo esc_attr( $modules['contact_phone'] ); ?>" placeholder="+1 555 010 0199">
					</p>
					<p>
						<label for="postfolio-contact-email"><?php esc_html_e( 'Email address (floating contact)', 'postfolio-blocks' ); ?></label>
						<input type="email" id="postfolio-contact-email" class="regular-text" name="postfolio_blocks_modules[contact_email]" value="<?php echo esc_attr( $modules['contact_email'] ); ?>" placeholder="hello@example.com">
					</p>
					<p>
						<label for="postfolio-contact-whatsapp"><?php esc_html_e( 'WhatsApp number with country code, digits only', 'postfolio-blocks' ); ?></label>
						<input type="text" inputmode="numeric" id="postfolio-contact-whatsapp" class="regular-text" name="postfolio_blocks_modules[contact_whatsapp]" value="<?php echo esc_attr( $modules['contact_whatsapp'] ); ?>" placeholder="15550100199">
					</p>
					<p class="description"><?php esc_html_e( 'Tip: while dark mode is on, any Button block can become a light/dark switch — pick the "Dark mode toggle" style in its Styles panel.', 'postfolio-blocks' ); ?></p>
				</div>
				<?php submit_button( __( 'Save modules', 'postfolio-blocks' ) ); ?>
			</form>
		</div>

		<!-- TAB 3: STARTER SITES -->
		<div id="starter-sites" class="postfolio-tab-panel" role="tabpanel">
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Starter Sites', 'postfolio-blocks' ); ?></h2>
			</div>
			<p class="postfolio-starter-intro"><?php esc_html_e( 'Each starter site creates its pages from the theme patterns and sets your homepage. Your posts are never changed. Importing again updates the same pages instead of duplicating them.', 'postfolio-blocks' ); ?></p>
			<label class="postfolio-apply-style">
				<input type="checkbox" id="postfolio-apply-style" value="1">
				<?php esc_html_e( 'Also apply the matching style variation (replaces your current Global Styles colors and fonts)', 'postfolio-blocks' ); ?>
			</label>

			<div class="postfolio-starter-grid">
				<?php foreach ( postfolio_blocks_starter_sites() as $slug => $site ) : ?>
					<div class="postfolio-starter-card">
						<?php if ( $site['style'] ) : ?>
							<div class="postfolio-pro-badge"><?php echo esc_html( $site['style'] ); ?></div>
						<?php endif; ?>
						<div class="postfolio-starter-preview-wrap">
							<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $site['image'] ) ); ?>" alt="" loading="lazy">
						</div>
						<div class="postfolio-starter-footer">
							<span class="postfolio-starter-title"><?php echo esc_html( $site['title'] ); ?></span>
							<p class="postfolio-starter-desc"><?php echo esc_html( $site['description'] ); ?></p>
							<div class="postfolio-starter-actions">
								<button type="button" class="postfolio-btn-import" data-demo="<?php echo esc_attr( $slug ); ?>" data-title="<?php echo esc_attr( $site['title'] ); ?>">
									<span class="dashicons dashicons-download" aria-hidden="true"></span>
									<?php esc_html_e( 'Import', 'postfolio-blocks' ); ?>
								</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- TAB 4: ALL FEATURES -->
		<div id="features" class="postfolio-tab-panel" role="tabpanel">
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'All Features — Included Free', 'postfolio-blocks' ); ?></h2>
			</div>
			<p class="postfolio-starter-intro"><?php esc_html_e( 'Everything below is part of the free theme. There is nothing to unlock.', 'postfolio-blocks' ); ?></p>

			<table class="postfolio-comparison-table">
				<thead>
					<tr>
						<th scope="col"><?php esc_html_e( 'Feature', 'postfolio-blocks' ); ?></th>
						<th scope="col"><?php esc_html_e( 'What you get', 'postfolio-blocks' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Availability', 'postfolio-blocks' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$rows = array(
						array(
							__( 'Block patterns', 'postfolio-blocks' ),
							/* translators: %d: number of patterns. */
							sprintf( __( '%d ready-made sections and full pages', 'postfolio-blocks' ), $counts['patterns'] ),
						),
						array(
							__( 'Templates', 'postfolio-blocks' ),
							/* translators: %d: number of templates. */
							sprintf( __( '%d templates for posts, pages, archives, search and 404', 'postfolio-blocks' ), $counts['templates'] ),
						),
						array(
							__( 'Headers & footers', 'postfolio-blocks' ),
							/* translators: 1: number of headers, 2: number of footers. */
							sprintf( __( '%1$d headers (including sticky and transparent) and %2$d footers', 'postfolio-blocks' ), $counts['headers'], $counts['footers'] ),
						),
						array(
							__( 'Styles', 'postfolio-blocks' ),
							/* translators: 1: number of style variations, 2: number of color presets, 3: number of font pairings, 4: number of section styles. */
							sprintf( __( '%1$d style variations, %2$d color palettes, %3$d font pairings and %4$d section styles', 'postfolio-blocks' ), $counts['variations'], $counts['colors'], $counts['fonts'], $counts['sections'] ),
						),
						array(
							__( 'Blog tools', 'postfolio-blocks' ),
							__( 'Reading time, related posts, popular posts, share buttons, table of contents and author box', 'postfolio-blocks' ),
						),
						array(
							__( 'Modules', 'postfolio-blocks' ),
							/* translators: %d: number of modules. */
							sprintf( __( '%d optional modules: dark mode, back to top, reading progress, smart header, animations, footer reveal and floating contact', 'postfolio-blocks' ), $counts['modules'] ),
						),
						array(
							__( 'Starter sites', 'postfolio-blocks' ),
							/* translators: %d: number of starter sites. */
							sprintf( __( '%d one-click starter sites', 'postfolio-blocks' ), $counts['starters'] ),
						),
						array(
							__( 'Fonts', 'postfolio-blocks' ),
							__( 'Five self-hosted font families — no requests to third-party font services', 'postfolio-blocks' ),
						),
						array(
							__( 'Support', 'postfolio-blocks' ),
							__( 'Community support forum on WordPress.org', 'postfolio-blocks' ),
						),
					);
					foreach ( $rows as $row ) {
						printf(
							'<tr><th scope="row">%1$s</th><td>%2$s</td><td><span class="postfolio-check-green">✓ %3$s</span></td></tr>',
							esc_html( $row[0] ),
							esc_html( $row[1] ),
							esc_html__( 'Free', 'postfolio-blocks' )
						);
					}
					?>
				</tbody>
			</table>
		</div>

	</div>
	<?php
}
