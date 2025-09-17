<?php
/**
 * @package Honey Shop 
 * Setup the WordPress core custom header feature.
 *
 * @uses honey_shop_header_style()
*/
function honey_shop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'honey_shop_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 300,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'honey_shop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'honey_shop_custom_header_setup' );

if ( ! function_exists( 'honey_shop_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see honey_shop_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'honey_shop_header_style' );

function honey_shop_header_style() {
	$honey_shop_header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/header-img.png';
	$honey_shop_custom_css = "
        .box-image .single-page-img{
			background-image: url('" . esc_url($honey_shop_header_image) . "');
			background-repeat: no-repeat;
	        background-position: center center;
	        background-size: cover !important;
	        height: 300px;
		}";
	   	wp_add_inline_style( 'honey-shop-basic-style', $honey_shop_custom_css );
}
endif;