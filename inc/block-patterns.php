<?php
/**
 * Block Patterns
 *
 * @package cozynest
 */

add_action( 'init', 'cozynest_register_block_patterns', 9 );

/**
 * Cozynest register block patterns
 */
function cozynest_register_block_patterns() {
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'cozynest' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'cozynest' ) ),
		'header'   => array( 'label' => __( 'Headers', 'cozynest' ) ),
		'card'     => array( 'label' => __( 'Cards', 'cozynest' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'cozynest' ) ),
		'products' => array( 'label' => __( 'Products', 'cozynest' ) )
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Cozynest 1.0
	 */
	$block_pattern_categories = apply_filters( 'cozynest_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'four-columns-image-and-text',
		'two-columns-image-and-details',
		'two-columns-collage-image-with-title',
		'split-columns-image-and-text-on-background',
		'two-columns-collage-image-and-text',
		'three-columns-image-with-title-centered',
		'simple-single-column-video',
		'three-columns-image-with-title',
		'two-columns-image-and-text',
		'split-columns-image-and-text-on-background-dark',
		'collage-image-with-text',
		'three-columns-posts',
		'split-section-image-and-text',
		'simple-cover-on-background',
		'two-columns-image-and-text-with-title',
		'split-columns-image-and-text-dark',
		'one-column-text-and-two-columns-image-text',
		'three-columns-products',
		'four-columns-products',
		'three-columns-image-and-text',
		'top-cover',
		'shop-cover',
		'shop-banner',
		'footer',
		'header'
	);

	/**
	 * Filters the theme block patterns
	 *
	 * @since Cozynest 1.0
	 */
	$block_patterns = apply_filters( 'cozynest_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'cozynest/' . $block_pattern,
			require $pattern_file
		);
	}
}
