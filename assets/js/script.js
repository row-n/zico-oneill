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


    $.fn.populateThumbs = function () {
        var list = $('.thumbnail-container ul.thumbs'),
            listItems = list.find('li'),
            total = 16,
            i = 0;

        if (listItems.length <= total) {

            var remaining = total - listItems.length;

            while (remaining > 0 ) {
                var random = Math.floor(Math.random() * (total - remaining + 1));
                // var random = Math.floor(Math.exp(Math.random()*Math.log(total - remaining + 1))) - 1;
                // console.log(random);
                var newElement = document.createElement('li');
                newElement.className = 'empty';
                var newSpan = document.createElement('span');
                newSpan.className = 'thumb-bg';
                $(newElement).append(newSpan);

                listItems.splice(random, 0, (newElement));
                remaining -= 1;

                // listItems.css('display', 'block');
            }

            $(list).append(listItems);


        }
    }

    $d.ready(function() {

        $body.populateThumbs();

    });

    $w.on('load resize orientationchange', function () {

        $body.replaceImages();

        if ($w.innerWidth() <= altbreakpoint) {
            $('.thumbnail-container').show();
            $('.slideshow-container').hide();
            // $('.loader').hide();
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
            // $('.loader').hide();
        }
    });

})(jQuery);
