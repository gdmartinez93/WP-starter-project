module.exports = function () {
    var $inputNumber = $('.store_theme input[type="number"]:not(#billing_dni)');
    if ($inputNumber.length > 0) {
        $inputNumber.each(function () {
            $('<span class="input-number-handler input-number-handler--add">+</span>').insertAfter($(this));
            $('<span class="input-number-handler input-number-handler--less">-</span>').insertAfter($(this));

            function handlerInput($input, action) {
                console.log('value ', $input.val());
                $input.focus();

                if ($input.val() === '') {
                    $input.val(0);
                }

                if (action === 'add') {
                    $input.val(Number($input.val()) + 1);
                } else {
                    $input.val(Number($input.val()) - 1);
                }

                console.log('after ', $input.val());
            }

            var $less = $(this).siblings('span').first();
            $less.on('click', function () {
                handlerInput ($(this).siblings('input'), 'less');
            });
            var $add = $(this).siblings('span').last();
            $add.on('click', function () {
                handlerInput ($(this).siblings('input'), 'add')
            });
        });
    }

    var $selects = $('select');
    $selects.wrap('<div class="select-wrapper"></div>');
    
    setTimeout(function () {
        var $labelTermsConditionsCheckout = $('.woocommerce-terms-and-conditions-checkbox-text').parent();
        if ($labelTermsConditionsCheckout.length > 0) {
            var $checkbox = $labelTermsConditionsCheckout.children('input[type="checkbox"]');
            $checkbox.insertBefore($labelTermsConditionsCheckout);
            $labelTermsConditionsCheckout.attr('for', $checkbox.attr('id'));
        }

        if ($selects.parent().find('.select2-hidden-accessible').length > 0) {
            $selects.parent().addClass('no-arrow');
        }
    }, 2500);
}