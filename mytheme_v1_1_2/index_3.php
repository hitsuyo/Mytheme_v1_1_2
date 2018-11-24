<?php



/*

 Template Name: Index 2

One page website

*/

get_header();

?>

<!-- This is place to replaced content from content-index_3.php -->
<div id="main-3"></div>

<script type="text/javascript" language="javascript">
    jQuery(document).ready(function() { /// Wait till page is loaded
        // jQuery('#abc').click(function(){
            // load div from file or all file
            jQuery('#main-3').load('content-index_3.php #main', function() {
        });
    // });
    }); //// End of Wait till page is loaded
</script>

<?php

// get_template_part( 'template-parts/header', get_post_type() );

// get_template_part( 'template-parts/content', get_post_type() );

// get_template_part( 'template-parts/post-type-books', 'book' );

// get_sidebar();

get_footer();

