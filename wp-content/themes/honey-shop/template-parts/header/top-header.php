<?php
/**
 * The template part for Top Header
 *
 * @package Honey Shop 
 * @subpackage honey-shop
 * @since honey-shop 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'honey_shop_sticky_header', false) == 1 || get_theme_mod( 'honey_shop_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <?php if (get_theme_mod('honey_shop_topbar_text') != '') { ?>
    <div class="topbar py-2 text-center">
      <div class="container">
        <p class="topbar-text text-capitalize text-center mb-0"><i class="fa-solid fa-tag"></i><?php echo esc_html(get_theme_mod('honey_shop_topbar_text')); ?></p>
      </div>
    </div>
  <?php } ?>
  <div class="main-topbar">
    <div class="container">
      <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-7 col-12 align-self-center">
          <div class="logo pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $honey_shop_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $honey_shop_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('honey_shop_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('honey_shop_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $honey_shop_description = get_bloginfo( 'description', 'display' );
                if ( $honey_shop_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('honey_shop_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0 text-start">
                  <?php echo esc_html($honey_shop_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-2 col-5 align-self-center header-sec-top">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
        <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-2 col-sm-3 col-7 align-items-center d-flex justify-content-end top-icons gap-3">
          <?php if ( class_exists( 'woocommerce' ) ) { ?>
            <div class="cart_shop">
              <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('shopping cart','honey-shop'); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('honey_shop_cart_icon','fa-solid fa-bag-shopping')); ?>"></i>
                <span class="screen-reader-text"><?php esc_html_e('Shopping Cart','honey-shop'); ?></span>
              </a>
            </div>
            <?php if ( is_user_logged_in() ) { ?>
              <a class="myaccount-icon" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('honey_shop_topbar_myaccount_icon','fas fa-user')); ?>"></i>
              </a>
            <?php } else { ?>
              <a class="myaccount-icon" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','honey-shop'); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('honey_shop_topbar_myaccount_icon','fas fa-user')); ?>"></i>
              </a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>