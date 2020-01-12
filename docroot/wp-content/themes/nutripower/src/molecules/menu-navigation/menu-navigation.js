module.exports = function () {
    var $menu = $('.menu-navigation__menu');
    var $navigation = $menu.find('.menu-navigation__menu__sidebar ul li');
    var $content = $menu.find('.menu-navigation__menu__content .content-container');
    $navigation.first().add($content.first()).addClass('is-active');
    
    $navigation.hover(
        function () {
            var index = $(this).index();
            $(this).addClass('is-active').siblings().removeClass('is-active');
            $content.eq(index).addClass('is-active').siblings().removeClass('is-active');
        }
    );
};
