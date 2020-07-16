module.exports = function () {
    if ($('#secondary .widget').length > 0 && $('.product-page').length === 0) {
        var $main = $('#main-store_theme');
        $main.addClass('page-sorting container');

        var $storeFrontContainer = $('#primary');
        var $storeFrontSidebar = $('#secondary');

        var $layout = $('<div class="grid"></div>');
        $layout.append('<aside class="page-sorting__sidebar col-shrink_xs-12"></aside>');
        $layout.append('<section class="page-sorting__container col-expand_xs-12"></section>');
        $layout.children('.page-sorting__sidebar').append($storeFrontSidebar.children());
        $storeFrontSidebar.remove();
        $storeFrontContainer.find('.products').addClass('products-container grid-3_xs-1');
        $storeFrontContainer.find('.product').addClass('col');
        
        $layout.children('.page-sorting__container').append($storeFrontContainer.children().children());
        $storeFrontContainer.remove();

        $main.append($layout);

        $storeFrontSidebar = $layout.find('.page-sorting__sidebar');
        $storeFrontSidebar.append('<div class="widget-element"></div>');
        $storeFrontSidebar.append('<div class="widget-element"></div>');
        var $widgets = $storeFrontSidebar.children(':not(.widget-element)');
        var $widgetContainers = $storeFrontSidebar.find('.widget-element');
        $widgetContainers.last().append('<span class="widget-title">Filtros</span>');
        $widgetContainers.last().append($widgets.first().siblings(':not(.widget-element)'));
        $widgetContainers.first().append('<span class="widget-title">Comprar por categoría</span>');
        $widgetContainers.first().append($widgets.first());

        var $filtersBrand = $storeFrontSidebar.find('.pwb-filter-products ul li');
        $filtersBrand.each(function () {
            var $label = $(this).find('label');
            var $input = $(this).find('input');
            
            var customId = Math.random(0, 999);
            $label.attr('for', 'brand-' + customId);
            $input.attr('id', 'brand-' + customId);
            
            $input.insertBefore($label);

            $input.on('change', function () {
                $(this).parent().parent().next().trigger('click');
            })
        });

        var $filtersPrice = $storeFrontSidebar.find('.widget_price_filter');
        var $labelPrice = $filtersPrice.find('.price_label');
        setTimeout(function () {
            $labelPrice.insertBefore($filtersPrice.children().first());
        }, 500);

        var $filterSearch = $storeFrontSidebar.find('.widget_product_search');
        $filterSearch.insertAfter($filterSearch.parent());

        if ($('.pwb-brand-banner-cont').length > 0) {
            $('.woocommerce-products-header__title.page-title').hide();
        }
    }
}
