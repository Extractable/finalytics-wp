/* hero home slider */
const homeSlider = document.querySelectorAll('.hero-home__slider');

homeSlider.forEach(slider => {
	let options = {
		slidesToShow: 1,
		vertical: true,
		autoplay: true,
		centerMode: true,
		centerPadding: '100px',
		pauseOnFocus: false,
		pauseOnHover: false,
		speed: 600,
		cssEase: 'linear',
		responsive: [
			{
				breakpoint: 576,
				settings: {
					centerPadding: '50px',
				}
			},
		]
	};

	initSlider(slider, options);
});

/* careers page: vacancies slider */
const vacancies = document.querySelectorAll('.vacancies-list .vacancies__items');

vacancies.forEach(item => {
	checkScreen();

	window.addEventListener('resize', checkScreen);

	function checkScreen() {
		if(window.innerWidth < 576){
			initSlider(item, {
				infinite: false
			});
		}else{
			initSlider(item, false, true);
		}
	}
});

/* technologies mobile slider */
const technologies = document.querySelectorAll('.technologies__items');

technologies.forEach(item => {

	let content = item.innerHTML;
			items = item.querySelectorAll('.technologies__item'),
			slider = document.createElement('div');

	slider.classList.add('technologies-slider', 'technologies__items');

	slider.innerHTML = content;

	item.insertAdjacentElement('afterEnd', slider);

	let options = {
		slidesPerRow: 2,
		rows: 2,
	}

	initSlider('.technologies-slider', options);

});

function initSlider(slider, options = false, unslick = false, $ = jQuery){

	if(unslick){
		$(slider).filter('.slick-initialized').slick('unslick');
		return;
	}

	let args = {
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true
	}

	if(options){
		for(let key in options){
			args[key] = options[key];
		}
	}

	$(slider).not('.slick-initialized').slick(args);
}