document.addEventListener('DOMContentLoaded', function () {
  if (!document.body.classList.contains('home')) return;

  // Brand ticker
  if (window.Swiper) {
    new Swiper('.brand-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 40,
      loop: true,
      loopAdditionalSlides: 30,
      autoplay: { delay: 1, disableOnInteraction: false },
      speed: 8000,
      freeMode: true,
      freeModeMomentum: false,
      allowTouchMove: false,
      centeredSlides: false,
      grabCursor: false
    });

    // Product carousel
    new Swiper('.newest-swiper', {
      slidesPerView: 1.15,
      spaceBetween: 16,
      loop: true,
      autoplay: { delay: 2800, disableOnInteraction: false },
      speed: 700,
      navigation: { nextEl: '.newest-next', prevEl: '.newest-prev' },
      breakpoints: { 576:{slidesPerView:2}, 992:{slidesPerView:3} }
    });
  }

  // Newsletter AJAX
  var form = document.getElementById('fitz-newsletter-form');
  if(form){
    form.addEventListener('submit', function(e){
      e.preventDefault();
      var email = document.getElementById('fitz-newsletter-email').value.trim();
      var ok = document.getElementById('fitz-newsletter-ok');
      var err = document.getElementById('fitz-newsletter-err');
      ok.classList.add('d-none'); err.classList.add('d-none');
      if(!email){ err.classList.remove('d-none'); return; }
      // Simple POST to admin-ajax to email the admin
      var xhr = new XMLHttpRequest();
      xhr.open('POST', (window.ajaxurl || (document.body.dataset.ajaxurl)) || '/wp-admin/admin-ajax.php');
      xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      xhr.onload = function(){
        if(xhr.status>=200 && xhr.status<300){ ok.classList.remove('d-none'); form.reset(); }
        else { err.classList.remove('d-none'); }
      };
      xhr.onerror = function(){ err.classList.remove('d-none'); };
      xhr.send('action=fitz_newsletter&email='+encodeURIComponent(email));
    });
  }

  // Animate on scroll
  if (window.AOS) AOS.init({ once: true, duration: 600, easing: 'ease-out-quad' });
});
