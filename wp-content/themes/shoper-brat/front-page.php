<?php
/** Front page for "if the shoe Fitz" */
get_header();
?>
<main id="primary" class="site-main fitz-home">

  <!-- HERO with sneaker image -->
  <section class="fitz-hero" aria-label="Hero">
  <div class="fitz-container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6 order-lg-2" data-aos="fade-left">
        <h1 class="hero-title" aria-label="<?php bloginfo('name'); ?>">
          <span>if the shoe</span>
          <span class="serif underlined">Fitz</span>
        </h1>
        <p class="hero-sub"><?php bloginfo('description'); ?></p>
        <a class="btn btn-cta" href="<?php echo esc_url( fitz_shop_url() ); ?>">Shop now</a>
      </div>

      <div class="col-lg-6 order-lg-1" data-aos="fade-right">
        <div class="hero-visual">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/hero-sneakers.png'); ?>" alt="" decoding="async" />
        </div>
      </div>
    </div>
  </div>
  </section>


  <!-- BRAND STRIP -->
 <nav class="fitz-brands" aria-label="Browse by brand">
  <div class="fitz-container">
    <div class="swiper brand-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('nike','pa_brand') ); ?>">NIKE</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('adidas','pa_brand') ); ?>">ADIDAS</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('new-balance','pa_brand') ); ?>">NEW BALANCE</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('jordan','pa_brand') ); ?>">JORDAN</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('yeezy','pa_brand') ); ?>">YEEZY</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('salomon','pa_brand') ); ?>">SALOMON</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('converse','pa_brand') ); ?>">CONVERSE</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('vans','pa_brand') ); ?>">VANS</a></div>
        <div class="swiper-slide"><a href="<?php echo esc_url( fitz_term_link('puma','pa_brand') ); ?>">PUMA</a></div>
      </div>
    </div>
  </div>
</nav>


  <!-- GENDER CARDS -->
  <!-- <section class="fitz-gender">
    <div class="fitz-container">
      <h2 class="section-title">Who are you shopping for?</h2>
      <div class="gender-grid">
        <a class="gender-card" data-aos="zoom-in" href="<?php echo esc_url( fitz_term_link('men','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/men.jpg'); ?>" alt="Men">
          <div class="gc-footer"><span>Men</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
        <a class="gender-card" data-aos="zoom-in" data-aos-delay="100" href="<?php echo esc_url( fitz_term_link('women','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/women.jpg'); ?>" alt="Women">
          <div class="gc-footer"><span>Women</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
        <a class="gender-card" data-aos="zoom-in" data-aos-delay="200" href="<?php echo esc_url( fitz_term_link('kids','product_cat') ); ?>">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/kids.jpg'); ?>" alt="Kids">
          <div class="gc-footer"><span>Kids</span><span class="gc-arrow" aria-hidden="true">→</span></div>
        </a>
      </div>
    </div>
  </section> -->
  <!-- GENDER CARDS -->
<section class="fitz-gender">
  <div class="fitz-container">
    <h2 class="section-title">Who are you shopping for?</h2>
    <div class="gender-grid">

      <a class="gender-card" data-aos="zoom-in"
         href="<?php echo esc_url( fitz_term_link('homme','product_cat') ); ?>">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/men.jpg'); ?>" alt="Men">
        <div class="gc-footer"><span>Men</span><span class="gc-arrow" aria-hidden="true">→</span></div>
      </a>

      <a class="gender-card" data-aos="zoom-in" data-aos-delay="100"
         href="<?php echo esc_url( fitz_term_link('femme','product_cat') ); ?>">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/women.jpg'); ?>" alt="Women">
        <div class="gc-footer"><span>Women</span><span class="gc-arrow" aria-hidden="true">→</span></div>
      </a>

      <a class="gender-card" data-aos="zoom-in" data-aos-delay="200"
         href="<?php echo esc_url( fitz_term_link('enfant','product_cat') ); ?>">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/gender/kids.jpg'); ?>" alt="Kids">
        <div class="gc-footer"><span>Kids</span><span class="gc-arrow" aria-hidden="true">→</span></div>
      </a>

    </div>
  </div>
</section>


  <!-- NEWEST RELEASES -->
 <div class="new-head">
  <h2 class="section-title newest-title">Our Newest Releases</h2>
  <div class="d-flex align-items-center gap-2">
    <button class="btn btn-pill newest-prev" aria-label="Previous">‹</button>
    <button class="btn btn-pill newest-next" aria-label="Next">›</button>
  </div>
</div>

<div class="swiper newest-swiper" data-aos="fade-up">
  <div class="swiper-wrapper">
    <?php
    $q = new WP_Query([
      'post_type'=>'product','posts_per_page'=>6,'orderby'=>'date','order'=>'DESC','post_status'=>'publish'
    ]);
    if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post();
        $product = function_exists('wc_get_product') ? wc_get_product(get_the_ID()) : null; ?>
        <div class="swiper-slide" data-aos="fade-up">
          <article class="product-card">
            <a href="<?php the_permalink(); ?>" class="thumb">
              <?php if (has_post_thumbnail()) the_post_thumbnail('medium_large'); ?>
            </a>
            <div class="pc-body">
              <h3 class="pc-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="pc-meta"><?php if ($product) echo $product->get_price_html(); ?></div>
            </div>
          </article>
        </div>
      <?php endwhile; wp_reset_postdata();
    else: ?>
      <div class="swiper-slide"><p>No products yet — add some in Products → Add New.</p></div>
    <?php endif; ?>
  </div>
</div>


  <!-- PRE-FOOTER -->
  <section class="fitz-prefooter" aria-label="About & newsletter">
    <div class="fitz-container pre-grid">
      <div class="pf-card" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#modalAbout">
        <div class="pf-ico">🛰️</div>
        <h3>About Us</h3>
        <p>Learn more about our brand and our history.</p>
      </div>
      <div class="pf-card" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#modalLegal">
        <div class="pf-ico">⚖️</div>
        <h3>Legal Mentions</h3>
        <p>Check out our data governance policy.</p>
      </div>
      <div class="pf-card" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#modalNewsletter">
        <div class="pf-ico">📬</div>
        <h3>Newsletter</h3>
        <p>Subscribe to keep up on deals and newest releases.</p>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <div class="modal fade" id="modalAbout" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius:18px;">
        <div class="modal-header">
          <h5 class="modal-title">About Us</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>We specialize in Y2K fashion sneakers for Gen Z—brat-era bold with future-nostalgia vibes. Chunky silhouettes, chrome shine, neon pops—curated drops only. Modern attitude. Vintage energy. If the vibe fits, wear it.</p>
          <p>Born in 2023, we're the bridge between nostalgic Y2K aesthetics and tomorrow's streetwear. Every drop is handpicked for that perfect balance of chunky comfort and cyberpunk edge.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pill" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalLegal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius:18px;">
        <div class="modal-header">
          <h5 class="modal-title">Legal Mentions (GDPR)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>We process personal data only to provide our services (orders, customer support, analytics). You can request access, correction, or deletion at any time. See our <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a> for full details.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pill" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalNewsletter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius:18px;">
        <form id="fitz-newsletter-form">
          <div class="modal-header">
            <h5 class="modal-title">Join our newsletter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="fitz-newsletter-email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="fitz-newsletter-email" name="email" required placeholder="you@example.com">
              <div class="form-text">We’ll send occasional updates. Unsubscribe anytime.</div>
            </div>
            <div class="alert alert-success d-none" id="fitz-newsletter-ok" role="alert">Thanks! You’re on the list.</div>
            <div class="alert alert-danger d-none" id="fitz-newsletter-err" role="alert">Sorry, something went wrong. Please try again.</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-pill" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-pill btn-cta">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>
