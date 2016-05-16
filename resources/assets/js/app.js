/**
 * Created by Developer on 5/16/2016.
 */
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$(document).ready(function() {
   console.log($.fn.tooltip.Constructor.VERSION);
});
