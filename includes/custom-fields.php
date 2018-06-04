<?php
/**
 * Custom Fields Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Register Custom Fields
 *
 * @since 0.1.0
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
  					'key' => 'field_hero_heading',
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
  					'key' => 'field_hero_text',
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
  					'key' => 'field_hero_link',
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

          /* Condition Field */
          array (
  					'key' => 'field_section_type',
  					'label' => __( 'Section Type', 'pai-core' ),
  					'name' => 'section_type',
  					'type' => 'radio',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'choices' => array (
  						'manual' => __( 'Manual', 'pai-core' ),
  						'dynamic' => __( 'Dynamic Post List', 'pai-core' ),
  					),
            'allow_null' => 0,
  					'other_choice' => 0,
  					'save_other_choice' => 0,
  					'default_value' => 'manual',
  					'layout' => 'horizontal',
  					'return_format' => 'value',
  				),

          /* Dynamic Post List Fields */
          array (
            'key' => 'field_display',
            'label' => __( 'Display', 'pai-core' ),
            'name' => 'display',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
              array (
                array (
                  'field' => 'field_section_type',
                  'operator' => '==',
                  'value' => 'dynamic',
                ),
              ),
            ),
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array (
              'grid' => __( 'Grid', 'pai-core' ),
              'slide' => __( 'Slider', 'pai-core' ),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'grid',
            'layout' => 'horizontal',
            'return_format' => 'value',
          ),

          /* Manual Entry Fields */
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
                    'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'manual',
  											),
  										),
  									),
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
                    'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'manual',
  											),
  										),
  									),
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
  									'key' => 'field_shortcode',
  									'label' => __( 'Shortcode', 'pai-core' ),
  									'name' => 'shortcode',
  									'type' => 'text',
  									'instructions' => __( 'Use this field to display a shortcode', 'pai-core' ),
  									'required' => 0,
                    'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'manual',
  											),
  										),
  									),
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
  									'key' => 'field_link',
  									'label' => __( 'Link', 'pai-core' ),
  									'name' => 'link',
  									'type' => 'link',
  									'instructions' => '',
  									'required' => 0,
                    'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'manual',
  											),
  										),
  									),
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
                    'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'manual',
  											),
  										),
  									),
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

                  array (
  									'key' => 'field_post_type',
  									'label' => __( 'Post Type', 'pai-core' ),
  									'name' => 'post_type',
  									'type' => 'select',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
                    'wrapper' => array (
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'choices' => array (
                    ),
                    'default_value' => array (
                    ),
                    'allow_null' => 1,
                    'multiple' => 1,
                    'ui' => 1,
                    'ajax' => 0,
                    'return_format' => 'value',
                    'placeholder' => '',
  								),

  								array (
  									'key' => 'field_posts_per_page',
  									'label' => __( 'Number of Posts', 'pai-core' ),
  									'name' => 'posts_per_page',
  									'type' => 'number',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'default_value' => 3,
  									'placeholder' => '',
  									'prepend' => '',
  									'append' => '',
  									'min' => '',
  									'max' => '',
  									'step' => '',
  								),
  								array (
  									'key' => 'field_post_tag',
  									'label' => __( 'Tag', 'pai-core' ),
  									'name' => 'post_tag',
  									'type' => 'taxonomy',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'taxonomy' => 'post_tag',
  									'field_type' => 'select',
  									'allow_null' => 1,
  									'add_term' => 1,
  									'save_terms' => 1,
  									'load_terms' => 0,
  									'return_format' => 'id',
  									'multiple' => 0,
  								),
  								array (
  									'key' => 'field_category',
  									'label' => __( 'Category', 'pai-core' ),
  									'name' => 'category',
  									'type' => 'taxonomy',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'taxonomy' => 'category',
  									'field_type' => 'select',
  									'allow_null' => 1,
  									'add_term' => 1,
  									'save_terms' => 1,
  									'load_terms' => 0,
  									'return_format' => 'id',
  									'multiple' => 0,
  								),
  								array (
  									'key' => 'field_series',
  									'label' => __( 'Series', 'pai-core' ),
  									'name' => 'series',
  									'type' => 'taxonomy',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'taxonomy' => 'series',
  									'field_type' => 'select',
  									'allow_null' => 1,
  									'add_term' => 1,
  									'save_terms' => 1,
  									'load_terms' => 0,
  									'return_format' => 'id',
  									'multiple' => 0,
  								),
  								array (
  									'key' => 'field_display_featured_image',
  									'label' => __( 'Display Featured Image?', 'pai-core' ),
  									'name' => 'display_featured_image',
  									'type' => 'true_false',
  									'instructions' => '',
  									'required' => 0,
  									'conditional_logic' => array (
  										array (
  											array (
  												'field' => 'field_section_type',
  												'operator' => '==',
  												'value' => 'dynamic',
  											),
  										),
  									),
  									'wrapper' => array (
  										'width' => '',
  										'class' => '',
  										'id' => '',
  									),
  									'message' => '',
  									'default_value' => 1,
  									'ui' => 0,
  									'ui_on_text' => '',
  									'ui_off_text' => '',
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

  /* Related Content */
  acf_add_local_field_group( array(
    'key' => 'group_related_content',
    'title' => __( 'Related Content', 'pai-core' ),
    'fields' => array (
      array (
        'key' => 'field_related_content',
        'label' => __( 'Related Content', 'pai-core' ),
        'name' => 'related_content',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array (
          0 => 'post',
          1 => 'report',
        ),
        'taxonomy' => array (
        ),
        'filters' => array (
          0 => 'search',
          1 => 'post_type',
          2 => 'taxonomy',
        ),
        'elements' => array (
          0 => 'featured_image',
        ),
        'min' => '',
        'max' => 3,
        'return_format' => 'object',
      ),
      array (
        'key' => 'field_related_press',
        'label' => __( 'Related Press', 'pai-core' ),
        'name' => 'related_press',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array (
          0 => 'post',
          1 => 'report',
        ),
        'taxonomy' => array (
          0 => 'category:press-mention',
        ),
        'filters' => array (
          0 => 'search',
          1 => 'post_type',
        ),
        'elements' => array (
          0 => 'featured_image',
        ),
        'min' => '',
        'max' => 3,
        'return_format' => 'object',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'report',
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

  /* Project Category Fields */
  acf_add_local_field_group( array(
    'key' => 'group_projects',
    'title' => __( 'Projects', 'pai-core' ),
    'fields' => array(
    array(
    	'key' => 'field_url',
    	'label' => __( 'URL', 'pai-core' ),
    	'name' => 'url',
    	'type' => 'url',
    	'instructions' => __( 'Enter project URL', 'pai-core' ),
    	'required' => 0,
    	'conditional_logic' => 0,
    	'wrapper' => array(
    		'width' => '',
    		'class' => '',
    		'id' => '',
    	),
    	'default_value' => '',
    	'placeholder' => 'https://littlesis.org',
    ),
    ),
    'location' => array(
  		array(
  			array(
  				'param' => 'post_category',
  				'operator' => '==',
  				'value' => 'category:project',
  			),
  		),
  		array(
  			array(
  				'param' => 'post_category',
  				'operator' => '==',
  				'value' => 'category:projects',
  			),
  		),
  	),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'field',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    ));

    /* Default Page */
    acf_add_local_field_group( array(
    	'key' => 'group_page',
    	'title' => __( 'Secondary Page Content', 'pai-core' ),
    	'fields' => array(
    		array(
    			'key' => 'field_secondary_content',
    			'label' => __( 'Secondary Content', 'pai-core' ),
    			'name' => 'secondary_content',
    			'type' => 'group',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'layout' => 'block',
    			'sub_fields' => array(
    				array(
    					'key' => 'field_title',
    					'label' => __( 'Title', 'pai-core' ),
    					'name' => 'title',
    					'type' => 'text',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
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
    				array(
    					'key' => 'field_content',
    					'label' => __( 'Content', 'pai-core' ),
    					'name' => 'content',
    					'type' => 'wysiwyg',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
    						'width' => '',
    						'class' => '',
    						'id' => '',
    					),
    					'default_value' => '',
    					'tabs' => 'all',
    					'toolbar' => 'full',
    					'media_upload' => 1,
    					'delay' => 0,
    				),
    			),
    		),
    	),
      'location' => array(
    		array(
    			array(
    				'param' => 'post_template',
    				'operator' => '==',
    				'value' => 'default',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'seamless',
    	'label_placement' => 'top',
    	'instruction_placement' => 'label',
    	'hide_on_screen' => '',
    	'active' => 1,
    	'description' => '',
    ));


    /* Team Members */
    acf_add_local_field_group(array(
    	'key' => 'group_team',
    	'title' => __( 'Team', 'pai-core' ),
    	'fields' => array(
    		array(
    			'key' => 'field_team_members',
    			'label' => __( 'Team Members', 'pai-core' ),
    			'name' => 'team_members',
    			'type' => 'repeater',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'collapsed' => 'field_team',
    			'min' => 0,
    			'max' => 0,
    			'layout' => 'row',
    			'button_label' => __( 'Add Team Member', 'pai-core' ),
    			'sub_fields' => array(
    				array(
    					'key' => 'field_team',
    					'label' => __( 'Name', 'pai-core' ),
    					'name' => 'name',
    					'type' => 'text',
    					'instructions' => '',
    					'required' => 1,
    					'conditional_logic' => 0,
    					'wrapper' => array(
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
    				array(
    					'key' => 'field_role',
    					'label' => __( 'Role', 'pai-core' ),
    					'name' => 'role',
    					'type' => 'text',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
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
    				array(
    					'key' => 'field_image',
    					'label' => __( 'Image', 'pai-core' ),
    					'name' => 'image',
    					'type' => 'image',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
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
    				array(
    					'key' => 'field_description',
    					'label' => __( 'Description', 'pai-core' ),
    					'name' => 'description',
    					'type' => 'wysiwyg',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
    						'width' => '',
    						'class' => '',
    						'id' => '',
    					),
    					'default_value' => '',
    					'tabs' => 'all',
    					'toolbar' => 'full',
    					'media_upload' => 0,
    					'delay' => 0,
    				),
    				array(
    					'key' => 'field_email',
    					'label' => __( 'Email', 'pai-core' ),
    					'name' => 'email',
    					'type' => 'email',
    					'instructions' => '',
    					'required' => 0,
    					'conditional_logic' => 0,
    					'wrapper' => array(
    						'width' => '',
    						'class' => '',
    						'id' => '',
    					),
    					'default_value' => '',
    					'placeholder' => '',
    					'prepend' => '',
    					'append' => '',
    				),
            array(
              'key' => 'field_type',
              'label' => __( 'Category', 'pai-core' ),
              'name' => 'type',
              'type' => 'select',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => array(
                'staff' => __( 'Staff', 'pai-core' ),
                'board' => __( 'Board', 'pai-core' ),
              ),
              'default_value' => array(),
              'allow_null' => 0,
              'multiple' => 0,
              'ui' => 1,
              'ajax' => 0,
              'return_format' => 'array',
              'placeholder' => '',
            ),
    			),
    		),
    	),
      'location' => array(
    		array(
    			array(
    				'param' => 'page_template',
    				'operator' => '==',
    				'value' => 'page-templates/page-team.php',
    			),
    		),
    	),
    	'menu_order' => 0,
    	'position' => 'normal',
    	'style' => 'default',
    	'label_placement' => 'top',
    	'instruction_placement' => 'field',
    	'hide_on_screen' => '',
    	'active' => 1,
    	'description' => '',
    ));

  /* Report Fields */
  acf_add_local_field_group(array (
  	'key' => 'group_report_detail',
  	'title' => __( 'Details', 'pai-core' ),
  	'fields' => array (
  		array (
  			'key' => 'field_pdf_link',
  			'label' => __( 'PDF Link', 'pai-link' ),
  			'name' => 'pdf_link',
  			'type' => 'file',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'return_format' => 'array',
  			'library' => 'all',
  			'min_size' => '',
  			'max_size' => '',
  			'mime_types' => 'pdf',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'report',
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

  /* Press Mention Fields */
  acf_add_local_field_group( array(
  	'key' => 'group_press_mention',
  	'title' => __( 'Details', 'pai-core' ),
  	'fields' => array(
  		array(
  			'key' => 'field_publication',
  			'label' => __( 'Publication', 'pai-core' ),
  			'name' => 'publication',
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
  			'key' => 'field_source_url',
  			'label' => __( 'Source URL', 'pai-core' ),
  			'name' => 'source_url',
  			'type' => 'url',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => __( 'https://example.com', 'pai-core' ),
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_category',
  				'operator' => '==',
  				'value' => 'category:press-mention',
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

  /* Research Page Custom Fields */
  // acf_add_local_field_group( array(
  //   'key' => 'group_research_fields',
  // 	'title' => __( 'Research Sub-pages', 'pai-core' ),
  // 	'fields' => array (
  // 		array (
  // 			'key' => 'field_subpages',
  // 			'label' => __( 'Sub-pages', 'pai-core' ),
  // 			'name' => 'subpages',
  // 			'type' => 'repeater',
  // 			'instructions' => '',
  // 			'required' => 0,
  // 			'conditional_logic' => 0,
  // 			'wrapper' => array (
  // 				'width' => '',
  // 				'class' => '',
  // 				'id' => '',
  // 			),
  // 			'collapsed' => 'field_subpage',
  // 			'min' => 0,
  // 			'max' => 0,
  // 			'layout' => 'row',
  // 			'button_label' => __( 'Add Page', 'pai-core' ),
  // 			'sub_fields' => array (
  // 				array (
  // 					'key' => 'field_subpage',
  // 					'label' => __( 'Page', 'pai-core' ),
  // 					'name' => 'page',
  //           'type' => 'link',
  // 					'instructions' => '',
  // 					'required' => 0,
  // 					'conditional_logic' => 0,
  // 					'wrapper' => array (
  // 						'width' => '',
  // 						'class' => '',
  // 						'id' => '',
  // 					),
  // 					'return_format' => 'array',
  // 				),
  // 				array (
  // 					'key' => 'field_page_description',
  // 					'label' => __( 'Description', 'pai-core' ),
  // 					'name' => 'page_description',
  // 					'type' => 'wysiwyg',
  // 					'instructions' => '',
  // 					'required' => 0,
  // 					'conditional_logic' => 0,
  // 					'wrapper' => array (
  // 						'width' => '',
  // 						'class' => '',
  // 						'id' => '',
  // 					),
  // 					'default_value' => '',
  // 					'tabs' => 'all',
  // 					'toolbar' => 'basic',
  // 					'media_upload' => 1,
  // 					'delay' => 0,
  // 				),
  // 			),
  // 		),
  // 	),
  // 	'location' => array (
  // 		array (
  // 			array (
  // 				'param' => 'post_template',
  // 				'operator' => '==',
  // 				'value' => 'page-templates/page-research.php',
  // 			),
  // 		),
  // 	),
  // 	'menu_order' => 0,
  // 	'position' => 'normal',
  // 	'style' => 'default',
  // 	'label_placement' => 'top',
  // 	'instruction_placement' => 'label',
  // 	'hide_on_screen' => '',
  // 	'active' => 1,
  // 	'description' => '',
  // ));


}

/**
 * Prepopulate Field
 * Populate `post_type` field with post types
 *
 * @since 0.1.0
 *
 * @uses get_post_types
 *
 * @param obj $field
 * @return obj field
 */
function pai_core_load_post_types( $field ) {

  $args = array(
    'public'    => true,
  );
  $output = 'object';

  $post_types = get_post_types( $args, $output );

  $field['choices'] = array();

  foreach( $post_types as $post_type ) {
    $field['choices'][$post_type->name] = $post_type->label;
  }

  return $field;
}
add_filter('acf/load_field/key=field_post_type', 'pai_core_load_post_types');
