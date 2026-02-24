
// $(document).ready(function () {
// 	"use strict";

// 	$('.fadeOut').addClass('fadeIn');
// 	setTimeout(function(){
// 		$('.landing-page .animate').each(function (i) {
// 			setTimeout(function () {
// 				$('.landing-page .animate').eq(i).addClass('doneTranslate');
// 			}, 350 * (i + 1));
// 		});
// 		$('.zoomOut').addClass('zoomIn');
// 		setTimeout(function(){
// 			$('.landing-page').addClass('shutter-up');
// 			$('body').removeClass('overflow-hidden');
// 			setTimeout(function(){
// 				$('.main-home').addClass('active');
// 			},1000);
// 		},10000);
// 	},200);
// });


setTimeout(() => {
	document.querySelectorAll('.fadeOut').forEach(el => el.classList.add('fadeIn'));

	setTimeout(() => {
		document.querySelectorAll('.landing-page .animate').forEach((el, i) => {
			setTimeout(() => {
				el.classList.add('doneTranslate');
			}, 350 * (i + 1));
		});
		
		document.querySelectorAll('.zoomOut').forEach(el => el.classList.add('zoomIn'));
		
		// setTimeout(() => {
		// 	document.querySelectorAll('.landing-page').forEach(el => el.classList.add('shutter-up'));
		// 	document.body.classList.remove('overflow-hidden');
			
		// 	setTimeout(() => {
		// 		document.querySelectorAll('.main-home').forEach(el => el.classList.add('active'));
		// 	}, 1000);
		// }, 10000);
	}, 200);

}, 200);

const closeLP = () => {
	const landingPage = document.querySelector('.landing-page');

	// Only proceed if landing page exists and is not already closed
	if (!landingPage || landingPage.classList.contains('shutter-up')) return;

	landingPage.classList.add('shutter-up');
	document.body.classList.remove('overflow-hidden');

	setTimeout(() => {
		document.querySelector('.main-home')?.classList.add('active');
	}, 1000);
};

// document.getElementById("closeLPButton").addEventListener("click", closeLP);

// Close popup on ESC key
document.addEventListener("keydown", (event) => {
	if (event.key === "Escape") {
		closeLP();
	}
});