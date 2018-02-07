import $ from 'jquery';
// import 'fancybox';
import plugin from './plugin';

require('fancybox')($);

// import galleriffic from '../vendor/jquery.galleriffic';
// import '../vendor/jquery.history';

class Gallery {
  constructor(element) {
    const $element = $(element);
    const $thumbnails = $element.find('#thumbnails');
    const $slideshow = $element.find('#slideshow');
    const $controls = $element.find('#controls');
    const $loader = $element.find('#loader');
    const $viewAll = $element.find('#view');

    const windowHeight = $(window).height() - 135;
    const breakpoint = 768;

    console.log($element);

    $slideshow.hide();
    $thumbnails.hide();
    $controls.hide();
    $loader.show();
    $('.slideshow-container').css('display', 'block');
    $('.photospace').css({ height: windowHeight });

    const showSlides = () => {
      $thumbnails.fadeOut();
      setTimeout(() => {
        $slideshow.fadeIn();

        if (typeof $.fn.resizeImage === 'function') {
          $slideshow.resizeImage();
        }
      }, 500);
    };

    const showThumbs = () => {
      $slideshow.fadeOut();
      setTimeout(() => {
        $thumbnails.fadeIn();
      }, 500);
    };

    // $.fancybox.open($element);

    // $element.galleriffic();

    // $element.galleriffic({
    //   delay: 3500,
    //   numThumbs: 16,
    //   preloadAhead: '-1',
    //   enableTopPager: false,
    //   enableBottomPager: false,
    //   imageContainerSel: $slideshow,
    //   controlsContainerSel: $controls,
    //   // captionContainerSel: $captions,
    //   loadingContainerSel: $loader,
    //   renderNavControls: true,
    //   prevLinkText: '<',
    //   nextLinkText: '>',
    //   enableHistory: true,
    //   autoStart: false,
    //   enableKeyboardNavigation: true,
    //   syncTransitions: false,
    //   defaultTransitionDuration: 300,
    //
    //   onTransitionOut: (slide, caption, isSync, callback) => {
    //     slide.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0, callback);
    //     caption.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0);
    //   },
    //   onTransitionIn: (slide, caption, isSync) => {
    //     const duration = this.getDefaultTransitionDuration(isSync);
    //     slide.fadeTo(duration, 1.0);
    //     $('.controls').fadeTo(duration, 1.0);
    //
    //     // Position the caption at the bottom of the image and set its opacity
    //     caption.fadeTo(duration, 1.0);
    //
    //     if (typeof $.fn.resizeImage === 'function') {
    //       $slideshow.resizeImage();
    //     }
    //   },
    //   onPageTransitionOut: (event) => {
    //     event.target.hide();
    //   },
    //   onPageTransitionIn: (event) => {
    //     event.target.fadeTo('fast', 1.0);
    //   },
    //
    // });
    //
    // $viewAll.on('click', (event) => {
    //   event.preventDefault();
    //   showThumbs();
    // });
    //
    // $(document).on('click', '.thumb', (event) => {
    //   event.preventDefault();
    //   showSlides();
    //
    //   $(event.target).parent()
    //     .addClass('selected')
    //     .siblings()
    //     .removeClass('selected');
    //
    //   if ($(window).innerWidth() <= breakpoint) {
    //     event.preventDefault();
    //     event.stopPropagation();
    //   }
    // });
  }
}

plugin('Gallery', Gallery);
