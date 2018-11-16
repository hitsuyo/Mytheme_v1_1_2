<?php



/*

 Template Name: Index 2

One page website

*/

get_header();

?>

    <!-- <img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/sea-1.jpg" style="margin: auto; width: 100%; z-index: 1;" class="responsive-img"/> -->


    
    <!-- <div class="parallax-index"> -->
        <!-- <img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/sea-1.jpg" style="margin: auto; width: 100%; z-index: 1;" class="responsive-img"/> -->
    <!-- </div> -->

    <!-- <ul style="width: 100%;">
        <li style="display: inline;"><a href="#"><img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/facebook-2429746_640.png" style="width: 46px; height: 46px;"></a></li>
        <li style="display: inline;"><a href="#"><img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/google-plus-940316_640.png" style="width: 46px; height: 46px;"></a></li>
        <li style="display: inline;"><a href="#"><img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/youtube-2433301_640.png" style="width: 46px; height: 46px;"></a></li>
        <li style="display: inline;"><a href="#"><img src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/vimeo-881496_640.png" style="width: 46px; height: 46px;"></a></li>
    </ul> -->

    <style>
        .parallax-index {
            /* The image used */
            background: url('http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/taxi-1.jpg') no-repeat;
            /* background-size: 100% auto; */

            width: 100%;
            height: 500px; 

            

             background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            /* background-size: cover;  */

            background-size:contain;

        }
    </style>



    <div class="main-index" style="z-index: 2; margin-top: 100px;">

        <!-- <div class="hr-div" style="width: 100%; z-index: 2;" id="section-1"></div>  --> 
        <!-- <div class="giai_phap_qc "  style="z-index: 1; background-color: #FF742C;"> -->
        <div class="giai_phap_qc "  style="z-index: 1; background-color: #6690FF;">
            <div class="row container" style="">
                <div class="col s12">
                    <div class="col s12 m6 l4" style="display: inline-block;  ">
                    </div>
                </div>
            </div>
        </div>

        <style>
            .hinh_banner img{width: 120%; height: 120%;}
        </style>
        
        <!-- <div class="hr-div four" style="width: 100%; z-index: 1; background-color: #6690FF;" id="section-demo"></div>     -->
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #20B2AA; z-index: 1; border-radius: 20px;"></div> -->
        <!-- <div class="tin_tuc no-container"  style="z-index: 1; width: 100%; background-color: #F0F8FF;">
            <br>
            <br>
            <p class="center-text" style="font-weight: bold; text-align: center; font-size: 2.8rem;">ABC</p>
            <div style="height: 100%; width: 100%; " class="content-tin-tuc" id="content-tin-tuc-ID">
            <a href="javascript:void(0);"  onClick="filter_posts_by_category('cat1', 1)">cat1</a>
            <a href="javascript:void(0);"  onClick="filter_posts_by_category('cat2', 1)">cat2</a>
            <a href="javascript:void(0);"  onClick="filter_posts_by_category('cat3', 1)">cat3</a>
            <a href="javascript:void(0);"  onClick="filter_posts_by_category('all', 1)">all</a>
                <?php
                    // require get_template_directory() . '/page-blog.php'; 
                    // require get_template_directory() . '/template-parts/post-type-my_posts.php';
                    // require get_template_directory() . '/template-parts/demo.php';
                ?>
            </div>
        </div> -->
        
        
        <div class="hr-div four" style="width: 100%; z-index: 1; background-color: #6690FF;" id="section-4"></div>    
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #20B2AA; z-index: 1; border-radius: 20px;"></div> pink -->
        <div class="tin_tuc no-container"  style="z-index: 1; width: 100%; background-color: #D3D3D3;">
            <br>
            <br>
            <p class="center-text" style="font-weight: bold; text-align: center; font-size: 2.8rem; color: white;">BÀI VIẾT</p>
            <!-- <div style="height: 100%; width: 100%; " class="content-tin-tuc" id="content-tin-tuc-ID"> -->
            <div style="width: 100%; " class="content-tin-tuc" id="content-tin-tuc-ID">
                <?php
                    // require get_template_directory() . '/page-blog.php'; 
                    // require get_template_directory() . '/template-parts/post-type-my_posts.php';
                    // require get_template_directory() . '/template-parts/demo.php';
                ?>
            </div>
            <div style="background-color: #F6F6F6; width: 100%;" >
            <!-- <div style="background-color: #F6F6F6; " > -->
                <div style="margin: 0 auto; width: 451.25px; max-width: 100%; background-color: #F6F6F6;  " >
                    <div class="all_term term_light" style="display:inline-block; padding: 0 15px; padding-top: 20px;" onclick="load_taxonomy_all()"><p>All</p></div>
                    <div class="project1 term_light"  style="display:inline-block; padding: 0 15px; padding-top: 20px;" onclick="load_taxonomy()"><p>Dự án 1</p></div>
                    <div class="project2 term_light"  style="display:inline-block; padding: 0 15px; padding-top: 20px;" onclick="load_taxonomy()"><p>Dự án 2</p></div>
                    <div class="project3 term_light"  style="display:inline-block; padding: 0 15px; padding-top: 20px;" onclick="load_taxonomy()"><p>Dự án 3</p></div>
                    <div class="project4 term_light"  style="display:inline-block; padding: 0 15px; padding-top: 20px;" onclick="load_taxonomy()"><p>Dự án 4</p></div>
                </div>
            </div>

            <style>
                div.term_light.active{color:white; background-color: orange;}
            </style>

            <!-- <br> -->
            <div class="post_taxonomy" ></div>
        </div>

        
        <div class="hr-div two" style="width: 100%; z-index: 1; background-color: #D3D3D3;" id="section-2"></div> 
        <div class="" style="width: 100%; height: 45px; background-color: #A62F00; z-index: 1; border-radius: 20px;" ></div>
        <div style="background-color: #F6F6F6;">
            <div class="tuyen_dung container" style="z-index: 1;">
                <br>
                <div class="readmore_a01" onclick="read_more_a01()" style=""><p style="font-weight: bold; color: burlywood; cursor: pointer;">Xem thêm</p></div>
                <!-- <div class="readmore_tuyendung" onmouseover="read_more_tuyendung()" style=""><p style="font-weight: bold; color: blue; ">Xem thêm</p></div> -->
                
            </div>
        </div>
        <!-- FD367E -->
        <div class="hr-div three" style="width: 100%; z-index: 2; background-color: #F6F6F6;" id="section-3"></div>
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #FD367E; z-index: 1; border-radius: 20px;" ></div> -->
        <div class="" style="width: 100%; height: 45px; background-color: #20B2AA; z-index: 1; border-radius: 20px; " ></div>
        <!-- <div style="background: url('http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/knowledge.jpg') no-repeat; z-index: 1;">
        </div> -->
        <div style="background-color: #F6F6F6;">
            <div class="kinh_nghiem container" style="z-index: 2; background-color: #F6F6F6;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
            </div>
        </div>

        <!-- <div class="hr-div" style="width: 100%; z-index: 2;" id="section-1"></div> -->
        <div style="background-color: #FAFAD2; border-radius: 20px;"  id="section-1">
            <div class="gioi_thieu container"  style="z-index: 2; ">
                <!-- <p class="" style="font-weight: bold; text-align: center; font-size: 2rem;">GIỚI THIỆU</p> -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>

        <!-- Slider autoplay-->
        <div class="hr-div six" style="width: 100%; z-index: 1;" id=""></div> 
        <div class="" style="width: 100%; height: 45px; background-color:  #A62F00; z-index: 1; border-radius: 20px;"></div>
        <div class="no-container slider_customers "  style="z-index: 1;">
            <div class="slider_customers_content">
                <br>
                <br>
                <div style="width: 35%; height: 1px; background-color: #E5E5E5; margin: 0 auto;"></div>
                <br>
                <br>
                <?php
                    // require get_template_directory() . '/template-parts/slider_autoplay_customers.php';
                ?>
            </div>
        </div>


        <div class="hr-div five" style="width: 100%; z-index: 1; background-color: ;" id="section-5"></div>    
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #FD367E; z-index: 1; border-radius: 20px;"></div> -->
        <div class="" style="width: 100%; height: 45px; background-color: #A62F00; z-index: 1; border-radius: 0;" ></div>
        <div style="background-color: black;">
            <div class="chinh_sach container"  style="z-index: 1;" >
                <br>
                <p class="center-text" style="font-weight: bold; text-align: center; font-size: 2.8rem; color: #FFB6C1">CHÍNH SÁCH</p>
                <!-- <div class="row">
                    <div class="col s12 m6" style="display: inline-block;" ><button style="text-align: center;" id="chs-giao-hang" onclick="data_fetch_csgh();">Chính sách giao hàng</button></div>
                    <div class="col s12 m6" style="display: inline-block;"><p style="text-align: center;">Chính sách giao hàng</p></div>
                </div> -->
                <!-- <div style="height: 100%; width: 100%; " class="content-chinh-sach" id="content-chinh-sach-ID"> -->
                <div style="width: 100%; " class="content-chinh-sach" id="content-chinh-sach-ID">
                    <?php 
                        // get_template_part(). '/template-parts/post-type-chinhsachs.php';  
                        // do_action( "get_template_part_{/template-parts}", 'post-type', 'chinhsachs' );

                        // $args = array( 'post_type' => 'chinhsach', 'posts_per_page' => 10 );
                        // $loop = new WP_Query( $args );
                        // while ( $loop->have_posts() ) : $loop->the_post();
                        //   the_title();
                        //   echo '<div class="entry-content">';
                        //   the_content();
                        //   echo '</div>';
                        // endwhile;

                        require get_template_directory() . '/template-parts/post-type-chinhsachs.php';
                    ?>
                </div>
            </div>
        </div>

        <!-- LASTEST POSTS -->
        <div class="hr-div six" style="width: 100%; z-index: 1; " id="section-6"></div> 
        <!-- <div class="" style="width: 100%; height: 45px; background-color:  #A62F00; z-index: 1; border-radius: 20px;"></div> -->
        <div class="container lastest_posts "  style="">
            <div class="lastest_posts_content">
                <?php
                    // require get_template_directory() . '/page-blog.php'; 
                    // require get_template_directory() . '/template-parts/lastest_my_posts.php';
                ?>
            </div>
        </div>
        

        <div class="hr-div seven" style="width: 100%; z-index: -1;" id="section-7"></div> 
        <!-- <div class="hr-div seven" style="width: 100%; z-index: -1;" ></div>  -->
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #FD367E; z-index: -1; "></div> -->
        <!-- <div class="" style="width: 100%; height: 45px; background-color: #20B2AA; z-index: 1; " ></div> -->
        <div class="lien_he "  style="z-index: -1; background-color: #004A85;">
            <div class="lien_he_content container">
                <br>
                <br>
                <br>
                
                <style>
                    .lien_he p {color: white;}
                </style>
                <!-- php echo do_shortcode('[contact-form-7 id="162" title="Form liên hệ 1"]'); ?> -->
                <br>
                <br>
                <!-- <php echo do_shortcode( '[contact-form-7 id="162" title="Form liên hệ 1"]' ); ?> -->
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    

    <!-- <script>
        function myFunction() {
            var elmnt = document.getElementById("tuyen_dung");
            elmnt.scrollIntoView();
        }
    </script> -->
<?php

// get_template_part( 'template-parts/header', get_post_type() );

// get_template_part( 'template-parts/content', get_post_type() );

// get_template_part( 'template-parts/post-type-books', 'book' );

// get_sidebar();

get_footer();

