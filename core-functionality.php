<?php
/**
 * Plugin Name:     PAI Core Functionality
 * Plugin URI:      https://github.com/misfist/pai-core-functionality
 * Description:     Core functions for the PAI project.
 * Author:          Pea
 * Author URI:      https://github.com/misfist
 * Text Domain:     pai-core
 * Domain Path:     /languages
 * Version:         0.1.4
 *
 * @package         PAI_Core_Functionality
 */

 if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Directory
 *
 * @since 0.1.0
 */
define( 'SITE_CORE_DIR', dirname( __FILE__ ) );

/**
 * Load Additional Files
 *
 * @since 0.1.0
 */
require_once( 'includes/security.php' );
require_once( 'includes/performance.php' );

require_once( 'includes/helpers.php' );
require_once( 'includes/custom-post-types.php' );
require_once( 'includes/custom-fields.php' );
require_once( 'includes/admin.php' );
require_once( 'includes/public.php' );

/**
 * Register Activation Hook
 * This hooks runs when plugin is activated
 *
 * @since 0.1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_activation_hook
 *
 * @return void
 */
function pai_core_activate() {
  do_action( 'pai_core_activate' );
}
register_activation_hook( __FILE__, 'pai_core_activate' );
