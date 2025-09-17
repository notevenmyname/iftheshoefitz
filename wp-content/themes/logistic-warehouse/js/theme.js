// preloader
jQuery(window).on('load', function() {
  jQuery('#status').fadeOut();
  jQuery('#preloader').delay(350).fadeOut('slow');
  jQuery('body').delay(350).css({'overflow':'visible'});
})

// toggle button
jQuery(function($){
  $( '.toggle-nav button' ).click( function(e){
    $( 'body' ).toggleClass( 'show-main-menu' );
    var element = $( '.sidenav' );
    logistic_warehouse_trapFocus( element );
  });

  $( '.close-button' ).click( function(e){
    $( '.toggle-nav button' ).click();
    $( '.toggle-nav button' ).focus();
  });
  $( document ).on( 'keyup',function(evt) {
    if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
      $( '.toggle-nav button' ).click();
      $( '.toggle-nav button' ).focus();
    }
  });
});

function logistic_warehouse_trapFocus( element, namespace ) {
  var logistic_warehouse_focusableEls = element.find( 'a, button' );
  var logistic_warehouse_firstFocusableEl = logistic_warehouse_focusableEls[0];
  var logistic_warehouse_lastFocusableEl = logistic_warehouse_focusableEls[logistic_warehouse_focusableEls.length - 1];
  var KEYCODE_TAB = 9;

  element.keydown( function(e) {
    var isTabPressed = ( e.key === 'Tab' || e.keyCode === KEYCODE_TAB );

    if ( !isTabPressed ) {
      return;
    }

    if ( e.shiftKey ) /* shift + tab */ {
      if ( document.activeElement === logistic_warehouse_firstFocusableEl ) {
        logistic_warehouse_lastFocusableEl.focus();
        e.preventDefault();
      }
    } else /* tab */ {
      if ( document.activeElement === logistic_warehouse_lastFocusableEl ) {
        logistic_warehouse_firstFocusableEl.focus();
        e.preventDefault();
      }
    }
  });
}

jQuery(document).ready(function () {
  // Sticky Header
  jQuery(window).scroll(function () {
    var sticky = jQuery('.header-sticky'),
        scroll = jQuery(this).scrollTop();

    if (scroll >= 100) {
      sticky.addClass('header-fixed');
    } else {
      sticky.removeClass('header-fixed');
    }

    // Scroll to Top Button
    if (scroll > 0) {
      jQuery('#button').fadeIn();
    } else {
      jQuery('#button').fadeOut();
    }
  });

  jQuery('#button').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  logistic_warehouse_search_focus();
});

// Slider
jQuery(document).ready(function() {
  jQuery('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav:false,
    navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"], 
    dots:true,
    rtl:false,
    items: 1,
    autoplay:false,
  })
});

// Title Color
jQuery(document).ready(function () {
  jQuery("#slider-cat .slider-content .slider-title a").each(function () {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    var newText = "";

    for (var i = 0; i < splitT.length; i++) {
      if (i === 2 || i === splitT.length - 1) { // 3rd and last word
        newText += "<span class='title-text'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else {
        newText += splitT[i] + " ";
      }
    }
    jQuery(this).html(newText.trim());
  });
});

// search
function logistic_warehouse_search_focus() {

  /* First and last elements in the menu */
  var logistic_warehouse_search_firstTab = jQuery('.serach_inner input[type="search"]');
  var logistic_warehouse_search_lastTab  = jQuery('button.search-close'); /* Cancel button will always be last */

  jQuery(".search-open").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("search-focus");
    logistic_warehouse_search_firstTab.focus();
  });

  jQuery("button.search-close").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("search-focus");
    jQuery(".search-open").focus();
  });

  /* Redirect last tab to first input */
  logistic_warehouse_search_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      logistic_warehouse_search_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  logistic_warehouse_search_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      logistic_warehouse_search_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.serach_inner').on('keyup', function(e){
    if (jQuery('body').hasClass('search-focus'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('search-focus');
      logistic_warehouse_search_lastTab.focus();
    };
  });
}
