<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage Book Store Cart
 * @since Book Store Cart 1.7
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function book_store_cart_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
	$wp_customize->add_section( new Book_Store_Cart_Customizer_Pro_Button( $wp_customize, 'upsell_premium_section', array(
		'title'       => __( 'Book Store Cart Pro', 'book-store-cart' ),
		'button_text' => __( 'Buy Pro Theme', 'book-store-cart' ),
		'url'         => esc_url( BOOK_STORE_CART_BUY_NOW ),
		'priority'    => 0,
	)));

	$wp_customize->add_section( new Book_Store_Cart_Customizer_Pro_Button( $wp_customize, 'upsell_bundle_section', array(
		'title'       => __( 'Get All Themes', 'book-store-cart' ),
		'button_text' => __( 'Buy Now', 'book-store-cart' ),
		'url'         => esc_url( BOOK_STORE_CART_BUNDLE_LINK ),
		'priority'    => 0,
	)));

}
add_action( 'customize_register', 'book_store_cart_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class Book_Store_Cart_Customizer_Pro_Button extends WP_Customize_Section {
		public $type = 'book-store-cart-buynow';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="book_store_cart_customizer_pro_button accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title premium-details">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Enqueue script for custom customize control.
 */
function book_store_cart_custom_control_scripts() {
	wp_enqueue_script( 'book-store-cart-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'book-store-cart-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'book_store_cart_custom_control_scripts' );
