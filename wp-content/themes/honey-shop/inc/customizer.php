<?php
/**
 * Honey Shop   Theme Customizer
 *
 * @package Honey Shop  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function honey_shop_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'honey_shop_custom_controls' );

function honey_shop_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'honey_shop_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'honey_shop_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'honey_shop_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'honey-shop' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'honey_shop_menu_section' , array(
    	'title' => __( 'Menus Settings', 'honey-shop' ),
		'panel' => 'honey_shop_panel_id'
	) );

	$wp_customize->add_setting('honey_shop_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','honey-shop'),
        'section' => 'honey_shop_menu_section',
        'choices' => array(
        	'100' => __('100','honey-shop'),
            '200' => __('200','honey-shop'),
            '300' => __('300','honey-shop'),
            '400' => __('400','honey-shop'),
            '500' => __('500','honey-shop'),
            '600' => __('600','honey-shop'),
            '700' => __('700','honey-shop'),
            '800' => __('800','honey-shop'),
            '900' => __('900','honey-shop'),
        ),
	) );

	$wp_customize->add_setting('honey_shop_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_menus_item_style',array(
        'type' => 'select',
        'section' => 'honey_shop_menu_section',
		'label' => __('Menu Item Hover Style','honey-shop'),
		'choices' => array(
            'None' => __('None','honey-shop'),
            'Zoom In' => __('Zoom In','honey-shop'),
        ),
	) );

	$wp_customize->add_setting('honey_shop_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_header_menus_color', array(
		'label'    => __('Menus Color', 'honey-shop'),
		'section'  => 'honey_shop_menu_section',
	)));

	$wp_customize->add_setting('honey_shop_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'honey-shop'),
		'section'  => 'honey_shop_menu_section',
	)));

	$wp_customize->add_setting('honey_shop_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'honey-shop'),
		'section'  => 'honey_shop_menu_section',
	)));

	$wp_customize->add_setting('honey_shop_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'honey-shop'),
		'section'  => 'honey_shop_menu_section',
	)));

	// Topbar
	$wp_customize->add_section( 'honey_shop_top_bar' , array(
    'title' => esc_html__( 'Topbar', 'honey-shop' ),
		'panel' => 'honey_shop_panel_id'
	) );

	$wp_customize->add_setting('honey_shop_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_topbar_text',array(
		'label'	=> __('Add Text','honey-shop'),
		'section'	=> 'honey_shop_top_bar',
		'input_attrs' => array(
      'placeholder' => __( 'Limited Time Offer: Free Shipping on Orders Over $50!', 'honey-shop' ),
  	),
		'type'	=> 'text'
	));

	$wp_customize->add_setting('honey_shop_cart_icon',array(
		'default'	=> 'fa-solid fa-bag-shopping',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_cart_icon',array(
		'label'	=> __('Add Cart Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_top_bar',
		'setting'	=> 'honey_shop_cart_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('honey_shop_topbar_myaccount_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_topbar_myaccount_icon',array(
		'label'	=> esc_html__( 'Add Myaccount Icon', 'honey-shop' ), 
		'transport' => 'refresh',
		'section'	=> 'honey_shop_top_bar',
		'setting'	=> 'honey_shop_topbar_myaccount_icon',
		'type'		=> 'icon'
	)));

	//Sticky Header
	$wp_customize->add_setting( 'honey_shop_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','honey-shop' ),
    'section' => 'honey_shop_top_bar'
  )));

  $wp_customize->add_setting('honey_shop_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
		'section'=> 'honey_shop_top_bar',
		'type'=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'honey_shop_slider_section' , array(
	  'title'      => __( 'Slider Settings', 'honey-shop' ),
		'panel' => 'honey_shop_panel_id',
		'description' => __('For more options of Slider section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/honey-wordpress-theme">GET PRO</a>','honey-shop'),
	) );

	$wp_customize->add_setting( 'honey_shop_hide_show_slider_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_hide_show_slider_section',array(
		'label' => esc_html__( 'Show / Hide Slider Section','honey-shop' ),
		'section' => 'honey_shop_slider_section'
	)));

	$wp_customize->add_setting('honey_shop_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'honey_shop_sanitize_choices',
	));
	$wp_customize->add_control('honey_shop_slide_number',array(
		'label'	=> __('Number of slides to show','honey-shop'),
		'description' => __('Selct Max 3 number Of slide and refresh page','honey-shop'),
		'section'	=> 'honey_shop_slider_section',
		'type'		=> 'select',
		'choices'  => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
		),
	));

	$honey_shop_count =  get_theme_mod('honey_shop_slide_number');

	for($honey_shop_i=1; $honey_shop_i<=3; $honey_shop_i++) {		

	 	$wp_customize->add_setting('honey_shop_slider_small_title'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('honey_shop_slider_small_title'.$honey_shop_i,array(
			'label'	=> __('Slider Small Title','honey-shop'),
			'section'	=> 'honey_shop_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Natures Nectar', 'honey-shop' ),
	    	),
			'type'	=> 'text'
		));

	 	$wp_customize->add_setting('honey_shop_slider_title'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('honey_shop_slider_title'.$honey_shop_i,array(
			'label'	=> __('Slider Title','honey-shop'),
			'section'	=> 'honey_shop_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Pure, Organic Honey – From Nature to Your Table', 'honey-shop' ),
	    	),
			'type'	=> 'text'
		));

		$wp_customize->add_setting('honey_shop_slider_button_label'.$honey_shop_i,array(
			'default' => esc_html__( '', 'honey-shop' ),
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('honey_shop_slider_button_label'.$honey_shop_i,array(
			'label' => esc_html__( 'Button', 'honey-shop' ),
			'section' => 'honey_shop_slider_section',
			'setting' => 'honey_shop_slider_button_label'.$honey_shop_i,
			'type' => 'text',
			'input_attrs' => array(
	      'placeholder' => __( 'Shop Now', 'honey-shop' ),
	    ),
		));

		$wp_customize->add_setting('honey_shop_slider_button_url'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('honey_shop_slider_button_url'.$honey_shop_i,array(
			'label'	=> esc_html__( 'Add Button URL', 'honey-shop' ), 
			'section'	=> 'honey_shop_slider_section',
			'setting'	=> 'honey_shop_slider_button_url'.$honey_shop_i,
			'type'	=> 'url',
		));

		$wp_customize->add_setting('honey_shop_slider_bottom_img'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'honey_shop_slider_bottom_img'.$honey_shop_i,array(
		   'label' => __('Add Slider Bottom Image','honey-shop'),
		   'section' => 'honey_shop_slider_section',
		   'description' => __('Image Size (150 × 180px).','honey-shop'),
		)));

	 	$wp_customize->add_setting('honey_shop_slider_bottom_content'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('honey_shop_slider_bottom_content'.$honey_shop_i,array(
			'label'	=> __('Add Text','honey-shop'),
			'section'	=> 'honey_shop_slider_section',
			'input_attrs' => array(
	        'placeholder' => __( 'Learn that how we extract honey from honeycomb', 'honey-shop' ),
	    	),
			'type'	=> 'text'
		));

		$wp_customize->add_setting('honey_shop_bottom_icon_url'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('honey_shop_bottom_icon_url'.$honey_shop_i,array(
			'label'	=> esc_html__( 'Add Icon URL', 'honey-shop' ), 
			'section'	=> 'honey_shop_slider_section',
			'setting'	=> 'honey_shop_bottom_icon_url'.$honey_shop_i,
			'type'	=> 'url',
		));

		$wp_customize->add_setting('honey_shop_slider_bottom_icon'.$honey_shop_i,array(
			'default'	=> 'fa-solid fa-arrow-right',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
	        $wp_customize,'honey_shop_slider_bottom_icon'.$honey_shop_i,array(
			'label'	=> __('Add Icon','honey-shop'),
			'transport' => 'refresh',
			'section'	=> 'honey_shop_slider_section',
			'type'		=> 'icon'
		)));

		$wp_customize->add_setting('honey_shop_slider_right_img'.$honey_shop_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'honey_shop_slider_right_img'.$honey_shop_i,array(
		   'label' => __('Add Right Image','honey-shop'),
		   'section' => 'honey_shop_slider_section',
		   'description' => __('Image Size (360 × 450px).','honey-shop'),
		)));
	}

	$wp_customize->add_setting('honey_shop_slider_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'honey_shop_slider_bg_img',array(
	   'label' => __('Add Slider Background Image','honey-shop'),
	   'section' => 'honey_shop_slider_section',
	   'description' => __('Image Size (1200 × 800px).','honey-shop'),
	)));

	$wp_customize->add_setting('honey_shop_slider_background_color', array(
		'default'           => '#FAEAD1',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_slider_background_color', array(
		'label'    => __('Slider Background Color', 'honey-shop'),
		'section'  => 'honey_shop_slider_section',
	)));

	$wp_customize->add_setting('honey_shop_slider_right_bg_color', array(
		'default'           => '#F9C300',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_slider_right_bg_color', array(
		'label'    => __('Slider Background Color', 'honey-shop'),
		'section'  => 'honey_shop_slider_section',
	)));

	$wp_customize->add_setting('honey_shop_slider_bottom_color', array(
		'default'           => '#033D50',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_slider_bottom_color', array(
		'label'    => __('Slider Background Color', 'honey-shop'),
		'section'  => 'honey_shop_slider_section',
	)));

	$wp_customize->add_setting('honey_shop_slider_previous_icon',array(
		'default'	=> 'fa-solid fa-arrow-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_slider_previous_icon',array(
		'label'	=> __('Slider Previous Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('honey_shop_slider_next_icon',array(
		'default'	=> 'fa-solid fa-arrow-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_slider_next_icon',array(
		'label'	=> __('Slider Next Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_slider_section',
		'type'		=> 'icon'
	)));

	// Products Section
	$wp_customize->add_section('honey_shop_products_section', array(
    'title' => __('Products Section', 'honey-shop'),
    'panel' => 'honey_shop_panel_id',
    'description' => __('For more options of Products section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/honey-wordpress-theme">GET PRO</a>','honey-shop'),
	));

	$wp_customize->add_setting( 'honey_shop_products_section_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_products_section_hide_show',array(
    'label' => esc_html__( 'Show / Hide Products Section','honey-shop' ),
    'section' => 'honey_shop_products_section'
	)));

	$wp_customize->add_setting('honey_shop_products_section_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_section_text',array(
		'type' => 'text',
		'label' => __('Products text','honey-shop'),
		'input_attrs' => array(
	      'placeholder' => __( 'Shop', 'honey-shop' ),
	    ),
		'section' => 'honey_shop_products_section'
	));

	$wp_customize->add_setting('honey_shop_products_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_section_title',array(
		'type' => 'text',
		'label' => __('Products Title','honey-shop'),
		'input_attrs' => array(
	      'placeholder' => __( 'Our Bestseller', 'honey-shop' ),
	    ),
		'section' => 'honey_shop_products_section'
	));

	$honey_shop_args = array(
    'type'      => 'product',
    'taxonomy'  => 'product_cat'
	);
	$honey_shop_categories = get_categories($honey_shop_args);
	$honey_shop_cat_posts = array();
	$honey_shop_cat_posts[''] = 'Select'; // Default option with no selection
	foreach ($honey_shop_categories as $honey_shop_category) {
	  $honey_shop_cat_posts[$honey_shop_category->slug] = $honey_shop_category->name;
	}

	$wp_customize->add_setting('honey_shop_best_product_category', array(
    'default'           => '',
    'sanitize_callback' => 'honey_shop_sanitize_choices',
	));
	$wp_customize->add_control('honey_shop_best_product_category', array(
    'type'    => 'select',
    'choices' => $honey_shop_cat_posts,
    'label'   => __('Select Product Category', 'honey-shop'),
    'section' => 'honey_shop_products_section',
	));

	//Benefits Section
	$wp_customize->add_section('honey_shop_benefits', array(
		'title'       => __('Benefits Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_benefits_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_benefits_text',array(
		'description' => __('<p>1. More options for benefits section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for benefits section.</p>','honey-shop'),
		'section'=> 'honey_shop_benefits',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_benefits_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_benefits_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_benefits',
		'type'=> 'hidden'
	));

	//About Us Section
	$wp_customize->add_section('honey_shop_about_us', array(
		'title'       => __('About Us Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_about_us_text',array(
		'description' => __('<p>1. More options for about us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for about us section.</p>','honey-shop'),
		'section'=> 'honey_shop_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_about_us',
		'type'=> 'hidden'
	));

	//Offer Banner Section
	$wp_customize->add_section('honey_shop_offer_banner', array(
		'title'       => __('Offer Banner Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_offer_banner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_offer_banner_text',array(
		'description' => __('<p>1. More options for offer banner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for offer banner section.</p>','honey-shop'),
		'section'=> 'honey_shop_offer_banner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_offer_banner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_offer_banner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_offer_banner',
		'type'=> 'hidden'
	));

	//Our Project Section
	$wp_customize->add_section('honey_shop_our_product', array(
		'title'       => __('Our Project Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_our_product_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_our_product_text',array(
		'description' => __('<p>1. More options for our project section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our project section.</p>','honey-shop'),
		'section'=> 'honey_shop_our_product',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_our_product_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_our_product_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_our_product',
		'type'=> 'hidden'
	));

	//Flavors Section
	$wp_customize->add_section('honey_shop_flavors', array(
		'title'       => __('Flavors Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_flavors_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_flavors_text',array(
		'description' => __('<p>1. More options for flavors section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for flavors section.</p>','honey-shop'),
		'section'=> 'honey_shop_flavors',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_flavors_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_flavors_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_flavors',
		'type'=> 'hidden'
	));

	//Makers Section
	$wp_customize->add_section('honey_shop_makers', array(
		'title'       => __('Makers Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_makers_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_makers_text',array(
		'description' => __('<p>1. More options for makers section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for makers section.</p>','honey-shop'),
		'section'=> 'honey_shop_makers',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_makers_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_makers_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_makers',
		'type'=> 'hidden'
	));

	//Banner Section
	$wp_customize->add_section('honey_shop_banner', array(
		'title'       => __('Banner Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_banner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_banner_text',array(
		'description' => __('<p>1. More options for banner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for banner section.</p>','honey-shop'),
		'section'=> 'honey_shop_banner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_banner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_banner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_banner',
		'type'=> 'hidden'
	));

	//Testimonial Section
	$wp_customize->add_section('honey_shop_testimonial', array(
		'title'       => __('Testimonial Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_testimonial_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_testimonial_text',array(
		'description' => __('<p>1. More options for testimonial section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for testimonial section.</p>','honey-shop'),
		'section'=> 'honey_shop_testimonial',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_testimonial_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_testimonial_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_testimonial',
		'type'=> 'hidden'
	));

	//Contact Us Section
	$wp_customize->add_section('honey_shop_contact_us', array(
		'title'       => __('Contact Us Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_contact_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_contact_us_text',array(
		'description' => __('<p>1. More options for contact us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for contact us section.</p>','honey-shop'),
		'section'=> 'honey_shop_contact_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_contact_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_contact_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_contact_us',
		'type'=> 'hidden'
	));

	//Blog News Section
	$wp_customize->add_section('honey_shop_blog_news', array(
		'title'       => __('Blog News Section', 'honey-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','honey-shop'),
		'priority'    => null,
		'panel'       => 'honey_shop_panel_id',
	));

	$wp_customize->add_setting('honey_shop_blog_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_blog_news_text',array(
		'description' => __('<p>1. More options for blog news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for blog news section.</p>','honey-shop'),
		'section'=> 'honey_shop_blog_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('honey_shop_blog_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_blog_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href=".esc_url(HONEY_SHOP_BUY_NOW).">More Info</a>",
		'section'=> 'honey_shop_blog_news',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('honey_shop_footer',array(
		'title'	=> esc_html__('Footer Settings','honey-shop'),
		'panel' => 'honey_shop_panel_id',
		'description' => __('For more options of Footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/honey-wordpress-theme">GET PRO</a>','honey-shop'),
	));

	$wp_customize->add_setting( 'honey_shop_footer_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_footer_hide_show',array(
	    'label' => esc_html__( 'Show / Hide Footer','honey-shop' ),
	    'section' => 'honey_shop_footer'
	)));

 	// font size
	$wp_customize->add_setting('honey_shop_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','honey-shop'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'honey_shop_footer',
	));

	$wp_customize->add_setting('honey_shop_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','honey-shop'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'honey_shop_footer',
	));

	// text trasform
	$wp_customize->add_setting('honey_shop_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','honey-shop'),
		'choices' => array(
			'Uppercase' => __('Uppercase','honey-shop'),
			'Capitalize' => __('Capitalize','honey-shop'),
			'Lowercase' => __('Lowercase','honey-shop'),
		),
		'section'=> 'honey_shop_footer',
	));

	$wp_customize->add_setting('honey_shop_footer_heading_weight',array(
    'default' => '500',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_footer_heading_weight',array(
    'type' => 'select',
    'label' => __('Heading Font Weight','honey-shop'),
    'section' => 'honey_shop_footer',
    'choices' => array(
    	'100' => __('100','honey-shop'),
        '200' => __('200','honey-shop'),
        '300' => __('300','honey-shop'),
        '400' => __('400','honey-shop'),
        '500' => __('500','honey-shop'),
        '600' => __('600','honey-shop'),
        '700' => __('700','honey-shop'),
        '800' => __('800','honey-shop'),
        '900' => __('900','honey-shop'),
    ),
	) );

	$wp_customize->add_setting('honey_shop_footer_template',array(
		'default'	=> esc_html('honey_shop-footer-one'),
		'sanitize_callback'	=> 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_footer_template',array(
		'label'	=> esc_html__('Footer style','honey-shop'),
		'section'	=> 'honey_shop_footer',
		'setting'	=> 'honey_shop_footer_template',
		'type' => 'select',
		'choices' => array(
			'honey_shop-footer-one' => esc_html__('Style 1', 'honey-shop'),
			'honey_shop-footer-two' => esc_html__('Style 2', 'honey-shop'),
			'honey_shop-footer-three' => esc_html__('Style 3', 'honey-shop'),
			'honey_shop-footer-four' => esc_html__('Style 4', 'honey-shop'),
			'honey_shop-footer-five' => esc_html__('Style 5', 'honey-shop'),
		)
	));

	$wp_customize->add_setting('honey_shop_footer_background_color', array(
		'default'           => '#033D50',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_footer_background_color', array(
		'label'    => __('Footer Background Color', 'honey-shop'),
		'section'  => 'honey_shop_footer',
	)));

	$wp_customize->add_setting('honey_shop_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'honey_shop_footer_background_image',array(
        'label' => __('Footer Background Image','honey-shop'),
        'section' => 'honey_shop_footer'
	)));

	$wp_customize->add_setting('honey_shop_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','honey-shop'),
		'section' => 'honey_shop_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'honey-shop' ),
			'center top'   => esc_html__( 'Top', 'honey-shop' ),
			'right top'   => esc_html__( 'Top Right', 'honey-shop' ),
			'left center'   => esc_html__( 'Left', 'honey-shop' ),
			'center center'   => esc_html__( 'Center', 'honey-shop' ),
			'right center'   => esc_html__( 'Right', 'honey-shop' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'honey-shop' ),
			'center bottom'   => esc_html__( 'Bottom', 'honey-shop' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'honey-shop' ),
		),
	));

  // Footer
  $wp_customize->add_setting('honey_shop_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
  ));
  $wp_customize->add_control('honey_shop_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','honey-shop'),
    'choices' => array(
      'fixed' => __('fixed','honey-shop'),
      'scroll' => __('scroll','honey-shop'),
    ),
    'section'=> 'honey_shop_footer',
  ));

  // footer padding
  $wp_customize->add_setting('honey_shop_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('honey_shop_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','honey-shop'),
    'description' => __('Enter a value in pixels. Example:20px','honey-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
    'section'=> 'honey_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('honey_shop_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
  ));
  $wp_customize->add_control('honey_shop_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','honey-shop'),
    'section' => 'honey_shop_footer',
    'choices' => array(
      'Left' => __('Left','honey-shop'),
      'Center' => __('Center','honey-shop'),
      'Right' => __('Right','honey-shop')
    ),
  ) );

  $wp_customize->add_setting('honey_shop_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
  ));
  $wp_customize->add_control('honey_shop_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','honey-shop'),
    'section' => 'honey_shop_footer',
    'choices' => array(
      'Left' => __('Left','honey-shop'),
      'Center' => __('Center','honey-shop'),
      'Right' => __('Right','honey-shop')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('honey_shop_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'honey_shop_Customize_partial_honey_shop_footer_text',
	));

	$wp_customize->add_setting('honey_shop_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_footer_text',array(
		'label'	=> esc_html__('Copyright Text','honey-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2025, .....', 'honey-shop' ),
      ),
		'section'=> 'honey_shop_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'honey_shop_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','honey-shop' ),
		'section' => 'honey_shop_footer'
	)));

	$wp_customize->add_setting('honey_shop_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'honey_shop_sanitize_choices'
		));
		$wp_customize->add_control(new Honey_Shop_Image_Radio_Control($wp_customize, 'honey_shop_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','honey-shop'),
	    'section' => 'honey_shop_footer',
	    'settings' => 'honey_shop_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('honey_shop_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'honey-shop'),
		'section'  => 'honey_shop_footer',
	)));

	$wp_customize->add_setting('honey_shop_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_copyright_font_size',array(
		'label' => __('Copyright Font Size','honey-shop'),
		'description' => __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'honey-shop' ),
	    ),
		'section'=> 'honey_shop_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'honey_shop_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','honey-shop' ),
  	'section' => 'honey_shop_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('honey_shop_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'honey_shop_Customize_partial_honey_shop_scroll_to_top_icon',
	));

  $wp_customize->add_setting('honey_shop_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Honey_Shop_Image_Radio_Control($wp_customize, 'honey_shop_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','honey-shop'),
    'section' => 'honey_shop_footer',
    'settings' => 'honey_shop_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

	$wp_customize->add_setting('honey_shop_scroll_top_icon',array(
		'default' => 'fas fa-long-arrow-alt-up',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser($wp_customize,'honey_shop_scroll_top_icon',array(
		'label' => __('Add Scroll to Top Icon','honey-shop'),
		'transport' => 'refresh',
		'section' => 'honey_shop_footer',
		'setting' => 'honey_shop_scroll_top_icon',
		'type'    => 'icon'
	)));

  $wp_customize->add_setting('honey_shop_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('honey_shop_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','honey-shop'),
    'description' => __('Enter a value in pixels. Example:20px','honey-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
    'section'=> 'honey_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('honey_shop_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('honey_shop_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','honey-shop'),
    'description' => __('Enter a value in pixels. Example:20px','honey-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
    'section'=> 'honey_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('honey_shop_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('honey_shop_scroll_to_top_width',array(
    'label' => __('Icon Width','honey-shop'),
    'description' => __('Enter a value in pixels Example:20px','honey-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
  ),
	  'section'=> 'honey_shop_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('honey_shop_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('honey_shop_scroll_to_top_height',array(
    'label' => __('Icon Height','honey-shop'),
    'description' => __('Enter a value in pixels. Example:20px','honey-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
    'section'=> 'honey_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'honey_shop_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'honey_shop_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'honey_shop_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','honey-shop' ),
    'section'     => 'honey_shop_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

  // footer social icon
	$wp_customize->add_setting( 'honey_shop_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Social Icon','honey-shop' ),
		'section' => 'honey_shop_footer'
  )));

  $wp_customize->add_setting('honey_shop_align_footer_social_icon',array(
        'default' => 'center',
        'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_align_footer_social_icon',array(
        'type' => 'select',
        'label' => __('Social Icon Alignment ','honey-shop'),
        'section' => 'honey_shop_footer',
        'choices' => array(
            'left' => __('Left','honey-shop'),
            'right' => __('Right','honey-shop'),
            'center' => __('Center','honey-shop'),
        ),
	) );

	$wp_customize->add_setting( 'honey_shop_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'honey_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new honey_shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_copyright_sticky',array(
      'label' => esc_html__( 'Show / Hide Sticky Copyright','honey-shop' ),
      'section' => 'honey_shop_footer'
    )));

   $wp_customize->add_setting('honey_shop_footer_social_icons_font_size',array(
       'default'=> 16,
       'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('honey_shop_footer_social_icons_font_size',array(
    'label' => __('Social Icon Font Size','honey-shop'),
    	'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'honey_shop_footer',
	 ));

 	//Blog Post
	$wp_customize->add_panel( 'honey_shop_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'honey-shop' ),
		'panel' => 'honey_shop_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'honey_shop_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'honey-shop' ),
		'panel' => 'honey_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('honey_shop_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'honey_shop_Customize_partial_honey_shop_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('honey_shop_blog_layout_option',array(
    'default' => 'Left',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
  ));
  $wp_customize->add_control(new Honey_Shop_Image_Radio_Control($wp_customize, 'honey_shop_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','honey-shop'),
    'section' => 'honey_shop_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('honey_shop_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','honey-shop'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','honey-shop'),
    'section' => 'honey_shop_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','honey-shop'),
        'Right Sidebar' => esc_html__('Right Sidebar','honey-shop'),
        'One Column' => esc_html__('One Column','honey-shop'),
        'Three Columns' => esc_html__('Three Columns','honey-shop'),
        'Four Columns' => esc_html__('Four Columns','honey-shop'),
        'Grid Layout' => esc_html__('Grid Layout','honey-shop')
    ),
	) );

	$wp_customize->add_setting('honey_shop_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_post_settings',
		'setting'	=> 'honey_shop_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'honey_shop_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','honey-shop' ),
    'section' => 'honey_shop_post_settings'
  )));

	$wp_customize->add_setting('honey_shop_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_post_settings',
		'setting'	=> 'honey_shop_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','honey-shop' ),
		'section' => 'honey_shop_post_settings'
  )));

  $wp_customize->add_setting('honey_shop_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_post_settings',
		'setting'	=> 'honey_shop_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','honey-shop' ),
		'section' => 'honey_shop_post_settings'
  )));

  $wp_customize->add_setting('honey_shop_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_post_settings',
		'setting'	=> 'honey_shop_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','honey-shop' ),
		'section' => 'honey_shop_post_settings'
  )));

  $wp_customize->add_setting( 'honey_shop_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','honey-shop' ),
		'section' => 'honey_shop_post_settings'
  )));

  $wp_customize->add_setting( 'honey_shop_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','honey-shop' ),
		'section'     => 'honey_shop_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'honey_shop_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','honey-shop' ),
		'section'     => 'honey_shop_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('honey_shop_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','honey-shop'),
		'section'	=> 'honey_shop_post_settings',
		'choices' => array(
		'default' => __('Default','honey-shop'),
		'custom' => __('Custom Image Size','honey-shop'),
      ),
	));

	$wp_customize->add_setting('honey_shop_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('honey_shop_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'honey-shop' ),),
		'section'=> 'honey_shop_post_settings',
		'type'=> 'text',
		'active_callback' => 'honey_shop_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('honey_shop_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'honey-shop' ),),
		'section'=> 'honey_shop_post_settings',
		'type'=> 'text',
		'active_callback' => 'honey_shop_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'honey_shop_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'honey_shop_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','honey-shop' ),
		'section'     => 'honey_shop_post_settings',
		'type'        => 'range',
		'settings'    => 'honey_shop_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('honey_shop_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','honey-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','honey-shop'),
		'section'=> 'honey_shop_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('honey_shop_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','honey-shop'),
    'section' => 'honey_shop_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','honey-shop'),
        'Excerpt' => esc_html__('Excerpt','honey-shop'),
        'No Content' => esc_html__('No Content','honey-shop')
        ),
	) );

  $wp_customize->add_setting('honey_shop_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','honey-shop'),
    'section' => 'honey_shop_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','honey-shop'),
        'Without Blocks' => __('Without Blocks','honey-shop')
        ),
	) );

	$wp_customize->add_setting( 'honey_shop_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','honey-shop' ),
		'section' => 'honey_shop_post_settings'
  )));

	$wp_customize->add_setting('honey_shop_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'honey_shop_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'honey_shop_sanitize_choices'
  ));
  $wp_customize->add_control( 'honey_shop_blog_pagination_type', array(
    'section' => 'honey_shop_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'honey-shop' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'honey-shop' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'honey-shop' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'honey_shop_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'honey-shop' ),
		'panel' => 'honey_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('honey_shop_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'honey_shop_Customize_partial_honey_shop_button_text',
	));

  $wp_customize->add_setting('honey_shop_button_text',array(
		'default'=> esc_html__('Read More','honey-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_text',array(
		'label'	=> esc_html__('Add Button Text','honey-shop'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('honey_shop_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_font_size',array(
		'label'	=> __('Button Font Size','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'honey-shop' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'honey_shop_button_settings',
	));


	$wp_customize->add_setting( 'honey_shop_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'honey_shop_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','honey-shop' ),
		'section'     => 'honey_shop_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('honey_shop_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
		'section'=> 'honey_shop_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'honey-shop' ),
    ),
		'section'=> 'honey_shop_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'honey-shop' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'honey_shop_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('honey_shop_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','honey-shop'),
		'choices' => array(
      'Uppercase' => __('Uppercase','honey-shop'),
      'Capitalize' => __('Capitalize','honey-shop'),
      'Lowercase' => __('Lowercase','honey-shop'),
    ),
		'section'=> 'honey_shop_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'honey_shop_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'honey-shop' ),
		'panel' => 'honey_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('honey_shop_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'honey_shop_Customize_partial_honey_shop_related_post_title',
	));

  $wp_customize->add_setting( 'honey_shop_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_post',array(
		'label' => esc_html__( 'Related Post','honey-shop' ),
		'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting('honey_shop_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','honey-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('honey_shop_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'honey_shop_sanitize_number_absint'
	));
	$wp_customize->add_control('honey_shop_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','honey-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'honey_shop_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','honey-shop' ),
		'section'     => 'honey_shop_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'honey_shop_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('honey_shop_related_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_related_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','honey-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','honey-shop'),
		'section'=> 'honey_shop_related_posts_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'honey_shop_related_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','honey-shop' ),
		'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting( 'honey_shop_related_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','honey-shop' ),
    'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting('honey_shop_related_postdate_icon',array(
    'default' => 'fas fa-calendar-alt',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_related_postdate_icon',array(
    'label' => __('Add Post Date Icon','honey-shop'),
    'transport' => 'refresh',
    'section' => 'honey_shop_related_posts_settings',
    'setting' => 'honey_shop_related_postdate_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'honey_shop_related_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','honey-shop' ),
		'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting('honey_shop_related_author_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_related_author_icon',array(
    'label' => __('Add Author Icon','honey-shop'),
    'transport' => 'refresh',
    'section' => 'honey_shop_related_posts_settings',
    'setting' => 'honey_shop_related_author_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'honey_shop_related_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','honey-shop' ),
		'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting('honey_shop_related_comments_icon',array(
    'default' => 'fa fa-comments',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_related_comments_icon',array(
    'label' => __('Add Comments Icon','honey-shop'),
    'transport' => 'refresh',
    'section' => 'honey_shop_related_posts_settings',
    'setting' => 'honey_shop_related_comments_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting( 'honey_shop_related_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','honey-shop' ),
		'section' => 'honey_shop_related_posts_settings'
  )));

  $wp_customize->add_setting('honey_shop_related_time_icon',array(
    'default' => 'fas fa-clock',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_related_time_icon',array(
    'label' => __('Add Time Icon','honey-shop'),
    'transport' => 'refresh',
    'section' => 'honey_shop_related_posts_settings',
    'setting' => 'honey_shop_related_time_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting( 'honey_shop_related_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_related_image_box_shadow', array(
		'label'       => esc_html__( 'Related post Image Box Shadow','honey-shop' ),
		'section'     => 'honey_shop_related_posts_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  $wp_customize->add_setting('honey_shop_related_button_text',array(
		'default'=> esc_html__('Read More','honey-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','honey-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_related_posts_settings',
		'type'=> 'text'
	));

	// Single Posts Settings
	$wp_customize->add_section( 'honey_shop_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'honey-shop' ),
		'panel' => 'honey_shop_blog_post_parent_panel',
	));

	$wp_customize->add_setting('honey_shop_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_single_blog_settings',
		'setting'	=> 'honey_shop_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','honey-shop' ),
		'section' => 'honey_shop_single_blog_settings'
	)));

	$wp_customize->add_setting('honey_shop_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_single_author_icon',array(
		'label'	=> __('Add Author Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_single_blog_settings',
		'setting'	=> 'honey_shop_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','honey-shop' ),
    'section' => 'honey_shop_single_blog_settings'
	)));

 	$wp_customize->add_setting('honey_shop_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_single_blog_settings',
		'setting'	=> 'honey_shop_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'honey_shop_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','honey-shop' ),
    'section' => 'honey_shop_single_blog_settings'
	)));

	$wp_customize->add_setting('honey_shop_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
  $wp_customize,'honey_shop_single_time_icon',array(
		'label'	=> __('Add Time Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_single_blog_settings',
		'setting'	=> 'honey_shop_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'honey_shop_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','honey-shop' ),
    'section' => 'honey_shop_single_blog_settings'
	)));

	$wp_customize->add_setting( 'honey_shop_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','honey-shop' ),
		'section' => 'honey_shop_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'honey_shop_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','honey-shop' ),
		'section' => 'honey_shop_single_blog_settings'
  	)));

  	$wp_customize->add_setting( 'honey_shop_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','honey-shop' ),
		'section'     => 'honey_shop_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('honey_shop_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','honey-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','honey-shop'),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'honey_shop_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','honey-shop' ),
	  'section' => 'honey_shop_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('honey_shop_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'honey-shop' ),
      ),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'honey-shop' ),
    	),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','honey-shop'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','honey-shop'),
		'description'	=> __('Enter a value in %. Example:50%','honey-shop'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'honey_shop_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'honey-shop' ),
		'panel' => 'honey_shop_blog_post_parent_panel',
	));

	$wp_customize->add_setting('honey_shop_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_grid_layout_settings',
		'setting'	=> 'honey_shop_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'honey_shop_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','honey-shop' ),
    'section' => 'honey_shop_grid_layout_settings'
  )));

	$wp_customize->add_setting('honey_shop_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_grid_author_icon',array(
		'label'	=> __('Add Author Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_grid_layout_settings',
		'setting'	=> 'honey_shop_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','honey-shop' ),
		'section' => 'honey_shop_grid_layout_settings'
  )));

  $wp_customize->add_setting('honey_shop_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_grid_layout_settings',
		'setting'	=> 'honey_shop_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'honey_shop_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','honey-shop' ),
		'section' => 'honey_shop_grid_layout_settings'
  )));

  $wp_customize->add_setting('honey_shop_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_grid_time_icon',array(
		'label'	=> __('Add Time Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_grid_layout_settings',
		'setting'	=> 'honey_shop_grid_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'honey_shop_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','honey-shop' ),
		'section' => 'honey_shop_grid_layout_settings'
  	)));

  	$wp_customize->add_setting( 'honey_shop_grid_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
  	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_grid_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','honey-shop' ),
		'section' => 'honey_shop_grid_layout_settings'
  	)));

 	$wp_customize->add_setting('honey_shop_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','honey-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','honey-shop'),
		'section'=> 'honey_shop_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('honey_shop_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','honey-shop'),
    'section' => 'honey_shop_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','honey-shop'),
      'Without Blocks' => __('Without Blocks','honey-shop')
      ),
	) );

	$wp_customize->add_setting('honey_shop_grid_button_text',array(
		'default'=> esc_html__('Read More','honey-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','honey-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','honey-shop'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('honey_shop_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','honey-shop'),
    'section' => 'honey_shop_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','honey-shop'),
      'Excerpt' => esc_html__('Excerpt','honey-shop'),
      'No Content' => esc_html__('No Content','honey-shop')
    ),
	) );

  $wp_customize->add_setting( 'honey_shop_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','honey-shop' ),
		'section'     => 'honey_shop_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'honey_shop_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','honey-shop' ),
		'section'     => 'honey_shop_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'honey_shop_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'honey-shop' ),
		'panel' => 'honey_shop_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'honey_shop_left_right', array(
  	'title' => esc_html__('General Settings', 'honey-shop'),
		'panel' => 'honey_shop_other_parent_panel'
	) );

	$wp_customize->add_setting('honey_shop_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Honey_Shop_Image_Radio_Control($wp_customize, 'honey_shop_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','honey-shop'),
    'description' => esc_html__('Here you can change the width layout of Website.','honey-shop'),
    'section' => 'honey_shop_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('honey_shop_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','honey-shop'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','honey-shop'),
    'section' => 'honey_shop_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','honey-shop'),
        'Right_Sidebar' => esc_html__('Right Sidebar','honey-shop'),
        'One_Column' => esc_html__('One Column','honey-shop')
    ),
	) );

	$wp_customize->add_setting( 'honey_shop_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  	) );
  	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','honey-shop' ),
		'section' => 'honey_shop_left_right'
  	)));

	//Wow Animation
	$wp_customize->add_setting( 'honey_shop_animation',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_animation',array(
		'label' => esc_html__( 'Show / Hide Animations','honey-shop' ),
		'description' => __('Here you can disable overall site animation effect','honey-shop'),
		'section' => 'honey_shop_left_right'
	)));
	
    // Pre-Loader
		$wp_customize->add_setting( 'honey_shop_loader_enable',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_loader_enable',array(
		'label' => esc_html__( 'Pre-Loader','honey-shop' ),
		'section' => 'honey_shop_left_right'
	)));

	$wp_customize->add_setting('honey_shop_preloader_bg_color', array(
		'default'           => '#033D50',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'honey-shop'),
		'section'  => 'honey_shop_left_right',
	)));

	$wp_customize->add_setting('honey_shop_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'honey-shop'),
		'section'  => 'honey_shop_left_right',
	)));

	$wp_customize->add_setting('honey_shop_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'honey_shop_preloader_bg_img',array(
    'label' => __('Preloader Background Image','honey-shop'),
    'section' => 'honey_shop_left_right'
	)));

    //404 Page Setting
	$wp_customize->add_section('honey_shop_404_page',array(
		'title'	=> __('404 Page Settings','honey-shop'),
		'panel' => 'honey_shop_other_parent_panel',
	));

	$wp_customize->add_setting('honey_shop_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_404_page_title',array(
		'label'	=> __('Add Title','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_404_page_content',array(
		'label'	=> __('Add Text','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_404_page_button_text',array(
		'label'	=> __('Add Button Text','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('honey_shop_no_results_page',array(
		'title'	=> __('No Results Page Settings','honey-shop'),
		'panel' => 'honey_shop_other_parent_panel',
	));

	$wp_customize->add_setting('honey_shop_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_no_results_page_title',array(
		'label'	=> __('Add Title','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('honey_shop_no_results_page_content',array(
		'label'	=> __('Add Text','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('honey_shop_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','honey-shop'),
		'panel' => 'honey_shop_other_parent_panel',
	));

	$wp_customize->add_setting('honey_shop_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_social_icon_padding',array(
		'label'	=> __('Icon Padding','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_social_icon_width',array(
		'label'	=> __('Icon Width','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_social_icon_height',array(
		'label'	=> __('Icon Height','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('honey_shop_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','honey-shop'),
		'panel' => 'honey_shop_other_parent_panel',
	));

	$wp_customize->add_setting( 'honey_shop_stickyheader_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'honey_shop_switch_sanitization'
    ));  
    $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_stickyheader_hide_show',array(
      'label' => esc_html__( 'Sticky Header','honey-shop' ),
      'section' => 'honey_shop_responsive_media'
    )));

    $wp_customize->add_setting( 'honey_shop_resp_slider_hide_show',array(
	  	'default' => 1,
	   	'transport' => 'refresh',
	    'sanitize_callback' => 'honey_shop_switch_sanitization'
		));
		$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_resp_slider_hide_show',array(
		  	'label' => esc_html__( 'Show / Hide Banner','honey-shop' ),
		  	'section' => 'honey_shop_responsive_media'
		)));

  $wp_customize->add_setting( 'honey_shop_responsive_preloader_hide',array(
      'default' => false,
      'transport' => 'refresh',
      'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_responsive_preloader_hide',array(
      'label' => esc_html__( 'Show / Hide Preloader','honey-shop' ),
      'section' => 'honey_shop_responsive_media'
  )));


  $wp_customize->add_setting( 'honey_shop_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_sidebar_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Sidebar','honey-shop' ),
    	'section' => 'honey_shop_responsive_media'
  )));

  $wp_customize->add_setting( 'honey_shop_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','honey-shop' ),
    	'section' => 'honey_shop_responsive_media'
	)));

  $wp_customize->add_setting('honey_shop_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_responsive_media',
		'setting'	=> 'honey_shop_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('honey_shop_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Honey_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'honey_shop_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','honey-shop'),
		'transport' => 'refresh',
		'section'	=> 'honey_shop_responsive_media',
		'setting'	=> 'honey_shop_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('honey_shop_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#033D50',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honey_shop_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'honey-shop'),
		'section'  => 'honey_shop_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('honey_shop_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'honey-shop'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'honey_shop_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'honey_shop_customize_partial_honey_shop_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'honey_shop_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','honey-shop' ),
		'section' => 'honey_shop_woocommerce_section'
  )));

   $wp_customize->add_setting('honey_shop_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','honey-shop'),
    'section' => 'honey_shop_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','honey-shop'),
        'Right Sidebar' => __('Right Sidebar','honey-shop'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'honey_shop_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'honey_shop_customize_partial_honey_shop_woocommerce_single_product_page_sidebar', ) );

  //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'honey_shop_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'honey_shop_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','honey-shop' ),
		'section' => 'honey_shop_woocommerce_section'
  )));

   $wp_customize->add_setting('honey_shop_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','honey-shop'),
    'section' => 'honey_shop_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','honey-shop'),
        'Right Sidebar' => __('Right Sidebar','honey-shop'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('honey_shop_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'honey_shop_sanitize_float'
	));
	$wp_customize->add_control('honey_shop_products_per_page',array(
		'label'	=> __('Products Per Page','honey-shop'),
		'description' => __('Display on shop page','honey-shop'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('honey_shop_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_products_per_row',array(
		'label'	=> __('Products Per Row','honey-shop'),
		'description' => __('Display on shop page','honey-shop'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('honey_shop_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'honey_shop_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','honey-shop' ),
		'section'     => 'honey_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'honey_shop_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','honey-shop' ),
		'section'     => 'honey_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'honey_shop_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','honey-shop' ),
		'section'     => 'honey_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('honey_shop_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('honey_shop_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'honey_shop_sanitize_choices'
	));
	$wp_customize->add_control('honey_shop_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','honey-shop'),
    'section' => 'honey_shop_woocommerce_section',
    'choices' => array(
        'left' => __('Left','honey-shop'),
        'right' => __('Right','honey-shop'),
    ),
	) );

	$wp_customize->add_setting('honey_shop_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('honey_shop_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('honey_shop_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','honey-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','honey-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'honey-shop' ),
        ),
		'section'=> 'honey_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'honey_shop_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'honey_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'honey_shop_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','honey-shop' ),
		'section'     => 'honey_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'honey_shop_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'honey_shop_switch_sanitization'
  ) );
  $wp_customize->add_control( new Honey_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'honey_shop_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','honey-shop' ),
    'section' => 'honey_shop_woocommerce_section'
  )));

}

add_action( 'customize_register', 'honey_shop_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Honey_Shop_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Honey_Shop_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Honey_Shop_Customize_Section_Pro( $manager,'honey_shop_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'HONEY SHOP PRO', 'honey-shop' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'honey-shop' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/honey-wordpress-theme'),
		)));

		$manager->add_section(new Honey_Shop_Customize_Section_Pro($manager,'honey_shop_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'honey-shop' ),
			'pro_text' => esc_html__( 'DOCS', 'honey-shop' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-vw-honey-shop/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'honey-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'honey-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Honey_Shop_Customize::get_instance();