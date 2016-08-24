(function ($) {
    'use strict';

    /*——————————————————————————————————————————————————————————
     /  Collapse/Expand All Layouts
     ——————————————————————————————————————————————————————————*/

    // Collapse all layouts
    $('body').on('click', 'a.collapse-all-layouts', function (event) {
        $('.layout:not(.-collapsed) a[data-event="collapse-layout"]').trigger('click');
    });

    // Expand all layouts
    $('body').on('click', 'a.expand-all-layouts', function (event) {
        $('.layout.-collapsed a[data-event="collapse-layout"]').trigger('click');
    });

    /*——————————————————————————————————————————————————————————
     /  Collapse/Expand a row
     ——————————————————————————————————————————————————————————*/

    // Add the buttons first
    $('[data-layout="layout_open_row"] .acf-fc-layout-controlls').append('<li class="expand-row hide"><a href="#" class="expand-row" title="Expand Row"><span class="expand-row-icon"></span><span class="screen-reader-text">Expand Row</span></a></li>');
    $('[data-layout="layout_open_row"] .acf-fc-layout-controlls').append('<li class="collapse-row"><a href="#" class="collapse-row" title="Collapse Row"><span class="collapse-row-icon"></span><span class="screen-reader-text">Collapse Row</span></a></li>');

    // Collapse Row Handler
    $('body').on('click', 'a.collapse-row', function (event) {
        event.preventDefault();

        var $openRow = $(this).parents('.layout');

        collapse_expand_row_content('collapse', $openRow);
    });

    // Expand Row Handler
    $('body').on('click', 'a.expand-row', function (event) {
        event.preventDefault();

        var $openRow = $(this).parents('.layout');

        collapse_expand_row_content('expand', $openRow);
    });

    // Collapse/Expand Row Function
    function collapse_expand_row_content(expand_or_collapse, $openRow) {

        var openRowIndentLevel = $openRow.find('.indent-level input').val();

        if ('' === openRowIndentLevel) {
            openRowIndentLevel = '0';
        }

        if ('collapse' === expand_or_collapse) {
            $openRow.nextUntil('[data-layout="layout_close_row"][data-indent="' + openRowIndentLevel + '"]').addClass('hide');
            $openRow.find('li.collapse-row').toggleClass('hide');
            $openRow.find('li.expand-row').toggleClass('hide');
        }
        if ('expand' === expand_or_collapse) {
            $openRow.nextUntil('[data-layout="layout_close_row"][data-indent="' + openRowIndentLevel + '"]').removeClass('hide');
            $openRow.find('li.collapse-row').toggleClass('hide');
            $openRow.find('li.expand-row').toggleClass('hide');
        }
    }

    /*——————————————————————————————————————————————————————————
     /  Indentation Handlers/Functions
     ——————————————————————————————————————————————————————————*/

    // Indent on input change
    $('.indent-level input[type="number"]').on('change', function (event) {

        var indent_amount = $(this).val();
        var $layout_div = $(this).parents('.layout');

        indent_layout(indent_amount, $layout_div);
    });

    // Indent on page load
    $('.indent-level input[type="number"]').each(function (index, el) {

        var indent_amount = $(this).val();
        var $layout_div = $(this).parents('.layout');

        indent_layout(indent_amount, $layout_div);
    });

    // Indent function
    function indent_layout(indent_amount, $layout_div) {

        if ('' === indent_amount) {
            indent_amount = '0';
        }

        var multiplier = 30;
        $layout_div.css('margin-left', indent_amount * multiplier);

        $layout_div.attr('data-indent', indent_amount);
    }

    /*——————————————————————————————————————————————————————————
     /  Hidden Layouts
     ——————————————————————————————————————————————————————————*/
    $('.afl-field-hide input[type="checkbox"]').on('change', function (event) {

        var hidden = $(this).is(':checked');
        var $layout_div = $(this).closest('.layout, tr.acf-row');

        toggle_layout_hidden_state(hidden, $layout_div);
    });

    $('.afl-field-hide input[type="checkbox"]').each(function (index, el) {

        var hidden = $(this).is(':checked');
        var $layout_div = $(this).closest('.layout, tr.acf-row');

        toggle_layout_hidden_state(hidden, $layout_div);
    });

    function toggle_layout_hidden_state(hidden, $layout_div) {

        if (true === hidden) {
            $layout_div.addClass('layout--isHidden');
        } else if (false === hidden) {
            $layout_div.removeClass('layout--isHidden');
        }
    }

})(jQuery);
