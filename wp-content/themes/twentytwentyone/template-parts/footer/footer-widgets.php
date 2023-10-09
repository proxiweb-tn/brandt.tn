<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <div class="cat">
<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
		</aside><!-- .widget-area -->
</div>
	<?php
endif;
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
  <div class="cat">
<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside><!-- .widget-area -->
  </div>
<?php
endif;
if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
  <div class="cat">
<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</aside><!-- .widget-area -->
  </div>
<?php
endif;
if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="cat">
  <aside class="widget-area">
	  <?php dynamic_sidebar( 'sidebar-4' ); ?>
	  </aside><!-- .widget-area -->
	</div>
  <?php
  endif;
