/**
 * main.js file
 */
 
 
 /**
 * drop down menu effect
 */
 
 
jQuery(document).ready(function($) {

    $('#menu-main-menu').hover(
        function () {
            //show its submenu
            $('ul', this).stop().slideDown(100);
 
        }, 
        function () {
            //hide its submenu
            $('ul', this).stop().slideUp(100);          
        }
    );
     
});