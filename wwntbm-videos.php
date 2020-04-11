<?php
/**
 * Plugin Name:     WWNTBM Videos
 * Plugin URI:      https://wwntbm.com/
 * Description:     Custom videos CPT.
 * Author:          Andrew Minion
 * Author URI:      https://andrewrminion.com
 * Text Domain:     wwntbm-videos
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         WWNTBM
 * @subpackage      Videos
 */

/* prevent this file from being accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'init',
	function() {
		register_post_type(
			'video',
			array(
				'label'               => __( 'Video', 'wwntbm' ),
				'description'         => __( 'Video', 'wwntbm' ),
				'labels'              => array(
					'name'                  => _x( 'Videos', 'Video General Name', 'wwntbm' ),
					'singular_name'         => _x( 'Video', 'Video Singular Name', 'wwntbm' ),
					'menu_name'             => __( 'Videos', 'wwntbm' ),
					'name_admin_bar'        => __( 'Video', 'wwntbm' ),
					'archives'              => __( 'Video Archives', 'wwntbm' ),
					'attributes'            => __( 'Video Attributes', 'wwntbm' ),
					'parent_item_colon'     => __( 'Parent Video:', 'wwntbm' ),
					'all_items'             => __( 'All Videos', 'wwntbm' ),
					'add_new_item'          => __( 'Add New Video', 'wwntbm' ),
					'add_new'               => __( 'Add New', 'wwntbm' ),
					'new_item'              => __( 'New Video', 'wwntbm' ),
					'edit_item'             => __( 'Edit Video', 'wwntbm' ),
					'update_item'           => __( 'Update Video', 'wwntbm' ),
					'view_item'             => __( 'View Video', 'wwntbm' ),
					'view_items'            => __( 'View Videos', 'wwntbm' ),
					'search_items'          => __( 'Search Video', 'wwntbm' ),
					'not_found'             => __( 'Not found', 'wwntbm' ),
					'not_found_in_trash'    => __( 'Not found in Trash', 'wwntbm' ),
					'featured_image'        => __( 'Featured Image', 'wwntbm' ),
					'set_featured_image'    => __( 'Set featured image', 'wwntbm' ),
					'remove_featured_image' => __( 'Remove featured image', 'wwntbm' ),
					'use_featured_image'    => __( 'Use as featured image', 'wwntbm' ),
					'insert_into_item'      => __( 'Insert into video', 'wwntbm' ),
					'uploaded_to_this_item' => __( 'Uploaded to this video', 'wwntbm' ),
					'items_list'            => __( 'Videos list', 'wwntbm' ),
					'items_list_navigation' => __( 'Videos list navigation', 'wwntbm' ),
					'filter_items_list'     => __( 'Filter videos list', 'wwntbm' ),
				),
				'supports'            => array( 'title', 'editor' ),
				'taxonomies'          => array( 'video_type' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_rest'        => true,
				'menu_position'       => 15,
				'menu_icon'           => 'dashicons-format-video',
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'rewrite'             => array(
					'slug'       => 'videos',
					'with_front' => true,
					'pages'      => true,
					'feeds'      => true,
				),
				'capability_type'     => 'post',
			)
		);

		register_taxonomy(
			'video_type',
			array( 'video' ),
			array(
				'labels'            => array(
					'name'                       => 'Video Types',
					'singular_name'              => 'Video Type',
					'menu_name'                  => 'Video Types',
					'all_items'                  => 'All Video Types',
					'parent_item'                => 'Parent Video Type',
					'parent_item_colon'          => 'Parent Video Type:',
					'new_item_name'              => 'New Video Type Name',
					'add_new_item'               => 'Add New Video Type',
					'edit_item'                  => 'Edit Video Type',
					'update_item'                => 'Update Video Type',
					'view_item'                  => 'View Video Type',
					'separate_items_with_commas' => 'Separate items with commas',
					'add_or_remove_items'        => 'Add or remove items',
					'choose_from_most_used'      => 'Choose from the most used',
					'popular_items'              => 'Popular Video Types',
					'search_items'               => 'Search Video Types',
					'not_found'                  => 'Not Found',
					'no_terms'                   => 'No items',
					'items_list'                 => 'Video Types list',
					'items_list_navigation'      => 'Video Types list navigation',
				),
				'hierarchical'      => true,
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud'     => true,
				'show_in_rest'      => true,
				'rewrite'           => array(
					'slug'         => 'video-types',
					'with_front'   => true,
					'hierarchical' => false,
				),
			)
		);
	}
);
