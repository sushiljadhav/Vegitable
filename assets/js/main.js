
    
$(document).ready(function(){
	$('.products_slider').slick({
		dots: false,
		centerMode: true,
		slidesToShow:4 ,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
					// breakpoint: 1024,
				settings: {
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
			},
				{
				breakpoint: 600,
					settings: {
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				},
				{
				breakpoint: 480,
					settings: {
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
	});
});  