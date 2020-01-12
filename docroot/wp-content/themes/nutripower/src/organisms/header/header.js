module.exports = function () {
    const $header = $('.header');
    const $containerWoo = $header.find('.storefront-container');

    const $search = $header.find('.header__container__search');
    const $searchWoo = $containerWoo.find('.site-search').children();
    $search.append($searchWoo);

    const $actions = $header.find('.header__container__actions');
    const $cartWoo = $(
        `<li class="">
            <a class="cart-contents" href="/carrito" title="View your shopping cart">
                <span class="count">1</span><i class="material-icons">shopping_cart</i>
            </a>
        </li>
    `);
    $cartWoo.addClass('initialized');
    $actions.append($cartWoo);

    const $buttonToggleMenuMobile = $('.header__container__button-toggle');
    const $menuMobile = $('.header__navigation--mobile');
    $buttonToggleMenuMobile.on('click', function () {
        const $element = $(this).children();
        $element.toggleClass('is-active');
        $('#wrapper').toggleClass('is-shown-menu--mobile');
        $('body').toggleClass('no-scroll');

        if ($('#wpadminbar').length > 0) {
            if ($element.hasClass('is-active')) {
                $('#wpadminbar').css({
                    'top': '-46px'
                });
            } else {
                $('#wpadminbar').css({
                    'top': '0px'
                });                
            }
            
        }
    });
    $menuMobile.children().find('li').on('click', function () {
        const $element = $(this);
        $element.toggleClass('is-active');

        const $submenu = $element.children('ul'); 
        if ($submenu.length > 0) {
            $submenu.slideToggle('slow');
            $element.children('a').on('click', function (event) {
                event.preventDefault();
            })
        }
    });

    const $navigation = $('.header__navigation .menu-navigation');
    $navigation.find('.menu-navigation__container > li').addClass('menu-navigation__element col-shirnk_xs-12');
    const $buttonCategories = $('<li class="menu-navigation__element menu-navigation__element--icon col-shrink"></li>');
    $buttonCategories.append('<a href="#"></a>');
    $buttonCategories.children().append('<div class="hamburger hamburger--spring"><div class="hamburger-box"><div class="hamburger-inner"></div></div></div>');
    $buttonCategories.children().append('<span>Categorias</span>');
    $buttonCategories.insertBefore($navigation.find('.menu-navigation__container > li').first());

    const $actionMenuCategories = $('.header__navigation .menu-navigation .menu-navigation__element:first-child');
    const $menuCategories = $('.header__navigation .menu-navigation .menu-navigation__menu');
    $actionMenuCategories.on('click', function () {
        $menuCategories.toggleClass('is-shown');
        $('.site-content').add($('#main-nutripower')).toggleClass('is-overlay');
        $('body').toggleClass('no-scroll');
        $(this).find('.hamburger').toggleClass('is-active');
    });
};
