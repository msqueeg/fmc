/* ==============================================
   Countdown
=============================================== */

function getDayOfWeek(date, dayOfWeek,hours,minutes){
	var resultDate = new Date(date.getTime());
	resultDate.setDate(date.getDate() + (7 + dayOfWeek - date.getDay()) % 7);
	resultDate.setHours(hours,minutes,0,0);
	console.log(resultDate);
	return resultDate;
}

$('.defaultCountdown').countdown({until: getDayOfWeek(new Date(), 0,9,30), format: 'DHMS'}); 




/* ==============================================
	For Tooltip.
=====================================================================*/	

$(function(){
     $('[data-rel="tooltip"]').tooltip();
});

/* ==============================================
	For WOW Animation.
=====================================================================*/	
$(document).ready( function() {
 new WOW().init();

/* ==============================================
	For Smooth Scroll.
=====================================================================*/	
      var $stupid = $('<div></div>')
        .height(1)
        .hide()
        .appendTo('body');

      var mobileHack = function() {
        $stupid.show();
        setTimeout(function() {
          $stupid.hide();
        }, 10);
      };

      $('ul.mainnav a').smoothScroll({
        afterScroll: mobileHack
      });
	
	
	
/* ==============================================
	For Fixed Menu.
=====================================================================*/		
var s = $("#stick_menu");
    var pos = s.position();                                     
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
        if (windowpos >= pos.top) {
            s.addClass("stick_menu");
        } else {
            s.removeClass("stick_menu");
        }
    });

/* ==============================================
	Remove Full Screen Image in Mobile view.
=====================================================================*/			
if ($(window).width() < 514) {
     $('#head').removeClass('intro');
	  $('#head').css('height', 'auto')
} else {
	$('#head').addClass('intro');
   
}	

$(window).resize(function() {
    if ($(window).width() < 1050) {
     $('#head').removeClass('intro');
	 $('#head').css('height', 'auto')
    } else {
	$('#head').addClass('intro');
    }
}).resize();
	
	
/* ==============================================
	For Full Screen Header Part.
=====================================================================*/		
	
		"use strict";

		var winHeight = $(window).height();
		var winWidth = $(window).width();

		if (winWidth > 979) {
			$('.intro').css({
				'height': winHeight,
			});
			} else{
			$('.intro').css({
				'height': '536px'
			});
		};

		$(window).resize(function(){
			var winHeight = $(window).height();
			var winWidth = $(window).width();

			if (winWidth > 979) {
				$('.intro').css({
					'height': winHeight
				});
				} else{
				$('.intro').css({
					'height': '536px'
				});
			};
		});
		
/* ==============================================
	For Customize Scroll Bar Part.
=====================================================================*/				
		
	var nice = jQuery("html").niceScroll({scrollspeed:100,}).hide();;		
		
		
	});    