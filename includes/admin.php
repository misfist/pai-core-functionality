<?php
/**
 * Core Admin Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

$admin_role = get_role( 'admin' );
$admin_role->add_cap( 'unfiltered_upload' );
