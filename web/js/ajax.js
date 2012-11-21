
( function ( $ ) {
	"use strict";

	// -- global members
	var $loading,
		$choisir;

	// -- methods

	$(".loading").hide();

	var search = function(e) {
		$loading.slideDown(function() {
			$.ajax({
				url: "././web/choisir.php",
				type: "POST",
				responseType: "json",
				data: {
					// trim, enlève les espaces et les caracères vides avant et après la chaîne.0
					q: $.trim($input.val())
				},
				success: searchSuccess
			})
		})	//e.preventDefault();

	};

	var searchSuccess = function (oData){
			$loading.slideUp();
			$choisir.slideDown();
	};

	$( function () {

		// -- onload routines

		
		$loading = $(".loading");
		$choisir = $(".choisir");
		$("form").on("submit", search);

	} );

}( jQuery ) );
