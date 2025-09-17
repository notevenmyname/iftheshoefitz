<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Logistic Warehouse
 */

get_header(); ?>

<div class="container">
    <div id="content" class="contentsecwrap">
        <section class="site-main page-not-found">
            <header class="page-header">
                <h1 class="entry-title">
                    <?php echo esc_html(get_theme_mod('logistic_warehouse_page_not_found_heading',__('404 Not Found','logistic-warehouse')));?>
                </h1>
            </header>
            <div class="page-content">
                <p>
                    <?php echo esc_html(get_theme_mod('logistic_warehouse_page_not_found_content',__( 'Looks like you have taken a wrong turn.....Don\'t worry... it happens to the best of us.', 'logistic-warehouse' ))); ?>
                </p>
            </div>
        </section>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>