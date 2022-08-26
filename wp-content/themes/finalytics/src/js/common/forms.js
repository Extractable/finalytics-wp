
/* input type file */
const files = document.querySelectorAll('.form__file');

files.forEach(item => {
	let input = item.querySelector('input'),
			label = item.querySelector('.form__file-label'),
			labelDefaultText = label.textContent;

	// label.addEventListener('click', function(){
	// 	input.dispatchEvent(new Event('click'));
	// });

	input.addEventListener('change', function(e){
		if(this.files.length == 0){
			label.innerHTML = labelDefaultText;
		}else{
			label.innerHTML = this.files[0].name;
		}
	});
});


/* i agree input */
const agree = document.querySelectorAll('.form__agree');
agree.forEach(item => {
	let input = item.querySelector('input'),
			label = item.querySelector('label'),
			text = item.querySelector('.form__agree_text');

	checkChecbox(input, label);

	input.addEventListener('change', (e) => {
		checkChecbox(e.target, label);
	});

	text.addEventListener('click', (e) => {
		input.click();
	});
});

/* form text inputs */
const formInput = document.querySelectorAll('.form__input');
formInput.forEach(item => {
	let label = document.createElement('span'),
			input;

	if(item.querySelector('textarea')){
		input = item.querySelector('textarea');
	}else{
		input = item.querySelector('input');
	}

	label.classList.add('form__input-label');
	label.innerHTML = input.placeholder;

	item.append(label);

	item.addEventListener('input', () => {
		if(input.value != ''){
			item.classList.add('active');
		}else{
			item.classList.remove('active');
		}
	});

	input.addEventListener('focus', () => item.classList.add('focus'));
	input.addEventListener('blur', () => item.classList.remove('focus'));
});


document.addEventListener( 'wpcf7mailsent', function( event ) {
  document.querySelectorAll('.form__input').forEach(item => {
		item.classList.remove('active');
	})
}, false );


function checkChecbox(input, label){
	if(input.checked){
		label.classList.add('checked');
	}else{
		label.classList.remove('checked');
	}
}


