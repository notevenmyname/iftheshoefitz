<?php
// Load parent first, then child
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('shoper-parent', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('shoper-child', get_stylesheet_uri(), ['shoper-parent'], wp_get_theme()->get('Version'));
});

// Fonts (feel free to change later)
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'fitz-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Playfair+Display:wght@700;900&display=swap',
    [],
    null
  );
});

// Our extra CSS & JS
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('fitz-main', get_stylesheet_directory_uri().'/assets/css/main.css', ['shoper-child'], '1.0');
  wp_enqueue_script('fitz-ui', get_stylesheet_directory_uri().'/assets/js/ui.js', ['jquery'], '1.0', true);
});
