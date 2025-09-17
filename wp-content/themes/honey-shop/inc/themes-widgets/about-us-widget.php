<?php
/**
 * Custom About us Widget
 */

class Honey_Shop_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Honey_Shop_About_Widget',
			__('VW About us', 'honey-shop'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'honey-shop' ), ) 
		);
	}
	
	public function widget( $honey_shop_args, $honey_shop_instance ) {
		?>
		<aside class="widget">
			<?php
			$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
			$honey_shop_author = isset( $honey_shop_instance['author'] ) ? $honey_shop_instance['author'] : '';
			$honey_shop_designation = isset( $honey_shop_instance['designation'] ) ? $honey_shop_instance['designation'] : '';
			$honey_shop_description = isset( $honey_shop_instance['description'] ) ? $honey_shop_instance['description'] : '';
			$honey_shop_read_more_url = isset( $honey_shop_instance['read_more_url'] ) ? $honey_shop_instance['read_more_url'] : '';
			$honey_shop_read_more_text = isset( $honey_shop_instance['read_more_text'] ) ? $honey_shop_instance['read_more_text'] : '';
			$honey_shop_upload_image = isset( $honey_shop_instance['upload_image'] ) ? $honey_shop_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($honey_shop_title) ){ ?><h3 class="custom_title"><?php echo esc_html($honey_shop_title); ?></h3><?php } ?>
		        <?php if($honey_shop_upload_image): ?>
	      			<img src="<?php echo esc_url($honey_shop_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($honey_shop_author) ){ ?><p class="custom_author"><?php echo esc_html($honey_shop_author); ?></p><?php } ?>
				<?php if(!empty($honey_shop_designation) ){ ?><p class="custom_designation"><?php echo esc_html($honey_shop_designation); ?></p><?php } ?>
		        <?php if(!empty($honey_shop_description) ){ ?><p class="custom_desc"><?php echo esc_html($honey_shop_description); ?></p><?php } ?>
		        <?php if(!empty($honey_shop_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($honey_shop_read_more_url); ?>"><?php if(!empty($honey_shop_read_more_text) ){ ?><?php echo esc_html($honey_shop_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $honey_shop_instance ) {	

		$honey_shop_title= ''; $honey_shop_author = ''; $honey_shop_designation = ''; $honey_shop_description= ''; $honey_shop_read_more_text = ''; $honey_shop_read_more_url = ''; $honey_shop_upload_image = '';

		$honey_shop_title = isset( $honey_shop_instance['title'] ) ? $honey_shop_instance['title'] : '';
		$honey_shop_author = isset( $honey_shop_instance['author'] ) ? $honey_shop_instance['author'] : '';
		$honey_shop_designation = isset( $honey_shop_instance['designation'] ) ? $honey_shop_instance['designation'] : '';
		$honey_shop_description = isset( $honey_shop_instance['description'] ) ? $honey_shop_instance['description'] : '';
		$honey_shop_read_more_url = isset( $honey_shop_instance['read_more_url'] ) ? $honey_shop_instance['read_more_url'] : '';
		$honey_shop_read_more_text = isset( $honey_shop_instance['read_more_text'] ) ? $honey_shop_instance['read_more_text'] : '';
		$honey_shop_upload_image = isset( $honey_shop_instance['upload_image'] ) ? $honey_shop_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','honey-shop'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($honey_shop_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','honey-shop'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($honey_shop_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','honey-shop'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($honey_shop_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','honey-shop'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($honey_shop_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($honey_shop_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','honey-shop'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($honey_shop_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','honey-shop'); ?></label>
		<?php
			if ( $honey_shop_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($honey_shop_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $honey_shop_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $honey_shop_new_instance, $honey_shop_old_instance ) {
		$honey_shop_instance = array();	
		$honey_shop_instance['title'] = (!empty($honey_shop_new_instance['title']) ) ? strip_tags($honey_shop_new_instance['title']) : '';
		$honey_shop_instance['author'] = ( ! empty( $honey_shop_new_instance['author'] ) ) ? strip_tags($honey_shop_new_instance['author']) : '';
		$honey_shop_instance['designation'] = ( ! empty( $honey_shop_new_instance['designation'] ) ) ? strip_tags($honey_shop_new_instance['designation']) : '';
		$honey_shop_instance['description'] = (!empty($honey_shop_new_instance['description']) ) ? strip_tags($honey_shop_new_instance['description']) : '';
        $honey_shop_instance['read_more_text'] = (!empty($honey_shop_new_instance['read_more_text']) ) ? strip_tags($honey_shop_new_instance['read_more_text']) : '';
        $honey_shop_instance['read_more_url'] = (!empty($honey_shop_new_instance['read_more_url']) ) ? esc_url_raw($honey_shop_new_instance['read_more_url']) : '';
        $honey_shop_instance['upload_image'] = ( ! empty( $honey_shop_new_instance['upload_image'] ) ) ? strip_tags($honey_shop_new_instance['upload_image']) : '';

		return $honey_shop_instance;
	}
}
// Register and load the widget
function honey_shop_about_custom_load_widget() {
	register_widget( 'Honey_Shop_About_Widget' );
}
add_action( 'widgets_init', 'honey_shop_about_custom_load_widget' );