<?php
/**
 * Latest Blogs
 */
return array(
	'title'      => esc_html__( 'Latest Blogs', 'book-store-cart' ),
	'categories' => array( 'book-store-cart', 'Latest Blogs' ),
	'content'    => '<!-- wp:group {"className":"site-blog-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group site-blog-box"><!-- wp:group {"className":"blog-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group blog-head-box wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","className":"blog-sub-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"17px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"bottom":"8px"}}},"textColor":"background"} -->
<p class="has-text-align-center blog-sub-title has-background-color has-text-color has-link-color" style="padding-bottom:8px;font-size:17px;font-style:normal;font-weight:500;text-transform:uppercase">'. esc_html__('our blog','book-store-cart').'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"blog-title","style":{"typography":{"fontSize":"30px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"5px"}}}} -->
<h2 class="wp-block-heading has-text-align-center blog-title" style="margin-top:5px;font-size:30px;font-style:normal;font-weight:600;line-height:1.3;text-transform:capitalize">'. esc_html__('latest news &amp; blog','book-store-cart').'</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":59,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"className":"blog-area","layout":{"type":"default"}} -->
<div class="wp-block-query blog-area"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"post-main-area wow zoomIn","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"foreground","layout":{"inherit":false}} -->
<div class="wp-block-group post-main-area wow zoomIn has-foreground-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"img-box","style":{"color":{"background":"#00000045"},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"250px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group img-box has-background" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#00000045;min-height:250px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"height":"250px","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"date-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"5px"}},"border":{"radius":"5px"}},"backgroundColor":"form-bg","textColor":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"22px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"15px"}}},"textColor":"primary"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":20,"className":"post-main-btn","style":{"elements":{"link":{"color":{"text":"#747474"}}},"color":{"text":"#747474"},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"12px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->',
);