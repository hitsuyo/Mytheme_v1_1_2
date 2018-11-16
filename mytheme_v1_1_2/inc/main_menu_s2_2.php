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

function multilevel_menu_demo_2( $atts_demo)

{

    ob_start();

?>

        <div class="my-custom-main-menu-class-demo" style="position: relative; z-index: 11;">

            <ul id="menu-2" class="nav_main_demo" style=" -webkit-transition: opacity 3s;">

<?php 

            $menuLocations_demo = get_nav_menu_locations(); 

            $menuID_demo = $menuLocations_demo['my-main-menu-demo']; 

            $primaryNav_demo = wp_get_nav_menu_items($menuID_demo); 

            $id_parent_demo =0;

            foreach ( (array) $primaryNav_demo as $navItem_demo ) {

                if($navItem_demo -> menu_item_parent == $id_parent_demo){

                    // echo '<li class="menu-item'.$navItem_demo ->ID.'"><p class="link link_and_icon parent_menu" href="'.$navItem_demo->url.'" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'<b style="float: right;">▾</b>'.'</p>'.'<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />'; 
                    echo '<li class="menu-item'.$navItem_demo ->ID.'"><p class="link link_and_icon parent_menu" href="'.$navItem_demo->url.'" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'<b id="icon_drop_down" style="float: right;">▾</b>'.'</p>'; 
                    // echo '<li class="menu-item parent_menu'.$navItem_demo ->ID.'"><p class="link link_and_icon parent_menu" href="" title="'.$navItem_demo->title.'">'.$navItem_demo->title.'</p>';
                    // echo '<img class="link_and_icon" id="icon_down" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/if_triangle-down_16x16.png" />';
                    echo '</li>';

                    $sub_demo="";

                    // echo '<li>Back</li>';

                    foreach ( (array) $primaryNav_demo as $navItem2_demo ) { 

                    if($navItem2_demo -> menu_item_parent == $navItem_demo ->ID){

                    $sub_demo .= '<div class="menu-item sub_item1"  '.$navItem2_demo ->ID.'"> <a class="anchor_link" style="color: white;" class="link" href="'.$navItem2_demo->url.'" title="'.$navItem2_demo->title.'">'.$navItem2_demo->title.'<b id="icon_drop_right" style="float: right; color: white;">▸</b>'.'</a>';
                    // $sub_demo .= '<li class="menu-item sub_item1"  '.$navItem2_demo ->ID.'"> <a class="link" href="" title="'.$navItem2_demo->title.'">'.$navItem2_demo->title.'</a>';

                    $sub2_demo="";

                    foreach ( (array) $primaryNav_demo as $navItem3_demo ) { 

                        if($navItem3_demo -> menu_item_parent == $navItem2_demo ->ID){

                        $sub2_demo .= '<li class="menu-item sub_item2" ' .$navItem3_demo ->ID.'"> <a style="color: white;" class="link" href="'.$navItem3_demo->url.'" title="'.$navItem3_demo->title.'">'.$navItem3_demo->title.'</a></li>';

                    } 

                    }

                    $sub_demo .= '<ul>'.$sub2_demo.'</ul>'; 

                    $sub_demo .= '</div>';

                    } 

                }

                echo '<ul>'.$sub_demo.'</ul>';

                // echo '</li>';

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


<style>
    .my-custom-main-menu-class-demo   {
        height: 30px; /* set to the height you want your menu to be */
        margin: 0 0 10px; /* just to give some spacing */
    }
    .my-custom-main-menu-class-demo ul    {
        margin: 0; padding: 0; /* only needed if you have not done a CSS reset */
    }
    .my-custom-main-menu-class-demo li    {
        display: block;
        /* float: left; */
        float: none;
        line-height: 30px; /* this should be the same as your #main-nav height */
        height: 30px; /* this should be the same as your #main-nav height */
        margin: 0; padding: 0; /* only needed if you don't have a reset */
        position: relative; /* this is needed in order to position sub menus */
    }
    .my-custom-main-menu-class-demo li a  {
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 0 15px;
    }
    .my-custom-main-menu-class-demo .current-menu-item a, .my-custom-main-menu-class-demo .current_page_item a, .my-custom-main-menu-class-demo a:hover {
        color: #000;
        background: #ccc;
    }

    /* ------------------------ */

    .my-custom-main-menu-class-demo ul ul { /* this targets all sub menus */
        display: none; /* hide all sub menus from view */
        position: absolute;
        top: 30px; /* this should be the same height as the top level menu -- height + padding + borders */
        z-index: 99;
    }
    .my-custom-main-menu-class-demo ul ul li { /* this targets all submenu items */
        float: none; /* overwriting our float up above */
        /* width: 150px; set to the width you want your sub menus to be. This needs to match the value we set below */
        width: 250px;
    }
    .my-custom-main-menu-class-demo ul ul li a { /* target all sub menu item links */
        /* padding: 5px 10px;  */
        /* give our sub menu links a nice button feel */
    }

    /* .my-custom-main-menu-class-demo ul li:hover > ul { */
        /* display: block;  */
        /* show sub menus when hovering over a parent */
    /* }  */

    /* .my-custom-main-menu-class-demo ul ul li ul { */
        /* target all second, third, and deeper level sub menus */
        /* left: 250px;  */
        /* this needs to match the sub menu width set above -- width + padding + borders */
        /* top: 0;  */
        /* this ensures the sub menu starts in line with its parent item */

        /* css nay de hien thi cac sub item qua ke ben */
        /* an cac css nay neu muon sub item hien thi tu tren xuong */
    /* } */
    /* ----------------------------------------------------------------------------------------------------------- */
    /* .my-custom-main-menu-class-demo {
        background: blue;
    } */

    /* CUSTOMIZE */
    .my-custom-main-menu-class-demo ul ul { /* this targets all sub menus */
        display: none; /* hide all sub menus from view */
        position: absolute;
        top: 30px; /* this should be the same height as the top level menu -- height + padding + borders */
        z-index: 99;
    }

    .my-custom-main-menu-class-demo ul ul li { /* this targets all submenu items
        float: none; /* overwriting our float up above */
        /* width: 150px; set to the width you want your sub menus to be. This needs to match the value we set below */
        width: 250px;
    }

    /* ul.sub_menu1 {
        background-color: black;
        height: 200px;
        margin-top: -50px;
    } */

    /* .my-custom-main-menu-class-demo ul li ul {
        -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                -o-transition: all 0.3s ease;
                    transition: all 0.3s ease;
    } */



    .my-custom-main-menu-class-demo li p  {
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 0 15px;
    }

    .my-custom-main-menu-class-demo .current-menu-item p, .my-custom-main-menu-class-demo .current_page_item p, .my-custom-main-menu-class-demo p:hover {
        color: #000;
        background: #ccc;
        /* background: rgba(25, 25, 25, .5); */
        cursor: pointer;

/* transition: all .3s linear; */
                    /* -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                -o-transition: all 0.3s ease;
                    transition: all 0.3s ease; */
    }

    /* .my-custom-main-menu-class-demo ul ul li p { 
        padding: 5px 10px; 
        cursor: pointer;
    } */

        .my-custom-main-menu-class-demo ul ul li p, .my-custom-main-menu-class-demo ul ul li a {
            background: black;
            /* color: white; */
            /* background: rgba(25, 25, 25, .5); */
            text-decoration: none;
            cursor: pointer;
        }

        /* .my-custom-main-menu-class-demo ul ul li ul { */
            /* target all second, third, and deeper level sub menus */
            /* left: 250px;  */
            /* this needs to match the sub menu width set above -- width + padding + borders */
            /* top: 0;  */
            /* this ensures the sub menu starts in line with its parent item */

            /* css nay de hien thi cac sub item qua ke ben */
            /* an cac css nay neu muon sub item hien thi tu tren xuong */
        /* } */

    /* .link_and_icon{
        display: inline-block;
        vertical-align: text-top;
    } */
    
    #icon_down{  position: absolute; margin: 0; padding: 0; margin-left: 40px; margin-top: -36px; display: none; z-index: -10; }

    @media screen and (min-width: 1024px) { 
        .my-custom-main-menu-class-demo ul ul { 
            top: 45px; 
        }

        .my-custom-main-menu-class-demo li {float: left;} 
        #icon_down{display: block;}
        /* p.parent_menu:hover{cursor: none;} */

        /* .my-custom-main-menu-class-demo ul li ul {
            -webkit-transition: all 0.25s ease;
            -moz-transition: all 0.25s ease;
                -ms-transition: all 0.25s ease;
                -o-transition: all 0.25s ease;
                    transition: all 0.25s ease;
        } */
        
        .my-custom-main-menu-class-demo ul li:hover > ul {
            display: block; /* show sub menus when hovering over a parent */
        } 

        .my-custom-main-menu-class-demo ul li:hover > ul {
            
            /*show sub menus when hovering over a parent */


              /* transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s; */
              /* transition: all .3s linear; */
              /* display: block; */
        }

        .my-custom-main-menu-class-demo li p{
            /* display: block; */
            height: 30px;
            line-height: 30px;
            padding: 0 15px;
            cursor: pointer;
        }

        .my-custom-main-menu-class-demo ul ul li p, .my-custom-main-menu-class-demo ul ul li a {
            background: black;
            /* color: white; */
            background: rgba(25, 25, 25, .5);
            cursor: pointer;
        }

        .my-custom-main-menu-class-demo ul ul li ul {
            /* target all second, third, and deeper level sub menus */
            left: 250px; 
            /* this needs to match the sub menu width set above -- width + padding + borders */
            top: 0; 
            /* this ensures the sub menu starts in line with its parent item */

            /* css nay de hien thi cac sub item qua ke ben */
            /* an cac css nay neu muon sub item hien thi tu tren xuong */
        }

        .link_and_icon{
            cursor: not-allowed; 
            /* funny */

        } 

    }

    .expand_menu{display: block;}

</style>

<script>
    // jQuery(.my-custom-main-menu-class-demo a)
    
    jQuery(function(){
        // jQuery("div.my-custom-main-menu-class-demo ul li p.link_and_icon").on("click",function(){
        //     alert('clicked');

        //     jQuery(".my-custom-main-menu-class-demo ul li ul").addClass("expand_menu");
        // });
        // jQuery(".my-custom-main-menu-class-demo ul.nav_main_demo > li > ul").addClass("sub_menu1");
        // jQuery(".my-custom-main-menu-class-demo ul.nav_main_demo li > ul > li > ul").addClass("sub_menu2");

        jQuery(".my-custom-main-menu-class-demo ul.nav_main_demo > ul").addClass("sub_menu1");

        // jQuery("li.sub_item2").hide();
        // jQuery("div.my-custom-main-menu-class-demo ul:has( > ul)").on("click",function(){
            jQuery("div.my-custom-main-menu-class-demo ul:has(ul)").on("click",function(){
            // alert('clicked');

            // jQuery(".my-custom-main-menu-class-demo ul li ul").addClass("expand_menu");
            // jQuery("ul",this).slideDown();
            // jQuery("ul",this).toggle('slow');
            // jQuery("ul",this).toggle('fast');
            // jQuery("ul.sub_menu1",this).toggle('fast');
            // jQuery("ul.sub_menu1",this).slideDown();

            // ****************************************************
            jQuery("ul.sub_menu1",this).slideToggle(); //default
            // ****************************************************

            // jQuery("ul.sub_menu1",this).slideDown('medium');
            // jQuery("ul.sub_menu1",this).slideUp('medium');


                        // Add CSS
            // jQuery("div.my-custom-main-menu-class-demo li:has(ul) p",this).toggle(
            //     function(){jQuery("div.my-custom-main-menu-class-demo li:has(ul) p").css({"color": "blue"});},
            //     function(){jQuery("div.my-custom-main-menu-class-demo li:has(ul) p").css({"color": "green"});
            // );

            

            // jQuery("ul.sub_menu1",this).show();
            

            // jQuery("li.sub_item2").hide();

            // jQuery('div.my-custom-main-menu-class-demo li:has(ul) p').text('The replaced text.');
                    
            // jQuery("div.my-custom-main-menu-class-demo li").css("background-color","red");

        });
        // jQuery('div.menu-item240 .sub_menu1 li.sub_item1 a').attr("disabled","disabled");
        
        // disable function u want
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

        jQuery(".my-custom-main-menu-class-demo ul.nav_main_demo li ul li p").click(function(e){  
            // e.stopPropagation();  
        });
    });


    // var item_demo = document.getElementById()
</script>

<script>
    // jQuery('div.menu-item240 .sub_menu1 li.sub_item1 a').click(function(){
    //      jQuery('div.menu-item240 .sub_menu1 li.sub_item1 a').attr("disabled","disabled");
    //  });

    
</script>

<script>


</script>

<?php 

return ob_get_clean();

}

add_shortcode( 'mtlevel_menu_demo_2', 'multilevel_menu_demo_2' );
?>