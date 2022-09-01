
/* scroll header */
initHeaderPosition();

document.addEventListener('scroll', initHeaderPosition);

function initHeaderPosition() {
	let header = document.querySelector('.site-header');
	
	if(window.scrollY > 0){
		header.classList.add('active');
	}else{
		header.classList.remove('active');
	}
}


/* header burger */
const burger = document.querySelector('#burger');

burger.addEventListener('click', function(e){
	e.preventDefault();

	this.classList.toggle('active');

	document.body.classList.toggle('menu_active');
});

initHeaderMenuTransition();

window.addEventListener('resize', function(event) {
	initHeaderMenuTransition();
}, true);

function initHeaderMenuTransition(){
	let headerMenu = document.querySelector('.header__menu-wrapper');

	if(!headerMenu) return false;

	if(window.innerWidth < 1200){
		headerMenu.classList.add('transition');
	}else{
		headerMenu.classList.remove('transition');
	}
}

//mobile nav JQuery
jQuery(document).ready(function($) {
	$('#primary-menu ul.sub-menu').prepend('<li class="menu-item-back"><a href="#" class="back-link" title="back-link"><span class="back-arrow"></span>Back</a></li>');
	$('.back-link').click(function(event) {
		event.preventDefault();
	});
	$('#primary-menu .menu-item-has-children').prepend('<span class="arrow"></span>');
	$('#primary-menu .menu-item-has-children').on('click', function(){
		if($(this).hasClass('active-child')) {
			$(this).removeClass('active-child');
		} else {
			$(this).addClass('active-child');
		}
	});
});

jQuery(document).ready(function($) {
	if ($('section:first-child').hasClass('scheme-dark')) {
		$('.site-header').removeClass('scheme-light').addClass('scheme-dark');
	}
});