
// Utility to check if cookie exists
function getCookie(name) {
	var cookies = document.cookie.split(';');
	for (var i = 0; i < cookies.length; i++) {
		var c = cookies[i].trim();
		if (c.indexOf(name + "=") === 0) {
		return c.substring((name + "=").length, c.length);
		}
	}
	return null;
}

// Run this on page load
window.addEventListener('DOMContentLoaded', function () {
	// Only show the disclaimer modal if cookie is NOT set
	if (!getCookie("disc_popup")) {
		var disclaimerModalEl = document.getElementById('disclaimersaya');
		var disclaimerModal = new bootstrap.Modal(disclaimerModalEl, {
			backdrop: false
		});
		disclaimerModal.show();

		// Handle "I Agree" button click
		document.getElementById('iagreebtn').addEventListener('click', function () {
			// Hide disclaimer modal
			var disclaimerInstance = bootstrap.Modal.getInstance(disclaimerModalEl);
			if (disclaimerInstance) {
				disclaimerInstance.hide();
			}

			// Set cookie for 2 hours
			var d = new Date();
			d.setTime(d.getTime() + (2 * 60 * 60 * 1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = "disc_popup=exists; " + expires + "; path=/";
		});
	}
});


  

$(document).ready(function () {
  "use strict";    
    $("#iagreebtn").click(function() {
        $('#formModalpopup').modal('show');
    }); 

  $(".scrollDown").click(function () {
    $("html,body").animate(
      {
        scrollTop: $(".scrollto").offset().top,
      },
      "slow"
    );
  });

  $(".project_toggleBtn").click(function () {
    $(".project_toggleBtn.active").removeClass("active");
    $(this).addClass("active");
    $(".projectContainer").hide();
    $("#project-" + $(this).data("target")).fadeIn(300);
  });

  // if($(window).width() < 426){
  // 	//var video = $("#banner-video");
  // 	//var source = $("#vid-source");
  // 	var newmp4 = 'videos/mb-video.mp4';
  // 	$("#banner-video source").attr('src', newmp4);
  // 	$('#banner-video').get(0).load();
  // 	$('#banner-video').get(0).play();
  // }
});

$(window).scroll(function () {
  "use strict";
  var wScroll = $(window).scrollTop();

  if (
    wScroll >
    $(".section-overview").offset().top - $(window).height() / 1.5
  ) {
    $(".section-overview .overview-logo").each(function (i) {
      setTimeout(function () {
        $(".section-overview .overview-logo").eq(i).addClass("animate");
      }, 150 * (i + 1));
    });
  }
  // if (wScroll > $('.animate-section2').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section2 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section2 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
  // if (wScroll > $('.animate-section3').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section3 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section3 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
  // if (wScroll > $('.animate-section4').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section4 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section4 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
  // if (wScroll > $('.animate-section5').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section5 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section5 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
  // if (wScroll > $('.animate-section6').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section6 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section6 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
  // if (wScroll > $('.animate-section7').offset().top - ($(window).height() / 1.5)) {
  // 	$('.animate-section7 .animate').each(function (i) {
  // 		setTimeout(function () {
  // 			$('.animate-section7 .animate').eq(i).addClass('doneTranslate');
  // 		}, 150 * (i + 1));
  // 	});
  // }
});
