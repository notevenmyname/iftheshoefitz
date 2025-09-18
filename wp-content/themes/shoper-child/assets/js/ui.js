document.addEventListener('DOMContentLoaded', function () {
  if (!document.body.classList.contains('home')) return;

  // Brand ticker
  if (window.Swiper) {
    new Swiper('.brand-swiper', {
      slidesPerView: 3,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 1600, disableOnInteraction: false },
      speed: 600,
      breakpoints: {
        576: { slidesPerView: 4 },
        768: { slidesPerView: 5 },
        992: { slidesPerView: 6 },
        1200:{ slidesPerView: 7 }
      }
    });

    // Product carousel (optional – wired below)
    new Swiper('.newest-swiper', {
      slidesPerView: 1.15,
      spaceBetween: 16,
      loop: true,
      navigation: { nextEl: '.newest-next', prevEl: '.newest-prev' },
      breakpoints: { 576:{slidesPerView:2}, 992:{slidesPerView:3} }
    });
  }

  // Animate on scroll
  if (window.AOS) AOS.init({ once: true, duration: 600, easing: 'ease-out-quad' });
});
