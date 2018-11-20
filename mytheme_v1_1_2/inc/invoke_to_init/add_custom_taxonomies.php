<?php


function add_custom_taxonomies() {
//     $args = array( 
//         'hierarchical' => true,
//         'label' => 'Awesome Taxonomy',
//     );
//     register_taxonomy( 'awesome_taxonomy', array( 'my_post', 'page', 'awesome' ), $args );


    // （カテゴリーのような）階層化したカスタム分類を新たに追加
    $labels = array(
        'name'              => _x( '_Taxonomy 1', 'taxonomy general name' ),
        'singular_name'     => _x( 'Taxonomy 1', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Genres' ),
        'all_items'         => __( 'All Taxonomy 1' ),
        'parent_item'       => __( 'Parent Genre' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'Edit Genre' ),
        'update_item'       => __( 'Update Genre' ),
        'add_new_item'      => __( 'Add New Genre' ),
        'new_item_name'     => __( 'New Genre Name' ),
        'menu_name'         => __( 'Taxonomy 1' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        // 'label'            => 'Taxonomy 1',
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'taxonomy1' ),
    );

	//Register and add taxonomy option to custom post type
    register_taxonomy( 'taxonomy_1', array( 'my_post' ), $args );
	//my_post : Custom post type Name
  }

//   ajax filter

add_action('wp_ajax_filter_posts_by_category', 'ajax_filter_posts_by_category_demo');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'ajax_filter_posts_by_category_demo');

?>