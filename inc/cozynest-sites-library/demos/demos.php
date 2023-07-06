<?php
/**
 * Define the demo import files (local files).
 *
 * You have to use the same filter as in above example,
 * but with a slightly different array keys: local_*.
 * The values have to be absolute paths (not URLs) to your import files.
 * To use local import files, that reside in your theme folder,
 * please use the below code.
 * Note: make sure your import files are readable!
 */

function cozynest_sites_local_import_files() {
	return array(
		array(
			'id'                         => 0,
			'import_file_name'           => 'Cozynest',
			'import_file_url'            => 'https://cozynest.boostifythemes.com/wp-content/uploads/demo/demo-content.xml',
			'import_widget_file_url'     => 'https://cozynest.boostifythemes.com/wp-content/uploads/demo/widgets.wie',
			'import_customizer_file_url' => 'https://cozynest.boostifythemes.com/wp-content/uploads/demo/customizer.dat',
			'import_preview_image_url'   => get_stylesheet_directory_uri() . '/screenshot.png',
			'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'cozynest' ),
			'preview_url'                => 'https://cozynest.boostifythemes.com/',
			'homepage'                   => 'Home',
			'blog_page'                  => 'Our Blog',
			'primary_menu'               => 'Header Primary',
			'footer_menu'                => 'Footer',
			'type'                       => 'free',
			'page_builder'               => 'elementor',
			'font_page'                  => 15,
			'page'                       => array(
				'15' => array(
					'title'   => 'Home',
					'id'      => 15,
					'preview' => get_stylesheet_directory_uri() . '/screenshot.png',
				),
			),
		),
	);
}
add_filter( 'cozynest_sites_import_files', 'cozynest_sites_local_import_files' );

/**
 * Execute custom code after the whole import has finished.
 */
function cozynest_sites_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	// Set logo in customizer.
	set_theme_mod( 'logo_img', get_template_directory_uri() . '/assets/img/logo.png' );

	set_theme_mod(
		'nav_menu_locations',
		array(
			'main-menu' => $main_menu->term_id,
		)
	);

	update_option( 'posts_per_page', 9 );
	update_option( 'permalink_structure', '/%postname%/' );

	// Set Front page.
	$font_page = get_page_by_title( 'Home' );
	$post_page = get_page_by_title( 'Our Blog' );
	if ( isset( $font_page->ID ) ) {
		update_option( 'page_on_front', $font_page->ID );
		update_option( 'show_on_front', 'page' );
	}

	// Set post page.
	if ( isset( $post_page->ID ) ) {
		update_option( 'page_for_posts', $post_page->ID );
		update_option( 'show_on_front', 'page' );
	}
}
add_action( 'merlin_after_all_import', 'cozynest_sites_after_import_setup' );
