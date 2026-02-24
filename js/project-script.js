

// video modal
const videoModalEl = document.getElementById('video-Modal');
let videoModal;

if (videoModalEl) {
	videoModal = new bootstrap.Modal(videoModalEl, {
		backdrop: 'static'
	});

	// Populate iframe src on modal show
	videoModalEl.addEventListener('show.bs.modal', event => {
		const button = event.relatedTarget;
		const src = button.getAttribute("data-src");

		const iframe = videoModalEl.querySelector('.modal-body iframe');

		if (iframe) iframe.setAttribute("src", src);
	});

	// Clear iframe src when modal is hidden (e.g. via close button or programmatic hide)
	videoModalEl.addEventListener('hidden.bs.modal', () => {
		const iframe = videoModalEl.querySelector('.modal-body iframe');
		if (iframe) iframe.removeAttribute('src');
	});
}

// Clear iframe when .videoClose is clicked (in case you want to manually close too)
document.querySelectorAll(".videoClose").forEach(btn => {
	btn.addEventListener("click", function () {
	const iframe = videoModalEl?.querySelector('.modal-body iframe');
	if (iframe) iframe.removeAttribute("src");

	// Optionally hide the modal manually if .videoClose is outside the modal structure
	if (videoModal) videoModal.hide();
	});
});
// video modal


// Swiper Slider
var statswiper = new Swiper(".stat-slider", {
	spaceBetween: 30,
	effect: "fade",
	disableOnInteraction: false,
	allowTouchMove: false,
	speed: 2000,
	autoplay: {
		delay: 3000,
	},
	on: {
		slideChangeTransitionStart: function() {
			document.querySelectorAll(".stat-slider .swiper-slide").forEach(slide => {
				slide.style.opacity = "0";
			});
			document.querySelector(".stat-slider .swiper-slide-active").style.opacity = "1";
			let prevSlide = document.querySelector(".stat-slider .swiper-slide-prev");
			if (prevSlide) prevSlide.style.opacity = "0"; // Keep previous slide visible
		}
	}
});

// gallery Slider
var galThumb = new Swiper(".gallery-thumb-slider", {
	spaceBetween: 10,
	slidesPerView: 3,
	freeMode: true,
	watchSlidesProgress: true,
	breakpoints: {
		375: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 4,
		},
		1200: {
			slidesPerView: 5,
		},
	},
});
var galswiper = new Swiper(".gallery-slider", {
	slidesPerView: "auto",
	spaceBetween: 2,
	disableOnInteraction: false,
	speed: 1000,
	autoplay: {
		delay: 3000,
	},
	thumbs: {
		swiper: galThumb,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});
// gallery Slider
// Swiper Slider


// Function to initialize Swiper based on screen width
function initSwiper() {
	let windowWidth = window.innerWidth;

	if (windowWidth < 992) {
		// Auto-playing horizontal slider for small screens
		return new Swiper(".amenity-slider", {
			direction: "horizontal",
			slidesPerView: 1,
			spaceBetween: 10,
			speed: 1000,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
			},
		});
	} else {
		// Vertical slider with scroll wheel control for large screens
		return new Swiper(".amenity-slider", {
			direction: "vertical",
			slidesPerView: 1,
			spaceBetween: 2,
			speed: 1000,
			allowTouchMove: false, // Disable swipe
		});
	}
}

// Initialize Swiper
let amenity = initSwiper();

// Handle Scroll Wheel for vertical navigation
let section = document.querySelector(".section-amenities");
let isScrolling = false; // Lock to prevent rapid fire

section.addEventListener("wheel", function(e) {
	if (window.innerWidth >= 992) {
		if (isScrolling) return; // Skip if in transition

		if (e.deltaY > 0) {
			// Scroll down
			if (amenity.activeIndex < amenity.slides.length - 1) {
				e.preventDefault();
				isScrolling = true;
				amenity.slideNext();
			}
		} else {
			// Scroll up
			if (amenity.activeIndex > 0) {
				e.preventDefault();
				isScrolling = true;
				amenity.slidePrev();
			}
		}

		// Lock scrolling during animation (matches swiper speed)
		setTimeout(() => {
			isScrolling = false;
		}, 1100); // slightly more than swiper speed
	}
}, {
	passive: false
});

document.addEventListener("keydown", function(e) {
	if (window.innerWidth >= 992 && !isScrolling) {
		if (e.key === "ArrowDown") {
			if (amenity.activeIndex < amenity.slides.length - 1) {
				isScrolling = true;
				amenity.slideNext();
				setTimeout(() => { isScrolling = false; }, 1100);
			}
		} else if (e.key === "ArrowUp") {
			if (amenity.activeIndex > 0) {
				isScrolling = true;
				amenity.slidePrev();
				setTimeout(() => { isScrolling = false; }, 1100);
			}
		}
	}
});

// Handle window resize event to update Swiper instance
window.addEventListener("resize", function() {
	amenity.destroy(true, true); // Destroy existing Swiper instance
	amenity = initSwiper(); // Reinitialize with updated settings
});



$(document).ready(function () {
	"use strict";

    $('#projectform').on('submit', function(event) {
        event.preventDefault();
        var data = new FormData(this);
        $.ajax({
            url: "../controller/form_integration.php",
            type: "POST",
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json', // Expect JSON from the server
            beforeSend: function() {
                $(".pe_status").addClass('alert-warning').removeClass('d-none').html("Processing...");
                $("#projectsubmit").html('Please Wait...');
                $("#projectsubmit").attr('disabled', true);
                $(".form-control").removeClass('is-invalid'); // Reset previous highlights
            },
            success: function(response) {
                $("#projectsubmit").removeAttr('disabled').html('Submit');

                if (response.status === 'success') {
                    $(".pe_status").addClass('alert-success').removeClass('alert-danger alert-warning d-none').html(response.message);
                    $('#projectform')[0].reset(); // Optional: clear the form

                    // Redirect after 1.5 seconds
                    setTimeout(function() {
                        window.location.href = 'thank-you.php';
                    }, 1500);
                } else {
                    $(".pe_status").addClass('alert-danger').removeClass('d-none').html(response.message);
                    if (response.field) {
                        $('#' + response.field).addClass('is-invalid').focus();
                    }
                }
            },
            error: function(xhr, status, error) {
                $(".pe_status").html('Something went wrong. Please try again.');
                $("#projectsubmit").removeAttr('disabled').html('Submit');
            }
        });
    });




	// ---- M A P ---- //
    var currTime = 0;
    $('.loc-pointer').each(function () {
        $(this).on({
            'mouseenter': function () {
                currTime = $(this).attr('dis-time');
                console.log(currTime);
                $('.distance-count').find('span').empty();
                $('.distance-count').find('span').append(currTime);
            },
            'mouseleave': function () {
                currTime = 0;
                console.log(currTime);
                $('.distance-count').find('span').empty();
                $('.distance-count').find('span').append(currTime);
            }
        });
    });
});

$(window).scroll(function () {
	"use strict";
	var wScroll = $(window).scrollTop();

	if (wScroll > $('.project-overview').offset().top - ($(window).height() / 1.5)) {
		$('#project-text-img1').css({
			'background-position-y': '-'+(wScroll / 10)+'px'
		});
	}

	if (wScroll > $('.section-amenities').offset().top - ($(window).height() / 1.5)) {
		$('.section-amenities .amenity-wrapper').addClass('active');
		$('.section-amenities .animate').each(function (i) {
			setTimeout(function () {
				$('.section-amenities .animate').eq(i).addClass('active');
			}, 150 * (i + 1));
		});
	} else{
		$('.section-amenities .amenity-wrapper, .section-amenities .animate').removeClass('active');
	}
});