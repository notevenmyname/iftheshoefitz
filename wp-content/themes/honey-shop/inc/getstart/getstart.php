<?php
//about theme info
add_action( 'admin_menu', 'honey_shop_gettingstarted' );
function honey_shop_gettingstarted() {
	add_theme_page( esc_html__('About Honey Shop', 'honey-shop'), esc_html__('Theme Demo Import', 'honey-shop'), 'edit_theme_options', 'honey_shop_guide', 'honey_shop_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function honey_shop_admin_theme_style() {
	wp_enqueue_style('honey-shop-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('honey-shop-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'honey_shop_admin_theme_style');

//guidline for about theme
function honey_shop_mostrar_guide() { 
	//custom function about theme customizer
	$honey_shop_return = add_query_arg( array()) ;
	$honey_shop_theme = wp_get_theme( 'honey-shop' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Honey Shop ', 'honey-shop' ); ?> <span class="version"><?php esc_html_e( 'Version', 'honey-shop' ); ?>: <?php echo esc_html($honey_shop_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','honey-shop'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','honey-shop'); ?></h2>
						<h4><?php esc_html_e('HONEY SHOP THEME','honey-shop'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','honey-shop'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','honey-shop'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','honey-shop'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','honey-shop'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( HONEY_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'honey-shop' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>

    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="honey_shop_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'honey-shop' ); ?></button>
			<button class="tablinks" onclick="honey_shop_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'honey-shop' ); ?></button>
			<button class="tablinks" onclick="honey_shop_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'honey-shop' ); ?></button>
  			<button class="tablinks" onclick="honey_shop_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'honey-shop' ); ?></button>
  			<button class="tablinks" onclick="honey_shop_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'honey-shop' ); ?></button>
		</div>

		<?php 
			$honey_shop_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$honey_shop_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'honey-shop' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Honey_Shop_Plugin_Activation_Settings::get_instance();
				$honey_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="honey-shop-recommended-plugins">
				    <div class="honey-shop-action-list">
				        <?php if ($honey_shop_actions): foreach ($honey_shop_actions as $key => $honey_shop_actionValue): ?>
				                <div class="honey-shop-action" id="<?php echo esc_attr($honey_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($honey_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($honey_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($honey_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','honey-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($honey_shop_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'honey-shop' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Honey Shop WordPress Theme is a beautifully designed website template crafted specifically for honey businesses and bee farms. Ideal for showcasing honey for sale, this theme is perfect for vendors of pure honey, raw honey, organic honey, and natural honey. Whether you’re selling wildflower honey, clover honey, manuka honey, or acacia honey, this theme provides an elegant platform to highlight your unique products. Its modern design features high-resolution images of honey jars, honeycombs, and honey sticks, combined with customizable layouts that capture the warmth and richness of artisanal honey. Designed for honey stores, beekeeping operations, and gourmet honey businesses, it helps promote sustainable honey, ethical honey, and locally produced farm fresh honey. With integrated features like honey subscription forms, online honey tasting event details, and secure e-commerce capabilities, the theme streamlines the process of buying honey online. Its responsive design ensures a seamless shopping experience on desktops, tablets, and mobile devices, while advanced customization options allow you to showcase premium honey gift sets, honey-infused cosmetics, and honey skincare products. Whether you are a local beekeeper or a large honey business, this theme is built to boost customer engagement, enhance branding, and drive sales, making it the ultimate solution for any honey shop aiming to stand out in a competitive market.','honey-shop'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'honey-shop' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'honey-shop' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HONEY_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'honey-shop' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'honey-shop'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'honey-shop'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'honey-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'honey-shop'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'honey-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HONEY_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'honey-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'honey-shop'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'honey-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( HONEY_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'honey-shop'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'honey-shop' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','honey-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_top_bar') ); ?>" target="_blank"><?php esc_html_e('Topbar','honey-shop'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_slider_section') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','honey-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_products_section') ); ?>" target="_blank"><?php esc_html_e('Products Section','honey-shop'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','honey-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','honey-shop'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','honey-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=honey_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','honey-shop'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','honey-shop'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','honey-shop'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','honey-shop'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','honey-shop'); ?></span><?php esc_html_e(' Go to ','honey-shop'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','honey-shop'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','honey-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','honey-shop'); ?></span><?php esc_html_e(' Go to ','honey-shop'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','honey-shop'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','honey-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','honey-shop'); ?> <a class="doc-links" href="<?php echo esc_url( HONEY_SHOP_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','honey-shop'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'honey-shop' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Honey WordPress Theme is a premium, beautifully crafted template designed for beekeepers, honey businesses, and organic honey stores. Whether youre selling pure honey, raw honey, or infused honey, this theme provides an elegant and modern design to highlight your products. It is ideal for showcasing wildflower honey, clover honey, manuka honey, and artisanal honey gift sets while offering a seamless shopping experience for customers. With a clean, retina-ready layout, the theme ensures that your honey business stands out with high-resolution images, interactive galleries, and customizable banners. It integrates secure payment gateways, subscription options, and promotional sections to help boost sales and brand visibility. Designed to support honey skincare, gourmet honey, and honey-infused cosmetics, this theme allows businesses to expand their offerings beyond traditional honey jars. Whether you operate a local honey farm, a bee-friendly honey store, or a wholesale honey business, the Honey WordPress Theme is your ultimate solution for a professional online presence.','honey-shop'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( HONEY_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'honey-shop'); ?></a>
					<a href="<?php echo esc_url( HONEY_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'honey-shop'); ?></a>
					<a href="<?php echo esc_url( HONEY_SHOP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'honey-shop'); ?></a>
					<a href="<?php echo esc_url( HONEY_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'honey-shop'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'honey-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'honey-shop'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'honey-shop'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'honey-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'honey-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'honey-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'honey-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'honey-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'honey-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'honey-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'honey-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'honey-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'honey-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Honey Shop ', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'honey-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( HONEY_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'honey-shop'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'honey-shop' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','honey-shop'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'honey-shop' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'honey-shop'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'honey-shop'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'honey-shop'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'honey-shop'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'honey-shop'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'honey-shop'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( HONEY_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'honey-shop'); ?></a>
					<a href="<?php echo esc_url( HONEY_SHOP_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'honey-shop'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>