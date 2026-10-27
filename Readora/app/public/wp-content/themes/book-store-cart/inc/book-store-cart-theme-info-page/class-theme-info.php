<?php
/**
 * Theme Info Page
 *
 * @package Book Store Cart
 */

function book_store_cart_theme_details() {
	add_theme_page( 'Themes', 'Book Store Cart Theme', 'edit_theme_options', 'book-store-cart-theme-info-page', 'theme_details_display', null );
}
add_action( 'admin_menu', 'book_store_cart_theme_details' );

function theme_details_display() {

	include_once 'templates/theme-details.php';

}

add_action( 'admin_enqueue_scripts', 'book_store_cart_theme_details_style' );

function book_store_cart_theme_details_style() {
    wp_register_style( 'book_store_cart_theme_details_css', get_template_directory_uri() . '/inc/book-store-cart-theme-info-page/css/theme-details.css', false, '1.0.0' );
    wp_enqueue_style( 'book_store_cart_theme_details_css' );
}