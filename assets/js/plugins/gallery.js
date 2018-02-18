import $ from 'jquery';
import plugin from './plugin';
import '../vendor/jquery.history';

require('galleriffic'); // eslint-disable-line import/no-extraneous-dependencies, import/no-unresolved

class Gallery {
  constructor(element) {
    const $element = $(element);
    const $thumbnails = $element.find('#thumbnails');
    const $thumbs = $thumbnails.find('.thumbs__link');
    const $slideshow = $element.find('#slideshow');
    const $slides = $element.find('#slides');
    const $controls = $element.find('#controls');
    const $caption = $element.find('#caption');
    const $loader = $element.find('#loader');
    const $viewAll = $element.find('#view');
    const breakpoint = 768;
    const windowHeight = $(window).height() - 135;

    $slideshow.hide();
    $thumbnails.hide();
    $controls.hide();
    $loader.show();

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

    const resizeImage = () => {
      // $slideshow.css('height', windowHeight);
    };

    const pageload = (hash) => {
      if (hash) {
        $.galleriffic.gotoImage(hash);
      } else {
        $slideshow.gotoIndex(0);
      }
    };

    $thumbnails.galleriffic({
      delay: 3500,
      numThumbs: 16,
      preloadAhead: '-1',
      enableTopPager: false,
      enableBottomPager: false,
      imageContainerSel: $slides.selector,
      controlsContainerSel: $controls.selector,
      captionContainerSel: $caption.selector,
      loadingContainerSel: $loader.selector,
      renderNavControls: true,
      prevLinkText: '<',
      nextLinkText: '>',
      enableHistory: true,
      autoStart: false,
      enableKeyboardNavigation: true,
      syncTransitions: false,
      defaultTransitionDuration: 300,

      // onTransitionOut: (slide, caption, isSync, callback) => {
      //   slide.fadeTo(slide.getDefaultTransitionDuration(isSync), 0.0, callback);
      //   caption.fadeTo(slide.getDefaultTransitionDuration(isSync), 0.0);
      // },
      // onTransitionIn: (slide, caption, isSync) => {
      //   console.log(slide);
      //   const duration = slide.getDefaultTransitionDuration(isSync);
      //   slide.fadeTo(duration, 1.0);
      //   $('.controls').fadeTo(duration, 1.0);
      //
      //   // Position the caption at the bottom of the image and set its opacity
      //   caption.fadeTo(duration, 1.0);
      //
      //   if (typeof $.fn.resizeImage === 'function') {
      //     $slideshow.resizeImage();
      //   }
      // },
      // onPageTransitionOut: (event) => {
      //   console.log(event);
      //   event.target.hide();
      // },
      // onPageTransitionIn: (event) => {
      //   event.target.fadeTo('fast', 1.0);
      // },

    });

    // $.historyInit(pageload);
    $('a[rel=history]').on('click', (event) => {
      console.log(event);
      if (event.button !== 0) {
        return true;
      }

      let hash = this.href;
      hash = hash.replace(/^.*#/, '');

      $.historyLoad(hash);

      return false;
    });

    $viewAll.on('click', (event) => {
      event.preventDefault();
      showThumbs();
    });

    $thumbs.on('click', (event) => {
      event.preventDefault();
      showSlides();

      $(event.target).parent()
        .addClass('selected')
        .siblings()
        .removeClass('selected');

      if ($(window).innerWidth() <= breakpoint) {
        event.preventDefault();
        event.stopPropagation();
      }
    });

    $(window).on('resize orientationchange', () => {
      resizeImage();
    });
  }
}

plugin('Gallery', Gallery);
