<?php
/**
 * Title: Header
 * Slug: soccer-sports/header
 * Categories: header
 */
?>

<!-- wp:group {"className":"top-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"backgroundColor":"pure-black","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group top-header has-pure-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2137,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(SOCCER_SPORTS_URL . 'assets/images/truck.png'); ?>" alt="" class="wp-image-2137" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"montserrat"} -->
<p class="has-accent-text-color has-text-color has-link-color has-montserrat-font-family" style="font-size:14px;font-style:normal;font-weight:500;line-height:1.5"><?php esc_html_e( 'Free Delivery On First Three Orders In One Month', 'soccer-sports' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group main-header" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"><!-- wp:image {"lightbox":{"enabled":false},"id":2098,"scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url(SOCCER_SPORTS_URL . 'assets/images/bars.png'); ?>" alt="" class="wp-image-2098" style="object-fit:cover"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"elements":{"link":{"color":{"text":"#474747"}}},"color":{"text":"#474747"}},"fontFamily":"montserrat"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:60%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:group {"className":"header-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-meta"><!-- wp:image {"id":2103,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(SOCCER_SPORTS_URL . 'assets/images/Bell.png'); ?>" alt="" class="wp-image-2103"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2102,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(SOCCER_SPORTS_URL . 'assets/images/heart.png'); ?>" alt="" class="wp-image-2102"/></figure>
<!-- /wp:image -->

<!-- wp:woocommerce/mini-cart /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-nav","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group header-nav"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"15%","className":"header-cat-box","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"backgroundColor":"secaccent"} -->
<div class="wp-block-column is-vertically-aligned-center header-cat-box has-secaccent-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;flex-basis:15%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-categories {"hasEmpty":true,"isDropdown":true,"showChildrenOnly":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-bottom:10px;flex-basis:80%"><!-- wp:navigation {"customTextColor":"#474747","icon":"menu","overlayTextColor":"pure-black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px","textTransform":"capitalize"}},"fontFamily":"open-sans","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"All","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Training","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Articles","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"FAQs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->