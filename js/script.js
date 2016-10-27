$(document).ready(function(){

  //animation humberger menu
  $(".button-navigation").click(function(){
    $(this).toggleClass("clicked");
    $(".navigation").toggleClass("active");
  });

  //detail popup
  $(".latest-articles article").click(function(){
    $(".detail-popup").addClass("active");
    $(".button-navigation").hide();
    $.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);
  });

  $(".popular-destination .destination").click(function() {
    $(".detail-popup").addClass("active");
    $.fn.fullpage.setMouseWheelScrolling(false);
    $.fn.fullpage.setAllowScrolling(false);
  });

  $(".detail-popup .body .close-button").click(function(){
    $(".detail-popup").removeClass("active");
    $(".button-navigation").show();
    $.fn.fullpage.setMouseWheelScrolling(true);
    $.fn.fullpage.setAllowScrolling(true);
  });

  //gallery slider

  //event prev control slide trigger
  $(".slider-gallery .control .left").click(function(){

    $(".slider-gallery .row-gallery a").each(function(){
      var newValueAtt = + $(this).attr("data-slide") + 1;
      if(newValueAtt == 6){
        newValueAtt = 1;
        $(this).attr("data-slide", newValueAtt);
      }else{
        $(this).attr("data-slide", newValueAtt);
      }

      $(this).removeClass();

      if($(this).attr("data-slide") == 1){
        $(this).children(".caption").addClass("active");
      }else{
        $(this).children(".caption").removeClass("active");
      }

      $(this).addClass("data-slide-"+ newValueAtt +"");
    });
  });

  //event next control slide trigger
  $(".slider-gallery .control .right").click(function(){

    $(".slider-gallery .row-gallery a").each(function(){
      var newValueAtt = $(this).attr("data-slide") - 1;
      if(newValueAtt == 0){
        newValueAtt = 5;
        $(this).attr("data-slide", newValueAtt);
      }else{
        $(this).attr("data-slide", newValueAtt);
      }

      $(this).removeClass();

      if($(this).attr("data-slide") == 1){
        $(this).children(".caption").addClass("active");
      }else{
        $(this).children(".caption").removeClass("active");
      }

      $(this).addClass("data-slide-"+ newValueAtt +"");
    });ytplayer-container
  });

  //gallery popup
  $(".slider-gallery .row-gallery a").click(function(e){
    var url = $(this).attr("href");

    e.preventDefault();
  });

});
