(function($) {
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
        $elem.attr( 'src', src );
      } else {
        src = $elem.attr('data-bg-desktop');
        $elem.attr( 'src', src );
      }

    });

  };

  $w.on('load resize orientationchange', function () {

    $body.replaceImages();

    if (windowheight) {
      $('.slideshow-container, .thumbnail-container, .loader, .aside').css({'height': windowheight});
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
