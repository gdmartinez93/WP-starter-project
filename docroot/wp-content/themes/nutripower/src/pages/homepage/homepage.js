module.exports = function () {
    var isMobile = window.innerWidth < 768;
    var $homepage = $('.homepage');
    if ($homepage.length > 0) {    
        var $slider = $homepage.find('.homepage__slider');
        if ($slider.length > 0) {
            var sliderHomePage = new Swiper('.homepage__slider', {
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.homepage__slider .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            window.slider = sliderHomePage;
        }

        var $onSaleProducts = $homepage.find('.on-sale-products');
        if ($onSaleProducts.length > 0) {
            var $products = $onSaleProducts.find('.product');
            $products.addClass('swiper-slide');
            $onSaleProducts.find('.woocommerce').append($products);
            
            var onSaleSlider = new Swiper('.on-sale-products .container-slider', {
                equalHeight: true,
                simulateTouch: false,
                slidesPerView: window.innerWidth >= 768 ? 4 : 'auto',
                navigation: {
                    nextEl: '.on-sale-products .swiper-button-next',
                    prevEl: '.on-sale-products .swiper-button-prev',
                },
                pagination: {
                    el: '.on-sale-products .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            if ((isMobile && $products.length <= 1) || (!isMobile && $products.length <= 4)) {
                $onSaleProducts.find('.swiper-button-prev, .swiper-button-next, .swiper-pagination').hide();
                $onSaleProducts.css('padding-bottom', '0px');
            }
        }

        var $featuredProducts = $homepage.find('.featured-products');
        if ($featuredProducts.length > 0) {
            var $products = $featuredProducts.find('.product');
            $products.addClass('swiper-slide');
            $featuredProducts.find('.woocommerce').append($products);
            
            var featuredSlider = new Swiper('.featured-products .container-slider', {
                equalHeight: true,
                simulateTouch: false,
                slidesPerView: window.innerWidth >= 768 ? 4 : 'auto',
                navigation: {
                    nextEl: '.featured-products .swiper-button-next',
                    prevEl: '.featured-products .swiper-button-prev',
                },
                pagination: {
                    el: '.featured-products .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            if ((isMobile && $products.length <= 1) || (!isMobile && $products.length <= 4)) {
                $featuredProducts.find('.swiper-button-prev, .swiper-button-next, .swiper-pagination').hide();
                $featuredProducts.css('padding-bottom', '0px');
            }
        }

        var productHorizontal = function ($products) {
            $products.each(function () {
                var $image = $(this).find('img');
                $image.wrap('<figure class="col-shrink"></figure>');
                var $content = $('<div class="content col-expand"></div>');
                $content.append($(this).find('.woocommerce-loop-product__title'));
                $content.append($(this).find('.star-rating'));
                $content.append($(this).find('.price'));
                $(this).addClass('grid').append($content);
            });
        }

        var $newProducts = $homepage.find('.new-products');
        if ($newProducts.length > 0) {
            var $products = $newProducts.find('.product');
            productHorizontal($products);
            $products.addClass('swiper-slide');
            $newProducts.find('.woocommerce').append($products);
            $newProducts.find('ul.products').remove();

            var newSlider = new Swiper('.new-products .container-slider', {
                simulateTouch: false,
                slidesPerView: window.innerWidth >= 768 ? 1 : 'auto',
                slidesPerColumn: window.innerWidth >= 768 ? 4 : 1,
                pagination: {
                    el: '.new-products .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            if ((isMobile && $products.length <= 1) || (!isMobile && $products.length <= 4)) {
                $newProducts.find('.swiper-pagination').hide();
                $newProducts.find('.container-slider').css('padding-bottom', '0px');
            }
        }
        var $bestSellingProducts = $homepage.find('.best-selling');
        if ($bestSellingProducts.length > 0) {
            var $products = $bestSellingProducts.find('.product');
            productHorizontal($products);
            $products.addClass('swiper-slide');
            $bestSellingProducts.find('.woocommerce').append($products);
            $bestSellingProducts.find('ul.products').remove();
            
            var bestSellingSlider = new Swiper('.best-selling .container-slider', {
                simulateTouch: false,
                slidesPerView: window.innerWidth >= 768 ? 1 : 'auto',
                slidesPerColumn: window.innerWidth >= 768 ? 4 : 1,
                navigation: {
                    nextEl: '.best-selling .swiper-button-next',
                    prevEl: '.best-selling .swiper-button-prev',
                },
                pagination: {
                    el: '.best-selling .swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
            });

            if ((isMobile && $products.length <= 1) || (!isMobile && $products.length <= 4)) {
                $bestSellingProducts.find('.swiper-pagination').hide();
                $bestSellingProducts.find('.container-slider').css('padding-bottom', '0px');
            }
        }

        var $brands = $homepage.find('.brands');
        if ($brands.length > 0) {            
            var brandsSlider = new Swiper('.brands .container-slider', {
                simulateTouch: false,
                equalHeight: true,
                slidesPerView: window.innerWidth >= 768 ? 'auto' : 2,
                spaceBetween: 60,
                navigation: {
                    nextEl: '.brands .swiper-button-next',
                    prevEl: '.brands .swiper-button-prev',
                },
            });

            var $slides = $('.brands .container-slider .swiper-slide');
            if ((isMobile && $slides.length <= 1) || (!isMobile && $slides.length <= 4)) {
                $brands.find('.swiper-button-prev, .swiper-button-next').hide();
            }
        }
    }
}
