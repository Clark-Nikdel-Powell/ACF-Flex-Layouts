(function ($) {
    'use strict';

    // Collapse all layouts
    $('body').on('click', 'a.collapse-layouts', function (event) {
        $('.layout:not(.-collapsed) a[data-event="collapse-layout"]').each(function (index) {
            $(this).click();
        });
    });

    // Expand all layouts
    $('body').on('click', 'a.expand-layouts', function (event) {
        $('.layout.-collapsed a[data-event="collapse-layout"]').each(function (index) {
            $(this).click();
        });
    });

    // Collapse/Expand a row

    // Add the buttons first
    $('[data-layout="layout_open_row"] .acf-fc-layout-controlls').prepend('<li class="expand-row"><a href="#" class="expand-row" title="Expand Row"><span class="dashicons dashicons-editor-expand"></span><span class="screen-reader-text">Expand Row</span></a></li>');
    $('[data-layout="layout_open_row"] .acf-fc-layout-controlls').prepend('<li class="collapse-row visible"><a href="#" class="collapse-row" title="Collapse Row"><span class="dashicons dashicons-editor-contract"></span><span class="screen-reader-text">Collapse Row</span></a></li>');


    $('body').on('click', 'a.collapse-row', function (event) {
        event.preventDefault();

        var $openRow = $(this).parents('.layout');

        collapse_expand_row_content( 'collapse', $openRow );
    });

    $('body').on('click', 'a.expand-row', function (event) {
        event.preventDefault();

        var $openRow = $(this).parents('.layout');

        collapse_expand_row_content( 'expand', $openRow );
    });

    function collapse_expand_row_content( expand_or_collapse, $openRow ) {

        var openRowIndentLevel = $openRow.find('.indent-level input').val();

        if ( '' === openRowIndentLevel ) {
            openRowIndentLevel = '0';
        }

        if ( 'collapse' === expand_or_collapse ) {
            $openRow.nextUntil('[data-layout="layout_close_row"][data-indent="' + openRowIndentLevel + '"]').addClass('hide');
        }
        if ( 'expand' === expand_or_collapse ) {
            $openRow.nextUntil('[data-layout="layout_close_row"][data-indent="' + openRowIndentLevel + '"]').removeClass('hide');
        }
    }


    // Indent on input change
    $('.indent-level input').on('change', function (event) {

        var indent_amount = $(this).val();
        var layout_div = $(this).parents('.layout');

        indent_layout(indent_amount, layout_div);
    });

    // Indent on page load
    $('.indent-level input').each(function (index, el) {

        var indent_amount = $(this).val();
        var layout_div = $(this).parents('.layout');

        indent_layout(indent_amount, layout_div);
    });

    function indent_layout(indent_amount, layout_div) {

        if ( '' === indent_amount ) {
            indent_amount = '0';
        }

        var multiplier = 30;
        layout_div.css('margin-left', indent_amount * multiplier);

        layout_div.attr('data-indent', indent_amount);
    }

})(jQuery);
