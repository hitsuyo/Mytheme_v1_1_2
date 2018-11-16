<?php

/*

Template Name: demo

http://demo.smnet.vn/quangcaotaxi/wp-admin/customize.php?url=http%3A%2F%2Fdemo.smnet.vn%2Fquangcaotaxi%2F

*/


?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<!-- <php require get_template_directory() . '/header_demo.php'; ?> -->

<div class="main-menu col s12 l9" id="main-menu-ID" style="z-index: 11; ">

    <!-- wp_nav_menu( array( 'theme_location' => 'my-main-menu', 'container_class' => 'my-custom-main-menu-class' ) );  -->


    <?php echo do_shortcode( '[mtlevel_menu_demo_2]' );?>

</div>

