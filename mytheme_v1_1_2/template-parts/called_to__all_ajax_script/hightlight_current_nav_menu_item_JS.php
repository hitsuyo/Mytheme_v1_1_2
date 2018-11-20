<?php
	//This script will be called to all_ajax_script.php
?>

<?php //Hightlight current menu item ?>
<script>
        // Current link CSS
        // jQuery(function() {
        //         var links = jQuery('li a.link').click(function() {
        //         links.removeClass('active');
        //         jQuery(this).addClass('active');
        //         });
        // });

        // hightlight current menu item
        jQuery("li a.link").on("click",function(){
                // alert('hello');
                var links = jQuery('li a.link').click(function() {
                links.removeClass('active');
                jQuery(this).addClass('active');
                });
        });

        //index
        jQuery("div.term_light").on("click",function(){
                // alert('hello');
                var links_term = jQuery('div.term_light').click(function() {
                links_term.removeClass('active');
                jQuery(this).addClass('active');
                });
        });


</script>