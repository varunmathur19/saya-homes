$(document).ready(function() {
	"use strict";

	$(".plansBtn").click(function(){
		$(".plansBtn.active").removeClass('active');
		$(this).addClass('active');
		$(".plansContainer").hide();
		$("#plansContainer"+$(this).data('target')).fadeIn(300);
	});
	
	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 100) {
			$('.button-top').animate({
				opacity:1
			},0);
		}
		else {
			$('.button-top').animate({
				opacity:0
			},0);
		}
	});
	$(".button-top").click(function(){
	   $("html,body").animate({scrollTop:'0px'},500);
	});
	
	$('[data-magnify]').magnify({
		//movable: false,
		//resizable: false,
		headToolbar: [
			'close'
		],
		initMaximized: true
	});
});
		
$(window).scroll(function(){
	"use strict";
	
	var wScroll = $(this).scrollTop();
	//var $ht = $(".banner").innerHeight() / 2;
	
	if (wScroll >= 50) {
		$(".header, .fixed-form").addClass("fixed");
	} else {
		$(".header, .fixed-form").removeClass("fixed");
	}
});