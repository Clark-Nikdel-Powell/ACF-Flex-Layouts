(function ($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
	 *
	 * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
	 *
	 * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */

    $('body').on('click', 'a.collapse-layouts', function (event) {
        $('.layout:not(.-collapsed) a[data-event="collapse-layout"]').each(function (index) {
            $(this).click();
        });
    });

    $('body').on('click', 'a.expand-layouts', function (event) {
        $('.layout.-collapsed a[data-event="collapse-layout"]').each(function (index) {
            $(this).click();
        });
    });

    $('.indent-level input').on('change', function (event) {

        var indent_amount = $(this).val();
        var layout_div = $(this).parents('.layout');

        indent_layout(indent_amount, layout_div);
    });

    $('.indent-level input').each(function (index, el) {

        var indent_amount = $(this).val();
        var layout_div = $(this).parents('.layout');

        if ( 0 !== indent_amount ) {
            indent_layout(indent_amount, layout_div);
        }
    });

    function indent_layout(indent_amount, layout_div) {

        var multiplier = 30;
        layout_div.css('margin-left', indent_amount * multiplier);
    }

})(jQuery);
