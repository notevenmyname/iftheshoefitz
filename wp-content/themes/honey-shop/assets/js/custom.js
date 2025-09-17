// Menus 
function honey_shop_menu_open_nav() {
  jQuery(".sidenav").addClass('show');
}
function honey_shop_menu_close_nav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function honey_shop_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const honey_shop_nav = document.querySelector( '.sidenav' );

      if ( ! honey_shop_nav || ! honey_shop_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...honey_shop_nav.querySelectorAll( 'input, a, button' )],
        honey_shop_lastEl = elements[ elements.length - 1 ],
        honey_shop_firstEl = elements[0],
        honey_shop_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && honey_shop_lastEl === honey_shop_activeEl ) {
        e.preventDefault();
        honey_shop_firstEl.focus();
      }

      if ( shiftKey && tabKey && honey_shop_firstEl === honey_shop_activeEl ) {
        e.preventDefault();
        honey_shop_lastEl.focus();
      }
    } );
  }
  honey_shop_keepFocusInMenu();
} )( window, document );

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});
/*sticky copyright*/
window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.copyright-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('copyright-fixed');
  } else {
    sticky.classList.remove('copyright-fixed');
  }
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});
