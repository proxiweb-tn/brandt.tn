<?php /* Template Name: Search Page*/ ?>

<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<main>
		<div class="page-head">
			<div id="block-breadcrumbs">
				<ol class="bcrumb wp-st" itemscope="" itemtype="http://schema.org/BreadcrumbList">
					<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'twentytwentyone' ); ?></a></li>
					<li><?php esc_html_e( 'Résultats de recherche', 'twentytwentyone' ); ?></li>
				</ol>
			</div>
		</div>
		<div id="block-brandtdz-page-title">
			<header class="cat-header">
				<h2 class="tt-2"><?php printf( esc_html__( 'Résultats de recherche pour "%s"', 'twentytwentyone' ), '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
			</header>
		</div>
		<div class="search-result-count default-max-width">
			<?php
			printf(
				esc_html(
					/* translators: %d: The number of search results. */
					_n(
						'We found %d result for your search.',
						'We found %d results for your search.',
						(int) $wp_query->found_posts,
						'twentytwentyone'
					)
				),
				(int) $wp_query->found_posts
			);
			?>
		</div>
		<?php custom_search_overlay(); // Affiche la superposition de recherche personnalisée ?>
		<div class="search-api-page-results">
			<ol class="search-results">
				<?php
				// Start the Loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
				} // End the loop.
				?>
			</ol>
		</div>
	</main>
	<?php
	twenty_twenty_one_the_posts_navigation();
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
