<?php
	//This script will be called to all_ajax_script.php
?>

<script type="text/javascript">

    // Load more Posts on CLick
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
    // var page = 1; // What page we are on.
    var ppp = 3; // Post per page
    var _offset = 3;
    jQuery("#more_posts-ID").on("click",function(){ // When btn is pressed.
            // jQuery("#more_posts-ID").attr("disabled",true); // Disable the button, temp.
            // $("#more_posts-ID").prop('disabled', true);
            jQuery('#more_posts-ID').remove(); // remove button/
            jQuery.post(ajaxUrl, {
                    action:"more_post_ajax",
                    // offset: (page * ppp) + 1,
                    offset: 3,
                    // ppp: ppp
                    ppp: 3
            }).success(function(posts){
                    // if(posts.length > 0){
                            // page++;
                            // _offset = _offset + 3;
                            jQuery(".load_post_here").replaceWith(posts); // CHANGE THIS!
                            jQuery("#more_posts-ID").attr("disabled",false);
                    // }
                    // else{
                    //         jQuery("#more_posts-ID").html('No More Posts');  
                    // }

            });
    });

    // Tổng số bài post
    // wp_count_posts()->publish

</script>