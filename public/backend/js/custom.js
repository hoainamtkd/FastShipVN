$(document).ready(function(){
  $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");

    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  });
  if ($('.loader-wrapper').length) {
    $('.loader-wrapper').on('click', function() {
      $(this).fadeOut();
    });
  }
  $(window).load(function() {
    if ($('.loader-wrapper').length) {
      $('.loader-wrapper').fadeOut();
    }
  });

  $(document).on('click','.menu-items .menu-name-label',function(e){
    e.preventDefault();
    if($(this).hasClass('open')){
      $(this).removeClass('open');
    }else{
      $(this).addClass('open');
    }
    $(this).parent().find('.body-menu').toggle();
  });


});