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
   <div id="block-brandtdz-page-title">
   </div>
   <div data-drupal-messages-fallback="" class="hidden"></div>
   <div id="block-system-main">
      <section class="sheet">
         <div class="wp-st">
            <article class="product product-televiseur">
               <div class="wp">
                  <div class="head">
                  </div>
                  
                  
                  <div class="carousel-container" data-slider-ct="">
                     <div class="swiper-container swiper-container-horizontal" data-slider="{&quot;loop&quot; : true, &quot;slidesPerView&quot;: 1, &quot;navigation&quot;: true, &quot;external&quot;: true}">
                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-648px, 0px, 0px);">
                        <?php while (have_posts()) : the_post(); ?>
                        <?php
                           global $product;
                           $attachment_ids = $product->get_gallery_image_ids();
                           foreach ($attachment_ids as $key => $attachment_id) {
                              $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                              ?>
                              <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 648px;">
                              <div class="media">
                              <a href="<?php echo $image_url[0]; ?>" data-lightbox="true">
    <img src="<?php echo $image_url[0]; ?>" alt="Product Image">
</a>

                              </div>
                           </div>
                              <?php
                           }
                           ?>

                           
                           
                           
                           <!-- Todo
                              <?php if($field_videos) : ?>
                              <?php foreach($field_videos as $video) : ?>
                                <div class="swiper-slide">
                                  <div class="media">
                                      <?php print theme('image_style', array('path' => $video['field_miniature']['und'][0]['uri'], 'style_name' => 'produit_visuel')); ?>
                                  </div>
                                </div>   
                              <?php endforeach ?>
                              <?php endif ?>	
                              -->			
                           <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 648px;">
                              <div class="media">
                                 <a href="https://brandt.dz/sites/default/files/products/uled_rose.png" data-lightbox="true">
                                 <img class="zoomable" src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/uled_rose.png">					  
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php endwhile; ?>

                     <?php while (have_posts()) : the_post(); ?>
                     <div class="controls desktop">
                        <button class="bt-slider prev"></button>
                        <button class="bt-slider next"></button>
                        <ol class="pager" data-slider-controls="">
    <?php
    global $product;
    $attachment_ids = $product->get_gallery_image_ids();
    foreach ($attachment_ids as $key => $attachment_id) {
        $image_url = wp_get_attachment_image_src($attachment_id, 'full');
        ?>
        <li>
            <button class="o-fit contain <?php echo ($key === 0) ? 'active' : ''; ?>" data-visual="" data-slideto="<?php echo ($key + 1); ?>">
                <img src="<?php echo $image_url[0]; ?>" alt="Product Image">
            </button>
        </li>
        <?php
    }
    ?>
    <!-- Todo
    <?php if ($field_videos) : ?>
        <?php foreach ($field_videos as $key_video => $video) : ?>
            <li>
                <button class="o-fit contain" data-visual="video" data-slideTo="<?php echo ($key + $key_video); ?>">
                    <a href="<?php echo file_create_url($video['uri']) ?>" class="video video-popin">
                        <?php print theme('image_style', array('path' => $video['field_miniature']['und'][0]['uri'], 'style_name' => 'produit_visuel')); ?>
                    </a>
                </button>
            </li>    
        <?php endforeach ?>
    <?php endif ?>
    -->
</ol>

                     </div>
                     <div class="swiper-thum-wrapper">
                        <div class="swiper-container-thumb mobile swiper-container-horizontal" data-slider="{&quot;loop&quot; : true, &quot;slidesPerView&quot;: 2,&quot;spaceBetween&quot;: 20,&quot;slideToClickedSlide&quot;: true, &quot;navigation&quot;: true, &quot;external&quot;: true}">
                           <div class="swiper-wrapper" style="transition-duration: 0ms;">
                              <div class="swiper-slide swiper-slide-duplicate" data-slideto="4" data-swiper-slide-index="3">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brandt-uled-14(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide swiper-slide-duplicate" data-slideto="5" data-swiper-slide-index="4">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brzndt-uled-12(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide" data-slideto="1" data-swiper-slide-index="0">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/uled_rose(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide" data-slideto="2" data-swiper-slide-index="1">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brandt-uled-1(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide" data-slideto="3" data-swiper-slide-index="2">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brandt-uled-11(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide" data-slideto="4" data-swiper-slide-index="3">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brandt-uled-14(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide" data-slideto="5" data-swiper-slide-index="4">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brzndt-uled-12(1).png">
                                 </div>
                              </div>
                              <!-- Todo
                                 <?php if($field_videos) : ?>
                                 <?php foreach($field_videos as $key_video => $video) : ?>
                                     <div class="swiper-slide" data-slideTo="<?php echo ($key_video + 1); ?>">
                                       <div class="media">
                                         <a href="<?php echo file_create_url($video['uri']) ?>" class="video video-popin">
                                             <?php print theme('image_style', array('path' => $video['field_miniature']['und'][0]['uri'], 'style_name' => 'produit_visuel')); ?>
                                         </a>
                                       </div>
                                     </div> 
                                 <?php endforeach ?>
                                 <?php endif ?>				
                                   -->	
                              <div class="swiper-slide swiper-slide-duplicate" data-slideto="1" data-swiper-slide-index="0">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/uled_rose(1).png">
                                 </div>
                              </div>
                              <div class="swiper-slide swiper-slide-duplicate" data-slideto="2" data-swiper-slide-index="1">
                                 <div class="media">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/brandt-uled-1(1).png">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="controls mobile">
                           <button class="bt-slider prev"></button>
                           <button class="bt-slider next"></button>
                        </div>
                     </div>
                     <?php endwhile; ?>
                  </div>
                  <div class="ct">
                  <div class="title">
   <?php the_title(); ?>
   <span class="product-reference">
      
   <?php  echo esc_html(get_post_meta($product->get_id(), 'reference_produit', true)); ?>
 
			</span>
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



                     <div class="buttons">
                     </div>
                  </div>
               </div>
            </article>
         </div>
      </section>
      <nav class="inner-nav">
         <div>
            <a href="https://brandt.dz/uled-tv-ba65g800s#section-2" data-scroll="">Caractéristiques techniques</a>
            <a href="https://brandt.dz/uled-tv-ba65g800s#section-3" data-scroll="">Téléchargements</a>
         </div>
      </nav>
      <section class="bg-1" id="section-2">
         <div class="wp-st">
            <header class="cat-header">
               <h2 class="tt-2">Caractéristiques techniques</h2>
            </header>
            <div class="caracts">
            </div>
         </div>
      </section>
      <section class="bg-5" id="section-3">
         <div class="wp-st">
            <header class="cat-header">
               <h2 class="tt-2">Téléchargements</h2>
            </header>
            <ul class="services">
   <?php
   $downloadable_files = get_post_meta(get_the_ID(), '_downloadable_files', true);
   foreach ($downloadable_files as $file) {
       $file_url = $file['file'];
       $file_name = $file['name'];
       ?>
       <li>
           <a target="_blank" href="<?php echo esc_url($file_url); ?>">
              <div class="media">
                 <img class="ui--sheet" src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/sheet.svg" alt="">
              </div>
              <div class="text">
                 <p class="tt"><?php echo $file_name; ?></p>
              </div>
           </a>
       </li>
       <?php
   }
   ?>
</ul>

         </div>
      </section>
   </div>
</main>
</div>
<?php get_footer(); ?>
<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/879","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"fr"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"brandtdz\/brandtdz,eu_cookie_compliance\/eu_cookie_compliance_default,google_analytics\/google_analytics,paragraphs\/drupal.paragraphs.unpublished,search_api_autocomplete\/search_api_autocomplete,system\/base,views\/views.module","theme":"brandtdz","theme_token":null},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true},"google_analytics":{"account":"G-EME5HGRJYN","trackOutbound":true,"trackMailto":true,"trackTel":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"eu_cookie_compliance":{"cookie_policy_version":"1.0.0","popup_enabled":true,"popup_agreed_enabled":false,"popup_hide_agreed":false,"popup_clicking_confirmation":false,"popup_scrolling_confirmation":false,"popup_html_info":"\u003Cdiv role=\u0022alertdialog\u0022 aria-labelledby=\u0022popup-text\u0022  class=\u0022eu-cookie-compliance-banner eu-cookie-compliance-banner-info eu-cookie-compliance-banner--opt-in\u0022\u003E\n  \u003Cdiv class=\u0022popup-content info eu-cookie-compliance-content\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022 class=\u0022eu-cookie-compliance-message\u0022\u003E\n      \u003Cp\u003EEn poursuivant votre navigation sur ce site, vous acceptez l\u0027utilisation de cookies destin\u00e9s \u00e0 optimiser votre exp\u00e9rience sur ce site et \u00e0 vous proposer des offres correspondant \u00e0 vos centres d\u0027int\u00e9r\u00eat.\u003C\/p\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022find-more-button eu-cookie-compliance-more-button\u0022\u003EEn savoir plus\u003C\/button\u003E\n          \u003C\/div\u003E\n\n    \n    \u003Cdiv id=\u0022popup-buttons\u0022 class=\u0022eu-cookie-compliance-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022agree-button eu-cookie-compliance-secondary-button\u0022\u003Ej\u0026#039;accept\u003C\/button\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022decline-button eu-cookie-compliance-default-button\u0022\u003ENon, merci.\u003C\/button\u003E\n          \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E","use_mobile_message":false,"mobile_popup_html_info":"\u003Cdiv role=\u0022alertdialog\u0022 aria-labelledby=\u0022popup-text\u0022  class=\u0022eu-cookie-compliance-banner eu-cookie-compliance-banner-info eu-cookie-compliance-banner--opt-in\u0022\u003E\n  \u003Cdiv class=\u0022popup-content info eu-cookie-compliance-content\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022 class=\u0022eu-cookie-compliance-message\u0022\u003E\n      \n              \u003Cbutton type=\u0022button\u0022 class=\u0022find-more-button eu-cookie-compliance-more-button\u0022\u003EEn savoir plus\u003C\/button\u003E\n          \u003C\/div\u003E\n\n    \n    \u003Cdiv id=\u0022popup-buttons\u0022 class=\u0022eu-cookie-compliance-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022agree-button eu-cookie-compliance-secondary-button\u0022\u003Ej\u0026#039;accept\u003C\/button\u003E\n              \u003Cbutton type=\u0022button\u0022 class=\u0022decline-button eu-cookie-compliance-default-button\u0022\u003ENon, merci.\u003C\/button\u003E\n          \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E","mobile_breakpoint":768,"popup_html_agreed":false,"popup_use_bare_css":false,"popup_height":"auto","popup_width":"100%","popup_delay":1000,"popup_link":"\/cookies","popup_link_new_window":true,"popup_position":true,"fixed_top_position":true,"popup_language":"fr","store_consent":false,"better_support_for_screen_readers":false,"cookie_name":"","reload_page":false,"domain":"","domain_all_sites":false,"popup_eu_only_js":false,"cookie_lifetime":100,"cookie_session":0,"set_cookie_session_zero_on_disagree":0,"disagree_do_not_show_popup":false,"method":"opt_in","automatic_cookies_removal":true,"allowed_cookies":"","withdraw_markup":"\u003Cbutton type=\u0022button\u0022 class=\u0022eu-cookie-withdraw-tab\u0022\u003EParam\u00e8tres de confidentialit\u00e9\u003C\/button\u003E\n\u003Cdiv role=\u0022alertdialog\u0022 aria-labelledby=\u0022popup-text\u0022 class=\u0022eu-cookie-withdraw-banner\u0022\u003E\n  \u003Cdiv class=\u0022popup-content info eu-cookie-compliance-content\u0022\u003E\n    \u003Cdiv id=\u0022popup-text\u0022 class=\u0022eu-cookie-compliance-message\u0022\u003E\n      \u003Ch2\u003ENous utilisons des cookies sur ce site pour am\u00e9liorer votre exp\u00e9rience d\u0027utilisateur.\u003C\/h2\u003E\u003Cp\u003EVous avez consenti \u00e0 l\u0027ajout de cookies.\u003C\/p\u003E\n    \u003C\/div\u003E\n    \u003Cdiv id=\u0022popup-buttons\u0022 class=\u0022eu-cookie-compliance-buttons\u0022\u003E\n      \u003Cbutton type=\u0022button\u0022 class=\u0022eu-cookie-withdraw-button\u0022\u003ERetirer le consentement\u003C\/button\u003E\n    \u003C\/div\u003E\n  \u003C\/div\u003E\n\u003C\/div\u003E","withdraw_enabled":false,"reload_options":0,"reload_routes_list":"","withdraw_button_on_info_popup":false,"cookie_categories":[],"cookie_categories_details":[],"enable_save_preferences_button":true,"cookie_value_disagreed":"0","cookie_value_agreed_show_thank_you":"1","cookie_value_agreed":"2","containing_element":"body","settings_tab_enabled":false,"open_by_default":true},"search_api_autocomplete":{"resultats_de_recherche":{"auto_submit":true}},"user":{"uid":0,"permissionsHash":"caefc9e1b13a8a27063839f661ed7fe0cfa86814e6d83166e3d387f1423fbca7"}}</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/js_4iBh2n_VuFtXzVZb_3-ZNQ9izg5E8B_Rt6gJXjxHMTg.js.téléchargement"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/addthis_widget.js.téléchargement"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/js__Kny6v4CRcRttvnD_Tun9JOYFndXXSJ1QE5i2-eMCmA.js.téléchargement"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/eu_cookie_compliance.js.téléchargement" defer=""></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/BA65G800S _ Brandt Electroménager_files/js_3bD497UWmZneYwHq1n7ZhMaIFXQXVWwnQhqCwQAfo-c.js.téléchargement"></script>
<div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
<div id="lightbox" class="lightbox" style="display: none;">
   <div class="lb-dataContainer">
      <div class="lb-data">
         <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
         <div class="lb-closeContainer"><a class="lb-close"></a></div>
      </div>
   </div>
   <div class="lb-outerContainer">
      <div class="lb-container">
         <img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
         <div class="lb-nav"><a class="lb-prev" href="https://brandt.dz/uled-tv-ba65g800s"></a><a class="lb-next" href="https://brandt.dz/uled-tv-ba65g800s"></a></div>
         <div class="lb-loader"><a class="lb-cancel"></a></div>
      </div>
   </div>
</div>
<?php wp_footer(); ?>
</body></html>
<?php
get_footer();