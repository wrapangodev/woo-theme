<?php
/**
 * Header
 *
 * @package Cozynest
 */

$my_account_url = '';
$shop_url       = '';

if ( class_exists( 'WooCommerce' ) ) {
	$my_account_url = get_permalink( wc_get_page_id( 'myaccount' ) );
	$shop_url       = get_permalink( wc_get_page_id( 'shop' ) );
}

$img_dir = COZYNEST_URI . 'assets/img';

return array(
	'name'          => 'header',
	'title'         => 'Header',
	'blockTypes'    => array( 'core/template-part/header' ),
	'content'       => '<!-- wp:cover {"customOverlayColor":"#c7cfe1","minHeight":50,"contentPosition":"center center","isDark":false,"style":{"color":{"duotone":["#000097","#ff4747"]},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover is-light" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#c7cfe1"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","letterSpacing":"2px"},"color":{"text":"#001844"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#001844;font-size:13px;letter-spacing:2px">SALE CLEARANCE. UP TO 70%.&nbsp;<a href="/shop">LEARN MORE</a>!</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover -->

	<!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
	<div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"hide-on-mobile","layout":{"contentSize":"1170px"}} -->
	<div class="wp-block-column hide-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:spacer {"height":"0px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:0px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
	<div class="wp-block-column" style="flex-basis:15%"><!-- wp:spacer {"height":"3px"} -->
	<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"custom"} -->
	<figure class="wp-block-image size-full"><a href="/"><img src="' . esc_url( $img_dir ) . '/logo.png" alt="" class="wp-image-27"/></a></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:spacer {"height":"6px"} -->
	<div style="height:6px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:navigation {"ref":32,"overlayBackgroundColor":"lite","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"30px"}},"fontSize":"small"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
	<div class="wp-block-group"><!-- wp:search {"label":"Search","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /-->

	<!-- wp:image {"id":28,"width":20,"height":20,"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
	<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><a href="' . esc_url( $my_account_url ) . '"><img src="' . esc_url( $img_dir ) . '/myaccount.png" alt="" class="wp-image-28" style="border-radius:0px" width="20" height="20"/></a></figure>
	<!-- /wp:image -->

	<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"0px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:0px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0px","top":"0px","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"lite","className":"hide-on-desktop","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group hide-on-desktop has-lite-background-color has-background" style="padding-top:0px;padding-right:var(--wp--preset--spacing--20);padding-bottom:0px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:navigation {"ref":32,"overlayBackgroundColor":"lite","style":{"spacing":{"blockGap":"25px"}},"fontSize":"small"} /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":27,"sizeSlug":"full","linkDestination":"custom"} -->
	<figure class="wp-block-image size-full"><a href="/"><img src="' . esc_url( $img_dir ) . '/logo.png" alt="" class="wp-image-27"/></a></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":28,"width":20,"height":20,"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
	<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><a href="' . esc_url( $my_account_url ) . '"><img src="' . esc_url( $img_dir ) . '/myaccount.png" alt="" class="wp-image-28" style="border-radius:0px" width="20" height="20"/></a></figure>
	<!-- /wp:image -->

	<!-- wp:search {"label":"Search","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /-->

	<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","hasHiddenPrice":true} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:separator {"backgroundColor":"grey","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-grey-color has-alpha-channel-opacity has-grey-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->',
	'categories'    => array( 'header' ),
	'viewportWidth' => 1200,
);
