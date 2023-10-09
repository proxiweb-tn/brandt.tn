<link rel="icon" href="https://brandt.dz/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all"
    href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_w4ZL8Rmx2Cimoz9ySVCmCbi3l-OdiDScYTUIjUZpR7w.css">
  <link rel="stylesheet" media="all"
    href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_VC_Cyg7Qn4mQuGu7cVKjBp2be4EX1yg_ZFK-8ThoSis.css">
  <!-- police kiro officiel from distant server -->
  <link rel="stylesheet" media="all" href="https://use.typekit.net/rnp8pna.css">


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
		
		<div class="search-api-page-results">
    <ol class="search-results">
        <?php
        // Start the Loop.
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="bloc-product-result">
             

            <div class="media">
    <?php
    // Get the post thumbnail URL without generating different sizes
    $thumbnail_url = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
    ?>
    <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
</div>

                <div class="content">
                    <h3 class="result-product-title"><?php the_title(); ?></h3>
                    <div>
                        <span class="product-reference"><?php echo get_post_meta(get_the_ID(), 'reference_produit', true); ?></span>
                        <span class="bloc-element result-product-desc-txt">
                            <div><?php the_content(); ?></div>
                        </span>
                        <a href="<?php the_permalink(); ?>">En savoir plus</a>
                    </div>
                </div>
            </div>
            <?php
        } 
        ?>
    </ol>
</div>

		
	</main>
	
	<?php
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();