/**
 * Required
 */
 
 //@prepros-prepend vendor/foundation/js/plugins/foundation.core.js

/**
 * Optional Plugins
 * Remove * to enable any plugins you want to use
 */
 
 // What Input
 //@*prepros-prepend vendor/whatinput.js
 
 // Foundation Utilities
 // https://get.foundation/sites/docs/javascript-utilities.html
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.box.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.imageLoader.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.keyboard.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.mediaQuery.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.motion.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.nest.min.js
 //@*prepros-prepend vendor/foundation/js/plugins/foundation.util.timer.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.touch.min.js
 //@prepros-prepend vendor/foundation/js/plugins/foundation.util.triggers.min.js


// JS Form Validation
//@prepros-prepend vendor/foundation/js/plugins/foundation.abide.js

// Accordian
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordion.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.accordionMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveAccordionTabs.js

// Menu enhancements
//@prepros-prepend vendor/foundation/js/plugins/foundation.drilldown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdown.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.dropdownMenu.js
//@prepros-prepend vendor/foundation/js/plugins/foundation.responsiveMenu.js
//@*prepros-prepend vendor/foundation/js/plugins/foundation.responsiveToggle.js

// Equalize heights
//@*prepros-prepend vendor/foundation/js/plugins/foundation.equalizer.js

// Responsive Images
//@prepros-prepend vendor/foundation/js/plugins/foundation.interchange.js

// Navigation Widget
//@*prepros-prepend vendor/foundation/js/plugins/foundation.magellan.js

// Offcanvas Naviagtion Option
//@prepros-prepend vendor/foundation/js/plugins/foundation.offcanvas.js

// Carousel (don't ever use)
//@*prepros-prepend vendor/foundation/js/plugins/foundation.orbit.js

// Modals
//@prepros-prepend vendor/foundation/js/plugins/foundation.reveal.js

// Form UI element
//@*prepros-prepend vendor/foundation/js/plugins/foundation.slider.js

// Anchor Link Scrolling
//@prepros-prepend vendor/foundation/js/plugins/foundation.smoothScroll.js

// Sticky Elements
//@prepros-prepend vendor/foundation/js/plugins/foundation.sticky.js

// Tabs UI
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tabs.js

// On/Off UI Switching
//@*prepros-prepend vendor/foundation/js/plugins/foundation.toggler.js

// Tooltips
//@*prepros-prepend vendor/foundation/js/plugins/foundation.tooltip.js

// What Input
//@prepros-prepend vendor/what-input.js

// Swiper
//@prepros-prepend vendor/swiper-bundle.js

// Images Loaded
//@prepros-prepend vendor/imagesloaded.pkgd.js

// DOM Ready
(function($) {
	'use strict';
    
    var _app = window._app || {};
    
    _app.foundation_init = function() {
        $(document).foundation();
    }
        
    _app.emptyParentLinks = function() {
            
        $('.menu li a[href="#"]').click(function(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        });	
        
    };
    
    _app.fixed_nav_hack = function() {
        $('.off-canvas').on('opened.zf.offCanvas', function() {
            $('header.site-header').addClass('off-canvas-content is-open-right has-transition-push');		
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').addClass('clicked');	
        });
        
        $('.off-canvas').on('close.zf.offCanvas', function() {
            $('header.site-header').removeClass('off-canvas-content is-open-right has-transition-push');
            $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
        });
        
        $(window).on('resize', function() {
            if ($(window).width() > 1023) {
                $('.off-canvas').foundation('close');
                $('header.site-header').removeClass('off-canvas-content has-transition-push');
                $('header.site-header #top-bar-menu .menu-toggle-wrap a#menu-toggle').removeClass('clicked');
            }
        });    
    }
    
    _app.mobile_nav = function() {
        $(document).on('click', 'a#menu-toggle', function(){
            
            if ( $(this).hasClass('clicked') ) {
                $(this).removeClass('clicked');
                $('body').removeClass('mobile-nav-open');
                $('#off-canvas').fadeOut(200);
            } else {            
                $(this).addClass('clicked');
                $('body').addClass('mobile-nav-open');
                $('#off-canvas').fadeIn(200);
            }
    
        });
        
        window.onresize = function() {
            if (window.innerWidth >= 900) {
                $('a#menu-toggle').removeClass('clicked');
                $('body').removeClass('mobile-nav-open');
                $('#off-canvas').fadeOut(200);
            }
        }
        
    }
    
    _app.display_on_load = function() {
        $('.display-on-load').css('visibility', 'visible');
    }
    
    _app.display_on_image_load = function() {
        $('.display-on-image-load').each( function() {
            let $this = $(this);
            $(this).imagesLoaded( function() {
                $($this).addClass('show');
            });
        });
    }
    
    // Custom Functions
    
    _app.mobile_takover_nav = function() {
        $(document).on('click', 'a#menu-toggle', function(){
            console.log("loaded");
            if ( $(this).hasClass('clicked') ) {
                $(this).removeClass('clicked');
                $('body').removeClass('mobile-nav-open');
                $('#off-canvas').fadeOut(200);
            
            } else {
                $(this).addClass('clicked');
                $('body').addClass('mobile-nav-open');
                $('#off-canvas').fadeIn(200);
            }
            
        });
    }
    
    _app.three_img_set = function () {
        
        if( $('.three-image-set').length ) {
            const adjustScale = function() {
    
                let image = document.querySelector(".three-image-set");
                let imageWidth = image.innerwidth;
                let maxWindowWidth = 1440;
                let scale =  window.innerWidth / maxWindowWidth;
                let mobileScale =  scale * 2;
    
                if( mobileScale < 1 ) {
    
                    if ( window.innerWidth < 640 ) {
                        image.style.transform = "scale(" + mobileScale + ")";
                    }
                    
                }
                
                if( mobileScale < .8 ) {
                    
                    if ( window.innerWidth >= 640 && window.innerWidth < 900 ) {
                        image.style.transform = "scale(" + mobileScale + ")";
                    }
                    
                } else {
                    image.style.transform = "scale(.8)";
                }
    
                if ( window.innerWidth >= 900 && window.innerWidth < 1440 ) {
                    image.style.transform = "scale(" + scale + ")";
                } 
                
                if ( window.innerWidth >= 1440 ) {
                    image.style.transform = "scale(1)";
                    
                }
                
            }
            
            window.addEventListener("load", adjustScale);
            window.addEventListener("resize", adjustScale);
            
        }
  
    }
    
    _app.testimonials_slider = function() {
        if( $('body').hasClass('home') ) {
            
            const testimonialsSlides = document.querySelectorAll('#testimonials-text-slider .swiper-slide').length;
            if ( testimonialsSlides > 1 ) {
                
                const testimonialsSwiperText = new Swiper("#testimonials-text-slider", {
                    slidesPerView: 1,
                    spaceBetween: 32,
                    loop: true,
                    loopAdditionalSlides: testimonialsSlides,
                    pagination: {
                        el: '.testimonials-text-swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                        renderBullet: function (index, className) {
                          return '<span class="swiper-pagination-bullet"><svg xmlns="http://www.w3.org/2000/svg" width="24.113" height="20.882" viewBox="0 0 24.113 20.882"><g class="active-bg" id="Path_861" data-name="Path 861" transform="translate(0 0)" fill="#ffffff"><path d="M6.028,0,0,10.441,6.028,20.882H18.084l6.028-10.441L18.084,0Z" stroke="none"/><path d="M 7.182861328125 1.999996185302734 L 2.309396743774414 10.4410400390625 L 7.182867050170898 18.88215637207031 L 16.92976379394531 18.88215637207031 L 21.80322456359863 10.4410400390625 L 16.92976760864258 1.999996185302734 L 7.182861328125 1.999996185302734 M 6.028165817260742 -3.814697265625e-06 L 18.08446502685547 -3.814697265625e-06 L 24.11262512207031 10.44103622436523 L 18.08446502685547 20.88215637207031 L 6.028165817260742 20.88215637207031 L -3.814697265625e-06 10.44103622436523 L 6.028165817260742 -3.814697265625e-06 Z" stroke="none" fill="#212020"/></g></svg></span>';
                        },
                    },
                });

            }
        }
    }
    
    _app.footer_social_slider = function() {
        if( $('.prefooter .social').length ) {
            
            let sbiImages = $('#sbi_images');
            let sbiImage = $('#sbi_images .sbi_item');
            
            $(sbiImage).addClass('swiper-slide');
            $(sbiImage).wrapAll( "<div class='swiper-wrapper' />");
    
            let footerIGSwiper = new Swiper(".prefooter .social #sbi_images", {
                slidesPerView: 1,
                spaceBetween: 24,
                freeMode: true,
                grabCursor: true,
                centeredSlides: true,
                initialSlide: 1,
                breakpoints: {
                  640: {
                    slidesPerView: 2,
                    initialSlide: 1,
                    centeredSlides: false,
                  },
                  900: {
                    slidesPerView: 5,
                    initialSlide: 0,
                    centeredSlides: false,
                  },
                },
            });            
        }
    }
    
    _app.nation_map = function() {
        if( $('#locations-map-modal .locations-nav').length ) {
            $('#locations-map-modal .locations-nav').foundation('_destroy');
            $('#locations-map-modal .locations-nav > li > ul li').hide();
            
            $('.nation-state').click( function(){
                const thisID = $(this).attr('id');
                const clickedState = thisID.toLowerCase();
    
                // State Parents
                const stateParents  = $('.map-location-reveal .locations-nav > li > ul > li');
                const newEngland = $('#locations-map-modal .new-england');
                const triState = $('#locations-map-modal .tri-state');
                const midAtlantic = $('#locations-map-modal .mid-atlantic');
                const midWest = $('#locations-map-modal .midwest');
                const southEast = $('#locations-map-modal .southeast');
                const west = $('#locations-map-modal .west');
    
                // States
                const ma = $('#locations-map-modal .massachusetts');
                const ri = $('#locations-map-modal .rhode-island');
                const ny = $('#locations-map-modal .new-york');
                const nj = $('#locations-map-modal .new-jersey');
                const de = $('#locations-map-modal .delaware');
                const va = $('#locations-map-modal .virginia');
                const tn = $('#locations-map-modal .tennessee');
                const ca = $('#locations-map-modal .california');
                // if( $(this).hasClass('open') ) {
                //     $(this).removeClass('open');
                //     $(this).find('li').hide();
                // } else {
                //     $(this).addClass('open');
                //     $(this).find('li').show();
                // }
                
                console.log(clickedState);
           
                // Parents show/hide
                if( clickedState == 'ny') {
                    triState.show();
                    triState.siblings().hide();
                }
                
                if ( clickedState == 'ma' ) {
                    newEngland.show();
                    newEngland.siblings().hide();
                }
           
           
                // States show/hide
                if( clickedState == 'ny' ) {
                    console.log(triState);
                    ny.show();
                    ny.find('li').show();
                } else {
                    ny.hide();
                    ny.find('li').hide();
                } 
                
                // if( clickedState == 'nj' ) {
                //     nj.show();
                //     nj.find('li').show();
                // } else {
                //     nj.hide();
                //     nj.find('li').hide();
                // } 
                
                if ( clickedState == 'ma' ) {
                    ma.show();
                    ma.find('li').show();
                } else {
                    ma.hide();
                    ma.find('li').hide();
                }
                
                // Open Modal
                if( !(clickedState == 'ri' || clickedState == 'nj' )) {
                    $('#locations-map-modal').foundation('open');
                } else {
                    // do nothing
                }
                
                
                //States link directly
                if ( clickedState == 'ri' ) {
                    const linkedPage =  $(ri).find('a').attr('href');
                    window.location.href = linkedPage;
                }
            });
        }
    }
            
    _app.init = function() {
        
        // Standard Functions
        _app.foundation_init();
        _app.emptyParentLinks();
        // Disable fixed_nav_hack for takeover
        // _app.fixed_nav_hack();
        _app.mobile_nav();
        _app.display_on_load();
        _app.display_on_image_load();
        
        // Custom Functions
        _app.three_img_set();
        _app.testimonials_slider();
        _app.footer_social_slider();
        _app.nation_map();
    }
    
    
    // initialize functions on load
    $(function() {
        _app.init();
    });
	
	
})(jQuery);