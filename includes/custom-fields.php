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
 * Register Custom Fields
 *
 * @since 0.0.1
 *
 * @uses acf_add_local_field_group()
 *
 * @return void
 */
if( function_exists( 'acf_add_local_field_group' ) ) {

  acf_add_local_field_group( array(
  	'key' => 'group_home_content',
  	'title' => __( 'Content Areas', 'pai-core' ),
  	'fields' => array (
  		array (
  			'key' => 'field_hero',
  			'label' => __( 'Hero', 'pai-core' ),
  			'name' => 'hero',
  			'type' => 'group',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'layout' => 'row',
  			'sub_fields' => array (
  				array (
  					'key' => 'field_heading',
  					'label' => __( 'Heading', 'pai-core' ),
  					'name' => 'heading',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array (
  					'key' => 'field_text',
  					'label' => __( 'Text', 'pai-core' ),
  					'name' => 'text',
  					'type' => 'wysiwyg',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'tabs' => 'all',
  					'toolbar' => 'basic',
  					'media_upload' => 0,
  					'delay' => 0,
  				),
  				array (
  					'key' => 'field_link',
  					'label' => __( 'Link', 'pai' ),
  					'name' => 'link',
  					'type' => 'link',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  				),
  			),
  		),
  		array (
  			'key' => 'field_sections',
  			'label' => __( 'Sections', 'pai-core' ),
  			'name' => 'sections',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => 'field_sections',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'row',
  			'button_label' => __( 'Add Section', 'pai-core' ),
  			'sub_fields' => array (
  				array (
  					'key' => 'field_section_heading',
  					'label' => __( 'Section Heading', 'pai-core' ),
  					'name' => 'section_heading',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array (
  					'key' => 'field_section_id',
  					'label' => __( 'Section ID', 'pai-core' ),
  					'name' => 'section_id',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => 'id',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array (
  					'key' => 'field_section_items',
  					'label' => __( 'Section Items', 'pai-core' ),
  					'name' => 'section_items',
  					'type' => 'flexible_content',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'layouts' => array (
  						'layout_section_item' => array (
  							'key' => 'layout_section_item',
  							'name' => 'section_item',
  							'label' => __( 'Section Item', 'pai-core' ),
  							'display' => 'row',
  							'sub_fields' => array (
  								array (
  									'key' => 'field_heading',
  									'label' => __( 'Heading', 'pai-core' ),
  									'name' => 'heading',
  									'type' => 'text',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => 0,
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'default_value' => '',
  									'placeholder' => '',
  									'prepend' => '',
  									'append' => '',
  									'maxlength' => '',
  								),
  								array (
  									'key' => 'field_text',
  									'label' => __( 'Text', 'pai-core' ),
  									'name' => 'text',
  									'type' => 'textarea',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => 0,
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'default_value' => '',
  									'placeholder' => '',
  									'maxlength' => '',
  									'rows' => '',
  									'new_lines' => '',
  								),
  								array (
  									'key' => 'field_link',
  									'label' => __( 'Link', 'pai-core' ),
  									'name' => 'link',
  									'type' => 'link',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => 0,
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'return_format' => 'array',
  								),
  								array (
  									'key' => 'field_image',
  									'label' => __( 'Image', 'pai-core' ),
  									'name' => 'image',
  									'type' => 'image',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => 0,
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'return_format' => 'array',
  									'preview_size' => 'thumbnail',
  									'library' => 'all',
  									'min_width' => '',
  									'min_height' => '',
  									'min_size' => '',
  									'max_width' => '',
  									'max_height' => '',
  									'max_size' => '',
  									'mime_types' => '',
  								),
  							),
  							'min' => '',
  							'max' => '',
  						),
  					),
  					'button_label' => __( 'Add Section Item', 'pai-core' ),
  					'min' => '',
  					'max' => '',
  				),
  			),
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'page_type',
  				'operator' => '==',
  				'value' => 'front_page',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

}
