<?php
/**
 * Cozynest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Cozynest
 * @since Cozynest 1.0
 */

/**
 * Set constants.
 */
if ( ! defined( 'COZYNEST_NAME' ) ) {
	define( 'COZYNEST_NAME', __( 'Cozynest', 'cozynest' ) );
}

if ( ! defined( 'COZYNEST_VER' ) ) {
	define( 'COZYNEST_VER', '1.0.0' );
}

if ( ! defined( 'COZYNEST_FILE' ) ) {
	define( 'COZYNEST_FILE', __FILE__ );
}

if ( ! defined( 'COZYNEST_BASE' ) ) {
	define( 'COZYNEST_BASE', plugin_basename( COZYNEST_FILE ) );
}

define( 'COZYNEST_DIR', get_template_directory() . '/' );
define( 'COZYNEST_URI', get_template_directory_uri() . '/' );

add_action( 'after_setup_theme', 'cozynest_support' );
add_action( 'woocommerce_init', 'cozynest_woocommerce_setup' );

add_action( 'woocommerce_checkout_before_order_review_heading', 'cozynest_woocommerce_order_review_open_tag' );
add_action( 'woocommerce_checkout_after_order_review', 'cozynest_woocommerce_close_tag' );
add_action( 'woocommerce_checkout_before_customer_details', 'cozynest_woocommerce_customer_details_open_tag' );
add_action( 'woocommerce_checkout_after_customer_details', 'cozynest_woocommerce_close_tag' );

add_action( 'wp_enqueue_scripts', 'cozynest_scripts' );
add_action( 'enqueue_block_editor_assets', 'cozynest_block_editor_assets' );

// Removing coupon on checkout page.
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

// Removing & adding checkout payment form.
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment', 9 );

// Adding coupon through ajax on checkout page.
add_action( 'wc_ajax_checkout_coupon', 'cozynest_woocommerce_checkout_coupon', 10 );

add_filter( 'woocommerce_gallery_thumbnail_size', 'cozynest_woocommerce_gallery_thumbnail_size' );

add_filter( 'use_block_editor_for_post_type', 'cozynest_enable_block_editor_product', 10, 2 );
add_filter( 'woocommerce_cart_item_name', 'cozynest_woocommerce_cart_item_name', 10, 3 );
add_filter( 'woocommerce_order_item_name', 'cozynest_woocommerce_order_item_name', 10, 3 );

add_filter( 'woocommerce_blocks_product_grid_item_html', 'cozynest_woocommerce_blocks_product_grid_item_html', 10, 3 );

if ( ! function_exists( 'cozynest_support' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Cozynest 1.0
	 *
	 * @return void
	 */
	function cozynest_support() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cozynest, use a find and replace
		 * to change 'cozynest' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cozynest', COZYNEST_DIR . 'languages' );

		$defaults = array(
			'height'      => 26,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		);

		add_theme_support( 'custom-logo', $defaults );

		// Declaring WooCommerce support.
		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
}

if ( ! function_exists( 'cozynest_remove_theme_support' ) ) {
	/**
	 * Cozynest remove theme support
	 */
	function cozynest_remove_theme_support() {
		// Remove support for product gallery slider.
		remove_theme_support( 'wc-product-gallery-slider' );
	}
}

if ( ! function_exists( 'cozynest_woocommerce_setup' ) ) {
	/**
	 * Cozynest Woocommerce Setup
	 */
	function cozynest_woocommerce_setup() {
		// Removing Wocommerce CSS.
		add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
	}
}

if ( ! function_exists( 'cozynest_woocommerce_checkout_coupon' ) ) {
	/**
	 * Cozynest woocommerce checkout coupon
	 */
	function cozynest_woocommerce_checkout_coupon() {
		if ( ! wc_coupons_enabled() ) {
			return;
		}

		?>
		<div class="boostifytheme_checkout_coupon coupon">
			<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php echo esc_attr_x( 'Coupon code', 'Checkout coupon code', 'cozynest' ); ?>" />
			<a class="coupon_submit" href="#"><?php echo esc_html_e( 'Apply coupon', 'cozynest' ); ?></a>
		</div>
		<?php
	}
}


if ( ! function_exists( 'cozynest_woocommerce_order_review_open_tag' ) ) {
	/**
	 * Cozynest woocommerce order review open tag
	 */
	function cozynest_woocommerce_order_review_open_tag() {
		?>
		<div class="boostifytheme-order-review">
		<?php
	}
}

if ( ! function_exists( 'cozynest_woocommerce_customer_details_open_tag' ) ) {
	/**
	 * Cozynest woocommerce customer details open tag
	 */
	function cozynest_woocommerce_customer_details_open_tag() {
		?>
		<div class="boostifytheme-customer-details">
		<?php
	}
}

if ( ! function_exists( 'cozynest_woocommerce_close_tag' ) ) {
	/**
	 * Cozynest woocommerce close tag
	 */
	function cozynest_woocommerce_close_tag() {
		?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'cozynest_scripts' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since Cozynest 1.0
	 *
	 * @return void
	 */
	function cozynest_scripts() {

		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'cozynest-style',
			COZYNEST_URI . 'style.css',
			array(),
			$version_string
		);
		wp_style_add_data( 'cozynest-style', 'rtl', 'replace' );

		wp_dequeue_style( 'wc-blocks-style' );

		// Enqueueing JS.
		wp_enqueue_script(
			'cozynest-script',
			COZYNEST_URI . 'assets/js/script.js',
			array( 'jquery' ),
			wp_get_theme()->get( 'Version' ),
			true
		);

		wp_localize_script(
			'cozynest-script',
			'cozynest_script',
			array(
				'imgdir' => COZYNEST_URI . 'assets/img',
			)
		);

		wp_register_script(
			'cozynest-single-product-zoom',
			COZYNEST_URI . 'assets/js/single-product-zoom.js',
			array( 'jquery', 'wc-single-product' ),
			wp_get_theme()->get( 'Version' ),
			true
		);

		if ( class_exists( 'WooCommerce' ) ) {
			if ( is_product() ) {
				wp_enqueue_script( 'cozynest-single-product-zoom' );
			}
		}
	}
}

if ( ! function_exists( 'cozynest_block_editor_assets' ) ) {
	/**
	 * Cozynest block editor assets
	 */
	function cozynest_block_editor_assets() {
		// Register block editor stylesheet.
		wp_enqueue_style(
			'cozynest-block-editor-style',
			COZYNEST_URI . 'assets/css/block-editor.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_style_add_data( 'cozynest-block-editor-style', 'rtl', 'replace' );

		// Enqueue Styles.
		wp_deregister_style( 'wc-blocks-editor-style' );
		wp_deregister_style( 'wc-blocks-style' );
		wp_dequeue_style( 'wc-blocks-editor-style' );
		wp_dequeue_style( 'wc-blocks-style' );
	}
}


if ( ! function_exists( 'cozynest_enable_block_editor_product' ) ) {
	/**
	 * Enable gutenberg for woocommerce
	 *
	 * @param  [type] $can_edit  type.
	 * @param  [type] $post_type type.
	 */
	function cozynest_enable_block_editor_product( $can_edit, $post_type ) {
		if ( 'product' === $post_type ) {
			$can_edit = true;
		}

		return $can_edit;
	}
}

if ( ! function_exists( 'cozynest_woocommerce_cart_item_name' ) ) {
	/**
	 * Cozynest woocommerce cart item name
	 *
	 * @param  [type] $product_name  type.
	 * @param  [type] $cart_item     type.
	 * @param  [type] $cart_item_key type.
	 */
	function cozynest_woocommerce_cart_item_name( $product_name, $cart_item, $cart_item_key ) {
		if ( is_checkout() ) {
			$product = $cart_item['data'];

			echo wp_kses(
				$product->get_image(),
				array(
					'img' => array(
						'src'     => array(),
						'srcset'  => array(),
						'class'   => array(),
						'width'   => array(),
						'height'  => array(),
						'loading' => array(),
						'alt'     => array(),
					),
				)
			);
			?>

			<span><?php echo wp_kses_post( $product_name ); ?></span>

			<?php
		} else {
			echo wp_kses_post( $product_name );
		}
	}
}

if ( ! function_exists( 'cozynest_woocommerce_order_item_name' ) ) {
	/**
	 * Cozynest woocommerce order item name
	 *
	 * @param  [type] $product_name type.
	 * @param  [type] $item         type.
	 * @param  [type] $is_visible   type.
	 */
	function cozynest_woocommerce_order_item_name( $product_name, $item, $is_visible ) {
		$item_data = $item->get_data();

		$item_id = ( 0 !== $item_data['variation_id'] ) ? $item_data['variation_id'] : $item_data['product_id'];

		$product = wc_get_product( $item_id );

		echo wp_kses(
			$product->get_image(),
			array(
				'img' => array(
					'src'     => array(),
					'srcset'  => array(),
					'class'   => array(),
					'width'   => array(),
					'height'  => array(),
					'loading' => array(),
					'alt'     => array(),
				),
			)
		);
		?>

		<span>
			<?php echo wp_kses_post( $product_name ); ?>
		</span>
		<?php
	}
}

if ( ! function_exists( 'cozynest_woocommerce_gallery_thumbnail_size' ) ) {
	/**
	 * Cozynest woocommerce gallery thumbnail size
	 *
	 * @param  [type] $size type.
	 */
	function cozynest_woocommerce_gallery_thumbnail_size( $size ) {
		return 'woocommerce_single';
	}
}

/**
 * Cozynest woocommerce blocks product grid item html
 *
 * @param  [type] $html    type.
 * @param  [type] $data    type.
 * @param  [type] $product type.
 */
function cozynest_woocommerce_blocks_product_grid_item_html( $html, $data, $product ) {
	return "
        <li class=\"wc-block-grid__product\">
            <a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
                {$data->image}
				{$data->badge}
				{$data->title}
				{$data->rating}
				{$data->price}
            </a>
            {$data->button}
        </li>
    ";
}

// Add block patterns.
require COZYNEST_DIR . 'inc/block-patterns.php';

/**
 * Change the breadcrumb separator
 *
 * @param  [type] $defaults type.
 */
function cozynest_wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'.
	return array(
		'delimiter'   => '<span class="delimeter"></span>',
		'wrap_before' => '<nav class="woocommerce-breadcrumb">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => _x( 'Home', 'breadcrumb', 'cozynest' ),
	);
}
add_filter( 'woocommerce_breadcrumb_defaults', 'cozynest_wcc_change_breadcrumb_delimiter' );

add_action( 'customize_register', '__return_true' );

require_once COZYNEST_DIR . 'inc/cozynest-sites-library/cozynest-sites.php';
