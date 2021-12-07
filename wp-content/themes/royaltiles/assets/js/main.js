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

    var supportSVG = {
        init: function () {
            $('img.svg').each(function () {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');
                var imgwidth = $img.attr('width');
                var imgheight = $img.attr('height');

                $.get(imgURL, function (data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = $(data).find('svg');
                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }

                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + ' replaced-svg');
                        $svg = $svg.attr({
                            width: imgwidth,
                            height: imgheight
                        });
                    }
                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');
                    // Replace image with new SVG
                    $img.replaceWith($svg);
                }, 'xml');
            });
        }
    };


supportSVG.init();

    // Sticky Header and back to top
    var stickyHeader = {
        init: function () {
            this.cacheDOM();
            this.eventListener();
        },
        cacheDOM: function () {
            this.$html = $('html, body');
            this.$header = $(".site-header");
            this.$body = $("body");
            this.$backToTop = $('.back-top-icon');
        },
        eventListener: function () {
            this.$backToTop.hide();
            $(window).on('scroll load', this.stickyCall.bind(this));
            this.$backToTop.on('click', this.backToTop.bind(this) );
        },
        stickyCall: function () {
            var windowScrolled = $(window).scrollTop();
            if (windowScrolled >= 50) {
                this.$header.addClass("sticky");
                this.$backToTop.fadeIn(200);
            } else {
                this.$header.removeClass("sticky");
                this.$backToTop.fadeOut(200);
            }
        },
        backToTop: function() {
            this.$html.animate({ scrollTop: 0 }, 700);
            return false;
        }
    };

    $(function () {
        COMMON.init();
        mainNavigation.init();
        stickyHeader.init();
        // annotationListLoadMore.init();
        // keywordListLoadMore.init();
        // authorListLoadMore.init();
        // authorResultsLoadMore.init();
        defaultResultsLoadMore.init();
    });

/* hero slider */
    $('.hero-slider').slick({
        // centerMode: true,
        slidesToShow: 1,
        dots: false,
        autoplay: true,
        speed: 2000,
        infinite: true,
        fade: true,
        autoplaySpeed: 1000,
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

    $('.product-slider').slick({
        // centerMode: true,
        slidesToShow: 4,
        dots: false,
        arrows:true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<span class='left-arrow arrow-common'></span>",
        nextArrow: "<span class='right-arrow arrow-common'></span>",
        // customPaging: function (slick, index) {
        //     return '<a href="javascript:void(0);">0' + (index + 1) + '</a>';
        // },
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                arrows: true,
                centerMode: false
                // slidesToShow: 2
            }
        },
        {
            breakpoint: 991,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 1
            }
        }
        ]
    });



    /* PRODUCT-SLIDER2 */

    $('.product-slide-two').slick({
        // centerMode: true,
        slidesToShow: 3,
        dots: false,
        arrows:true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<span class='left-arrow arrow-common'></span>",
        nextArrow: "<span class='right-arrow arrow-common'></span>",
        // customPaging: function (slick, index) {
        //     return '<a href="javascript:void(0);">0' + (index + 1) + '</a>';
        // },
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                arrows: true,
                centerMode: false
                // slidesToShow: 2
            }
        },
        {
            breakpoint: 991,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 767,
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

    $('.search-main').on('click', function () {
        $('body').addClass('search-index');

    });
    $('#search-close').on('click', function () {
        $('body').removeClass('search-index');

    });

    $('.tesimonial-slide').slick({
        dots: true,
        arrows: false,
          // autoplay: true,
          infinite: true,
          speed: 3000,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
        });

        $('.client-slide').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2000,
              // autoplay: true,
              infinite: true,
              speed: 800,
              slidesToShow: 4,
              slidesToScroll: 1,
              // centerMode: true,
              centerPadding:50,

              responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        centerMode: false
                        // slidesToShow: 2
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        centerMode: false,
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        centerMode: false,
                        slidesToShow: 1
                    }
                }
                ]
            });

            $('.product-list-slide').slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: "<span class='left-arrow arrow-common'></span>",
                nextArrow: "<span class='right-arrow arrow-common'></span>",
                  // autoplay: true,
                  infinite: true,
                  speed: 800,
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  // centerMode: true,
                  centerPadding:50,
    
                  responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            centerMode: false
                            // slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    }
                    ]
                });

                $('.responsive-trending-slide').slick({
                    dots: false,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed:1000,
                      infinite: true,
                      speed: 800,
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      // centerMode: true,
                      centerPadding:50
        
                    //   responsive: [
                    //     {
                    //         breakpoint: 767,
                    //         settings: {
                    //             centerMode: false,
                    //             slidesToShow: 1
                    //         }
                    //     }
                    //     ]
                    });

                    $('.trending-slide').slick({
                        dots: false,
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed:2000,
                          infinite: true,
                          speed: 800,
                          prevArrow: "<span class='left-arrow arrow-common'></span>",
                          nextArrow: "<span class='right-arrow arrow-common'></span>",
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          // centerMode: true,
                          centerPadding:50
                        });
    


     /** change value here to adjust parallax level */
     var parallax = -0.3;

     var $bg_images = $(".attatchement-wallpaper");
     var offset_tops = [];
     $bg_images.each(function (i, el) {
         offset_tops.push($(el).offset().top);
     });
 
     $(window).scroll(function () {
         var dy = $(this).scrollTop();
         $bg_images.each(function (i, el) {
             var ot = offset_tops[i];
             $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
         });
     });
 
    
    
/* nav search */
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


    new WOW().init();

    // $(window).on('load', function() {
    //     setTimeout(function(){
    //         $("body").addClass("loader-off");
    //    },6000);
    //    });
    
})(jQuery);


