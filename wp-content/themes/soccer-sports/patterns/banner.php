<?php
/**
 * Title: Banner
 * Slug: soccer-sports/banner
 * Categories: all, banner
 * Keywords: banner
 */
$soccer_sports_images = array(
    SOCCER_SPORTS_URL . 'assets/images/inner-banner-img1.jpg',
);

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0px","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:0px;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($soccer_sports_images[0]); ?>","id":2083,"dimRatio":20,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","align":"full","className":"banner-cover","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover alignfull banner-cover" style="margin-bottom:0;padding-top:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2083" alt="" src="<?php echo esc_url($soccer_sports_images[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","align":"full","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"montserrat"} -->
<h2 class="wp-block-heading alignfull has-text-align-center has-accent-text-color has-text-color has-link-color has-montserrat-font-family" style="font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e( 'WELCOME TO SOCCER', 'soccer-sports' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#ffffffc2"}}},"color":{"text":"#ffffffc2"},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"open-sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-open-sans-font-family" style="color:#ffffffc2;font-size:16px;font-style:normal;font-weight:500"><?php esc_html_e( 'It is a long established fact that a reader will be distracted by', 'soccer-sports' ); ?> <br><?php esc_html_e( 'the readable content of a page when looking at its layout', 'soccer-sports' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"accent-text","style":{"color":{"background":"#ffffff8a"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"open-sans"} -->
<div class="wp-block-button has-custom-font-size has-open-sans-font-family" style="font-size:15px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-accent-text-color has-text-color has-background has-link-color wp-element-button" style="background-color:#ffffff8a"><?php esc_html_e( 'Shop Collection', 'soccer-sports' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->
