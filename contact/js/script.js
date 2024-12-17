$(function(){

  $submitButton = $('.submit_button');
  $main_color = '#333';
  function privacyCheck () {
    if($('[name="privacy"]').prop('checked')) {
      $submitButton
      .animate({
        backgroundColor : $main_color,
        'color': '#fff'
      }, 500 )
      .css({
        'pointer-events' : 'all'
      });
    } else {
      $submitButton
      .animate({
        backgroundColor : '#888',
        'color': '#aaa',
      }, 500 )
      .css({
        'pointer-events' : 'none'
      });
    };
  }

  privacyCheck();

  $('[name="privacy"]').on('click', function(){
    if($('[name="privacy"]').prop('checked')) {
      $submitButton
      .animate({
        backgroundColor : $main_color,
        'color': '#fff'
      }, 500 )
      .css({
        'pointer-events' : 'all'
      });
    } else {
      $submitButton
      .animate({
        backgroundColor : '#888',
        'color': '#aaa',
      }, 500 )
      .css({
        'pointer-events' : 'none'
      });
    };
  });
});
