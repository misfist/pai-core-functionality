<?php
/**
 * Custom Fields Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.0.1
 * @license    GPL-2.0+
 */

/**
 * Add Attachment Fields
 *
 * @since 0.0.1
 *
 * @uses get_post_meta()
 * @uses attachment_fields_to_edit filter
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/attachment_fields_to_edit
 *
 * @param array $fields
 * @param obj $post
 * @return array $fields
 */
function democrats_core_attachment_fields_to_edit( $fields, $post ) {
    $fields['attachment_attribution'] = array(
        'label' => __( 'Attribution', 'pai-core' ),
        'input' => 'textarea',
        'value' => get_post_meta( $post->ID, '_attachment_attribution', true )
    );
    return $fields;
}
add_filter( 'attachment_fields_to_edit', 'democrats_core_attachment_fields_to_edit', 11, 2 );

/**
 * Save Attachment Field Data
 *
 * @since 0.0.1
 *
 * @uses update_post_meta()
 * @uses attachment_fields_to_save filter
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/attachment_fields_to_save
 *
 * @param array $post
 * @param array $attachment
 * @return array $post
 */
function democrats_core_attachment_fields_to_save( $post, $attachment ) {
    if( isset( $attachment['attachment_attribution'] ) ){
        update_post_meta( $post['ID'], '_attachment_attribution', $attachment['attachment_attribution'] );
    }
    return $post;
}
add_filter( 'attachment_fields_to_save', 'democrats_core_attachment_fields_to_save', 11, 2 );
