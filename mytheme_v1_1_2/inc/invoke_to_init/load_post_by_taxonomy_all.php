<?php

function load_post_by_taxonomy_all(){

    header("Content-Type: text/html");
    
    // $the_query = null;
    // $the_query = new WP_Query();

    // $terms = "taximailinh";
	
	if( is_plugin_active( 'mytheme-cpt-plugin/mytheme-cpt-plugin.php' ) ) {

                // Plugin is active
        if($terms != 'all'){
            $args = array(
                            'post_type' => 'my_post',
                                                'order'=>'asc',
                                                'orderby'=>'title',
                                                'posts_per_page' => 8
                        );
          }
          else{
              $args = array(
                            'post_type' => 'my_post',
                              'order'=>'asc',
                              'orderby'=>'title',
                              'posts_per_page' => 8
                          
                        );
          }

	}

    	$the_query = new WP_Query( $args );
    ?>
    	<div class="no-container my_post" style="">
    		<div class="row">
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
                                echo '<div class="post_content">';
                                // echo '<li class="col s12 s6 m4 l3 item-post" style="position: relative;">'; #ff0000
                                    // echo '<div class="post-image" style="position: absolute; margin: 0 auto;">' . the_post_thumbnail('thumbnail') .'</div>';
                                    echo the_post_thumbnail('thumbnail');
                                    // echo '<div>' . get_the_title() . '</div>'; $post->ID, get_the_permalink , get_the_title
                                    echo '<div class="title-post"><a style="color: white; font-weight: bold;  text-shadow: 1px 1px #004A85; width: 65%; z-index: 2;" href="'.get_the_permalink( $post->ID).'">' . get_the_title() . '</a></div>';
                                echo '</div>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                        echo 'not post';
                    }
    	?>
			</div>
    	</div>

        <!-- <div class="all_mypost_ajax_more" style="width: 15%; margin: 0 auto;" onclick="load_taxanomy_all_more()"><span style="font-weight: bold; font-size: 2rem; text-decoration: underline; color: #696969;">XEM THÊM CÁC TIN CÒN LẠI<span></div> -->
        <div class="all_mypost_ajax_more" style=" margin: 0 auto;" onclick="load_taxanomy_all_more()"><span style="font-weight: bold; font-size: 2rem; text-decoration: underline; color: #696969;">XEM THÊM CÁC TIN CÒN LẠI<span></div>
    <style>

    #row-my_post{margin-bottom: 0;}
    .post-title {height: 100%;}
    /* .post-title img {width: 100%; height: auto; } */

    ul.list-my_post li img {
        width: 100%; 
        height: auto; border: 7px solid #F6F6F6;}

                /* .item-post {overflow: hidden;} */
        /* .item-post img {overflow: hidden;} */

    /* .item-post img{margin-left:16.5%; } */

    .item-post img {
        -webkit-transition: 0.5s ease; /*For Safari 3.1 to 6.0 & Chrome*/
        -moz-transition: 0.5s ease; /* Firefox*/
        -o-transition: 0.5s ease; /*Opera*/
        transition: 0.5s ease;
    }
    .item-post img:hover {
        /* opacity: 0.7; */
        filter: brightness(60%);

        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition: 0.3s ease; /*For Safari 3.1 to 6.0 & Chrome */
        -moz-transition: 0.3s ease; /* Firefox*/
        -o-transition: 0.3s ease; /*Opera*/
        transition: 0.3s ease;

        overflow: hidden;
    }

    /* demo */
    /* Zoom on image inside div without div moving */


    .post_content{overflow: hidden;  width: 320px; height: 320px; margin-left:16.5%;}
    .post_content:hover {}
    /* demo */

    .title-post{margin-left:2.9%; 
        position: absolute; 
        /* z-index: 2;  */
        margin-top: -40%; width: 65%; 
        /* position: absolute;  */
        /* overflow: hidden;  */
        /* white-space: nowrap; */
        word-wrap: break-word;
    }
    </style>
	</div>

<?php
    
	exit;
}
add_action('wp_ajax_load_post_by_taxonomy_all', 'load_post_by_taxonomy_all');
add_action('wp_ajax_nopriv_load_post_by_taxonomy_all', 'load_post_by_taxonomy_all');