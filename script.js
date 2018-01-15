(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

(function ($) {
  'use strict';

  var breakpoint = 768;
  var altbreakpoint = 991;
  var $w = $(window);
  var $d = $(document);
  var $body = $('body');
  var windowheight = $w.height() - 135;

  $.fn.replaceImages = function () {

    $('.thumb-img').each(function (i, e) {

      var $elem = $(e);
      var src = 0;

      if ($w.innerWidth() <= altbreakpoint) {
        src = $elem.attr('data-bg-mobile');
        $elem.attr('src', src);
      } else {
        src = $elem.attr('data-bg-desktop');
        $elem.attr('src', src);
      }
    });
  };

  $w.on('load resize orientationchange', function () {

    $body.replaceImages();

    if (windowheight) {
      $('.slideshow-container, .thumbnail-container, .loader').css({ 'height': windowheight });
    }

    if ($w.innerWidth() <= altbreakpoint) {
      $('.thumbnail-container').show();
      $('.slideshow-container').hide();
    } else {
      if ($('.thumbnail-container').is(':visible')) {
        $('.thumbnail-container').show();
        $('.slideshow-container').hide();
      } else if ($('.slideshow-container').is(':visible')) {
        $('.thumbnail-container').hide();
        $('.slideshow-container').show();
      } else {
        $('.thumbnail-container').hide();
        $('.slideshow-container').show();
      }
    }
  });
})(jQuery);

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJhc3NldHMvanMvc2NyaXB0LmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBOzs7QUNBQSxDQUFDLFVBQVMsQ0FBVCxFQUFZO0FBQ1g7O0FBRUEsTUFBSSxhQUFhLEdBQWpCO0FBQ0EsTUFBSSxnQkFBZ0IsR0FBcEI7QUFDQSxNQUFJLEtBQUssRUFBRSxNQUFGLENBQVQ7QUFDQSxNQUFJLEtBQUssRUFBRSxRQUFGLENBQVQ7QUFDQSxNQUFJLFFBQVEsRUFBRSxNQUFGLENBQVo7QUFDQSxNQUFJLGVBQWUsR0FBRyxNQUFILEtBQWMsR0FBakM7O0FBRUEsSUFBRSxFQUFGLENBQUssYUFBTCxHQUFxQixZQUFZOztBQUUvQixNQUFFLFlBQUYsRUFBZ0IsSUFBaEIsQ0FBcUIsVUFBVSxDQUFWLEVBQWEsQ0FBYixFQUFnQjs7QUFFbkMsVUFBSSxRQUFRLEVBQUUsQ0FBRixDQUFaO0FBQ0EsVUFBSSxNQUFNLENBQVY7O0FBRUEsVUFBSSxHQUFHLFVBQUgsTUFBbUIsYUFBdkIsRUFBc0M7QUFDcEMsY0FBTSxNQUFNLElBQU4sQ0FBVyxnQkFBWCxDQUFOO0FBQ0EsY0FBTSxJQUFOLENBQVksS0FBWixFQUFtQixHQUFuQjtBQUNELE9BSEQsTUFHTztBQUNMLGNBQU0sTUFBTSxJQUFOLENBQVcsaUJBQVgsQ0FBTjtBQUNBLGNBQU0sSUFBTixDQUFZLEtBQVosRUFBbUIsR0FBbkI7QUFDRDtBQUVGLEtBYkQ7QUFlRCxHQWpCRDs7QUFtQkEsS0FBRyxFQUFILENBQU0sK0JBQU4sRUFBdUMsWUFBWTs7QUFFakQsVUFBTSxhQUFOOztBQUVBLFFBQUksWUFBSixFQUFrQjtBQUNoQixRQUFFLHFEQUFGLEVBQXlELEdBQXpELENBQTZELEVBQUMsVUFBVSxZQUFYLEVBQTdEO0FBQ0Q7O0FBRUQsUUFBSSxHQUFHLFVBQUgsTUFBbUIsYUFBdkIsRUFBc0M7QUFDcEMsUUFBRSxzQkFBRixFQUEwQixJQUExQjtBQUNBLFFBQUUsc0JBQUYsRUFBMEIsSUFBMUI7QUFDRCxLQUhELE1BR087QUFDTCxVQUFJLEVBQUUsc0JBQUYsRUFBMEIsRUFBMUIsQ0FBNkIsVUFBN0IsQ0FBSixFQUE4QztBQUM1QyxVQUFFLHNCQUFGLEVBQTBCLElBQTFCO0FBQ0EsVUFBRSxzQkFBRixFQUEwQixJQUExQjtBQUNELE9BSEQsTUFHTyxJQUFJLEVBQUUsc0JBQUYsRUFBMEIsRUFBMUIsQ0FBNkIsVUFBN0IsQ0FBSixFQUE4QztBQUNuRCxVQUFFLHNCQUFGLEVBQTBCLElBQTFCO0FBQ0EsVUFBRSxzQkFBRixFQUEwQixJQUExQjtBQUNELE9BSE0sTUFHQTtBQUNMLFVBQUUsc0JBQUYsRUFBMEIsSUFBMUI7QUFDQSxVQUFFLHNCQUFGLEVBQTBCLElBQTFCO0FBQ0Q7QUFDRjtBQUNGLEdBdkJEO0FBeUJELENBdERELEVBc0RHLE1BdERIIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsIihmdW5jdGlvbigkKSB7XG4gICd1c2Ugc3RyaWN0JztcblxuICB2YXIgYnJlYWtwb2ludCA9IDc2ODtcbiAgdmFyIGFsdGJyZWFrcG9pbnQgPSA5OTE7XG4gIHZhciAkdyA9ICQod2luZG93KTtcbiAgdmFyICRkID0gJChkb2N1bWVudCk7XG4gIHZhciAkYm9keSA9ICQoJ2JvZHknKTtcbiAgdmFyIHdpbmRvd2hlaWdodCA9ICR3LmhlaWdodCgpIC0gMTM1O1xuXG4gICQuZm4ucmVwbGFjZUltYWdlcyA9IGZ1bmN0aW9uICgpIHtcblxuICAgICQoJy50aHVtYi1pbWcnKS5lYWNoKGZ1bmN0aW9uIChpLCBlKSB7XG5cbiAgICAgIHZhciAkZWxlbSA9ICQoZSk7XG4gICAgICB2YXIgc3JjID0gMDtcblxuICAgICAgaWYgKCR3LmlubmVyV2lkdGgoKSA8PSBhbHRicmVha3BvaW50KSB7XG4gICAgICAgIHNyYyA9ICRlbGVtLmF0dHIoJ2RhdGEtYmctbW9iaWxlJyk7XG4gICAgICAgICRlbGVtLmF0dHIoICdzcmMnLCBzcmMgKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIHNyYyA9ICRlbGVtLmF0dHIoJ2RhdGEtYmctZGVza3RvcCcpO1xuICAgICAgICAkZWxlbS5hdHRyKCAnc3JjJywgc3JjICk7XG4gICAgICB9XG5cbiAgICB9KTtcblxuICB9O1xuXG4gICR3Lm9uKCdsb2FkIHJlc2l6ZSBvcmllbnRhdGlvbmNoYW5nZScsIGZ1bmN0aW9uICgpIHtcblxuICAgICRib2R5LnJlcGxhY2VJbWFnZXMoKTtcblxuICAgIGlmICh3aW5kb3doZWlnaHQpIHtcbiAgICAgICQoJy5zbGlkZXNob3ctY29udGFpbmVyLCAudGh1bWJuYWlsLWNvbnRhaW5lciwgLmxvYWRlcicpLmNzcyh7J2hlaWdodCc6IHdpbmRvd2hlaWdodH0pO1xuICAgIH1cblxuICAgIGlmICgkdy5pbm5lcldpZHRoKCkgPD0gYWx0YnJlYWtwb2ludCkge1xuICAgICAgJCgnLnRodW1ibmFpbC1jb250YWluZXInKS5zaG93KCk7XG4gICAgICAkKCcuc2xpZGVzaG93LWNvbnRhaW5lcicpLmhpZGUoKTtcbiAgICB9IGVsc2Uge1xuICAgICAgaWYgKCQoJy50aHVtYm5haWwtY29udGFpbmVyJykuaXMoJzp2aXNpYmxlJykpIHtcbiAgICAgICAgJCgnLnRodW1ibmFpbC1jb250YWluZXInKS5zaG93KCk7XG4gICAgICAgICQoJy5zbGlkZXNob3ctY29udGFpbmVyJykuaGlkZSgpO1xuICAgICAgfSBlbHNlIGlmICgkKCcuc2xpZGVzaG93LWNvbnRhaW5lcicpLmlzKCc6dmlzaWJsZScpKSB7XG4gICAgICAgICQoJy50aHVtYm5haWwtY29udGFpbmVyJykuaGlkZSgpO1xuICAgICAgICAkKCcuc2xpZGVzaG93LWNvbnRhaW5lcicpLnNob3coKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgICQoJy50aHVtYm5haWwtY29udGFpbmVyJykuaGlkZSgpO1xuICAgICAgICAkKCcuc2xpZGVzaG93LWNvbnRhaW5lcicpLnNob3coKTtcbiAgICAgIH1cbiAgICB9XG4gIH0pO1xuXG59KShqUXVlcnkpO1xuIl19
