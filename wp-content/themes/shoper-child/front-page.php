<?php
/** Front page for "if the shoe Fitz" */
get_header();
?>
<main id="primary" class="site-main fitz-home">

  <!-- HERO -->
  <section class="fitz-hero" aria-label="Hero">
    <div class="fitz-container hero-grid">
      <div class="hero-visual" aria-hidden="true"
           style="background-image:url('<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/hero-sneakers.jpg'); ?>')">
      </div>
      <div class="hero-copy">
        <h1 class="hero-title" aria-label="<?php bloginfo('name'); ?>">
          <span>if the shoe</span>
          <span class="serif underlined">Fitz</span>
        </h1>
        <p class="hero-sub"><?php bloginfo('description'); // set in Settings → General ?></p>
        <a class="btn btn-cta" href="<?php echo esc_url( fitz_shop_url() ); ?>">Shop now</a>
      </div>
    </div>
  </section>

  <!-- BRAND STRIP -->
  <nav class="fitz-brands" aria-label="Browse by brand">
    <div class="fitz-container">
      <ul class="brand-row">
        <li><a href="<?php echo esc_url( fitz_term_link('nike','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/nike.svg'); ?>" alt="Nike"></a></li>
        <li><a href="<?php echo esc_url( fitz_term_link('jordan','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/jordan.svg'); ?>" alt="Jordan"></a></li>
        <li><a href="<?php echo esc_url( fitz_term_link('adidas','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/adidas.svg'); ?>" alt="Adidas"></a></li>
        <li><a href="<?php echo esc_url( fitz_term_link('pegador','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/pegador.svg'); ?>" alt="Pegador"></a></li>
        <li><a href="<?php echo esc_url( fitz_term_link('converse','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/converse.svg'); ?>" alt="Converse"></a></li>
        <li><a href="<?php echo esc_url( fitz_term_link('new-balance','pa_brand') ); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/brands/new-balance.svg'); ?>" alt="New Balance"></a></li>
      </ul>
    </div>
  </nav>

  <!-- GENDER CARDS -->
  <section class="fitz-gender">
    <div class="fitz-container">
      <h2 class="section-title">Who are you shopping for ?</h2>
      <div class="gender-grid">
        <a class="gender-card" href="<?php echo esc_url( fitz_term_link('men','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/men.jpg'); ?>" alt="Men">
          <div class="gc-footer"><span>Homme</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
        <a class="gender-card" href="<?php echo esc_url( fitz_term_link('women','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/women.jpg'); ?>" alt="Women">
          <div class="gc-footer"><span>Femme</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
        <a class="gender-card" href="<?php echo esc_url( fitz_term_link('kids','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/kids.jpg'); ?>" alt="Kids">
          <div class="gc-footer"><span>Enfants</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
      </div>
    </div>
  </section>

  <!-- NEWEST RELEASES -->
  <section class="fitz-new">
    <div class="fitz-container">
      <div class="new-head">
        <h2 class="section-title">Our Newest Releases</h2>
        <a class="btn btn-pill" href="<?php echo esc_url( add_query_arg('orderby','date', fitz_shop_url()) ); ?>">More</a>
      </div>

      <div class="product-grid">
        <?php
        $q = new WP_Query([
          'post_type'      => 'product',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'post_status'    => 'publish'
        ]);
        if ($q->have_posts()):
          while ($q->have_posts()): $q->the_post();
            $product = function_exists('wc_get_product') ? wc_get_product(get_the_ID()) : null; ?>
            <article class="product-card">
              <a href="<?php the_permalink(); ?>" class="thumb">
                <?php if (has_post_thumbnail()) the_post_thumbnail('medium_large'); ?>
              </a>
              <div class="pc-body">
                <h3 class="pc-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="pc-meta"><?php if ($product) echo $product->get_price_html(); ?></div>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata();
        else: ?>
          <p>No products yet — add some in Products → Add New.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER -->
  <section class="fitz-prefooter" aria-label="About & newsletter">
    <div class="fitz-container pre-grid">
      <div class="pf-card">
        <div class="pf-ico">🛰️</div>
        <h3>About Us</h3>
        <p>Learn more about our brand and our history.</p>
      </div>
      <div class="pf-card">
        <div class="pf-ico">⚖️</div>
        <h3>Legal Mentions</h3>
        <p>Check out our data governance policy.</p>
      </div>
      <div class="pf-card">
        <div class="pf-ico">📬</div>
        <h3>Newsletter</h3>
        <p>Subscribe to keep up on deals and newest releases.</p>
      </div>
    </div>
    <div class="fitz-container pf-cta">
      <a class="btn btn-outline" href="<?php echo esc_url( home_url('/contact') ); ?>">Contact</a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
