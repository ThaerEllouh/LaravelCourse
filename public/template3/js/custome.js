/*global $, window*/
$(function () {
    'use strict';
    
    //Trigger Nice Scroll Plugin
    $('html').niceScroll({
        cursorcolor: '#f7600e',
        cursorwidth: 10,
        cursorborderradius: 0,
        cursorborder: '1px solid #f7600e'
    });
    
    //Change Header Height
    $(".header").height($(window).height());
    //Adjast intro class Item Center
    $(".intro").each(function () {
        $(this).css("paddingTop", (($(window).height() - $(".intro").height()) / 2) - 50);
    });
    
    //Scroll To Features
    $(".arrow i").click(function () {
        $("body, html").animate({
            scrollTop: $(".features").offset().top
        }, 500);
    });
    
    $(".hire").click(function () {
        $("body, html").animate({
            scrollTop: $(".our-team").offset().top
        }, 500);
    });
    
    $(".work").click(function () {
        $("body, html").animate({
            scrollTop: $(".our-work").offset().top
        }, 500);
    });
    
    //Show Our Work Box
    $(".show-more").click(function () {
        $(".item-box .hidden").fadeIn(1000);
    });
    
    //Check Testimonials
    var rihgtArrow = $(".testim .fa-chevron-right"),
        leftArrow = $(".testim .fa-chevron-left");
    function checkClients() {
        if ($(".client:first").hasClass("active")) {
            leftArrow.fadeOut();
        } else {
            leftArrow.fadeIn();
        }
        
        //دالة if المختصرة 
        //$(".client:first").hasClass("active") ? leftArrow.fadeOut() : //leftArrow.fadeIn();
        
        if ($(".client:last").hasClass("active")) {
            rihgtArrow.fadeOut();
        } else {
            rihgtArrow.fadeIn();
        }
        
        //دالة if المختصرة 
        //$(".client:last").hasClass("active") ? rihgtArrow.fadeOut() : //rihgtArrow.fadeIn();

    }
    checkClients();
    
    $(".testim i").click(function () {
        if ($(this).hasClass("fa-chevron-right")) {
            $(".testim .active").fadeOut(100, function () {
                $(this).removeClass("active").next(".client").addClass("active").fadeIn();
                checkClients();
            });
        } else {
            $(".testim .active").fadeOut(100, function () {
                $(this).removeClass("active").prev(".client").addClass("active").fadeIn();
                checkClients();
            });
        }
        
    });
    
});