/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200505
 */

$(function () {
    'use strict';
    $('#videoFile').change(ev => {
        $(ev.target).closest('form').trigger('submit');
    })
});