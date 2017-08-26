<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           ACF_Flex_Layouts
 *
 * @wordpress-plugin
 * Plugin Name:       ACF Flex Layouts
 * Plugin URI:        https://github.com/Clark-Nikdel-Powell/ACF-Flex-Layouts/
 * Description:       A library of pre-built flexible content layouts for ACF.
 * Version:           1.1.7
 * Author:            CNP
 * Author URI:        http://cnpagency.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf-flex-layouts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-acf-flex-layouts-activator.php
 */
function activate_acf_flex_layouts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-flex-layouts-activator.php';
	ACF_Flex_Layouts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-acf-flex-layouts-deactivator.php
 */
function deactivate_acf_flex_layouts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-flex-layouts-deactivator.php';
	ACF_Flex_Layouts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_acf_flex_layouts' );
register_deactivation_hook( __FILE__, 'deactivate_acf_flex_layouts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acf-flex-layouts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acf_flex_layouts() {

	$plugin = new ACF_Flex_Layouts();
	$plugin->run();

}
run_acf_flex_layouts();
