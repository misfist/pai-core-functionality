<?php
/**
 * Custom Post Type Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.0.1
 * @license    GPL-2.0+
 */

/**
 * Register Custom Post Type
 *
 * @since 0.0.1
 *
 * @uses register_post_type()
 *
 * @return void
 */
function pai_core_custom_post_type() {

 $labels = array(
   'name'                  => _x( 'Reports', 'Post Type General Name', 'pai-core' ),
   'singular_name'         => _x( 'Report', 'Post Type Singular Name', 'pai-core' ),
   'menu_name'             => __( 'Reports', 'pai-core' ),
   'name_admin_bar'        => __( 'Report', 'pai-core' ),
   'archives'              => __( 'Report Archives', 'pai-core' ),
   'attributes'            => __( 'Report Attributes', 'pai-core' ),
   'parent_item_colon'     => __( 'Parent Report:', 'pai-core' ),
   'all_items'             => __( 'All Reports', 'pai-core' ),
   'add_new_item'          => __( 'Add New Report', 'pai-core' ),
   'add_new'               => __( 'Add New', 'pai-core' ),
   'new_item'              => __( 'New Report', 'pai-core' ),
   'edit_item'             => __( 'Edit Report', 'pai-core' ),
   'update_item'           => __( 'Update Report', 'pai-core' ),
   'view_item'             => __( 'View Report', 'pai-core' ),
   'view_items'            => __( 'View Reports', 'pai-core' ),
   'search_items'          => __( 'Search Report', 'pai-core' ),
   'not_found'             => __( 'Not found', 'pai-core' ),
   'not_found_in_trash'    => __( 'Not found in Trash', 'pai-core' ),
   'featured_image'        => __( 'Featured Image', 'pai-core' ),
   'set_featured_image'    => __( 'Set featured image', 'pai-core' ),
   'remove_featured_image' => __( 'Remove featured image', 'pai-core' ),
   'use_featured_image'    => __( 'Use as featured image', 'pai-core' ),
   'insert_into_item'      => __( 'Insert into report', 'pai-core' ),
   'uploaded_to_this_item' => __( 'Uploaded to this report', 'pai-core' ),
   'items_list'            => __( 'Reports list', 'pai-core' ),
   'items_list_navigation' => __( 'Reports list navigation', 'pai-core' ),
   'filter_items_list'     => __( 'Filter reports list', 'pai-core' ),
 );
 $args = array(
   'label'                 => __( 'Report', 'pai-core' ),
   'description'           => __( 'Post Type for Reports', 'pai-core' ),
   'labels'                => $labels,
   'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
   'taxonomies'            => array( 'category', 'post_tag', 'series' ),
   'hierarchical'          => true,
   'public'                => true,
   'show_ui'               => true,
   'show_in_menu'          => true,
   'menu_position'         => 20,
   'menu_icon'             => 'dashicons-analytics',
   'show_in_admin_bar'     => true,
   'show_in_nav_menus'     => true,
   'can_export'            => true,
   'has_archive'           => true,
   'exclude_from_search'   => false,
   'publicly_queryable'    => true,
   'capability_type'       => 'page',
   'show_in_rest'          => true,
 );
 register_post_type( 'report', $args );
 register_taxonomy_for_object_type( 'series', 'report' );
}
add_action( 'init', 'pai_core_custom_post_type', 99 );

/**
 * Insert Category Terms
 *
 * @since 0.0.1
 *
 * @return void
 */
wp_insert_term(
  __( 'Press Release', 'pai-core' ),
  'category',
  array(
    'description'=> __( 'Press release posts.', 'pai-core' ),
    'slug' => 'press-release',
  )
);

wp_insert_term(
  __( 'Press Mention', 'pai-core' ),
  'category',
  array(
    'description'=> __( 'Press mention posts.', 'pai-core' ),
    'slug' => 'press-mention',
  )
);

wp_insert_term(
  __( 'Job', 'pai-core' ),
  'category',
  array(
    'description'=> __( 'Job posts.', 'pai-core' ),
    'slug' => 'job',
  )
);
