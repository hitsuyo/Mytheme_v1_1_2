<?php

function more_post_ajax(){
    // use with custom post type
    // $offset = $_POST["offset"];
    // $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

	// static $offset;
	// $offset = $offset; // check how many post appeared
	$posts_per_page = $ppp;
	$args = array('post_type' => 'my_post', 'post_status' => 'publish', 'posts_per_page' => wp_count_posts('my_post')->publish, 'offset' => 3 );

	$the_query = new WP_Query( $args );
?>
	<div class="no-container my_post_lastest-more" style="">
		<div class="row">
			<div class="col s12">
	<?php
				// The Loop
				if ( $the_query->have_posts() ) {
					echo '<ul class="list-my_post-more" id="list-my_post-ID-more">';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li class="col s12 m6 l4 item-post-more" style="">';
							echo the_post_thumbnail('thumbnail');

							echo '<div class="title-post-lastest-more"><a style="color: black; font-family: Arial, Helvetica, sans-serif; width: 68%; " href="'.get_the_permalink($post->ID).'">' . get_the_title() . '</a></div>';
						echo '</li>';
                    }
					echo '</ul>';
					// endwhile;
					/* Restore original Post Data */
					wp_reset_postdata();
					
				} else {
					echo 'There is no post';
				}
	?>
			</div>
    	</div>

		<style>
			.post-title {height: 100%;}
			.post-title img {width: 100%; height: auto; }

			ul.list-my_post-more li img {width: 70%; height: auto;}

			.item-post-more img{margin-left:16.5%;}
			.item-post-more img:hover {
				opacity: 0.7;
				filter: brightness(40%);
				/* transform: scale(1.1); low speed */
				-webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
				transition: 0.2s;
				
				overflow: hidden;
				/* transition: transform 0.35s; */
				/* webkit-transition: -webkit-transform 0.35s; */
			}

			.title-post-lastest-more {margin-left:16.5%;  width: 65%; 
				/* position: absolute;  */
				/* overflow: hidden;  */
				/* white-space: nowrap; */
				/* word-wrap: break-word; */
			}
		</style>
	</div>

<?php
    
	exit;
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax'); 
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

add_shortcode( 'more_post_ajax_sc', 'more_post_ajax' );