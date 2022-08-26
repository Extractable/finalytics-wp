( function( $ ){
    'use strict';

	/**
	 * When Document is ready.
	 * Please place only functions calls here.
	 */
	$( function(){
		// 'object-fit' CSS property fix for IE (node_modules/object-fit-images/dist/ofi.js).
		objectFitImages( 'img' );

		// someFunc( 'abc', 5 );
	} );

	/**
	 * Please place all functions declarations below (or in other files).
	 */

	$('a[href*="#"]').click(function(e){
		e.preventDefault();

		$([document.documentElement, document.body]).animate({
        scrollTop: $($(this).attr('href')).offset().top - 80
    }, 500);

		return false;
	});

} )( jQuery );