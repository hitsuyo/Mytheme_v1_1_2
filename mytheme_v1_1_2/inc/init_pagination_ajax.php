<?php

add_action( 'wp_ajax_cvf_demo_pagination_load_posts', 'cvf_demo_pagination_load_posts' );

add_action( 'wp_ajax_nopriv_cvf_demo_pagination_load_posts', 'cvf_demo_pagination_load_posts' ); 

function cvf_demo_pagination_load_posts() {

    header("Content-Type: text/html");

    global $wpdb;
    // Set default variables
    $msg = '';

    if(isset($_POST['page'])){
        // Sanitize the received page   
        $page = sanitize_text_field($_POST['page']);
        $cur_page = $page;
        $page -= 1;
        // Set the number of results to display
        $per_page = 3;
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;

        // Set the table where we will be querying data
        $table_name = $wpdb->prefix . "posts";

        // Query the necessary posts
        $all_blog_posts = $wpdb->get_results($wpdb->prepare("
            SELECT * FROM " . $table_name . " WHERE post_type = 'my_post' AND post_status = 'publish' ORDER BY post_date DESC LIMIT %d, %d", $start, $per_page ) );

        // At the same time, count the number of queried posts
        $count = $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(ID) FROM " . $table_name . " WHERE post_type = 'my_post' AND post_status = 'publish'", array() ) );

        
        // Use WP_Query:
        
        // $all_blog_posts = new WP_Query(
        //     array(
        //         'post_type'         => 'my_post',
        //         'post_status '      => 'publish',
        //         'orderby'           => 'post_date',
        //         'order'             => 'DESC',
        //         'posts_per_page'    => $per_page,
        //         'offset'            => $start
        //     )
        // );

        // $count = new WP_Query(
        //     array(
        //         'post_type'         => 'my_post',
        //         'post_status '      => 'publish',
        //         'posts_per_page'    => -1
        //     )
        // );
        

        // Loop into all the posts
        foreach($all_blog_posts as $key => $post): 

            // Set the desired output into a variable
            $msg .= '
            <div class = "col-md-12">       
                <h2 style="font-size: 2.2rem;"><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></h2>
                <p>' . $post->post_excerpt . '</p>
                <p>' . $post->post_content_ . '</p>
            </div>';

        endforeach;

        // Optional, wrap the output into a container
        $msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";

        // This is where the magic happens
        $no_of_paginations = ceil($count / $per_page);

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }

        // Pagination Buttons logic     
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($first_btn && $cur_page > 1) {
            $pag_container .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $pag_container .= "<li p='1' class='inactive'>First</li>";
        }

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            // $pag_container .= "<li p='$pre' class='active'>Previous</li>"; default
            $pag_container .= "<li p='$pre' class='active'>&lt;</li>"; 
        } else if ($previous_btn) {
            // $pag_container .= "<li class='inactive'>Previous</li>";
            $pag_container .= "<li class='inactive'>&lt;</li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }

        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            // $pag_container .= "<li p='$nex' class='active'>Next</li>"; default
            $pag_container .= "<li p='$nex' class='active'>&gt;</li>";
        } else if ($next_btn) {
            // $pag_container .= "<li class='inactive'>Next</li>"; default
            $pag_container .= "<li class='inactive'>&gt;</li>"; 
        }

        if ($last_btn && $cur_page < $no_of_paginations) {
            $pag_container .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $pag_container .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";

        // We echo the final output
        echo 
        '<div class = "cvf-pagination-content">' . $msg . '</div>' . 
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';

    }
    // Always exit to avoid further execution
    exit();}