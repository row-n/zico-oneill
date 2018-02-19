import $ from 'jquery';
import plugin from './plugin';

require('galleriffic'); // eslint-disable-line import/no-extraneous-dependencies, import/no-unresolved
require('history'); // eslint-disable-line import/no-extraneous-dependencies, import/no-unresolved

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
    const phoneBreakpoint = 768;
    const tabletBreakpoint = 991;

    const gallery = $thumbnails.galleriffic({
      delay: 3500,
      numThumbs: 16,
      preloadAhead: '-1',
      enableTopPager: false,
      enableBottomPager: false,
      imageContainerSel: $slides.selector,
      controlsContainerSel: $controls.selector,
      captionContainerSel: $caption.selector,
      loadingContainerSel: $loader.selector,
      renderSSControls: false,
      renderNavControls: true,
      prevLinkText: '‹',
      nextLinkText: '›',
      enableHistory: false,
      autoStart: false,
      enableKeyboardNavigation: true,
      syncTransitions: false,
      defaultTransitionDuration: 1000,

      onTransitionIn(slide, caption, isSync) {
        const duration = this.getDefaultTransitionDuration(isSync);
        slide.fadeTo(duration, 1);
        caption.fadeTo(duration, 1);
        $controls.fadeTo(duration, 1);
      },
      onTransitionOut(slide, caption, isSync, callback) {
        slide.fadeTo(this.getDefaultTransitionDuration(isSync), 0, callback);
        caption.fadeTo(this.getDefaultTransitionDuration(isSync), 0);
      },
      onPageTransitionIn(isSync) {
        this.fadeTo(this.getDefaultTransitionDuration(isSync), 1);
      },
    });

    const showSlides = () => {
      $thumbnails.fadeOut();
      setTimeout(() => {
        $slideshow.fadeIn();
      }, 500);
    };

    const showThumbs = () => {
      $slideshow.fadeOut();
      setTimeout(() => {
        $thumbnails.fadeIn();
      }, 500);
    };

    const replaceImages = () => {
      $thumbs.find('img').each((index, ele) => {
        const $elem = $(ele);
        let src = 0;

        if ($(window).innerWidth() <= tabletBreakpoint) {
          src = $elem.attr('data-bg-mobile');
          $elem.attr('src', src);
        } else {
          src = $elem.attr('data-bg-desktop');
          $elem.attr('src', src);
        }
      });
    };

    // const pageload = (hash) => {
    //   if (hash) {
    //     $.galleriffic.gotoImage(hash);
    //   } else {
    //     gallery.gotoIndex(0);
    //   }
    // };
    //
    // $('a[rel=history]').on('click', (event) => {
    //   if (event.button !== 0) {
    //     return true;
    //   }
    //
    //   let hash = event.currentTarget.href;
    //   hash = hash.replace(/^.*#/, '');
    //
    //   $.historyLoad(hash);
    //
    //   return false;
    // });

    $viewAll.on('click', (event) => {
      event.preventDefault();
      showThumbs();
    });

    $thumbs.on('click', (event) => {
      event.preventDefault();
      showSlides();

      if ($(window).innerWidth() <= phoneBreakpoint) {
        event.preventDefault();
        event.stopPropagation();
      }
    });

    $(window).on('load resize orientationchange', () => {
      replaceImages();
    });

    $slideshow.show();
    $thumbnails.hide();

    // $.historyInit(pageload());
  }
}

plugin('Gallery', Gallery);
