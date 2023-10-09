<?php get_header(); ?>

<!-- Display Accueil and Category Name -->
<div class="page-head">
      <div id="block-breadcrumbs">
      <ol class="bcrumb wp-st" itemscope="" itemtype="http://schema.org/BreadcrumbList">
   <li>
      <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
   </li>
   <?php if (is_product_category()) : ?>
      
      <li>
         <?php
         $category = get_queried_object();
         echo '<a href="' . esc_url(get_term_link($category)) . '">' . $category->name . '</a>';
         ?>
      </li>
   <?php elseif (is_singular('product')) : ?>
      
      <li>
         <?php
         $categories = get_the_terms(get_the_ID(), 'product_cat');
         if ($categories && !is_wp_error($categories)) {
            $category = reset($categories);
            echo '<a href="' . esc_url(get_term_link($category)) . '">' . $category->name . '</a>';
         }
         ?>
      </li>
      <li>
         <?php the_title(); ?>
      </li>
   <?php endif; ?>
</ol>

      </div>
   </div>

<!-- Rest of the product category archive content -->
<main>
   <div data-drupal-messages-fallback="" class="hidden"></div>
   <div id="block-system-main">
      <div about="/television">
         <div class="content">
            <div class="views-element-container">
               <div class="js-view-dom-id-83a907e8193831803e1a269e6b9f4c97bfc06969f0af9bedc8b34ed1d24aace8" id="block-views-products-block">
                  <ul class="products">
                     <?php
                     if (have_posts()) {
                        while (have_posts()) {
                           the_post();
                           global $product;
                           ?>
                           <li class="tags-<?php echo $product->get_id(); ?>">
                              <article class="product" id="">
                                 <form action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post">
                                    <div class="wp">
                                       <div class="head">
                                          <span class="flag flag-wrapper flag-comparateur js-flag-comparateur-<?php echo $product->get_id(); ?>">
                                             <!-- <a title=" " href="<?php echo esc_url(add_query_arg('flag', 'flag/comparateur/' . $product->get_id(), get_permalink())); ?>" class="use-ajax bt-compare flag-action" rel="nofollow" data-once="ajax">Comparer</a> -->
                                          </span>
                                       </div>
                                       <!-- <div style="min-width: 600px; max-width: 600px; min-height: 600px; max-height: 600px; margin: 0 auto; display: flex; justify-content: center; align-items: center;"> -->
                                       <style>
  .centered-div {
    min-width: 500px;
    max-width: 500px;
    min-height: 500px;
    max-height: 500px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  @media (max-width: 500px) {
    .centered-div {
      min-width: auto;
      max-width: 100%;
      min-height: auto;
      max-height: 100%;
      width: 100%;
      height: 100%;
    }
  }
</style>

<div class="centered-div">



                                       <div class="media">
                                       <!-- style="width: 600; height: auto;" -->
    <?php
    // Get the post thumbnail URL without generating different sizes
    $thumbnail_url = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
    ?>
    
    <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" width="445" height="345" loading="lazy" typeof="foaf:Image">

<!-- width="345" height="345" "  loading="lazy" typeof="foaf:Image-->
                        </div></div>
                                       <div class="title">
                                          <?php echo get_the_title($product->get_id()); ?>
                                          <span class="product-reference">
                                             <?php  echo esc_html(get_post_meta($product->get_id(), 'reference_produit', true)); ?>
                                          </span>
                                          <br>
                                       </div>
                                
                                       <section class="features tags-3">
                     <ul>
  <?php if (get_post_meta($product->get_id(), 'description_produit_1', true) || get_post_meta($product->get_id(), 'description_produit_2', true) || get_post_meta($product->get_id(), 'description_produit_3', true)): ?>
    <li class="paragraph paragraph--type--caracteristique paragraph--view-mode--default" style="background-image: url();">
      <?php echo esc_html(get_post_meta($product->get_id(), 'description_produit_1', true)); ?>
    </li>
    <li class="paragraph paragraph--type--caracteristique paragraph--view-mode--default" style="background-image: url();">
      <?php echo esc_html(get_post_meta($product->get_id(), 'description_produit_2', true)); ?>
    </li>
    <li class="paragraph paragraph--type--caracteristique paragraph--view-mode--default" style="background-image: url();">
      <?php echo esc_html(get_post_meta($product->get_id(), 'description_produit_3', true)); ?>
    </li>
  <?php endif; ?>
</ul>

</section>
                                       <div class="ct">
                                       <section class="desc">
   <div class="product-info">
      <?php
      $product_description = get_the_content();
      if (!empty($product_description)) {
         echo wpautop($product_description);
      } else {
         echo '<p>No description available.</p>';
      }
      ?>
   </div>
   
   <div class="product-image">
      <?php
      // Assuming you're inside the loop for displaying products
      $product_id = get_the_ID();
      $origine_france_value = get_post_meta($product_id, 'origine_france', true);

      if ($origine_france_value === 'yes') {
          echo '<img typeof="foaf:Image" src="https://www.brandt.fr/sites/default/files/design_sans_titre_31_0.jpg" width="137" height="144">';
      }
      ?>
   </div>
</section>
<style>.desc {
   display: flex;
   align-items: center; /* Vertical alignment */
}

.product-info {
   flex: 1; /* Allow the description to take up available space */
}

.product-image {
   margin-left: 20px; /* Adjust the spacing between description and image */
}
</style>
</br></br>
                                          <div class="buttons">
                                          <a href="<?php echo get_permalink($product->get_id()); ?>" class="bt-01 minor">  En savoir plus </a>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </article>
                           </li>
                        <?php
                        }
                     } else {
                        echo '<p>No products found.</p>';
                     }
                     ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>


<?php get_footer(); ?>
