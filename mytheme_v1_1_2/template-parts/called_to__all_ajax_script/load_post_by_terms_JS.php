<?php
	//This script will be called to all_ajax_script.php
?>


<?php //Load posts by every term of taxonomy ?>
<script>
        function load_taxonomy_all()
        {
                var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";

                            // icon loading before load data
                        // jQuery('.post_taxonomy').html('<img style="width: 32px;" src="http://something.vn/wp-content/uploads/2018/08/ezgif.com-gif-maker.gif" alt="loading" >');
                        jQuery('.post_taxonomy').html('<img style="width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/ezgif.com-gif-maker.gif" alt="loading" >');
                        jQuery.ajax( {
                                url: ajaxUrl,
                                type: 'post',
                                
                                data : {
                                        action: load_post_by_taxonomy_all,
                                }

                        }).success(function(posts_taxonomy_all){
                                        jQuery(".post_taxonomy").html(posts_taxonomy_all); // CHANGE THIS!
                                        

                        })
                        ;
                        
        }
        window.load_taxonomy('load_post_by_taxonomy_all');  
        // jQuery(".loading-icon").hide();


        function load_taxonomy(actionName)
        {
				var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
                // jQuery("button.taximailinh").on("click",function(){ // When btn is pressed.
                        // alert('Clicked');

                        jQuery('.post_taxonomy').html('<img style="margin-left: 49%; width: 32px;" src="<?php echo get_template_directory_uri() ?>/assets/img/ezgif.com-gif-maker.gif" alt="loading" >');
                        jQuery.ajax( {
                                url: ajaxUrl,
                                type: 'post',
                                
                                data : {
                                        action: actionName,
                                }
                        }).success(function(posts_taxonomy){
                                        jQuery(".post_taxonomy").html(posts_taxonomy); // CHANGE THIS!

                        })
                        ;
                // });
        }

</script>

 <script>
        jQuery(".all_term").on("click",function(){ // When btn is pressed.
                window.load_taxonomy('load_post_by_taxonomy_all');  
        });
        jQuery(".project1").on("click",function(){ window.load_taxonomy('load_post_by_taxonomy_project1'); });

        jQuery(".project2").on("click",function(){ window.load_taxonomy('load_post_by_taxonomy_project2'); });

        jQuery(".project3").on("click",function(){ window.load_taxonomy('load_post_by_taxonomy_project3'); });

        jQuery(".project4").on("click",function(){ window.load_taxonomy('load_post_by_taxonomy_project4'); });
</script>