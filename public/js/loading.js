//$(function(){
//    loader();
//});
//$(window).on('beforeunload', function(){
//  $(window).scrollTop(0);
//});
//
//function loader() {
//    var obj = document.querySelector('.preloader'),
//        inner = document.querySelector('.preloader_inner'),
//        page = document.querySelector('#wrapper');
//    obj.classList.add('show');
//    page.classList.remove('show');
//
//    var path = document.querySelector('#first path');
//    var text = document.querySelector('#first .circ-text');
//    var length = path.getTotalLength();
//    var i = 0;
//    var count = 0;
//    var ticks = 200;
//    setInterval(function() {
//      if (i < length+length/ticks) {
//        path.setAttribute('stroke-dasharray', i+","+length);
//        i+=length/ticks;
//        text.innerHTML=Math.round((count++/ticks)*100)+"%";
//
//          
//          if ($('text#percentage').text() === "100%") {
//                $('.preloader').hide().trigger('classChange');
//              setTimeout(function(){
//                    $('body').addClass('loaded');
//                    $('section#home .wrapper .animate').addClass('in');
//              }, 1200);      
////                            earthinit();
//
//          }
//      }
//    }, 7); 
//}


$('section#home .wrapper .animate').addClass('in');