<?php
/**
 * Twentig plugin file.
 *
 * @package twentig
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require TWENTIG_PATH . 'inc/about.php';
require TWENTIG_PATH . 'inc/settings.php';
require TWENTIG_PATH . 'inc/blocks.php';
require TWENTIG_PATH . 'inc/block-styles.php';
require TWENTIG_PATH . 'inc/block-presets.php';
require TWENTIG_PATH . 'inc/block-patterns.php';

if ( ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
	require TWENTIG_PATH . 'inc/compat/wordpress-6.2/html-api/class-wp-html-attribute-token.php';
	require TWENTIG_PATH . 'inc/compat/wordpress-6.2/html-api/class-wp-html-span.php';
	require TWENTIG_PATH . 'inc/compat/wordpress-6.2/html-api/class-wp-html-text-replacement.php';
	require TWENTIG_PATH . 'inc/compat/wordpress-6.2/html-api/class-wp-html-tag-processor.php';
}

function twentig_theme_support_includes() {
	$template = get_template();

	if ( wp_is_block_theme() ) {
		require TWENTIG_PATH . 'inc/block-themes.php';
		if ( 'twentytwentytwo' === $template ) {
			require TWENTIG_PATH . 'inc/twentytwentytwo.php';
		}
	} elseif ( 'twentytwentyone' === $template ) {
		require TWENTIG_PATH . 'inc/classic/twentytwentyone/twentytwentyone.php';
	} elseif ( 'twentytwenty' === $template ) {
		require TWENTIG_PATH . 'inc/classic/twentytwenty/twentytwenty.php';
	}
}
twentig_theme_support_includes();
