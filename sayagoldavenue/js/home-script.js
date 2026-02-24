
$(document).ready(function() {
	"use strict";
	
	$(".scrollDown").click(function() {
		$('html,body').animate({
			scrollTop: $(".scrollto").offset().top},
		'slow');
	});
});

/*$(window).scroll(function(){
	"use strict";
	var wScroll = $(this).scrollTop();
	
	if(wScroll > $('.animate-section1').offset().top - ($(window).height() / 1.5)) {
		$(".hm-overview").css('background-position-y', wScroll/20+'%');
		$('.animate-section1 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section1 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section2').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section2 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section2 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section3').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section3 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section3 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section4').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section4 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section4 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section5').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section5 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section5 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section6').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section6 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section6 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section7').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section7 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section7 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section8').offset().top - ($(window).height() / 1.5)) {
		$(".hm-amenContainer").css('background-position-y', '-'+wScroll/15+'%');
		$('.animate-section8 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section8 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section9').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section9 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section9 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section10').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section10 .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section10 .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
	if(wScroll > $('.animate-section11').offset().top - ($(window).height() / 1.5)) {
		$('.animate-section11 .opac, .footer-area .opac').each(function(i){
			setTimeout(function(){
				$('.animate-section11 .opac, .footer-area .opac').eq(i).addClass('opac-on');
			}, 250 * i);
		});
	}
});*/