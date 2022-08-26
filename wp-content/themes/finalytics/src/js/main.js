/**
 * Plugins/Libs.
 */
//= ../../node_modules/object-fit-images/dist/ofi.js
//= ../../node_modules/body-scroll-lock/lib/bodyScrollLock.min.js
//= ../../node_modules/slick-carousel/slick/slick.min.js
//= common/fancybox.js
//= common/aos.js

document.addEventListener('DOMContentLoaded', function(){
/**
 * Custom scripts.
 */

//= common/app.js
//= common/header.js
//= common/forms.js
//= common/loadmore.js
//= common/svg.js
//= common/gallery.js
//= common/sliders.js

	AOS.init({
		once: true,
		delay: 300,
		duration: 1000
	});


	//Jquery $ init
	(function($) {
		//slick carousel init
		$('.carousel-two-col__slides').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 768,
					settings: 'unslick'
				}
			]
		});

		//Animation of numbers in Stats section
		$('.digits_animate').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});

	})( jQuery );

});