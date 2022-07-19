<?php
// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Specialists', 'Post Type General Name', 'appwise' ),
        'singular_name'         => _x( 'Specialist', 'Post Type Singular Name', 'appwise' ),
        'menu_name'             => __( 'Specialists', 'appwise' ),
        'name_admin_bar'        => __( 'Specialists', 'appwise' ),
        'archives'              => __( 'Item Archives', 'appwise' ),
        'attributes'            => __( 'Item Attributes', 'appwise' ),
        'parent_item_colon'     => __( 'Parent Item:', 'appwise' ),
        'all_items'             => __( 'All Items', 'appwise' ),
        'add_new_item'          => __( 'Add New Item', 'appwise' ),
        'add_new'               => __( 'Add New', 'appwise' ),
        'new_item'              => __( 'New Item', 'appwise' ),
        'edit_item'             => __( 'Edit Item', 'appwise' ),
        'update_item'           => __( 'Update Item', 'appwise' ),
        'view_item'             => __( 'View Item', 'appwise' ),
        'view_items'            => __( 'View Items', 'appwise' ),
        'search_items'          => __( 'Search Item', 'appwise' ),
        'not_found'             => __( 'Not found', 'appwise' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'appwise' ),
        'featured_image'        => __( 'Featured Image', 'appwise' ),
        'set_featured_image'    => __( 'Set featured image', 'appwise' ),
        'remove_featured_image' => __( 'Remove featured image', 'appwise' ),
        'use_featured_image'    => __( 'Use as featured image', 'appwise' ),
        'insert_into_item'      => __( 'Insert into item', 'appwise' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'appwise' ),
        'items_list'            => __( 'Items list', 'appwise' ),
        'items_list_navigation' => __( 'Items list navigation', 'appwise' ),
        'filter_items_list'     => __( 'Filter items list', 'appwise' ),
    );
    $args = array(
        'label'                 => __( 'Specialist', 'appwise' ),
        'description'           => __( 'Specialists', 'appwise' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-businessperson',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'specialist', $args );

}
add_action( 'init', 'custom_post_type', 0 );