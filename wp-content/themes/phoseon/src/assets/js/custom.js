jQuery(document).ready(function($){

	$('.page-template-default .hero .small-5.small-offset-1, .page-template-products-by-family .hero .small-5.small-offset-1, .single-products .hero .small-5.small-offset-1').addClass('small-6');
	$('.page-template-default .hero .small-5.small-offset-1, .page-template-products-by-family .hero .small-5.small-offset-1, .single-products .hero .small-5.small-offset-1').removeClass('small-5 small-offset-1');
	$('.page-template-default .hero .grid-container, .page-template-products-by-family .hero .grid-container, .single-products .hero .grid-container').removeClass('grid-container');

	
	$('.utility, .landing-page, footer, #breadcrumbs, .product-wrapper, .blog, .default').click(function () {
	    $('#menu-primary').foundation('hideAll');
	});

});