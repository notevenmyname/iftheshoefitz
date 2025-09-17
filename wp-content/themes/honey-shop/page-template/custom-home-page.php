<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">

  <?php do_action( 'honey_shop_above_slider' ); ?>
  
  <?php if (get_theme_mod('honey_shop_hide_show_slider_section', true)== 1 || get_theme_mod( 'honey_shop_resp_slider_hide_show', true) == 1) { ?>
  <?php 
    $honey_shop_bottom_svg_image = file_get_contents(get_template_directory_uri() . '/assets/images/bottom-bg.svg');
    $honey_shop_text_bg_svg_image = file_get_contents(get_template_directory_uri() . '/assets/images/text-bg.svg');
    $honey_shop_right_bg_svg_image = file_get_contents(get_template_directory_uri() . '/assets/images/right-bg.svg');
    $honey_shop_btn_icon_svg_image = file_get_contents(get_template_directory_uri() . '/assets/images/btn-icon.svg');
    $honey_shop_number = get_theme_mod('honey_shop_slide_number');
    if($honey_shop_number != ''){
  ?>
    <section class="slider-section wow fadeInRightBig position-relative" data-wow-delay=".25s">
      <div id="slider" class="mw-100 m-auto p-0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <!-- Slider Items -->
          <div class="carousel-inner" role="listbox">
            <div class="slider-img position-relative">
              <?php if (get_theme_mod('honey_shop_slider_bg_img') != "") { ?>
                <img class="slider-bg-img" src="<?php echo esc_url(get_theme_mod('honey_shop_slider_bg_img')); ?>" alt="<?php echo esc_attr('background-image', 'honey-shop'); ?>">
              <?php } else { ?>
                <img class="slider-bg-img" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/slider-bg.png" alt="<?php echo esc_attr('background-image', 'honey-shop'); ?>">
              <?php } ?>
              <?php echo $honey_shop_right_bg_svg_image; ?>
              <!-- Navigation Controls -->
              <?php if( get_theme_mod( 'honey_shop_display_slider_icons', true) == true ) { ?>
                <div class="slider-arrows position-absolute">
                  <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" role="button">
                    <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_slider_previous_icon','fa-solid fa-arrow-left')); ?>" ></i></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Previous','honey-shop' );?></span>
                  </a>
                  <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" role="button">
                    <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_slider_next_icon','fa-solid fa-arrow-right')); ?>" ></i></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Next','honey-shop' );?></span>
                  </a>  
                </div>
              <?php }?>
            </div>
            <?php for ($honey_shop_i = 1; $honey_shop_i <= $honey_shop_number; $honey_shop_i++) { ?>
              <div class="carousel-item <?php echo esc_attr($honey_shop_i) == 1 ? 'active' : ''; ?>">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-12 align-self-end slider-content">
                        <div class="inner_carousel text-start">
                          <?php if (get_theme_mod('honey_shop_slider_small_title' . $honey_shop_i) != '') { ?>
                            <p class="slider-small-title text-capitalize mb-2"><?php echo esc_html(get_theme_mod('honey_shop_slider_small_title' . $honey_shop_i)); ?></p>
                          <?php } ?>
                          <?php if (get_theme_mod('honey_shop_slider_title' . $honey_shop_i) != '') { ?>
                            <h1 class="slider-title text-capitalize mb-3"><?php echo esc_html(get_theme_mod('honey_shop_slider_title' . $honey_shop_i)); ?></h1>
                          <?php } ?>
                          <?php if (get_theme_mod('honey_shop_slider_text' . $honey_shop_i) != '') { ?>
                            <p class="slider-text mt-3"><?php echo esc_html(get_theme_mod('honey_shop_slider_text' . $honey_shop_i)); ?></p>
                          <?php } ?>
                          <?php if ( get_theme_mod('honey_shop_slider_button_label'.$honey_shop_i) != '' ) {?>
                            <div class ="banner-btn">
                              <a href="<?php echo esc_url(get_theme_mod('honey_shop_slider_button_url'.$honey_shop_i));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('honey_shop_slider_button_label'.$honey_shop_i));?><?php echo $honey_shop_btn_icon_svg_image; ?>
                              </a>
                            </div>
                          <?php }?>
                          <div class="slider-bottom-content">
                            <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-7 col-sm-6 col-12 align-self-end">
                                <?php if (get_theme_mod('honey_shop_slider_bottom_img'.$honey_shop_i) != "") { ?>
                                  <div class="bottom-bg position-relative">
                                    <?php echo $honey_shop_bottom_svg_image; ?>
                                    <div class="slider-bottom-img position-absolute">
                                      <img src="<?php echo esc_url(get_theme_mod('honey_shop_slider_bottom_img'.$honey_shop_i)); ?>" alt="<?php echo esc_attr('bottom-image', 'honey-shop'); ?>">
                                    </div>
                                  </div>
                                <?php }?>
                              </div>
                              <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12"></div>
                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 align-self-end">
                                <?php if (get_theme_mod('honey_shop_slider_bottom_content' . $honey_shop_i) != '') { ?>
                                  <div class="box-text position-relative">
                                    <?php echo $honey_shop_text_bg_svg_image; ?>
                                    <p class="mb-0"><?php echo esc_html(get_theme_mod('honey_shop_slider_bottom_content' . $honey_shop_i)); ?></p>
                                    <?php if ( get_theme_mod('honey_shop_bottom_icon_url'.$honey_shop_i) != '' ) {?>
                                      <a href="<?php echo esc_url(get_theme_mod('honey_shop_bottom_icon_url'.$honey_shop_i));?>" class="bottom-icon"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_slider_bottom_icon'.$honey_shop_i,'fa-solid fa-arrow-right')); ?>"></i></a>
                                    <?php }?>
                                  </div>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
                      <div class="col-xl-5 col-lg-5 col-md-5 col-12 slider-right-box text-end align-self-end">
                        <?php if (get_theme_mod('honey_shop_slider_right_img'.$honey_shop_i) != "") { ?>
                          <div class="slider-right-img">
                            <img src="<?php echo esc_url(get_theme_mod('honey_shop_slider_right_img'.$honey_shop_i)); ?>" alt="<?php echo esc_attr('right-image', 'honey-shop'); ?>">
                          </div>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  <?php }}?>

  <?php do_action( 'honey_shop_below_slider' ); ?>

  <!-- Products Section -->
  <?php if (get_theme_mod('honey_shop_products_section_hide_show', true)){ ?>
    <section id="products-section" class="wow fadeInLeftBig py-4" data-wow-delay=".25s">
      <div class="container">
        <div class="product-sec-content text-center mb-3">
          <?php if(get_theme_mod('honey_shop_products_section_text') != '') {?>
            <p class="small-text mb-0 text-capitalize"><?php echo esc_html(get_theme_mod('honey_shop_products_section_text')) ?></p>
          <?php }?>
          <?php if(get_theme_mod('honey_shop_products_section_title') != '') {?>
            <h2 class="section-title text-capitalize mb-0 position-relative"><?php echo esc_html(get_theme_mod('honey_shop_products_section_title')) ?></h2>
          <?php }?>
        </div>
        <div class="row">
          <?php if ( class_exists( 'WooCommerce' ) ) {
            $honey_shop_selected_category = get_theme_mod('honey_shop_best_product_category', '');
            if (!empty($honey_shop_selected_category)) {
              $honey_shop_args = array( 
                'post_type'      => 'product',
                'product_cat'    => $honey_shop_selected_category,
                'order'          => 'ASC',
                'hide_empty'     => 0,
                'posts_per_page' => 4,
              );
                $honey_shop_loop = new WP_Query($honey_shop_args);
                while ($honey_shop_loop->have_posts()) : $honey_shop_loop->the_post(); global $product; ?>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-3">
                    <div class="product-box">
                      <div class="product-box-img position-relative">
                        <?php if ( has_post_thumbnail( $honey_shop_loop->post->ID ) ) {
                          echo get_the_post_thumbnail( $honey_shop_loop->post->ID, 'shop_catalog' );
                        } else {
                          echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />';
                        } ?>
                        <div class="product-icon position-absolute">
                          <?php if ($product->is_type('simple')) {
                            woocommerce_template_loop_add_to_cart($honey_shop_loop->post, $product);
                          } ?>
                          <?php if (defined('YITH_WCWL')) { ?>
                            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                          <?php } ?>
                          <?php if ( class_exists( 'YITH_WCQV_Frontend' ) ) {
                            echo do_shortcode('[yith_quick_view]');
                          } ?>
                        </div>
                      </div>
                      <div class="product-box-content p-2 text-center">
                        <h3 class="product-head text-capitalize mb-0"><a href="<?php echo esc_url( get_permalink( $honey_shop_loop->post->ID ) ); ?>"><?php the_title(); ?></a></h3>
                        <p class="product-price mb-2">
                          <?php echo wc_price( $product->get_regular_price() ); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="product-link-button"><?php esc_html_e( 'Order Now', 'honey-shop' ); ?></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
                wp_reset_postdata();
          }} ?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'honey_shop_after_service' ); ?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 