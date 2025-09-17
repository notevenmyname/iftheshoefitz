<?php

Class Honey_Shop_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($honey_shop_args, $honey_shop_instance) {
      if ( ! isset( $honey_shop_args['widget_id'] ) ) {
      $honey_shop_args['widget_id'] = $this->id;
    }
    $honey_shop_title = ( ! empty( $honey_shop_instance['title'] ) ) ? $honey_shop_instance['title'] : __( 'Recent Posts', 'honey-shop' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $honey_shop_title = apply_filters( 'widget_title', $honey_shop_title, $honey_shop_instance, $this->id_base );
    $honey_shop_number = ( ! empty( $honey_shop_instance['number'] ) ) ? absint( $honey_shop_instance['number'] ) : 5;
    if ( ! $honey_shop_number )
        $honey_shop_number = 5;
    $honey_shop_show_date = isset( $honey_shop_instance['show_date'] ) ? $honey_shop_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $honey_shop_args An array of arguments used to retrieve the recent posts.
     */
    $honey_shop_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $honey_shop_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($honey_shop_r->have_posts()) :
    ?>
    <?php echo $honey_shop_args['before_widget']; ?>
    <?php if ( $honey_shop_title ) {
        echo $honey_shop_args['before_title'] . esc_html($honey_shop_title) . $honey_shop_args['after_title'];
    } ?>
    <ul>
      <?php while ( $honey_shop_r->have_posts() ) : $honey_shop_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $honey_shop_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'honey-shop'), __('0 Comments', 'honey-shop'), __('% Comments', 'honey-shop') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $honey_shop_args['after_widget'];

    endif;
  }
}
function honey_shop_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Honey_Shop_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'honey_shop_my_recent_widget_registration');
