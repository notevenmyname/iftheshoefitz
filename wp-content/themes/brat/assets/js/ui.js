document.addEventListener('DOMContentLoaded', function () {
  if (!document.body.classList.contains('home')) return;
  if (window.Swiper) {
    new Swiper('.brand-swiper', {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      autoplay: { delay: 0, disableOnInteraction: false },
      speed: 4000,
      freeMode: true,
      freeModeMomentum: false,
      breakpoints: {
        576: { slidesPerView: 5 },
        768: { slidesPerView: 6 },
        992: { slidesPerView: 7 },
        1200:{ slidesPerView: 8 }
      }
    });

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

  if (window.AOS) AOS.init({ once: true, duration: 600, easing: 'ease-out-quad' });
});

