import { $, jQuery } from 'jquery';

window.$ = jQuery;

import './plugins/gallery';
import './plugins/sidebar';

$('#gallery').Gallery();
$('#sidebar').Sidebar();

console.log($('#gallery'));
