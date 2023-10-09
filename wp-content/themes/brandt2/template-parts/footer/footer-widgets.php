<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'Footer widgets Secondary' ) ) : ?>
  <h1>test ...</h1>
	<aside class="widget-area">
		<?php dynamic_sidebar( 'Footer widgets Secondary' ); ?>
	</aside><!-- .widget-area -->

	<?php
endif;
