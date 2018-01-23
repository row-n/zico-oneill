import $ from 'jquery';
import plugin from './plugin';

class Sidebar {
  constructor(element) {
    const $element = $(element);
    const $trigger = $('#trigger');

    $trigger.click(() => {
      $element.toggleClass('sidebar--open');
    });
  }
}

plugin('Sidebar', Sidebar);
