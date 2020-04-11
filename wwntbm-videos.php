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
		$labels  = array(
			'name'                  => _x( 'Videos', 'Video General Name', 'wwntbm' ),
			'singular_name'         => _x( 'Video', 'Video Singular Name', 'wwntbm' ),
			'menu_name'             => __( 'Videos', 'wwntbm' ),
			'name_admin_bar'        => __( 'Video', 'wwntbm' ),
			'archives'              => __( 'Item Archives', 'wwntbm' ),
			'attributes'            => __( 'Item Attributes', 'wwntbm' ),
			'parent_item_colon'     => __( 'Parent Item:', 'wwntbm' ),
			'all_items'             => __( 'All Items', 'wwntbm' ),
			'add_new_item'          => __( 'Add New Item', 'wwntbm' ),
			'add_new'               => __( 'Add New', 'wwntbm' ),
			'new_item'              => __( 'New Item', 'wwntbm' ),
			'edit_item'             => __( 'Edit Item', 'wwntbm' ),
			'update_item'           => __( 'Update Item', 'wwntbm' ),
			'view_item'             => __( 'View Item', 'wwntbm' ),
			'view_items'            => __( 'View Items', 'wwntbm' ),
			'search_items'          => __( 'Search Item', 'wwntbm' ),
			'not_found'             => __( 'Not found', 'wwntbm' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wwntbm' ),
			'featured_image'        => __( 'Featured Image', 'wwntbm' ),
			'set_featured_image'    => __( 'Set featured image', 'wwntbm' ),
			'remove_featured_image' => __( 'Remove featured image', 'wwntbm' ),
			'use_featured_image'    => __( 'Use as featured image', 'wwntbm' ),
			'insert_into_item'      => __( 'Insert into item', 'wwntbm' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'wwntbm' ),
			'items_list'            => __( 'Items list', 'wwntbm' ),
			'items_list_navigation' => __( 'Items list navigation', 'wwntbm' ),
			'filter_items_list'     => __( 'Filter items list', 'wwntbm' ),
		);
		$rewrite = array(
			'slug'       => 'videos',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$args = array(
			'label'               => __( 'Video', 'wwntbm' ),
			'description'         => __( 'Video', 'wwntbm' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor' ),
			'taxonomies'          => array( 'video_type' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 15,
			'menu_icon'           => 'dashicons-format-video',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'post',
		);

		register_post_type( 'video', $args );

		register_taxonomy(
			'video_type',
			array( 'video' ),
			array(
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
				'labels'            => array(
					'name'          => _x( 'Video Types', 'wwntbm' ),
					'singular_name' => _x( 'Video Type', 'wwntbm' ),
				),
				'rewrite'           => array(
					'slug' => 'video-type',
				),
			)
		);
	}
);
