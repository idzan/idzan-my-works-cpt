<?php
/*
Plugin Name: My Works
Plugin URI: https://idzan.eu
Description: Custom Post Type for what are my works
Version: 1.1
Author: Idzan Marko
Author URI: https://idzan.eu
License: GPLv3
*/

/* Custom Post Type - works */
function idzan_work_cpt() {

    $labels = array(
        'name' => _x( 'My Works', 'Post Type General Name', 'idzan-works' ),
        'singular_name' => _x( 'My Work', 'Post Type Singular Name', 'idzan-works' ),
        'menu_name' => _x( 'My Works', 'Admin Menu text', 'idzan-works' ),
        'name_admin_bar' => _x( 'My Work', 'Add New on Toolbar', 'idzan-works' ),
        'archives' => __( 'My Work', 'idzan-works' ),
        'attributes' => __( 'My Work', 'idzan-works' ),
        'parent_item_colon' => __( 'My Work', 'idzan-works' ),
        'all_items' => __( 'All My Works', 'idzan-works' ),
        'add_new_item' => __( 'Add New Work', 'idzan-works' ),
        'add_new' => __( 'Add New', 'idzan-works' ),
        'new_item' => __( 'New work', 'idzan-works' ),
        'edit_item' => __( 'Edit Work', 'idzan-works' ),
        'update_item' => __( 'Update Work', 'idzan-works' ),
        'view_item' => __( 'View Work', 'idzan-works' ),
        'view_items' => __( 'View Works', 'idzan-works' ),
        'search_items' => __( 'Search Work', 'idzan-works' ),
        'not_found' => __( 'Not found', 'idzan-works' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'idzan-works' ),
        'featured_image' => __( 'Featured Image', 'idzan-works' ),
        'set_featured_image' => __( 'Set featured image', 'idzan-works' ),
        'remove_featured_image' => __( 'Remove featured image', 'idzan-works' ),
        'use_featured_image' => __( 'Use as featured image', 'idzan-works' ),
        'insert_into_item' => __( 'Insert into My Work', 'idzan-works' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Work', 'idzan-works' ),
        'items_list' => __( 'My Works list', 'idzan-works' ),
        'items_list_navigation' => __( 'Works list navigation', 'idzan-works' ),
        'filter_items_list' => __( 'Filter My Works list', 'idzan-works' ),
    );
    
    $args = array(
        'label' => __( 'My Work', 'idzan-works' ),
        'description' => __( 'My Works', 'idzan-works' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-appearance',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('workcategory', 'worktype'),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'work', $args );

}
add_action( 'init', 'idzan_work_cpt', 0 );