import $ from 'jquery';
import plugin from './plugin';

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
    const tabletBreakpoint = 991;

    $thumbnails.galleriffic({
      delay: 2500,
      numThumbs: 60,
      preloadAhead: -1,
      enableTopPager: false,
      enableBottomPager: false,
      maxPagesToShow: 1,
      imageContainerSel: $slides.selector,
      controlsContainerSel: $controls.selector,
      captionContainerSel: $caption.selector,
      loadingContainerSel: $loader.selector,
      renderSSControls: false,
      renderNavControls: true,
      playLinkText: 'Play Slideshow',
      pauseLinkText: 'Pause Slideshow',
      prevLinkText: '&lsaquo;',
      nextLinkText: '&rsaquo;',
      prevPageLinkText: '&lsaquo;',
      nextPageLinkText: '&rsaquo;',
      enableHistory: false,
      autoStart: false,
      enableKeyboardNavigation: true,
      syncTransitions: false,
      defaultTransitionDuration: 1000,
      onSlideChange(prevIndex, nextIndex) {
        this.find('ul.thumbs')
          .children()
          .eq(prevIndex)
          .fadeTo('fast', 1.0)
          .end()
          .eq(nextIndex)
          .fadeTo('fast', 1.0);
      },
      onPageTransitionOut() {
        this.hide();
      },
      onPageTransitionIn() {
        this.show();
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

    $viewAll.on('click', (event) => {
      event.preventDefault();
      showThumbs();
    });

    $thumbs.on('click', (event) => {
      event.preventDefault();

      if ($(window).innerWidth() <= tabletBreakpoint) {
        event.stopPropagation();
      } else {
        showSlides();
      }
    });

    if ($(window).innerWidth() <= tabletBreakpoint) {
      $loader.hide();
    }

    $thumbnails.hide();
    $slideshow.show();
  }
}

plugin('Gallery', Gallery);
