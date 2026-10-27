<?php 
/**
 * Default Slider Section
 */
return array(
	'title'      => esc_html__( 'Slider Section', 'book-store-cart' ),
	'categories' => array( 'book-store-cart', 'Slider Section' ),
	'content'    => '<!-- wp:group {"className":"main-slider","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-slider" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"overlayColor":"slider-bg1","isUserOverlayColor":true,"minHeight":600,"contentPosition":"center center","isDark":false,"sizeSlug":"large","className":"slider-bg","style":{"spacing":{"padding":{"bottom":"0px","left":"0px","right":"0px","top":"18px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light slider-bg" style="padding-top:18px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-slider-bg-1-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"owl-carousel","layout":{"type":"default"}} -->
<div class="wp-block-group owl-carousel"><!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":{"top":"25px","left":"50px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:50%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600">'. esc_html__('A brand new series.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"40px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"margin":{"top":"12px"}}}} -->
<h1 class="wp-block-heading wow fadeInUp slider-main-title" style="margin-top:12px;font-size:40px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase">'. esc_html__('your ultimate page to screen reading list','book-store-cart').'</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"primary"} -->
<p class="wow fadeInUp slider-desc has-primary-color has-text-color has-link-color" style="margin-top:6px;font-size:17px;font-style:normal;font-weight:600">'. esc_html__('Save up to 15% on new releases.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"foreground","textColor":"primary","style":{"spacing":{"padding":{"left":"22px","right":"22px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-foreground-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:10px;padding-right:22px;padding-bottom:10px;padding-left:22px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('discover more','book-store-cart').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box" style="flex-basis:50%"><!-- wp:group {"className":"slider-right-inner","style":{"spacing":{"padding":{"left":"0"},"blockGap":"12%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group slider-right-inner" style="padding-left:0"><!-- wp:image {"id":26,"width":"auto","height":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"slider-img1"} -->
<figure class="wp-block-image aligncenter size-full is-resized slider-img1"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img1.png' ) ) .'" alt="" class="wp-image-26" style="width:auto;height:260px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":34,"width":"auto","height":"230px","sizeSlug":"full","linkDestination":"none","className":"slider-img2"} -->
<figure class="wp-block-image size-full is-resized slider-img2"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img2.png' ) ) .'" alt="" class="wp-image-34" style="width:auto;height:230px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":{"top":"25px","left":"50px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:50%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600">'. esc_html__('A brand new series.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"40px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"margin":{"top":"12px"}}}} -->
<h1 class="wp-block-heading wow fadeInUp slider-main-title" style="margin-top:12px;font-size:40px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase">'. esc_html__('your ultimate page to screen reading list','book-store-cart').'</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"primary"} -->
<p class="wow fadeInUp slider-desc has-primary-color has-text-color has-link-color" style="margin-top:6px;font-size:17px;font-style:normal;font-weight:600">'. esc_html__('Save up to 15% on new releases.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"foreground","textColor":"primary","style":{"spacing":{"padding":{"left":"22px","right":"22px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-foreground-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:10px;padding-right:22px;padding-bottom:10px;padding-left:22px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('discover more','book-store-cart').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box" style="flex-basis:50%"><!-- wp:group {"className":"slider-right-inner","style":{"spacing":{"padding":{"left":"0"},"blockGap":"12%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group slider-right-inner" style="padding-left:0"><!-- wp:image {"id":26,"width":"auto","height":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"slider-img1"} -->
<figure class="wp-block-image aligncenter size-full is-resized slider-img1"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img12.png' ) ) .'" alt="" class="wp-image-26" style="width:auto;height:260px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":34,"width":"auto","height":"230px","sizeSlug":"full","linkDestination":"none","className":"slider-img2"} -->
<figure class="wp-block-image size-full is-resized slider-img2"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img22.png' ) ) .'" alt="" class="wp-image-34" style="width:auto;height:230px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-boxes","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":{"top":"25px","left":"50px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center slider-boxes" style="margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-left-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-left-box" style="flex-basis:50%"><!-- wp:paragraph {"className":"slider-sub-title wow fadeInUp","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<p class="slider-sub-title wow fadeInUp has-background-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600">'. esc_html__('A brand new series.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"wow fadeInUp slider-main-title","style":{"typography":{"fontSize":"40px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"margin":{"top":"12px"}}}} -->
<h1 class="wp-block-heading wow fadeInUp slider-main-title" style="margin-top:12px;font-size:40px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase">'. esc_html__('your ultimate page to screen reading list','book-store-cart').'</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wow fadeInUp slider-desc","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"6px"}}},"textColor":"primary"} -->
<p class="wow fadeInUp slider-desc has-primary-color has-text-color has-link-color" style="margin-top:6px;font-size:17px;font-style:normal;font-weight:600">'. esc_html__('Save up to 15% on new releases.','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btns wow fadeInUp","style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-buttons slider-btns wow fadeInUp" style="margin-top:40px"><!-- wp:button {"backgroundColor":"foreground","textColor":"primary","style":{"spacing":{"padding":{"left":"22px","right":"22px","top":"10px","bottom":"10px"}},"border":{"radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-foreground-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;padding-top:10px;padding-right:22px;padding-bottom:10px;padding-left:22px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize">'. esc_html__('discover more','book-store-cart').'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"slider-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center slider-right-box" style="flex-basis:50%"><!-- wp:group {"className":"slider-right-inner","style":{"spacing":{"padding":{"left":"0"},"blockGap":"12%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group slider-right-inner" style="padding-left:0"><!-- wp:image {"id":26,"width":"auto","height":"260px","sizeSlug":"full","linkDestination":"none","align":"center","className":"slider-img1"} -->
<figure class="wp-block-image aligncenter size-full is-resized slider-img1"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img13.png' ) ) .'" alt="" class="wp-image-26" style="width:auto;height:260px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":34,"width":"auto","height":"230px","sizeSlug":"full","linkDestination":"none","className":"slider-img2"} -->
<figure class="wp-block-image size-full is-resized slider-img2"><img src="' . esc_url( get_theme_file_uri( '/assets/images/slider-img23.png' ) ) .'" alt="" class="wp-image-34" style="width:auto;height:230px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"marquee-box","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"6px","bottom":"6px"}}},"backgroundColor":"form-bg","layout":{"type":"default"}} -->
<div class="wp-block-group marquee-box has-form-bg-background-color has-background" style="margin-top:0px;padding-top:6px;padding-bottom:6px"><!-- wp:group {"className":"marquee-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group marquee-content"><!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('2.258 authors','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('22 898 books sold','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('98% happy customer','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('total books 16,254','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('2.258 authors','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"marque-text","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group marque-text"><!-- wp:html -->
<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.18162 0.213843C6.00584 0.0292731 5.74216 -0.0410394 5.49607 0.0234138C5.24998 0.0878669 5.05955 0.284156 4.99509 0.53025L4.5322 2.3613L2.7158 1.84861C2.4697 1.7783 2.20603 1.84861 2.02732 2.02732C1.84861 2.20603 1.7783 2.4697 1.84861 2.7158L2.3613 4.5322L0.53025 4.99802C0.284156 5.05955 0.0907966 5.25291 0.0234138 5.499C-0.043969 5.74509 0.0292731 6.00584 0.213843 6.18162L1.56736 7.49998L0.213843 8.81834C0.0292731 8.99412 -0.0410394 9.25779 0.0234138 9.50388C0.0878669 9.74998 0.284156 9.94041 0.53025 10.0049L2.3613 10.4677L1.84861 12.2842C1.7783 12.5302 1.84861 12.7939 2.02732 12.9726C2.20603 13.1513 2.4697 13.2217 2.7158 13.1513L4.5322 12.6386L4.99509 14.4697C5.05662 14.7158 5.24998 14.9092 5.49607 14.9765C5.74216 15.0439 6.00291 14.9707 6.18162 14.789L7.49998 13.4355L8.81834 14.789C8.99705 14.9707 9.25779 15.0439 9.50388 14.9765C9.74998 14.9092 9.94041 14.7158 10.0049 14.4697L10.4677 12.6386L12.2842 13.1513C12.5302 13.2217 12.7939 13.1513 12.9726 12.9726C13.1513 12.7939 13.2217 12.5302 13.1513 12.2842L12.6386 10.4677L14.4697 10.0049C14.7158 9.94334 14.9092 9.74998 14.9765 9.50388C15.0439 9.25779 14.9707 8.99412 14.789 8.81834L13.4355 7.49998L14.789 6.18162C14.9707 6.00291 15.0439 5.74216 14.9765 5.49607C14.9092 5.24998 14.7158 5.05955 14.4697 4.99509L12.6386 4.5322L13.1513 2.7158C13.2217 2.4697 13.1513 2.20603 12.9726 2.02732C12.7939 1.84861 12.5302 1.7783 12.2842 1.84861L10.4677 2.3613L10.0019 0.53025C9.9404 0.284156 9.74705 0.0907966 9.50095 0.0234138C9.25486 -0.043969 8.99412 0.0292731 8.81834 0.213843L7.49998 1.56736L6.18162 0.213843Z" fill="var(--wp--preset--color--background)"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:18px">'. esc_html__('22 898 books sold','book-store-cart').'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);