jQuery(document).ready(function($){
  $('.member-bio').on('show.bs.collapse', function(){
    var member = $(this).attr('id');
    $('.in').each(function(){
      $(this).collapse('hide');
    });

    $('[data-target=".' + member + '"]').addClass('shadow-link');
  });
  $('.member-bio').on('hide.bs.collapse', function(){
    $('.member-image').each(function(){
      $(this).removeClass('shadow-link');
    });
  });
});