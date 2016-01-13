// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());

// Place any jQuery/helper plugins in here.
var owl = $('.owl-carousel');
owl.owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  autoplay: true,
  nav: true,
  navText: ['<i class="fa fa-chevron-circle-left"></i>','<i class="fa fa-chevron-circle-right"></i>'],
  autoplayTimeout: 100000,
  autoplayHoverPause: true
});
$('.play').on('click',function(){
  owl.trigger('autoplay.play.owl',[1000])
})
$('.stop').on('click',function(){
  owl.trigger('autoplay.stop.owl')
})
