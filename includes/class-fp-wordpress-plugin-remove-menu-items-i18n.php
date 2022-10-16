<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/flexseth
 * @since      1.0.0
 *
 * @package    Fp_Wordpress_Plugin_Remove_Menu_Items
 * @subpackage Fp_Wordpress_Plugin_Remove_Menu_Items/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fp_Wordpress_Plugin_Remove_Menu_Items
 * @subpackage Fp_Wordpress_Plugin_Remove_Menu_Items/includes
 * @author     Seth Miller <seth@flexperception.com>
 */
class Fp_Wordpress_Plugin_Remove_Menu_Items_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fp-wordpress-plugin-remove-menu-items',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
