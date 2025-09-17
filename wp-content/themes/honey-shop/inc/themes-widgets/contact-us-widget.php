<?php
/**
 * Custom Contact us Widget
 */

class Honey_Shop_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Honey_Shop_Contact_Widget', 
			__('VW Contact us', 'honey-shop'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'honey-shop' ), ) 
		);
	}
	
	public function widget( $honey_shop_args, $honey_shop_instance ) {
		?>
		<aside class="widget">
			<?php
			$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
			$honey_shop_phone = isset( $honey_shop_instance['phone'] ) ? $honey_shop_instance['phone'] : '';
			$honey_shop_email = isset( $honey_shop_instance['email'] ) ? $honey_shop_instance['email'] : '';
			$honey_shop_address = isset( $honey_shop_instance['address'] ) ? $honey_shop_instance['address'] : '';
			$honey_shop_timing = isset( $honey_shop_instance['timing'] ) ? $honey_shop_instance['timing'] : '';
			$honey_shop_longitude = isset( $honey_shop_instance['longitude'] ) ? $honey_shop_instance['longitude'] : '';
			$honey_shop_latitude = isset( $honey_shop_instance['latitude'] ) ? $honey_shop_instance['latitude'] : '';
			$honey_shop_contact_form = isset( $honey_shop_instance['contact_form'] ) ? $honey_shop_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($honey_shop_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($honey_shop_title); ?></h3><?php } ?>
		        <?php if(!empty($honey_shop_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'honey-shop'); ?></span><span class="custom_desc"><?php echo esc_html($honey_shop_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($honey_shop_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'honey-shop'); ?></span><span class="custom_desc"><?php echo esc_html($honey_shop_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($honey_shop_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'honey-shop'); ?></span><span class="custom_desc"><?php echo esc_html($honey_shop_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($honey_shop_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','honey-shop'); ?></span><span class="custom_desc"><?php echo esc_html($honey_shop_timing); ?></span></p><?php } ?>
		        <?php if(!empty($honey_shop_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($honey_shop_longitude); ?>,<?php echo esc_html($honey_shop_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($honey_shop_contact_form) ){ ?><?php echo do_shortcode($honey_shop_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $honey_shop_instance ) {

		$honey_shop_title= ''; $honey_shop_phone= ''; $honey_shop_email = ''; $honey_shop_address = ''; $honey_shop_timing = ''; $honey_shop_longitude = ''; $honey_shop_latitude = ''; $honey_shop_contact_form = ''; 
		
		$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
		$honey_shop_phone = isset( $honey_shop_instance['phone'] ) ? $honey_shop_instance['phone'] : '';
		$honey_shop_email = isset( $honey_shop_instance['email'] ) ? $honey_shop_instance['email'] : '';
		$honey_shop_address = isset( $honey_shop_instance['address'] ) ? $honey_shop_instance['address'] : '';
		$honey_shop_timing = isset( $honey_shop_instance['timing'] ) ? $honey_shop_instance['timing'] : '';
		$honey_shop_longitude = isset( $honey_shop_instance['longitude'] ) ? $honey_shop_instance['longitude'] : '';
		$honey_shop_latitude = isset( $honey_shop_instance['latitude'] ) ? $honey_shop_instance['latitude'] : '';
		$honey_shop_contact_form = isset( $honey_shop_instance['contact_form'] ) ? $honey_shop_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($honey_shop_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($honey_shop_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($honey_shop_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($honey_shop_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($honey_shop_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($honey_shop_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($honey_shop_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','honey-shop'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($honey_shop_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $honey_shop_new_instance, $honey_shop_old_instance ) {
		$honey_shop_instance = array();	
		$honey_shop_instance['title'] = (!empty($honey_shop_new_instance['title']) ) ? strip_tags($honey_shop_new_instance['title']) : '';
		$honey_shop_instance['phone'] = (!empty($honey_shop_new_instance['phone']) ) ? honey_shop_sanitize_phone_number($honey_shop_new_instance['phone']) : '';
		$honey_shop_instance['email'] = (!empty($honey_shop_new_instance['email']) ) ? sanitize_email($honey_shop_new_instance['email']) : '';
		$honey_shop_instance['address'] = (!empty($honey_shop_new_instance['address']) ) ? strip_tags($honey_shop_new_instance['address']) : '';
		$honey_shop_instance['timing'] = (!empty($honey_shop_new_instance['timing']) ) ? strip_tags($honey_shop_new_instance['timing']) : '';
		$honey_shop_instance['longitude'] = (!empty($honey_shop_new_instance['longitude']) ) ? strip_tags($honey_shop_new_instance['longitude']) : '';
		$honey_shop_instance['latitude'] = (!empty($honey_shop_new_instance['latitude']) ) ? strip_tags($honey_shop_new_instance['latitude']) : '';
		$honey_shop_instance['contact_form'] = (!empty($honey_shop_new_instance['contact_form']) ) ? strip_tags($honey_shop_new_instance['contact_form']) : '';
        
		return $honey_shop_instance;
	}
}
// Register and load the widget
function honey_shop_contact_custom_load_widget() {
	register_widget( 'Honey_Shop_Contact_Widget' );
}
add_action( 'widgets_init', 'honey_shop_contact_custom_load_widget' );