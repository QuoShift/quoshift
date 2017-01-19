$(document).ready(function() {
"use strict";
var $lateral_menu_trigger = $('#cd-menu-trigger'),
        $content_wrapper = $('.cd-main-content'),
        $navigation = $('header');

    //open-close lateral menu clicking on the menu icon
    $lateral_menu_trigger.on('click', function(event){
        event.preventDefault();
        
        $lateral_menu_trigger.toggleClass('is-clicked');
        $navigation.toggleClass('lateral-menu-is-open');
        $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
            $('body').toggleClass('overflow-hidden');
        });
        $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
        
        //check if transitions are not supported - i.e. in IE9
        if($('html').hasClass('no-csstransitions')) {
            $('body').toggleClass('overflow-hidden');
        }
    });

    //close lateral menu clicking outside the menu itself
    $content_wrapper.on('click', function(event){
        if( !$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span') ) {
            $lateral_menu_trigger.removeClass('is-clicked');
            $navigation.removeClass('lateral-menu-is-open');
            $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                $('body').removeClass('overflow-hidden');
            });
            $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
            //check if transitions are not supported
            if($('html').hasClass('no-csstransitions')) {
                $('body').removeClass('overflow-hidden');
            }

        }
    });

    //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
    $('.item-has-children').children('a').on('click', function(event){
        event.preventDefault();
        $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
    });
	$('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');

	$('.partner-carousel').owlCarousel({
        margin:20,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

	$('.team-carousel').owlCarousel({
        margin:20,
        itemsMobile : [450,0], // itemsMobile disabled - inherit from itemsTablet option
        responsive:{
            0:{
                items:1
            },
            500:{
                items:2
            },
            700:{
                items:3
            },
            1000:{
                items:4,
            }
        }
    });



	
    // jQuery counter
    $('.counter').counterUp({
        delay: 50,
        time: 3000
    });




    $('.popup').magnificPopup({
      disableOn: 200,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
  });



    $('.menu-burger, .menu-items').on('click', function() {
      $('.menu-bg, .menu-items, .menu-burger').toggleClass('fs');
      $('.menu-burger').text() == "☰" ? $('.menu-burger').text('✕') : $('.menu-burger').text('☰');
  });

// /////////////HOME PAGE 2 JS ///////////////////////////

$('.service-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav: true,
            navText: [
            '<i class="arrow_triangle-left"></i>',
            '<i class="arrow_triangle-right"></i>',
            ],
        },
        600:{
            items:2,
            nav: true,
            navText: [
            '<i class="arrow_triangle-left"></i>',
            '<i class="arrow_triangle-right"></i>',
            ],
        },
        1000:{
            items:3,
            nav: true,
            navText: [
            '<i class="arrow_triangle-left"></i>',
            '<i class="arrow_triangle-right"></i>',
            ],
        }
    }
});


 var tpj = jQuery;

                var revapi202;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_202_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_202_1");
                    } else {
                        revapi202 = tpj("#rev_slider_202_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 3000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 50,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 100,
                                    style: "zeus",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>'
                                }
                            },
                            sliderType:"standard",
                            sliderLayout:"fullwidth",
                            responsiveLevels:[4096,1024,778,480],
                            gridwidth:[1140,800,750,480],
                            gridheight:[600,600,580,480],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "on",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60px",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/

  var $searchOverlay = document.querySelector(".search-overlay");
  var $search = document.querySelector(".search");
  var $clone, offsetX, offsetY;

  $search.addEventListener("click", function() {
    var $original = this;
    $clone = this.cloneNode(true);

    $searchOverlay.classList.add("s--active");

    $clone.classList.add("s--cloned", "s--hidden");
    $searchOverlay.appendChild($clone);

    var triggerLayout = $searchOverlay.offsetTop;

    var originalRect = $original.getBoundingClientRect();
    var cloneRect = $clone.getBoundingClientRect();

    offsetX = originalRect.left - cloneRect.left;
    offsetY = originalRect.top - cloneRect.top;

    $clone.style.transform = "translate("+ offsetX +"px, "+ offsetY +"px)";
    $original.classList.add("s--hidden");
    $clone.classList.remove("s--hidden");

    var triggerLayout = $searchOverlay.offsetTop;

    $clone.classList.add("s--moving");

    $clone.setAttribute("style", "");

    $clone.addEventListener("transitionend", openAfterMove);
});

  function openAfterMove() {
    $clone.classList.add("s--active");
    $clone.querySelector("input").focus();

    addCloseHandler($clone);
    $clone.removeEventListener("transitionend", openAfterMove);


function addCloseHandler($parent) {
    var $closeBtn = $parent.querySelector(".search__close");
    $closeBtn.addEventListener("click", closeHandler);
};

/* close handler functions */
function closeHandler(e) {
    $clone.classList.remove("s--active");
    e.stopPropagation();
    
    var $cloneBg = $clone.querySelector(".search__bg");

    $cloneBg.addEventListener("transitionend", moveAfterClose);
};

function moveAfterClose(e) {
    e.stopPropagation(); // prevents from double transitionend even fire on parent $clone
    
    $clone.classList.add("s--moving");
    $clone.style.transform = "translate("+ offsetX +"px, "+ offsetY +"px)";
    $clone.addEventListener("transitionend", terminateSearch);
};

function terminateSearch(e) {
    $search.classList.remove("s--hidden");
    $clone.remove();
    $searchOverlay.classList.remove("s--active");
};


};

}());

