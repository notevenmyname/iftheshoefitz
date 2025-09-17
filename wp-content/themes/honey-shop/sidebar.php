<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Honey Shop 
 */
?>

<div id="sidebar" class="wow zoomInUp delay-1000" data-wow-duration="2s" <?php if( is_page_template('blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="search" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'firstsidebar', 'honey-shop' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'honey-shop' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="archives" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'honey-shop' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'honey-shop' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'thirdsidebar', 'honey-shop' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'honey-shop' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="categories" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'forthsidebar', 'honey-shop' ); ?>"> 
            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'honey-shop' ); ?></h3>          
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="categories-dropdown" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'fifthsidebar', 'honey-shop' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Dropdown Categories', 'honey-shop' ); ?></h3>
            <ul>
                <?php wp_dropdown_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside id="tag-cloud-sec" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'sixthsidebar', 'honey-shop' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Tag Cloud', 'honey-shop' ); ?></h3>
            <ul>
                <?php wp_tag_cloud('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; ?>
</div> 