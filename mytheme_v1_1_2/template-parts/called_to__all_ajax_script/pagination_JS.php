<?php
	//This script will be called to all_ajax_script.php

    // Implement pagination post ajax

    // All this scripts support for init_pagination_ajax.php
?>

<script>
        window.onload=function(){
                jQuery('.slider').slick({
                autoplay:true,
                autoplaySpeed:1500,
                arrows:true,
                prevArrow:'<button type="button" class="slick-prev"></button>',
                nextArrow:'<button type="button" class="slick-next"></button>',
                centerMode:true,
                slidesToShow:3,
                slidesToScroll:1
                });
        };
</script>

<script>

    var slideCount = jQuery('div#slider ul li').length;
    var slideWidth = jQuery('div#slider ul li').width();
    var slideHeight = jQuery('div#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

//     jQuery('div#slider').css({ width: slideWidth, height: slideHeight });

//     jQuery('div#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

//     $('div#slider ul li:last-child').prependTo('div#slider ul');

    function moveLeft() {
        jQuery('div#slider ul').animate({
        left: + slideWidth
    }, 150, function () {
        jQuery('div#slider ul li:last-child').prependTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

    function moveRight() {
        jQuery('div#slider ul').animate({
        left: - slideWidth
    }, 200, function () {
        jQuery('div#slider ul li:first-child').appendTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

//     jQuery('div#slider p#control_prev-ID').click(function () {
//     moveLeft();
//     });

//     jQuery('p.control_next').click(function () {
//     moveRight();
//     });

jQuery("div#slider p#control_prev-ID").on("click",function(){
        // alert('Hello');
        moveLeft(); 
});

jQuery("div#slider p#control_next-ID").on("click",function(){
        // alert('Hello');
        moveRight(); 
});

// jQuery("div#slider p#control_prev-ID").on("click",function(){
//         alert('hello');
// });


//     $('#checkbox').change(function(){
//     setInterval(function () {
//         moveRight();
//     }, 3000);
//     });

//     setInterval(function () {
//         moveRight();
//     }, 6000);
//     });

window.onload = function(){

};

setInterval(moveRight, 6000);
</script>