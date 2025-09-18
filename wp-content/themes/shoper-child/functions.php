<?php
// Title tag + custom logo support
add_theme_support('title-tag');
add_theme_support('custom-logo', [
  'height' => 120, 'width' => 300, 'flex-height' => true, 'flex-width' => true,
]);

// Parent + child styles
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('shoper-parent', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('shoper-child', get_stylesheet_uri(), ['shoper-parent'], wp_get_theme()->get('Version'));
  wp_enqueue_style('fitz-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Playfair+Display:wght@700;900&display=swap', [], null);
  wp_enqueue_style('fitz-main', get_stylesheet_directory_uri().'/assets/css/main.css', ['shoper-child'], '1.0');
  wp_enqueue_script('fitz-ui', get_stylesheet_directory_uri().'/assets/js/ui.js', ['jquery'], '1.0', true);
});

// Logo fallback to /assets/img/logo.png if none set in Customizer
add_filter('get_custom_logo', function($html){
  if ($html) return $html;
  $src = get_stylesheet_directory_uri() . '/assets/img/logo.png';
  return sprintf(
    '<a href="%s" class="custom-logo-link" rel="home"><img src="%s" class="custom-logo" alt="%s"></a>',
    esc_url(home_url('/')), esc_url($src), esc_attr(get_bloginfo('name'))
  );
});

// Helper links
function fitz_shop_url(){
  return function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/');
}
function fitz_term_link($slug, $taxonomy){
  $t = get_term_by('slug', $slug, $taxonomy);
  return ($t && !is_wp_error($t)) ? get_term_link($t, $taxonomy) : fitz_shop_url();
}
// Load extra UI libs only on the homepage
add_action('wp_enqueue_scripts', function () {
  if (!is_front_page()) return;

  // Bootstrap 5 (grid, utilities, JS components) – no jQuery needed
  wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
  wp_enqueue_script('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);

  // Swiper (sliders)
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);

  // AOS (scroll animations)
  wp_enqueue_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', [], '2.3.4');
  wp_enqueue_script('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], '2.3.4', true);
});
