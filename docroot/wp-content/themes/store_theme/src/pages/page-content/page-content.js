module.exports = function () {
    var $productPage = $('.page-content');
    if ($productPage.length > 0) {
        var $main = $('#main-store_theme');
        $main.append($productPage);
        $main.children(':not(.page-content):not(.woocommerce)').remove();

        var $checkoutButton = $('.checkout-button');
        if ($checkoutButton.length > 0) {
            $checkoutButton.addClass('button--primary');
            var $updateCartButton = $('.woocommerce-cart-form .shop_table tbody tr:last-child .button[name="update_cart"]');
            $updateCartButton.insertBefore($checkoutButton);
        }
    }
}