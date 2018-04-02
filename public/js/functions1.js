$.fn.inView = function () {
    "use strict";
    var win = $(window),
        obj = $(this),
        scrollPosition = win.scrollTop(),
        visibleArea = win.scrollTop() + win.height(),
        objEndPos = (obj.offset().top + obj.outerHeight() / 2);
    return (visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false);
};
$.fn.isMobile = function () {
    "use strict";
    var $mobile = 992,
        $screen = $(window).width();
    return $screen < $mobile;
};

//========  animate ========//
function animate() {
    "use strict";
    $('.animate').each(function () {
        var $this = $(this),
            $animate = $this.data('animate'),
            $delay = $this.data("delay") * 100,
            run = false;
        $this.css('visibility', 'hidden');
        $this.addClass($animate);
        window.addEventListener("scroll", function () {
            if ($this.inView() && run === false) {
                setTimeout(function () {
                    $this.addClass('in').css('visibility', 'visible');
//                        new Vivus('pbuh01', {type: 'async', duration: 100}, function(){
//                          document.getElementById("container").className = "#aaaaaa";
//                        });
                }, $delay);
                run = true;
            }
        }, true);
    });
}
animate();

//========  open nav ========//
$(document).ready(function() {
    $('.nav button').on('click', function(){
        $('body').toggleClass('nav-open');
        $('html').toggleClass('overflow');
    });
    $('#btn-nav-close').on('click', function(){
        $('body').toggleClass('nav-open');
        $('html').toggleClass('overflow');
    });
});

//========  masonry ========//
function masonry(){
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: false,
    });
}
(function($){
    if ( $('.nav-inner').length ) masonry();
}(jQuery));

//========  open search ========//
(function(window) {
'use strict';
$('#btn-search').on('click', function(){
    $('body').addClass('search-open');
    $('html').toggleClass('overflow');
		setTimeout(function() {
			$('.search__input').focus();
		}, 500);    
});
 $('#btn-search-close').on('click', function(){
    $('body').removeClass('search-open');
    $('html').toggleClass('overflow');
});
})(window);

//========  reval ========//
(function() {
				document.body.classList.remove('loading');
    
					var scrollElemToWatch_1 = document.getElementById('rev-1'),
					watcher_1 = scrollMonitor.create(scrollElemToWatch_1, -100),
					rev1 = new RevealFx(scrollElemToWatch_1, {
						revealSettings : {
							bgcolor: '#f5f6f7',
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
							}
						}
					});

				    watcher_1.enterViewport(function() {
					   rev1.reveal();
					   watcher_1.destroy();
				    });
                
                
					var scrollElemToWatch_2 = document.getElementById('rev-2'),
					watcher_2 = scrollMonitor.create(scrollElemToWatch_2, -100),
					rev2 = new RevealFx(scrollElemToWatch_2, {
						revealSettings : {
							bgcolor: '#eaecef',
							direction: 'rl',
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
                                $('ul.animate').addClass('in').css('visibility', 'visible');
							}
						}
					});
             
				watcher_2.enterViewport(function() {
					rev2.reveal();
					watcher_2.destroy();
				});                
               
                
					var scrollElemToWatch_3 = document.getElementById('rev-3'),
					watcher_3 = scrollMonitor.create(scrollElemToWatch_3, -100),
					rev3 = new RevealFx(scrollElemToWatch_3, {
						revealSettings : {
							bgcolor: '#f5f6f7',
                            direction: 'rl',
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
                                $('#art03.animate').addClass('in').css('visibility', 'visible');
                                $('.content01.animate').addClass('in').css('visibility', 'visible');
                                
							}
						}
					});
                    watcher_3.enterViewport(function() {
                        rev3.reveal();
                        watcher_3.destroy();
                    });                
                
                
					var scrollElemToWatch_4 = document.getElementById('rev-4'),
					watcher_4 = scrollMonitor.create(scrollElemToWatch_4, -100),
					rev4 = new RevealFx(scrollElemToWatch_4, {
						revealSettings : {
							bgcolor: '#f5f6f7',
//							direction: 'rl',
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
                                $('#art04.animate').addClass('in').css('visibility', 'visible');
                                $('.content02.animate').addClass('in').css('visibility', 'visible');
							}
						}
					});             
				watcher_4.enterViewport(function() {
					rev4.reveal();
					watcher_4.destroy();
				}); 
    
    
    				var scrollElemToWatch_5 = document.querySelector('.d__dontent01'),
					watcher_5 = scrollMonitor.create(scrollElemToWatch_5, -100),
					rev5 = new RevealFx(document.querySelector('#rev-5'), {
						revealSettings : {
							bgcolor: '#eaecef',
							direction: 'rl',
							duration: 800,
							easing: 'easeInOutCirc',
							coverArea: 55,
							onCover: function(contentEl, revealerEl) {
								contentEl.style.opacity = 1;
								scrollElemToWatch_5.classList.add('dual__content--show');
                                //$('.content03.animate').addClass('in').css('visibility', 'visible');

							}
						}
					});

				watcher_5.enterViewport(function() {
					rev5.reveal();
                    //rev5.destroy();
					watcher_5.destroy();
				}); 
        })();

//========  nav links ========//
$(function () {
    $('.nav-inner ._nav-item').each(function () {
        var submenu = $('div.inner-menu', this).detach().appendTo('.submenu .inside');
        var id = $(this).attr('id');
        $('.inner-menu.main_page').fadeIn();

        $('a', this).hover(function () {
            $('.nav-inner ._nav-item').removeClass('active');
            $(this).parent().addClass('active');
            $('.submenu .inner-menu').hide();
            $('div.inner-menu.'+id).show();
        });
    });
});

//========  owl carousel ========//
function owlCarousel() {
	'use strict';
	$('.owl-carousel').owlCarousel({
       itemsDesktop: [1690, 3],
       itemsDesktopSmall: [1024, 2],
       itemsTablet: [600, 1],
       itemsMobile: [0, 1],
    });
}
(function ($) {
	'use strict';
	if ($('.owl-carousel').length) {
		owlCarousel();
	}
}($));


//========  parallax ========//
window.addEventListener('load', function () {
    "use strict";
    $('.parallax').each(function () {
        var $this = $(this),
            $src = $this.attr('data-image-src');
        $this.css('background-image', 'url(' + $src + ')');

        var $wrapperHeight = $this.parents('.parallax-wrapper').find('.parallax-container').outerHeight();
        $this.parents('.parallax-wrapper').outerHeight($wrapperHeight);
    });
});
function initParallax() {
    "use strict";
    var parallaxElements = $('.parallax'),
        parallaxQuantity = parallaxElements.length;

    window.addEventListener("load", function () {
        if (!$(this).isMobile()) {
            parallaxElements.each(function () {
                var $this = $(this),
                    $speed = $this.attr('data-parallax-speed'),
                    $scrolled = $(window).scrollTop() - $this.offset().top + $this.height(),
                    $scrolledTop = $(window).scrollTop() - $this.offset().top;

                for (var i = 0; i < parallaxQuantity; i++) {
					  var currentElement = parallaxElements.eq(i);
					  var scrolled = $(window).scrollTop();					
					
                    if ($this.parents('.parallax-section').is('.page-title')) {
                        currentElement.css({
                            'transform': 'translate3d(0,' + ($scrolledTop * $speed - 80) + 'px, 0)'
                        });
                    } else if ( $this.parents('.parallax-mobile').length )  {
                        $this.css({
                            'transform': 'translate3d(0,' + ($scrolled * $speed + 10) + 'px, 0)'
                        });                            
                    } else {
                        currentElement.css({
                            'transform': 'translate3d(0,' + ($scrolled * $speed + 10) + 'px, 0)'
                        }); 
                    }
                }
            });
        }        
    });
    window.addEventListener("scroll", function () {
        if (!$(this).isMobile()) {
            window.requestAnimationFrame(function () {
                parallaxElements.each(function () {
                    var $this = $(this),
                        $speed = $this.attr('data-parallax-speed'),
                        $scrolled = $(window).scrollTop() - $this.offset().top + $this.height(),
                        $scrolledTop = $(window).scrollTop() - $this.offset().top;
                    
                    for (var i = 0; i < parallaxQuantity; i++) {     
						  var currentElement = parallaxElements.eq(i);
						  var scrolled = $(window).scrollTop();							
                        if ($this.parents('.parallax-section').is('.page-title')) {
                            currentElement.css({
                                'transform': 'translate3d(0,' + $scrolledTop * $speed + 'px, 0)'
                            });
                        } else {
                            $this.css({
                                'transform': 'translate3d(0,' + $scrolled * $speed + 'px, 0)'
                            });                            
                        }
                    }
                });
            });
        }
    });
    window.addEventListener("resize", function () {
        $('.parallax-section').each(function () {
            var $newHeight = $('.parallax-container', this).outerHeight();
            $('.parallax-wrapper', this).height($newHeight);
        });
    });
}
(function ($) {
    "use strict";
    if ($('.parallax').length && !$('.parallax').isMobile()) {
        initParallax();
    }
}(jQuery));

//========  copyright year ========//
$('#year').html(new Date().getFullYear());

function animateOnScroll() {

    /* animations  */
    if (jQuery("[class*='do-anim']").length > 0) {
        jQuery("[class*='do-anim']").not('.animated')
            .filter(function(i, d) {
                return  jQuery(d).visible(true, false, false, 100);  // 100 is offset
            }).each(function(i) {
            var thisItem = jQuery(this);
            var delayMulti = 200;
            if (thisItem.hasClass("do-anim-modern")) { delayMulti = 100; }
            var delay = i*delayMulti + 100;  // + 150 is to add a small delay
            thisItem.delay(delay).queue(function(){thisItem.addClass('animated');});
        });
    }



}
