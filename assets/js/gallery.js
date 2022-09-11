$(function () {
  //start
  $('.small a').click(function (e) {
    $('.small a img').removeClass('_active');
    if ($('.big img').attr('src') !== $(this).attr('href')) {
      $('.big img').hide().attr('src', $(this).attr('href')).fadeIn(300);
    }
    if ($('.big img').attr('src') == $(this).attr('href')) {
      $(this).children('img').addClass('_active');
    }
    e.preventDefault();
  });

  $('.button').click(function () {
    $('.gallery').slideToggle(500);
    if ($(this).text() == '-') {
      $(this).text('+');
    } else {
      $(this).text('-');
    }
  });
  //end
});
