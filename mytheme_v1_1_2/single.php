<?php

/**

 * The Template for displaying all single custom posts.

 *

 * @package Mytheme

 * @author tansang

 * page.php & single.php --> use for show post in blog page
 * 
 * show content page of any Custom post type if that CPT not have a special file for it (example: single-my_post.php)

 */



get_header();

?>
	<div id="primary" class="content-area" style="margin-top: 200px;">

		<main id="main" class="site-main">
			<div class="container">

				<?php

				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content', get_post_type() );


				endwhile; // End of the loop.

				?>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->



<?php 

get_footer();



// Omit Closing PHP Tags