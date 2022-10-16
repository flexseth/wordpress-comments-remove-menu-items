<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/flexseth
 * @since             1.0.0
 * @package           Fp_Wordpress_Plugin_Remove_Menu_Items
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Remove Menu Items
 * Plugin URI:        https://https://github.com/flexseth/wordpress-comments-remove-menu-items
 * Description:       Remove all menu items from WordPress Admin Dashboard for Comments.
 * Version:           1.0.0
 * Author:            Seth Miller
 * Author URI:        https://github.com/flexseth
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fp-wordpress-plugin-remove-menu-items
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FP_WORDPRESS_PLUGIN_REMOVE_MENU_ITEMS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fp-wordpress-plugin-remove-menu-items-activator.php
 */
function activate_fp_wordpress_plugin_remove_menu_items() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-plugin-remove-menu-items-activator.php';
	Fp_Wordpress_Plugin_Remove_Menu_Items_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fp-wordpress-plugin-remove-menu-items-deactivator.php
 */
function deactivate_fp_wordpress_plugin_remove_menu_items() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-plugin-remove-menu-items-deactivator.php';
	Fp_Wordpress_Plugin_Remove_Menu_Items_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fp_wordpress_plugin_remove_menu_items' );
register_deactivation_hook( __FILE__, 'deactivate_fp_wordpress_plugin_remove_menu_items' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fp-wordpress-plugin-remove-menu-items.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fp_wordpress_plugin_remove_menu_items() {

	$plugin = new Fp_Wordpress_Plugin_Remove_Menu_Items();
	$plugin->run();

}
run_fp_wordpress_plugin_remove_menu_items();
