module.exports = function () {
    var $productPage = $('.product-page');
    if ($productPage.length > 0) {
        var $main = $('#main-nutripower');
        $main.append($productPage);
        $main.children(':not(.product-page):not(.woocommerce)').remove();

        var $gallery = $productPage.find('.woocommerce-product-gallery');
        if (window.innerWidth >= 768) {
            var $thumbs = $gallery.find('.woocommerce-product-gallery__image');
            var heightHighest = 0;
            
            $thumbs.each(function () {
                var $image = $(this).find('img');
                if ($image.height() > heightHighest) {
                    heightHighest = $image.height();
                }
            });

            $gallery.css({
                'height': heightHighest + 'px'
            });

            $thumbs.each(function () {
                var $image = $(this).find('img');

                if ($image.height() !== heightHighest) {
                    $(this).css({
                        'position': 'relative',
                        'top': (heightHighest - $image.height()) / 2 + 'px'
                    })
                }
            });
        }

        var $summary = $productPage.find('.summary');
        var $shareActions = $productPage.find('.storefront-product-sharing');
        $('<a><i class="material-icons">share</i></a>').insertBefore($shareActions.children());
        $('<a href="/index.php/cart" class="button view-cart">Ver carrito</a>').insertBefore($shareActions);
        var $viewCart = $productPage.find('.view-cart');
        var $cart = $summary.find('.cart');
        $('<div class="product-actions summary"></div>').insertAfter($summary);
        var $actions = $productPage.find('.product-actions');
        $actions.append($cart).append($viewCart).append($shareActions);

        // traductions
        var $stickyBarInfo = $('.storefront-sticky-add-to-cart');
        var $titleStickyBarInfo = $stickyBarInfo.find('.storefront-sticky-add-to-cart__content-title');
        var $nameProductStickyBarInfo = $titleStickyBarInfo.children();
        $titleStickyBarInfo.html('');
        $titleStickyBarInfo.text('Estas viendo: ');
        $titleStickyBarInfo.append('<span>' + $nameProductStickyBarInfo.text() + '</span>');
    }
}