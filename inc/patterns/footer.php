<?php
/**
 * Footer
 *
 * @package Cozynest
 */

$img_dir = COZYNEST_URI . 'assets/img';

return array(
	'name'          => 'footer',
	'title'         => 'Footer',
	'blockTypes'    => array( 'core/template-part/footer' ),
	'content'       => '<!-- wp:group {"style":{"color":{"background":"#f8f8f8"},"spacing":{"padding":{"top":"74px","bottom":"60px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:74px;padding-bottom:60px"><!-- wp:columns {"style":{"spacing":{"blockGap":"40px"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"31.1%","style":{"spacing":{"blockGap":"25px"}}} -->
	<div class="wp-block-column" style="flex-basis:31.1%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
	<p style="font-size:16px;font-style:normal;font-weight:500">About Store</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"}}} -->
	<h4 style="font-size:14px;font-style:normal;font-weight:400;line-height:1.7">Our mission is to offer you the best selection of<br>Nordic design, whether well-established or<br>up-and-coming.</h4>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"29%","style":{"spacing":{"blockGap":"15px"}}} -->
	<div class="wp-block-column" style="flex-basis:29%"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"40px"}}} -->
	<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"style":{"spacing":{"blockGap":"15px"}}} -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","fontStyle":"normal","fontWeight":"500","fontSize":"16px"}}} -->
	<p style="font-size:16px;font-style:normal;font-weight:500;letter-spacing:0.08em">Navigate</p>
	<!-- /wp:paragraph -->

	<!-- wp:navigation {"ref":354,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"16px"}},"fontSize":"small"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"blockGap":"15px"}}} -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0em","fontStyle":"normal","fontWeight":"500","fontSize":"16px"}}} -->
	<p style="font-size:16px;font-style:normal;font-weight:500;letter-spacing:0em">Informations</p>
	<!-- /wp:paragraph -->

	<!-- wp:navigation {"ref":148,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"16px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"35px"}}} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"17px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<p style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px;font-style:normal;font-weight:500">Newsletter</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"2"}}} -->
	<p style="font-size:14px;line-height:2">Subscribe to get notified about product launches,<br>special offers and news.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:shortcode -->
	[contact-form-7 id="1145" title="contact footer"]
	<!-- /wp:shortcode --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"background":"#c7cfe1"},"spacing":{"padding":{"top":"13px","bottom":"11px","right":"0px","left":"0px"}}},"layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
	<div class="wp-block-group has-background" style="background-color:#c7cfe1;padding-top:13px;padding-right:0px;padding-bottom:11px;padding-left:0px"><!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"layout":{"inherit":false}} -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0px","right":"15px","bottom":"5px","left":"15px"}}},"layout":{"inherit":false,"contentSize":""}} -->
	<div class="wp-block-column" style="padding-top:0px;padding-right:15px;padding-bottom:5px;padding-left:15px;flex-basis:100%"><!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontSize":"14px"}}} -->
	<p style="font-size:14px">©2022 Cozynest. All Rights Reserved.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0px","right":"15px","bottom":"0px","left":"15px"}}}} -->
	<div class="wp-block-column" style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px;flex-basis:100%"><!-- wp:image {"align":"right","id":1226,"width":280,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignright size-full is-resized"><img src="' . esc_url( $img_dir ) . '/payment-methods.png" alt="" class="wp-image-1226" width="280" height="24"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
	'categories'    => array( 'footer' ),
	'viewportWidth' => 1200,
);
