<?php

add_theme_support( 'menus' );



// register_nav_menus(

//  array(

//  'main-nav' => 'Menu chính' ) );



// register_nav_menus(

//     array(

//         'my-main-menu' => __('Menu chính'),

//         'my-main-menu-demo' => __('Menu Demo'),

//         'footer-nav-1' => __('Menu chan trang 1'),

//         'footer-nav-2' => __('Menu chan trang 2')

//         )

// );

// add_action( 'init', 'register_my_menu' );







/*----------------------------------------------------*/

function multilevel_menu_demo_codrops( $atts_demo)

{

    ob_start();

?>

        <div class="my-custom-main-menu-class-demo-codrops">

            <ul id="menu-2" class="nav_main_demo-codrops">

<?php 

            $menuLocations_demo = get_nav_menu_locations(); 

            $menuID_demo = $menuLocations_demo['my-main-menu-demo-codrops']; 

            $primaryNav_demo = wp_get_nav_menu_items($menuID_demo); 

            $id_parent_demo =0;

            foreach ( (array) $primaryNav_demo as $navItem_demo ) {

                if($navItem_demo -> menu_item_parent == $id_parent_demo){

                    // echo '<li class="menu-item'.$navItem_demo ->ID.'"><p class="link link_and_icon parent_menu" href="'.$navItem_demo->url.'" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'<b style="float: right;">▾</b>'.'</p>'.'<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />'; 
                    echo '<li class="menu-item'.$navItem_demo ->ID.'"><a  href="'.$navItem_demo->url.'" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'</a>'; 
                    // echo '<li class="menu-item parent_menu'.$navItem_demo ->ID.'"><p class="link link_and_icon parent_menu" href="" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'</p>';
                    // echo '<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />';

                    $sub_demo="";

                    // echo '<li>Back</li>';

                    foreach ( (array) $primaryNav_demo as $navItem2_demo ) { 

                    if($navItem2_demo -> menu_item_parent == $navItem_demo ->ID){

                    $sub_demo .= '<li class="menu-item"  '.$navItem2_demo ->ID.'"> <a class="anchor_link link" href="'.$navItem2_demo->url.'" title="'.$navItem2_demo->title.'">'.$navItem2_demo->title.'</a>';
                    // $sub_demo .= '<li class="menu-item sub_item1"  '.$navItem2_demo ->ID.'"> <a class="link" href="" title="'.$navItem2_demo->title.'">'.$navItem2_demo->title.'</a>';

                    $sub2_demo="";

                    foreach ( (array) $primaryNav_demo as $navItem3_demo ) { 

                        if($navItem3_demo -> menu_item_parent == $navItem2_demo ->ID){

                        $sub2_demo .= '<li class="menu-item" ' .$navItem3_demo ->ID.'"> <a class="anchor_link link" href="'.$navItem3_demo->url.'" title="'.$navItem3_demo->title.'">'.$navItem3_demo->title.'</a></li>';

                    } 

                    }

                    $sub_demo .= '<ul>'.$sub2_demo.'</ul>'; 

                    $sub_demo .= '</li>';

                    } 

                }

                echo '<ul>'.$sub_demo.'</ul>';

                echo '</li>';

                }

        }

?>

            </ul>

        </div>



        <!-- <style>

            .show {display:block;  visibility: visible; transition-delay: 0.1s, 0.1s, 0.3s;}
            .hide {display: none;}

            li a.link.active { color:blue; }

        </style> -->


<!-- // -->
<script>
    jQuery(function(){
        // jQuery("div.my-custom-main-menu-class-demo ul li p.link_and_icon").on("click",function(){
        //     alert('clicked');

        //     jQuery(".my-custom-main-menu-class-demo ul li ul").addClass("expand_menu");
        // });
        jQuery(".my-custom-main-menu-class-demo-codrops ul.nav_main_demo-codrops > li > ul").addClass("sub_menu");
        jQuery(".my-custom-main-menu-class-demo-codrops ul.nav_main_demo-codrops li > ul > li > ul").addClass("sub_menu");



        
    });


    jQuery("div.my-custom-main-menu-class-demo-codrops li:has(ul)").on("click",function(){
        jQuery('li.menu-item252 ul.sub_menu1 li.sub_item1 a.anchor_link, li.menu-item237 ul.sub_menu1 li.sub_item1 a.anchor_link, li.menu-item253 ul.sub_menu1 li.sub_item1 a.anchor_link').not('li.menu-item240 ul.sub_menu1 li.sub_item1 a').on("click",function(e) { 
            // alert('clicked');
            e.preventDefault();
        });


        jQuery("li.sub_item1").on("click",function(e){
            // alert('clicked');
            // jQuery('.sub_menu1 li.sub_item1 a').attr("disabled","disabled");
            jQuery("ul.sub_menu2",this).toggle('fast');
            // jQuery("ul.sub_menu1",this).show();

            // prevent sub menu close after click
            e.stopPropagation();  
        });

        jQuery(".my-custom-main-menu-class-demo-codrops ul.nav_main_demo li ul li p").click(function(e){  
            e.stopPropagation();  
        });
    });


</script>

<?php 

return ob_get_clean();

}

add_shortcode( 'mtlevel_menu_demo_codrops', 'multilevel_menu_demo_codrops' );
?>