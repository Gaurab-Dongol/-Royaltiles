(function ($) {

    var COMMON = {
        init: function () {
            this.cacheDOM();

            $(window).on('resize', this.reCalcOnResize.bind(this))
        },
        cacheDOM: function () {
            this.$body = $('body');
            this.windowWidth = $(window).width();
        },
        reCalcOnResize: function () {
            this.windowWidth = $(window).width();
        }
    };

    var mainNavigation = {
        init: function () {
            this.$mainNavContainer = $('#site-navigation');
            this.$menuToggler = this.$mainNavContainer.find('.menu-toggle');
            this.$mainMenuContainer = this.$mainNavContainer.find('.menu-primary-container');
            this.$mainMenu = this.$mainNavContainer.find('#primary-menu');
            console.log(this.$menuToggler);
            this.$menuToggler.on('click',this.toggleMenu.bind(this));
        },
        toggleMenu: function (e) {
            e.preventDefault();
            this.$mainMenuContainer.toggleClass('shown');
        }
    };

    $(function () {
        COMMON.init();
        mainNavigation.init();
    });

/* hero slider */
    $('.hero-slider').slick({
        // centerMode: true,
        slidesToShow: 1,
        dots: false,
        prevArrow: "<span class='left-arrow'></span>",
        nextArrow: "<span class='right-arrow'></span>",
        // customPaging: function (slick, index) {
        //     return '<a href="javascript:void(0);">0' + (index + 1) + '</a>';
        // },
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerMode: false
                // slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 1
            }
        }
        ]
    });

    $('.hamburger').on('click', function () {
        $('body').toggleClass('menu-open');

    });
    
$(document).ready(function(){
    $('a[href="#search"]').on('click', function(event) {                    
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });                    
    $( '#search-close' ).click( function(){
        $( '#search' ).removeClass( 'open' );
    });
    $( document ).on( 'keyup', function(e){
        if( event.keyCode == 27){
            $( '#search' ).removeClass( 'open' );
        }  
    });
});
})(jQuery);
