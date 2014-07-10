<?php
/**
 * @package   One_Click_Convert
 * @author    Leadrush Ltd. <support@reallysuccessful.com>
 * @license   GPL-2.0+
 * @link      http://leadrushsupport.com/
 * @copyright 2014 Leadrush Ltd.
 *
 * @wordpress-plugin
 * Plugin Name:			One Click Convert
 * Plugin URI:        	http://oneclickconvert.com
 * Description:       	Load your embed code easily in Wordpress
 * Version:           	1.0.0
 * Author:       		Leadrush Ltd.
 * Author URI:       	http://leadrushsupport.com/
 * Text Domain:       	one-click-convert
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/leadrush/wordpress-oneclickconvert
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/


require_once( plugin_dir_path( __FILE__ ) . 'public/class-one-click-convert.php' );

register_activation_hook( __FILE__, array( 'One_Click_Convert', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'One_Click_Convert', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'One_Click_Convert', 'get_instance' ) );


if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-one-click-convert-admin.php' );
	add_action( 'plugins_loaded', array( 'One_Click_Convert_Admin', 'get_instance' ) );

}
