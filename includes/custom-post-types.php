<?php
/**
 * Custom Post Type Functions
 *
 * @package    PAI_Core
 * @subpackage PAI_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Register Custom Post Type
 *
 * @since 0.1.0
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
   'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author', 'revisions' ),
   'taxonomies'            => array( 'topic', 'post_tag', 'series' ),
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
 * Register Custom Taxonomy
 *
 * @since 0.1.0
 *
 * @uses register_taxonomy()
 *
 * @return void
 */
function pai_core_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Topics', 'Taxonomy General Name', 'pai-core' ),
		'singular_name'              => _x( 'Topic', 'Taxonomy Singular Name', 'pai-core' ),
		'menu_name'                  => __( 'Topics', 'pai-core' ),
		'all_items'                  => __( 'All Topics', 'pai-core' ),
		'parent_item'                => __( 'Parent Topic', 'pai-core' ),
		'parent_item_colon'          => __( 'Parent Topic:', 'pai-core' ),
		'new_item_name'              => __( 'New Topic Name', 'pai-core' ),
		'add_new_item'               => __( 'Add New Topic', 'pai-core' ),
		'edit_item'                  => __( 'Edit Topic', 'pai-core' ),
		'update_item'                => __( 'Update Topic', 'pai-core' ),
		'view_item'                  => __( 'View Topic', 'pai-core' ),
		'separate_items_with_commas' => __( 'Separate topics with commas', 'pai-core' ),
		'add_or_remove_items'        => __( 'Add or remove topics', 'pai-core' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'pai-core' ),
		'popular_items'              => __( 'Popular Topics', 'pai-core' ),
		'search_items'               => __( 'Search Topics', 'pai-core' ),
		'not_found'                  => __( 'Not Found', 'pai-core' ),
		'no_terms'                   => __( 'No topics', 'pai-core' ),
		'items_list'                 => __( 'Topics list', 'pai-core' ),
		'items_list_navigation'      => __( 'Topics list navigation', 'pai-core' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'topic', array( 'report' ), $args );

}
add_action( 'init', 'pai_core_custom_taxonomy', 0 );

/**
 * Insert Category Terms
 * Upon plugin activation, insert terms if they don't already exist
 *
 * @since 0.1.0
 *
 * @return void
 */

function pai_core_insert_terms() {

  if( !term_exists( 'Press Releases', 'category' ) ) {
    wp_insert_term(
      __( 'Press Releases', 'pai-core' ),
      'category',
      array(
        'description'=> __( 'Press release posts.', 'pai-core' ),
        'slug' => 'press-release',
      )
    );
  }

  if( !term_exists( 'Press Mentions', 'category' ) ) {
    wp_insert_term(
      __( 'Press Mentions', 'pai-core' ),
      'category',
      array(
        'description'=> __( 'Press mention posts.', 'pai-core' ),
        'slug' => 'press-mention',
      )
    );
  }

  if( !term_exists( 'Jobs', 'category' ) ) {
    wp_insert_term(
      __( 'Jobs', 'pai-core' ),
      'category',
      array(
        'description'=> __( 'Job posts.', 'pai-core' ),
        'slug' => 'job',
      )
    );
  }

}
add_action( 'pai_core_activate', 'pai_core_insert_terms' );
