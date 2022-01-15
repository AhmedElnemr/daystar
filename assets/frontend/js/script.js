// 02. header js
// 03.footer js
// 04. Image to background js
// 05 toggle nav
// 06 navbar mobile nav
// 07 menu js
// 08. Product page
// 09. category page
// 10. Product page Quantity Counter
// 11. filter sidebar js
// 12. Filter js
// 13. tab js
// 14. RTL & Dark Light
// 15. Add to cart
// 16.  Add to wishlist
// 17. Tap on Top
// 18. loader
// 19. add to cart sidebar js
// 20. Color Picker
// 21. Add to cart quantity Counter
// 22. owl-carousel

/* global $ , document , jQuery , window*/
(function($) {
    "use strict";

//     02. header js

// language  block//
    $('.language-dropdown-open').slideUp();
    $('.language-dropdown-click').on('click', function (){
        $('.language-dropdown-open').slideToggle()
    });
    $('.curroncy-dropdown-open').slideUp();
    $('.curroncy-dropdown-click').on('click', function (){
        $('.curroncy-dropdown-open').slideToggle()
    })
    $('.pro-up').hide();
    $('.mor-slide-open').slideUp();
    $('.mor-slide-click').on('click', function (){
        $('.mor-slide-open').slideToggle();
        $('.pro-up').toggle();
        $('.pro-down').toggle();
    })


// mobile search //
    $('.search-overlay').hide();
    $('.close-mobile-search').on('click', function (){
        $('.search-overlay').fadeOut();
    })
    $('.mobile-search').on('click', function (){
        $('.search-overlay').show();
    })


    /*=====================
     03.footer js
     ==========================*/
    var contentwidth = jQuery(window).width();
    if ((contentwidth) < '767') {
        jQuery('.footer-title h5').append('<span class="according-menu"></span>');
        jQuery('.footer-title').on('click', function () {
            jQuery('.footer-title').removeClass('active');
            jQuery('.footer-contant').slideUp('normal');
            if (jQuery(this).next().is(':hidden') == true) {
                jQuery(this).addClass('active');
                jQuery(this).next().slideDown('normal');
            }
        });
        jQuery('.footer-contant').hide();
    } else {
        jQuery('.footer-contant').show();
    }


    /*=====================
     04. Image to background js
     ==========================*/
    $(".bg-top" ).parent().addClass('b-top');
    $(".bg-bottom" ).parent().addClass('b-bottom');
    $(".bg-center" ).parent().addClass('b-center');
    $(".bg_size_content").parent().addClass('b_size_content');
    $(".bg-img" ).parent().addClass('bg-size');

    jQuery('.bg-img').each(function() {

        var el = $(this),
            src = el.attr('src'),
            parent = el.parent();

        parent.css({
            'background-image': 'url(' + src + ')',
            'background-size': 'cover',
            'background-position': 'center',
            'display' : 'block'
        });

        el.hide();
    });

    /*=====================
     05 toggle nav
     ==========================*/
    $('.toggle-nav').on('click', function () {
        $('.sm-horizontal').css("right","0px");
    });
    $(".mobile-back").on('click', function (){
        $('.sm-horizontal').css("right","-410px");
    });

    /*=====================
     06 navbar mobile nav
     ==========================*/
    $('.sm-nav-btn').on('click', function () {
        $('.nav-slide').css("left","0px");
    });
    $(".nav-sm-back").on('click', function (){
        $('.nav-slide').css("left","-410px");
    });

    $('.toggle-nav-desc').on('click', function () {
        $('.desc-horizontal').css("right","0px");
    });
    $(".desc-back").on('click', function (){
        $('.desc-horizontal').css("right","-410px");
    });

    /*=====================
     07 menu js
     ==========================*/

    function openNav() {
        document.getElementById("mySidenav").classList.add('open-side');
    }
    function closeNav() {
        document.getElementById("mySidenav").classList.remove('open-side');
    }
    $(function() {
        $('#main-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
        $('#sub-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
    });

    /*=====================
     09. category page
     ==========================*/
    $('.collapse-block-title').on('click', function(e) {
        e.preventDefault;
        var speed = 300;
        var thisItem = $(this).parent(),
            nextLevel = $(this).next('.collection-collapse-block-content');
        if (thisItem.hasClass('open')){
            thisItem.removeClass('open');
            nextLevel.slideUp(speed);
        }
        else {
            thisItem.addClass('open');
            nextLevel.slideDown(speed);
        }
    });
    $('.color-selector ul li').on('click', function(e) {
        $(".color-selector ul li").removeClass("active");
        $(this).addClass("active");
    });
//list layout view
    $('.list-layout-view').on('click', function(e) {
        $('.collection-grid-view').css('opacity', '0');
        $(".product-wrapper-grid").css("opacity","0.2");
        $('.shop-cart-ajax-loader').css("display","block");
        $('.product-wrapper-grid').addClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-12");
        setTimeout(function(){
            $(".product-wrapper-grid").css("opacity","1");
            $('.shop-cart-ajax-loader').css("display","none");
        }, 500);
    });
//grid layout view
    $('.grid-layout-view').on('click', function(e) {
        $('.collection-grid-view').css('opacity', '1');
        $('.product-wrapper-grid').removeClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-3");

    });
    $('.product-2-layout-view').on('click', function(e) {
        if($('.product-wrapper-grid').hasClass("list-view")) {}
        else{
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-6");
        }
    });
    $('.product-3-layout-view').on('click', function(e) {
        if($('.product-wrapper-grid').hasClass("list-view")) {}
        else{
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-4");
        }
    });
    $('.product-4-layout-view').on('click', function(e) {
        if($('.product-wrapper-grid').hasClass("list-view")) {}
        else{
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-3");
        }
    });
    $('.product-6-layout-view').on('click', function(e) {
        if($('.product-wrapper-grid').hasClass("list-view")) {}
        else{
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-2");
        }
    });


    /*=====================
     10. Product page Quantity Counter
     ==========================*/
    $('.collection-wrapper .qty-box .quantity-right-plus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.collection-wrapper .qty-box .quantity-left-minus').on('click', function () {
        var $qty = $('.qty-box .input-number');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });

    /*=====================
     11. filter sidebar js
     ==========================*/
    $('.sidebar-popup').on('click', function(e) {
        $('.open-popup').toggleClass('open');
        $('.collection-filter').css("left","-15px");
    });
    $('.filter-main-btn').on('click', function(e) {
        $('.collection-filter').css("left","-15px");
    });
    $('.filter-back').on('click', function(e) {
        $('.collection-filter').css("left","-365px");
        $('.sidebar-popup').trigger('click');
    });

    $('.account-sidebar').on('click', function(e) {
        $('.dashboard-left').css("left","0");
    });
    $('.filter-back').on('click', function(e) {
        $('.dashboard-left').css("left","-365px");
    });

    $(function () {
        $(".col-grid-box").slice(0, 8).show();
        $(".loadMore").on('click', function (e) {
            e.preventDefault();
            $(".col-grid-box:hidden").slice(0, 4).slideDown();
            if ($(".col-grid-box:hidden").length == 0) {
                $(".load-more-sec").text('no more products');
            }
        });
    });

    /*=====================
    12. Filter js
     ==========================*/
    $(".filter-button").on('click', function (){
        $(this).addClass('active').siblings('.active').removeClass('active');
        var value = $(this).attr('data-filter');
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });

    $("#formButton").on('click', function (){
        $("#form1").toggle();
    });
    
$(function() {
  var linkEl;
  $("#rtl_btn").click(function() {
    if (!linkEl) {
      linkEl = $('<link rel="stylesheet" type="text/css" href="css/style-rtl.css" />')
                .appendTo('head')[0];
    }
    else if (linkEl.sheet) {
      linkEl.sheet.disabled = !linkEl.sheet.disabled;
    }
  });
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


    /*=====================
     17. Tap on Top
     ==========================*/
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 600) {
            $('.tap-top').fadeIn();
        } else {
            $('.tap-top').fadeOut();
        }
    });
    $('.tap-top').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    /*=====================
         18. loader
         ==========================*/

    $('.loader-wrapper').fadeOut('slow', function() {
        $(this).remove();
    });


    /*=====================
     19. add to cart sidebar js
     ==========================*/
    function openCart() {
        document.getElementById("cart_side").classList.add('open-side');
    }
    function closeCart() {
        document.getElementById("cart_side").classList.remove('open-side');
    }




    /*=====================
    20. Color Picker
     ==========================*/
    var body_event = $("body");
    body_event.on("click", ".color1", function() {
        $("#color" ).attr("href", "../assets/css/color1.css" );
        return false;

    });
    body_event.on("click", ".color2", function() {
        $("#color" ).attr("href", "../assets/css/color2.css" );
        return false;
    });
    body_event.on("click", ".color3", function() {
        $("#color" ).attr("href", "../assets/css/color3.css" );
        return false;
    });
    body_event.on("click", ".color4", function() {
        $("#color" ).attr("href", "../assets/css/color4.css" );
        return false;
    });
    body_event.on("click", ".color5", function() {
        $("#color" ).attr("href", "../assets/css/color5.css" );
        return false;
    });
    body_event.on("click", ".color6", function() {
        $("#color" ).attr("href", "../assets/css/color6.css" );
        return false;
    });

    $('.color-picker').animate({right: '-150px'});

    body_event.on("click", ".color-picker a.handle", function(e) {
        e.preventDefault();
        var div = $('.color-picker');
        if (div.css('right') === '-150px') {
            $('.color-picker').animate({right: '0px'});
        }
        else {
            $('.color-picker').animate({right: '-150px'});
        }
    });

    /*=====================
    21. Add to cart quantity Counter
     ==========================*/
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

})(jQuery);

function openCart() {
    document.getElementById("cart_side").classList.add('open-side');
}
function closeCart() {
    document.getElementById("cart_side").classList.remove('open-side');
}



function openAccount() {
    document.getElementById("myAccount").classList.add('open-side');
}
function closeAccount() {
    document.getElementById("myAccount").classList.remove('open-side');
}

function openWishlist() {
    document.getElementById("wishlist_side").classList.add('open-side');
}
function closeWishlist() {
    document.getElementById("wishlist_side").classList.remove('open-side');
}
function openSetting() {
    document.getElementById("mySetting").classList.add('open-side');
}
function closeSetting() {
    document.getElementById("mySetting").classList.remove('open-side');
}

$( document ).ready(function() {
     $('.owl-carousel.banner-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }

        });
     $('.owl-carousel.product-trend').owlCarousel({
            loop: true,
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
     $('.owl-carousel.best-product').owlCarousel({
            loop: true,
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
     $('.owl-carousel.category').owlCarousel({
            loop: true,
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
     $('.owl-carousel.offer-slide').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items:1
                }
            }

        });

    
});


