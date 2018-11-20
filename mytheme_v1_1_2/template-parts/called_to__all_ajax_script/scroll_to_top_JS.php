<?php
	//This script will be called to all_ajax_script.php
?>

<script>
            // BUTTON : scroll to Top
        function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
        }

        // When the user scrolls down 20px from the top of the document, show the button
    //     window.onscroll = function() {scrollFunction()};
        jQuery(window).on('scroll', function () {
            scrollFunction();
            });
    //     window.onscroll = function() {
    //             alert('SCrolled');
    //     };

        function scrollFunction() {
                
                if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
                        document.getElementById("myBtnScrollTop").style.display = "block";
                } else {
                        document.getElementById("myBtnScrollTop").style.display = "none";
                }
        }

        var timeOut;
        function scrollToTop() {
                if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
                window.scrollBy(0,-95);
                timeOut=setTimeout('scrollToTop()',10);
                }
                else clearTimeout(timeOut);
        }
</script>