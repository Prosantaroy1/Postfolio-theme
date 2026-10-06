<?php
/**
 * Optional front-end modules (Appearance → Postfolio Blocks → Modules).
 *
 * Every module is off by default, stores its state in a single option and
 * only loads its CSS/JS when at least one module is turned on.
 *
 * @package Postfolio_Blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Module definitions: key => label, description.
 *
 * @return array<string, array{label: string, description: string}>
 */
function postfolio_blocks_module_definitions() {
	return array(
		'back_to_top'      => array(
			'label'       => __( 'Back to top', 'postfolio-blocks' ),
			'description' => __( 'Show a floating button that scrolls visitors back to the top.', 'postfolio-blocks' ),
		),
		'dark_mode'        => array(
			'label'       => __( 'Dark mode toggle', 'postfolio-blocks' ),
			'description' => __( 'Add a light/dark switch. The dark palette is generated from your current colors and the choice is remembered per visitor.', 'postfolio-blocks' ),
		),
		'reading_progress' => array(
			'label'       => __( 'Reading progress bar', 'postfolio-blocks' ),
			'description' => __( 'Show a thin bar at the top of single posts that tracks how much has been read.', 'postfolio-blocks' ),
		),
		'smart_header'     => array(
			'label'       => __( 'Smart sticky header', 'postfolio-blocks' ),
			'description' => __( 'Keep the header at the top of the screen, hide it while scrolling down and reveal it when scrolling up.', 'postfolio-blocks' ),
		),
		'animations'       => array(
			'label'       => __( 'Scroll animations', 'postfolio-blocks' ),
			'description' => __( 'Fade sections in as they enter the screen. Respects the visitor\'s reduced-motion setting.', 'postfolio-blocks' ),
		),
		'footer_reveal'    => array(
			'label'       => __( 'Footer reveal effect', 'postfolio-blocks' ),
			'description' => __( 'Reveal the footer from underneath the page as visitors reach the bottom.', 'postfolio-blocks' ),
		),
		'floating_contact' => array(
			'label'       => __( 'Floating contact buttons', 'postfolio-blocks' ),
			'description' => __( 'Show call, email and WhatsApp buttons in the bottom corner. Fill in the details below.', 'postfolio-blocks' ),
		),
	);
}

/**
 * Default option values.
 *
 * @return array<string, mixed>
 */
function postfolio_blocks_module_defaults() {
	$defaults = array_fill_keys( array_keys( postfolio_blocks_module_definitions() ), false );

	$defaults['dark_mode_default'] = 'light';
	$defaults['contact_phone']     = '';
	$defaults['contact_email']     = '';
	$defaults['contact_whatsapp']  = '';

	return $defaults;
}

/**
 * Get the saved module settings merged with defaults.
 *
 * @return array<string, mixed>
 */
function postfolio_blocks_get_modules() {
	$saved = get_option( 'postfolio_blocks_modules', array() );

	return wp_parse_args( is_array( $saved ) ? $saved : array(), postfolio_blocks_module_defaults() );
}

/**
 * Whether a single module is enabled.
 *
 * @param string $key Module key.
 * @return bool
 */
function postfolio_blocks_module_enabled( $key ) {
	$modules = postfolio_blocks_get_modules();

	return ! empty( $modules[ $key ] );
}

/**
 * Sanitize the module settings before they are saved.
 *
 * @param mixed $input Raw submitted value.
 * @return array<string, mixed>
 */
function postfolio_blocks_sanitize_modules( $input ) {
	$input = is_array( $input ) ? $input : array();
	$clean = array();

	foreach ( array_keys( postfolio_blocks_module_definitions() ) as $key ) {
		$clean[ $key ] = ! empty( $input[ $key ] );
	}

	$clean['dark_mode_default'] = isset( $input['dark_mode_default'] ) && in_array( $input['dark_mode_default'], array( 'light', 'dark', 'auto' ), true ) ? $input['dark_mode_default'] : 'light';
	$clean['contact_phone']     = isset( $input['contact_phone'] ) ? preg_replace( '/[^0-9+\-\s()]/', '', sanitize_text_field( $input['contact_phone'] ) ) : '';
	$clean['contact_email']     = isset( $input['contact_email'] ) ? sanitize_email( $input['contact_email'] ) : '';
	$clean['contact_whatsapp']  = isset( $input['contact_whatsapp'] ) ? preg_replace( '/\D/', '', $input['contact_whatsapp'] ) : '';

	return $clean;
}

/**
 * Register the option with the Settings API.
 */
function postfolio_blocks_register_module_setting() {
	register_setting(
		'postfolio_blocks_modules_group',
		'postfolio_blocks_modules',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'postfolio_blocks_sanitize_modules',
			'default'           => postfolio_blocks_module_defaults(),
			'show_in_rest'      => false,
		)
	);
}
add_action( 'admin_init', 'postfolio_blocks_register_module_setting' );

/**
 * Whether any module needs front-end assets on this request.
 *
 * @return bool
 */
function postfolio_blocks_modules_active() {
	$modules = postfolio_blocks_get_modules();

	foreach ( array_keys( postfolio_blocks_module_definitions() ) as $key ) {
		if ( ! empty( $modules[ $key ] ) ) {
			return true;
		}
	}

	return false;
}

/**
 * Mix two hex colors.
 *
 * @param string $color_a Hex color.
 * @param string $color_b Hex color.
 * @param float  $weight  Share of $color_b, 0–1.
 * @return string Hex color.
 */
function postfolio_blocks_mix_hex( $color_a, $color_b, $weight ) {
	$a   = postfolio_blocks_hex_to_rgb( $color_a );
	$b   = postfolio_blocks_hex_to_rgb( $color_b );
	$mix = array();

	foreach ( array( 0, 1, 2 ) as $i ) {
		$mix[] = (int) round( $a[ $i ] * ( 1 - $weight ) + $b[ $i ] * $weight );
	}

	return sprintf( '#%02x%02x%02x', $mix[0], $mix[1], $mix[2] );
}

/**
 * Convert a hex color to an RGB triplet. Falls back to black for non-hex values.
 *
 * @param string $hex Hex color (#rgb or #rrggbb).
 * @return int[]
 */
function postfolio_blocks_hex_to_rgb( $hex ) {
	$hex = ltrim( (string) $hex, '#' );

	if ( 3 === strlen( $hex ) ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}

	if ( ! preg_match( '/^[0-9a-f]{6}$/i', $hex ) ) {
		return array( 0, 0, 0 );
	}

	return array( hexdec( substr( $hex, 0, 2 ) ), hexdec( substr( $hex, 2, 2 ) ), hexdec( substr( $hex, 4, 2 ) ) );
}

/**
 * Relative luminance (0 = black, 1 = white).
 *
 * @param string $hex Hex color.
 * @return float
 */
function postfolio_blocks_luminance( $hex ) {
	$rgb = postfolio_blocks_hex_to_rgb( $hex );

	return ( 0.2126 * $rgb[0] + 0.7152 * $rgb[1] + 0.0722 * $rgb[2] ) / 255;
}

/**
 * Build the CSS that swaps the palette for the alternate (dark or light) scheme.
 *
 * The alternate palette is derived from the palette currently in use — theme,
 * style variation or the user's own Global Styles colors — so it always matches.
 *
 * @return string
 */
function postfolio_blocks_color_scheme_css() {
	$palette = wp_get_global_settings( array( 'color', 'palette' ) );
	$colors  = array();

	foreach ( array( 'default', 'theme', 'custom' ) as $origin ) {
		if ( ! empty( $palette[ $origin ] ) ) {
			foreach ( $palette[ $origin ] as $entry ) {
				$colors[ $entry['slug'] ] = $entry['color'];
			}
		}
	}

	$required = array( 'base', 'base-2', 'contrast', 'contrast-2', 'accent', 'accent-2' );
	foreach ( $required as $slug ) {
		if ( empty( $colors[ $slug ] ) || '#' !== substr( $colors[ $slug ], 0, 1 ) ) {
			return '';
		}
	}

	$is_dark   = postfolio_blocks_luminance( $colors['base'] ) < 0.4;
	$alternate = array(
		'base'       => $colors['contrast'],
		'base-2'     => postfolio_blocks_mix_hex( $colors['contrast'], $colors['base'], 0.1 ),
		'contrast'   => $colors['base'],
		'contrast-2' => postfolio_blocks_mix_hex( $colors['base'], $colors['contrast'], 0.32 ),
		'accent'     => postfolio_blocks_mix_hex( $colors['accent'], $is_dark ? '#000000' : '#ffffff', $is_dark ? 0.25 : 0.3 ),
		'accent-2'   => postfolio_blocks_mix_hex( $colors['accent-2'], $is_dark ? '#000000' : '#ffffff', $is_dark ? 0.25 : 0.2 ),
	);

	$declarations = '';
	foreach ( $alternate as $slug => $value ) {
		$declarations .= sprintf( '--wp--preset--color--%s:%s;', $slug, $value );
	}

	$scheme = $is_dark ? 'light' : 'dark';

	return sprintf( 'html[data-postfolio-scheme="%1$s"]{%2$scolor-scheme:%1$s;}', $scheme, $declarations );
}

/**
 * Print the color-scheme bootstrap as early as possible to avoid a flash of
 * the wrong colors.
 */
function postfolio_blocks_dark_mode_head() {
	if ( ! postfolio_blocks_module_enabled( 'dark_mode' ) ) {
		return;
	}

	$modules = postfolio_blocks_get_modules();
	$palette = wp_get_global_settings( array( 'color', 'palette', 'theme' ) );
	$is_dark = false;

	foreach ( (array) $palette as $entry ) {
		if ( isset( $entry['slug'] ) && 'base' === $entry['slug'] ) {
			$is_dark = postfolio_blocks_luminance( $entry['color'] ) < 0.4;
		}
	}

	$config = array(
		'default'  => $modules['dark_mode_default'],
		'nativeIs' => $is_dark ? 'dark' : 'light',
	);

	wp_print_inline_script_tag(
		sprintf(
			'(function(c){try{var s=localStorage.getItem("postfolio-scheme");var w=s||(c.default==="auto"?(matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light"):c.default);if(w!==c.nativeIs){document.documentElement.setAttribute("data-postfolio-scheme",w);}}catch(e){}})(%s);',
			wp_json_encode( $config )
		)
	);
}
add_action( 'wp_head', 'postfolio_blocks_dark_mode_head', 1 );

/**
 * Enqueue module assets.
 */
function postfolio_blocks_module_assets() {
	if ( ! postfolio_blocks_modules_active() ) {
		return;
	}

	$modules = postfolio_blocks_get_modules();
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'postfolio-blocks-modules', get_theme_file_uri( 'assets/css/modules.css' ), array(), $version );

	if ( ! empty( $modules['dark_mode'] ) ) {
		wp_add_inline_style( 'postfolio-blocks-modules', postfolio_blocks_color_scheme_css() );
	}

	wp_enqueue_script(
		'postfolio-blocks-modules',
		get_theme_file_uri( 'assets/js/modules.js' ),
		array(),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	$palette = wp_get_global_settings( array( 'color', 'palette', 'theme' ) );
	$native  = 'light';
	foreach ( (array) $palette as $entry ) {
		if ( isset( $entry['slug'] ) && 'base' === $entry['slug'] && postfolio_blocks_luminance( $entry['color'] ) < 0.4 ) {
			$native = 'dark';
		}
	}

	wp_add_inline_script(
		'postfolio-blocks-modules',
		'window.postfolioModules = ' . wp_json_encode(
			array(
				'backToTop'       => ! empty( $modules['back_to_top'] ),
				'darkMode'        => ! empty( $modules['dark_mode'] ),
				'nativeScheme'    => $native,
				'readingProgress' => ! empty( $modules['reading_progress'] ) && is_singular( 'post' ),
				'smartHeader'     => ! empty( $modules['smart_header'] ),
				'animations'      => ! empty( $modules['animations'] ),
				'footerReveal'    => ! empty( $modules['footer_reveal'] ),
			)
		) . ';',
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'postfolio_blocks_module_assets' );

/**
 * Body classes used by module CSS.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function postfolio_blocks_module_body_class( $classes ) {
	foreach ( array( 'smart_header', 'footer_reveal', 'animations' ) as $key ) {
		if ( postfolio_blocks_module_enabled( $key ) ) {
			$classes[] = 'postfolio-has-' . str_replace( '_', '-', $key );
		}
	}

	return $classes;
}
add_filter( 'body_class', 'postfolio_blocks_module_body_class' );

/**
 * Print the reading progress bar at the top of the body on single posts.
 */
function postfolio_blocks_reading_progress_markup() {
	if ( ! postfolio_blocks_module_enabled( 'reading_progress' ) || ! is_singular( 'post' ) ) {
		return;
	}

	echo '<div class="postfolio-reading-progress" aria-hidden="true"><span class="postfolio-reading-progress__bar"></span></div>';
}
add_action( 'wp_body_open', 'postfolio_blocks_reading_progress_markup' );

/**
 * Inline SVG icons used by the floating buttons.
 *
 * @param string $name Icon name.
 * @return string
 */
function postfolio_blocks_icon( $name ) {
	$paths = array(
		'arrow-up' => '<path d="M12 19V5M5 12l7-7 7 7"/>',
		'moon'     => '<path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/>',
		'sun'      => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
		'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/>',
		'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
		'chat'     => '<path d="M21 11.5a8.4 8.4 0 0 1-12.4 7.4L3 21l2.1-5.6A8.5 8.5 0 1 1 21 11.5z"/>',
	);

	if ( ! isset( $paths[ $name ] ) ) {
		return '';
	}

	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $paths[ $name ] . '</svg>';
}

/**
 * Print floating buttons (back to top, theme toggle, contact) in the footer.
 */
function postfolio_blocks_floating_markup() {
	if ( ! postfolio_blocks_modules_active() ) {
		return;
	}

	$modules = postfolio_blocks_get_modules();
	$allowed = array(
		'svg'    => array(
			'xmlns'           => true,
			'viewbox'         => true,
			'width'           => true,
			'height'          => true,
			'fill'            => true,
			'stroke'          => true,
			'stroke-width'    => true,
			'stroke-linecap'  => true,
			'stroke-linejoin' => true,
			'aria-hidden'     => true,
			'focusable'       => true,
		),
		'path'   => array( 'd' => true ),
		'circle' => array(
			'cx' => true,
			'cy' => true,
			'r'  => true,
		),
		'rect'   => array(
			'x'      => true,
			'y'      => true,
			'width'  => true,
			'height' => true,
			'rx'     => true,
		),
	);

	echo '<div class="postfolio-floating postfolio-floating--end">';

	if ( ! empty( $modules['dark_mode'] ) ) {
		printf(
			'<button type="button" class="postfolio-fab postfolio-theme-toggle" aria-pressed="false" aria-label="%1$s"><span class="postfolio-theme-toggle__dark">%2$s</span><span class="postfolio-theme-toggle__light">%3$s</span></button>',
			esc_attr__( 'Toggle dark mode', 'postfolio-blocks' ),
			wp_kses( postfolio_blocks_icon( 'moon' ), $allowed ),
			wp_kses( postfolio_blocks_icon( 'sun' ), $allowed )
		);
	}

	if ( ! empty( $modules['back_to_top'] ) ) {
		printf(
			'<button type="button" class="postfolio-fab postfolio-back-to-top" aria-label="%1$s" hidden>%2$s</button>',
			esc_attr__( 'Back to top', 'postfolio-blocks' ),
			wp_kses( postfolio_blocks_icon( 'arrow-up' ), $allowed )
		);
	}

	echo '</div>';

	if ( empty( $modules['floating_contact'] ) ) {
		return;
	}

	$links = array();

	if ( ! empty( $modules['contact_phone'] ) ) {
		$links[] = array( 'tel:' . preg_replace( '/[^0-9+]/', '', $modules['contact_phone'] ), __( 'Call us', 'postfolio-blocks' ), 'phone' );
	}

	if ( ! empty( $modules['contact_email'] ) ) {
		$links[] = array( 'mailto:' . antispambot( $modules['contact_email'] ), __( 'Email us', 'postfolio-blocks' ), 'mail' );
	}

	if ( ! empty( $modules['contact_whatsapp'] ) ) {
		$links[] = array( 'https://wa.me/' . $modules['contact_whatsapp'], __( 'Chat on WhatsApp', 'postfolio-blocks' ), 'chat' );
	}

	if ( ! $links ) {
		return;
	}

	echo '<div class="postfolio-floating postfolio-floating--start">';

	foreach ( $links as $link ) {
		printf(
			'<a class="postfolio-fab postfolio-fab--%1$s" href="%2$s" aria-label="%3$s"%4$s>%5$s</a>',
			esc_attr( $link[2] ),
			esc_url( $link[0], array( 'tel', 'mailto', 'https' ) ),
			esc_attr( $link[1] ),
			'chat' === $link[2] ? ' target="_blank" rel="noopener noreferrer"' : '',
			wp_kses( postfolio_blocks_icon( $link[2] ), $allowed )
		);
	}

	echo '</div>';
}
add_action( 'wp_footer', 'postfolio_blocks_floating_markup' );

/**
 * Register the "Theme toggle" button style while dark mode is enabled, so a
 * light/dark switch can also be placed anywhere, for example in a header.
 */
function postfolio_blocks_theme_toggle_block_style() {
	if ( ! postfolio_blocks_module_enabled( 'dark_mode' ) ) {
		return;
	}

	register_block_style(
		'core/button',
		array(
			'name'  => 'theme-toggle',
			'label' => _x( 'Dark mode toggle', 'Block style', 'postfolio-blocks' ),
		)
	);
}
add_action( 'init', 'postfolio_blocks_theme_toggle_block_style' );
