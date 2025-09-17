<?php
/**
 * Custom Social Widget
 */

class Honey_Shop_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Honey_Shop_Social_Widget',
			__('VW Social Icon', 'honey-shop'),
			array( 'description' => __( 'Widget for Social icons section', 'honey-shop' ), ) 
		);
	}

	public function widget( $honey_shop_args, $honey_shop_instance ) { ?>
		<div class="widget">
			<?php
			$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
			$honey_shop_facebook = isset( $honey_shop_instance['facebook'] ) ? $honey_shop_instance['facebook'] : '';
			$honey_shop_twitter = isset( $honey_shop_instance['twitter'] ) ? $honey_shop_instance['twitter'] : '';
			$honey_shop_instagram = isset( $honey_shop_instance['instagram'] ) ? $honey_shop_instance['instagram'] : '';
			$honey_shop_youtube = isset( $honey_shop_instance['youtube'] ) ? $honey_shop_instance['youtube'] : '';
			$honey_shop_dribbal = isset( $honey_shop_instance['dribbal'] ) ? $honey_shop_instance['dribbal'] : '';
			$honey_shop_linkedin = isset( $honey_shop_instance['linkedin'] ) ? $honey_shop_instance['linkedin'] : '';
			$honey_shop_pinterest = isset( $honey_shop_instance['pinterest'] ) ? $honey_shop_instance['pinterest'] : '';
			$honey_shop_tumblr = isset( $honey_shop_instance['tumblr'] ) ? $honey_shop_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($honey_shop_title) ){ ?><h3 class="custom_title"><?php echo esc_html($honey_shop_title); ?></h3><?php } ?>
	        <?php if(!empty($honey_shop_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($honey_shop_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','honey-shop' );?></span></a></p><?php } ?>

	        <?php if(!empty($honey_shop_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($honey_shop_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','honey-shop' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($honey_shop_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($honey_shop_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','honey-shop' );?></span></a></p><?php } ?>

	        <?php if(!empty($honey_shop_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($honey_shop_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','honey-shop' );?></span></a></p><?php } ?>

	        <?php if(!empty($honey_shop_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($honey_shop_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','honey-shop' );?></span></a></p><?php } ?>

	        <?php if(!empty($honey_shop_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($honey_shop_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','honey-shop' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($honey_shop_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($honey_shop_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','honey-shop' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($honey_shop_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($honey_shop_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','honey-shop' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $honey_shop_instance ) {

		$honey_shop_title= ''; $honey_shop_facebook = ''; $honey_shop_twitter = ''; $honey_shop_linkedin = '';  $honey_shop_pinterest = '';$honey_shop_tumblr = ''; $honey_shop_instagram = ''; $honey_shop_youtube = ''; 

		$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
		$honey_shop_facebook = isset( $honey_shop_instance['facebook'] ) ? $honey_shop_instance['facebook'] : '';
		$honey_shop_instagram = isset( $honey_shop_instance['instagram'] ) ? $honey_shop_instance['instagram'] : '';
		$honey_shop_twitter = isset( $honey_shop_instance['twitter'] ) ? $honey_shop_instance['twitter'] : '';
		$honey_shop_youtube = isset( $honey_shop_instance['youtube'] ) ? $honey_shop_instance['youtube'] : '';
		$honey_shop_dribbal = isset( $honey_shop_instance['dribbal'] ) ? $honey_shop_instance['dribbal'] : '';
		$honey_shop_linkedin = isset( $honey_shop_instance['linkedin'] ) ? $honey_shop_instance['linkedin'] : '';
		$honey_shop_pinterest = isset( $honey_shop_instance['pinterest'] ) ? $honey_shop_instance['pinterest'] : '';
		$honey_shop_tumblr = isset( $honey_shop_instance['tumblr'] ) ? $honey_shop_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','honey-shop'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($honey_shop_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($honey_shop_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($honey_shop_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($honey_shop_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($honey_shop_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($honey_shop_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($honey_shop_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($honey_shop_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($honey_shop_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $honey_shop_new_instance, $honey_shop_old_instance ) {
		$honey_shop_instance = array();
		$honey_shop_instance['title'] = (!empty($honey_shop_new_instance['title']) ) ? strip_tags($honey_shop_new_instance['title']) : '';	
        $honey_shop_instance['facebook'] = (!empty($honey_shop_new_instance['facebook']) ) ? esc_url_raw($honey_shop_new_instance['facebook']) : '';
        $honey_shop_instance['twitter'] = (!empty($honey_shop_new_instance['twitter']) ) ? esc_url_raw($honey_shop_new_instance['twitter']) : '';
        $honey_shop_instance['instagram'] = (!empty($honey_shop_new_instance['instagram']) ) ? esc_url_raw($honey_shop_new_instance['instagram']) : '';
        $honey_shop_instance['youtube'] = (!empty($honey_shop_new_instance['youtube']) ) ? esc_url_raw($honey_shop_new_instance['youtube']) : '';
        $honey_shop_instance['dribbal'] = (!empty($honey_shop_new_instance['dribbal']) ) ? esc_url_raw($honey_shop_new_instance['dribbal']) : '';
        $honey_shop_instance['linkedin'] = (!empty($honey_shop_new_instance['linkedin']) ) ? esc_url_raw($honey_shop_new_instance['linkedin']) : '';
        $honey_shop_instance['pinterest'] = (!empty($honey_shop_new_instance['pinterest']) ) ? esc_url_raw($honey_shop_new_instance['pinterest']) : '';
        $honey_shop_instance['tumblr'] = (!empty($honey_shop_new_instance['tumblr']) ) ? esc_url_raw($honey_shop_new_instance['tumblr']) : '';
     	
     	
		return $honey_shop_instance;
	}
}

function honey_shop_custom_load_widget() {
	register_widget( 'Honey_Shop_Social_Widget' );
}
add_action( 'widgets_init', 'honey_shop_custom_load_widget' );