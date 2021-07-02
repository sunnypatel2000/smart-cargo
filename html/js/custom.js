$(document).ready(function(){
	
	// silder
	$('.silder-inner').slick({
		arrows:false,
		dots:true,
	});

	/*header*/	
	$(window).scroll(function(){
		$("header").toggleClass("header-scrolled",$(this).scrollTop()>100);
	});

	// counter
	$('.counter').countUp({
  		'time': 500,
  		'delay': 10
	});

	// date-picker
	$('.sandbox-container').datepicker({ 
		format: 'dd/mm/yyyy',
	});


	//tabbing 
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

});




