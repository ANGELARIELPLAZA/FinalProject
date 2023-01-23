define(['jquery'], function ($) {
    'use strict'

    return function () {
        $.validator.addMethod(
            'custom-rule-name',
            function (value) {
                if (value != true) {
                    // logic to check validation.
                    return false;
                }
                return true;
            },
            $.mage.__('Your Validation failed. Please enter correct data.')
        );
    }
});