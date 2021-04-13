$ = jQuery;
$(document).ready(function () {
  var $header = $('.o-header');
  var $navigation = $header.find('.o-header__navigation');
  
  var $menuAction = $header.find('.o-header__menu-action');
  $menuAction.on('click', 'button', function (event) {
    $(this).children().toggleClass('is-active');

    if ($navigation.length > 0) {
      $navigation.toggleClass('show-menu');
    }
  });
});
