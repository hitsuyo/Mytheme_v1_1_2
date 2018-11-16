<?php
/*
Template Name: 
*/
// get_header();
?>

<?php

$args = array('post_type' => 'my_post', 'posts_per_page' => 3 );      
// $args = array('post_type' => 'my_post');                                 
$the_query = new WP_Query( $args );
?>

<div class="no-container my_post-lastest" style="">
    <div class="row">
        <br>
        <br>
        <h5 style="text-align: center; font-weight: bold; font-size: 2.8rem;">BÀI VIẾT MỚI NHẤT</h5>
        <br>
        <div style="width: 35%; height: 1px; background-color: #E5E5E5; margin: 0 auto;"></div>
        <br>
        <br>
        <div class="col s12">
<?php
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul class="list-my_post-lastest" id="list-my_post-ID">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li class="col s12 m6 l4 item-post-lastest" style="">';
                    // echo '<li class="col s12 s6 m4 l3 item-post" style="position: relative;">'; #ff0000
                        // echo '<div class="post-image" style="position: absolute; margin: 0 auto;">' . the_post_thumbnail('thumbnail') .'</div>';
                        echo the_post_thumbnail('thumbnail');
                        // echo the_excerpt();
                        // echo '<div>' . get_the_title() . '</div>';
                        echo '<div class="title-post-lastest"><a style="color: black; font-family: Arial, Helvetica, sans-serif; width: 68%; " href="'.get_the_permalink($post->ID).'">' . get_the_title() . '</a></div>';
                        // echo '<div>'.the_date().'</div>';
                    echo '</li>';
                }
                echo '</ul>';
                // endwhile;
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
?>
        </div>

        <div style=" width: 100%; " class="load_post_here"></div>
        <div class="more_posts" id="more_posts-ID" style="text-align: center; font-weight: bold; color: orange;"  onclick="loadMorePost()">XEM THÊM CÁC TIN TỨC KHÁC</div>


        <!-- pagination -->
        <div class="col-md-12 content" style="z-index: 2;">
            <div class = "inner-box content no-right-margin darkviolet">
                <div class = "cvf_pag_loading">
                    <div class = "cvf_universal_container">
                        <div class="cvf-universal-content"></div>
                    </div>
                </div>

                <style>
                    /* .content{background-color: blue; height: 200px;} */
                    .cvf_pag_loading {padding: 20px; background-color: blue; 
                        /* height: 200px; */
                    }
                    .cvf-universal-pagination  ul {margin: 0; padding: 0;}
                    .cvf-universal-pagination  ul li {display: inline; margin: 3px; padding: 4px 8px; background: #FFF; color: black; }
                    .cvf-universal-pagination  ul li.active:hover {cursor: pointer; background: #1E8CBE; color: white; }
                    .cvf-universal-pagination  ul li.inactive {background: #7E7E7E;}
                    .cvf-universal-pagination  ul li.selected {background: #1E8CBE; color: white;}
                </style>

                <script>
                    jQuery(document).ready(function(jQuery) {
                        // This is required for AJAX to work on our page
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

                        function cvf_load_all_posts(page){
                            // Start the transition
                            // jQuery(".cvf_pag_loading").fadeIn().css('background','#ccc');

                            // Data to receive from our server
                            // the value in 'action' is the key that will be identified by the 'wp_ajax_' hook 
                            var data = {
                                page: page,
                                action: "cvf_demo_pagination_load_posts"
                            };

                            // Send the data
                            
                            jQuery('.cvf_universal_container').html('<img style="width: 32px; margin-left: 50%; }" src="http://something.vn/wp-content/uploads/2018/08/ezgif.com-gif-maker.gif" >');

                            jQuery.post(ajaxurl, data, function(response) {
                                // If successful Append the data into our html container
                                jQuery(".cvf_universal_container").html(response);
                                // End the transition
                                jQuery(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
                            });
                        }

                        // Load page 1 as the default
                        cvf_load_all_posts(1);

                        // Handle the clicks
                        jQuery('.cvf_universal_container .cvf-universal-pagination li.active').live('click',function(){
                            var page = jQuery(this).attr('p');
                            cvf_load_all_posts(page);

                        });

                    }); 
            </script>



            </div>      
        </div>
        <!-- pagination -->
        <br>
        <br>
    </div>
</div>




<!-- <style type="text/css">
    ul.list-book{
        list-style-type: none;
    }

    ul.list-book li{border: 1px solid black ;}

    ul.list-book li img{
        width: 150px;
        height: 150px;
    }

    .post_type_my_post {margin-bottom: 200px;}
</style> -->

<style>
	.post-title {height: 100%;}
	.post-title img {width: 100%; height: auto; }

    ul.list-my_post-lastest li img {width: 70%; height: auto; }

    .item-post-lastest img{margin-left:16.5%;}
    .item-post-lastest img:hover {
        opacity: 0.7;
        filter: brightness(40%);
        /* transform: scale(1.1); low speed */
        -webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
		-ms-transition: 0.2s;
		-moz-transition: 0.2s;
		-o-transition: 0.2s;
        transition: 0.2s;
        
        overflow: hidden;
        /* transition: transform 0.35s; */
        /* webkit-transition: -webkit-transform 0.35s; */
    }

    .title-post-lastest{margin-left:16.5%;  width: 68%; 
        /* position: absolute;  */
        /* overflow: hidden;  */
        /* white-space: nowrap; */
        /* word-wrap: break-word; */
    }

    .more_posts:hover{cursor: pointer;}
</style>



<?php
// get_footer();