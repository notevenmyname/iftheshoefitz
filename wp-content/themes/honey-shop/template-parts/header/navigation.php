<?php
/**
 * The template part for header
 *
 * @package Honey Shop 
 * @subpackage honey-shop
 * @since honey-shop 1.0
 */
?>

<div class="navigation_header">
  <div class="toggle-nav mobile-menu">
    <button onclick="honey_shop_menu_open_nav()"><i class="fa-solid fa-bars"></i></button>
  </div>
  <div id="mySidenav" class="nav sidenav">
    <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'honey-shop' ); ?>">
      <?php {
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'menu_class'     => 'menu', 
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'fallback_cb' => 'wp_page_menu',
          )
        );
      } ?>
    </nav>
    <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="honey_shop_menu_close_nav()"><i class="fas fa-times"></i></a>
  </div>
</div>