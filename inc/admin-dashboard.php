<?php
/**
 * Postfolio Blocks Admin Dashboard
 *
 * Provides a dedicated theme welcome page, interactive options, and starter site status.
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
		)
	);
}
add_action( 'admin_enqueue_scripts', 'postfolio_blocks_admin_assets' );

/**
 * Render the main theme dashboard admin page.
 */
function postfolio_blocks_admin_page_render() {
	$theme         = wp_get_theme();
	$theme_version = $theme->get( 'Version' );
	?>
	<div class="wrap postfolio-dashboard-wrap">

		<!-- Top Navbar -->
		<div class="postfolio-dashboard-navbar">
			<div class="postfolio-dashboard-brand">
				<div class="postfolio-brand-logo">P</div>
				<span class="postfolio-brand-title"><?php esc_html_e( 'Postfolio Blocks', 'postfolio-blocks' ); ?></span>
			</div>

			<ul class="postfolio-nav-tabs">
				<li><button type="button" class="nav-tab nav-tab-active" data-tab="welcome"><?php esc_html_e( 'Welcome', 'postfolio-blocks' ); ?></button></li>
				<li><button type="button" class="nav-tab" data-tab="starter-sites"><?php esc_html_e( 'Starter Sites', 'postfolio-blocks' ); ?></button></li>
				<li><button type="button" class="nav-tab" data-tab="free-vs-pro"><?php esc_html_e( 'Free vs Pro', 'postfolio-blocks' ); ?></button></li>
			</ul>
		</div>

		<!-- Global Import Notification Toast -->
		<div id="postfolio-import-notice" class="postfolio-notice-toast"></div>

		<!-- TAB 1: WELCOME -->
		<div id="welcome" class="postfolio-tab-panel active">
			<!-- Banner -->
			<div class="postfolio-dashboard-banner">
				<div class="postfolio-banner-content">
					<h1>
						<?php
						printf(
							/* translators: %s: Theme version number */
							esc_html__( 'Welcome to Postfolio %s', 'postfolio-blocks' ),
							'<span class="postfolio-version-badge">v' . esc_html( $theme_version ) . '</span>'
						);
						?>
					</h1>
					<p><?php esc_html_e( 'Customize your block theme layouts, navigation, and styles.', 'postfolio-blocks' ); ?></p>
				</div>
				<button type="button" class="postfolio-btn-primary postfolio-btn-browse-starters">
					<?php esc_html_e( 'Browse Starter Sites', 'postfolio-blocks' ); ?>
				</button>
			</div>

			<!-- Quick Actions -->
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Quick Actions', 'postfolio-blocks' ); ?></h2>
			</div>

			<div class="postfolio-grid-3">
				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-admin-customtech"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Global styles', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Customize colors and design tokens.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fwp_global_styles' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Open Global Styles', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>

				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-color-picker"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Colors', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Edit your color palette.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fwp_global_styles' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Edit Colors', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>

				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-editor-bold"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Typography', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Adjust font settings and sizes.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fwp_global_styles' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Adjust Typography', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>

				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-layout"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Templates', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Browse page and post templates.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Ftemplates' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Browse Templates', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>

				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-header"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Header', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Edit the site header template part.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fpatterns&category=header' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Edit Header', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>

				<div class="postfolio-card">
					<div class="postfolio-card-icon"><span class="dashicons dashicons-footer"></span></div>
					<div class="postfolio-card-body">
						<h3><?php esc_html_e( 'Footer', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Edit the site footer template part.', 'postfolio-blocks' ); ?></p>
					</div>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php?path=%2Fpatterns&category=footer' ) ); ?>" class="postfolio-card-link" title="<?php esc_attr_e( 'Edit Footer', 'postfolio-blocks' ); ?>">
						<span class="dashicons dashicons-external"></span>
					</a>
				</div>
			</div>

			<!-- Build Better with Modules -->
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Build Better with Modules', 'postfolio-blocks' ); ?></h2>
			</div>

			<div class="postfolio-grid-3">
				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Back to top', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Show a floating button that scrolls visitors back to the top.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox" checked>
						<span class="postfolio-slider"></span>
					</label>
				</div>

				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Floating Contact Buttons', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Display quick contact actions in a floating frontend stack.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox">
						<span class="postfolio-slider"></span>
					</label>
				</div>

				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Footer Reveal Effect', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Reveal the footer with a layered scroll effect as visitors reach the bottom.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox">
						<span class="postfolio-slider"></span>
					</label>
				</div>

				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Reading Progress Bar', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Show a progress indicator that tracks how much of the post the visitor has read.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox">
						<span class="postfolio-slider"></span>
					</label>
				</div>

				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Smart Sticky Header', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Auto-hide the sticky header while scrolling down and reveal it when scrolling up.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox" checked>
						<span class="postfolio-slider"></span>
					</label>
				</div>

				<div class="postfolio-module-card">
					<div class="postfolio-module-info">
						<h3><?php esc_html_e( 'Animations', 'postfolio-blocks' ); ?></h3>
						<p><?php esc_html_e( 'Animate elements when they enter the viewport for subtle motion across sections.', 'postfolio-blocks' ); ?></p>
					</div>
					<label class="postfolio-switch">
						<input type="checkbox" checked>
						<span class="postfolio-slider"></span>
					</label>
				</div>
			</div>
		</div>

		<!-- TAB 2: STARTER SITES -->
		<div id="starter-sites" class="postfolio-tab-panel">
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Starter Sites', 'postfolio-blocks' ); ?></h2>
			</div>

			<div class="postfolio-starter-grid">
				<!-- Single Coming Soon Card -->
				<div class="postfolio-starter-card" style="max-width: 440px;">
					<div class="postfolio-pro-badge" style="background: #2563eb; color: #ffffff; text-transform: uppercase;">
						<?php esc_html_e( 'Coming Soon', 'postfolio-blocks' ); ?>
					</div>
					<div class="postfolio-starter-preview-wrap" style="display: flex; align-items: center; justify-content: center; background: #0f172a; text-align: center; padding: 2rem;">
						<svg viewBox="0 0 400 240" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-height: 180px;">
							<rect width="400" height="240" fill="#0f172a" rx="8"/>
							<circle cx="200" cy="90" r="40" fill="#1e293b" stroke="#334155" stroke-width="2"/>
							<path d="M190 90L198 98L215 80" stroke="#38bdf8" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
							<rect x="80" y="150" width="240" height="16" rx="4" fill="#334155"/>
							<rect x="120" y="176" width="160" height="10" rx="3" fill="#1e293b"/>
						</svg>
					</div>
					<div class="postfolio-starter-footer" style="flex-direction: column; align-items: flex-start; gap: 12px;">
						<span class="postfolio-starter-title" style="font-size: 18px; font-weight: 700; color: #0f172a;">
							<?php esc_html_e( 'Starter Sites Coming Soon', 'postfolio-blocks' ); ?>
						</span>
						<p style="margin: 0; font-size: 13px; color: #64748b; line-height: 1.5;">
							<?php esc_html_e( 'New pre-built starter sites and full landing page templates are currently under development and will be available in the upcoming theme update.', 'postfolio-blocks' ); ?>
						</p>
						<div class="postfolio-starter-actions" style="width: 100%; margin-top: 4px;">
							<button type="button" class="postfolio-btn-outline" disabled style="width: 100%; justify-content: center; opacity: 0.8; cursor: not-allowed; background: #f8fafc; color: #64748b; border-color: #cbd5e1;">
								<span class="dashicons dashicons-clock" style="margin-right: 6px; font-size: 16px; margin-top: 2px;"></span>
								<?php esc_html_e( 'Coming Soon', 'postfolio-blocks' ); ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TAB 3: FREE VS PRO -->
		<div id="free-vs-pro" class="postfolio-tab-panel">
			<div class="postfolio-section-header">
				<h2><?php esc_html_e( 'Free vs Pro Features', 'postfolio-blocks' ); ?></h2>
			</div>

			<table class="postfolio-comparison-table">
				<thead>
					<tr>
						<th><?php esc_html_e( 'Features & Capabilities', 'postfolio-blocks' ); ?></th>
						<th><?php esc_html_e( 'Free Edition', 'postfolio-blocks' ); ?></th>
						<th><?php esc_html_e( 'Pro Edition', 'postfolio-blocks' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong><?php esc_html_e( 'Block Patterns Bundled', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( '34 Custom Patterns', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( '100+ Premium Patterns', 'postfolio-blocks' ); ?></span></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e( 'Starter Sites Importer', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( 'Coming Soon', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( '15+ Full Starter Sites', 'postfolio-blocks' ); ?></span></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e( 'Header & Footer Variations', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( '5 Headers / 4 Footers', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( '20+ Headers & Footers', 'postfolio-blocks' ); ?></span></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e( 'Style Variations & Palettes', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( '8 Style Variations', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( '25+ Theme Skins', 'postfolio-blocks' ); ?></span></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e( 'Advanced Module Effects', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( 'Basic Controls', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( 'All Modules Unlocked', 'postfolio-blocks' ); ?></span></td>
					</tr>
					<tr>
						<td><strong><?php esc_html_e( 'Support Level', 'postfolio-blocks' ); ?></strong></td>
						<td><?php esc_html_e( 'Community Forum', 'postfolio-blocks' ); ?></td>
						<td><span class="postfolio-check-green">✓ <?php esc_html_e( 'Priority 24/7 Support', 'postfolio-blocks' ); ?></span></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
	<?php
}
