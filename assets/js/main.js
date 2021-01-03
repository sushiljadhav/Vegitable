
    
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

// View cart button show
$(document).ready(()=> {
	var $button = $('#add-btn');
	$button.click((e)=>{
		$(e.target).css("display","none");
		$('<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><a href="cart.php" class="btn btn-primary btn-sm view_details">View Cart</a> </div>').appendTo('.add-cart-btn');
	})
});

//Image change on click

$(document).ready(()=>{
	$(".products_images_slider_side li").click((e)=>{
		var $productImage = $(".product_image figure img").attr("src",$(e.target).attr("src"));
	})	
});