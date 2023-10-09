<link rel="stylesheet" media="all"
    href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_w4ZL8Rmx2Cimoz9ySVCmCbi3l-OdiDScYTUIjUZpR7w.css">
  <link rel="stylesheet" media="all"
    href="<?php echo get_stylesheet_directory_uri(); ?>/original/css_VC_Cyg7Qn4mQuGu7cVKjBp2be4EX1yg_ZFK-8ThoSis.css">
  <!-- police kiro officiel from distant server -->
  <link rel="stylesheet" media="all" href="https://use.typekit.net/rnp8pna.css">


<?php
/**
 * Template for displaying product archives (shop)
 *
 * @link https://docs.woocommerce.com/document/template-structure/
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Name 1.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

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
                                 <div class="wp">
                                    <div class="head">
                                       <span class="flag flag-wrapper flag-comparateur js-flag-comparateur-<?php echo $product->get_id(); ?>"><a title="" href="<?php echo esc_url(add_query_arg('flag', 'flag/comparateur/' . $product->get_id(), get_permalink())); ?>" class="use-ajax bt-compare flag-action" rel="nofollow" data-once="ajax">Comparer</a></span>
                                    </div>
                                    <div class="media">
                                       <?php echo get_the_post_thumbnail($product->get_id(), 'full'); ?>
                                    </div>
                                    <div class="ct">
                                       <div class="title">
                                          <?php echo get_the_title($product->get_id()); ?>
                                          <span class="product-reference">
                                             <?php echo $product->get_sku(); ?>
                                          </span>
                                       </div>
                                       <section class="features">
                                          <ul>
                                             <?php
                                             $attributes = $product->get_attributes();
                                             foreach ($attributes as $attribute) {
                                                echo '<li>' . $attribute['value'] . '</li>';
                                             }
                                             ?>
                                          </ul>
                                       </section>
                                       <section class="desc">
                                          <?php echo wpautop($product->get_description()); ?>
                                       </section>
                                          </br>
                                       <div class="buttons">
                                          <form action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post">
                                             <button type="submit" class="bt-01 minor" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>">En savoir plus</button>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                           </li>
                        <?php
                        }
                     }
                     ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>


<?php
get_footer();