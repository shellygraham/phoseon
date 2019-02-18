jQuery(document).ready(function($){

	// $('.page-template-default .hero .small-5.small-offset-1').addClass('small-6');
	
	$('.utility, .landing-page, footer, #breadcrumbs, .product-wrapper, .blog, .default').click(function () {
	    $('#menu-primary').foundation('hideAll');
	});
	
	$('#alm-filter-1 h3').click(function() {
		$('#alm-filter-1 h3').toggleClass('rotate');
		$('#alm-filter-1 ul').toggle("slide", { direction: "up" }, 'fast');
	});

	$('#alm-filter-2 h3').click(function() {
		$('#alm-filter-2 h3').toggleClass('rotate');
		$('#alm-filter-2 ul').toggle("slide", { direction: "up" }, 'fast');
	});

	$('#alm-filter-3 h3').click(function() {
		$('#alm-filter-3 h3').toggleClass('rotate');
		$('#alm-filter-3 ul').toggle("slide", { direction: "up" }, 'fast');
	});

	$('#alm-filter-4 h3').click(function() {
		$('#alm-filter-4 h3').toggleClass('rotate');
		$('#alm-filter-4 ul').toggle("slide", { direction: "up" }, 'fast');
	});

	// Filtering Clear/reset button
	var clearBtn = document.getElementById('clear-filters');
	clearBtn.addEventListener('click', function(e){
	   window.almFiltersClear();
	});

});