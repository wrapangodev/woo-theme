<?php
/**
 * Plugin Name:  Cozynest Sites Library
 * Description:  Import site demos built with Cozynest theme
 * Version:      1.0.0
 * Author:       Cozynest
 * Author URI:   https://cozynest.com
 * License:      GPLv2 or later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  cozynest-sites-library
 *
 * The following code is a derivative work from Merlin WP by the
 * Rich Tabor from ThemeBeans.com & the team at ProteusThemes.com and
 * Envato WordPress Theme Setup Wizard by David Baker.
 *
 * @package cozynest
 */

/**
 * Set constants.
 */
if ( ! defined( 'COZYNEST_SITES_NAME' ) ) {
	define( 'COZYNEST_SITES_NAME', __( 'Cozynest Sites', 'cozynest' ) );
}

if ( ! defined( 'COZYNEST_SITES_VER' ) ) {
	define( 'COZYNEST_SITES_VER', '1.0.0' );
}

if ( ! defined( 'COZYNEST_SITES_FILE' ) ) {
	define( 'COZYNEST_SITES_FILE', __FILE__ );
}

if ( ! defined( 'COZYNEST_SITES_BASE' ) ) {
	define( 'COZYNEST_SITES_BASE', plugin_basename( COZYNEST_SITES_FILE ) );
}

if ( ! defined( 'COZYNEST_SITES_DIR' ) ) {
	define( 'COZYNEST_SITES_DIR', plugin_dir_path( COZYNEST_SITES_FILE ) );
}

if ( ! defined( 'COZYNEST_SITES_URI' ) ) {
	define( 'COZYNEST_SITES_URI', get_template_directory_uri() . '/inc/cozynest-sites-library/' );
}

require_once COZYNEST_SITES_DIR . 'class-cozynest-sites.php';
require_once COZYNEST_SITES_DIR . 'vendor/autoload.php';

/**
 * Set directory locations, text strings, and settings.
 */

$config = array(
	'cozynest_sites_url'   => 'cozynest-sites', // The wp-admin page slug where Merlin WP loads.
	'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
	'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
	'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
	'dev_mode'             => true, // Enable development mode for testing.
	'license_step'         => false, // EDD license activation step.
	'license_required'     => false, // Require the license activation step.
	'license_help_url'     => '', // URL for the 'license-tooltip'.
	'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
	'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
	'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
	'ready_big_button_url' => '', // Link for the big button on the ready step.
);

$strings = array(
	'admin-menu'               => esc_html__( 'Import Demo', 'cozynest' ),

	/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
	'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'cozynest' ),
	'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'cozynest' ),
	'ignore'                   => esc_html__( 'Disable this wizard', 'cozynest' ),

	'btn-skip'                 => esc_html__( 'Skip', 'cozynest' ),
	'btn-next'                 => esc_html__( 'Next', 'cozynest' ),
	'btn-start'                => esc_html__( 'Start', 'cozynest' ),
	'btn-no'                   => esc_html__( 'Cancel', 'cozynest' ),
	'btn-plugins-install'      => esc_html__( 'Install', 'cozynest' ),
	'btn-child-install'        => esc_html__( 'Install', 'cozynest' ),
	'btn-content-install'      => esc_html__( 'Install', 'cozynest' ),
	'btn-import'               => esc_html__( 'Start Import', 'cozynest' ),
	'btn-license-activate'     => esc_html__( 'Activate', 'cozynest' ),
	'btn-license-skip'         => esc_html__( 'Later', 'cozynest' ),

	/* translators: Theme Name */
	'license-header%s'         => esc_html__( 'Activate %s', 'cozynest' ),
	/* translators: Theme Name */
	'license-header-success%s' => esc_html__( '%s is Activated', 'cozynest' ),
	/* translators: Theme Name */
	'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'cozynest' ),
	'license-label'            => esc_html__( 'License key', 'cozynest' ),
	'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'cozynest' ),
	'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'cozynest' ),
	'license-tooltip'          => esc_html__( 'Need help?', 'cozynest' ),

	/* translators: Theme Name */
	'welcome-header%s'         => esc_html__( 'Welcome to %s', 'cozynest' ),
	'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'cozynest' ),
	'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'cozynest' ),
	'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'cozynest' ),

	'child-header'             => esc_html__( 'Install Child Theme', 'cozynest' ),
	'child-header-success'     => esc_html__( 'You\'re good to go!', 'cozynest' ),
	'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'cozynest' ),
	'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'cozynest' ),
	'child-action-link'        => esc_html__( 'Learn about child themes', 'cozynest' ),
	'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'cozynest' ),
	'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'cozynest' ),

	'plugins-header'           => esc_html__( 'Install Plugins', 'cozynest' ),
	'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'cozynest' ),
	'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'cozynest' ),
	'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'cozynest' ),
	'plugins-action-link'      => esc_html__( 'Advanced', 'cozynest' ),

	'import-header'            => esc_html__( 'Import Starter Site', 'cozynest' ),
	'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'cozynest' ),
	'import-action-link'       => esc_html__( 'Advanced', 'cozynest' ),

	'ready-header'             => esc_html__( 'All done. Have fun!', 'cozynest' ),

	/* translators: Theme Author */
	'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by Cozynest.', 'cozynest' ),
	'ready-action-link'        => esc_html__( 'Extras', 'cozynest' ),
	'ready-big-button'         => esc_html__( 'View your website', 'cozynest' ),
	'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', '/', esc_html__( 'Explore Cozynest', 'cozynest' ) ),
	'ready-link-2'             => sprintf( '<a href="https://woocommerce.com/my-account/create-a-ticket/" target="_blank">%2$s</a>', '/contact/', esc_html__( 'Get Theme Support', 'cozynest' ) ),
	'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'cozynest' ) ),
);

$wizard = new Cozynest_Sites( $config, $strings );

require_once COZYNEST_SITES_DIR . 'demos/demos.php';
