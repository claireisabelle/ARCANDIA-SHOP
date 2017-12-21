<?php 
/*
 ***********************************************
	LOADING CSS - JS FILES
 ***********************************************
 */
function arcandia_enqueue_style() {

	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0', 'all' );

	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.12.3', true);
	wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array(), '4.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'arcandia_enqueue_style' );


/*
 ***********************************************
	THEME SUPPORT
 ***********************************************
 */
function arcandia_theme_setup(){
	// Primary Menu
	register_nav_menus( array(
			'primary' => __( 'Arcandia Primary Menu', 'arcandiarecords-shop' ),
	) );

	// Footer Menu
	register_nav_menus( array(
			'footer' => __( 'Arcandia Footer Menu', 'arcandiarecords-shop' ),
	) );

	// Mentions Menu
	register_nav_menus( array(
			'mentions-legales' => __( 'Arcandia Mentions Menu', 'arcandiarecords-shop' ),
	) );

	// Thumbnails 'Image à la une'
	add_theme_support( 'post-thumbnails' );

	// Post Formats
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'woocommerce' );

}

add_action('after_setup_theme', 'arcandia_theme_setup');


/*
 ***********************************************
	REGISTER NAVWALKER MENU
 ***********************************************
 */
require_once get_stylesheet_directory() . '/wp-bootstrap-navwalker.php';



/*
 ***********************************************
	CUSTOMIZER
 ***********************************************
 */

require get_stylesheet_directory().'/inc/customizer-header.php';
require get_stylesheet_directory().'/inc/customizer-home-page.php';
require get_stylesheet_directory().'/inc/customizer-footer.php';


/*
 ***********************************************
 	CHANGE IN STOCK / OUT OF STOCK
 ***********************************************
 */
add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {
   
    // Change In Stock Text
    if ( $_product->is_in_stock() ) {
        $availability['availability'] = __('Available', 'woocommerce');
    }
    // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
    	$availability['availability'] = __('Sold out', 'woocommerce');
    }
    return $availability;
}

/* 
 ***********************************************
	CHANGE THE "Proceed to PayPal" 
 ***********************************************
 */
add_filter( 'gettext', 'custom_paypal_button_text', 20, 3 );
function custom_paypal_button_text( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Proceed to PayPal' :
			$translated_text = __( 'Proceed', 'woocommerce' );
			break;
	}
	return $translated_text;
}


