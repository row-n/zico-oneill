import $ from 'jquery';
import plugin from './plugin';

class Menu {
  constructor() {
    const $body = $('body');
    const $trigger = $('#trigger');

    $trigger.click(() => {
      $body.toggleClass('menu-open');
    });
  }
}

plugin('Menu', Menu);
