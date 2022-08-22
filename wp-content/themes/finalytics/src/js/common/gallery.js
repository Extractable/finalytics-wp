const galleries = document.querySelectorAll('.gallery-accordion');

galleries.forEach(gallery => {

	let content = gallery.innerHTML;
			items = gallery.querySelectorAll('.gallery-accordion__item'),
			slider = document.createElement('div');
			

	items.forEach(item => {

		let centerItem = Math.round(items.length / 2 - 0.05);

		items[centerItem].classList.add('active');
		
		item.addEventListener('mouseenter', (e) => {
			
			items.forEach(block => block.classList.remove('active'));

			e.target.classList.add('active');
		});
	});	
	

	slider.classList.add('gallery-slider');

	slider.innerHTML = content;

	gallery.insertAdjacentElement('afterEnd', slider);

	mobileGallery('.gallery-slider');

});


function mobileGallery(slider, $ = jQuery) {

	$(document).ready(function(){
		$(slider).slick({
			arrows: false,
			dots: false
		});
	});

}