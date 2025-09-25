<?php
// Standalone theme setup (copy of shoper-brat enqueue logic)
add_action('after_setup_theme', function(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo', [ 'height'=>120, 'width'=>300, 'flex-height'=>true, 'flex-width'=>true ]);
});

add_action('wp_enqueue_scripts', function(){
  // Base styles
  wp_enqueue_style('brat-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
  wp_enqueue_style('fitz-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Playfair+Display:wght@700;900&display=swap', [], null);
  wp_enqueue_style('fitz-main', get_stylesheet_directory_uri().'/assets/css/main.css', ['brat-style'], '1.0');

  // JS
  wp_enqueue_script('fitz-ui', get_stylesheet_directory_uri().'/assets/js/ui.js', ['jquery'], '1.0', true);
  wp_enqueue_script('fitz-cookies', get_stylesheet_directory_uri().'/assets/js/cookies.js', [], '1.0', true);
});

// Helper functions copied from shoper-brat
function fitz_shop_url(){
  return function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/');
}
function fitz_term_link($slug, $taxonomy){
  $t = get_term_by('slug', $slug, $taxonomy);
  return ($t && !is_wp_error($t)) ? get_term_link($t, $taxonomy) : fitz_shop_url();
}

// Use shoper-brat's assets so visuals match 1:1 without copying binaries yet
function fitz_assets_uri(){
  return trailingslashit( get_theme_root_uri() . '/shoper-brat/assets' );
}

// Load external libs on front page (Bootstrap, Swiper, AOS)
add_action('wp_enqueue_scripts', function(){
  if (!is_front_page()) return;
  wp_enqueue_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
  wp_enqueue_script('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);
  wp_enqueue_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', [], '2.3.4');
  wp_enqueue_script('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], '2.3.4', true);
});

// Newsletter AJAX passthrough (optional minimal)
add_action('wp_ajax_nopriv_fitz_newsletter', function(){ wp_die('ok'); });
add_action('wp_ajax_fitz_newsletter', function(){ wp_die('ok'); });

