<?php
/**
 * Footer block patterns.
 *
 * @package twentig
 */

$copyright    = esc_html_x( '© 2023. Made with Twentig.', 'Block pattern content', 'twentig' );
$social       = '<!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /-->';
$nav_links    = '<!-- wp:navigation-link {"isTopLevelLink":true} /--><!-- wp:navigation-link {"isTopLevelLink":true} /--><!-- wp:navigation-link {"isTopLevelLink":true} /-->';
$vertical_nav = '<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small"} -->' . $nav_links . '<!-- /wp:navigation -->';

twentig_register_block_pattern(
	'twentig/footer-inline-copyright-and-social-links',
	array(
		'title'         => __( 'Footer inline: copyright and social links', 'twentig' ),
		'categories'    => array( 'footer' ),
		'blockTypes'    => array( 'core/template-part/footer' ),
		'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","var:preset|spacing|40"}},"color":{"background":"#f5f5f5"}},"textColor":"black","layout":{"inherit":true}} --><div class="wp-block-group has-black-color has-text-color has-background" style="background-color:#f5f5f5;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} --><div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">' . $copyright . '</p><!-- /wp:paragraph --><!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"20px"}},"twHover":"opacity"} --><ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only tw-hover-opacity"><!-- wp:social-link {"url":"#","service":"twitter"} /--><!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"facebook"} /--></ul><!-- /wp:social-links --></div><!-- /wp:group --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/footer-inline-2-rows',
	array(
		'title'      => __( 'Footer inline: 2 rows', 'twentig' ),
		'categories' => array( 'footer' ),
		'blockTypes' => array( 'core/template-part/footer' ),
		'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"black","textColor":"white"} --><div class="wp-block-group has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} --><div class="wp-block-group"><!-- wp:site-title {"level":0} /--><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","twHover":"opacity-down"} --><ul class="wp-block-social-links  has-icon-color is-style-logos-only tw-hover-opacity-down">' . $social . '</ul><!-- /wp:social-links --></div><!-- /wp:group --><!-- wp:group {"style":{"border":{"top":{"color":"#80808066","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --><div class="wp-block-group" style="border-top-color:#80808066;border-top-width:1px;margin-top:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">' . $copyright . '</p><!-- /wp:paragraph --><!-- wp:navigation {"overlayMenu":"never","className":"tw-sm-order-first","fontSize":"small"} -->' . $nav_links . '<!-- /wp:navigation --></div><!-- /wp:group --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/footer-stack-navigation',
	array(
		'title'      => __( 'Footer stack: navigation', 'twentig' ),
		'categories' => array( 'footer' ),
		'blockTypes' => array( 'core/template-part/footer' ),
		'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} --><div class="wp-block-group has-white-color has-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:navigation {"overlayMenu":"never","align":"wide","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|35"}}} -->' . $nav_links . '<!-- /wp:navigation --><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|35"}}},"fontSize":"x-small"} --><p class="has-text-align-center has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--35)">' . $copyright . '</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/footer-2-columns-text-and-navigation',
	array(
		'title'      => __( 'Footer 2 columns: text and navigation', 'twentig' ),
		'categories' => array( 'footer' ),
		'blockTypes' => array( 'core/template-part/footer' ),
		'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} --><div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|35","left":"8%"}}}} --><div class="wp-block-columns alignwide"><!-- wp:column {"layout":{"type":"constrained","justifyContent":"left","contentSize":"440px"}} --><div class="wp-block-column"><!-- wp:site-logo /--><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">16 Thompson Street<br>San Francisco, CA 94102</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"200px"} --><div class="wp-block-column" style="flex-basis:200px">' . $vertical_nav . '</div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex"}} --><div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"x-small"} --><p class="has-x-small-font-size">' . $copyright . '</p><!-- /wp:paragraph --></div><!-- /wp:group --></div><!-- /wp:group -->',
	)
);
