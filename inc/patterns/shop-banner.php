<?php
/**
 * Banner Shop
 *
 * @package Cozynest
 */

$img_dir = COZYNEST_URI . 'assets/img';

return array(
	'name'          => 'shop-banner',
	'title'         => 'Shop Banner',
	'content'       => '<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"4.5%"},"blockGap":"0px"}}} -->
	<div class="wp-block-columns new-colums-banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:4.5%"><!-- wp:column {"layout":{"inherit":false}} -->
	<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( $img_dir ) . '/cover-bannershop.jpg","id":1562,"dimRatio":0,"focalPoint":{"x":"0.50","y":"0.50"},"minHeight":200,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"70px"}}}} -->
	<div class="wp-block-cover banner-shop" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:70px;min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1562" alt="" src="' . esc_url( $img_dir ) . '/cover-bannershop.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"36px","lineHeight":"1","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.02em"}}} -->
	<h1 style="font-size:36px;font-style:normal;font-weight:500;line-height:1;letter-spacing:0.02em">Redefine<br>Your<br>Home</h1>
	<!-- /wp:heading --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
	'categories'    => array( 'featured' ),
	'viewportWidth' => 870,
);
