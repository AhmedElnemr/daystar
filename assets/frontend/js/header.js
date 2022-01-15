
(function($) {
    "use strict";   

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
})(jQuery);