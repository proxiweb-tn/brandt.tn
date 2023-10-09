<?php get_header(); ?>
<?php /* Template Name: index Page*/ ?>


<main>
   <div class="page-head">
   </div>
   <div data-drupal-messages-fallback="" class="hidden"></div>
   <div class="views-element-container" id="block-views-block-slider-home-block-1">
      <div>
         <div class="view-slider-home js-view-dom-id-266b3330d8a193ca33c17f039ed14a762c7ad3016cdd60f5c6d934f307400c73">
            <div class="slider-wp">
               <div class="view-content carousel-container">
			   <div class="swiper-container swiper-container-horizontal" data-slider='{"loop": true, "slidesPerView": 1, "pagination": true, "navigation": true, "breakpoints": false, "autoplay": true}'>
            <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/brandt_service_client_2021_011.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/climatiseuur.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/cuisie.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/fouur.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/machinee.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="media">
                <a href="#">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/cuisinièree.png" width="1920" height="460" alt="Brandt 3314 appel service" loading="lazy" typeof="foaf:Image">
                    </div>
                </a>
            </div>
        </div>


    </div>
    <button class="bt-slider prev"></button>
    <button class="bt-slider next"></button>
    <ol class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></ol>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.bt-slider.next',
                prevEl: '.bt-slider.prev',
            },
            autoplay: {
                delay: 3000,
            },
        });
    });
</script>

               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="views-element-container" id="block-views-block-produits-coeur-hp-block-1">
      <div>
         <div class="js-view-dom-id-26d49ab42e5aea7703d5e01a3acc828e7126728bcde69aacf6f15a7774f9ee22">
            <!-- <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
    <?php
    // Query the custom post type posts
    $args = array(
        'post_type' => 'slogan',
        'posts_per_page' => 1
    );
    $query = new WP_Query($args);

    // Loop through the posts
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
    ?>
            <h2 class="tt-2"><a href="<?php echo get_post_type_archive_link('slogan'); ?>"><span><?php the_title(); ?></span></a></h2>
            <p class="subtitle"><?php the_content(); ?></p>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>

                     </header>
                     <div class="block-media minor-major size-1">
                        <div class="major">
                           <div class="media o-fit video">
                              <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/VDBLKH4L_L8?rel=0" width="560"></iframe></p>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/television">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/bloc2.png" width="360" height="380" alt="Télévisions" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Télévisions</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div> -->
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/conserver"><span>Conserver</span>
                              </a>
                           </h2>
                           <p class="subtitle">Mangez 5 fruits et légumes frais par jour !</p>
                        </div>
                     </header>
                     <div class="block-media minor-major size-2">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/frigo-ouvert.jpg" width="1001" height="662" alt="Conserver" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>En savoir plus</div>
                              </div>
                              <div class="sub-tt">
                                 <p><font face="kiro, Helvetica Neue, Helvetica, Arial, sans-serif"><span style="font-size: 18.2px;">Une large gamme de réfrigérateurs et congélateurs vous est proposée...&nbsp;</span></font></p>
                              </div>
                              <span class="bt"><a href="#".dz/refrigerateur-congelateur">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/side-side">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/BFA701YDX.jpg" width="307" height="316" alt="Side by side" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Side by side</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/congelateur-en-haut">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/BD6010NX.jpg" width="307" height="316" alt="Double porte" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Double porte</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#"><span>Cuisiner</span>
                              </a>
                           </h2>
                           <p class="subtitle">Cuisinez comme un Chef !</p>
                        </div>
                     </header>
                     <div class="block-media minor-major size-5">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/teste_cuisiner-web.jpg" width="772" height="720" alt="Cuisiner" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>L’équipement Brandt est complet et répond astucieusement à tous vos besoins</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/four_0.jpg" width="307" height="297" alt="Four" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Four</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/micro-ondes">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/mo.jpg" width="307" height="222" alt="Micro onde" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Micro-ondes</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/hotte">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/test_hotte.jpg" width="307" height="240" alt="hotte" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Hotte</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/cuisiniere">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/teste_cuisiner-web_0.jpg" width="772" height="720" alt="Cuisinière" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Cuisinière</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/table-de-cuisson">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/test_table_0.png" width="647" height="241" alt="Table de cuisson" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Table de cuisson</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/cuire"><span>Cuire</span>
                              </a>
                           </h2>
                           <p class="subtitle">Cuisinez bien même dans un petit espace !</p>
                        </div>
                     </header>
                     <div class="block-media minor-major size-1">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/lifestyle_cuisson_1.3.png" width="912" height="473" alt="Cuire" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>L'expertise en cuisson</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/friteuse">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/friteuse">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/fri25r_complte-convertimage.jpg" width="3513" height="3839" alt="Friteuse" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Friteuse</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/preparer"><span>Préparer</span>
                              </a>
                           </h2>
                           <p class="subtitle">Une gamme répondant aux besoins de chacun</p>
                        </div>
                     </header>
                     <div class="block-media major-minor size-2">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/robotweb2.jpg" width="740" height="573" alt="Preparer" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>A chacun son produit</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/preparer">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/robot-patissier">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/km_0.png" width="317" height="129" alt="Robot pâtisser" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">En savoir plus</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/robot-multifonction">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/robot_mf_0.png" width="317" height="129" alt="Robot multifonction" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">En savoir plus</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/laver-le-linge"><span>Laver le linge</span>
                              </a>
                           </h2>
                           <p class="subtitle">Prendre soin de vous et de votre linge !</p>
                        </div>
                     </header>
                     <div class="block-media major-minor size-1">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/ll-convertimage.jpg" width="1270" height="720" alt="Laver le linge" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>Brandt prend soin de vous et de votre linge...</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/lave-linge">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/lave-linge">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/machine-en-marche-5-convertimage.jpg" width="4480" height="4915" alt="Lave-linge" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Lave-linge</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/petit-dejeuner"><span>Petit-déjeuner</span>
                              </a>
                           </h2>
                           <p class="subtitle">La journée peut bien démarrer dès le petit déjeuner !</p>
                        </div>
                     </header>
                     <div class="block-media minor-major size-3">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/petit_dej_02.jpg" width="949" height="718" alt="Petit-déjeuner" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>Des produits conçus pour révéler toutes les saveurs</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/petit-dejeuner">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/cafetiere-filtre">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/cafetiere.png" width="641" height="260" alt="cafetiere" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Cafetière filtre</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/bouilloire">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/bouilloire_.png" width="641" height="260" alt="bouilliore" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Bouilloire</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/grille-pain">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/grille_pain_1.png" width="641" height="260" alt="grille pain" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Grille-pain</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/rafraichir"><span>Rafraîchir</span>
                              </a>
                           </h2>
                           <p class="subtitle">Bénéficiez d'une température optimale dans vos pièces !</p>
                        </div>
                     </header>
                     <div class="block-media minor-major size-1">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/29-01-19-brandt-clim-v2-127.jpg" width="912" height="473" alt="Rafraichir" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>Pour bien dormir et bien commencer la journée !</div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/climatiseur">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/climatiseur">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/serie_v_0.png" width="446" height="459" alt="Climatiseur" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Climatiseur</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/laver-la-vaisselle"><span>Laver la vaisselle</span>
                              </a>
                           </h2>
                           <p class="subtitle">Tout laver à la perfection, sans exception !</p>
                        </div>
                     </header>
                     <div class="block-media major-minor size-2">
                        <div class="major">
                           <div class="media o-fit">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/teste_lave_v.png" width="954" height="719" alt="Laver la vaisselle" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="text">
                              <div class="tt">
                                 <div>Brandt vous permet de tout laver à la perfection, sans exception ! </div>
                              </div>
                              <div class="sub-tt"></div>
                              <span class="bt"><a href="#".dz/laver-la-vaisselle">En savoir plus</a></span>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/pose-libre">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/teste_pose_libre.png" width="465" height="356" alt="pose libre" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Pose libre</span>
                                    </a>
                                 </span>
                              </li>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="#".dz/integrable">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/test_integrable_0.jpg" width="446" height="344" alt="Intégrable" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Intégrable</span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- <div>
               <section class="bg-1" style="background-color:#FFFFFF">
                  <div class="wp-st">
                     <header class="cat-header" style="color:#000000">
                        <div class="contextual-region">
                           <h2 class="tt-2"><a href="#".dz/communiquer"><span>Communiquer</span>
                              </a>
                           </h2>
                           <p class="subtitle">Restez connecté(e) !</p>
                        </div>
                     </header>
                     <div class="block-media major-minor size-1">
                        <div class="major">
                           <div class="media o-fit video">
                              <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" controls="controls" frameborder="0" height="480" src="<?php echo get_stylesheet_directory_uri(); ?>/original/Nkmn3iit4iE.html" width="853"></iframe></p>
                           </div>
                        </div>
                        <div class="minor ">
                           <ul>
                              <li>
                                 <span class="paragraph paragraph--type--petits-blocs paragraph--view-mode--default">
                                    <a href="http://www.brandt.dz/smartphone">
                                       <div class="media o-fit">
                                          <div class="field field-name-field-image-petit-bloc field-type-image field-label-hidden">
                                             <div class="field-items">
                                                <div class="field-item even">
                                                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/b-one-render-x652png_1.png" width="652" height="652" alt="b-0ne" loading="lazy" typeof="foaf:Image">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <span class="bt">Découvrir plus </span>
                                    </a>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </div> -->
         </div>
      </div>
   </div>
   <section>
      <div class="views-element-container wp-st" id="block-views-block-la-marque-block-1">
         <header class="cat-header">
            <h2 class="tt-2">La marque</h2>
            <p class="subtitle"> <a href="https://brandt.dz/la-marque-page">Depuis plus de 60 ans, BRANDT noue une très forte relation de confiance et de proximité avec les consommateurs</a></p>
         </header>
         <div>
            <div class="js-view-dom-id-9a22bcbb6004a67498dfaebb6ddc8217f1ff43fcc761e77988e65fb4c2def3b9">
               <div class="page-node">
                  <ul class="brand">
                     <li>
                        <a href="https://brandt.dz/la-marque-page#brandt-plus">
                           <div class="media">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/marque_1.png" width="953" height="800" alt="BRANDT, PLUS DE 60 ANS D&#39;HISTOIRE" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="overlay"></div>
                           <div class="text">
                              <p class="tt"><span>BRANDT, PLUS DE 60 ANS D'HISTOIRE</span></p>
                              <p class="ct">Faciliter le quotidien</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="https://brandt.dz/la-marque-page#la-marque">
                           <div class="media">
                              <div>  <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/marque.png" width="953" height="800" alt="La marque Brandt" loading="lazy" typeof="foaf:Image">
                              </div>
                           </div>
                           <div class="overlay"></div>
                           <div class="text">
                              <p class="tt"><span>La marque Brandt</span></p>
                              <p class="ct">Depuis plus de 60 ans, Brandt noue une très forte relation de confiance et de proximité avec les consommateurs.</p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div id="block-system-main">
      <div class="views-element-container">
         <div class="js-view-dom-id-9d075c5a62f7d2c5e23bd5b58be940579620b26c1e9d151fe64c16bbcda26132">
         </div>
      </div>
   </div>
   <section class="bg-1">
      <div class="views-element-container" id="block-views-services-block">
         <header class="cat-header">
            <h2 class="tt-2">Services</h2>
            <p class="subtitle"><a href="https://brandt.dz/services">Tout savoir sur les produits et les services BRANDT</a></p>
         </header>
         <div>
            <div class="js-view-dom-id-a556fe3513c4bf50e133448630cfc5baf83b1d6e6be4b01c9732257d6f3df918">
               <div class="page-node">
                  <ul class="services">
                     <li>
                        <a href="#">
                           <div class="media">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/geolocation.svg" alt="Où nous trouver ?" loading="lazy" typeof="foaf:Image">
                           </div>
                           <div class="text">
                              <p class="tt"><span>Où nous trouver ?</span></p>
                              <p class="ct"></p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <a href="http://prod-paysback.seevia.com/SitePays/notices.do?sBrand=BRANDT&amp;sName=FRANCE&amp;lId=1" target="&quot;_blank&quot;">
                           <div class="media">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/original/notice.svg" alt="Notices" loading="lazy" typeof="foaf:Image">
                           </div>
                           <div class="text">
                              <p class="tt"><span>Notices</span></p>
                              <p class="ct"></p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php get_footer(); ?>