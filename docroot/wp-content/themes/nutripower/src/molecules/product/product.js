module.exports = function () {
    var isMobile = window.innerWidth < 768;
    var $products = $('.products .product');
    if ($products.length > 0) {
        $products.each(function () {
            var $linkProduct = $(this).children().first();
            $(this).append($linkProduct.children());
            $linkProduct.text('Ver producto');
            $(this).append('<div class="product__actions grid-middle-center-noGutter"></div>');
            var $actions = $(this).find('.product__actions');
            var $addToCart = $(this).find('.add_to_cart_button');
            $linkProduct.add($addToCart).addClass('button');
            $actions.append($linkProduct).append($addToCart).append('<a href="#" class="button button--primary">Var carrito</a>');
        });
    }

    var $productSections = $('.related.products .products');
    if ($productSections.length > 0) {
        $productSections.each(function (index, section) {
            if ($(this).parent().hasClass('products-container')) {
                return false;
            }

            var $wrapper = $(this).parent();
            $wrapper.append('<div class="container-slider"></div>');
            var $slider = $wrapper.find('.container-slider');
            $slider.append('<div class="swiper-wrapper"></div>');
            var $products = $(this).find('.product');
            if ((isMobile && $products.length > 1) || (!isMobile && $products.length > 4)) {
                $slider.append('<div class="swiper-button-prev"><img src="'+theme_url+'/images/icons/chevron--white.svg"></div>');
                $slider.append('<div class="swiper-button-next"><img src="'+theme_url+'/images/icons/chevron--white.svg"></div>');   
                $slider.append('<div class="swiper-pagination"></div>');
            } else {
                $wrapper.css({
                    'margin-bottom': '0px',
                    'padding-bottom': '0px',
                });
            }
            
            $products.wrap('swiper-slide');
            $slider.find('.swiper-wrapper').append($products);
            $slider.find('ul.products').remove();

            var selector = '.nutripower .' + $wrapper.attr('class').split(' ').join('.');
            if (_.last(selector) === '.') {
                selector = selector.substr(0, selector.length - 1);
            }

            var configSlider = {
                slidesPerView: window.innerWidth < 768 ? 'auto' : 4,
                pagination: {
                    el: selector + ' .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: selector + ' .swiper-button-next',
                    prevEl: selector + ' .swiper-button-prev',
                },
            }

            var slider = new Swiper(selector  + ' .container-slider', configSlider);

            setTimeout(function () {
                $products.css('height', $wrapper.height());
            }, 500);
        });
    }
}