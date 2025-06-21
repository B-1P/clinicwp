z<?php
/**
 * Title: Latest News
 * Slug: integrity/latest-news
 * Categories: integrity, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"}},"textColor":"primary","fontSize":"body-text"} -->
<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-body-text-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px"><?php esc_html_e('Keeping You Informed','integrity'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"2px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"section-title"} -->
<h2 class="wp-block-heading has-text-align-center has-section-title-font-size" style="margin-top:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;letter-spacing:2px"><?php esc_html_e('Stories, Tips &amp; Latest News','integrity'); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Mauris sed facilisis metus. Suspendisse imperdiet, arcu sit amet commodo sagittis, dui magna finibus enim, ac convallis lectus elit facilisis augue. Vivamus aliquam nibh quis elementum eleifend.','integrity'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":9,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2em","bottom":"2em","left":"2em","right":"2em"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"shadow news-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group shadow news-content has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","fontSize":"12px","letterSpacing":"1px"},"border":{"radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"fontFamily":"mulish"} -->
<div class="wp-block-group has-primary-color has-text-color has-link-color has-mulish-font-family" style="border-radius:10px;font-size:12px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.5","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->

<!-- wp:read-more {"content":"Read More","style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->