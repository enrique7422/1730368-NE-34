/* global perfect_ecommerce_storeScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function perfect_ecommerce_store_open() {
	document.getElementById("sidelong-menu").style.width = "250px";
}
function perfect_ecommerce_store_close() {
	document.getElementById("sidelong-menu").style.width = "0";
}

function perfect_ecommerce_store_resp_open() {
	document.getElementById("top-menu").style.width = "250px";
}
function perfect_ecommerce_store_resp_close() {
	document.getElementById("top-menu").style.width = "0";
}

(function( $ ) {
	$(document).ready(function(){
		$(".menu-sec .product-cat").hide();
	    $("button.product-btn").click(function(){
	        $(".menu-sec .product-cat").toggle();
	    });
	});	
})( jQuery );