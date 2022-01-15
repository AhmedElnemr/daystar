
(function($) {
    // 'use strict';

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.site-navigation').toggleClass('show');
    });

    // Hero Slider

});
$('button.add-button').on('click',function(){
	$(this).next().addClass("open");
	$(".qty-input").val('1');
});
$('.quantity-right-plus').on('click',function(){
	var $qty = $(this).siblings(".qty-input");
	var currentVal = parseInt($qty.val());
	if (!isNaN(currentVal)) {
		$qty.val(currentVal + 1);
	}
});
$('.quantity-left-minus').on('click',function(){
	var $qty = $(this).siblings(".qty-input");
	var _val =  $($qty).val();
	if(_val == '1') {
		var _removeCls = $(this).parents('.cart_qty');
		$(_removeCls).removeClass("open");
	}
	var currentVal = parseInt($qty.val());
	if (!isNaN(currentVal) && currentVal > 0) {
		$qty.val(currentVal - 1);
	}
});




/*=====================
 15. Add to cart
 ==========================*/
$('.product-box button .fa-shopping-cart').on('click', function () {
	$.notify({
		icon: 'fa fa-check',
		title: 'Success!',
		message: 'Item Successfully added to your cart'
	},{
		element: 'body',
		position: null,
		type: "success",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: true,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 5000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		icon_type: 'class',
		template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
			'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
			'<span data-notify="icon"></span> ' +
			'<span data-notify="title">{1}</span> ' +
			'<span data-notify="message">{2}</span>' +
			'<div class="progress" data-notify="progressbar">' +
			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
			'</div>' +
			'<a href="{3}" target="{4}" data-notify="url"></a>' +
			'</div>'
	});
});


/*=====================
 16.  Add to wishlist
 ==========================*/
$('.product-box a .fa-heart , .product-box a .fa-heart').on('click', function () {

	$.notify({
		icon: 'fa fa-check',
		title: 'Success!',
		message: 'Item Successfully added in wishlist'
	},{
		element: 'body',
		position: null,
		type: "info",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: true,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 5000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		icon_type: 'class',
		template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
			'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
			'<span data-notify="icon"></span> ' +
			'<span data-notify="title">{1}</span> ' +
			'<span data-notify="message">{2}</span>' +
			'<div class="progress" data-notify="progressbar">' +
			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
			'</div>' +
			'<a href="{3}" target="{4}" data-notify="url"></a>' +
			'</div>'
	});
});



$('.owl-carousel.product-trend').owlCarousel({
	loop: false,
	margin: 10,
	nav: false,
	dots: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 3
		},
		1000: {
			items: 5
		}
	}

});
