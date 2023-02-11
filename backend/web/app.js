/**
 * Team:ddl驱动队,NKU
 * coding by songjiazhen 2013904,20230210
 * video相关
 */

$(function () {
    'use strict';
    $('#videoFile').change(ev => {
        $(ev.target).closest('form').trigger('submit');
    })
});