<?php
// Title tag + custom logo support
add_theme_support('title-tag');
add_theme_support('custom-logo', [
  'height' => 120, 'width' => 300, 'flex-height' => true, 'flex-width' => true,
]);

// Parent + child styles
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('shoper-parent', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('shoper-brat', get_stylesheet_uri(), ['shoper-parent'], wp_get_theme()->get('Version'));
  wp_enqueue_style('fitz-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Playfair+Display:wght@700;900&display=swap', [], null);
  wp_enqueue_style('fitz-main', get_stylesheet_directory_uri().'/assets/css/main.css', ['shoper-brat'], '1.0');
  wp_enqueue_script('fitz-ui', get_stylesheet_directory_uri().'/assets/js/ui.js', ['jquery'], '1.0', true);
  wp_enqueue_script('fitz-cookies', get_stylesheet_directory_uri().'/assets/js/cookies.js', [], '1.0', true);
  // Provide ajax URL to JS if needed
  wp_add_inline_script('fitz-ui', 'document.body.dataset.ajaxurl = "'.admin_url('admin-ajax.php').'";', 'after');
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

// Cookie banner markup (always rendered; JS decides visibility)
add_action('wp_footer', function(){
  ?>
  <div id="fitz-cookie-banner" class="fitz-cookie-banner" role="dialog" aria-live="polite" aria-label="Cookie consent" style="display:none;">
    <div class="fitz-container cookie-inner">
      <div class="cookie-copy">
        <strong>We use cookies</strong> to personalize content and analyze our traffic. You can accept or decline. See our <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a> for details.
      </div>
      <div class="cookie-actions">
        <button class="btn btn-pill btn-cookie btn-decline" type="button">Decline</button>
        <button class="btn btn-pill btn-cookie btn-accept" type="button">Accept cookies</button>
      </div>
    </div>
  </div>
  <?php
});

// AJAX: simple newsletter submission → email admin
add_action('wp_ajax_nopriv_fitz_newsletter', 'fitz_newsletter_handler');
add_action('wp_ajax_fitz_newsletter', 'fitz_newsletter_handler');
function fitz_newsletter_handler(){
  $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
  if(!$email || !is_email($email)) wp_die('bad email', '', ['response'=>400]);
  $admin = get_option('admin_email');
  wp_mail($admin, 'New newsletter signup', 'Email: '.$email);
  wp_die('ok');
}

// Our Story: replace default sample page content/title with brand story
add_filter('the_title', function($title, $post_id){
  if (is_admin()) return $title;
  if (is_page() && in_array(get_post_field('post_name', $post_id), ['sample-page','page-d-exemple','page-dexemple'])) {
    return 'Our Story';
  }
  return $title;
}, 10, 2);

add_filter('document_title_parts', function($parts){
  if (is_page() && in_array(get_post_field('post_name', get_queried_object_id()), ['sample-page','page-d-exemple','page-dexemple'])) {
    $parts['title'] = 'Our Story';
  }
  return $parts;
});

add_filter('the_content', function($content){
  if (!is_page()) return $content;
  $slug = get_post_field('post_name', get_queried_object_id());
  if (!in_array($slug, ['sample-page','page-d-exemple','page-dexemple'])) return $content;

  ob_start();
  ?>
  <section class="story-hero">
    <div class="fitz-container">
      <h1 class="story-title">Our Story</h1>
      <p class="story-tag">Born Y2K. Built for now.™</p>
    </div>
  </section>

  <section class="story-body">
    <div class="fitz-container">
      <div class="story-grid">
        <div class="story-block">
          <h2>How it started</h2>
          <p>Launched in 2023 by friends who grew up on mixtapes, MSN statuses, and camera-phone fits. We remix the bold energy of the Y2K era with today’s silhouettes—authentic drops, no fake nostalgia.</p>
        </div>
        <div class="story-block">
          <h2>What we believe</h2>
          <ul class="story-list">
            <li><strong>Self‑expression</strong> over dress codes. Wear your mood.</li>
            <li><strong>Community first</strong>—IRL and URL. We listen, co-create, and credit.</li>
            <li><strong>Real product</strong> only. Verified, fairly priced, and shipped fast.</li>
          </ul>
        </div>
        <div class="story-block">
          <h2>What’s next</h2>
          <p>Collabs with emerging designers, limited colorways, and pop-up moments. Join the list to get early access and member-only drops.</p>
          <a class="btn btn-cta" href="<?php echo esc_url( fitz_shop_url() ); ?>">Shop the latest</a>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
});

// Lightweight FR → EN UI text swap for common theme strings
add_filter('gettext', function($translated, $text){
  $map = [
    // Mixed case
    'Boutique' => 'Shop',
    'Panier' => 'Cart',
    'Mon compte' => 'My account',
    "Page d'exemple" => 'Our Story',
    'Page d’exemple' => 'Our Story',
    'Validation de la commande' => 'Checkout',
    'Rechercher' => 'Search',
    // Uppercase variants used in nav
    'BOUTIQUE' => 'SHOP',
    'PANIER' => 'CART',
    'MON COMPTE' => 'MY ACCOUNT',
    "PAGE D'EXEMPLE" => 'OUR STORY',
    'PAGE D’EXEMPLE' => 'OUR STORY',
    'VALIDATION DE LA COMMANDE' => 'CHECKOUT',
  ];
  if (isset($map[$text])) return $map[$text];
  return $translated;
}, 10, 2);

// Force-translate menu item titles (menus created in FR in WP admin)
add_filter('wp_nav_menu_objects', function($items){
  $map = [
    'boutique' => 'Shop',
    'mon compte' => 'My account',
    "page d'exemple" => 'Our Story',
    'page d’exemple' => 'Our Story',
    'panier' => 'Cart',
    'validation de la commande' => 'Checkout',
  ];
  foreach ($items as $item) {
    $raw = wp_strip_all_tags($item->title);
    $key = strtolower( trim( $raw ) );
    if (isset($map[$key])){
      // Preserve uppercase style if original is uppercase
      $replacement = $map[$key];
      if ($raw === strtoupper($raw)){
        $replacement = strtoupper($replacement);
      }
      $item->title = $replacement;
    }
  }
  return $items;
});

// Ensure Privacy Policy page exists at /privacy-policy
add_action('init', function(){
  if (get_page_by_path('privacy-policy')) return;
  $content = <<<HTML
<h1>Privacy Policy</h1>
<p>Last updated: <?php echo date('F j, Y'); ?></p>

<h2>1. Who we are</h2>
<p><strong>If The Shoe Fitz</strong> is a sneaker and streetwear boutique inspired by Y2K culture. This policy explains how we collect, use, and protect your data.</p>

<h2>2. Data we collect</h2>
<ul>
  <li>Account and contact info (name, email, shipping details)</li>
  <li>Order and payment info (processed by secure payment providers)</li>
  <li>Technical data (cookies, IP, device, analytics)</li>
</ul>

<h2>3. How we use your data</h2>
<ul>
  <li>To process orders and provide customer support</li>
  <li>To improve our site and personalize your experience</li>
  <li>To send updates and offers if you opt in (unsubscribe anytime)</li>
</ul>

<h2>4. Cookies</h2>
<p>We use essential and analytics cookies. You can accept or decline in the cookie banner.</p>

<h2>5. Your rights (GDPR)</h2>
<p>You can request access, correction, deletion, or export of your personal data. You may also object to or restrict processing where applicable.</p>

<h2>6. Contact</h2>
<p>Email: <a href="mailto:privacy@iftheshoefitz.local">privacy@iftheshoefitz.local</a></p>
HTML;

  wp_insert_post([
    'post_title'   => 'Privacy Policy',
    'post_name'    => 'privacy-policy',
    'post_content' => $content,
    'post_status'  => 'publish',
    'post_type'    => 'page',
  ]);
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
