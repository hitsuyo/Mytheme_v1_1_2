<?php

/*
    This file will be invoked in functions.php
*/

// function myPost_custom_init() {

//     $args = array(

//       'public' => true,

//       'label'  => 'My_Posts',

//       'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

//      'taxonomies'  => array( 'taxanomy_1' ),

//       'has_archive' => true,
//       'can_export'          => true,
//       'exclude_from_search' => false,
//       'yarpp_support'       => true,

//       'publicly_queryable' => true,

//       'rewrite' => array('slug' => 'myposts'),

//       'register_meta_box_cb' => 'theme_slug_custom_meta_box',

//     );

//     register_post_type( 'my_post', $args );

// }

//Simple
function chinhsach_custom_init() {

    $args = array(

      'public' => true,

      'label'  => 'Chính sách',

      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

    //   'taxonomies' => array( 'post_tag','themes_categories'),

      'has_archive' => true,

      'publicly_queryable' => true,

      'rewrite' => array('slug' => 'chinhsachs'),

      'register_meta_box_cb' => 'theme_slug_custom_meta_box',

    );

    register_post_type( 'chinhsach', $args );

}


//Simple
function shoe_custom_init() {

    $args = array(

      'public' => true,

      'label'  => 'Shoes',

      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

      'has_archive' => false,

      'publicly_queryable' => true,

      'rewrite' => array('slug' => 'shoes'),

      'capability_type' => 'post',

      'show_in_menu'       => false // show in admin option sidebar

    );

    register_post_type( 'shoe', $args );

    flush_rewrite_rules();

}


// add_action( 'init', 'theme_prefix_cpt_init' );


// function theme_prefix_rewrite_flush() {

//     flush_rewrite_rules();

// }

// add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );


//Meta Box

//Ajax
/*------------- Ajax*/
include 'invoke_to_init/more_post_ajax.php'; 
// -----------------------------------------------------------
include 'invoke_to_init/add_custom_taxonomies.php';


    
function ajax_filter_posts_by_category_demo(){
    

    // $terms = isset($_POST['cat_slug']) && !empty($_POST['cat_slug']) ? $_POST['cat_slug'] : 'all';
    // $paged = $_POST['paged'];
    // $posts = $_POST['posts'];

    $terms = 'project1'; //choose 1 term to default
    
    $wp_query = null;
    $wp_query = new WP_Query();
    
    if( is_plugin_active( 'mytheme-cpt-plugin/mytheme-cpt-plugin.php' ) ) {
		if($terms != 'all'){
		  $args = array(
						  'post_type' => 'my_post',
						//   'showposts'=>$posts,
						//   'paged'=>$paged,
						  'tax_query' => array(
							  array(
								  'taxonomy' => 'taxonomy_1',
								  'field'    => 'slug',
								  'terms'    => $terms
							  )
						  ),
											  'order'=>'asc',
											  'orderby'=>'title',
					  );
		}
		else{
			$args = array(
						  'post_type' => 'my_post',
						//   'showposts'=>$posts,
									//   'paged'=>$paged,
							'order'=>'asc',
							'orderby'=>'title',
						
					  );
		}
	}
     
    $wp_query->query($args);
 
    $counter = 1;
    while ($wp_query->have_posts()) : $wp_query->the_post();
      global $post;
     // var_dump($post);
?>   
     <?php echo $post->post_title;  ?>
<?php
 
    endwhile;
}

// ----------------------------------------------------------------------

include 'invoke_to_init/load_post_by_taxonomy_all.php';

// ----------------------------------------------

include 'invoke_to_init/load_post_by_taxonomy($terms).php';
//---------------------

include 'invoke_to_init/load_post_by_taxonomy_shortcode_schortcode($atts).php';

// ---------------------

