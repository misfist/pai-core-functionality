<?php
/**
 * Core Performance Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Remove query strings from static resources
 *
 * @since   0.1.0
 *
 * @uses    script_loader_src filter
 * @uses    style_loader_src filter
 *
 * @param   {string} $src
 * @return  {string} $parts[0]
 */
function core_functions_remove_script_version( $src ){
   $parts = explode( '?ver', $src );
   return $parts[0];
}
// add_filter( 'script_loader_src', 'core_functions_remove_script_version', 15, 1 );
// add_filter( 'style_loader_src', 'core_functions_remove_script_version', 15, 1 );
