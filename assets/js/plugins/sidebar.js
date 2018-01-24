import $ from 'jquery';
import plugin from './plugin';

class Sidebar {
  constructor() {
    const $body = $('#body');
    const $trigger = $('#trigger');

    $trigger.click(() => {
      $body.toggleClass('sidebar-active');
    });
  }
}

plugin('Sidebar', Sidebar);
