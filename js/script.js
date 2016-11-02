$(document).ready(function(){

  //animation humberger menu
  $(".button-navigation").click(function(){
    $(this).toggleClass("clicked");
    $(".navigation").toggleClass("active");
  });

  //detail popup
  $(".latest-articles article").click(function(){
    $(".latest-articles .detail-popup").addClass("active");
    $(".button-navigation").hide();
    $.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);
  });

  $(".latest-articles .detail-popup .close-button").click(function(){
    $(".latest-articles .detail-popup").removeClass("active");
    $(".button-navigation").show();
    $.fn.fullpage.setMouseWheelScrolling(true);
    $.fn.fullpage.setAllowScrolling(true);
  });

  $(".popular-destination .destination").click(function(){
    $(".popular-destination .detail-popup").addClass("active");
    $(".button-navigation").hide();
    $.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);
  });

  $(".popular-destination .detail-popup .close-button").click(function(){
    $(".popular-destination .detail-popup").removeClass("active");
    $(".button-navigation").show();
    $.fn.fullpage.setMouseWheelScrolling(true);
    $.fn.fullpage.setAllowScrolling(true);
  });
});
