jQuery(document).ready(function($){
  $('.member-bio').on('show..bs.collapse', function(){
    var member = $(this).attr('id');
    $('.in').each(function(){
      $(this).collapse('hide');
    });

    $('.member-image').each(function(){
      $(this).removeClass('shadow-link');
    });

    $('[data-target=".' + member + '"]').addClass('shadow-link');
  });
});