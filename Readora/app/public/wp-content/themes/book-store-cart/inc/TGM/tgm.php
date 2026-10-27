<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function book_store_cart_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Gutentor', 'book-store-cart' ),
			'slug'             => 'gutentor',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'book-store-cart' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Translate WordPress with GTranslate', 'book-store-cart' ),
			'slug'             => 'gtranslate',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'FOX – Currency Switcher Professional for WooCommerce', 'book-store-cart' ),
			'slug'             => 'woocommerce-currency-switcher',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Siteready Coming Soon Under Construction', 'book-store-cart' ),
			'slug'             => 'siteready-coming-soon-under-construction',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	book_store_cart_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'book_store_cart_register_recommended_plugins' );