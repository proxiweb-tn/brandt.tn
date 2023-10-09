<link rel="icon" href="https://brandt.dz/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon">

<title>Électroménager Brandt - Site Officiel | Brandt Electroménager</title>
<link rel="stylesheet" media="all"
  href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_w4ZL8Rmx2Cimoz9ySVCmCbi3l-OdiDScYTUIjUZpR7w.css">
<link rel="stylesheet" media="all"
  href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_VC_Cyg7Qn4mQuGu7cVKjBp2be4EX1yg_ZFK-8ThoSis.css">
<!-- police kiro officiel from distant server -->
<link rel="stylesheet" media="all" href="https://use.typekit.net/rnp8pna.css">


<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
	<?php endwhile; ?>

	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();
