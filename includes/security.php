<?php
/**
 * Core Security Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Hide WP version strings from generator meta tag
 *
 * @since   0.1.0
 *
 * @uses    the_generator
 *
 * @param   void
 * @return  {string} Empty string
 */
function remove_wp_version_meta_tag() {
   return '';
}
add_filter( 'the_generator', 'remove_wp_version_meta_tag' );
