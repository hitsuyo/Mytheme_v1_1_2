<?php

function load_post_by_taxonomy_shortcode_schortcode($atts){
	// I will write shortcode for this function
	ob_start();
    
    $the_query = null;
    $the_query = new WP_Query();
	
	extract(shortcode_atts(array(
		'post_type' => 'post',
		'taxonomy' => 'taxonomy_1',
		'terms' => 'project1',
		'field' => 'slug',
		'order' => 'asc',
		'orderby' => 'title'
	),$atts) );
    
	if( is_plugin_active( 'mytheme-cpt-plugin/mytheme-cpt-plugin.php' ) ) {
		if($terms != 'all'){
			$args = array(
							'post_type' => $post_type,
							'tax_query' => array(
								array(
									'taxonomy' => $taxonomy,
									'field'    => $slug,
									'terms'    => $terms
								)
							),
												'order'=> $order,
												'orderby'=> $orderby,
						);
		  }
		  else{
			  $args = array(
							'post_type' => $type,
							  'order'=> $order,
							  'orderby'=> $orderby,
						  
						);
		  }
	}
	$the_query = new WP_Query( $args );
?>
	<div class="no-container post_type_my_post" style="">
		<div class="row" id="row-my_post">
			<div class="col s12">
	<?php
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        // echo '<h2>'.$custom_term->name.'</h2>';
                        
                        echo '<ul class="list-my_post ">';
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            // global $post;
                            
                            echo '<li class="col s12 m6 l3 item-post" style="position: relative;">';
                            // echo '<li class="col s12 s6 m4 l3 item-post" style="position: relative;">'; #ff0000
                                // echo '<div class="post-image" style="position: absolute; margin: 0 auto;">' . the_post_thumbnail('thumbnail') .'</div>';
                                echo the_post_thumbnail('thumbnail');
                                // echo '<div>' . get_the_title() . '</div>'; $post->ID, get_the_permalink , get_the_title
                                echo '<div class="title-post"><a style="color: white; font-weight: bold;  text-shadow: 1px 1px #004A85; width: 68%; z-index: 2;" href="'.get_the_permalink( $post->ID).'">' . get_the_title() . '</a></div>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    }
	?>
			</div>
    	</div>

		<style>
			/* 
			ul.list-my_post-taxanomy li img {width: 70%; height: auto;}

			.item-post-taxanomy img:hover {
				opacity: 0.7;
				filter: brightness(40%);

				-webkit-transition: 0.2s; For Safari 3.1 to 6.0
				transition: 0.2s;
				
				overflow: hidden;

			}

			.title-post-lastest-taxanomy {margin-left:16.5%;  width: 68%; } */

            /* ------------ */

                #row-my_post{margin-bottom: 0;}
			.post-title {height: 100%;}
			.post-title img {width: 100%; height: auto; }
		
			ul.list-my_post li img {width: 70%; height: auto; border: 7px solid #F6F6F6;}
		
			.item-post img{margin-left:16.5%;}
			.item-post img:hover {opacity: 0.7;
				filter: brightness(40%);
				transform: scale(1.1);
				-webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
				transition: 0.2s;
		
				overflow: hidden;
				/* transition: transform 0.35s; */
				/* webkit-transition: -webkit-transform 0.35s; */
			}
		
			.title-post{margin-left:16.5%; position: absolute; z-index: 2; margin-top: -40%; width: 67%; 
				/* position: absolute;  */
				/* overflow: hidden;  */
				/* white-space: nowrap; */
				/* word-wrap: break-word; */
			}
		</style>
	</div>

<?php
    
	exit;
	ob_get_clean();
	
	/*$myvariable = ob_get_clean();
	return $myvariable;*/
}
//add_action('wp_ajax_load_post_by_taxanomy_shortcode', 'load_post_by_taxanomy_shortcode');
//add_action('wp_ajax_nopriv_load_post_by_taxanomy_shortcode', 'load_post_by_taxanomy_shortcode');

add_shortcode('load_post_by_taxonomy_shortcode','load_post_by_taxonomy_shortcode_schortcode');
