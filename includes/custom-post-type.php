<?php

// Creates custom post type
function prin_test_book_post_type() {
    $labels = array(
		'name'                  => _x( 'Books', 'Post type general name', 'prin_test_domain' ), // _x = text context
		'singular_name'         => _x( 'Book', 'Post type singular name', 'prin_test_domain' ),
		'menu_name'             => _x( 'Books', 'Admin Menu text', 'prin_test_domain' ),
		'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'prin_test_domain' ),
		'add_new'               => __( 'Add New', 'prin_test_domain' ),
		'add_new_item'          => __( 'Add New Book', 'prin_test_domain' ),
		'new_item'              => __( 'New Book', 'prin_test_domain' ),
		'edit_item'             => __( 'Edit Book', 'prin_test_domain' ),
		'view_item'             => __( 'View Book', 'prin_test_domain' ),
		'all_items'             => __( 'All Books', 'prin_test_domain' ),
		'search_items'          => __( 'Search Books', 'prin_test_domain' ),
		'parent_item_colon'     => __( 'Parent Books:', 'prin_test_domain' ),
		'not_found'             => __( 'No books found.', 'prin_test_domain' ),
		'not_found_in_trash'    => __( 'No books found in Trash.', 'prin_test_domain' ),
		'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'prin_test_domain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'prin_test_domain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'prin_test_domain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'prin_test_domain' ),
		'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'prin_test_domain' ),
		'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'prin_test_domain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'prin_test_domain' ),
		'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'prin_test_domain' ),
		'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'prin_test_domain' ),
		'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'prin_test_domain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

    register_post_type( 'book', $args );
}
add_action( 'init', 'prin_test_book_post_type' );