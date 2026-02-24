// Common enquiry form modal
const formModal = document.getElementById('formModal')
if (formModal) {
    formModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget
        const querySource = button.getAttribute('data-bs-source')
        const querySourceInput = formModal.querySelector('#msource')

        querySourceInput.value = querySource
    })
}
// Common enquiry form modal


// Accordion
document.addEventListener("DOMContentLoaded", function () {
	const questions = document.querySelectorAll('.faqs_question');
	const answers = document.querySelectorAll('.faqs_answer');

	questions.forEach(question => {
		question.addEventListener('click', function () {
			const answer = this.nextElementSibling;
			const isOpen = answer.style.maxHeight;

			// Close all answers
			answers.forEach(ans => {
				ans.style.maxHeight = null;
				ans.previousElementSibling.classList.remove('active');
			});

			// If the clicked one wasn't open, open it
			if (!isOpen) {
				this.classList.add('active');
				answer.style.maxHeight = answer.scrollHeight + 'px';
			}
		});
	});
});
// Accordion

$(".menu-modal-wrapper").mouseup(function (e) {
	var menuModal = $(".menu-modal");
	var menuModalWrapper = $(".menu-modal-wrapper");
	
	// Check if the click is outside the menu container
	if (!menuModal.is(e.target) && menuModal.has(e.target).length === 0) {
		if (menuModalWrapper.hasClass('active')) {
			menuModalWrapper.hide(300).removeClass('active');
			$(".menuBtn").removeClass('closeMenuBtn');
			$('body').removeClass('overflow-hidden');
		}
	}
});


$(document).ready(function () {
	"use strict";
	$('[data-toggle="tooltip"]').tooltip();
	
	$(".menuBtn").click(function() {
		$(this).toggleClass('closeMenuBtn');
        $('.menu-modal-wrapper').stop().fadeToggle().toggleClass('active');
	    $('.header').toggleClass('on');
	    $('body').toggleClass('overflow-hidden');
	});

	$(".menuBtnClose,#closeMenu").click(function() {
		$(".menuBtn").toggleClass('closeMenuBtn');
        $('.menu-modal-wrapper').stop().fadeOut().removeClass('active');
        $('body').removeClass('overflow-hidden');
    });

	$(".hasChild").click(function() {
		$(".dropdown").slideUp(500);
		if($(this).find(".dropdown").is(':hidden') === true) {
			$(this).find(".dropdown").slideDown('normal');
		 }
	});

	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 100) {
			$('.button-top').animate({
				opacity: 1,
				bottom: 10
			}, 0);
		}
		else {
			$('.button-top').animate({
				opacity: 0,
				bottom: -40
			}, 0);
		}
	});
	$(".button-top").click(function () {
		$("html,body").animate({ scrollTop: '0px' }, 500);
	});

	$('[data-magnify]').magnify({
		//movable: false,
		//resizable: false,
		headToolbar: [
			'close'
		],
		initMaximized: true
	});

	AOS.init({
		duration: 1200,
	});

	var lastScrollTop = 0;
    $(window).scroll(function() {
        var st = $(this).scrollTop();

        if (st > lastScrollTop) {
            // Scrolling down
            $(".enquiryWrapper").addClass("hide");
        } else {
			// Scrolling up
            $(".enquiryWrapper").removeClass("hide");
        }
        lastScrollTop = st;
    });
});

$(window).scroll(function () {
	"use strict";

	var wScroll = $(this).scrollTop();

	if (wScroll > 50) {
		$(".header").addClass("fixed");
	} else {
		$(".header").removeClass("fixed");
	}
});