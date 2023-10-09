<?php

/**
 * Enqueues block assets for frontend and backend editor.
 */
function twentig_block_assets() {

	$asset_file             = include TWENTIG_PATH . 'dist/index.asset.php';
	$block_library_filename = wp_should_load_separate_core_block_assets() ? 'blocks/common' : 'style-index';

	wp_enqueue_style(
		'twentig-blocks',
		plugins_url( 'dist/' . $block_library_filename . '.css', dirname( __FILE__ ) ),
		array(),
		$asset_file['version']
	);
}
add_action( 'enqueue_block_assets', 'twentig_block_assets' );

/**
 * Enqueues block assets for backend editor.
 */
function twentig_block_editor_assets() {

	global $pagenow;

	$asset_file = include TWENTIG_PATH . 'dist/index.asset.php';
	$deps       = $asset_file['dependencies'];
	$env        = 'post-editor';

	// Removes editor related assets when viewing the customizer or widgets screen to prevent conflict with the widgets editor.
	if ( is_customize_preview() || 'widgets.php' === $pagenow ) {
		$env           = 'no-post-editor';
		$edit_post_key = array_search( 'wp-edit-post', $deps );
		if ( false !== $edit_post_key ) {
			unset( $deps[ $edit_post_key ] );
		}
		$edit_site_key = array_search( 'wp-edit-site', $deps );
		if ( false !== $edit_site_key ) {
			unset( $deps[ $edit_site_key ] );
		}
	}
	
	if ( 'site-editor.php' === $pagenow ) {
		$env = 'site-editor';
	}

	wp_enqueue_script(
		'twentig-blocks-editor',
		plugins_url( '/dist/index.js', dirname( __FILE__ ) ),
		$deps,
		$asset_file['version'],
		false
	);

	$config = array(
		'theme'           => get_template(),
		'block_theme'     => wp_is_block_theme(),
		'spacing_support' => ! current_theme_supports( 'twentig-theme' ),
		'branch'          => str_replace( array( '.', ',' ), '-', (float) get_bloginfo( 'version' ) ),
		'cssClasses'      => twentig_get_block_css_classes(),
		'fonts'           => 'site-editor' === $env ? twentig_get_fonts_data() : array(),
		'spacing_sizes'   => twentig_get_spacing_sizes(),
		'env'             => $env,
	);

	wp_localize_script( 'twentig-blocks-editor', 'twentigEditorConfig', $config );

	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations( 'twentig-blocks-editor', 'twentig' );
	}

	wp_enqueue_style(
		'twentig-editor',
		plugins_url( 'dist/index.css', dirname( __FILE__ ) ),
		array( 'wp-edit-blocks' ),
		$asset_file['version']
	);
}
add_action( 'enqueue_block_editor_assets', 'twentig_block_editor_assets' );

/**
 * Determines if the theme supports Twentig spacing.
 */
function twentig_theme_supports_spacing() {
	if ( current_theme_supports( 'tw-spacing' ) && get_option( 'twentig_global_spacing', twentig_default_global_spacing() ) ) {
		return true;
	}
	return false;
}

/**
 * Enqueue spacing styles inside the editor.
 */
function twentig_block_editor_spacing_styles() {
	$spacing_sizes = twentig_get_spacing_sizes();
	$css_spacing   = '';

	foreach ( $spacing_sizes as $preset ) {
		$css_spacing .= '.tw-mt-' . esc_attr( $preset['slug'] ) . '{margin-top:' . esc_attr( $preset['size'] ) . '!important;}';
		$css_spacing .= '.tw-mb-' . esc_attr( $preset['slug'] ) . '{margin-bottom:' . esc_attr( $preset['size'] ) . '!important;}';
	}

	wp_add_inline_style( 'wp-block-library', $css_spacing );
}
add_action( 'admin_init', 'twentig_block_editor_spacing_styles' );

/**
 * Processes the fonts json file and returns an array with its contents.
 * @see read_json_file() in class-wp-theme-json-resolver.php
 */
function twentig_get_fonts_data() {
	$file_path = TWENTIG_PATH . 'dist/js/webfonts.json';
	$config    = array();
	
	$decoded_file = wp_json_file_decode( $file_path, array( 'associative' => true ) );
	if ( is_array( $decoded_file ) ) {
		$config = $decoded_file;
	}
	
	return $config;
}

/**
 * Override block styles.
 */
function twentig_override_block_styles() {

	if ( ! wp_should_load_separate_core_block_assets() ) {
		return;
	}

	// Override core blocks style.
	$overriden_blocks = array(
		'columns',
		'gallery',
		'media-text',
		'post-template',
		'latest-posts',
	);

	foreach ( $overriden_blocks as $block_name ) {
		$style_path = TWENTIG_PATH . "dist/blocks/$block_name/block.css";
		if ( file_exists( $style_path ) ) {
			wp_deregister_style( "wp-block-{$block_name}" );
			wp_register_style(
				"wp-block-{$block_name}",
				TWENTIG_ASSETS_URI . "/blocks/{$block_name}/block.css",
				array(),
				TWENTIG_VERSION
			);

			// Add a reference to the stylesheet's path to allow calculations for inlining styles in `wp_head`.
			wp_style_add_data( "wp-block-{$block_name}", 'path', $style_path );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'twentig_override_block_styles', 9 );

/**
 * Adds block-specific inline styles.
 */
function twentig_enqueue_block_styles() {
	
	if ( ! wp_should_load_separate_core_block_assets() ) {
		return;
	}

	foreach ( glob( TWENTIG_PATH . 'dist/blocks/*/style.css' ) as $path ) {
		$block_name = basename( dirname( $path ) );
		wp_enqueue_block_style( 
			"core/$block_name", 
			array(
				'handle' => "tw-block-$block_name",
				'src'    => TWENTIG_ASSETS_URI . "/blocks/{$block_name}/style.css",
				'path'   => $path,
			)
		);
	}
}
add_action( 'after_setup_theme', 'twentig_enqueue_block_styles' );

/**
 * Adds margin and visibility classes to the global styles.
 */
function twentig_enqueue_class_styles() {

	$spacing_sizes = twentig_get_spacing_sizes();
	$css_spacing   = '';

	foreach ( $spacing_sizes as $preset ) {
		$css_spacing .= '.tw-mt-' . esc_attr( $preset['slug'] ) . '{margin-top:' . esc_attr( $preset['size'] ) . '!important;}';
		$css_spacing .= '.tw-mb-' . esc_attr( $preset['slug'] ) . '{margin-bottom:' . esc_attr( $preset['size'] ) . '!important;}';
	}

	$breakpoints       = apply_filters( 'twentig_breakpoints', array( 'mobile' => 768, 'tablet' => 1024 ) );
	$mobile_breakpoint = isset( $breakpoints['mobile'] ) ? $breakpoints['mobile'] : 768;

	$css_visibility  = '@media (max-width: '. esc_attr( (int) $mobile_breakpoint - 1 ) . 'px){.tw-sm-hidden{display:none !important;}}';
	$css_visibility .= '@media (min-width: '. esc_attr( (int) $mobile_breakpoint ) . 'px) and (max-width: 1023px){.tw-md-hidden{display:none !important;}}';	
	$css_visibility .= '@media (min-width: 1024px){.tw-lg-hidden {display:none !important;}}';
	
	$css_global = $css_spacing . $css_visibility;

	wp_add_inline_style( 'global-styles', $css_global );
}
add_action( 'wp_enqueue_scripts', 'twentig_enqueue_class_styles' );

/**
 * Gets spacing sizes.
 */
function twentig_get_spacing_sizes() {

	$sizes = array(
		array(
			'slug' => '0',
			'name' => '0px',
			'size' => '0px',
		),
		array(
			'slug' => '1',
			'name' => '5px',
			'size' => '5px',
		),
		array(
			'slug' => '2',
			'name' => '10px',
			'size' => '10px',
		),
		array(
			'slug' => '3',
			'name' => '15px',
			'size' => '15px',
		),
		array(
			'slug' => '4',
			'name' => '20px',
			'size' => '20px',
		),
		array(
			'slug' => '5',
			'name' => '30px',
			'size' => '30px',
		),
		array(
			'slug' => '6',
			'name' => '40px',
			'size' => '40px',
		),
		array(
			'slug' => '7',
			'name' => '50px',
			'size' => '50px',
		),
		array(
			'slug' => '8',
			'name' => '60px',
			'size' => '60px',
		),
		array(
			'slug' => '9',
			'name' => '80px',
			'size' => '80px',
		),
		array(
			'slug' => '10',
			'name' => '100px',
			'size' => '100px',
		),
		array(
			'slug' => 'auto',
			'name' => 'auto',
			'size' => 'auto',
		),
	);

	return apply_filters( 'twentig_spacing_sizes', $sizes );
}

/**
 * Accesses an array in depth based on a path of keys. Equivalent of _wp_array_get.
 * *
 * @param array $array   An array from which we want to retrieve some information.
 * @param array $path    An array of keys describing the path with which to retrieve information.
 * @param mixed $default Optional. The return value if the path does not exist within the array,
 *                       or if `$array` or `$path` are not arrays. Default null.
 * @return mixed The value from the path specified.
 */
function twentig_array_get( $array, $path, $default = null ) {
	if ( ! is_array( $path ) || 0 === count( $path ) ) {
		return $default;
	}

	foreach ( $path as $path_element ) {
		if (
			! is_array( $array ) ||
			( ! is_string( $path_element ) && ! is_integer( $path_element ) && ! is_null( $path_element ) ) ||
			! array_key_exists( $path_element, $array )
		) {
			return $default;
		}
		$array = $array[ $path_element ];
	}

	return $array;
}

/**
 * Filters the columns block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_columns_block( $block_content, $block ) {

	$attributes     = isset( $block['attrs'] ) ? $block['attrs'] : array();
	$classnames     = isset( $attributes['className'] ) ? $attributes['className'] : '';
	$gap            = twentig_array_get( $attributes, array( 'style', 'spacing', 'blockGap' ), null );
	$horizontal_gap = is_array( $gap ) ? twentig_array_get( $attributes, array( 'style', 'spacing', 'blockGap', 'left' ), null ) : $gap;
	$vertical_gap   = is_array( $gap ) ? twentig_array_get( $attributes, array( 'style', 'spacing', 'blockGap', 'top' ), null ) : null;
	$new_classnames = array();

	if ( $vertical_gap && ! $horizontal_gap ) {
		$new_classnames[] = 'tw-cols-h-gap';
	}

	if ( twentig_theme_supports_spacing() && $horizontal_gap && str_contains( $horizontal_gap, 'px' ) ) {
		$gap_value = intval( $horizontal_gap );
		if ( $gap_value > 32 ) {
			$new_classnames[] = 'tw-large-gap';
		}
	}

	if ( $new_classnames ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		foreach ( $new_classnames as $class_name ) {
			$tag_processor->add_class( $class_name );
		}
		$block_content = $tag_processor->get_updated_html();
	}

	if ( str_contains( $classnames, 'tw-cols-' ) || str_contains( $classnames, 'tw-row-gap' ) ) {
		wp_enqueue_block_style(
			'core/columns',
			array(
				'handle' => 'tw-block-columns-compat',
				'src'    => TWENTIG_ASSETS_URI . '/blocks/columns/compat.css',
				'path'   => TWENTIG_PATH . 'dist/blocks/columns/compat.css',
			) 
		);
	}

	return $block_content;
}
add_filter( 'render_block_core/columns', 'twentig_filter_columns_block', 10, 2 );

/**
 * Filters the column block output to add a CSS var to store the width attribute.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_column_block( $block_content, $block ) {

	if ( wp_should_load_separate_core_block_assets() ) {
		return $block_content;
	}

	if ( isset( $block['attrs'] ) && isset( $block['attrs']['width'] ) ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		
		$style_attr = $tag_processor->get_attribute( 'style' );
		$style      = '--col-width:' . $block['attrs']['width'] . ';' . $style_attr;
		
		$tag_processor->set_attribute( 'style', $style );
		$block_content = $tag_processor->get_updated_html();
	}

	return $block_content;
}
add_filter( 'render_block_core/column', 'twentig_filter_column_block', 10, 2 );

/**
 * Filters the post author block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_post_author_block( $block_content, $block ) {
	if ( ! empty( $block['attrs'] ) && isset( $block['attrs']['twIsLink'] ) && $block['attrs']['twIsLink'] ) {
		$author_id = get_post_field( 'post_author', get_the_ID() );
		if ( empty( $author_id ) ) {
			return $block_content;
		}

		$author_display_name = get_the_author_meta( 'display_name', $author_id );
		$author_post_url     = get_author_posts_url( $author_id );

		$block_content = str_replace(
			'<p class="wp-block-post-author__name">' . $author_display_name,
			sprintf( '<p class="wp-block-post-author__name"><a href="%s">%s</a>', esc_url( $author_post_url ), esc_html( $author_display_name ) ),
			$block_content
		);
	}
	return $block_content;
}
add_filter( 'render_block_core/post-author', 'twentig_filter_post_author_block', 10, 2 );

/**
 * Filters the post excerpt block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_post_excerpt_block( $block_content, $block ) {

	if ( ! empty( $block['attrs'] ) && isset( $block['attrs']['excerptLength'] ) ) {
		return $block_content;
	}

	if ( empty( $block_content ) || has_excerpt() ) {
		return $block_content;
	}

	add_filter(
		'excerpt_more',
		function() {
			return '&hellip;';
		} 
	);

	if ( ! empty( $block['attrs'] ) && isset( $block['attrs']['twExcerptLength'] ) ) {

		$attributes            = $block['attrs'];
		$more_text             = ! empty( $attributes['moreText'] ) ? '<a class="wp-block-post-excerpt__more-link" href="' . esc_url( get_the_permalink() ) . '">' . $attributes['moreText'] . '</a>' : '';
		$excerpt_length        = $attributes['twExcerptLength'];
		$filter_excerpt_length = function() use ( $excerpt_length ) {
			return $excerpt_length;
		};
		add_filter( 'excerpt_length', $filter_excerpt_length );

		$excerpt               = get_the_excerpt();
		$content               = '<p class="wp-block-post-excerpt__excerpt">' . $excerpt;
		$show_more_on_new_line = ! isset( $attributes['showMoreOnNewLine'] ) || $attributes['showMoreOnNewLine'];
		if ( $show_more_on_new_line && ! empty( $more_text ) ) {
			$content .= '</p>';
		} else {
			$content .= " $more_text</p>";
		}
		$block_content = preg_replace( '/<p class=\"wp-block-post-excerpt__excerpt\">.*?<\/p>/', $content, $block_content );
		remove_filter( 'excerpt_length', $filter_excerpt_length );
		return $block_content;
	}

	return $block_content;
}
add_filter( 'render_block_core/post-excerpt', 'twentig_filter_post_excerpt_block', 10, 2 );

/**
 * Filters the query block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_query_block( $block_content, $block ) {

	$attributes  = isset( $block['attrs'] ) ? $block['attrs'] : array();
	$layout      = twentig_array_get( $attributes, array( 'displayLayout', 'type' ), null );
	$class_names = array();
	$style       = '';

	if ( 'flex' === $layout ) {
		if ( isset( $attributes['twVerticalAlignment'] ) ) {
			$class_names[] = 'tw-valign-' . $attributes['twVerticalAlignment'];
		}
		if ( isset( $attributes['twColumnWidth'] ) ) {
			$class_names[] = 'tw-cols-' . $attributes['twColumnWidth'];
		}
		if ( isset( $attributes['twBlockGapHorizontal'] ) ) {
			$style .= '--tw-gap-x:' . $attributes['twBlockGapHorizontal'] . ';';
		}
	}

	if ( isset( $attributes['twBlockGapVertical'] ) ) {
		$style .= '--tw-gap-y:' . $attributes['twBlockGapVertical'] . ';';
	}

	if ( $style || $class_names ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		if ( $style ) {
			$style_attr = $tag_processor->get_attribute( 'style' );
			$style     .= $style_attr;
			$tag_processor->set_attribute( 'style', $style );
		}

		if ( $class_names ) {
			foreach ( $class_names as $class_name ) {
				$tag_processor->add_class( $class_name );
			}
		}

		$block_content = $tag_processor->get_updated_html();
	}

	if ( 'flex' === $layout ) {
		$columns     = twentig_array_get( $attributes, array( 'displayLayout', 'columns' ), null );
		$image_sizes = '';
		
		if ( 2 === $columns ) {
			$image_sizes = '(min-width: 1024px) calc(50vw - 60px), (min-width: 640px) calc(50vw - 40px), calc(100vw - 40px)';
		} elseif ( 3 === $columns ) {
			$image_sizes = '(min-width: 1024px) calc(33vw - 50px), (min-width: 640px) calc(50vw - 40px), calc(100vw - 40px)';
		} else {
			$image_sizes = '(min-width: 1024px) calc(25vw - 40px), (min-width: 640px) calc(50vw - 40px), calc(100vw - 40px)';
		}

		$block_content = preg_replace( '/sizes="([^>]+?)"/', 'sizes="' . $image_sizes . '"', $block_content );
	}

	return $block_content;
}
add_filter( 'render_block_core/query', 'twentig_filter_query_block', 10, 2 );

/**
 * Filters the cover block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_cover_block( $block_content, $block ) {

	$attributes = isset( $block['attrs'] ) ? $block['attrs'] : array();

	$image_id = 0;
	if ( isset( $attributes['id'] ) ) {
		$image_id = $attributes['id'];
	} elseif ( isset( $attributes['useFeaturedImage'] ) ) {
		$image_id = get_post_thumbnail_id();
	}

	if ( $image_id ) {
		$image_meta = wp_get_attachment_metadata( $image_id );
		if ( $image_meta && isset( $image_meta['width'] ) ) {
			$width = absint( $image_meta['width'] );
			if ( $width ) {
				//cf wp_image_add_srcset_and_sizes()
				$sizes = sprintf( '(max-width: 799px) 200vw,(max-width: %1$dpx) 100vw,%1$dpx', $width );
				if ( isset( $attributes['twRatio'] ) ) {
					$sizes = sprintf( '(max-width: 799px) 125vw,(max-width: %1$dpx) 100vw,%1$dpx', $width );
				}
				$tag_processor = new WP_HTML_Tag_Processor( $block_content );
				$tag_processor->next_tag( 'img' );
				$tag_processor->set_attribute( 'sizes', $sizes );
				$block_content = $tag_processor->get_updated_html();
			}
		}
	}
	
	return $block_content;
}
add_filter( 'render_block_core/cover', 'twentig_filter_cover_block', 10, 2 );

/**
 * Filters the navigation block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_navigation_block( $block_content, $block ) {
	
	if ( ! empty( $block['attrs'] ) ) {

		$attributes   = $block['attrs'];
		$hover_style  = isset( $attributes['twHoverStyle'] ) ? $attributes['twHoverStyle'] : '';
		$active_style = isset( $attributes['twActiveStyle'] ) ? $attributes['twActiveStyle'] : $hover_style;
		$overlay_menu = isset( $attributes['overlayMenu'] ) ? $attributes['overlayMenu'] : 'mobile';
		$class_names  = array();

		if ( $hover_style ) {
			$class_names[] = 'tw-nav-hover-' . $hover_style;
		}

		if ( $active_style ) {
			$class_names[] = 'tw-nav-active-' . $active_style;
		}

		if ( in_array( $overlay_menu, array( 'mobile', 'always' ), true ) ) {
			if ( isset( $attributes['twBreakpoint'] ) && 'mobile' === $overlay_menu ) {
				$class_names[] = 'tw-break-' . $attributes['twBreakpoint'];
			}
			if ( isset( $attributes['twMenuIconSize'] ) ) {
				$class_names[] = 'tw-icon-' . $attributes['twMenuIconSize'];
			}
		}

		if ( isset( $attributes['twGap'] ) ) {
			$class_names[] = 'tw-gap-' . $attributes['twGap'];
		}

		if ( $class_names ) {
			$tag_processor = new WP_HTML_Tag_Processor( $block_content );
			$tag_processor->next_tag();
			foreach ( $class_names as $class_name ) {
				$tag_processor->add_class( $class_name );
			}
			$block_content = $tag_processor->get_updated_html();
		}

		if ( isset( $block['attrs']['icon'] ) ) {
			if ( 'menu' === $block['attrs']['icon'] ) {
				$block_content = str_replace(
					'<path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z" />',
					'<rect x="4" y="6.5" width="16" height="1.5"></rect><rect x="4" y="11.25" width="16" height="1.5"></rect><rect x="4" y="16" width="16" height="1.5"></rect>',
					$block_content 
				);
			}
		} elseif ( isset( $block['attrs']['twMenuIcon'] ) ) {
			$current_icon = '<rect x="4" y="7.5" width="16" height="1.5" /><rect x="4" y="15" width="16" height="1.5" />';
			if ( 'three-lines' === $block['attrs']['twMenuIcon'] ) {
				$new_icon      = '<rect x="4" y="6.5" width="16" height="1.5"></rect><rect x="4" y="11.25" width="16" height="1.5"></rect><rect x="4" y="16" width="16" height="1.5"></rect>';
				$block_content = str_replace( $current_icon, $new_icon, $block_content );
			} elseif ( 'plus' === $block['attrs']['twMenuIcon'] ) {
				$new_icon      = '<path d="M21.75 11.3H12.7V2.25h-1.4v9.05H2.25v1.4h9.05v9.05h1.4V12.7h9.05v-1.4"></path>';
				$block_content = str_replace( $current_icon, $new_icon, $block_content );
			}
		}
	}

	return $block_content;
}
add_filter( 'render_block_core/navigation', 'twentig_filter_navigation_block', 10, 2 );

/**
 * Filters the navigation block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_navigation_link_block( $block_content, $block ) {

	$attributes = isset( $block['attrs'] ) ? $block['attrs'] : array();
	$classnames = isset( $attributes['className'] ) ? $attributes['className'] : '';

	if ( str_contains( $classnames, 'is-style-tw-button-fill' ) || str_contains( $classnames, 'is-style-tw-button-outline' ) ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		$tag_processor->add_class( 'wp-element-button' );			
		$block_content = $tag_processor->get_updated_html();	
	}

	return $block_content;
}
add_filter( 'render_block_core/navigation-link', 'twentig_filter_navigation_link_block', 10, 2 );

/**
 * Filters the site logo block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_site_logo_block( $block_content, $block ) {

	if ( ! empty( $block['attrs'] ) && isset( $block['attrs']['twWidthMobile'] ) ) {

		$logo_class = wp_unique_id( 'tw-logo-' );

		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		$tag_processor->add_class( $logo_class );
		$block_content = $tag_processor->get_updated_html();
		
		$style            = '@media(max-width:767px){.wp-block-site-logo.' . $logo_class . ' img{width: ' . esc_attr( $block['attrs']['twWidthMobile'] ) . 'px;height:auto;}}';
		$action_hook_name = wp_is_block_theme() ? 'wp_head' : 'wp_footer';
		add_action(
			$action_hook_name,
			static function () use ( $style ) {
				echo "<style>$style</style>";
			}
		);
		
	}
	return $block_content;
}
add_filter( 'render_block_core/site-logo', 'twentig_filter_site_logo_block', 10, 2 );

/**
 * Filters the gallery block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_gallery_block( $block_content, $block ) {

	if ( ! twentig_theme_supports_spacing() ) {
		return $block_content;
	}

	$attributes = isset( $block['attrs'] ) ? $block['attrs'] : array();
	$gap        = twentig_array_get( $attributes, array( 'style', 'spacing', 'blockGap' ), null );
	$gap        = is_array( $gap ) ? twentig_array_get( $attributes, array( 'style', 'spacing', 'blockGap', 'left' ), null ) : $gap;
	$gap        = $gap ? $gap : '16px';

	if ( $gap && str_contains( $gap, 'px' ) ) {
		$class_names = array();
		$gap_value   = intval( $gap );

		if ( $gap_value > 32 ) {
			$class_names[] = 'tw-large-gap';
		} elseif ( $gap_value > 16 ) {
			$class_names[] = 'tw-medium-gap';
		}
		if ( $class_names ) {
			$tag_processor = new WP_HTML_Tag_Processor( $block_content );
			$tag_processor->next_tag();
			$tag_processor->add_class( implode( ' ', $class_names ) );
			$block_content = $tag_processor->get_updated_html();
		}
	}
	return $block_content;
}
add_filter( 'render_block_core/gallery', 'twentig_filter_gallery_block', 10, 2 );

/**
 * Filters the separator block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_separator_block( $block_content, $block ) {
	$attributes = isset( $block['attrs'] ) ? $block['attrs'] : array();

	if ( isset( $attributes['className'] )
		&& 
		( str_contains( $attributes['className'], 'is-style-dots' ) || str_contains( $attributes['className'], 'is-style-tw-asterisks' ) )
	) {
		return $block_content;
	}
	
	$class_names = array();
	$style       = '';

	if ( isset( $attributes['twWidth'] ) && $attributes['twWidth'] ) {
		$style .= 'width:' . esc_attr( $attributes['twWidth'] ) . ';max-width:100%;';
	}

	if ( isset( $attributes['twHeight'] ) && $attributes['twHeight'] ) {
		$style .= 'height:' . esc_attr( $attributes['twHeight'] ) . ';';
		if ( isset( $attributes['twWidth'] ) && $attributes['twWidth'] && intval( $attributes['twHeight'] ) > intval( $attributes['twWidth'] ) ) {
			$class_names[] = 'is-vertical';
		}
	}

	if ( $class_names || $style ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();

		if ( $class_names ) {
			$tag_processor->add_class( implode( ' ', $class_names ) );
		}

		if ( $style ) {
			$style_attr = $tag_processor->get_attribute( 'style' );
			$style     .= $style_attr;
			$tag_processor->set_attribute( 'style', $style );
		}

		$block_content = $tag_processor->get_updated_html();
	}

	return $block_content;
}
add_filter( 'render_block_core/separator', 'twentig_filter_separator_block', 10, 2 );

/**
 * Filters the post terms block output.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 */
function twentig_filter_post_terms_block( $block_content, $block ) {

	if ( ! empty( $block['attrs'] ) && isset( $block['attrs']['twUnlink'] ) ) {
		$tag_processor = new WP_HTML_Tag_Processor( $block_content );
		$tag_processor->next_tag();
		$tag_processor->add_class( 'tw-no-link' );
		while ( $tag_processor->next_tag( array( 'tag_name' => 'a' ) ) ) {
			$tag_processor->remove_attribute( 'href' );
			$tag_processor->remove_attribute( 'rel' );
		}
		$block_content = $tag_processor->get_updated_html();
	}
	return $block_content;
}
add_filter( 'render_block_core/post-terms', 'twentig_filter_post_terms_block', 10, 2 );

require TWENTIG_PATH . 'inc/shape.php';
