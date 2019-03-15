// alert("Hello world");
$(document).ready(function(){
  $("#nav").change(function() {
    if(this.prop('checked', true)) {
      $("#body").css('overflow','hidden')
    } else {
      $("#body").css('overflow','scroll')
    }
  });
  // $('.home-btn').click(function(){
  //   $('#nav').prop('checked', false);
  //   $('html, body').animate({
  //     scrollTop: $(".hero-section").offset().top
  //   }, 1300)
  // })
  $('.overview-btn').click(function(){
    $('#nav').prop('checked', false);
    $('html, body').animate({
      scrollTop: $(".overview-section").offset().top-62
    }, 1300)
  })
  $('.featured-btn').click(function(){
    $('#nav').prop('checked', false);
    $('html, body').animate({
      scrollTop: $(".featured-section").offset().top-62
    }, 1300)
  })
});
var windowLoc = $(location).attr('pathname');

switch(windowLoc){      
  case "/":
  $(".home-btn").removeAttr("href");
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > $(window).height()-109) {
      $("header").addClass('scrolled');
    } else {
      $("header").removeClass('scrolled');
    }
  })
  $('.home-btn').click(function(){
    $('#nav').prop('checked', false);
    $('html, body').animate({
      scrollTop: $(".hero-section").offset().top-32
    }, 1300)
  })
    break;
  case "/blog/":
  $(document).ready(function(){
    $("header").addClass('scrolled');
  });  
  break;
  case "/projects/":
  $(document).ready(function(){
    $("header").addClass('scrolled');
  });  
  break;
}



