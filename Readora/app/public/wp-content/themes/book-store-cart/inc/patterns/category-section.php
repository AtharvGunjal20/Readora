<?php 
/**
 * Default Category Section
 */

$book_store_cart_plugins_list = get_option('active_plugins');
$book_store_cart_woocommerce_plugin = 'woocommerce/woocommerce.php';
$book_store_cart_gutentor_plugin = 'gutentor/gutentor.php';
if( in_array($book_store_cart_woocommerce_plugin, $book_store_cart_plugins_list) && in_array($book_store_cart_gutentor_plugin, $book_store_cart_plugins_list) )
{

return array(
	'title'      => esc_html__( 'Category Section', 'book-store-cart' ),
	'categories' => array( 'book-store-cart', 'Category Section' ),
	'content'    => '<!-- wp:group {"className":"category-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group category-section"><!-- wp:columns {"className":"category-head-box","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":{"top":"5px","left":"5px"}}}} -->
<div class="wp-block-columns category-head-box" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"85%","className":"category-left"} -->
<div class="wp-block-column category-left" style="flex-basis:85%"><!-- wp:paragraph {"className":"category-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"15px"}},"textColor":"background"} -->
<p class="category-sub-title has-background-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase">'. esc_html__('our category','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"category-main-title","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"5px"}}}} -->
<h2 class="wp-block-heading category-main-title" style="margin-top:5px;font-size:30px;font-style:normal;font-weight:500">'. esc_html__('Shop by Category','book-store-cart').'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%","className":"category-right"} -->
<div class="wp-block-column category-right" style="flex-basis:15%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gutentor/t1 {"gID":"g-1ewij2e","pName":"gutentor/t1","blockItemsColumn":{"desktop":"grid-lg-12","tablet":"grid-md-12","mobile":"grid-12"},"t1Taxonomy":"product_cat","tBtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"tFImgOC":{"enable":false,"normal":""},"t2ContentP":{"mTop":"","mRight":"","mBottom":"","mLeft":""},"tBxAlign":{"desktop":"","tablet":"","mobile":""},"tBxM":{"type":"px","mTop":"","mBottom":""},"tBxP":{"type":"px","dTop":"15","dBottom":"15","tTop":"15","tBottom":"15","mTop":"15","mBottom":"15"},"tOnCount":false,"tCountOpt":{"display":"sorting","prefix":"","suffix":"Items"},"className":"category-boxes"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);

} else {

return array(
	'title'      => esc_html__( 'Category Section', 'book-store-cart' ),
	'categories' => array( 'book-store-cart', 'Category Section' ),
	'content'    => '<!-- wp:group {"className":"category-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group category-section"><!-- wp:columns {"className":"category-head-box","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":{"top":"5px","left":"5px"}}}} -->
<div class="wp-block-columns category-head-box" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"85%","className":"category-left"} -->
<div class="wp-block-column category-left" style="flex-basis:85%"><!-- wp:paragraph {"className":"category-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"15px"}},"textColor":"background"} -->
<p class="category-sub-title has-background-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase">'. esc_html__('our category','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"category-main-title","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"5px"}}}} -->
<h2 class="wp-block-heading category-main-title" style="margin-top:5px;font-size:30px;font-style:normal;font-weight:500">'. esc_html__('Shop by Category','book-store-cart').'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%","className":"category-right"} -->
<div class="wp-block-column category-right" style="flex-basis:15%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"category-boxes owl-carousel","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns category-boxes owl-carousel" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category1.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('history book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category2.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('horror book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category3.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('family book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category4.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('romance book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category5.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('Historical Fiction Book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","className":"category-card"} -->
<div class="wp-block-column category-card" style="flex-basis:16.67%"><!-- wp:image {"id":57,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","className":"category-img","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border category-img"><img src="' . esc_url( get_theme_file_uri( '/assets/images/category6.png' ) ) .'" alt="" class="wp-image-57" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:auto;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"category-card-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"18px"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center category-card-title has-primary-color has-text-color has-link-color" style="margin-top:18px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('Literary Fiction Book','book-store-cart').'</h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);

}