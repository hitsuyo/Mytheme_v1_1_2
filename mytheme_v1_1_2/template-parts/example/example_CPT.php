<?php


function create_posttype() {

    register_post_type( 'movies',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Movies' ),

                'singular_name' => __( 'Movie' )

            ),

           

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'movies'),

        )

    );

}

// -------------------------------------------------------

function custom_post_type() {

 
    // Standard
    // Set UI labels for Custom Post Type

        $labels = array(

            'name'                => _x( 'Movies', 'Post Type General Name', 'mytheme' ),

            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'mytheme' ),

            'menu_name'           => __( 'Movies', 'mytheme' ),

            'parent_item_colon'   => __( 'Parent Movie', 'mytheme' ),

            'all_items'           => __( 'All Movies', 'mytheme' ),

            'view_item'           => __( 'View Movie', 'mytheme' ),

            'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),

            'add_new'             => __( 'Add New', 'mytheme' ),

            'edit_item'           => __( 'Edit Movie', 'mytheme' ),

            'update_item'         => __( 'Update Movie', 'mytheme' ),

            'search_items'        => __( 'Search Movie', 'mytheme' ),

            'not_found'           => __( 'Not Found', 'mytheme' ),

            'not_found_in_trash'  => __( 'Not found in Trash', 'mytheme' ),

        );

         

    // Set other options for Custom Post Type

         

        $args = array(

            'label'               => __( 'movies',  'mytheme' ),

            'description'         => __( 'Movie news and reviews',  'mytheme' ),

            'labels'              => $labels,

            // Features this CPT supports in Post Editor

            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

            // You can associate this CPT with a taxonomy or custom taxonomy. 

            /* A hierarchical CPT is like Pages and can have

            * Parent and child items. A non-hierarchical CPT

            * is like Posts.

            */ 

            'hierarchical'        => false,

            'public'              => true,

            'show_ui'             => true,

            'show_in_menu'        => true,

            'show_in_nav_menus'   => true,

            'show_in_admin_bar'   => true,

            'menu_position'       => 5,

            'can_export'          => true,

            'has_archive'         => true,  //important

            'exclude_from_search' => false,

            'publicly_queryable'  => true,

            'capability_type'     => 'page',

        );

        // Registering your Custom Post Type

        register_post_type( 'demo', $args );

}
// --------------------------------------------------

//Advanced
function codex_book_init() {

	$labels = array(

		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),

		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),

		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),

		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),

		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),

		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),

		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),

		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),

		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),

		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),

		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),

		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),

		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),

		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )

	);



	$args = array(

		'labels'             => $labels,

                'description'        => __( 'Description.', 'your-plugin-textdomain' ),

		'public'             => true,

		'publicly_queryable' => true,

		'show_ui'            => true,

		'show_in_menu'       => true,

		'query_var'          => true,

		'rewrite'            => array( 'slug' => 'book' ),

		'capability_type'    => 'post',

		'has_archive'        => true,

		'hierarchical'       => false,

		'menu_position'       => 5,

		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

	);



	register_post_type( 'book', $args );

}


?>