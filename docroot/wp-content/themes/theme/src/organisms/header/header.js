import $ from 'jquery';

const $header = $('.o-header');
const $menu = $header.find('.o-header__menu');
const $menuAction = $header.find('.o-header__menu-action');

$menuAction.on('click', 'button', function (event) {
  if ($(this).children().hasClass('is-active')) {
    $(this).children().removeClass('is-active');
  } else {
    $(this).children().removeClass('is-active');
  }
});
