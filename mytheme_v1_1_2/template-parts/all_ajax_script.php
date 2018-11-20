<?php
    include 'called_to__all_ajax_script/scroll_to_top_JS.php';
    include 'called_to__all_ajax_script/pagination_JS.php';
    include 'called_to__all_ajax_script/hightlight_current_nav_menu_item_JS.php';
    include 'called_to__all_ajax_script/load_more_posts_JS.php';
    include 'called_to__all_ajax_script/load_post_by_terms_JS.php';

    // This file use some functions in init.php
    // This file always be invoked at the end of footer.php
?>



<!-- taxonomy -->

<script>
function term_ajax_get(termID) {
//     jQuery("a.ajax").removeClass("current");
//     jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
//     jQuery("#post_filtered").show();
    var ajaxurl = "<php echo admin_url('admin-ajax.php')?>";
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        // data: {"action": "load-filter2", term: termID },
        data: {"action": "prefix_load_term_posts", term: termID },
        success: function(response) {
            jQuery("#post_filtered").html(response);
        //     jQuery("#loading-animation").hide();
            return false;
        }
    });
}
</script>




    <script>
            // load them tat ca post con lai
            function load_taxonomy_all_more()
            {
            var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
                    // alert('clicked');

                    jQuery('.post_taxonomy').html('<img style="" src="http://something.vn/wp-content/uploads/2018/08/ezgif.com-gif-maker.gif" alt="loading" >');
                    jQuery.ajax( {
                            url: ajaxUrl,
                            type: 'post',
                            
                            data : {
                                    action: 'load_post_by_taxonomy_all_more',
                            }

                    }).success(function(posts_taxonomy_all_more){
                                    jQuery(".post_taxonomy").html(posts_taxonomy_all_more); // CHANGE THIS!
                                    

                    })
                    ;
                    
            }
    </script>

    <script>
            // bonus
            function read_more_a01()
            {
                    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
                    // jQuery("div.readmore_tuyendung").on("click",function(){ // When btn is pressed.
                        //     alert('Clicked');

                            jQuery.ajax( {
                                    url: ajaxUrl,
                                    // url: init_bonus.php,
                                    type: 'post',
                                    
                                    data : {
                                            action: 'load_a01_more',
                                    }
                            // }).success(function(tuyendungmore){
                            //                 jQuery("div.readmore_tuyendung").html(tuyendungmore); // CHANGE THIS!

                            // })
                            }).done(function(a01more){
                                            jQuery(".readmore_a01").html(a01more); // CHANGE THIS!		
											//.html will overwrite element
                            })
                            ;
                    // });
            }
            // window.read_more_a01();
    </script>

   