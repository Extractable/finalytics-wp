const vacanciesBtn = document.querySelectorAll('.vacancies__btn .btn');

vacanciesBtn.forEach(btn => {

	btn.addEventListener('click', function(e){
		e.preventDefault();

		let btnText = btn.textContent,
				currentPage = this.dataset.currentPage,
				data = {
					'action': this.dataset.action,
					'query': this.dataset.query, 
					'page' : currentPage
				};

		jQuery.ajax({ // you can also use $.post here
			url : ajax.url, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				btn.textContent = 'Loading...'; // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					btn.textContent = btnText;

					if(btn.closest('.vacancies-list') && window.innerWidth < 576){
						
						let slider = btn.closest('.vacancies-list').querySelector('.vacancies__items');
						jQuery(slider).slick('slickAdd', data);

					}else{
						btn.closest('.vacancies__btn').insertAdjacentHTML('beforebegin', data); // insert new posts
					}

					btn.dataset.currentPage = ++currentPage;
 
					if ( btn.dataset.currentPage == btn.dataset.maxPage ) 
						btn.closest('.vacancies__btn').remove(); // if last page, remove the button

				} else {
					btn.closest('.vacancies__btn').remove(); // if no data, remove the button as well
				}
			}
		});


	});

});