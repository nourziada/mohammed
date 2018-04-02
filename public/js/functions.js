$(document).ready(function(){
    "use strict";

$(window).scroll(function(){
    if ($(this).scrollTop() >= 600) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }

});
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1500);
        return false;
    });

});
// scroll body to 0px on click



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

$('#qmenu li a').click(function (e) {
    e.preventDefault();

    $('html , body').animate({
        scrollTop:$('#' + $(this).data('scroll')).offset().top - 10
    },1000);
});


//click nav
$( ".nav a" ).click(function() {
    $( "#btn-nav-close" ).click();
});