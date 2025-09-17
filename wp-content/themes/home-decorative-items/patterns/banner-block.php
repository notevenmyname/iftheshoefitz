<?php
/**
 * Title: Banner Block
 * Slug: home-decorative-items/banner-block
 * Categories: banner
 * Block Types: core/template-part/banner-block
 */
?>

<!-- wp:group {"className":"slider-main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0px","bottom":"0"}}}} -->
<div class="wp-block-group slider-main" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-main-image.png","id":15,"dimRatio":0,"overlayColor":"black","isUserOverlayColor":true,"minHeight":620,"minHeightUnit":"px","tagName":"main","className":"wp-block-group alignfull","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-15" alt="" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-main-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner","textColor":"base"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner has-base-color has-text-color"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-content"} -->
<div class="wp-block-column is-vertically-aligned-center slider-content" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"short-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
<h4 class="wp-block-heading short-heading has-base-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Home Decor','home-decorative-items'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"className":"heading-banner","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"40px","textTransform":"capitalize"}},"textColor":"base","fontFamily":"rubik"} -->
<h2 class="wp-block-heading heading-banner has-base-color has-text-color has-rubik-font-family" style="font-size:40px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('A Collection Of World Top Home','home-decorative-items'); ?><br><?php esc_html_e('Decorative Item','home-decorative-items'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"base","fontFamily":"rubik"} -->
<p class="has-text-align-left has-base-color has-text-color has-rubik-font-family" style="font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('It is a long established fact that a reader will be distracted by the readable<br>content of a page when looking at its layout.','home-decorative-items'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"social-icon","backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group social-icon has-primary-background-color has-background"><!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"behance"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->