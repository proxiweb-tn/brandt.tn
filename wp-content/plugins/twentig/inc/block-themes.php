<?php
/**
 * Additional functionalities for block themes.
 *
 * @package twentig
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require TWENTIG_PATH . 'inc/custom-fonts.php';
require TWENTIG_PATH . 'inc/wptt-webfont-loader.php';

/**
 * Enqueue styles for block themes: spacing, layout, fonts.
 */
function twentig_block_theme_enqueue_scripts() {

	if ( twentig_theme_supports_spacing() ) {
		wp_enqueue_style(
			'twentig-global-spacing',
			TWENTIG_ASSETS_URI . '/blocks/tw-spacing.css',
			array(),
			TWENTIG_VERSION
		);
	}
	
	$css = '';

	/* Fix columns core spacing */
	$cols_horizontal_gap = twentig_theme_supports_spacing() ? '32px' : 'var(--wp--style--block-gap)';
	$cols_spacing        = wp_get_global_styles(
		array( 'spacing', 'blockGap' ),
		array( 'block_name' => 'core/columns' )
	);

	if ( $cols_spacing ) {
		if ( is_array( $cols_spacing ) && isset( $cols_spacing['left'] ) ) {
			$cols_horizontal_gap = $cols_spacing['left'];
		} elseif ( is_string( $cols_spacing ) ) {
			$cols_horizontal_gap = $cols_spacing;
		}
	}

	$css .= "body .wp-block-columns.tw-cols-h-gap {column-gap:{$cols_horizontal_gap};}";

	/* Buttons inside navigation */
	$block_button_radius = wp_get_global_styles(
		array( 'border', 'radius' ),
		array( 'block_name' => 'core/button' )
	);

	if ( $block_button_radius ) {
		$radius_value = '';
		if ( is_string( $block_button_radius ) ) {
			$radius_value = $block_button_radius;
		} elseif ( is_array( $block_button_radius ) && isset( $block_button_radius['topLeft'] ) ) {
			$radius_value = $block_button_radius['topLeft'];
		}
		if ( $radius_value ) {
			$css .= '.wp-block-navigation-link.wp-element-button { border-radius:' . esc_attr( $radius_value ) . ';}';
		}
	}

	/* Adds font css variables. */
	$css .= twentig_get_custom_font_css_variables();

	if ( $css ) {		
		wp_add_inline_style( 'global-styles', twentig_minify_css( $css ) );
	}

	/* Enqueue fonts */

	$fonts         = twentig_get_additional_fonts();
	$enqueue_fonts = array();
	
	if ( count( $fonts ) < 3 ) {
		foreach ( $fonts as $font ) {
			$enqueue_fonts[] = $font['src'];
		}
	} else {
	
		global $template_html;

		$merged_json      = WP_Theme_JSON_Resolver::get_merged_data()->get_raw_data();
		$theme_fonts      = $merged_json['settings']['typography']['fontFamilies']['theme'];
		$global_styles    = wp_get_global_styles();
		$stylesheet       = json_encode( $global_styles );		
		$content_to_check = $stylesheet . $template_html;

		foreach ( $theme_fonts as $index => $font ) {
			if ( isset( $font['provider'] ) && $font['provider'] === 'google' ) {
				unset( $theme_fonts[ $index ] );
			}
		}

		foreach ( $fonts as $font ) {
			$family_slug = sanitize_title( $font['slug'] );
			$family      = $font['fontFamily'];
			if ( in_array( $family_slug, array_column( $theme_fonts, 'slug' ) ) ) {
				continue;
			}
			
			if ( str_contains( $content_to_check, json_encode( $family ) ) || 
				str_contains( $content_to_check, 'var(--wp--preset--font-family--' . $family_slug . ')' ) ||
				str_contains( $content_to_check, 'has-' . $family_slug . '-font-family' ) ||
				str_contains( $content_to_check, 'var:preset|font-family|' . $family_slug ) ) {
					$enqueue_fonts[] = $font['src'];
			}
		}
	}

	if ( ! empty( $enqueue_fonts ) ) {
		$typography = get_option( 'twentig_typography' );
		$local      = isset( $typography['local'] ) ? $typography['local'] : true;
		$remote_url = 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', array_unique( array_values( $enqueue_fonts ) ) ) . '&display=swap';

		if ( $local ) {
			wp_register_style( 'twentig-webfonts', '' );
			wp_enqueue_style( 'twentig-webfonts' );
			wp_add_inline_style( 'twentig-webfonts', twentig_minify_css( wptt_get_webfont_styles( $remote_url ) ) );
		} else {
			wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
				'twentig-google-fonts',
				esc_url_raw( $remote_url ),
				array(),
				null
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'twentig_block_theme_enqueue_scripts', 11 );

/**
 * Enqueue styles inside the editor.
 */
function twentig_block_theme_editor_styles() {

	if ( twentig_theme_supports_spacing() ) {
		add_editor_style( TWENTIG_ASSETS_URI . '/blocks/tw-spacing-editor.css' );
	}

	$fse_blocks = array(
		'columns',
		'latest-posts',
	);

	foreach ( $fse_blocks as $block_name ) {
		add_editor_style( TWENTIG_ASSETS_URI . "/blocks/{$block_name}/block.css" );
	}
	
	$css           = '';
	$fonts         = twentig_get_additional_fonts();
	$enqueue_fonts = array();

	$css .= twentig_get_custom_font_css_variables();

	foreach ( $fonts as $font ) {
		$enqueue_fonts[] = $font['src'];
	}

	if ( ! empty( $enqueue_fonts ) ) {
		$remote_url = 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', array_unique( array_values( $enqueue_fonts ) ) ) . '&display=swap';
		if ( count( $enqueue_fonts ) < 3 ) {
			$css .= wptt_get_webfont_styles( $remote_url );
		} else {
			$css .= twentig_get_cached_remote_font_styles( $remote_url );
		}
	}

	if ( twentig_theme_supports_spacing() ) {
		$css .= 
			'.block-editor-block-preview__content-iframe .is-root-container > .wp-block-group:not(.has-background) {
				padding: 0 30px;
			}
			
			.block-editor-block-preview__content-iframe .is-root-container > .wp-block-group {
				padding-block: 80px;
			}

			.block-editor-iframe__body .is-root-container:not(.wp-site-blocks):not(.wp-block-post-content) .wp-block .wp-block-group.has-background {
				padding: 40px;
			}

			.block-editor-block-preview__content-iframe .is-root-container .wp-block-columns,
			.block-editor-block-preview__content-iframe .is-root-container .wp-block-columns + *,
			.block-editor-block-preview__content-iframe .is-root-container .alignwide:where(figure,.wp-block-cover,.wp-block-group,.wp-block-media-text,.wp-block-embed),
			.block-editor-block-preview__content-iframe .is-root-container .alignwide:where(figure,.wp-block-cover,.wp-block-group,.wp-block-media-text,.wp-block-embed) + *,
			.block-editor-block-preview__content-iframe .is-root-container > :where(h2,h3,h4),
			.block-editor-block-preview__content-iframe .is-root-container .wp-block-group.alignfull > :where(h2,h3,h4) {
				margin-top: var(--wp--custom--spacing--tw-margin-medium);
			}
			';
	}

	/* Fix columns core spacing */
	$cols_horizontal_gap = twentig_theme_supports_spacing() ? '32px' : 'var(--wp--style--block-gap)';
	$cols_spacing        = wp_get_global_styles(
		array( 'spacing', 'blockGap' ),
		array( 'block_name' => 'core/columns' )
	);

	if ( $cols_spacing ) {
		if ( is_array( $cols_spacing ) && isset( $cols_spacing['left'] ) ) {
			$cols_horizontal_gap = $cols_spacing['left'];
		} elseif ( is_string( $cols_spacing ) ) {
			$cols_horizontal_gap = $cols_spacing;
		}
	}
	$css .= "body .editor-styles-wrapper .wp-block-columns.tw-cols-h-gap{column-gap:{$cols_horizontal_gap};}";

	$block_button_radius = wp_get_global_styles(
		array( 'border', 'radius' ),
		array( 'block_name' => 'core/button' )
	);

	if ( $block_button_radius ) {
		$radius_value = '';
		if ( is_string( $block_button_radius ) ) {
			$radius_value = $block_button_radius;
		} elseif ( is_array( $block_button_radius ) && isset( $block_button_radius['topLeft'] ) ) {
			$radius_value = $block_button_radius['topLeft'];
		}
		if ( $radius_value ) {
			$css .= '.editor-styles-wrapper .wp-block-navigation-link.wp-element-button { border-radius:' . esc_attr( $radius_value ) . ';}';
		}
	}

	wp_add_inline_style( 'wp-block-library', twentig_minify_css( $css ) );
}
add_action( 'admin_init', 'twentig_block_theme_editor_styles' );

/**
 * Hooks into the data provided by the theme to add new font options.
 */
function twentig_filter_theme_json_theme( $theme_json ) {

	$theme_data  = $theme_json->get_data();
	$theme_fonts = array();

	if ( isset( $theme_data['settings'] ) &&
		isset( $theme_data['settings']['typography'] ) &&
		isset( $theme_data['settings']['typography']['fontFamilies'] ) &&
		isset( $theme_data['settings']['typography']['fontFamilies']['theme'] )
	) {
		$theme_fonts = $theme_data['settings']['typography']['fontFamilies']['theme'];
	}

	$new_data = array(
		'version'  => 2,
		'settings' => array(
			'typography' => array(
				'fontFamilies' => twentig_merge_fonts_to_theme_fonts( $theme_fonts ),
			),
		),
	);

	return $theme_json->update_with( $new_data );
}
add_filter( 'wp_theme_json_data_theme', 'twentig_filter_theme_json_theme' );

/**
 * Registers additional global editor settings.
 */
function twentig_register_site_editor_settings() {
	
	register_setting(
		'twentig_typography',
		'twentig_typography',
		array(
			'type'         => 'object',
			'show_in_rest' => array(
				'schema' => array(
					'type'       => 'object',
					'properties' => array(
						'font1'        => array(
							'type' => 'string',
						),
						'font1_styles' => array(
							'type'  => 'array',
							'items' => array(
								'type' => 'string',
							),
						),
						'font2'        => array(
							'type' => 'string',
						),
						'font2_styles' => array(
							'type'  => 'array',
							'items' => array(
								'type' => 'string',
							),
						),
						'local'        => array(
							'type'    => 'boolean',
							'default' => true,
						),
					),
				),
			),
			'default'      => array( 'local' => true ),
		)
	);

	register_setting(
		'twentig_global_spacing',
		'twentig_global_spacing',
		array(
			'type'              => 'boolean',
			'show_in_rest'      => true,
			'default'           => twentig_default_global_spacing(),
			'sanitize_callback' => 'rest_sanitize_boolean',
		)
	);
}
add_action( 'init', 'twentig_register_site_editor_settings' );

/**
 * Adds support for Twentig spacing for block themes except Twentig family.
 */
function twentig_block_theme_support() {
	$theme = get_template();
	if ( current_theme_supports( 'twentig-theme' ) || in_array( $theme, array( 'blockbase' ), true ) ) {
		add_filter( 'twentig_curated_google_fonts', '__return_empty_array' );
	}

	if ( ! current_theme_supports( 'twentig-theme' ) ) {
		add_theme_support( 'tw-spacing' );
	}
}
add_action( 'after_setup_theme', 'twentig_block_theme_support', 11 );

/**
 * Get default value for the Twentig global spacing setting.
 */
function twentig_default_global_spacing() {
	$theme = get_template();
	if ( 'twentytwentytwo' === $theme || 'twentytwentythree' === $theme ) {
		return true;
	}
	return false;
}

/**
 * Migrates Twentig layout settings to core settings.
 */
function twentig_migrate_global_layout_styles() {

	$content_width = get_option( 'twentig_content_size' );
	$wide_width    = get_option( 'twentig_wide_size' );

	if ( $content_width || $wide_width ) {
		$user_data = WP_Theme_JSON_Resolver::get_user_data()->get_raw_data();

		$user_content_width = twentig_array_get( $user_data, array( 'settings', 'layout', 'contentSize' ), null );
		$user_wide_width    = twentig_array_get( $user_data, array( 'settings', 'layout', 'wideSize' ), null );

		$new_settings = array();
		if ( array_key_exists( 'settings', $user_data ) ) {
			$new_settings = $user_data['settings'];
		}

		$update_settings = false;

		if ( $content_width && ! $user_content_width ) {
			if ( empty( $new_settings['layout'] ) ) {
				$new_settings['layout'] = array();
			}
			$new_settings['layout']['contentSize'] = $content_width;
			$update_settings                       = true;
		}

		if ( $wide_width && ! $user_wide_width ) {
			if ( empty( $new_settings['layout'] ) ) {
				$new_settings['layout'] = array();
			}
			$new_settings['layout']['wideSize'] = $wide_width;
			$update_settings                    = true;
		}

		if ( $update_settings ) {
			$user_cpt_id              = WP_Theme_JSON_Resolver::get_user_global_styles_post_id();
			$global_styles_controller = new WP_REST_Global_Styles_Controller();
			
			$update_request = new WP_REST_Request( 'PUT', '/wp/v2/global-styles/' );
			$update_request->set_param( 'id', $user_cpt_id );
			$update_request->set_param( 'settings', $new_settings );
			$global_styles_controller->update_item( $update_request );
			
			delete_transient( 'global_styles' );
			delete_transient( 'global_styles_' . get_stylesheet() );
		}

		delete_option( 'twentig_content_size' );
		delete_option( 'twentig_wide_size' );
	}
}
add_action( 'init', 'twentig_migrate_global_layout_styles', 99 );

/**
 * Remove line breaks and superfluous whitespace.
 *
 * @param string $css String containing CSS.
 */
function twentig_minify_css( $css ) {
	if ( ! defined( 'SCRIPT_DEBUG' ) || ! SCRIPT_DEBUG ) {

		// Remove breaks.
		$css = preg_replace( '/[\r\n\t ]+/', ' ', $css );

		// Remove whitespace around specific characters.
		$css = preg_replace( '/\s+([{};,!>\)])/', '$1', $css );
		$css = preg_replace( '/([{};,:>\(])\s+/', '$1', $css );

		// Remove semicolon followed by closing bracket.
		$css = str_replace( ';}', '}', $css );
	}
	return $css;
}
