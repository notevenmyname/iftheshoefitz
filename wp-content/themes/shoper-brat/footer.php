<?php
/**
 * The template for displaying the footer
 */
?>
<footer class="fitz-footer">
  <div class="fitz-container">
    <div class="footer-content">
      
      <!-- Logo & Brand -->
      <div class="footer-brand">
        <div class="footer-logo">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/logo.png?v='.time()); ?>" alt="if the shoe Fitz" />
        </div>
        <p class="footer-tagline">Y2K fashion sneakers for Gen Z—brat-era bold with future-nostalgia vibes.</p>
        <div class="footer-social">
          <a href="#" class="social-link" aria-label="Instagram">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="TikTok">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
            </svg>
          </a>
          <a href="#" class="social-link" aria-label="Twitter">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-section">
        <h4 class="footer-heading">Shop</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( fitz_shop_url() ); ?>">All Products</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('men','product_cat') ); ?>">Men</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('women','product_cat') ); ?>">Women</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('kids','product_cat') ); ?>">Kids</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('new','product_cat') ); ?>">New Releases</a></li>
        </ul>
      </div>

      <!-- Brands -->
      <div class="footer-section">
        <h4 class="footer-heading">Brands</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( fitz_term_link('nike','pa_brand') ); ?>">Nike</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('adidas','pa_brand') ); ?>">Adidas</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('jordan','pa_brand') ); ?>">Jordan</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('yeezy','pa_brand') ); ?>">Yeezy</a></li>
          <li><a href="<?php echo esc_url( fitz_term_link('new-balance','pa_brand') ); ?>">New Balance</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="footer-section">
        <h4 class="footer-heading">Support</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact Us</a></li>
          <li><a href="<?php echo esc_url( home_url('/shipping') ); ?>">Shipping Info</a></li>
          <li><a href="<?php echo esc_url( home_url('/returns') ); ?>">Returns</a></li>
          <li><a href="<?php echo esc_url( home_url('/size-guide') ); ?>">Size Guide</a></li>
          <li><a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div class="footer-section">
        <h4 class="footer-heading">Legal</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url('/terms') ); ?>">Terms of Service</a></li>
          <li><a href="<?php echo esc_url( home_url('/cookies') ); ?>">Cookie Policy</a></li>
          <li><a href="<?php echo esc_url( home_url('/refund-policy') ); ?>">Refund Policy</a></li>
        </ul>
      </div>

    </div>

    <!-- Newsletter -->
    <div class="footer-newsletter">
      <div class="newsletter-content">
        <h4 class="newsletter-title">Stay Updated</h4>
        <p class="newsletter-desc">Get the latest drops and exclusive deals delivered to your inbox.</p>
        <form class="newsletter-form" id="footer-newsletter-form">
          <div class="newsletter-input-group">
            <input type="email" name="email" placeholder="Enter your email" required class="newsletter-input">
            <button type="submit" class="newsletter-btn">Subscribe</button>
          </div>
          <div class="newsletter-message d-none" id="footer-newsletter-message"></div>
        </form>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-bottom-content">
        <p class="copyright">&copy; <?php echo date('Y'); ?> if the shoe Fitz. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="<?php echo esc_url( home_url('/sitemap') ); ?>">Sitemap</a>
          <a href="<?php echo esc_url( home_url('/accessibility') ); ?>">Accessibility</a>
        </div>
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
