<?php 
/**
 * Default Header
 */
return array(
	'title'      => esc_html__( 'Default Header', 'book-store-cart' ),
	'categories' => array( 'book-store-cart', 'header' ),
	'content'    => '<!-- wp:group {"className":"main-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"topbar-box wow fadeInDown","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group topbar-box wow fadeInDown has-background-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color">'. esc_html__('All books at least 50% off list prices every day','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"middle-header wow fadeInDown","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group middle-header wow fadeInDown"><!-- wp:columns {"className":"middle-header-boxes","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"12px","left":"12px"}}}} -->
<div class="wp-block-columns middle-header-boxes" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:25%"><!-- wp:group {"className":"logo-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo-box"><!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontFamily":"book-store-cart-roboto"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"header-search-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-search-box" style="flex-basis:45%"><!-- wp:group {"className":"search-in-box","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"left":"8px","right":"0px","top":"0px","bottom":"0px"}}},"backgroundColor":"form-bg","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group search-in-box has-form-bg-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:8px"><!-- wp:woocommerce/product-categories {"isDropdown":true,"className":"top-category"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","widthUnit":"%","buttonText":"Search","query":{"post_type":"product"},"className":"top-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"16px"}},"backgroundColor":"background","textColor":"foreground","namespace":"woocommerce/product-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"mid-right-box"} -->
<div class="wp-block-column mid-right-box" style="flex-basis:30%"><!-- wp:group {"className":"buttons-box","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group buttons-box"><!-- wp:shortcode -->
<!-- /wp:shortcode -->

<!-- wp:shortcode -->
<!-- /wp:shortcode -->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","className":"top-account","style":{"typography":{"fontSize":"20px"}}} /-->

<!-- wp:image {"lightbox":{"enabled":false},"id":53,"sizeSlug":"full","linkDestination":"custom","className":"wish-btn"} -->
<figure class="wp-block-image size-full wish-btn"><a href="#"><img src="' . esc_url( get_theme_file_uri( '/assets/images/heart-img.png' ) ) .'" alt="" class="wp-image-53"/></a></figure>
<!-- /wp:image -->

<!-- wp:woocommerce/cart-link {"content":"","className":"top-cart-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bottom-header","style":{"border":{"top":{"color":"#2a2400","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group bottom-header" style="border-top-color:#2a2400;border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"bottom-header-boxes","style":{"spacing":{"blockGap":{"top":"14px","left":"14px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center bottom-header-boxes"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center menu-box" style="flex-basis:66.66%"><!-- wp:navigation {"textColor":"extra-secondary","overlayTextColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"16px"},"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Category","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center phone-box" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
<p class="has-text-align-right has-quaternary-color has-text-color has-link-color">'. esc_html__('Need help? Call Us: ','book-store-cart').'<a href="tel:84250088833">'. esc_html__('+84 2500 888 33','book-store-cart').'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);