<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Honey Shop 
 */
?>

    <footer role="contentinfo">
        <div class="footer-section">
            <?php if (get_theme_mod('honey_shop_footer_hide_show', true)){ ?>
                <aside id="footer" class="copyright-wrapper" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'honey-shop' ); ?>">
                    <div class="container">
                        <?php
                            $honey_shop_count = 0;
                            
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                $honey_shop_count++;
                            }
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                $honey_shop_count++;
                            }
                            if ( is_active_sidebar( 'footer-3' ) ) {
                                $honey_shop_count++;
                            }
                            if ( is_active_sidebar( 'footer-4' ) ) {
                                $honey_shop_count++;
                            }
                            // $honey_shop_count == 0 none
                            if ( $honey_shop_count == 1 ) {
                                $honey_shop_colmd = 'col-md-12 col-sm-12';
                            } elseif ( $honey_shop_count == 2 ) {
                                $honey_shop_colmd = 'col-md-6 col-sm-6';
                            } elseif ( $honey_shop_count == 3 ) {
                                $honey_shop_colmd = 'col-md-4 col-sm-4';
                            } else {
                                $honey_shop_colmd = 'col-lg-3 col-md-6 col-sm-6';
                            }
                        ?>
                        <div class="row wow bounceInUp center delay-1000" data-wow-duration="2s">
                            <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($honey_shop_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-1')) : ?>
                                    <?php dynamic_sidebar('footer-1'); ?>
                                <?php else : ?>
                                    <aside id="search" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'firstwidget', 'honey-shop' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Search', 'honey-shop' ); ?></h3>
                                        <?php get_search_form(); ?>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($honey_shop_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-2')) : ?>
                                    <?php dynamic_sidebar('footer-2'); ?>
                                <?php else : ?>
                                    <aside id="archives" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'secondwidget', 'honey-shop' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'honey-shop' ); ?></h3>
                                        <ul>
                                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($honey_shop_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-3')) : ?>
                                    <?php dynamic_sidebar('footer-3'); ?>
                                <?php else : ?>
                                    <aside id="meta" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'thirdwidget', 'honey-shop' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Meta', 'honey-shop' ); ?></h3>
                                        <ul>
                                            <?php wp_register(); ?>
                                            <li><?php wp_loginout(); ?></li>
                                            <?php wp_meta(); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($honey_shop_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-4')) : ?>
                                    <?php dynamic_sidebar('footer-4'); ?>
                                <?php else : ?>
                                    <aside id="categories" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'fourthwidget', 'honey-shop' ); ?>"> 
                                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'honey-shop' ); ?></h3>          
                                        <ul>
                                            <?php wp_list_categories('title_li=');  ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </aside>
            <?php }?>
        </div>
         <div class="footer <?php if( get_theme_mod( 'honey_shop_copyright_sticky', false) == 1) { ?> copyright-sticky"<?php } else { ?>close-sticky <?php } ?>">
            <?php if (get_theme_mod('honey_shop_copyright_hide_show', true)) {?>
                <div id="footer-2" class="text-center">
                  	<div class="copyright container">
                        <p class="mb-0 py-3"><?php honey_shop_credit(); ?> <?php echo esc_html(get_theme_mod('honey_shop_footer_text',__('By VWThemes','honey-shop'))); ?></p>
                        <?php if(get_theme_mod('honey_shop_footer_icon',false) != false) {?>
                            <?php dynamic_sidebar('footer-icon'); ?>
                        <?php }?>
                        <?php if( get_theme_mod( 'honey_shop_hide_show_scroll',true) == 1 || get_theme_mod( 'honey_shop_resp_scroll_top_hide_show',true) == 1) { ?>
                            <?php $honey_shop_theme_lay = get_theme_mod( 'honey_shop_scroll_top_alignment','Right');
                            if($honey_shop_theme_lay == 'Left'){ ?>
                                <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'honey-shop' ); ?></span></a>
                            <?php }else if($honey_shop_theme_lay == 'Center'){ ?>
                                <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'honey-shop' ); ?></span></a>
                            <?php }else{ ?>
                                <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('honey_shop_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'honey-shop' ); ?></span></a>
                            <?php }?>
                        <?php }?>
                  	</div>
                  	<div class="clear"></div>
                </div>
            <?php }?>
        </div>    
    </footer>
        <?php wp_footer(); ?>
    </body>
</html>