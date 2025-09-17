<?php

	$honey_shop_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$honey_shop_first_color = get_theme_mod('honey_shop_first_color');
	$honey_shop_second_color = get_theme_mod('honey_shop_second_color');
	$honey_shop_third_color = get_theme_mod('honey_shop_third_color');

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#sidebar .wp-block-tag-cloud a:hover, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .main-navigation ul.sub-menu > li > a:hover, .main-navigation ul.sub-menu > li > a:focus, .main-navigation ul.children > li > a:hover, .main-navigation ul.children > li > a:focus, .home-page-header .topbar, #slider .slider-arrows a, #products-section .product-icon .add_to_cart_button, #products-section .product-icon .added_to_cart.wc-forward, #products-section .product-icon .yith-wcwl-add-to-wishlist-button, #products-section .product-icon .button.yith-wcqv-button, #yith-quick-view-modal .yith-quick-view-close svg, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward, .single-product .yith-add-to-wishlist-button-block .yith-wcwl-add-to-wishlist-button, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .copyright .custom-social-icons i:hover, .scrollup i, .bradcrumbs a, .post-categories li a, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, nav.woocommerce-MyAccount-navigation ul li:hover, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .woocommerce-cart .wc-block-grid__product-onsale,.woocommerce-cart .wc-block-grid .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-cart__submit-button,a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,a.wc-block-components-checkout-return-to-cart-button:hover, .wc-block-components-totals-coupon__button:hover, .search-form .search-submit, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='.woocommerce-pagination .page-numbers.current, .woocommerce-pagination a.page-numbers:hover, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_first_color).'!important;';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='a:hover, .sticky .post-main-box h2:before, #slider .inner_carousel .slider-title, #slider .inner_carousel .banner-btn a, #products-section .product-sec-content .small-text, #products-section .product-box-content .product-head a, #products-section .product-box-content .product-link-button, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .pagination a:hover, .pagination .current, .post-navigation span.meta-nav, .post-navigation span.meta-nav:hover, .yith-wcwl-wishlistaddedbrowse span.feedback, .yith-wcwl-wishlistexistsbrowse span.feedback, .wishlist_table .product-name a, .wishlist_table.mobile .product-name a, .woocommerce-message::before,.woocommerce-info::before{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .tags-bg a:hover, #footer .custom-social-icons a:hover{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_first_color).'!important;';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#slider .bottom-bg svg path, #slider .box-text svg path{';
			$honey_shop_custom_css .='fill: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .post-main-box, .grid-post-main-box, .bradcrumbs a, .post-categories li a, #sidebar .widget, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a{';
			$honey_shop_custom_css .='border-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#footer .custom-social-icons a:hover{';
			$honey_shop_custom_css .='outline: 6px double '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#sidebar .widget{';
			$honey_shop_custom_css .='border-bottom-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$honey_shop_custom_css .='border-top-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#sidebar .widget{';
			$honey_shop_custom_css .='border-right-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='#sidebar .widget{';
			$honey_shop_custom_css .='border-left-color: '.esc_attr($honey_shop_first_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_first_color != false){
		$honey_shop_custom_css .='@media screen and (max-width:1000px) {';
			$honey_shop_custom_css .='{';
				$honey_shop_custom_css .='color: '.esc_attr($honey_shop_first_color).'!important;';
			$honey_shop_custom_css .='}';
			$honey_shop_custom_css .='.toggle-nav i, .sidenav .closebtn{';
				$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_first_color).';';
			$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='}';
	}

	// Second Color
	if($honey_shop_second_color != false){
		$honey_shop_custom_css .='.main-navigation .current_page_item > a:before, .main-navigation .current-menu-item > a:before, .main-navigation ul .menu-item.menu-item-has-children.current-menu-item > a:before, .main-navigation ul .page_item.page_item_has_children.current_page_item > a:before, #comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .single-product .woocommerce-notices-wrapper .woocommerce-message .button.wc-forward:hover, #sidebar .wp-block-search .wp-block-search__button:hover, #slider .inner_carousel .banner-btn a:hover, #slider .box-text a, #slider .slider-arrows a:hover, #products-section .product-sec-content .section-title:before, #products-section .product-sec-content .section-title:after, #products-section .product-icon .added_to_cart.wc-forward, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, .more-btn a:hover,#footer .tagcloud a:hover, .pro-button a:hover, #comments a.comment-reply-link:hover, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span, a.added_to_cart.wc-forward:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, .woocommerce ul.products li.product .button:hover{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_second_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_second_color != false){
		$honey_shop_custom_css .='#sidebar .wp-block-search .wp-block-search__button:hover, #slider .inner_carousel .banner-btn a, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, .more-btn a:hover,#footer .tagcloud a:hover, .pro-button a:hover, .bradcrumbs a:hover, .post-categories li a:hover, .bradcrumbs span{';
			$honey_shop_custom_css .='border-color: '.esc_attr($honey_shop_second_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_second_color != false){
		$honey_shop_custom_css .='#slider svg.slider-right-svg path{';
			$honey_shop_custom_css .='fill: '.esc_attr($honey_shop_second_color).';';
		$honey_shop_custom_css .='}';
	}

	// Third Color
	if($honey_shop_third_color != false){
		$honey_shop_custom_css .='.main-navigation .current_page_item:after, .main-navigation .current-menu-item:after, #products-section .product-box-content .product-link-button:after{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_third_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_third_color != false){
		$honey_shop_custom_css .='p.site-title , .site-description a, p.site-title a, .logo h1 a, .logo p.site-description, .main-navigation ul .menu-item.menu-item-has-children a:after, .main-navigation ul .page_item.page_item_has_children a:after, #site-navigation .menu ul li a, .main-navigation .menu > li > a, .main-navigation .menu > li > a:hover, .home-page-header .main-topbar .top-icons i, #slider .inner_carousel .slider-small-title, #products-section .product-sec-content .section-title, #products-section .product-box-content .product-price .amount{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_third_color).';';
		$honey_shop_custom_css .='}';
	}

	if($honey_shop_third_color != false){
		$honey_shop_custom_css .='.home-page-header .main-topbar{';
			$honey_shop_custom_css .='border-bottom-color: '.esc_attr($honey_shop_third_color).';';
		$honey_shop_custom_css .='}';
	}

	// $honey_shop_hide_show_slider_section = get_theme_mod('honey_shop_hide_show_slider_section', true);
	// if($honey_shop_hide_show_slider_section != true){
	// 	$honey_shop_custom_css .='.page-template-custom-home-page .home-page-header .main-topbar{';
	// 		$honey_shop_custom_css .='border-bottom: 2px solid #EB7D01;';
	// 	$honey_shop_custom_css .='}';
	// }

	$honey_shop_slider_background_color = get_theme_mod('honey_shop_slider_background_color');
	if($honey_shop_slider_background_color != false){
		$honey_shop_custom_css .='#slider .slider-img img.slider-bg-img{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_slider_background_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_slider_right_bg_color = get_theme_mod('honey_shop_slider_right_bg_color');
	if($honey_shop_slider_right_bg_color != false){
		$honey_shop_custom_css .='#slider svg.slider-right-svg path{';
			$honey_shop_custom_css .='fill: '.esc_attr($honey_shop_slider_right_bg_color).';';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#slider .box-text a{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_slider_right_bg_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_slider_bottom_color = get_theme_mod('honey_shop_slider_bottom_color');
	if($honey_shop_slider_bottom_color != false){
		$honey_shop_custom_css .='#slider .bottom-bg svg path, #slider .box-text svg path{';
			$honey_shop_custom_css .='fill: '.esc_attr($honey_shop_slider_bottom_color).';';
		$honey_shop_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_width_option','Full Width');
    if($honey_shop_theme_lay == 'Boxed'){
		$honey_shop_custom_css .='body{';
			$honey_shop_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='right: 100px;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.row.outer-logo{';
			$honey_shop_custom_css .='margin-left: 0px;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_theme_lay == 'Wide Width'){
		$honey_shop_custom_css .='body{';
			$honey_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='right: 30px;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.row.outer-logo{';
			$honey_shop_custom_css .='margin-left: 0px;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_theme_lay == 'Full Width'){
		$honey_shop_custom_css .='body{';
			$honey_shop_custom_css .='max-width: 100%;';
		$honey_shop_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$honey_shop_sticky_header_padding = get_theme_mod('honey_shop_sticky_header_padding');
	if($honey_shop_sticky_header_padding != false){
		$honey_shop_custom_css .='.header-fixed{';
			$honey_shop_custom_css .='padding: '.esc_attr($honey_shop_sticky_header_padding).';';
		$honey_shop_custom_css .='}';
	}

	// Banner
	$honey_shop_resp_slider = get_theme_mod( 'honey_shop_resp_slider_hide_show',true);
    if($honey_shop_resp_slider == true && get_theme_mod( 'honey_shop_hide_show_slider_section', true) == false){
        $honey_shop_custom_css .='#slider{';
            $honey_shop_custom_css .='display:none;';
        $honey_shop_custom_css .='} ';
    }
    if($honey_shop_resp_slider == true){
        $honey_shop_custom_css .='@media screen and (max-width:575px) {';
        $honey_shop_custom_css .='#slider{';
            $honey_shop_custom_css .='display:block;';
        $honey_shop_custom_css .='} }';
    }else if($honey_shop_resp_slider == false){
        $honey_shop_custom_css .='@media screen and (max-width:575px) {';
        $honey_shop_custom_css .='#slider{';
            $honey_shop_custom_css .='display:none;';
        $honey_shop_custom_css .='} }';
        $honey_shop_custom_css .='@media screen and (max-width:575px){';
        $honey_shop_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
            $honey_shop_custom_css .='margin-top: 45px;';
        $honey_shop_custom_css .='} }';
        $honey_shop_custom_css .='@media screen and (max-width:575px) {';
        $honey_shop_custom_css .='#slider{';
            $honey_shop_custom_css .='margin-top: 5%;';
        $honey_shop_custom_css .='} }';
    }

	$honey_shop_resp_stickyheader = get_theme_mod( 'honey_shop_stickyheader_hide_show',false);
	if($honey_shop_resp_stickyheader == true && get_theme_mod( 'honey_shop_sticky_header',false) != true){
    	$honey_shop_custom_css .='.header-fixed.header-sticky .main-topbar{';
			$honey_shop_custom_css .='position:static;';
		$honey_shop_custom_css .='} ';
	}
    if($honey_shop_resp_stickyheader == true){
    	$honey_shop_custom_css .='@media screen and (max-width:575px) {';
		$honey_shop_custom_css .='.header-fixed.header-sticky .main-topbar{';
			$honey_shop_custom_css .='position:fixed;';
		$honey_shop_custom_css .='} }';
	}else if($honey_shop_resp_stickyheader == false){
		$honey_shop_custom_css .='@media screen and (max-width:575px){';
		$honey_shop_custom_css .='.header-fixed.header-sticky .main-topbar{';
			$honey_shop_custom_css .='position:static;';
		$honey_shop_custom_css .='} }';
	}

	$honey_shop_responsive_preloader_hide = get_theme_mod('honey_shop_responsive_preloader_hide',false);
	if($honey_shop_responsive_preloader_hide == true && get_theme_mod('honey_shop_loader_enable',false) == false){
		$honey_shop_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$honey_shop_custom_css .='display:none !important;';
		$honey_shop_custom_css .='} }';
	}

	if($honey_shop_responsive_preloader_hide == false){
		$honey_shop_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$honey_shop_custom_css .='display:none !important;';
		$honey_shop_custom_css .='} }';
	}

	$honey_shop_resp_sidebar = get_theme_mod( 'honey_shop_sidebar_hide_show',true);
    if($honey_shop_resp_sidebar == true){
    	$honey_shop_custom_css .='@media screen and (max-width:575px) {';
		$honey_shop_custom_css .='#sidebar{';
			$honey_shop_custom_css .='display:block;';
		$honey_shop_custom_css .='} }';
	}else if($honey_shop_resp_sidebar == false){
		$honey_shop_custom_css .='@media screen and (max-width:575px) {';
		$honey_shop_custom_css .='#sidebar{';
			$honey_shop_custom_css .='display:none;';
		$honey_shop_custom_css .='} }';
	}
	$honey_shop_resp_scroll_top = get_theme_mod( 'honey_shop_resp_scroll_top_hide_show',true);
	if($honey_shop_resp_scroll_top == true && get_theme_mod( 'honey_shop_hide_show_scroll',true) == false){
    	$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='visibility:hidden !important;';
		$honey_shop_custom_css .='} ';
	}
    if($honey_shop_resp_scroll_top == true){
    	$honey_shop_custom_css .='@media screen and (max-width:575px) {';
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='visibility:visible !important;';
		$honey_shop_custom_css .='} }';
	}else if($honey_shop_resp_scroll_top == false){
		$honey_shop_custom_css .='@media screen and (max-width:575px){';
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='visibility:hidden !important;';
		$honey_shop_custom_css .='} }';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$honey_shop_slider_content_padding_top_bottom = get_theme_mod('honey_shop_slider_content_padding_top_bottom');
	$honey_shop_slider_content_padding_left_right = get_theme_mod('honey_shop_slider_content_padding_left_right');
	if($honey_shop_slider_content_padding_top_bottom != false || $honey_shop_slider_content_padding_left_right != false){
		$honey_shop_custom_css .='#slider .carousel-caption{';
			$honey_shop_custom_css .='top: '.esc_attr($honey_shop_slider_content_padding_top_bottom).'; bottom: '.esc_attr($honey_shop_slider_content_padding_top_bottom).';left: '.esc_attr($honey_shop_slider_content_padding_left_right).';right: '.esc_attr($honey_shop_slider_content_padding_left_right).';';
		$honey_shop_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$honey_shop_align_footer_social_icon = get_theme_mod('honey_shop_align_footer_social_icon');
	if($honey_shop_align_footer_social_icon != false){
		$honey_shop_custom_css .='.copyright .widget{';
			$honey_shop_custom_css .='text-align: '.esc_attr($honey_shop_align_footer_social_icon).';';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$honey_shop_custom_css .='text-align: center;} }';
	}

	$honey_shop_copyright_alingment = get_theme_mod('honey_shop_copyright_alingment');
	if($honey_shop_copyright_alingment != false){
		$honey_shop_custom_css .='.copyright p{';
			$honey_shop_custom_css .='text-align: '.esc_attr($honey_shop_copyright_alingment).';';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p{';
			$honey_shop_custom_css .='text-align: center;} }';
	}

	$honey_shop_resp_stickycopyright = get_theme_mod( 'honey_shop_stickycopyright_hide_show',false);
	if($honey_shop_resp_stickycopyright == true && get_theme_mod( 'honey_shop_copyright_sticky',false) != true){
    	$honey_shop_custom_css .='.copyright-sticky{';
			$honey_shop_custom_css .='position:static;';
		$honey_shop_custom_css .='} ';
	}

	$honey_shop_footer_social_icons_font_size = get_theme_mod('honey_shop_footer_social_icons_font_size','16');
	$honey_shop_custom_css .='.copyright .widget i{';
		$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_footer_social_icons_font_size).'px;';
	$honey_shop_custom_css .='}';

	$honey_shop_footer_background_color = get_theme_mod('honey_shop_footer_background_color');
	if($honey_shop_footer_background_color != false){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_footer_background_color).';';
		$honey_shop_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$honey_shop_preloader_bg_color = get_theme_mod('honey_shop_preloader_bg_color');
	if($honey_shop_preloader_bg_color != false){
		$honey_shop_custom_css .='#preloader{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_preloader_bg_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_preloader_border_color = get_theme_mod('honey_shop_preloader_border_color');
	if($honey_shop_preloader_border_color != false){
		$honey_shop_custom_css .='.loader-line{';
			$honey_shop_custom_css .='border-color: '.esc_attr($honey_shop_preloader_border_color).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_preloader_bg_img = get_theme_mod('honey_shop_preloader_bg_img');
	if($honey_shop_preloader_bg_img != false){
		$honey_shop_custom_css .='#preloader{';
			$honey_shop_custom_css .='background: url('.esc_attr($honey_shop_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$honey_shop_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$honey_shop_slider_image_overlay = get_theme_mod('honey_shop_slider_image_overlay', true);
	if($honey_shop_slider_image_overlay == false){
		$honey_shop_custom_css .='#slider img{';
			$honey_shop_custom_css .='opacity:1;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_slider_image_overlay_color = get_theme_mod('honey_shop_slider_image_overlay_color', true);
	if($honey_shop_slider_image_overlay_color != false){
		$honey_shop_custom_css .='#slider{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_slider_image_overlay_color).';';
		$honey_shop_custom_css .='}';
	}


	/*-------------- Copyright Alignment ----------------*/

	$honey_shop_copyright_background_color = get_theme_mod('honey_shop_copyright_background_color');
	if($honey_shop_copyright_background_color != false){
		$honey_shop_custom_css .='#footer-2{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_copyright_background_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_background_image = get_theme_mod('honey_shop_footer_background_image');
	if($honey_shop_footer_background_image != false){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background: url('.esc_attr($honey_shop_footer_background_image).')no-repeat;background-size:cover';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_img_footer','scroll');
	if($honey_shop_theme_lay == 'fixed'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$honey_shop_custom_css .='}';
	}elseif ($honey_shop_theme_lay == 'scroll'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_img_position = get_theme_mod('honey_shop_footer_img_position','center center');
	if($honey_shop_footer_img_position != false){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background-position: '.esc_attr($honey_shop_footer_img_position).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_widgets_heading = get_theme_mod( 'honey_shop_footer_widgets_heading','Left');
    if($honey_shop_footer_widgets_heading == 'Left'){
		$honey_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$honey_shop_custom_css .='text-align: left;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_footer_widgets_heading == 'Center'){
		$honey_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$honey_shop_custom_css .='text-align: center;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_footer_widgets_heading == 'Right'){
		$honey_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$honey_shop_custom_css .='text-align: right;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_widgets_content = get_theme_mod( 'honey_shop_footer_widgets_content','Left');
    if($honey_shop_footer_widgets_content == 'Left'){
		$honey_shop_custom_css .='#footer .widget{';
		$honey_shop_custom_css .='text-align: left;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_footer_widgets_content == 'Center'){
		$honey_shop_custom_css .='#footer .widget{';
			$honey_shop_custom_css .='text-align: center;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_footer_widgets_content == 'Right'){
		$honey_shop_custom_css .='#footer .widget{';
			$honey_shop_custom_css .='text-align: right;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_copyright_font_size = get_theme_mod('honey_shop_copyright_font_size');
	if($honey_shop_copyright_font_size != false){
		$honey_shop_custom_css .='#footer-2 a, #footer-2 p{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_copyright_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_copyright_padding_top_bottom = get_theme_mod('honey_shop_copyright_padding_top_bottom');
	if($honey_shop_copyright_padding_top_bottom != false){
		$honey_shop_custom_css .='#footer-2{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($honey_shop_copyright_padding_top_bottom).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_padding = get_theme_mod('honey_shop_footer_padding');
	if($honey_shop_footer_padding != false){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='padding: '.esc_attr($honey_shop_footer_padding).' 0;';
		$honey_shop_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$honey_shop_scroll_to_top_font_size = get_theme_mod('honey_shop_scroll_to_top_font_size');
	if($honey_shop_scroll_to_top_font_size != false){
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_scroll_to_top_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_scroll_to_top_padding = get_theme_mod('honey_shop_scroll_to_top_padding');
	$honey_shop_scroll_to_top_padding = get_theme_mod('honey_shop_scroll_to_top_padding');
	if($honey_shop_scroll_to_top_padding != false){
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_scroll_to_top_padding).';padding-bottom: '.esc_attr($honey_shop_scroll_to_top_padding).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_scroll_to_top_width = get_theme_mod('honey_shop_scroll_to_top_width');
	if($honey_shop_scroll_to_top_width != false){
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='width: '.esc_attr($honey_shop_scroll_to_top_width).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_scroll_to_top_height = get_theme_mod('honey_shop_scroll_to_top_height');
	if($honey_shop_scroll_to_top_height != false){
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='height: '.esc_attr($honey_shop_scroll_to_top_height).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_scroll_to_top_border_radius = get_theme_mod('honey_shop_scroll_to_top_border_radius');
	if($honey_shop_scroll_to_top_border_radius != false){
		$honey_shop_custom_css .='.scrollup i{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_scroll_to_top_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$honey_shop_logo_padding = get_theme_mod('honey_shop_logo_padding');
	if($honey_shop_logo_padding != false){
		$honey_shop_custom_css .='.logo{';
			$honey_shop_custom_css .='padding: '.esc_attr($honey_shop_logo_padding).' !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_logo_margin = get_theme_mod('honey_shop_logo_margin');
	if($honey_shop_logo_margin != false){
		$honey_shop_custom_css .='.logo{';
			$honey_shop_custom_css .='margin: '.esc_attr($honey_shop_logo_margin).';';
		$honey_shop_custom_css .='}';
	}

	// Site title Font Size
	$honey_shop_site_title_font_size = get_theme_mod('honey_shop_site_title_font_size');
	if($honey_shop_site_title_font_size != false){
		$honey_shop_custom_css .='.logo p.site-title, .logo h1{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_site_title_font_size).';';
		$honey_shop_custom_css .='}';
	}

	// Site tagline Font Size
	$honey_shop_site_tagline_font_size = get_theme_mod('honey_shop_site_tagline_font_size');
	if($honey_shop_site_tagline_font_size != false){
		$honey_shop_custom_css .='.logo p.site-description{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_site_tagline_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_site_title_color = get_theme_mod('honey_shop_site_title_color');
	if($honey_shop_site_title_color != false){
		$honey_shop_custom_css .='p.site-title a, .logo h1 a{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_site_title_color).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_site_tagline_color = get_theme_mod('honey_shop_site_tagline_color');
	if($honey_shop_site_tagline_color != false){
		$honey_shop_custom_css .='.logo p.site-description{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_site_tagline_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_logo_width = get_theme_mod('honey_shop_logo_width');
	if($honey_shop_logo_width != false){
		$honey_shop_custom_css .='.logo img{';
			$honey_shop_custom_css .='width: '.esc_attr($honey_shop_logo_width).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_logo_height = get_theme_mod('honey_shop_logo_height');
	if($honey_shop_logo_height != false){
		$honey_shop_custom_css .='.logo img{';
			$honey_shop_custom_css .='height: '.esc_attr($honey_shop_logo_height).';object-fit:cover;';
		$honey_shop_custom_css .='}';
	}

	// Header Background Color
	$honey_shop_header_background_color = get_theme_mod('honey_shop_header_background_color');
	if($honey_shop_header_background_color != false){
		$honey_shop_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$honey_shop_custom_css .='background-color: '.esc_attr($honey_shop_header_background_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_header_img_position = get_theme_mod('honey_shop_header_img_position','center top');
	if($honey_shop_header_img_position != false){
		$honey_shop_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$honey_shop_custom_css .='background-position: '.esc_attr($honey_shop_header_img_position).'!important;';
		$honey_shop_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_blog_layout_option','Left');
    if($honey_shop_theme_lay == 'Default'){
		$honey_shop_custom_css .='.post-main-box{';
			$honey_shop_custom_css .='';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_theme_lay == 'Center'){
		$honey_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$honey_shop_custom_css .='text-align:center;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.post-info{';
			$honey_shop_custom_css .='margin-top:10px;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.post-info hr{';
			$honey_shop_custom_css .='margin:15px auto;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_theme_lay == 'Left'){
		$honey_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$honey_shop_custom_css .='text-align:Left;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.post-info hr{';
			$honey_shop_custom_css .='margin-bottom:10px;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.post-main-box h2{';
			$honey_shop_custom_css .='margin-top:10px;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='.service-text .more-btn{';
			$honey_shop_custom_css .='display:inline-block;';
		$honey_shop_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$honey_shop_blog_page_posts_settings = get_theme_mod( 'honey_shop_blog_page_posts_settings','Into Blocks');
    if($honey_shop_blog_page_posts_settings == 'Without Blocks'){
		$honey_shop_custom_css .='.post-main-box{';
			$honey_shop_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$honey_shop_custom_css .='}';
	}

	// featured image dimention
	$honey_shop_blog_post_featured_image_dimension = get_theme_mod('honey_shop_blog_post_featured_image_dimension', 'default');
	$honey_shop_blog_post_featured_image_custom_width = get_theme_mod('honey_shop_blog_post_featured_image_custom_width',250);
	$honey_shop_blog_post_featured_image_custom_height = get_theme_mod('honey_shop_blog_post_featured_image_custom_height',250);
	if($honey_shop_blog_post_featured_image_dimension == 'custom'){
		$honey_shop_custom_css .='.post-main-box img{';
			$honey_shop_custom_css .='width: '.esc_attr($honey_shop_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($honey_shop_blog_post_featured_image_custom_height).';';
		$honey_shop_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$honey_shop_featured_image_border_radius = get_theme_mod('honey_shop_featured_image_border_radius', 0);
	if($honey_shop_featured_image_border_radius != false){
		$honey_shop_custom_css .='.box-image img, .feature-box img{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_featured_image_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_featured_image_box_shadow = get_theme_mod('honey_shop_featured_image_box_shadow',0);
	if($honey_shop_featured_image_box_shadow != false){
		$honey_shop_custom_css .='.box-image img, #content-vw img{';
			$honey_shop_custom_css .='box-shadow: '.esc_attr($honey_shop_featured_image_box_shadow).'px '.esc_attr($honey_shop_featured_image_box_shadow).'px '.esc_attr($honey_shop_featured_image_box_shadow).'px #cccccc;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_singlepost_image_box_shadow = get_theme_mod('honey_shop_singlepost_image_box_shadow',0);
	if($honey_shop_singlepost_image_box_shadow != false){
		$honey_shop_custom_css .='.feature-box img{';
			$honey_shop_custom_css .='box-shadow: '.esc_attr($honey_shop_singlepost_image_box_shadow).'px '.esc_attr($honey_shop_singlepost_image_box_shadow).'px '.esc_attr($honey_shop_singlepost_image_box_shadow).'px #cccccc;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_related_image_box_shadow = get_theme_mod('honey_shop_related_image_box_shadow',0);
	if($honey_shop_related_image_box_shadow != false){
		$honey_shop_custom_css .='.related-post .box-image img{';
			$honey_shop_custom_css .='box-shadow: '.esc_attr($honey_shop_related_image_box_shadow).'px '.esc_attr($honey_shop_related_image_box_shadow).'px '.esc_attr($honey_shop_related_image_box_shadow).'px #cccccc;';
		$honey_shop_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$honey_shop_button_letter_spacing = get_theme_mod('honey_shop_button_letter_spacing');
	$honey_shop_custom_css .='.post-main-box .more-btn{';
		$honey_shop_custom_css .='letter-spacing: '.esc_attr($honey_shop_button_letter_spacing).';';
	$honey_shop_custom_css .='}';

	$honey_shop_button_border_radius = get_theme_mod('honey_shop_button_border_radius');
	if($honey_shop_button_border_radius != false){
		$honey_shop_custom_css .='.post-main-box .more-btn a{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_button_border_radius).'px !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_button_top_bottom_padding = get_theme_mod('honey_shop_button_top_bottom_padding');
	$honey_shop_button_left_right_padding = get_theme_mod('honey_shop_button_left_right_padding');
	if($honey_shop_button_top_bottom_padding != false || $honey_shop_button_left_right_padding != false){
		$honey_shop_custom_css .='.post-main-box .more-btn{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($honey_shop_button_top_bottom_padding).'!important;padding-left: '.esc_attr($honey_shop_button_left_right_padding).'!important;padding-right: '.esc_attr($honey_shop_button_left_right_padding).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_button_font_size = get_theme_mod('honey_shop_button_font_size',14);
	$honey_shop_custom_css .='.post-main-box .more-btn a{';
		$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_button_font_size).';';
	$honey_shop_custom_css .='}';

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_button_text_transform','Capitalize');
	if($honey_shop_theme_lay == 'Capitalize'){
		$honey_shop_custom_css .='.post-main-box .more-btn a{';
			$honey_shop_custom_css .='text-transform:Capitalize;';
		$honey_shop_custom_css .='}';
	}
	if($honey_shop_theme_lay == 'Lowercase'){
		$honey_shop_custom_css .='.post-main-box .more-btn a{';
			$honey_shop_custom_css .='text-transform:Lowercase;';
		$honey_shop_custom_css .='}';
	}
	if($honey_shop_theme_lay == 'Uppercase'){
		$honey_shop_custom_css .='.post-main-box .more-btn a{';
			$honey_shop_custom_css .='text-transform:Uppercase;';
		$honey_shop_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$honey_shop_single_blog_comment_button_text = get_theme_mod('honey_shop_single_blog_comment_button_text', 'Post Comment');
	if($honey_shop_single_blog_comment_button_text == ''){
		$honey_shop_custom_css .='#comments p.form-submit {';
			$honey_shop_custom_css .='display: none;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_comment_width = get_theme_mod('honey_shop_single_blog_comment_width');
	if($honey_shop_comment_width != false){
		$honey_shop_custom_css .='#comments textarea{';
			$honey_shop_custom_css .='width: '.esc_attr($honey_shop_comment_width).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_single_blog_post_navigation_show_hide = get_theme_mod('honey_shop_single_blog_post_navigation_show_hide',true);
	if($honey_shop_single_blog_post_navigation_show_hide != true){
		$honey_shop_custom_css .='.post-navigation{';
			$honey_shop_custom_css .='display: none;';
		$honey_shop_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$honey_shop_display_grid_posts_settings = get_theme_mod( 'honey_shop_display_grid_posts_settings','Into Blocks');
    if($honey_shop_display_grid_posts_settings == 'Without Blocks'){
		$honey_shop_custom_css .='.grid-post-main-box{';
			$honey_shop_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_grid_featured_image_border_radius = get_theme_mod('honey_shop_grid_featured_image_border_radius', 0);
	if($honey_shop_grid_featured_image_border_radius != false){
		$honey_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_grid_featured_image_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}
	/*----------------Woocommerce Products Settings ------------------*/

	$honey_shop_related_product_show_hide = get_theme_mod('honey_shop_related_product_show_hide',true);
	if($honey_shop_related_product_show_hide != true){
		$honey_shop_custom_css .='.related.products{';
			$honey_shop_custom_css .='display: none;';
		$honey_shop_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$honey_shop_products_padding_top_bottom = get_theme_mod('honey_shop_products_padding_top_bottom');
	if($honey_shop_products_padding_top_bottom != false){
		$honey_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($honey_shop_products_padding_top_bottom).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_padding_left_right = get_theme_mod('honey_shop_products_padding_left_right');
	if($honey_shop_products_padding_left_right != false){
		$honey_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$honey_shop_custom_css .='padding-left: '.esc_attr($honey_shop_products_padding_left_right).'!important; padding-right: '.esc_attr($honey_shop_products_padding_left_right).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_box_shadow = get_theme_mod('honey_shop_products_box_shadow');
	if($honey_shop_products_box_shadow != false){
		$honey_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$honey_shop_custom_css .='box-shadow: '.esc_attr($honey_shop_products_box_shadow).'px '.esc_attr($honey_shop_products_box_shadow).'px '.esc_attr($honey_shop_products_box_shadow).'px #ddd;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_border_radius = get_theme_mod('honey_shop_products_border_radius');
	if($honey_shop_products_border_radius != false){
		$honey_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_products_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_btn_padding_top_bottom = get_theme_mod('honey_shop_products_btn_padding_top_bottom');
	if($honey_shop_products_btn_padding_top_bottom != false){
		$honey_shop_custom_css .='.woocommerce a.button{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($honey_shop_products_btn_padding_top_bottom).' !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_btn_padding_left_right = get_theme_mod('honey_shop_products_btn_padding_left_right');
	if($honey_shop_products_btn_padding_left_right != false){
		$honey_shop_custom_css .='.woocommerce a.button{';
			$honey_shop_custom_css .='padding-left: '.esc_attr($honey_shop_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($honey_shop_products_btn_padding_left_right).' !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_products_button_border_radius = get_theme_mod('honey_shop_products_button_border_radius', 0);
	if($honey_shop_products_button_border_radius != false){
		$honey_shop_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_products_button_border_radius).'px !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_woocommerce_sale_position = get_theme_mod( 'honey_shop_woocommerce_sale_position','right');
    if($honey_shop_woocommerce_sale_position == 'left'){
		$honey_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$honey_shop_custom_css .='left: 14px !important; right: auto !important;';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_woocommerce_sale_position == 'right'){
		$honey_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$honey_shop_custom_css .='left: auto!important; right: 14px !important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_woocommerce_sale_font_size = get_theme_mod('honey_shop_woocommerce_sale_font_size');
	if($honey_shop_woocommerce_sale_font_size != false){
		$honey_shop_custom_css .='.woocommerce span.onsale{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_woocommerce_sale_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_woocommerce_sale_padding_top_bottom = get_theme_mod('honey_shop_woocommerce_sale_padding_top_bottom');
	if($honey_shop_woocommerce_sale_padding_top_bottom != false){
		$honey_shop_custom_css .='.woocommerce span.onsale{';
			$honey_shop_custom_css .='padding-top: '.esc_attr($honey_shop_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($honey_shop_woocommerce_sale_padding_top_bottom).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_woocommerce_sale_padding_left_right = get_theme_mod('honey_shop_woocommerce_sale_padding_left_right');
	if($honey_shop_woocommerce_sale_padding_left_right != false){
		$honey_shop_custom_css .='.woocommerce span.onsale{';
			$honey_shop_custom_css .='padding-left: '.esc_attr($honey_shop_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($honey_shop_woocommerce_sale_padding_left_right).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_woocommerce_sale_border_radius = get_theme_mod('honey_shop_woocommerce_sale_border_radius', 0);
	if($honey_shop_woocommerce_sale_border_radius != false){
		$honey_shop_custom_css .='.woocommerce span.onsale{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_woocommerce_sale_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$honey_shop_social_icon_font_size = get_theme_mod('honey_shop_social_icon_font_size');
	if($honey_shop_social_icon_font_size != false){
		$honey_shop_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_social_icon_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_social_icon_padding = get_theme_mod('honey_shop_social_icon_padding');
	if($honey_shop_social_icon_padding != false){
		$honey_shop_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$honey_shop_custom_css .='padding: '.esc_attr($honey_shop_social_icon_padding).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_social_icon_width = get_theme_mod('honey_shop_social_icon_width');
	if($honey_shop_social_icon_width != false){
		$honey_shop_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$honey_shop_custom_css .='width: '.esc_attr($honey_shop_social_icon_width).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_social_icon_height = get_theme_mod('honey_shop_social_icon_height');
	if($honey_shop_social_icon_height != false){
		$honey_shop_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$honey_shop_custom_css .='height: '.esc_attr($honey_shop_social_icon_height).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_social_icon_border_radius = get_theme_mod('honey_shop_social_icon_border_radius');
	if($honey_shop_social_icon_border_radius != false){
		$honey_shop_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$honey_shop_custom_css .='border-radius: '.esc_attr($honey_shop_social_icon_border_radius).'px;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_resp_menu_toggle_btn_bg_color = get_theme_mod('honey_shop_resp_menu_toggle_btn_bg_color');
	if($honey_shop_resp_menu_toggle_btn_bg_color != false){
		$honey_shop_custom_css .='.toggle-nav i,#mySidenav .closebtn{';
			$honey_shop_custom_css .='background: '.esc_attr($honey_shop_resp_menu_toggle_btn_bg_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_grid_featured_image_box_shadow = get_theme_mod('honey_shop_grid_featured_image_box_shadow',0);
	if($honey_shop_grid_featured_image_box_shadow != false){
		$honey_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$honey_shop_custom_css .='box-shadow: '.esc_attr($honey_shop_grid_featured_image_box_shadow).'px '.esc_attr($honey_shop_grid_featured_image_box_shadow).'px '.esc_attr($honey_shop_grid_featured_image_box_shadow).'px #cccccc;';
		$honey_shop_custom_css .='}';
	}


	/*-------------- Menus Setings ----------------*/

	$honey_shop_navigation_menu_font_size = get_theme_mod('honey_shop_navigation_menu_font_size');
	if($honey_shop_navigation_menu_font_size != false){
		$honey_shop_custom_css .='.main-navigation ul a{';
			$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_navigation_menu_font_size).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_navigation_menu_font_weight = get_theme_mod('honey_shop_navigation_menu_font_weight','600');
	if($honey_shop_navigation_menu_font_weight != false){
		$honey_shop_custom_css .='.main-navigation ul a{';
			$honey_shop_custom_css .='font-weight: '.esc_attr($honey_shop_navigation_menu_font_weight).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_header_menus_hover_color = get_theme_mod('honey_shop_header_menus_hover_color');
	if($honey_shop_header_menus_hover_color != false){
		$honey_shop_custom_css .='.main-navigation ul a:hover{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_header_menus_hover_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_header_submenus_color = get_theme_mod('honey_shop_header_submenus_color');
	if($honey_shop_header_submenus_color != false){
		$honey_shop_custom_css .='.main-navigation ul ul a{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_header_submenus_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_header_submenus_hover_color = get_theme_mod('honey_shop_header_submenus_hover_color');
	if($honey_shop_header_submenus_hover_color != false){
		$honey_shop_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_header_submenus_hover_color).'!important;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_menus_item = get_theme_mod( 'honey_shop_menus_item_style','None');
    if($honey_shop_menus_item == 'None'){
		$honey_shop_custom_css .='.main-navigation ul a{';
			$honey_shop_custom_css .='';
		$honey_shop_custom_css .='}';
	}else if($honey_shop_menus_item == 'Zoom In'){
		$honey_shop_custom_css .='.main-navigation ul a:hover{';
			$honey_shop_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$honey_shop_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_footer_template','honey_shop-footer-one');
    if($honey_shop_theme_lay == 'honey_shop-footer-one'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='';
		$honey_shop_custom_css .='}';

	}else if($honey_shop_theme_lay == 'honey_shop-footer-two'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$honey_shop_custom_css .='color:#000;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer ul li::before{';
			$honey_shop_custom_css .='background:#000;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$honey_shop_custom_css .='border: 1px solid #000;';
		$honey_shop_custom_css .='}';

	}else if($honey_shop_theme_lay == 'honey_shop-footer-three'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background: #232524;';
		$honey_shop_custom_css .='}';
	}
	else if($honey_shop_theme_lay == 'honey_shop-footer-four'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background: #033D50;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$honey_shop_custom_css .='color:#fff;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer ul li::before{';
			$honey_shop_custom_css .='background:#fff;';
		$honey_shop_custom_css .='}';
		$honey_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$honey_shop_custom_css .='border: 1px solid #fff;';
		$honey_shop_custom_css .='}';
	}
	else if($honey_shop_theme_lay == 'honey_shop-footer-five'){
		$honey_shop_custom_css .='#footer{';
			$honey_shop_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$honey_shop_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$honey_shop_button_footer_heading_letter_spacing = get_theme_mod('honey_shop_button_footer_heading_letter_spacing',1);
	$honey_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$honey_shop_custom_css .='letter-spacing: '.esc_attr($honey_shop_button_footer_heading_letter_spacing).'px;';
	$honey_shop_custom_css .='}';

	$honey_shop_button_footer_font_size = get_theme_mod('honey_shop_button_footer_font_size','30');
	$honey_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$honey_shop_custom_css .='font-size: '.esc_attr($honey_shop_button_footer_font_size).'px;';
	$honey_shop_custom_css .='}';

	$honey_shop_theme_lay = get_theme_mod( 'honey_shop_button_footer_text_transform','Capitalize');
	if($honey_shop_theme_lay == 'Capitalize'){
		$honey_shop_custom_css .='#footer h3{';
			$honey_shop_custom_css .='text-transform:Capitalize;';
		$honey_shop_custom_css .='}';
	}
	if($honey_shop_theme_lay == 'Lowercase'){
		$honey_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$honey_shop_custom_css .='text-transform:Lowercase;';
		$honey_shop_custom_css .='}';
	}
	if($honey_shop_theme_lay == 'Uppercase'){
		$honey_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$honey_shop_custom_css .='text-transform:Uppercase;';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_footer_heading_weight = get_theme_mod('honey_shop_footer_heading_weight','500');
	if($honey_shop_footer_heading_weight != false){
		$honey_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$honey_shop_custom_css .='font-weight: '.esc_attr($honey_shop_footer_heading_weight).';';
		$honey_shop_custom_css .='}';
	}
	
	$honey_shop_slider_first_color = get_theme_mod('honey_shop_slider_first_color');

	$honey_shop_slider_second_color = get_theme_mod('honey_shop_slider_second_color');

	if($honey_shop_slider_first_color != false || $honey_shop_slider_second_color != false){
		$honey_shop_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($honey_shop_slider_first_color).', '.esc_attr($honey_shop_slider_second_color).');
		}';
	}

	$honey_shop_services_icon_color = get_theme_mod('honey_shop_services_icon_color');
	if($honey_shop_services_icon_color != false){
		$honey_shop_custom_css .='#about-sec i{';
			$honey_shop_custom_css .='color: '.esc_attr($honey_shop_services_icon_color).';';
		$honey_shop_custom_css .='}';
	}

	$honey_shop_single_page_breadcrumb = get_theme_mod('honey_shop_single_page_breadcrumb',true);
	if($honey_shop_single_page_breadcrumb != true){
		$honey_shop_custom_css .='.page-breadrumb{';
			$honey_shop_custom_css .='display: none;';
		$honey_shop_custom_css .='}';
	}