import './bootstrap';

$(document).on('click', '.open-sidebar', function () {
  $('.nav-backdrop').show();
  $('.side-bar').animate({
    transform: 'translateX(0)'
  });
});
$(document).on('click', '.close-sidebar', function () {
  $('.nav-backdrop').hide();

  $('.side-bar').animate({
    transform: 'translateX(-600%)'
  });
});
$(document).on('click', '.nav-backdrop', function () {
  $('.nav-backdrop').hide();

  $('.side-bar').animate({
    transform: 'translateX(-600%)'
  });
});
