(function ($) {

	"use strict";
	
	// Preload
	$(window).on('load', function () { // makes sure the whole site is loaded
		$('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(350).css({
			'overflow': 'visible'
		});
	})
	
	//$("#nextClick").hide();

	// Submit loader mask 
	$('form#wrapped').on('submit', function () {
		//$("#nextClick").show();
		$("#nextClick").click();
		// var form = $("form#wrapped");
		// form.validate();
		// if (form.valid()) {
		// 	$("#loader_form").fadeIn();
		// }
	});

	// var button = document.getElementById("nextClick");
	// button.style.display = "none";

	var form = $("form#wrapped");

	// form.validate({
	// 	submitHandler: function() {
	// 		$.post('/profile',
	// 		{
	// 			nama: $("#fullname").val(),
	// 			nim: $("#nim").val(),
	// 			gender: $("input[name=gender]:checked").val(),
	// 			email: $("#email").val(),
	// 		},
	// 		function(data){
	// 			console.log(data);
	// 		});
	// 		//button.style.display = "inline-block";
	// 		$("#nextClick").toggle();
	// 		$("#nextClick").click();
	// 	}
	// });
	
	// Float labels
	var floatlabels = new FloatLabels( 'form', {
		style: 2
	});
	
})(window.jQuery); 