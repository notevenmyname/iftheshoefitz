<?php
/** Custom front page for If The Shoe Fitz */
get_header();
?>
<main id="primary" class="site-main fitz-home">

  <!-- HERO -->
  <section class="fitz-hero" aria-label="Featured sneakers">
    <div class="fitz-container hero-grid">

      <!-- Left: double-bubble image -->
      <div class="hero-bubbles" aria-hidden="true">
        <div class="bubble b1" style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/hero-sneakers.jpg'); ?>')"></div>
        <div class="bubble b2" style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/hero-sneakers.jpg'); ?>')"></div>
      </div>

      <!-- Right: copy + CTA -->
      <div class="hero-copy">
        <h1 class="hero-title">
          <span>if the shoe</span>
          <span class="serif underlined">Fitz</span>
        </h1>
        <p class="hero-sub">the perfect Fitz for every style</p>
        <?php
          $shop_link = function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/');
        ?>
        <a class="btn btn-cta" href="<?php echo esc_url($shop_link); ?>">Shop now</a>
      </div>

    </div>
  </section>

</main>
<?php get_footer(); ?>
