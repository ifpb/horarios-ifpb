try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

// requires jquery library
jQuery(document).ready(function() {
    jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');
});
