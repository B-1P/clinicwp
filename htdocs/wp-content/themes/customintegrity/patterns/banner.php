<?php
/**
 * Title: Banner
 * Slug: integrity/banner
 * Categories: integrity, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":20,"customOverlayColor":"#010c0c","minHeight":700,"contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim" style="background-color:#010c0c"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"radius":"30px","bottom":{"color":"#0c0c0c","width":"3px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:30px;border-bottom-color:#0c0c0c;border-bottom-width:3px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"className":"banner-sub-title","fontSize":"body-text"} -->
<h4 class="wp-block-heading banner-sub-title has-body-text-font-size" style="padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;font-style:normal;font-weight:700;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Personal Care','integrity'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900","lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"white","fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-banner-title-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:900;line-height:1"><?php esc_html_e('The hospital where the doctor cares','integrity'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:button {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":"0px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"14px","bottom":"14px"}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px"><?php esc_html_e('Book Appointment','integrity'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->