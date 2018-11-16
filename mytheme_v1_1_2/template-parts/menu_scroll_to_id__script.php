<!-- Add custom class into a-tag of main menu, to use scroll to id -->
<!-- One page website -->
<script>
    // Normal, only scroll to id in Homepage, error if open another page
    jQuery(function(){

        //Menu, Custom links
        // Something need to be changed every create a new menu
        
        // Add id for menu item
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a").attr('id', 'btn-section-1'); //section 1, item 1
        // jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item26 a").attr('id', 'btn-section-2');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item38 a").attr('id', 'btn-section-3');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item46 a").attr('id', 'btn-section-4');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item48 a").attr('id', 'btn-section-5'); //section 5, item 5
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item47 a").attr('id', 'btn-section-7');

        // jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a#btn-section-1").on("click",function(e) {
        //         e.preventDefault();
        //         jQuery('html, body').animate({
        //                 scrollTop: jQuery("#section-1").offset().top
        //         }, 1000);
        //         độ trễ
        // });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item26 a#btn-section-2").on("click",function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                        scrollTop: jQuery("#section-2").offset().top
                }, 1200);
        });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item38 a#btn-section-3").on("click",function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                        scrollTop: jQuery("#section-3").offset().top
                }, 1200);
        });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item46 a#btn-section-4").on("click",function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                        scrollTop: jQuery("#section-4").offset().top
                }, 1200);
        });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item48 a#btn-section-5").on("click",function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                        scrollTop: jQuery("#section-5").offset().top
                }, 1200);
        });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item47 a#btn-section-7").click(function(e) {
                e.preventDefault();
                jQuery('html, body').animate({
                        scrollTop: jQuery("#section-7").offset().top
                }, 1000);
        });

        

    });

</script>
<script>
    // Advanced, open link anywhere, anypage
    // URL of menu item : http://something/#section-1 (Amin page)
    // section-1 : id wannna scroll to (div,...)
    jQuery(function(){
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a#btn-section-1").on("click",function(e) {
                var jump=function(e)
                {
                if (e){
                e.preventDefault();
                var target = jQuery(this).attr("href");
                }else{ var target = location.hash; }

                jQuery('html,body').animate(
                { scrollTop: jQuery("#section-1").offset().top },1000,function()
                        {
                        location.hash = target;
                        });
                }

                jQuery('html, body').hide();

                jQuery(document).ready(function()
                {
                        jQuery('a[href^=#]').bind("click", jump);

                if (location.hash){
                        setTimeout(function(){
                        jQuery('html, body').scrollTop(0).show();
                        jump();
                        }, 0);
                }else{
                        jQuery('html, body').show();
                }
                });
            });
        }
    });
</script>
<!-- Custom class into a-tag of main menu, to use scroll to id -->