$(function () {
  // start

  //   let x;
  //   let y;
  //   $(document).mousemove(function (e) {
  //     x = e.pageX;
  //     y = e.pageY;
  //     $('.onmouse').css('left', x).css('top', y);
  //   });

  const el = $('p');
  el.fadeIn(1000, addNewClass);

  function addNewClass() {
    $('p').addClass('border');
  }

  el.append('<span>test</span>');

  $('li').hover(function () {
    $(this).toggleClass('over');
    $(this).children('a').toggleClass('over-a');
  });
  // .mouseout(function () {
  //   $(this).removeClass('over');
  //   $(this).children('a').removeClass('over-a');
  // });

  //   $('.logo').mousedown(() => {
  //     alert('событие');
  //   });

  $(document).mousemove(function (e) {
    $('.screen').html(`pageX: ${e.pageX} <br> pageY: ${e.pageY}`);
  });

  //end
});
