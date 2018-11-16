<!-- Add custom class into a-tag of main menu, to use scroll to id -->
<!-- One page website -->
<script>
    jQuery(function(){

        // menu
        // Normal, only scroll to id in same page, error while opening other page
        // _id or _class maybe need to modify 
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a").attr('id', 'btn-section-1'); //section 1, item 1
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item26 a").attr('id', 'btn-section-2');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item38 a").attr('id', 'btn-section-3');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item46 a").attr('id', 'btn-section-4');
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item48 a").attr('id', 'btn-section-5'); //section 5, item 5
        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item47 a").attr('id', 'btn-section-7');

        // jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a#btn-section-1").on("click",function(e) {
                // e.preventDefault();
                // jQuery('html, body').animate({
                //         scrollTop: jQuery("#section-1").offset().top
                // }, 1000);
                // độ trễ
        // });

        jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item26 a#btn-section-2").on("click",function(e) {
                event.preventDefault();
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

        // jQuery(".my-custom-main-menu-class ul.nav_main li.menu-item44 a#btn-section-1").on("click",function(e) {
        //         var jump=function(e)
        //         {
        //         if (e){
        //         e.preventDefault();
        //         var target = jQuery(this).attr("href");
        //         }else{ var target = location.hash; }

        //         jQuery('html,body').animate(
        //         { scrollTop: jQuery("#section-1").offset().top },1000,function()
        //                 {
        //                 location.hash = target;
        //                 });
        //         }

        //         jQuery('html, body').hide();

        //         jQuery(document).ready(function()
        //         {
        //                 jQuery('a[href^=#]').bind("click", jump);

        //         if (location.hash){
        //                 setTimeout(function(){
        //                 jQuery('html, body').scrollTop(0).show();
        //                 jump();
        //                 }, 0);
        //         }else{
        //                 jQuery('html, body').show();
        //         }
        //         });
        // });

    });

</script>
<script>
jQuery(function(){

        // Advanced, scroll to id anywhere, any page
        // Menu with custom link
        // Add href for Custom link: http://something/#section-1 (Admin page)
        // section-1 : custom id, which wanna scroll to 
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

});
</script>
<!-- Custom class into a-tag of main menu, to use scroll to id -->