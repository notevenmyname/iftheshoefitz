<?php
/**
 * Title: TI Blog
 * Slug: home-decorative-items/tiblog
 * Categories: tiblog
 * Block Types: core/template-part/tiblog
 */
?>

<!-- wp:group {"className":"news-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group news-section" style="margin-top:0px;margin-bottom:0px;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"className":"news-heading-box"} -->
<div class="wp-block-columns news-heading-box"><!-- wp:column {"width":"100%","className":"news-heading-inner-box"} -->
<div class="wp-block-column news-heading-inner-box" style="flex-basis:100%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"#2e2d2d"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"style":"none","width":"0px"},"top":[],"right":[],"left":[]},"color":{"text":"#2e2d2d"}},"fontFamily":"rubik"} -->
<h6 class="wp-block-heading has-text-align-left has-text-color has-link-color has-rubik-font-family" style="border-bottom-style:none;border-bottom-width:0px;color:#2e2d2d;margin-top:0;margin-bottom:0;font-size:25px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Our Recent Blogs','home-decorative-items'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":11,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"news-box","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"news-img","style":{"dimensions":{"minHeight":"230px"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#00000069"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-img has-background" style="border-radius:10px;background-color:#00000069;min-height:230px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"230px","align":"wide","style":{"border":{"radius":"10px"},"color":[]}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|30"}},"typography":{"fontStyle":"thin","fontWeight":"700"}},"fontFamily":"rubik"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":10,"className":"recent-btn","style":{"typography":{"fontSize":"15px"},"spacing":{"margin":{"top":"0px","bottom":"5px"}}},"fontFamily":"roboto"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->