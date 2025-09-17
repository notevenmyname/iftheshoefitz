<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $honey_shop_demo_import_completed = get_option('honey_shop_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($honey_shop_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'honey-shop') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'honey-shop') . '</a></span>';
        }

		// POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

        // Check if woocommerce is installed and activated
        if (!is_plugin_active('woocommerce/woocommerce.php')) {
          // Install the plugin if it doesn't exist
          $honey_shop_plugin_slug = 'woocommerce';
          $honey_shop_plugin_file = 'woocommerce/woocommerce.php';

          // Check if plugin is installed
          $honey_shop_installed_plugins = get_plugins();
          if (!isset($honey_shop_installed_plugins[$honey_shop_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $honey_shop_upgrader = new Plugin_Upgrader();
              $honey_shop_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($honey_shop_plugin_file);
        }

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('yith-woocommerce-wishlist/init.php')) {
          // Install the plugin if it doesn't exist
          $honey_shop_plugin_slug = 'yith-woocommerce-wishlist';
          $honey_shop_plugin_file = 'yith-woocommerce-wishlist/init.php';

          // Check if plugin is installed
          $honey_shop_installed_plugins = get_plugins();
          if (!isset($honey_shop_installed_plugins[$honey_shop_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $honey_shop_upgrader = new Plugin_Upgrader();
              $honey_shop_upgrader->install('https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($honey_shop_plugin_file);
        }

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
          // Install the plugin if it doesn't exist
          $honey_shop_plugin_slug = 'ibtana-visual-editor';
          $honey_shop_plugin_file = 'ibtana-visual-editor/plugin.php';

          // Check if plugin is installed
          $honey_shop_installed_plugins = get_plugins();
          if (!isset($honey_shop_installed_plugins[$honey_shop_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $honey_shop_upgrader = new Plugin_Upgrader();
              $honey_shop_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($honey_shop_plugin_file);
        }

        // ------- Create Nav Menu --------
        $honey_shop_menuname = 'Main Menus';
        $honey_shop_bpmenulocation = 'primary';
        $honey_shop_menu_exists = wp_get_nav_menu_object($honey_shop_menuname);

        if (!$honey_shop_menu_exists) {
            $honey_shop_menu_id = wp_create_nav_menu($honey_shop_menuname);

            // Create Home Page
            $honey_shop_home_title = 'Home';
            $honey_shop_home = array(
                'post_type' => 'page',
                'post_title' => $honey_shop_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $honey_shop_home_id = wp_insert_post($honey_shop_home);
            // Assign Home Page Template
            add_post_meta($honey_shop_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $honey_shop_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($honey_shop_menu_id, 0, array(
                'menu-item-title' => __('Home', 'honey-shop'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $honey_shop_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $honey_shop_pages_title = 'Pages';
            $honey_shop_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $honey_shop_pages = array(
                'post_type' => 'page',
                'post_title' => $honey_shop_pages_title,
                'post_content' => $honey_shop_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $honey_shop_pages_id = wp_insert_post($honey_shop_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($honey_shop_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'honey-shop'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $honey_shop_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $honey_shop_about_title = 'About Us';
            $honey_shop_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $honey_shop_about = array(
                'post_type' => 'page',
                'post_title' => $honey_shop_about_title,
                'post_content' => $honey_shop_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $honey_shop_about_id = wp_insert_post($honey_shop_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($honey_shop_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'honey-shop'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $honey_shop_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Set the menu location if it's not already set
            if (!has_nav_menu($honey_shop_bpmenulocation)) {
                $honey_shop_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($honey_shop_locations)) {
                    $honey_shop_locations = array();
                }
                $honey_shop_locations[$honey_shop_bpmenulocation] = $honey_shop_menu_id;
                set_theme_mod('nav_menu_locations', $honey_shop_locations);
            }
        }

        // Set the demo import completion flag
		update_option('honey_shop_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'honey-shop') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'honey-shop') . '</a></span>';
        //end 

        // Topbar
        set_theme_mod( 'honey_shop_topbar_text', 'Limited Time Offer: Free Shipping on Orders Over $50!' );
        
        // Slider Settings
        set_theme_mod( 'honey_shop_slide_number', '3' );
        for($honey_shop_i=1; $honey_shop_i<=3; $honey_shop_i++) {   
            set_theme_mod( 'honey_shop_slider_small_title'.$honey_shop_i, 'Natures Nectar' );
            set_theme_mod( 'honey_shop_slider_title'.$honey_shop_i, 'Pure, Organic Honey – From Nature to Your Table' );
            set_theme_mod( 'honey_shop_slider_button_label'.$honey_shop_i, 'Shop Now' );
            set_theme_mod( 'honey_shop_slider_button_url'.$honey_shop_i, '#' );
            set_theme_mod( 'honey_shop_slider_bottom_img'.$honey_shop_i, get_template_directory_uri().'/assets/images/slider-bottom.png' );
            set_theme_mod( 'honey_shop_slider_bottom_content'.$honey_shop_i, 'Learn that how we extract honey from honeycomb' );
            set_theme_mod( 'honey_shop_bottom_icon_url'.$honey_shop_i, '#' );
            set_theme_mod( 'honey_shop_slider_bottom_icon'.$honey_shop_i, 'fa-solid fa-arrow-right' );
            set_theme_mod( 'honey_shop_slider_right_img'.$honey_shop_i, get_template_directory_uri().'/assets/images/Right-img'.$honey_shop_i.'.png' );

        }

        // Product Section
        set_theme_mod( 'honey_shop_products_section_text', 'Shop' );
        set_theme_mod( 'honey_shop_products_section_title', 'Our Bestseller' );
        set_theme_mod('honey_shop_best_product_category', 'Category1');

        // Define product category names, product titles, and tags
        $honey_shop_category_names = array('Category1', 'Category2', 'Category3', 'Category4', 'Category5');
        $honey_shop_title_array = array(
            array("Honey Hush Face Cream", "Honey Hush Hand Wash", "Honey Hush Night Cream", "Honey Hush Face Serum"),
            array("Honey Hush Face Cream", "Honey Hush Hand Wash", "Honey Hush Night Cream", "Honey Hush Face Serum"),
            array("Honey Hush Face Cream", "Honey Hush Hand Wash", "Honey Hush Night Cream", "Honey Hush Face Serum"),
            array("Honey Hush Face Cream", "Honey Hush Hand Wash", "Honey Hush Night Cream", "Honey Hush Face Serum"),
            array("Honey Hush Face Cream", "Honey Hush Hand Wash", "Honey Hush Night Cream", "Honey Hush Face Serum")
        );

        foreach ($honey_shop_category_names as $honey_shop_index => $honey_shop_category_name) {
            // Create or retrieve the product category term ID
            $honey_shop_term = term_exists($honey_shop_category_name, 'product_cat');
            if ($honey_shop_term === 0 || $honey_shop_term === null) {
                // If the term does not exist, create it
                $honey_shop_term = wp_insert_term($honey_shop_category_name, 'product_cat');
            }

            if (is_wp_error($honey_shop_term)) {
                error_log('Error creating category: ' . $honey_shop_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            // Loop to create 4 products for each category
            for ($honey_shop_i = 0; $honey_shop_i < 4; $honey_shop_i++) {
                // Create product content
                $honey_shop_title = $honey_shop_title_array[$honey_shop_index][$honey_shop_i];
                $honey_shop_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                // Create product post object
                $honey_shop_my_post = array(
                    'post_title'    => wp_strip_all_tags($honey_shop_title),
                    'post_content'  => $honey_shop_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'product', // Post type set to 'product'
                );

                // Insert the product into the database
                $honey_shop_post_id = wp_insert_post($honey_shop_my_post);

                if (is_wp_error($honey_shop_post_id)) {
                    error_log('Error creating product: ' . $honey_shop_post_id->get_error_message());
                    continue; // Skip to the next product if creation fails
                }

                // Assign the category to the product
                wp_set_object_terms($honey_shop_post_id, (int)$honey_shop_term['term_id'], 'product_cat');

                // Set product as simple product and assign prices
                update_post_meta($honey_shop_post_id, '_price', '31'); // Set the active price (sale price if applicable)
                update_post_meta($honey_shop_post_id, '_regular_price', '50'); // Set the regular price
                update_post_meta($honey_shop_post_id, '_sale_price', '31'); // Set the sale price
                update_post_meta($honey_shop_post_id, '_stock_status', 'instock'); // Set stock status to 'in stock'
                update_post_meta($honey_shop_post_id, '_manage_stock', 'no'); // Not managing stock
                update_post_meta($honey_shop_post_id, '_product_type', 'simple'); // Set product type to 'simple'


                // Handle the featured image using media_sideload_image
                $honey_shop_image_url = get_template_directory_uri() . '/assets/images/Product' . ($honey_shop_i + 1) . '.png';
                $honey_shop_image_id = media_sideload_image($honey_shop_image_url, $honey_shop_post_id, null, 'id');

                if (is_wp_error($honey_shop_image_id)) {
                    error_log('Error downloading image: ' . $honey_shop_image_id->get_error_message());
                    continue; // Skip to the next product if image download fails
                }

                // Assign featured image to product
                set_post_thumbnail($honey_shop_post_id, $honey_shop_image_id);
            }
        }

        //Copyright Text
        set_theme_mod( 'honey_shop_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Honey Shop', 'honey-shop'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=honey_shop_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('honey_shop_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'honey-shop'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
